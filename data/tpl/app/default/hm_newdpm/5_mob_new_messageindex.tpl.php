<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
    <title><?php  echo $fashb['big_mobtitle'];?>大屏幕</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/util.js"></script>
    <!--<script src="<?php  echo $_W['siteroot'];?>app/resource/js/app/config.js"></script>-->
    <!--<script src="<?php  echo $_W['siteroot'];?>app/resource/js/require.js"></script>-->
    <!--<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js"></script>-->
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js"></script>
    <script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/common.js"></script>
    <script  type="text/javascript" src="../addons/hm_newdpm/imgs/js/wmPhone.js?r=8"></script>
    <link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/imgs/css/wmPhone.css?r=7"/>
    <script src="../addons/hm_newdpm/new_messages/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/mzh.funlink.min.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/exif.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/imgs/js/uploadImage.js"></script>
    <script src="../addons/hm_newdpm/new_messages/fastclick.min.js"></script>
    <script src="../addons/hm_newdpm/new_messages/fish_widget.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/mobimg/lrz.mobile.min.js"></script>
    <script>
        isadmin = '<?php  echo $is_admin;?>';
        user_id='<?php  echo $fans['from_user'];?>';

    </script>
    <script type="text/javascript">

        window.sysinfo = {
        <?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
        <?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?><?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
        <?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
        'siteroot': '<?php  echo $_W['siteroot'];?>',
            'siteurl': '<?php  echo $_W['siteurl'];?>',
            'attachurl': '<?php  echo $_W['attachurl'];?>',
            'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
            'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
            <?php  if(defined('MODULE_URL')) { ?>'MODULE_URL': '<?php echo MODULE_URL;?>',<?php  } ?>
        'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'}
        };


    </script>
    <script>
        var go_Getmsg = "<?php  echo $this->createMobileUrl("Getmsg", array('rid' => $rid,'uid'=>$fans['from_user'],'op'=>'new'))?>";
        var go_sendmsg = "<?php  echo $this->createMobileUrl("sendmsg", array('rid' => $rid,'uid'=>$fans['from_user']))?>";
        var go_UploadImage="<?php  echo $this->createMobileUrl('UploadImage',array('rid' => $rid));?>";
        var load_history_msg_url="<?php  echo $this->createMobileUrl("GetHistoryMsg", array('rid' => $rid,'uid'=>$fans['from_user']))?>";
        var uploadImg="<?php  echo $this->createMobileUrl("uploadimg", array('rid' => $rid))?>";
        var go_makefriends="<?php  echo $this->createMobileUrl("m_friends", array('rid' => $rid,'from_user'=>$fans['from_user']))?>";
        var go_Confirm_bp="<?php  echo $this->createMobileUrl('Confirm_bp',array('token'=>'onBridge','id'=>$rid,'from_user'=>$page_from_user))?>";
        var go_Confirm_dpmhb="<?php  echo $this->createMobileUrl('Confirm_dpmhb',array('token'=>'onBridge','id'=>$rid,'from_user'=>$page_from_user))?>";
        var go_Confirm_dpmds="<?php  echo $this->createMobileUrl('Confirm_dpmds',array('token'=>'onBridge','id'=>$rid,'from_user'=>$page_from_user))?>";
        var go_tx="<?php  echo $this->createMobileUrl('balance', array('rid' => $rid,'id'=>$fans['id']))?>";
        var go_pay="<?php  echo $this->createMobileUrl("pay")?>";
        var go_syncinfo="<?php  echo $this->createMobileUrl("syncinfo", array('rid' => $rid,'openid'=>$fans['from_user']))?>";
        var go_RedPackStatus = "<?php  echo $this->createMobileUrl("RedPackStatus", array('rid' => $rid,'uid'=>$fans['from_user'],'op'=>'new'))?>";
        var go_RedPackLuck = "<?php  echo $this->createMobileUrl("RedPackLuck", array('rid' => $rid,'uid'=>$fans['from_user'],'op'=>'new'))?>";
        var go_deletemsg="<?php  echo $this->createMobileUrl('deletemsg',array('rid' => $rid,'uid'=>$fans['from_user'],'op'=>'new'));?>";
        var go_pullblack="<?php  echo $this->createMobileUrl('pullblack',array('rid' => $rid,'uid'=>$fans['from_user'],'op'=>'new'));?>";
        var uniacid = '<?php  echo $uniacid;?>';
        var rpMinMoney=<?php  echo $fashb['hb_minmoney']?>;
        var rpMaxMoney=<?php  echo $fashb['hb_manmoney']?>;
        var isOpened=0;
        var isbpopen='<?php  echo $isbpopen;?>';
