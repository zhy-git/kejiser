<?php defined('IN_IA') or exit('Access Denied');?><html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?></title>
    <script type="text/javascript" src="../addons/haoman_base/dpm/jquery11002.js"></script>
    <script type="text/javascript" src="../addons/haoman_base/base/semantic.min.js"></script>
    <link rel="stylesheet" href="../addons/hm_newdpm/img6/style.css?v=24323233" type="text/css">
    <link rel="stylesheet" href="../addons/haoman_base/base/semantic.min.css" type="text/css">
    <!--<link rel="stylesheet" href="../addons/hm_newdpm/common/segoeuiemoji.css" type="text/css">-->
    <script type="text/javascript" src="../addons/haoman_base/base/jquery.cookie.js"></script>
    <script type="text/javascript" src="../addons/hm_newdpm/new_messages/emojione.js"></script>

    <style type="text/css">
        body{
        <?php  if($reply['is_transparent']!=1) { ?>
            background: url(<?php  echo $bg;?>) center center;
        <?php  } ?>
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        .container1 .top .center span.title{
        color: <?php  if(empty($xysreply['xys_backcolor'])) { ?>#fff604;<?php  } else { ?><?php  echo $xysreply['xys_backcolor'];?>;<?php  } ?>;
        }
    </style>
</head>
<body <?php  if(!empty($video['vodio_bg3'])&&$reply['is_transparent']!=1) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg3'])?>"<?php  } ?>>

	<div class="chrometips chromeTip" style="display:none;">
            <a href="javascript:void(0);" class="btntips-close" id="chromeTipCloseBtn">×</a>
            <div class="inner-chrometips">
                <p class="chrm-word1">由于你正在使用非Chrome浏览器，大屏幕的体验处于不佳状态，建议您立刻更换浏览器，以获得更好的大屏幕产品用户体验</p>
            </div>
    </div>
    <script>

    $(function() {
        var isChrome = navigator.userAgent.indexOf('Chrome') != -1;
        if (!isChrome) {
            $('.chromeTip').show();
        }
        $('#chromeTipCloseBtn').click(function() {
            $('.chromeTip').hide();
        });
        //10s后自动关闭
        setTimeout(function() {
            $('.chromeTip').hide();
        }, 30000);
    });
    var face = {
        faceUrl: '../addons/haoman_base/dpm/face',
        arr: ["[笑哈哈]", "[得瑟]", "[得意地笑]", "[转圈]", "[挤地铁]", "[我忍了]", "[粉爱你]", "[粉红兔火车]", "[转圈圈]", "[鼓掌]", "[压力]", "[抢镜]", "[草泥马]", "[神马]", "[多云]", "[给力]", "[围观]", "[v5]", "[小熊猫]", "[粉红兔微笑]", "[动感光波]", "[囧]", "[互粉]", "[礼物]", "[微笑]", "[呲牙笑]", "[大笑]", "[羞羞]", "[小可怜]", "[抠鼻孔]", "[惊讶]", "[大眼睛羞涩]", "[吐舌头]", "[闭嘴]", "[鄙视]", "[爱你哦]", "[泪牛满面]", "[偷笑]", "[嘴一个]", "[生病]", "[装可爱]", "[切~]", "[右不屑]", "[左不屑]", "[嘘]", "[雷人]", "[呕吐]", "[委屈]", "[装可爱]", "[再见]", "[疑问]", "[困]", "[money]", "[装酷]", "[色眯眯]", "[ok]", "[good]", "[nonono]", "[赞一个]", "[弱]"],
        init: function(list) {
            var arr = this.arr;
            for (var i = 0; i < list.length; i++) {
                var val = list[i].innerHTML;
                for (var j = 0; j < arr.length; j++) {
                    while (val.indexOf(arr[j]) != -1) {
                        val = val.replace(arr[j], '<img style="width:30px;height:30px;" src="' + this.faceUrl + '/' + (j + 1) + '.png" />');

                    }
                }
                list[i].innerHTML = val;
            }
        },
        replaceText: function(val) {
            if (val != null && val != '') {
                var arr = this.arr;
                for (var i = 0; i < arr.length; i++) {
                    while (val.indexOf(arr[i]) != -1) {
                        val = val.replace(arr[i], '<img style="width:30px;height:30px;" src="' + this.faceUrl + '/' + (i + 1) + '.png" />');
                    }
                }
            }
            return val;
        }
    }
    </script>
    <div class="container demo-2">
        <div class="content">
            <div id="large-header" class="large-header" style="height: 732px;">
                <canvas id="demo-canvas" width="1440" height="732"></canvas>
            </div>
        </div>
    </div>
    <script src="../addons/hm_newdpm/img6/demo-2.js"></script>
    <div class="main">
	<div class="container1" style="padding-top: 15px;">
		<div class="top">
			
			<div class="center" style="text-align: center;">
				<span class="title" style="font-size: 32px;"><?php  echo $reply['title'];?></span>
			</div>
			<div class="right">
				<span class="tipword messageword ">
					<span id="messageNum" class="num"><?php  echo $totaldata;?></span><br>
					<span class="plus">条消息</span>				
				</span>
				<?php  if($reply['up_qrcode']) { ?>
				<img class="qrcode qrcodeAll" src="<?php  echo tomedia($reply['up_qrcode'])?>">
                <?php  } ?>
			</div>
		</div>
	</div>


        <div class="wall">
            <div class="left">
            </div>
            <div class="center">
                <div class="list" style="height: 756px;">
                    <ul id="list" class="ui transition visible">
                        <?php  if(is_array($list)) { foreach($list as $row) { ?>
                        <li id="li<?php  echo $row['id'];?>" onclick="viewOne(<?php  echo $row['id'];?>,this);" style="display: list-item;">
                            <div class="m1">
                                <div class="m2">
                                    <div class="pic"><img class="circular ui image " src="<?php  if(empty($row['avatar'])) { ?>../addons/hm_newdpm/img6/avatar.jpg<?php  } else { ?><?php  echo tomedia($row['avatar'])?><?php  } ?>" width="100" height="100">
                                        <!-- <div class="bakico"><img src="img6/ico-weixin.png"></div> -->
                                    </div>
                                    <div class="c f2" style="width:57%"><span><?php  echo $row['nickname'];?></span><span>：</span>
                                        <word>face.replaceText(<?php  echo $row['word'];?>)</word>
                                    </div>
                                    <?php  if(!empty($row['wordimg'])) { ?>
                                    <div class="image"><img src="<?php  echo tomedia($row['wordimg'])?>"></div>
                                    <?php  } ?>
                                </div>
                            </div>
                        </li>
                        <?php  } } ?>

                       
                    </ul>
                </div>
                <div class="footer"></div>
               
            </div>
            <div class="right"></div>
        </div>
      
    <div class="mone ui transition hidden" id="mone" onclick="viewOneHide();"><div class="leftside"><div class="part"><div class="pic"><img class="msgconimg" src="../addons/hm_newdpm/img6/avatar.jpg" width="100" height="100"></div><div class="username" style="color:#fff"><span style="color:#fff"></span></div></div></div><div class="rightside"><div class="rightmain"><div class="rconner"></div><span class="msgcon"></span></div></div></div>

    </div>





<audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>


    <script type="text/javascript">
    $(document).ready(function() {
        if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
            document.getElementById('media').pause();
        }
    });


    setInterval(function(){
        $.ajax({
            url:"<?php  echo $this->createMobileUrl('haishen', array('rid' => $rid,'gets'=>'message','isckmessage'=>$isckmessage))?>",
            dataType:'json',
            success:function(data){

                var code = data['code'];
                var shenyu = data['shenyu'];
                $('#messageNum').html(shenyu);
                // console.log(shenyu);
            }
        })
    },4000);


    var refreshtime = 3;
    var meslen = 0;
    var cur = 0; //当前位置
    var o_cur = 0; //当前位置
    var mtime;
    var mesdata = new Array();
    var lastid = 1;
    var rootimg = "<?php  echo $_W['attachurl'];?>";

    function viewOneHide() {
        oopen = switchto(oopen, 'mone');
    }

    function viewOne(cid, t) {
        var str = $('#li' + cid);
        var onenickname = str.find("span").html();
        var oneword = str.find("word").text();
        var onesrc = str.find("img").attr('src');
        var oneimgsrc = str.find(".image").find("img").attr('src');
        if (typeof(oneimgsrc) == 'string') {
            $("#mone").find(".msgcon").html('<img src="' + oneimgsrc + '"/>');
        } else {
            $("#mone").find(".msgcon").text(emojione.toImage(oneword));
        }
        $("#mone").find("span").first().html(onenickname);
        $("#mone").find("img").first().attr('src', onesrc);
        oopen = switchto(oopen, 'mone');
    }

    // function viewExplan() {

    //     $("#explan").transition('fade up');
    // }

    function viewstyle() {
        $("#style").transition('scale');
    }

    function messageAdd() {
        // console.log(cur);
        // console.log(mesdata[7]);
        if (cur == meslen) {

// console.log($("#list li").length);
// if($("#list li").length > 0){
//     o_cur = cur;
    cur = 0;
// }
            messageData();
            return false;
        }
        if (mesdata[cur]) {

           
            // console.log(len+"|"+cur);
        	// alert(cur);
        	
            if (mesdata[cur][4] == '') {

                var avatar = mesdata[cur][1];
                if(avatar == ''){
                    avatar = "../addons/hm_newdpm/img6/avatar.jpg";
                }
                var userName = mesdata[cur][2];
                // var userName = "";
                var str = '<li id=li' + cur + ' onclick="viewOne(' + cur + ',this);"><div class=m1><div class="m2"><div class="pic"><img class="circular ui image " src="' + avatar + '" width="100" height="100" /></div><div class="c f2"><span>' + userName + '</span><span>：</span><word>' + face.replaceText(mesdata[cur][3]) + '</word></div></div></div></li>';
            } else {
                var avatar = mesdata[cur][1];
                if(avatar == ''){
                    avatar = "../addons/hm_newdpm/img6/avatar.jpg";
                }
                var userName = mesdata[cur][2];
                // var userName = "";
                //如果是图片
                var str = '<li id=li' + cur + ' onclick="viewOne(' + cur + ',this);"><div class=m1><div class="m2"><div class="pic"><img class="circular ui image" src="' + avatar + '" width="100" height="100" /></div><div class="c f2" style="width:57%"><span>' + userName + '</span><span>：</span><word>' + face.replaceText(mesdata[cur][3]) + '</word></div><div class="image"><img src="'  + mesdata[cur][4] + '"/></div></div></div></li>';
            }
        } else {

            // console.log(mesdata);
            // console.log("出现data[cur]=null：" + cur);
        }
        if (cur > 50) {
            $("li").remove("#li" + (cur - 50));
        }
        $("#list").prepend(str);
        $("#li" + cur).slideDown(600);
        <?php  if($reply['isopenimg']==1) { ?>
        // console.log(cur);
        if(mesdata[cur][4] != '') {

            viewOne(cur, cur);
            window.setTimeout('viewOneHide();', 5000);
            // data[cur][4] = null;
        }
        <?php  } ?>
        cur++;

        messageData();
    }



    function messageData() {

        // console.log(len);
        var url = '<?php  echo $this->createMobileUrl('dpm_getmessages',array('rid'=>$rid))?>';
        $.post(url, {
            len:meslen
        }, function(d) {

            d = eval("(" + d + ")");
            // alert(d);return;
            // alert(d);
            // console.log(d['data']);

            if (d['ret'] == 1) {
                $.each(d['data'], function(i, v) {
                    mesdata.push(new Array(v['id'], v['avatar'], v['nickname'], emojione.toImage(v['word']), v['wordimg'], v['fromtype']));
                    lastid = v['id'];

                    // cur = o_cur;
                    // cur = 0;
                    
                    meslen++;
                });
                if(d['data'].length>0){
                    cur = meslen - d['data'].length;
                }
                
              //  console.log(d['data'].length);

            } else {
                //	alert('木有新消息..每5秒ajax一次');
                window.setTimeout('messageData();', refreshtime * 1000);
            }
        });
    }
    window.onload = function() {
        mtime = setInterval(messageAdd, refreshtime * 1000);

    }

function spaceStart(){
    //预留空格开始的方法，不要删除
    }
    </script>

<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>
