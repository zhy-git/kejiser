<?php
global $_W,$_GPC;
$this->load("Lscloud_Base");
load()->func('tpl');
$cfg= $this->module['config'];
$chat_type = $cfg['chat_type'];
$uniacid=$_W['uniacid'];
$op=$_GPC['op'] ? $_GPC['op'] :'add';
$vidio=pdo_fetch("select * from ".tablename('chat_qc_setting')." where uniacid=:uniacid",array(":uniacid"=>$uniacid));
$letvlist=pdo_get("chat_qc_ls",array("uniacid"=>$uniacid));

   

if($op=='list'){
    $lscloud_base=new Lscloud_Base($letvlist["userid"],$letvlist["uuid"],$letvlist["ls_key"]);
    $searchParams["method"] = $lscloud_base::$app_list_url;
    $searchObj=$lscloud_base->setApp($searchParams);
    $total=count($searchObj);
    foreach($searchObj as $k=>$v){
        $topic = pdo_get("chat_topic",array("activityid"=>$v['activityId']));
        if($topic){
            $searchObj[$k]['topic_name']=$topic['topic_name'];
        } 
    }
}
    if(checksubmit()){
        if($_GPC['chat_type']=='tencent'){
             $id=$_GPC['vid'];
            $data=array(
                'uniacid'=>$uniacid,
                'appid'=>$_GPC['appid'],
                'bizid'=>$_GPC['bizid'],
            	"key"=>$_GPC["key"],
            	"APIkey"=>$_GPC["APIkey"],
            	"secretid"=>$_GPC["secretid"],
                'create_time'=>time()
            );
            if(empty($id)){
                pdo_insert('chat_qc_setting',$data);
            }else{
                pdo_update('chat_qc_setting',$data,array('id'=>$id));
            }
        }
        if($_GPC['chat_type']=='letv'){
            $id=$_GPC['lsid'];
            $data=array(
                'uniacid'=>$uniacid,
                'userid'=>$_GPC['userid'],
                'uuid'=>$_GPC['uuid'],
                "ls_key"=>$_GPC["ls_key"],
                'create_time'=>time()
            );
            if(empty($id)){
                pdo_insert('chat_qc_ls',$data);
            }else{
                pdo_update('chat_qc_ls',$data,array('id'=>$id));
            }
        }
        message('设置成功',"", 'success');
    }


include $this->template('chat_vedio');