//        var isAdmin=0;
           isback=0;
        var ismbp=0;
        var hbtype=0;//红包类型，0可以提现，1不可以提现。
        var rootimg = "<?php  echo $_W['attachurl'];?>";
        var keyword =<?php  echo $keyword;?>;
        var bp_listword =<?php  echo $bp_listword;?>;
        //敏感词
        var keyWord = {
            systemWord:keyword,

            check:function(val){
                if($.trim(val).length==0)
                    return true;
                if(this.systemWord==null||this.systemWord=='')
                    return true;
                for(var x in this.systemWord){
                    var arr = this.systemWord[x].split(' ');
                    var newArr = [];
                    for(var y=0;y<arr.length;y++){
                        var e = $.trim(arr[y]);
                        if(e.length>0)
                            newArr.push(e);
                    }
                    //console.log(newArr);
                    var bool = false;
                    for(var i=0;i<newArr.length;i++){
                        var e = $.trim(newArr[i]);

                        if(val.indexOf(e)==-1){
                            bool = true;
                        }

                    }
                    if(!bool){
                        //ajax_word(x);
                        return false;
                    }

                }
                return true;
            },
            list:bp_listword,
            replace:function(val){

                if(this.list==null||this.list=='')
                    return val;

                for(var x in this.list){
                    var arrs = this.list[x].split(' ');
                    var newArr = [];
                    for(var yy=0;yy<arrs.length;yy++){
                        var e = $.trim(arrs[yy]);
                        if(e.length>0)
                            newArr.push(e);
                    }
                    for(var i=0;i<newArr.length;i++){
                        var e = $.trim(newArr[i]);

                        //console.log(e);
                        if(val.indexOf(e)!=-1){
                            var len = e.length;
                            var res = '';
                            for(var i=0;i<len;i++)
                                res += '*';
                            var reg = new RegExp(e,"g");
                            val = val.replace(reg,res);
                        }

                    }

                }
                return val;
            }
        }

    </script>
    <link href="../addons/hm_newdpm/new_messages/chats.css?v=21323343" rel="stylesheet">
    <link rel="stylesheet" href="../addons/hm_newdpm/new_messages/fish_ui.css?v=23433">
    <style>
        .bbg {
            background-color: #f9f9f9;
            background-image: url("<?php  if($fashb['bp_logo']) { ?><?php  echo tomedia($fashb['bp_logo'])?><?php  } else { ?>../addons/hm_newdpm/new_messages/chats_bg.png<?php  } ?>");
            /*对话内容*/
            background-size: cover;background-repeat: no-repeat;
        }
        .right_index {
           <?php  if($bp['ishb']==1) { ?>right: 0.5rem;<?php  } else { ?>left:0.5rem;<?php  } ?>

            position: fixed;
            top: 0rem;
            z-index: 6;
        }
        select {
            appearance:none;
            -moz-appearance:none;
            -webkit-appearance:none;

            padding-right: 14px;

        }
    </style>
    <style>
        #rulebox{ width:96%; background:#FFF; margin: 2%;border-radius:4px; position:fixed; bottom: 30%; z-index:99000;padding: 10px 0px;}
        #markser{ width:100%; height:100%; background:rgba(0,0,0,0.6); position:fixed; z-index:9999; display:none;top: 0;bottom: 0;right: 0;left: 0;}
        .rulefoot1{ width:76px;height:30px;border-radius:5px;font-size:14px; font-weight:700; background:#03BD01; color:#fff; border:0	}
    </style>
</head>
<body ontouchstart>
<div class="bbg" style="height: 100%;width: 100%;position: fixed;top: 0px;bottom:0;left: 0px;right: 0px;"></div>

<div class="talk_panel wall_chat talk_main" id="wall_window">
    <p class="top_loadmore">
        <span class="iconfont icon-jiazai"></span>
        加载更多...
    </p>
    <div class="msg_list">
        <div class="msg_list_ctx">
        </div>
        <div class="msg_list_bottom"></div>
    </div>
</div>
<div class="msg_input" <?php  if($fashb['is_messages']==1) { ?>style="display: none"<?php  } ?>>
    <div class="msg_input_main">
        <span class="bottom_btn iconfont icon-tianjia1 menu_btn"></span>
        <span class="bottom_btn iconfont icon-tubiaozhizuomoban1 bp_btn"></span>
        <span class="bottom_btn iconfont icon-biaoqing2 smile_btn"></span>
        <div class="input_line">
            <input class="msg_input_box" placeholder="信息上墙" id="input_text"/>
            <span class="iconfont icon-shangchuan submit_btn" id="send_btn"></span>
        </div>
    </div>
    <div class="msg_hr"></div>
    <div class="msg_input_menu">
        <ul>
            <?php  if($bp['is_img']==0||$bp['is_img']==2) { ?>
            <li>
                <span class="icon iconfont icon-photo photo" ></span><p>相片</p>
                <!--<input id="upload" class="photo_file" type="file" name="upload" accept="image/*">-->
                <input id="uploads" class="photo_file" type="file" name="upload" accept="image/*"  onchange="imageUpLoad(this)">
            </li>
            <?php  } ?>
            <?php  if($bp['is_mf']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl("m_friends", array('rid' => $rid,'from_user'=>$fans['from_user']))?>">
                    <span class="icon iconfont icon-liaotian" ></span><p>交友</p>
                </a>
            </li>
            <?php  } ?>
            <?php  if($punishment['is_punishment']==1) { ?>
            <a href="<?php  echo $this->createMobileUrl('mob_turnplate', array('id' => $rid))?>">
                <li><span class="icon iconfont icon-jiazai" ></span><p>惩罚转盘</p></li>
            </a>
            <?php  } ?>

            <!--<li>-->
                <!--<span class="icon iconfont icon-huiyizhongpingmugongxiang  wall_menu_bp "></span><p>商城</p>-->
            <!--</li>-->
            <?php  if($shop['shop_status']==1) { ?>

            <a href="<?php  echo $this->createMobileUrl('mob_bjlist', array('id' => $rid))?>">
                <li><span class="icon iconfont icon-huiyizhongpingmugongxiang" ></span><p>商城</p></li>
            </a>
            <?php  } ?>
            <?php  if($reply['isqhb']!=1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>">
                    <span class="icon iconfont icon-hongbao" ></span><p>抢红包</p>
                </a>
            </li>
            <?php  } ?>
                <!--<li class="menu_del"><span class="icon iconfont icon-shiliangzhinengduixiang4" ></span><p>撤回消息</p></li>-->
            <?php  if($yyy['isyyy']==0) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('yyyIndex', array('id' => $rid))?>">
                    <span class="icon iconfont icon-yaoyiyao" ></span><p>摇一摇</p>
                </a>
            </li>
            <?php  } ?>
            <!--<li>-->
                <!--<a href="/game/Index/hitplane?h=gbgbhzomqi">-->
                    <!--<span class="icon iconfont icon-iconfontticket2" ></span><p>打飞机</p>-->
                <!--</a>-->
            <!--</li>-->
            <?php  if($reply['istoupiao']==0||$vote['vote_status']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('go_toupiao', array('id' => $rid))?>">
                    <span class="icon iconfont icon-toupiao" ></span><p>投票</p>
                </a>
            </li>
            <?php  } ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('balance', array('rid' => $rid,'id'=>$fans['id']))?>">
                    <span class="icon iconfont icon-liwu" ></span><p>提现</p>
                </a>
            </li>
            <!--<li><span class="icon iconfont icon-zhongxin" ></span><p>同步微信头像</p></li>-->
    </ul>
</div>
    <div class="msg_input_face">
    <ul class="emoji-list" id="emoji-gallery">
        <li><a class="e1" data-shortname=":grinning:"><img src="../addons/hm_newdpm/new_messages/1f600.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":frowning2:"><img src="../addons/hm_newdpm/new_messages/2639.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":joy:"><img src="../addons/hm_newdpm/new_messages/1f602.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":sunglasses:"><img src="../addons/hm_newdpm/new_messages/1f60e.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":heart_eyes:"><img src="../addons/hm_newdpm/new_messages/1f60d.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":kissing_heart:"><img src="../addons/hm_newdpm/new_messages/1f618.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":smirk:"><img src="../addons/hm_newdpm/new_messages/1f60f.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":money_mouth:"><img src="../addons/hm_newdpm/new_messages/1f911.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":head_bandage:"><img src="../addons/hm_newdpm/new_messages/1f915.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":see_no_evil:"><img src="../addons/hm_newdpm/new_messages/1f648.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":smiling_imp:"><img src="../addons/hm_newdpm/new_messages/1f608.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":japanese_ogre:"><img src="../addons/hm_newdpm/new_messages/1f479.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":poop:"><img src="../addons/hm_newdpm/new_messages/1f4a9.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":santa:"><img src="../addons/hm_newdpm/new_messages/1f385.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":couplekiss:"><img src="../addons/hm_newdpm/new_messages/1f48f.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":muscle:"><img src="../addons/hm_newdpm/new_messages/1f4aa.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":point_left:"><img src="../addons/hm_newdpm/new_messages/1f448.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":middle_finger:"><img src="../addons/hm_newdpm/new_messages/1f595.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":v:"><img src="../addons/hm_newdpm/new_messages/270c.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":ok_hand:"><img src="../addons/hm_newdpm/new_messages/1f44c.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":thumbsup:"><img src="../addons/hm_newdpm/new_messages/1f44d.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":clap:"><img src="../addons/hm_newdpm/new_messages/1f44f.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":kiss:"><img src="../addons/hm_newdpm/new_messages/1f48b.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":zzz:"><img src="../addons/hm_newdpm/new_messages/1f4a4.svg" style="font-size: 0.625em;"></a></li>
        <!--<li><a class="e1" data-shortname=":bikini:"><img src="1f459.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":handbag:"><img src="1f45c.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":birthday:"><img src="1f382.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":crown:"><img src="1f451.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":rose:"><img src="1f339.svg" style="font-size: 0.625em;"></a></li>
        <li><a class="e1" data-shortname=":cucumber:"><img src="1f952.svg" style="font-size: 0.625em;"></a></li>-->
        </ul>
    </div>
