<?php defined('IN_IA') or exit('Access Denied');?> <link rel="stylesheet" href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=haoman_base&do=GetCss&css=footer" type="text/css">
    <style type="text/css">
        .flbtn-close {
            position: absolute;
            top: 20px;
            right: 20px;
            display: block;
            width: 30px;
            height: 30px;
            background: url(../addons/hm_newdpm/common/footer/btn-close.png) 0 0 no-repeat;
            z-index: 2;
        }
    </style>
    <div class="Panel Bottom" style="bottom: 0px;">
        <div class="bottommenu">
            <?php  if($reply['isyyy']==0) { ?>
            <!-- <div class="helperpanel pulse"> -->
            <div class="helperpanel ">
                <span class="ssgz">搜索<span class="mp_account"><?php  echo $_W['account']['name'];?></span></span> <span class="fs"> 发送关键词<span class="activity_key"><?php  echo $keywords['keywords'][0]['content'];?></span>即可参与</span>
            </div>
            <?php  } ?>
            <div class="navbar">
                <ul class="navbarmenu">
                    <li title="显示二维码,快捷键E" class="curr">
                        <a class="neicon small qrcodeAll"><img class="" src="../addons/hm_newdpm/common/footer/icons-003.png">
                            <p>二维码</p>
                        </a>
                    </li>
                    <li title="控制音乐,快捷键X" class="curr">
                        <a id="bg_music" class="neicon small"><img id="music_img" class="" src="../addons/hm_newdpm/common/footer/icon_music.png">
                            <p>音乐</p>
                        </a>
                    </li>
                    <li title="打开视频,快捷键A" class="curr">
                        <a id="openVideo" class="neicon small"><img class="" src="../addons/hm_newdpm/common/footer/icons-007.png">
                            <p>视频</p>
                        </a>
                    </li>
                    <li title="3D签到墙,快捷键T" class="curr">
                        <a data-url="<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid))?>" class="neicon small isonclick"><img class="" src="../addons/hm_newdpm/common/footer/icon_3dsign.png">
                            <p>3D签到</p>
                        </a>
                    </li>
                    <li title="显示消息墙,快捷键R" class="curr">
                        <a data-url="<?php  echo $this->createMobileUrl('dpm_messages',array('rid'=>$rid))?>"  class="neicon small isonclick"><img class="" src="../addons/hm_newdpm/common/footer/icons-005.png">
                            <p>消息墙</p>
                        </a>
                    </li>
                    <li class="curr">
                        <a onclick="document.getElementById('popup').style.display='block';" class="neicon small"><img class="" src="../addons/hm_newdpm/common/footer/icons-001.png">
                            <p>应用</p>
                        </a>
                    </li>
                    <li class="curr">
                        <a class="neicon small navbaritem fullscreen nofull"><img class="" src="../addons/hm_newdpm/common/footer/icons-002.png">
                            <p>进入全屏</p>
                        </a>
                        <a class="neicon small navbaritem fullscreen isfull" style="display: none" ><img class="" src="../addons/hm_newdpm/common/footer/icons-002.png">
                            <p>退出全屏</p>
                        </a>
                    </li>
                </ul>
                <div class="btn-popup hidden" id="popup"> <i class="closeb" onclick="document.getElementById('popup').style.display='none';"></i> <i class="icon-arrow2"></i>
                    <ul class="btn-list clearfix">
                        <?php  if($reply['ischoujiang']!=1) { ?>
                        <li title="抽奖,快捷键Y" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_choujiang',array('rid'=>$rid))?>" class="neicon isonclick"><img class="ico017" src="../addons/hm_newdpm/common/footer/ico017.png">
                                <p>抽奖</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($reply['isqhb']!=1) { ?>
                        <li title="抢红包,快捷键S" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_qianghongbao',array('rid'=>$rid))?>" class="neicon isonclick"><img class="ico001" src="../addons/hm_newdpm/common/footer/ico001.png">
                                <p>抢红包</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($yyyreply['isyyy']==0) { ?>
                        <li title="摇一摇,快捷键F" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_yyy',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico002" src="../addons/hm_newdpm/common/footer/ico002.png">
                                <p>摇一摇</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($reply['timenum']==0) { ?>
                        <li title="开幕墙,快捷键W" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid))?>" class="neicon isonclick"><img class="ico007" src="../addons/hm_newdpm/common/footer/ico007.png">
                                <p>开幕墙</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($reply['share_type']==0) { ?>
                        <li title="闭幕墙,快捷键Z" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid,'themes'=>1))?>" class="neicon isonclick"><img class="ico013" src="../addons/hm_newdpm/common/footer/ico014.png">
                                <p>闭幕墙</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($reply['istoupiao']==0||$vote['vote_status']==1) { ?>
                        <li title="投票,快捷键D" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_vote',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico004" src="../addons/hm_newdpm/common/footer/ico004.png">
                                <p>投票</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($reply['isjiabin']==0) { ?>
                        <li title="嘉宾展示,快捷键G" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_jiabing',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico008" src="../addons/hm_newdpm/common/footer/ico008.png">
                                <p>嘉宾展示</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <li title="弹幕,快捷键B" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_tanmu',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico015" src="../addons/hm_newdpm/common/footer/ico015.png">
                                <p>弹幕</p>
                            </a>
                        </li>
                        <?php  if($xysreply['isxys']==0) { ?>
                        <li title="许愿树,快捷键C" class="curr">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_wedding',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico006" src="../addons/hm_newdpm/common/footer/ico006.png">
                                <p>许愿树</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if(CUSTOM_VERSION == 'DS' && ISCUSTOM == 1) { ?>
                        <li class="curr" title="打赏,快捷键未设置">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_dsindex',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico003" src="../addons/hm_newdpm/common/footer/ico003.png">
                                <p>打赏</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if(CUSTOM_VERSION == 'ZNL' && ISCUSTOM == 1) { ?>
                        <li class="curr" title="攒能量,快捷键未设置">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_znlindex',array('rid'=>$rid))?>" class="neicon isonclick"><img class="ico005" src="../addons/hm_newdpm/common/footer/ico005.png">
                                <p>攒能量</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($xyhreply['is_xyh']==0) { ?>
                         <li class="curr" title="幸运号,快捷键K">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_xyh',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico016" src="../addons/hm_newdpm/common/footer/ico016.png">
                                <p>幸运号</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($xyhreply['is_xysjh']==0) { ?>
                        <li class="curr" title="幸运手机号,快捷键j">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_xysjh',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico019" src="../addons/hm_newdpm/common/footer/ico019.png">
                                <p>幸运手机号</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($xyhreply['is_zdycj']==0) { ?>
                        <li class="curr" title="幸运抽奖号,快捷键无">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_zdycj',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico019" src="../addons/hm_newdpm/common/footer/ico001-.png">
                                <p>自定义抽奖</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($bpreply['openscreen']==0) { ?>
                        <li class="curr" title="霸屏,快捷键p">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_bp',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico012" src="../addons/hm_newdpm/common/footer/ico012.png">
                                <p>霸屏</p>
                            </a>
                        </li>
                      <?php  } ?>
                        <?php  if($xysreply['is_pair']==0) { ?>
                         <li class="curr" title="对对碰,快捷键H">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_ddp',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico009" src="../addons/hm_newdpm/common/footer/ico009.png">
                                <p>对对碰</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($xysreply['is_turntable']==0) { ?>
                        <li class="curr" title="大转盘,快捷键I">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_dzp',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico010" src="../addons/hm_newdpm/common/footer/ico010.png">
                                <p>大转盘</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($cjxreply['isCjxStart']==0) { ?>
                        <li class="curr" title="抽奖箱,快捷键L">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_cjx',array('rid'=>$rid))?> " class="neicon isonclick"><img class="ico016" src="../addons/hm_newdpm/common/footer/ico020.png">
                                <p>抽奖箱</p>
                            </a>
                        </li>
                        <?php  } ?>
                       <!---->
                       <!---->
                        <?php  if($shouqian['status']==1) { ?>
                        <li class="curr" title="手绘签到,快捷键U">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_shouqian',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico016" src="../addons/hm_newdpm/common/footer/ico016.png">
                                <p>手绘签到</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($shouqian['pm_status']==1) { ?>
                       <li class="curr" title="普通签到,快捷键V">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_new_index2',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico005" src="../addons/hm_newdpm/common/footer/ico005.png">
                                <p>普通签到</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($photo_wall['photo_status']==1) { ?>
                         <li class="curr" title="相册,快捷键M">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_photo_wall',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico020" src="../addons/hm_newdpm/common/footer/ico003.png">
                                <p>相册</p>
                            </a>
                        </li>
                        <?php  } ?>
                        <?php  if($countmoney['iscount']==1) { ?>
                        <li class="curr" title="数钱，快捷键无">
                            <a data-url="<?php  echo $this->createMobileUrl('dpm_count_money',array('rid'=>$rid))?>"  class="neicon isonclick"><img class="ico021" src="../addons/hm_newdpm/common/footer/ico021.png">
                                <p>数钱</p>
                            </a>
                        </li>
                       <?php  } ?>
                        <?php  if($custom) { ?>
                          <?php  if(is_array($custom)) { foreach($custom as $row) { ?>
                              <li class="curr" title="">
                            <a data-url="<?php  echo $row['dpm_stock'];?>"  class="neicon isonclick"><img class="ico020" src="<?php  echo toimage($row['thumb'])?>">
                                <p><?php  echo $row['title'];?></p>
                            </a>
                              </li>
                        <?php  } } ?>
                        <?php  } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="show_hide_nav"><img src="../addons/hm_newdpm/common/footer/opened.png"></div>
    <input type="hidden" id="panel_status" value="1">
    <script type="text/javascript">
        $(document).ready(function() {
            $(".isonclick").on('click', function() {
                var isclickUrl = $(this).data('url');
                $("#framePage").attr("src", isclickUrl);
            });

            $("#show_hide_nav img").on('click', function() {
                if ($("#panel_status").val() == 0) {
                    $(this).attr("src", '../addons/hm_newdpm/common/footer/opened.png');
                    $(".Panel.Bottom").css({
                        bottom: 0
                    })
                    $("#panel_status").val("1");
                } else {
                    $(".Panel.Bottom").css({
                        bottom: "-" + $(".Panel.Bottom").height() + "px"
                    });
                    $("#panel_status").val("0");
                    $(this).attr("src", '../addons/hm_newdpm/common/footer/chosed.png');

                }
            });

            $("#bg_music").click(function() {
                

                if ($("#music_img").attr("src") == '../addons/hm_newdpm/common/footer/no_music.png') {
                    document.getElementById('framePage').contentWindow.document.getElementById('media').play();
                    $("#music_img").attr("src", '../addons/hm_newdpm/common/footer/icon_music.png');
                } else {
                    document.getElementById('framePage').contentWindow.document.getElementById('media').pause();
                    $("#music_img").attr("src", '../addons/hm_newdpm/common/footer/no_music.png');
                }
            });

             $(".nofull").click(function() {
                h();
                $(".isfull").show();
                $(".nofull").hide();
            });
            $(".isfull").click(function() {
                b();
                $(".isfull").hide();
                $(".nofull").show();
            });

        });


    $(".qrcodeAll").click(function() {
        $(".mark-ewm").show();
        $(".introBox").show();
    });

    $("#openVideo").click(function() {
        $("#shipingplay").show();
        $(".mark-ewm").show();
        // document.getElementById('media').pause();
        document.getElementById('framePage').contentWindow.document.getElementById('media').pause();
    });

    $(".closeshiping").click(function() {
        $("#shipingplay").hide();
        $(".mark-ewm").hide();
        $("#shiping_id").trigger('pause');
        if($("#music_img").attr("src") == '../addons/hm_newdpm/common/footer/icon_music.png'){
            // document.getElementById('media').play();
            document.getElementById('framePage').contentWindow.document.getElementById('media').play();
        }
        
    });
    
    $(".flbtn-close").click(function() {
        $(".mark-ewm").hide();
        $(".introBox").hide();
    });


    function h() {
        var j = document.documentElement,
            k = j.requestFullScreen || j.webkitRequestFullScreen || j.mozRequestFullScreen || j.msRequestFullScreen,
            l;
        if (typeof k != "undefined" && k) {
            k.call(j);
            return
        }
        if (typeof window.ActiveXObject != "undefined") {
            l = new ActiveXObject("WScript.Shell");
            if (l) {
                l.SendKeys("<?php echo F11;?>")
            }
        }
    }

    function b() {
        var k = document,
            j = k.cancelFullScreen || k.webkitCancelFullScreen || k.mozCancelFullScreen || k.exitFullScreen,
            l;
        if (typeof j != "undefined" && j) {
            j.call(k);
            return
        }
        if (typeof window.ActiveXObject != "undefined") {
            l = new ActiveXObject("WScript.Shell");
            if (l != null) {
                l.SendKeys("<?php echo F11;?>")
            }
        }
    }

    $(document).keydown(function(e){

    if(e.which == 81) {
        if($(".isfull").is(":hidden")){
            h();
            $(".isfull").show();
            $(".nofull").hide();
        }else{
            b();
            $(".isfull").hide();
            $(".nofull").show();
        }
    }
    if(e.which == 87) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid))?>");
    }
    if(e.which == 69) {
        if($(".introBox").is(":hidden")){
            $(".mark-ewm").show();
            $(".introBox").show();
        }else{
            $(".mark-ewm").hide();
            $(".introBox").hide();
        }
    }
//        if(e.which == 78) {
//            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_dsindex',array('rid'=>$rid))?>");
//        }
//        if(e.which == 79) {
//            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_znlindex',array('rid'=>$rid))?>");
//        }
    if(e.which == 82) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_messages',array('rid'=>$rid))?>");
    }
        if(e.which == 80) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_bp',array('rid'=>$rid))?>");
        }
    if(e.which == 84) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_3dqd',array('rid'=>$rid))?>");
    }
    if(e.which == 89) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_choujiang',array('rid'=>$rid))?>");
    }
    if(e.which == 83) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_qianghongbao',array('rid'=>$rid))?>");
    }
        if(e.which == 77) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_photo_wall',array('rid'=>$rid))?>");
        }
        if(e.which == 48) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_vote_result',array('rid'=>$rid))?>");
        }
    if(e.which == 71) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_jiabing',array('rid'=>$rid))?>");
    }
    if(e.which == 68) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_vote',array('rid'=>$rid))?>");
    }
    if(e.which == 86) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_new_index2',array('rid'=>$rid))?>");
    }
    if(e.which == 85) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_shouqian',array('rid'=>$rid))?>");
    }

    if(e.which == 72) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_ddp',array('rid'=>$rid))?>");
    }
    if(e.which == 73) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_dzp',array('rid'=>$rid))?>");
    }
    if(e.which == 74) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_xysjh',array('rid'=>$rid))?>");
    }
    if(e.which == 75) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_xyh',array('rid'=>$rid))?>");
        }
    if(e.which == 76) {
            $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_cjx',array('rid'=>$rid))?>");
        }
    if(e.which == 90) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_index',array('rid'=>$rid,'themes'=>1))?>");
    }
    if(e.which == 88) {
        lanren.changeClass('#lanren','media');
    }
    if(e.which == 67) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_wedding',array('rid'=>$rid))?>");
    }
    if(e.which == 66) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_tanmu',array('rid'=>$rid))?>");
    }
    if(e.which == 70) {
        $("#framePage").attr("src", "<?php  echo $this->createMobileUrl('dpm_yyy',array('rid'=>$rid))?>");
    }
    if(e.which == 65) {
        $("#shipingplay").show();
        $(".mark-ewm").show();
        // document.getElementById('media').pause();
        document.getElementById('framePage').contentWindow.document.getElementById('media').pause();
    }
    if(e.which == 32) {
        document.getElementById('framePage').contentWindow.spaceStart();
    }
});
    </script>
   