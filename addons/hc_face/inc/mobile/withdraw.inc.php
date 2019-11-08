<?php
    defined('IN_IA') or exit('Access Denied');
    require_once IA_ROOT."/addons/hc_face/inc/model/functions.php"; 
    global $_GPC, $_W;
    $weid = $_W['uniacid'];
    $uid = $_COOKIE['uid'];
    $cash = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'cash'.$weid),array('value')),'true');
    if($_GPC['act']=='cash'){
        $minmoney = $cash['min'];
        $maxmoney = $cash['max'];
        $feerate  = $cash['fee'];
        $cashtype = $cash['type'];

        $basic = json_decode(pdo_getcolumn('hcface_setting',array('only'=>'basic'.$weid),array('value')),'true'); 

        $where = array(
            'user_id'=>$uid,
            'status'=>0,
            'freeze'=>0,
            'createtime <'=>time()
        );
        $cashmoney= pdo_getcolumn('hcface_commission',$where,array('sum(profit)'));
        $openid = pdo_getcolumn('hcface_users',array('uid'=>$uid),array('openid'));
        $transid = date('Ymdhis').rand(11111,99999);
        $fee = round($cashmoney*$feerate/100,2);
        $money = $cashmoney-$fee;

        if($cashtype==1){
            if($cashmoney<$minmoney){
                exit(json_encode(array('code'=>1,'msg'=>'最低提现金额'.$minmoney.'元')));
            }else{
                $undeal = pdo_get('hcface_cash',array('uid'=>$uid,'status'=>0));
                if(!empty($undeal)){
                    exit(json_encode(array('code'=>1,'msg'=>'您有待处理的提现请求，请联系客服处理后再试')));
                }else{
                   pdo_insert(
                        'hcface_cash',
                        array(
                            'weid'=> $weid,
                            'uid'=>$uid,
                            'transid'=>$transid,
                            'money'=>$cashmoney,
                            'fee'=>$fee,
                            'type'=>1,
                            'status'=>0,
                            'createtime'=>time()
                        )
                    );
                    pdo_update('hcface_commission',array('freeze'=>1),$where);
                    exit(json_encode(array('code'=>0,'msg'=>'提现请求已发送')));
                }
            }
        }else{
            if($cashmoney>=$minmoney && $cashmoney<$maxmoney){
                load()->model('payment');
                load()->model('account');
                $setting = uni_setting($_W['uniacid'], array('payment'));
                $mch_appid = $_W['account']['key'];
                $signkey = $setting['payment']['wechat']['signkey'];
                $mchid  = $setting['payment']['wechat']['mchid'];
                $model = new HcfkModel();
                $pars = array();
                $url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';
                $pars['mch_appid'] = $mch_appid;
                $pars['mchid'] = $mchid;
                $pars['nonce_str'] = random(32);
                $pars['partner_trade_no'] = $transid;
                $pars['openid'] = $openid;
                $pars['check_name'] = 'NO_CHECK';
                $pars['amount'] = intval($money * 100);
                $pars['desc'] = "余额提现";
                $pars['spbill_create_ip'] = $model->get_client_ip();
                $pars['sign'] = $model->getSign($pars,$signkey);

                $xml = $model->array2xml($pars);
                $cert = array(
                    'CURLOPT_SSLCERT' => IA_ROOT ."/addons/hc_face/cert/apiclient_cert_".$weid.".pem",
                    'CURLOPT_SSLKEY'  => IA_ROOT ."/addons/hc_face/cert/apiclient_key_".$weid.".pem",
                );
                $resp = ihttp_request($url, $xml, $cert);
                $res = $model->xmlstr_to_array($resp['content']);

                if($res['result_code'] == 'FAIL'){
                    exit(json_encode(array('code'=>1,'msg'=>'提现失败'.$res['err_code_des'])));
                }else{
                    pdo_insert(
                        'hcface_cash',
                        array(
                            'weid'=> $weid,
                            'uid'=>$uid,
                            'transid'=>$transid,
                            'money'=>$cashmoney,
                            'fee'=>$fee,
                            'status'=>1,
                            'createtime'=>time()
                        )
                    );
                    pdo_update('hcface_commission',array('status'=>1),$where);
                    exit(json_encode(array('code'=>2,'msg'=>'提现成功')));
                }
            }elseif($cashmoney>=$maxmoney){
                $undeal = pdo_get('hcface_cash',array('uid'=>$uid,'status'=>0));
                if(!empty($undeal)){
                    exit(json_encode(array('code'=>1,'msg'=>'您有待处理的提现请求，请联系客服处理后再试')));
                }else{
                   pdo_insert(
                        'hcface_cash',
                        array(
                            'weid'=> $weid,
                            'uid'=>$uid,
                            'transid'=>$transid,
                            'money'=>$cashmoney,
                            'fee'=>$fee,
                            'status'=>0,
                            'createtime'=>time()
                        )
                    );
                    pdo_update('hcface_commission',array('freeze'=>1),$where);
                    exit(json_encode(array('code'=>0,'msg'=>'提现请求已发送')));
                }
            }else{
                exit(json_encode(array('code'=>1,'msg'=>'最低提现金额'.$minmoney.'元')));
            }
        }
    }else{
        $where = array(
            'user_id'=>$uid,
            'status'=>0,
            'freeze'=>0
        );
        $profit = pdo_getcolumn('hcface_commission',$where,array('sum(profit)'));
        $fee = $profit*$cash['fee']/100;
        include $this->template('withdraw');
    }