</div>
<form id="bp_form">
    <div id="popup_bp" class="fish_popup">
        <div class="bp_tc">

            <ul>
                <?php  if(is_array($bpmoney)) { foreach($bpmoney as $index => $row) { ?>
              <li value="<?php  echo $row['bp_time'];?>" data-time="<?php  echo $row['bp_time'];?>" class="bp_item bp_item_img <?php  if($index==0) { ?>selected<?php  } ?>" img_count="1" price="<?php  echo $row['bp_money'];?>">
                                <img src="<?php  if($row['bp_images']) { ?><?php  echo tomedia($row['bp_images'])?><?php  } else { ?>../addons/hm_newdpm/common/s1.png<?php  } ?>" alt="" />
                                <span class="time"><?php  echo $row['bp_time'];?>秒</span>
                                 <span class="price">￥<?php  echo $row['bp_money'];?></span>
              </li>
                <?php  } } ?>
                                <li style="width: 8vw"></li>
            </ul>
            <div class="num_select" style="display: none">
                <label for="bp_times_select">连续霸屏</label>
                <select id="bp_times_select" style="opacity: 0;height: 21vh;width: 12vw;position: absolute;right: 2px;top: 0;">
                    <option value="1" selected>一次霸屏</option>
                    <option value="2">二连霸屏</option>
                    <option value="3">三连霸屏</option>
                    <option value="5">五连霸屏</option>
                    <option value="8">八连霸屏</option>
                    <option value="10">豪气十连霸！</option>
                </select>
            </div>
        </div>
        <p>
            <textarea maxlength="30"  placeholder="好想说点什么哦..." rows="3" id="bp_form_ctx"></textarea>
        </p>
        <div class="bp_more_pice">
            <ul class="weui-uploader__files">
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_img">
                    <span class="img-guanbi"></span>
                </li>
                <li class="weui-uploader__file file_video">
                    <span class="video-guanbi"></span>
                </li>
                <?php  if($bp['isbp']==1) { ?>
                <?php  if($bp['is_img']==0||$bp['is_img']==1) { ?>
                <div class="weui-uploader__input-box up_images" style="background-image: url('../addons/hm_newdpm/new_messages/bp_upload_img.png');background-size: 100% 100%;border: 1px solid #ccc; display: inline-block;margin-top: 0.6rem;">
                    <input id="bp_file" class="weui-uploader__input" type="file"  accept="image/*" onchange="imageUpLoad(this,3)">
                    <input id="bp_type" type="hidden" value="1" >
                    <input id="video_url" type="hidden" value="" >
                </div>
                 <?php  } ?>
                <?php  } ?>
                 <?php  if($bp['isvo']==1) { ?>
                 <div class="weui-uploader__input-box up_video" style="background-image: url('../addons/hm_newdpm/new_messages/bp_upload_video.png');background-size: 100% 100%;border:1px solid #ccc; display: inline-block;margin-top: 0.6rem;">
                    <input id="bp_video" class="weui-uploader__input" type="file" accept="video/*">
                </div>
                 <?php  } ?>
              </ul>
        </div>
                <div class="bp_theme_list" id="bp_theme_list">
            <span class="bp_theme_list_title"></span>
            <div class="selected_box">
                <ul class="bp_theme_list_ul">

                    <?php  if(is_array($bptheme)) { foreach($bptheme as $row) { ?>
                    <li data-id="<?php  echo $row['id'];?>" id="bp-theme-<?php  echo $row['id'];?>">
                        <img src="<?php  if($row['thumb']) { ?><?php  echo tomedia($row['thumb'])?><?php  } else { ?>../addons/hm_newdpm/common/def.png<?php  } ?>"/>
                        <p class="node_text"><?php  echo $row['name'];?></p>
                    </li>
                    <?php  } } ?>
                                        <li data-id="" id="bp-theme-def">
                        <img src="http://img.91qudong.com/static/theme/chats/def.png">
                        <p class="node_text">默认主题</p>
                    </li>
                </ul>
            </div>
        </div>
                <div class="fish_popup_footer">
            <div class="cancel_button">取消</div>
            <div class="action_button">确认支付
                <span class="all_price"></span>
            </div>
        </div>
    </div>
