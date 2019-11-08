<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>
    .set_div{
        display: none;
    }
    .help-block{
        color: red !important;
    }
    .nav-border{
        border: 1px solid #e2d5d5;
        margin: 10px;
        padding: 10px;
    }
    .input-control{
        height:34px;
        line-height: 34px;
        border-radius: 0;
        box-shadow: 0 0 0;
        text-shadow: 0 0 0;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
    }
    .contain{
        margin-top: 10px;
    }
</style>
<ul class="nav nav-tabs" id="snav">
    <li class="active"><a>基础设置</a></li>
    <li><a>百度AI设置</a></li>
    <li><a>支付设置</a></li>
    <li><a>转发设置</a></li>
    <li><a>分销设置</a></li>
    <li><a>提现设置</a></li>
    <li><a>解锁设置</a></li>
</ul>
<script>
    $('#snav li').click(function(){
        $('#snav li').removeClass('active');
        $(this).addClass('active');
        $('.set_div').hide();
        $('.set_div').eq($(this).index()).show();
    });
</script>
<div class="panel-body">
<form class="form-horizontal" id="form1" method="post" action="" enctype="multipart/form-data">
    <div class="panel panel-default set_div" style="display: block;">
        <div class="panel-heading">基础设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">程序名字：</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="basic[title]" value="<?php  echo $set['basic']['title'];?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">算术API阀值</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="basic[appid]" value="<?php  echo $set['basic']['appid'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">算术secret秘钥</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="basic[appkey]" value="<?php  echo $set['basic']['appkey'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">程序说明：</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="5" name="basic[remark]"><?php  echo $set['basic']['remark'];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">用户隐私协议：</label>
                <div class="col-xs-8">
                    <?php  echo tpl_ueditor('basic[explain]',$set['basic']['explain']);?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号关注描述：</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="basic[desc]" value="<?php  echo $set['basic']['desc'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">公众号二维码：</label>
                <div class="col-xs-8">
                    <?php  echo tpl_form_field_image('basic[qrcode]',$set['basic']['qrcode']);?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">客服二维码：</label>
                <div class="col-xs-8">
                    <?php  echo tpl_form_field_image('basic[kfqrcode]',$set['basic']['kfqrcode']);?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">百度AI设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">APP_ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="baidu[app_id]" value="<?php  echo $set['baidu']['app_id'];?>">
                    <div class='help-block'>APP_ID</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">API_KEY</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="baidu[api_key]" value="<?php  echo $set['baidu']['api_key'];?>">
                    <div class='help-block'>API_KEY</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">SECRET_KEY</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="baidu[secret_key]" value="<?php  echo $set['baidu']['secret_key'];?>">
                    <div class='help-block'>SECRET_KEY</div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">支付设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">支付方式</label>
                <div class="col-sm-9 col-xs-12">
                    <label class="radio radio-inline">
                        <input type="radio" value="0" class="paytype" <?php  if(empty($set['pay']['paytype'])) { ?>checked=""<?php  } ?> name="pay[paytype]">微信支付
                    </label>
                    <label class="radio radio-inline">
                        <input type="radio" value="1" class="paytype" <?php  if($set['pay']['paytype']==1) { ?>checked=""<?php  } ?> name="pay[paytype]">FastPay
                    </label>
                    <div class="help-block fastpay">
                        FastPay使用如下：<br/>
                            1.FastPay官网 <a target="_blank" href="http://api.hxs823.cn/">http://api.hxs823.cn/</a> ，请自行接入<br/>
                            2.将FastPay支付——用户->你的appkey,你的secret key分别复制到下方
                    </div>
                </div>
            </div>
            <div class="form-group fastpay">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">appkey</label>
                <div class="col-sm-9 col-xs-12">
                    <input type="text" class="form-control" name="pay[appkey]" value="<?php  echo $set['pay']['appkey'];?>">
                </div>
            </div>
            <div class="form-group fastpay">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">secretkey</label>
                <div class="col-sm-9 col-xs-12">
                    <input type="text" class="form-control" name="pay[secretkey]" value="<?php  echo $set['pay']['secretkey'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">免费报告次数</label>
                <div class="col-sm-2">
                    <input class='form-control' name='pay[free_num]' value="<?php  echo $set[pay]['free_num'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">报告获取金额</label>
                <div class="col-sm-2">
                    <input class='form-control' name='pay[report_money]' value="<?php  echo $set[pay]['report_money'];?>">
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">转发设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">转发标题</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="forward[title]" value="<?php  echo $set['forward']['title'];?>">
                    <div class='help-block'>公众号转发标题</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">转发副标题</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="forward[ctitle]" value="<?php  echo $set['forward']['ctitle'];?>">
                    <div class='help-block'>公众号副标题</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">转发图片</label>
                <div class="col-sm-9">
                    <?php  echo tpl_form_field_image('forward[img]',$set['forward']['img'])?>
                    <div class='help-block'>公众号转发图片；宽度117*120像素</div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">分销设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销等级：</label>
                <div class="col-sm-9" style="line-height: 34px;">
                    <input type="radio" name="fenxiao[level]" <?php  if(empty($set['fenxiao']['level'])) { ?>checked="checked"<?php  } ?> value="0">关闭
                    <input type="radio" name="fenxiao[level]" <?php  if($set['fenxiao']['level']==1) { ?>checked="checked"<?php  } ?> value="1">一级
                    <input type="radio" name="fenxiao[level]" <?php  if($set['fenxiao']['level']==2) { ?>checked="checked"<?php  } ?> value="2">二级
                    <input type="radio" name="fenxiao[level]" <?php  if($set['fenxiao']['level']==3) { ?>checked="checked"<?php  } ?> value="3">三级
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">初级会员名称：</label>
                <div class="input-group col-xs-6">
                    <span class="input-group-addon">名称</span>
                    <input type="text" class="form-control" name="fenxiao[grade][0][grade]" value="<?php  echo $set['fenxiao'][grade][0]['grade'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">中级代理名称：</label>
                <div class="input-group col-xs-6">
                    <span class="input-group-addon">名称</span>
                    <input type="text" class="form-control" name="fenxiao[grade][1][grade]" value="<?php  echo $set['fenxiao'][grade][1]['grade'];?>">
                    <span class="input-group-addon">升级需支付</span>
                    <input type="text" class="form-control" name="fenxiao[grade][1][money]" value="<?php  echo $set['fenxiao'][grade][1]['money'];?>" style="text-align: center;">
                    <span class="input-group-addon">元</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">中级代理入口图片：</label>
                <div class="input-group col-xs-6">
                    <?php  echo tpl_form_field_image('fenxiao[grade][1][pic]',$set['fenxiao'][grade][1]['pic']);?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">高级代理名称：</label>
                <div class="input-group col-xs-6">
                    <span class="input-group-addon">名称</span>
                    <input type="text" class="form-control" name="fenxiao[grade][2][grade]" value="<?php  echo $set['fenxiao'][grade][2]['grade'];?>">
                    <span class="input-group-addon">升级需支付</span>
                    <input type="text" class="form-control" name="fenxiao[grade][2][money]" value="<?php  echo $set['fenxiao'][grade][2]['money'];?>" style="text-align: center;">
                    <span class="input-group-addon">元</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">高级代理入口图片：</label>
                <div class="input-group col-xs-6">
                    <?php  echo tpl_form_field_image('fenxiao[grade][2][pic]',$set['fenxiao'][grade][2]['pic']);?>
                </div>
            </div>
                <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">初级分销比例：</label>
                <div class="input-group col-xs-8">
                    <span class="input-group-addon">一级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][0][commission1]" value="<?php  echo $set['fenxiao'][commission][0]['commission1'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 二级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][0][commission2]" value="<?php  echo $set['fenxiao'][commission][0]['commission2'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 三级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][0][commission3]" value="<?php  echo $set['fenxiao'][commission][0]['commission3'];?>" style="text-align: center;">
                    <span class="input-group-addon">%</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">中级分销比例：</label>
                <div class="input-group col-xs-8">
                    <span class="input-group-addon">一级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][1][commission1]" value="<?php  echo $set['fenxiao'][commission][1]['commission1'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 二级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][1][commission2]" value="<?php  echo $set['fenxiao'][commission][1]['commission2'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 三级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][1][commission3]" value="<?php  echo $set['fenxiao'][commission][1]['commission3'];?>" style="text-align: center;">
                    <span class="input-group-addon">%</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">高级分销比例：</label>
                <div class="input-group col-xs-8">
                    <span class="input-group-addon">一级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][2][commission1]" value="<?php  echo $set['fenxiao'][commission][2]['commission1'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 二级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][2][commission2]" value="<?php  echo $set['fenxiao'][commission][2]['commission2'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 三级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][2][commission3]" value="<?php  echo $set['fenxiao'][commission][2]['commission3'];?>" style="text-align: center;">
                    <span class="input-group-addon">%</span>
                </div>
                <div class='help-block' style="margin-left: 16%;">
                    1.系统提供默认比例，仅供参考。可以根据自己运营实际情况修改比例。修改比例后，只对新用户分销生效。<br/>
                    2.如果开启二级分销，无需填写初级、中级、高级的三级比例。<br/>
                    同理如果开启一级分销，无需填写初级、中级、高级的二级比例、三级比例。
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销比例：</label>
                <div class="input-group col-xs-8">
                    <span class="input-group-addon">一级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][0]" value="<?php  echo $set['fenxiao']['commission']['0'];?>" style="text-align: center;">
                    <span class="input-group-addon">% | 二级</span>
                    <input type="text" class="form-control" name="fenxiao[commission][1]" value="<?php  echo $set['fenxiao']['commission']['1'];?>" style="text-align: center;">
                    <span class="input-group-addon">%</span>
                </div>
            </div> -->
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">推广二维码背景图</label>
                <div class="col-sm-9">
                    <?php  echo tpl_form_field_multi_image('fenxiao[bgimg]',$set['fenxiao']['bgimg'])?>
                    <div class='help-block'>建议尺寸 1080*1440 像素</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">大流量渠道合作图</label>
                <div class="col-sm-9">
                    <?php  echo tpl_form_field_image('fenxiao[recimg]',$set['fenxiao']['recimg'])?>
                    <div class='help-block'>提供的默认图上没有个人微信二维码，可另存为下来图片，用美图秀秀或者PS将自己的微信二维码合成，重新上传即可。</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">海报二维码域名：</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fenxiao[purl]" value="<?php  echo $set['fenxiao']['purl'];?>"placeholder="例：http://www.baidu.com">
                    <div class='help-block'>
                        如果域名做了SSL证书，请在域名前面加上https://；如果没有做SSL证书，请在域名前面添加http://<br/>
                        如果该域名设置了，海报二维码将使用这个域名生成，否则使用当前域名<br/>
                        建议给海报二维码配置单独一个域名，避免域名被封后，分享出去的海报失效；请配合下面落地域名使用<br/>
                        系统后台->公众号->参数配置->借用权限 设置oAuth独立域名 填上你微信后台设置的网页授权域名
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码落地域名：</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fenxiao[durl]" value="<?php  echo $set['fenxiao']['durl'];?>" placeholder="例：http://www.baidu.com;https://www.qq.com;http://www.163.com">
                    <div class='help-block'>
                        如果域名做了SSL证书，请在域名前面加上https://；如果没有做SSL证书，请在域名前面添加http://<br/>
                        扫描二维码时，将会跳转到落地域名来打开，域名最多3个，多个请以分号(;)隔开；不要跟当前域名和二维码域名一样<br/>
                        这里的域名都必须到微信公众号后台->公众号设置->功能设置->填写JS接口安全域名<br/>
                        这里的域名都必须到微信支付后台->产品中心->开发配置 填写支付授权目录
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">提现设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现方式：</label>
                <div class="col-sm-9" style="line-height: 34px;">
                    <input type="radio" name="cash[type]" <?php  if(empty($set['cash']['type'])) { ?>checked <?php  } ?> value="0">零钱到账
                    <input type="radio" name="cash[type]" <?php  if($set['cash']['type']==1) { ?>checked <?php  } ?> value="1">收款码收款
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">满多少需审核</label>
                <div class="col-sm-2">
                    <input class='form-control' name='cash[max]' value="<?php  echo $set[cash]['max'];?>">
                </div>
            </div>
    
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">满多少可提现</label>
                <div class="col-sm-2">
                    <input class='form-control' name='cash[min]' value="<?php  echo $set[cash]['min'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现手续费%</label>
                <div class="col-sm-2">
                    <input class='form-control' name='cash[fee]' value="<?php  echo $set[cash]['fee'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商户支付证书</label>
                <div class="col-sm-8 col-xs-12">
                    <textarea class="form-control" name="apiclient_cert" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                    <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_cert.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">支付证书私钥</label>
                <div class="col-sm-8 col-xs-12">
                    <textarea class="form-control" name="apiclient_key" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                    <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_key.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default set_div">
        <div class="panel-heading">解锁设置</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">邀请解锁开关：</label>
                <div class="col-sm-9" style="line-height: 34px;">
                    <input type="radio" name="lock[type]" <?php  if(empty($set['lock']['type'])) { ?>checked <?php  } ?> value="0">关闭
                    <input type="radio" name="lock[type]" <?php  if($set['lock']['type']==1) { ?>checked <?php  } ?> value="1">开启
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">邀请几人解锁：</label>
                <div class="col-sm-2">
                    <input class='form-control' name='lock[num]' value="<?php  echo $set[lock]['num'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注公众号解锁开关：</label>
                <div class="col-sm-9" style="line-height: 34px;">
                    <input type="radio" name="lock[app]" <?php  if(empty($set['lock']['app'])) { ?>checked <?php  } ?> value="0">关闭
                    <input type="radio" name="lock[app]" <?php  if($set['lock']['app']==1) { ?>checked <?php  } ?> value="1">开启
                    <span class="help-block">
                        本功能开关只适用于微信端新用户第一次关注公众号免费获取报告。<br/>
                        不适用于浏览器端，浏览器端仅遵循支付设置—填写的免费报告次数。
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注公众号二维码：</label>
                <div class="col-sm-6">
                    <?php  echo tpl_form_field_image('lock[qrcode]',$set['lock']['qrcode'])?>
                    <div class='help-block'>公众号转发图片；宽度500*500像素</div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注公众号回复解锁：</label>
                <div class="col-sm-6">
                    <input class='form-control' name='lock[reply]' value="<?php  echo $set[lock]['reply'];?>">
                    <span class="help-block">
                        1.请在“应用入口”—“报告链接”—"编辑"下设置触发关键字；封面；描述<br/>
                        2.此处填写的“关注公众号回复解锁”要和“应用入口”—“报告链接”—"编辑"下设置触发关键字相同。
                    </span>
                </div>
            </div>

        </div>
    </div>

    <input name="submit" type="button" id="submit_info" value="提交" class="btn btn-primary" />
    <!-- <a class="btn btn-danger" id="init" >一键初始化</a> -->

    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />

</form>
<script type="text/javascript">
$(function(){
    var paytype = '<?php  echo $set['pay']['paytype'];?>';
    if(paytype==1){
        $(".fastpay").show()
    }else{
        $(".fastpay").hide()
    }
    $(".paytype").change(function(){
        if($(this).val()==1){
            $(".fastpay").show()
        }else{
            $(".fastpay").hide()
        }
    });


    $("#submit_info").click(function(){
        $.ajax({
            type: "POST",
            url: "<?php  echo $this->createWebUrl('set',array('act'=>submit));php?>",
            data: $('#form1').serialize(),
            dataType: "json",
            success: function(data){
                alert('编辑成功');
            }
        });
    });

});
</script>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>