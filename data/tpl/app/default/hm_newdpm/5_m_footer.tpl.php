<?php defined('IN_IA') or exit('Access Denied');?><link rel="stylesheet" href="../addons/hm_newdpm/static/newfooter/common.css?v=0332333233333" type="text/css" />
<link rel="stylesheet" href="../addons/haoman_base/base/animate.min.css?v=5053333" type="text/css" />
<link rel="stylesheet" type="text/css" href="../addons/hm_newdpm/static/newfooter/iconfont.css">
<style type="text/css">

    .newfooter-hdmu {
    <?php  if($photo['hd_bgimg']) { ?>
    background-image: url(<?php  echo tomedia($photo['hd_bgimg'])?>);
    background-size: 100% 100%;
    <?php  } else { ?>
        background-color: <?php  if($photo['hd_bgcolor']) { ?><?php  echo $photo['hd_bgcolor'];?>;<?php  } else { ?>#fff<?php  } ?>;
        opacity:<?php  if($photo['hb_bgcolor_tm']) { ?><?php  echo $photo['hb_bgcolor_tm'];?><?php  } ?>;
    <?php  } ?>

    }

    .newfooter-menu1 li.curr a {
        <?php  if(empty($reply['bottomcolor'])) { ?>
        color: #f78203;
        <?php  } else { ?>
        color: <?php  echo $reply['bottomcolor'];?>;
        <?php  } ?>

    }
    .newIcon {
        background: <?php  if(empty($reply['bottomcolor'])) { ?>#f78203;<?php  } else { ?><?php  echo $reply['bottomcolor'];?>;<?php  } ?>;
    }
</style>

<section class="newfooter" style="display:block;">
    <ul class="newfooter-menu1 clearfix">
        <li class="J_Live <?php  if($_GET['do']== 'messagesindex') { ?>js_curr curr<?php  } ?>">
            <a href="<?php  echo $this->createMobileUrl('messagesindex', array('id' => $rid))?>" class="js_sceneBtn">
                <i class="iconfont icon-xiaoxizhongxin"></i>
                <span>发消息</span>
            </a>
        </li>
        
        <li class="<?php  if($_GET['do']== 'index') { ?>js_curr curr<?php  } ?>">
            <a href="<?php  echo $this->createMobileUrl('index', array('id' => $rid))?>">
                <i class="iconfont icon-listview"></i>
                <span>流程</span>
            </a>
        </li>
        <li class="<?php  if($_GET['do'] != 'index' && $_GET['do'] != 'messagesindex' && $_GET['do'] != 'mybobing') { ?>js_curr curr&&$_GET['do'] != 'balance'&&$_GET['do'] != 'tixia_more'<?php  } ?>">
            <a href="javascript:void(0);" class="js_btnHudong">
                <i class="iconfont icon-all"></i>
                <span>互动</span>
            </a>
        </li>
        <li class="<?php  if($_GET['do']== 'mybobing') { ?>js_curr curr<?php  } ?>">
            <a href="<?php  echo $this->createMobileUrl('mybobing', array('id' => $rid))?>">
                <i class="iconfont icon-wodejuhuasuan"></i>
                <span>我的</span>
            </a>
        </li>
    </ul>
    <div class="newfooter-hdmu js_hudongMenu hidden">
        <ul class="clearfix">
            <?php  if($reply['istoupiao']==0||$vote['vote_status']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('go_toupiao', array('id' => $rid))?>">
                    <span class="newIcon newIcon-vote"><i></i></span>
                    <span class="name">投票</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($yyy['isyyy']==0) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('yyyIndex', array('id' => $rid))?>">
                    <span class="newIcon newIcon-shake"><i></i></span>
                    <span class="name">摇一摇</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if(ISCUSTOM == 1 && CUSTOM_VERSION == 'ZNL' && $znlreply['isznl']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('znlindex', array('id' => $rid))?>">
                    <span class="newIcon newIcon-rate"><i></i></span>
                    <span class="name">攒能量</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if(ISCUSTOM == 1 && CUSTOM_VERSION == 'DS' && $dsreply['is_openbbm']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('dsindex', array('id' => $rid))?>">
                    <span class="newIcon newIcon-dashang"><i></i></span>
                    <span class="name">打赏</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($reply['isjiabin']==0&&$reply['is_showjiabin']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('showjiabin', array('id' => $rid))?>">
                    <span class="newIcon newIcon-checkin"><i></i></span>
                    <span class="name">嘉宾展示</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($reply['isqhb']!=1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('qhbIndex', array('id' => $rid))?>">
                    <span class="newIcon newIcon-paper"><i></i></span>
                    <span class="name">抢红包</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($reply['rules']) { ?>
             <li>
                <a href="<?php  echo $this->createMobileUrl('rules', array('id' => $rid))?>">
                    <span class="newIcon newIcon-xiu"><i></i></span>
                    <span class="name">规则说明</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($photo['is_phone']==1) { ?>
             <li>
                <a href="<?php  echo $this->createMobileUrl('mob_photo', array('id' => $rid))?>">
                    <span class="newIcon newIcon-photo"><i></i></span>
                    <span class="name">相册</span>
                </a>
            </li>
             <?php  } ?>
           <?php  if($punishment['is_punishment']==1) { ?>
           <li>
                <a href="<?php  echo $this->createMobileUrl('mob_turnplate', array('id' => $rid))?>">
                    <span class="newIcon newIcon-wheel"><i></i></span>
                    <span class="name">惩罚转盘</span>
                </a>
            </li>
            <?php  } ?>
            <?php  if($shop['shop_status']==1) { ?>
            <li>
                <a href="<?php  echo $this->createMobileUrl('mob_bjlist', array('id' => $rid))?>">
                    <span class="newIcon"><i style="background:url('../addons/hm_newdpm/static/newfooter/shopping.png'); background-position: center center;background-size: 100%; border-radius: 9px;"></i></span>
                    <span class="name">商城</span>
                </a>
            </li>
            <?php  } ?>
             <?php  if($countmoney_reply['iscount'] == 1) { ?>
             <li>
               <a href="<?php  echo $this->createMobileUrl('count_money', array('id' => $rid))?>">
                   <span class="newIcon newIcon-money"><i></i></span>
                   <span class="name">数钱</span>
               </a>
           </li>
           <?php  } ?>
            <?php  if($custom) { ?>
              <?php  if(is_array($custom)) { foreach($custom as $row) { ?>
            <li>
                <a href="<?php  echo $row['mob_stock'];?>">
                    <span class="newIcon"><i style="background:url('<?php  echo toimage($row['thumb'])?>'); background-position: center center;
    background-size: 100%; border-radius: 9px;"></i></span>
                    <span class="name"><?php  echo $row['title'];?></span>
                </a>
            </li>
            <?php  } } ?>
            <?php  } ?>


            <!-- <li>
                <a href="#">
                    <span class="newIcon newIcon-shakeTree"><i></i></span>
                    <span class="name">摇摇树</span>
                </a>
            </li> -->
            <!-- <li>
                <a href="#">
                    <span class="newIcon newIcon-qdHead"><i></i></span>
                    <span class="name">手绘签到</span>
                </a>
            </li> -->
        </ul>
    </div>
</section>
<script type="text/javascript">
$(function() {
    // 互动按钮
    $('.js_btnHudong').bind('touchstart', function(e) {

        e.preventDefault();
        if ($('.js_hudongMenu').hasClass('hidden')) {
            $('.js_hudongMenu').removeClass('hidden');
            $(".newfooter-menu1 li").removeClass('curr');
            $('.js_btnHudong').parents('li').addClass('curr');
        } else {
            $(".newfooter-menu1").find('li.js_curr').addClass('curr');
            $('.js_hudongMenu').addClass('hidden');
            $('.js_btnHudong').parents('li').removeClass('curr');
        }
    });


});
</script>