</form>
<script>
    var theme_list =  <?php  echo $bptheme2;?>;

    $(function(){
        //霸屏
        $('.bp_btn,.wall_menu_bp').click(function(){
            if (1 == isback)
            {
                $.tip("您已经被禁言");
                return;
            }
            if(is_Opened == 0){
                $.tip('大屏幕尚未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
            }else{
              if (isbpopen==0){
                  $.tip('霸屏还没未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
              }else{
                  $("#popup_bp").popup();
                  $('.msg_input').removeClass('showing_face').removeClass('showing_menu');
              }
            }
        });
        var img_count = 1;//$(".bp_item:selected").attr("img_count");
        var select_theme = function () {
            var bp_time = $('.bp_item.selected').attr('data-time');
            $(".bp_theme_list_ul li").removeClass("selected");
            $('#bp-theme-def').addClass('selected');
            if(theme_list) {
                $('.bp_theme_list_ul li').each(function(){
                    var theme_id = $(this).attr('data-id');
                    var theme = theme_list[theme_id];
                    if(theme != undefined){
                        //计算主题霸屏费用
                        var theme_fee = theme.price;

                        if (parseInt(theme.bp_time) <= parseInt(bp_time)) {
                            theme_fee = 0;
                        }


                        if (theme.rank_position) {
                            if (theme.price == 0) {
                                theme_fee = 0;
                            }
                        }

                        if (theme_fee == 0 && theme.selected) {
                            $(".bp_theme_list_ul li").removeClass("selected");
                            $('#bp-theme-' + theme_id).addClass('selected');
                            return false
                        }
                    }
                });
            }
        }
        select_theme();
        bp_amount();
        //主题选项
        $(".bp_theme_list_ul li").click(function(){
            if($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $('#bp-theme-def').addClass('selected');
            } else {
                $(".bp_theme_list_ul li").removeClass("selected");
                $(this).addClass("selected");
            }
            bp_amount(true);
        });
        //霸屏时间选项
        $(".bp_item").click(function(){
            $(".bp_item").removeClass("selected");
            $(this).addClass("selected");
            img_count = $(this).attr("img_count");
            select_theme();
            checkImageCount();
            bp_amount(false);
        });
        //连续霸屏
        $("#bp_times_select").change(function(){
            $(".num_select label").text($(this).find("option:selected").text());
            bp_amount(false);
        });
        //图片删除
        $("#popup_bp .img-guanbi").click(function(){
            $(this).parent().find('img').remove();
            $(this).parent().hide();
            if($(".file_img").find('img').length==0){
                $(".up_video").show();
            }
            checkImageCount();
        });
        //视频删除
        $("#popup_bp .video-guanbi").click(function(){
            $("#bp_video").val('');
            $(this).parent().find('img').remove();
            $(this).parent().hide();
            $(".up_images").show();
            $(".up_video").show();
        });
        //霸屏取消提交
        $('#popup_bp .default_button').click(function(){
            $("#popup_bp").removeClass('weui-popup__container--visible');
        });
        //图片、视频类型切换
        $('.bp_type_switch').click(function(){
            var type = $('#bp_type').val();
            if(type=='1'){
                $(".weui-uploader__files").parent().hide();
                $(".file_video").parent().parent().show();
                $('#bp_type').val(2);
                $('.bp_qiehuan_text').html('图文霸屏')
            }else{
                $(".weui-uploader__files").parent().show();
                $(".file_video").parent().parent().hide();
                $('#bp_type').val(1);
                $('.bp_qiehuan_text').html('小电影霸屏')
            }
        });
        //霸屏上传图片
        var bp_image_src = null;

        //视频上传
        $("#bp_form #bp_video").upload_video(function (img_url,type) {
            $("#bp_video").val('');
            $.hideLoading();

            bp_image_src = '../addons/hm_newdpm/new_messages/video_default.png';//img_url;
            $("#popup_bp .file_video").append("<img src='"+bp_image_src+"'/>").show().css("display","inline-block");
            $('#bp_type').val(2);
            $("#video_url").val(img_url);
            $(".up_images").hide();
            $("#bp_video").parent().hide();
        });
        //霸屏提交
        <?php  if($bp['bp_pay2']!=0) { ?>
        $('#bp_form .action_button').click(function(){
            var item = $(".bp_item.selected").attr('value');
            var type = $('#bp_type').val();
//            console.log(item);
            var img_srcs = [];
            var video_src = '';
            if(type=='2'){
                video_src = $("#video_url").val();
            }else{
                $("#popup_bp .file_img:visible").each(function(){
                    var img_src = $(this).find('img').attr('src');
                    if(img_src!=null&& img_src!=''){
                        img_srcs.push(img_src);
                    }
                });
            }

            var theme = $(".bp_theme_list_ul li.selected").attr('data-id');
            var bp_times = $('#bp_times_select').val();
            if( bp_times == 0 || bp_times == null ){
                bp_times = 1;
            }
            var content = $("#bp_form_ctx").val();
            if("" == content&& "" == img_srcs&&type!=2){
                $.tip("请填写霸屏内容或图片");
                return;
            }else {
                if(!keyWord.check(content)){
                    $(".bp_ctx textarea").val('');
                    return $.tip('请勿发布广告等不适内容');
                }

                //敏感词
                content = keyWord.replace(content);
            }
            if("" == content&& "" == video_src&&type==2){
                $.tip("请填写霸屏内容或视频");
                click=false;
                return;
            }else {
                if(!keyWord.check(content)){
                    $(".bp_ctx textarea").val('');
                    click=false;
                    return $.tip('请勿发布广告等不适内容');
                }

                //敏感词
                content = keyWord.replace(content);
            }


            var send_data = {
                'theme':theme,
                'pbtime':item,
                'bp_type':$('#bp_type').val(),
                'message':content,
                'image':img_srcs,
                'times':bp_times,
                'video':video_src,
                'effect':$('#bp_pic_effect').is(':checked'),
                'admin':$('#bp_admin').is(':checked')
            };
            if(bpsid != null ){
                send_data['sid']=bpsid;
            }
            MagSender.sendItem(send_data,'bp');
        });
        <?php  } else { ?>
        $(document).ready(function(){
            document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

                var click=false;
                $("#bp_form .action_button").click(function(){
                    if(click){
                        return $.tip("请不要频繁点击");
                    }
                    click=true;
                    var item = $(".bp_item.selected").attr('value');
                    var type = $('#bp_type').val();
//            console.log(item);
                    var img_srcs = [];
                    var video_src = '';
                    if(type=='2'){
                        video_src = $("#video_url").val();
                    }else{
                        $("#popup_bp .file_img:visible").each(function(){
                            var img_src = $(this).find('img').attr('src');
                            if(img_src!=null&& img_src!=''){
                                img_srcs.push(img_src);
                            }
                        });
                    }

                    var theme = $(".bp_theme_list_ul li.selected").attr('data-id');
                    var bp_times = $('#bp_times_select').val();
                    if( bp_times == 0 || bp_times == null ){
                        bp_times = 1;
                    }
                    var content = $("#bp_form_ctx").val();
                    if("" == content&& "" == img_srcs&&type!=2){
                        click=false;
                        $.tip("请填写霸屏内容或图片!");
                        return;
                    }else {
                        if(!keyWord.check(content)){
                            $(".bp_ctx textarea").val('');
                            click=false;
                            return $.tip('请勿发布广告等不适内容');
                        }

                        //敏感词
                        content = keyWord.replace(content);
                    }
                    if("" == content&& "" == video_src&&type==2){
                        click=false;
                        $.tip("请填写霸屏内容或视频");

                        return;
                    }else {
                        if(!keyWord.check(content)){
                            $(".bp_ctx textarea").val('');
                            click=false;
                            return $.tip('请勿发布广告等不适内容');
                        }

                        //敏感词
                        content = keyWord.replace(content);
                    }


                    var send_data = {
                        'theme':theme,
                        'pbtime':item,
                        'bp_type':$('#bp_type').val(),
                        'message':content,
                        'image':img_srcs,
                        'times':bp_times,
                        'video':video_src,
                        'effect':$('#bp_pic_effect').is(':checked'),
                        'admin':$('#bp_admin').is(':checked')
                    };
                    if(bpsid != null ){
                        send_data['sid']=bpsid;
                    }
                    $.post('<?php  echo $this->createMobileUrl('Confirm_bp',array('id'=>$rid))?>',send_data, function(idata) {
                        $("#popup_bp .img-guanbi").click();
                        $('.fish_modal').click();
                        $("#popup_bp .video-guanbi").click();
                        if(idata.success == 1&&idata.isadmin==0){
                            click=false;
                            $(".bp_form_ctx").val("");
//                            $(".bp_img_field img").attr("src", "../addons/hm_newdpm/imgs/zp.png");
//                            $(".bp_panel").hide();
//                            $(".content video").show();
                            util.pay({
                                orderFee : idata.pay_money,
                                payMethod : 'wechat',
                                orderTitle : '霸屏'+idata.pay_money+'元',
                                orderTid : idata.tid,
                                module : 'hm_newdpm',
                                success : function(result) {
                                    click=false;

                                    $.tip("霸屏成功！！");
//                                    location.reload();
                                    //location.href="<?php  echo $_W['siteroot'].$this->createMobileUrl('results')?>&tid="+idata.orderid;
                                },
                                fail : function(result) {
                                    click=false;
                                    alert('fail : ' + result.message);
                                },
                                complete : function(result) {
                                    //location.reload();
                                }
                            });
                        }else if(idata.success == 1&&idata.isadmin==1){
                            click=false;
                             $(".bp_form_ctx").val("");
//                            $(".bp_img_field img").attr("src", "../addons/hm_newdpm/imgs/zp.png");
//                            $(".bp_panel").hide();
//                            $(".content video").show();
                        }else{
                            click=false;
//                            $(".content video").show();
                            $.tip(idata.msg);
                        }
                    },'json');

                })

                $("#ds_form .action_button").click(function(){
                    if(click){
                        return $.tip("请不要频繁点击");
                    }
                    click=true;
                    var item_id =$(".gift_list .selected").attr('data-id');
                    var guest_id =$(".guest_list .selected").attr('data-id');
                    var megs =$("#ds_form_ctx").val();
                    if (guest_id > 0 && item_id > 0) {

                        var submitData = {
                            'item':item_id,
                            'object':guest_id,
                            'content':megs,
                            'times':1,
                            "type":3,
                            "new_type": 2,
                            'admin':$('#ds_admin').is(':checked')
                        };

                        $.post('<?php  echo $this->createMobileUrl('Confirm_dpmds',array('id'=>$rid))?>',submitData, function(idata) {
                            click=false;
                            $('.fish_modal').click();
                            if(idata.success == 1&&idata.isAdmin==0){
                                util.pay({
                                    orderFee : idata.pay_money,
                                    payMethod : 'wechat',
                                    orderTitle : '打赏'+idata.pay_money+'元',
                                    orderTid : idata.tid,
                                    module : 'hm_newdpm',
                                    success : function(result) {
                                        $.tip("打赏成功！！");
                                        //location.reload();
                                        //location.href="<?php  echo $_W['siteroot'].$this->createMobileUrl('results')?>&tid="+idata.orderid;
                                    },
                                    fail : function(result) {
                                        alert('fail : ' + result.message);
                                    },
                                    complete : function(result) {
                                        //location.reload();
                                    }
                                });
                            }else if(idata.success == 1&&idata.isAdmin==1){
                                click=false;
                                $.tip("打赏成功!")
                            }else{
                                click=false;
                                $.tip(idata.msg);
                            }
                        },'json');


                    } else {
                        $(".content video").show();
                        click=false;
                        $.tip("请选择打赏对象、打赏礼物")
                    }


                })

                $("#popup_rp .action_button").click(function(){
                    if(click){
                        return $.tip("请不要频繁点击");
                    }
                    click=true;
                    var m =$("input[name=money]").val();
                    var n =$("input[name=hb_num]").val();
                    var c =$.trim($("#popup_rp textarea").val());
                    var d =$("select[name=nums]").val();

                    if(m<rpMinMoney){
                        $.tip("红包总金额不低于" + rpMinMoney + "元");
                        click=false;
                        return;
                    }
                    if(m>rpMaxMoney&&rpMaxMoney>=rpMinMoney&&rpMaxMoney!=0){
                        $.tip("红包总金额不能大于" + rpMaxMoney + "元");
                        click=false;
                        return;
                    }
                    if(n<1){
                        $.tip("红包个数不低于1个");
                        click=false;
                        return;
                    }
                    if(hbtype==0){
                        if(m/n>200){
                            $.tip("每人每次最多可领取红包金额200元");
                            click=false;
                            return;
                        }
                    }
                    var paytype = $("#popup_rp .cell_pay_select.selected").attr("value");
                    var submitData = {
                        'num':n,
                        'total':m,
                        'content':c,
                        'hb_type':d,
                        'paytype':paytype,
                        "type": 4,
                        "new_type": 2,
                    };

                    $.post('<?php  echo $this->createMobileUrl('Confirm_dpmhb',array('id'=>$rid))?>',submitData, function(data) {
                        click=false;
                        $('.fish_modal').click();
                        $("input[name=money]").val('');
                        $("input[name=hb_num]").val('');
                        $.trim($("#popup_rp textarea").val(''));
                        if(data.success == 1&&data.isAdmin==0){
                            util.pay({
                                orderFee : data.pay_money,
                                payMethod : 'wechat',
                                orderTitle : '发红包'+data.pay_money+'元',
                                orderTid : data.tid,
                                module : 'hm_newdpm',
                                success : function(result) {
                                    $.tip("红包发送成功！！");
                                    //location.reload();
                                    //location.href="<?php  echo $_W['siteroot'].$this->createMobileUrl('results')?>&tid="+idata.orderid;
                                },
                                fail : function(result) {
                                    alert('fail : ' + result.message);
                                },
                                complete : function(result) {
                                    //location.reload();
                                }
                            });
                        }else if(data.success == 1&&data.isAdmin==1){
//                            $(".content video").show();
                            click=false;
                            $.tip("红包发送成功！")
                        }else{
                           click=false;
// $(".content video").show();
                            $.tip(data.msg);
                        }
                    },'json');


                })
            });
        });
        <?php  } ?>

    });
    var bpsid = null;
    //为Ta霸屏
    $(document).on("click", ".weitabp", function () {
        if (1 == isback)
        {
            $.tip("您已经被禁言");
            return;
        }
        if(is_Opened == 0){
            $.tip('大屏幕尚未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
        }else{
            <?php  if($bp['isbp']!=1) { ?>
            $.tip('霸屏还没未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
            return;
            <?php  } ?>

            $("#popup_bp").popup();
            $('.msg_input').removeClass('showing_face').removeClass('showing_menu');
            bpid = $(this).attr('data-id');
            bpsid = $(this).attr('data-sid');console.log(bpsid);
            bp_image_src = $('#msg_box_'+bpid+' .img_box img').attr('_src');
            $('#bp_type').val(1);
            $(".up_video").hide();
            $(".file_video").hide();
            $(".file_video").find('img').remove();
            if(!bp_image_src){
                bp_image_text = $('#msg_box_'+bpid+' .img_box_m p').text();
                $('#bp_form_ctx').val(bp_image_text);
                img_count = 0;
                $("#popup_bp .bp_tc").find('.bp_item').each(function(i){
                    icount = $(this).attr("img_count");
                    if(img_count<icount){img_count  = icount;$(this).click();}
                });
                bp_image_src = $('#msg_box_'+bpid+' .img_box_m img');
                bp_image_src.each(function(index,data) {
                    if(index+1<=img_count){
                        $("#popup_bp .file_img").slice(index,index+1).find('img').remove();
                        $("#popup_bp .file_img").slice(index,index+1).append("<img src='" + $(data).attr("_src") + "'/>").show().css("display","inline-block");
                    }
                })
            }else{
                bp_image_text = $('#msg_box_'+bpid+' .img_box p').text();
                $('#bp_form_ctx').val(bp_image_text);
                $("#popup_bp .file_img").find('img').remove();
                $("#popup_bp .file_img").first().append("<img src='"+bp_image_src+"'/>").show().css("display","inline-block");
            }
            checkImageCount();
        }
    });
    function bp_amount(themeshowtext){
        var times = $("#bp_times_select").val();
        var price = $(".bp_item.selected").attr('price');
        var bp_time = $('.bp_item.selected').attr('data-time');
        var theme_id = $('.bp_theme_list_ul li.selected').attr('data-id');
        var amount = times * price;
        var theme = theme_list[theme_id];

        if(theme != undefined) {
            //计算主题霸屏费用
            var theme_fee = theme.price;
            if (parseInt(theme.bp_time) <= parseInt(bp_time)) {
                theme_fee = 0;
            }

            if (theme_fee == 0) {
                $('#bp-theme-' + theme_id).addClass('selected');
            }
            if(theme_fee) {
                if(themeshowtext){
                    $.alert(theme.condition_text + '可使用'+theme.name+'主题');
                }
                $('.bp_theme_list_ul li.selected').removeClass('selected');
                $('#bp-theme-def').addClass('selected');
            }
        }

        $(".all_price").text( amount +"元");
    }

    function checkImageCount(){
        var img_count = $(".bp_item.selected").attr("img_count");
        img_count = parseInt(img_count);
        if($('#bp_type').val()==2) return;
        $("#popup_bp .file_img").each(function(i,n){
            if( i < img_count && $(this).find('img').size() == 1){
                $(this).show();
            }else{
                $(this).hide();
            }
        });

        if( $("#popup_bp .file_img:visible").size() >= img_count ){
            $("#bp_file").parent().hide();
        }else{
            $("#bp_file").parent().show();
        }
    }
</script>


<form id="hb_form">
    <div id="popup_rp" class="fish_popup">
        <p><span class="redpack_total"></span><span class="redpack_text">总金额：</span></p>
        <p class="redpack_p"><input class="weui-input" type="number" maxlength="9" pattern="[0-9]*" name="money" placeholder="最低金额<?php  echo $fashb['hb_minmoney']?>元" id="hb_total"></p>
        <p><span class="redpack_num"></span><span class="redpack_text">红包数量:</span></p>
        <p class="redpack_p"><input class="weui-input" type="number" name="hb_num" maxlength="4" a pattern="[0-9]*" placeholder="不少于2个红包" id="hb_form_item"></p>
        <p class="redpack_p"><textarea class="weui-textarea" maxlength="10" id="hb_form_ctx" placeholder="恭喜发财，大吉大利！" rows="2" id="hb_form_ctx"></textarea></p>
        <div class="redpack_p" style="margin-top: 10px;background-color: #f0f0f0;text-align: right;letter-spacing: 1px;">

            <select class="weui-select" name="nums" style="width: 100%;height: 40px;line-height: 40px;text-align: right;color: #999;font-size: 1.2rem;border: none;padding-left:1.6rem " >
                <option value="1" selected>随机</option>
                <option value="2">均分</option>
            </select>
        </div>
        <div style="font-size: 10px;color: #666;text-align: right;margin-top: 10px;" class="conts">系统将扣除<?php  echo $fashb['counter']?>%手续费</div>
        <p style="margin-top: 0px;"><span class="redpach_pay_text">支付方式：</span>
            <span class="cell_pay_select selected" value="2"><span class="icon iconfont icon-wxpay"  ></span> 微信支付</span>
            <span class="cell_pay_select" value="1"><span class="icon iconfont icon-hongbao"  ></span> 账户余额</span>
        <div class="redpack_balance" style="display: none">账户余额：<?php  echo $fans['totalnum']/100?>元</div>
        </p>
        <div class="fish_popup_footer">
            <div class="cancel_button">取消</div>
            <div class="action_button">确认支付</div>
        </div>
    </div>
</form>
<script>
    $('#hb_total').bind('input propertychange', function() {
        var mon= $(this).val()*(100+<?php  echo $fashb['counter']?>)/100;
        mon = mon.toFixed(2);
        $('.conts').html('本次合计支付'+mon+'元');
    });
</script>
<script>
    $(function(){
        //红包
        $('.hb_btn,.wall_menu_rp').click(function(){
            if (1 == isback)
            {
                $.tip("您已经被禁言");
                return;
            }
            if(is_Opened == 0){
                $.tip('大屏幕尚未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
            }else {
                $("#popup_rp").popup();
                $('.msg_input').removeClass('showing_face').removeClass('showing_menu');
            }
        });
        //红包提交
        <?php  if($bp['bp_pay2']!=0) { ?>
        $('#popup_rp .action_button').click(function(){
            var m =$("input[name=money]").val();
            var n =$("input[name=hb_num]").val();
            var c =$.trim($("#popup_rp textarea").val());
            var d =$("select[name=nums]").val();

            if(m<rpMinMoney){
                $.tip("红包总金额不低于" + rpMinMoney + "元")
                return;
            }
            if(m>rpMaxMoney&&rpMaxMoney>=rpMinMoney&&rpMaxMoney!=0){
                $.tip("红包总金额不能大于" + rpMaxMoney + "元")
                return;
            }
            if(n<1){
                $.tip("红包个数不低于1个");
                return;
            }

            if(hbtype==0){
                if(m/n>200){
                    $.tip("每人每次最多可领取红包金额200元");
                    return;
                }
            }

            var paytype = $("#popup_rp .cell_pay_select.selected").attr("value");
            MagSender.sendItem({
                'num':n,
                'total':m,
                'content':c,
                'hb_type':d,
              //  'desk_name':$("#desk_name").val(),
                'paytype':paytype,
                "type": 4,
                "new_type": 2,
            },'rp');
        });
        <?php  } ?>
        //选项
        $("#popup_rp .cell_pay_select").click(function(){
            $("#popup_rp .cell_pay_select").removeClass("selected");
            $(this).addClass("selected");
            var paytype = $("#popup_rp .cell_pay_select.selected").attr("value");
            if(paytype==1){
                $('.redpack_balance').show();
            }else{
                $('.redpack_balance').hide();
            }
        });
    });

</script>

<link href="../addons/hm_newdpm/new_messages/hb.css" rel="stylesheet">
<link href="../addons/hm_newdpm/new_messages/common.mzh.css" rel="stylesheet">
<div class="mzh_modal_alert" id="redbox" style="display: none;">
    <div class="mzh_modal_alert_dialog" style="background-color:rgba(0,0,0,0);box-shadow:none;">
        <span class="am-icon-close iconfont icon-guanbi close" ></span>
        <div class="hb_panel">
            <div class="hb_status_panel" id="redcontent">
            </div>
        </div>
        <div class="mzh_modal_alert_body"  id="redluck" style="display: none">
            <div class="hb_logs">
                <ul>
                </ul>
            </div>
        </div>
    </div>
</div>

<form id="ds_form">
    <div id="popup_ds" class="fish_popup">
        <p>
            <span class="ds_object_icon"></span>选择打赏对象
        </p>
        <ul class="guest_list">
            <?php  if(is_array($guest_list)) { foreach($guest_list as $index => $row) { ?>
                <li <?php  if($index==0) { ?>class="selected"<?php  } ?> data-id="<?php  echo $row['id'];?>" data-uid="0">
                <img src="<?php  echo tomedia($row['pic'])?>" alt="">
                <span><?php  echo $row['name'];?></span>
                </li>
            <?php  } } ?>
                    </ul>
        <p>
            <span class="ds_gift_icon"></span>选择礼物
        </p>
        <ul class="gift_list">
            <?php  if(is_array($item_list)) { foreach($item_list as $index => $row) { ?>
                <li <?php  if($index==0) { ?>class="selected" <?php  } ?> data-id="<?php  echo $row['id'];?>" data-ctx="<?php  echo $row['says'];?>">
                <img src="<?php  echo tomedia($row['pic'])?>" alt="">
                <span><?php  echo $row['name'];?></span>
                <span class="price">￥<?php  echo $row['price'];?></span>
                </li>
            <?php  } } ?>

                    </ul>
        <textarea  maxlength="30"  placeholder="请输入打赏语..." rows="1" id="ds_form_ctx"><?php  echo $item_list[0]['says'];?></textarea>
                <div class="fish_popup_footer">
            <div class="cancel_button">取消</div>
            <div class="action_button">确认支付</div>
        </div>
    </div>
</form>

<script>
    $(function(){
        //打赏
        $('.ds_btn,.wall_menu_ds').click(function(){
            if (1 == isback)
            {
                $.tip("您已经被禁言");
                return;
            }
            if(is_Opened == 0){
                $.tip('大屏幕尚未开启~<br>如检测有误请刷新您的手机页面或更换网络环境重试');
            }else{
                $("#popup_ds").popup();
                $('.msg_input').removeClass('showing_face').removeClass('showing_menu');
            }
        });
        //选择打赏对象
        $('.guest_list li').click(function(){
            $('.guest_list li').removeClass('selected');
            $(this).addClass('selected');
        });
        //选择打赏项目
        $('.gift_list li').click(function(){
            $('.gift_list li').removeClass('selected');
            $(this).addClass('selected');
            $("#ds_form_ctx").val($(this).attr('data-ctx'));
        });
        //打赏提交
        <?php  if($bp['bp_pay2']!=0) { ?>
        $('#ds_form .action_button').click(function(){
            MagSender.sendItem({
                'item':$(".gift_list .selected").attr('data-id'),
                'object':$(".guest_list .selected").attr('data-id'),
                'content':$("#ds_form_ctx").val(),
                'times':1,
                "type":3,
                "new_type": 2,
                'admin':$('#ds_admin').is(':checked')
            },'ds');
        });
        <?php  } ?>
        //打赏取消提交
        $('#ds_form .default_button').click(function(){
            $("#popup_ds").removeClass('weui-popup__container--visible');
        });
    })
</script>
<div id="popup_other_user" class="fish_popup">
    <div class="other_user_info">
        <img id="other_user_avatar"/>
        <p id="other_user_nickname"></p>
    </div>
    <ul class="other_user_menu">
        <li class="user_menu_el"><span class="icon iconfont icon-aixin"></span><p>向Ta表白</p></li>
        <li class="user_menu_chat"><span class="icon iconfont icon-liaoyiliao"></span><p>私聊Ta</p></li>
        <li class="user_menu_ds"><span class="icon iconfont icon-shang"></span><p>打赏给Ta</p></li>
        <li class="user_menu_sl"><span class="icon iconfont icon-liwu"></span><p>送礼给Ta</p></li>
		<li class="user_menu_delmsg"><span class="icon iconfont icon-shanchu"></span><p>撤回信息</p></li>
        <li class="user_menu_zhongxin"><span class="icon iconfont icon-zhongxin"></span><p>同步微信头像</p></li>
        <!--<li class="menu_del"><span class="icon iconfont icon-shiliangzhinengduixiang4" ></span><p>撤回消息</p></li>-->
    </ul>
</div>
<script>

    $(function(){
        //点击头像对应的信息
        DsUsers = [];
        var click_avatar_msgid = 0;
        //点击头像
        $(".msg_list").on("click",".msg_box .avatar",function(){
            $("#popup_other_user").popup();
            click_avatar_msgid = $(this).attr('msgid');

            var msg = MsgList[click_avatar_msgid];

            $("#other_user_avatar").attr('src',msg['avatar']);
            $("#other_user_nickname").text(msg['nickname']);
//            if(DsUsers.indexOf(msg['id'])=='-1'){
//                $(".user_menu_ds").hide();
//            }else{
//                $(".user_menu_ds").show();
//            }


            if(msg['from_user']==user_id){
                $(".user_menu_delmsg").show();
                $(".user_menu_zhongxin").show();
                $(".user_menu_sl").hide();
                $(".user_menu_el").hide();
                $(".user_menu_chat").hide();
                $(".user_menu_ds").hide();

            }else{
                $(".user_menu_delmsg").hide();

                $(".user_menu_zhongxin").hide();

                <?php  if($bp['is_gift']==1) { ?>
                $(".user_menu_sl").show();
                <?php  } else { ?>
                $(".user_menu_sl").hide();
                <?php  } ?>
                    <?php  if($bp['isbb']==1) { ?>
                $(".user_menu_el").show();
                    <?php  } else { ?>
                    $(".user_menu_el").hide();
                 <?php  } ?>
                 <?php  if($bp['is_mf']==1) { ?>
                $(".user_menu_chat").show();
                        <?php  } else { ?>
                        $(".user_menu_chat").hide();
                <?php  } ?>
                            $(".user_menu_ds").hide();
//                $(".user_menu_ds").show();


            }
                     if (1 == isback)
                     {
                         $(".user_menu_sl").hide();
                         $(".user_menu_el").hide();
                         $(".user_menu_chat").hide();
                         $(".user_menu_ds").hide();

                     }

        });

        $(".user_menu_el").click(function(){
            var msg = MsgList[click_avatar_msgid];
            location.href ="<?php  echo $this->createMobileUrl('express_love', array('rid' => $rid,'from_user'=>$fans['from_user']))?>&uid="+msg['from_user'];
        });

        $(".user_menu_chat").click(function(){
            var msg = MsgList[click_avatar_msgid];
            location.href ="<?php  echo $this->createMobileUrl('talk', array('rid' => $rid,'from_user'=>$fans['from_user']))?>&uid="+msg['from_user'];
        });

        $(".user_menu_ds").click(function(){
            var msg = MsgList[click_avatar_msgid];
            $('#popup_ds .guest_list li').each(function () {
                if($(this).attr('data-uid')==msg['gift_id']){
                    $(this).click();
                }
            })
            $('.fish_modal').click();
            $('.wall_menu_ds').click();
        });

        $(".user_menu_guanbi").click(function(){
            $.fn.popup.close_popup();
        });

        $(".user_menu_sl").click(function(){
            var msg = MsgList[click_avatar_msgid];
            location.href ="<?php  echo $this->createMobileUrl('send_gift', array('rid' => $rid,'from_user'=>$fans['from_user']))?>&uid="+msg['from_user'];
        });

        $(".user_menu_delmsg").click(function(){
            var msg = MsgList[click_avatar_msgid];
            $.getJSON("<?php  echo $this->createMobileUrl('deletemsg',array('rid' => $rid,'uid'=>$fans['from_user']));?>&msgid="+msg['id'],function(data){
                if(data.isResultTrue==1){
//                    $.tip(data.msg);
                    MsgLoader.deleteMsgbox(msg['id']);
                    $('.fish_modal').click();
                }
            });
        });
    })
</script>
<div class="show_img_msg_box">
    <img>
</div>
<div class="show_video_msg_box">
    <video src="" id="perform_video" loop controls></video>
</div>
<?php  if($bp['openscreen']!=1) { ?>
<div class="right_index">
    <div class="hb_bgbox" onclick="haobang()"></div>
    <div class="hb_bgbox_user" style="background-image:url(<?php  if($first_one) { ?><?php  echo $first_one?><?php  } else { ?><?php  echo tomedia($fans['avatar'])?><?php  } ?>)"></div>
    <ul style="position: relative; float: right; right: 0.4rem;">
        <?php  if($fashb['isfanshb']==1) { ?>
        <li class="wall_menu_rp"></li>
        <?php  } ?>
        <?php  if($bp['isbp']==1) { ?>
                <li class="wall_menu_bp"></li>
        <?php  } ?>
        <?php  if($bp['isds']==1) { ?>
                <li class="wall_menu_ds"></li>
        <?php  } ?>
         <?php  if($bp['isbb']==1) { ?>
                <li class="wall_menu_el" data-href="<?php  echo $this->createMobileUrl('express_love', array('rid' => $rid,'from_user'=>$fans['from_user']))?>"></li>
            <?php  } ?>
        <?php  if($bp['is_gift']==1) { ?>
                <li class="wall_menu_sl" data-href="<?php  echo $this->createMobileUrl('send_gift', array('rid' => $rid,'from_user'=>$fans['from_user']))?>"></li>
           <?php  } ?>
        <?php  if($xys['isxys']==0) { ?>
        <li class="wall_menu_charts" onclick="showrule();"></li>
        <?php  } ?>
        <?php  if($fashb['is_ty']==1) { ?>
        <li class="wall_menu_ty" onclick="go_ty();"></li>
         <?php  } ?>
        <?php  if($bp['is_mf']==1) { ?>
        <li class="wall_menu_mf" data-href="<?php  echo $this->createMobileUrl('m_friends', array('rid' => $rid,'from_user'=>$fans['from_user']))?>"></li>
            <?php  } ?>
        <!--<li class="wall_menu_ap"></li>-->
        <!--<li class="wall_menu_dc"></li>-->

            </ul>
</div>
<?php  } ?>
<div id="rulebox" style="display:none;z-index: 99999999;">
    <div class="rulebody"><span id="bp_title" style="font-size:20px;text-align:center;color: #03bd01;display: block;">许愿</span>
        <div id="bapingImage"></div>
        <input name="bpfor" type="hidden" value="" id="bpfor"/>
        <div class="form-group1 row1" style="margin-top:20px;">
            <label class="control-label col-md-4"></label>
            <div class="col-md-8 xuyuan">
                <div id="bapingQiehuan">
                    <textarea id="bapingContent"  class="form-control" name="content" style="margin-top:20px;width:92%; margin-left: 2%;margin-right: 2%;height:100px;border:1px solid #dcdcdc; overflow:hidden; resize:none;   padding: 2%;" placeholder="请不要发布广告涉黄等内容" ></textarea>
                </div>
            </div>

        </div>
    </div>
    <div style="width:100%;height:30px;text-align:center;line-height: 30px;    margin: 4% auto 1%;">

        <button class="rulefoot1" type="button"   onClick="closeRule();" style="background:none;color:black;">取消</button>
        <button class="rulefoot1" type="button" style="width: 40%;" id="button">
            <input type="button" value="许愿" style="background:none;border: none;color: #fff;" id="bpSubmit"/>
            <input type="hidden" value="0" id="_type"/>
            <!--0表示许愿1表示霸屏-->
        </button>
    </div>

</div>

<div id="markser" style="z-index: 9999999"></div>
<div id="toast"></div>

<script>
    function showrule(){
        if (1 == isback)
        {
            $.tip("您已经被禁言,不能许愿了");
            return;
        }

        var title='心愿';
        $("#bp_title").text(title);
        $(".baping").hide();
        $(".xuyuan").show();
        $("#markser").show();
        $("#bpSubmit").val("许愿");
        $("#rulebox").show();
        $("#_type").val("0");
    }
    function closeRule(){
        $("#rulebox").hide();
        $("#markser").hide();
    }



    $("#button").click(function () {
        var $btn = $(this);
        var $type =$("#_type").val();

        if ($btn.hasClass("disabled")) return;
        $btn.addClass("disabled");
        if($type==0){

            if (($("#bapingQiehuan textarea").val() == "") || ($("#bapingQiehuan textarea").val() == "null")) {


                $btn.removeClass("disabled");
                return $.tip('请输入要许愿的话');

            }else {
                var message = $("#bapingQiehuan textarea").val();
                if(!keyWord.check(message)){
                    $("#bapingQiehuan textarea").val('');
                    return $.tip('请勿发布广告等不适内容');
                }
//                console.log(message);
                //敏感词
                message = keyWord.replace(message);
            }
            $.ajax({
                url: '<?php  echo $this->createMobileUrl('savemessages',array('id'=>$rid,'from_user'=>$page_from_user))?>',
                type: 'post',
                dataType: 'json',
                contentType: "application/x-www-form-urlencoded; charset=utf-8",
                data: {
                    "message": message,
                    "type": 1,
                },
                success: function(data) {
                    $btn.removeClass("disabled");
                    if (data.success == 1) {
                        $("#rulebox").hide();
                        $("#bapingQiehuan textarea").val("");
                        $("#markser").hide();
//                        $(".content video").show();
                        $.tip("许愿成功！！")
                    } else {
//                        $(".content video").show();
                        $.tip(data.msg)
                        return;
                    }
                },
                error: function() {
                    window.location.reload();
                }
            });
        }



    })
</script>
<style>
    @keyframes icon-spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(359deg);
        }
    }
    #open_loading{z-index: 9;position: absolute;width: 100%;height: 100vh;text-align: center;}
    #open_loading .open_loading_bg{z-index: -1;position: absolute;width: 100vw;height: 100vh;background: #323232;text-align: center;background-image: url('/public/app/images/loading_bg.png');}
    #open_loading .loading_icon{background-image: url(../addons/hm_newdpm/new_messages/loading_logo2.png);background-repeat: no-repeat;background-position: center;background-size: 20%; }
    #open_loading .loading_icon .spin{width: 45%;animation: icon-spin 2s infinite linear;}
    #open_loading .loading_text{margin: auto;font-size: 5vw;font-family: '微软雅黑';color:#C6C6C6;padding: 2vh 6vh;background: #000000c9;display: inline-block;}
</style>
<div id="zhifu" style="display: none">

    <h4>订单信息</h4>

    <div class="panel">

        <div class="clearfix" style="padding-top:10px;">

            <p>商品名称 :<span class="pull-right otitle"><?php  echo $params['title'];?></span></p>

            <p>订单编号 :<span class="pull-right ordersn" ><?php  echo $params['ordersn'];?></span></p>

            <p>商家名称 :<span class="pull-right shangjia"><?php  echo $_W['account']['name'];?></span></p>

            <p>支付金额 :<span class="pull-right jine">￥<?php  echo sprintf('%.2f', $params['fee']);?> 元</span></p>
        </div>

    </div>

    <div class="pay-btn" id="wechat-panel">

        <form action="<?php  echo url('mc/cash/wechat');?>" method="post" id="biaodan">

            <input type="hidden" name="params" value=""  />

            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />

            <button class="weui_btn_primary weui_btn col-sm-12"  style="z-index: 9999;" type="submit" id="wBtn" value="wechat">微信支付(必须使用微信内置浏览器)</button>

        </form>

    </div>


</div>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/emojione.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/upload.min.js?v=2133"></script>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/lrz.bundle.js"></script>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/chats.min.js?v=20219341"></script>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/fish_ui.min.js?v=1222"></script>

<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<!--<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>-->
<script type="text/javascript">
    wx.config({
        debug:false,
        appId: '<?php  echo $package["appId"];?>',
        timestamp: '<?php  echo $package["timestamp"];?>',
        nonceStr: '<?php  echo $package["nonceStr"];?>',
        signature: '<?php  echo $package["signature"];?>',
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'hideMenuItems',
            'showMenuItems',
            'hideAllNonBaseMenuItem',
            'showAllNonBaseMenuItem',
            'translateVoice',
            'startRecord',
            'stopRecord',
            'onRecordEnd',
            'playVoice',
            'pauseVoice',
            'stopVoice',
            'uploadVoice',
            'downloadVoice',
            'chooseImage',
            'previewImage',
            'uploadImage',
            'downloadImage',
            'getNetworkType',
            'openLocation',
            'getLocation',
            'hideOptionMenu',
            'showOptionMenu',
            'closeWindow',
            'scanQRCode',
            'chooseWXPay',
            'openProductSpecificView',
            'addCard',
            'chooseCard',
            'openCard'
        ]
    });
    var sharedata = {
        "imgUrl" : "<?php  echo $shareimg;?>",
        "link" : "<?php  echo $sharelink;?>",
        "desc" : "<?php  echo $sharedesc;?>",
        "title" : "<?php  echo $sharetitle;?>"
    };

    wx.ready(function () {
        <?php  if($reply['is_b_share'] == 2) { ?>
        wx.hideOptionMenu();
        <?php  } else { ?>
        wx.showOptionMenu();
        wx.onMenuShareAppMessage(sharedata);
        wx.onMenuShareTimeline(sharedata);
        wx.onMenuShareQQ(sharedata);
        wx.onMenuShareQZone(sharedata);
        wx.onMenuShareWeibo(sharedata);
        <?php  } ?>
        });

</script>
<script type="text/javascript">
    window.onerror=function(msg,url,line){
        $.ajax({
            async:false,
            url: "",
            type: "GET",
            dataType: 'jsonp',
            jsonp: 'jsoncallback',
            data: {"url":url,"msg":msg,"line":line,"uid":uniacid,'ver':navigator.userAgent},
            timeout: 5000
        });
        return false;
    };
    if(/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)){
        //ok
    }else{
        $(".wall_menu_ap").hide();
    }
</script>

<script>
    function go_ty(){
        if (1 == isback)
        {
            $.tip("您已经被禁言");
            return;
        }
        location.href = "<?php  echo $this->createMobileUrl("mob_bp_sq", array('id' => $rid))?>";
    }
    function haobang(){
        location.href = "<?php  echo $this->createMobileUrl("haobang", array('rid' => $rid,'uid'=>$fans['from_user'],'type'=>'today'))?>";
    }
    $(function(){
        FastClick.attach(document.body);
    });
</script>
<script type="text/javascript">
    var upload = {
        start:function(){

            $.loadingModal(!0, "上传中..");
        },
        done:function(src,bigSrc,type){
            if(type==2){
                $.loadingModal(!1)
                $('.for_photo').attr("src", src);
                $("input[name=imgSrc]").val(src), n = src
            }else if(type==3){
                $.loadingModal(!1)
                $("#bp_file").val('');
                $.hideLoading();
                bp_image_src = src;
                //$('#bp_image').attr('src',img_url);
                $('#bp_type').val(1);
                $(".up_video").hide();
                $("#popup_bp .file_img:hidden").first().append("<img src='"+src+"'/>").show().css("display","inline-block");
                checkImageCount();
                $(".weui-uploader__files").scrollLeft($(".weui-uploader__files").width());
            }else {

                $.getJSON(go_sendmsg, {image: src}, function (i) {
                    $.loadingModal(!1)
                    $.tip(i.data);
                    $(".msg_input").removeClass("showing_menu")
                    $(".msg_list_ctx").css("padding-bottom", "4rem")
                    MsgLoader.loadmsg(true);

                })
            }
        },
        error:function(errorMsg){
            $.loadingModal(!1)
            showInfo(errorMsg||'上传失败!',false);
        }
    }
    var imageUpLoad = function(e,type){
        if (1 == isback)
        {
            $.tip("您已经被禁言");
            return;
        }
        upload.start();
        selectFileImage(e,{
            width:200,height:200,
            error:function(errorMsg){upload.error(errorMsg||'请上传宽高大于200px的图片')},
            callback:function(base64,rotate){
                ajax_imageUpload(base64,rotate,function(src,bigSrc){
                    upload.done(src,bigSrc,type);
                },function(errorMsg){
                    upload.error();
                })
            }
        })
    }
    var ajax_imageUpload = function(base64,rotate,fn1,fn2){
        base64 = base64.split('base64,');
        if(base64.length<1)
            return fn2();
        base64 = base64[1];
        var resultMsg = null;
        $.post(uploadImg,{strImg:base64,angel:rotate},function(result) {
            if(result.isResultTrue){
                fn1(result.resultMsg.sImgUrl,result.resultMsg.bImgUrl);
            }else{
                fn2(result.resultMsg);
            }
        });
    }
</script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
</html>

