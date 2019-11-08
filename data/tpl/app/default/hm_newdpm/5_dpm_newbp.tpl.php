<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <title><?php  echo $bpreply['bp_title'];?></title>
    <link rel="icon" href="/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="欢迎来到互动现场">
    <meta name="description" content="欢迎来到互动现场">
    <script src="../addons/haoman_base/base/jquery-2.1.4.min.js"></script>
    <script src="../addons/hm_newdpm/new_messages/app/js/vue.min.js"></script>
    <script src="../addons/hm_newdpm/new_messages/app/js/new_barcommon.js"></script>
	<link rel="stylesheet" href="../addons/hm_newdpm/new_messages/app/css/newbar_global.css">
	<link rel="stylesheet" href="../addons/hm_newdpm/new_messages/app/css/animate.min.css">
    <script type="text/javascript" src="../addons/hm_newdpm/new_messages/emojione.js"></script>

        <script>
            var rootimg = "<?php  echo $_W['attachurl'];?>";
            var getRandom = function(begin,end){
            return parseInt(Math.random()*((end>begin?end-begin:begin-end)+1)+(end>begin?begin:end));
             }
        var bp_zhutis = <?php  echo $bptheme;?>;
        var image = {
                    //percent是后台设置的投放方式 100-表示100% 50-50% 25-25% 0-按普通上墙图片处理
                    percent:'',
                    max:4,//最大图片容量
                    time:6,//更新图片的时间
                    advertTime:10,//更新广告图片时间
                    last:null,
                    index:0,
                    start:false,
                    isRound:false,
                    able:true,
                    timeout:null,
                    round:-1,
                    resetRound:function(){
                        this.isRound = false;
                        this.round = 100/parseInt(this.percent);
                        if(this.percent==100&&$('#imageBox .advert').length>0)
                            this.round = -2;
                        if($('#imageBox .advert').length==0||this.percent==0)
                            this.round = -1;
                    },
                    init:function(){
                        $('#beforeImageLoad').remove();
                        this.percent = 0;
                        //this.percent = this.percent.indexOf('%')!=-1?this.percent.replace('%',''):0;
                        this.resetRound();
                        this.run();
                    },
                    getLast:function(){
                        var arr = $('#imageBox .normal');
                        if(arr.length==0)
                            return null;
                        var last = parseInt($(arr[0]).attr('index'));
                        var lastObj = arr[0];
                        for(var i = 1; i < arr.length; i++) {
                            if (last > parseInt($(arr[i]).attr('index'))) {
                                last = parseInt($(arr[i]).attr('index'));
                                lastObj = arr[i];
                            }
                        }
                        return lastObj;
                    },
                    replace:function(tid,src){
                        var obj = this.getLast();
                        if(obj==null)
                            return;
                        var index = this.getMaxIndex()+1;
                        $(obj).html('<img onload="image.load(this)" onerror="image.error(this)" src="'+src+'" />').attr({index:index,tid:tid});
                    },
                    add:function(tid,src){
                        tid = tid||'';
                        if(this.percent==100&&$('#imageBox .advert').length>0)
                            return;
                        if($('#imageBox div').length>=this.max)
                            this.replace(tid,src);
                        else{
                            var index = this.getMaxIndex()+1;
                            var html = '<div class="normal" index="'+index+'" tid="'+tid+'"><img src="'+src+'" onload="image.load(this)" onerror="image.error(this)" /></div>';
                            $(html).appendTo($('#imageBox'));
                            if($('#imageBox .defaultImage').length>0)
                                $('#imageBox .defaultImage').remove();
                        }
                        if(!this.start)
                            this.run();
                    },
                    getOne:function(){
                        if(this.round==-2){
                            var index = getRandom(0,$('#imageBox .advert').length-1);
                            index = $($('#imageBox .advert')[index]).index();
                            if(this.last!=null&&$('#imageBox .advert').length>1){
                                while(this.last==index){
                                    index = getRandom(0,$('#imageBox .advert').length-1);
                                    index = $($('#imageBox .advert')[index]).index();
                                }
                            }
                            return index;
                        }else if(this.round==-1){
                            var index = getRandom(0,$('#imageBox div').length-1);
                            if(this.last!=null&&$('#imageBox div').length>1){
                                while(this.last==index){
                                    index = getRandom(0,$('#imageBox div').length-1);
                                }
                            }
                            return index;
                        }else{
                            this.round--;
                            var index;
                            if(this.isRound){
                                if($('#imageBox .normal').length==0){
                                    index = getRandom(0,$('#imageBox div').length-1);
                                    while(this.last==index){
                                        index = getRandom(0,$('#imageBox div').length-1);
                                    }
                                }else{
                                    index = getRandom(0,$('#imageBox .normal').length-1);
                                    index = $($('#imageBox .normal')[index]).index();
                                    if(this.last!=null&&$('#imageBox .normal').length>1){
                                        while(this.last==index){
                                            index = getRandom(0,$('#imageBox .normal').length-1);
                                            index = $($('#imageBox .normal')[index]).index();
                                        }
                                    }
                                }
                                if(this.round==0)
                                    this.resetRound();
                                return index;
                            }else{
                                var index;
                                if(this.round==0){
                                    index = getRandom(0,$('#imageBox .advert').length-1);
                                    index = $($('#imageBox .advert')[index]).index();
                                    if(this.last!=null&&$('#imageBox .advert').length>1){
                                        while(this.last==index){
                                            index = getRandom(0,$('#imageBox .advert').length-1);
                                            index = $($('#imageBox .advert')[index]).index();
                                        }
                                    }
                                    this.isRound = true;
                                    this.resetRound();
                                }else{
                                    index = getRandom(0,$('#imageBox div').length-1);
                                    if(this.last!=null&&$('#imageBox div').length>1){
                                        while(this.last==index){
                                            index = getRandom(0,$('#imageBox div').length-1);
                                        }
                                    }
                                    if($($('#imageBox div')[index]).hasClass('advert'))
                                        this.isRound = true;
                                }
                                return index;
                            }
                        }
                    },
                    run:function(){
                        if(this.start)
                            return;
                        this.able = true;
                        var arr = $('#imageBox div');
                        if(arr.length<2)
                            return $('#imageBox div').addClass('visible'),this.able = false;
                        this.start = true;
                        var delay = this.time;
                        var t = this;
                        $('#imageBox div.visible').removeClass('visible');
                        var one = this.getOne();
                        this.last = one;
                        $($('#imageBox div')[one]).addClass('animateBig');
                        this.timeout = setTimeout(function(){
                            if($('#imageBox div').length<2){
                                $('#imageBox div').addClass('visible');
                                t.able = false;
                                return;
                            }
                            var index = t.getOne();
                            t.last = index;
                            if($('#imageBox div.animateBig').length>0){
                                var e = $('#imageBox div.animateBig')[0];
                                $(e).removeClass('animateBig');
                                $(e).find('img').css({'-webkit-transform':'scale(1)','transform':'scale(1)'});
                                $($('#imageBox div')[index]).find('img').css({'-webkit-transform':'scale(1.1)','transform':'scale(1.1)'});
                                $($('#imageBox div')[index]).addClass('animateSmall');
                            }else{
                                if($('#imageBox div.animateSmall').length>0){
                                    var e = $('#imageBox div.animateSmall')[0];
                                    $(e).removeClass('animateSmall');
                                    $(e).find('img').css({'-webkit-transform':'scale(1)','transform':'scale(1)'});
                                }
                                $($('#imageBox div')[index]).find('img').css({'-webkit-transform':'scale(1)','transform':'scale(1)'});
                                $($('#imageBox div')[index]).addClass('animateBig');
                            }
                            if($('#imageBox div').length<2){
                                $('#imageBox div').addClass('visible');
                                image.start = false;
                                return;
                            }
                            var arg = arguments.callee;
                            var _delay = t.time;
                            if($($('#imageBox div')[index]).hasClass('advert'))
                                _delay = t.advertTime;
                            if(t.able)
                                t.timeout = setTimeout(arg,_delay*1000);
                        },delay*1000);
                    },
                    setImage:function(){
                        var arr = $('.slidebox_img');
                        for(var x=0;x<arr.length;x++){
                            this.load(arr[x]);
                        }
                    },
                    error:function(e){
                        $(e).attr({src:"<?php  echo $lbbg;?>"});
                    },
                    load:function(e){
                        var dir = $(e.parentNode).width()/$(e.parentNode).height();
                        $(e).css({visibility:'visible'});
                        $(e).css({width:'100%',height:"100%"});
                        /*if($(e).width()/$(e).height()<=dir){
                            $(e).css({width:'100%',left:0});
                            setTimeout(function(){
                                var mt = ($(e).height()-$(e.parentNode).height())/-2;
                                $(e).css({top:mt,visibility:'visible'});
                            },10);
                        }else{
                            $(e).css({top:0,height:'100%'});
                            setTimeout(function(){
                                var ml = ($(e).width()-$(e.parentNode).width())/-2;
                                $(e).css({left:ml,visibility:'visible'});
                            },10);
                        }*/
                    },
                    getMaxIndex:function(){
                        var arr = $('#imageBox .normal');
                        if(arr.length==0)
                            return 0;
                        var last = parseInt($(arr[0]).attr('index'));
                        for(var i = 1; i < arr.length; i++) {
                            if (last < parseInt($(arr[i]).attr('index'))) {
                                last = parseInt($(arr[i]).attr('index'));
                            }
                        }
                        return last;
                    },
                    del:function(tid){
                        $('#imageBox div[tid="'+tid+'"]').remove();
                    },
                    replaceAll:function(dt){
                        if(this.percent==100&&$('#imageBox .advert').length>0)
                            return;
                        this.able = false;
                        this.start = false;
                        var html = '';
                        var len = dt.length;
                        for(var x=0;x<dt.length;x++){
                            html += '<div class="normal" index="'+(len-x)+'" tid=""><img src="'+dt[x]+'" onload="image.load(this)" onerror="image.error(this)" /></div>';
                        }
                        $('#imageBox .normal').remove();
                        $(html).appendTo($('#imageBox'));
                        this.able = true;
                        try{
                            clearTimeout(image.timeout);
                        }catch(ex){}
                        this.run();
                    },
                    replace_one:function(tid){
                        $('#imageBox div[tid="'+tid+'"]').find('img').attr('src',"../addons/hm_newdpm/bapinimg/onwallNoimg.jpg");
                    }

                };


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
        <style>
            body {
                font-size: 12px;
                -webkit-font-smoothing: antialiased;
                font-family: "Microsoft Yahei", Tahoma, Helvetica, Arial, "\5b8b\4f53", sans-serif;
                background-image: url("");
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover
            }

            .loading {
                z-index: 99999999991;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: #000 url("") no-repeat center center;
                background-size: cover;
                width: 100%;
                height: 100%;
                display: box;
                display: -webkit-box;
                display: -moz-box;
                display: -ms-box;
                display: -o-box;
                box-pack: center;
                -webkit-box-pack: center;
                -moz-box-pack: center;
                -ms-box-pack: center;
                -o-box-pack: center;
                box-align: center;
                -webkit-box-align: center;
                -moz-box-align: center;
                -ms-box-align: center;
                -o-box-align: center;
                transition: opacity .3s ease-in;
                -webkit-transition: opacity .3s ease-in;
                -moz-transition: opacity .3s ease-in;
                -ms-transition: opacity .3s ease-in;
                -o-transition: opacity .3s ease-in;
                transform-origin: center center;
                -webkit-transform-origin: center center;
                -moz-transform-origin: center center;
                -ms-transform-origin: center center;
                -o-transform-origin: center center
            }



            .full-container .bpvideo-box {
                width: 100%;
                height: 100%;
                background: #000;
                display: flex;
                display: -webkit-flex;
                display: -moz-flex;
                display: -ms-flex;
                display: -o-flex
            }

            .full-container .bpvideo-box video {
                width: 100%;
                height: 100%;
                transform: scale(1.2);
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2)
            }

            .loginform {
                position: absolute;
                width: 300px;
                height: 140px;
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                background-color: rgba(0, 0, 0, 0);
                left: 50%;
                margin-left: -150px;
                top: 50%;
                margin-top: -75px;
                padding: 20px;
                font-size: 24px;
                color: #fff;
                text-align: center;
                text-shadow: 1px 2px 3px rgba(0, 0, 0, .39);
                display: none
            }

            .loginform .password {
                color: #fff;
                position: relative;
                width: 100%;
                height: 32px;
                margin: 20px auto;
                line-height: 32px;
                font-size: 20px;
                text-indent: 15px;
                border-radius: 15px;
                padding: 5px 0;
                border: 2px solid transparent;
                background-color: rgba(0, 0, 0, .51);
                box-shadow: 0 5px 8px rgba(0, 0, 0, .46) inset, 1px 2px 2px rgba(255, 255, 255, .61)
            }

            .loginform .submitline {
                text-align: center;
                height: 40px
            }

            .loginform .button-login {
                cursor: pointer;
                width: 100%;
                height: 40px;
                border-radius: 12px;
                -moz-border-radius: 6px;
                font-size: 26px;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, .37);
                color: #fff;
                padding: 5px 0;
                border: 0;
                background: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, rgba(255, 255, 255, .85)), color-stop(100%, rgba(218, 218, 218, 0)));
                box-shadow: 0 3px 3px rgba(0, 0, 0, .36)
            }

            .loginform .button-login:hover {
                background: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, rgba(255, 255, 255, .85)), color-stop(100%, rgba(218, 218, 218, .3)))
            }

            .loginform .button-login:active {
                background: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, rgba(255, 255, 255, .2)), color-stop(100%, rgba(218, 218, 218, .85)))
            }

            .activity_title {
                color: #fff
            }

            .danmu {
                position: fixed;
                left: 0;
                top: 0;
                z-index: 999990;
                width: 100%
            }

            .danmu dl {
                height: 64px;
                padding-left: 64px;
                position: absolute
            }

            .danmu dl dt {
                float: left;
                width: 64px;
                height: 64px;
                border-radius: 64px;
                position: absolute;
                left: 0;
                top: 0;
                z-index: 1
            }

            .danmu dl dt img {
                width: 56px;
                height: 56px;
                border-radius: 50%;
                border: 3px solid #ffa200
            }

            .danmu dl dd {
                float: left;
                height: 35px;
                line-height: 35px;
                white-space: nowrap;
                font-size: 33px;
                font-weight: bold;
                color: #ffa200;
                padding: 0 25px 0 59px;
                background: #fff;
                border-radius: 8px;
                margin-left: -10px;
                position: relative;
                top: 12px;
                border: 3px solid #ffa200
            }
            .mark{width:100%;height:100%;position:absolute;top:0;left:0;z-index:669}.left-box li,.left-box.active li{position:relative;box-sizing:border-box;background:rgba(0,0,0,.4);margin:0 0 10px 0;color:#fff;border-radius:10px}.left-box li{padding:.1rem .18rem .2rem 12%}.left-box .user-head{width:.95rem;height:.95rem;margin:1%;border-radius:50%;overflow:hidden;box-sizing:border-box;position:absolute;top:0;left:0;animation:headRotate 3s linear infinite;-webkit-animation:headRotate 3s linear infinite;-moz-animation:headRotate 3s linear infinite;-ms-animation:headRotate 3s linear infinite;-o-animation:headRotate 3s linear infinite}.left-box .user-head img{width:100%;height:100%}.left-box .user-top{overflow:hidden}.left-box .user-top .name{width:100%;overflow:hidden}.left-box .user-top .name span{float:left;color:#fff;font-size:.25rem;text-shadow:0 0 5px rgba(255,255,255,.8);line-height:.4rem}.left-box .user-top .name i{display:inline-block;float:left;width:.42rem;height:.42rem;margin-left:.06rem;background-repeat:no-repeat;background-size:.84rem .42rem;background-position:0 0}.left-box .user-top .name i.active{background-position:-.42rem 0}.left-box .user-top time{color:#ccc;float:right;font-size:.25rem;line-height:.4rem}.left-box .user-top time.active{text-shadow:0 0 7px rgba(255,255,255,.6);color:#3CF700}.left-box .comment h2 span.red-seconds{color:#f11124;font-size:110%}.left-box .comment h2 span.bp-content{font-size:100%;color:#F81AFA}.left-box .comment h2 img.dt_emo{width:.4rem!important;height:.4rem!important;vertical-align:middle}.left-box .user-img{margin-top:10px}.left-box.active .delete-trash{left:1%;right:initial}.left-box.active li{padding:.1rem 12% .2rem .18rem}.left-box.active .user-head{left:initial;right:0}.left-box.active .user-img{text-align:right}.left-box.active .user-top .name i,.left-box.active .user-top .name span,.left-box.active .user-top .name time{float:right}.left-box.active .comment h2{text-align:right}
            .left .left-box .message-bg {
                background-repeat: no-repeat;
                background-size: 100% 100%;
                width: 2rem;
                height: 1rem;
                position: absolute;
                bottom: 1%;
                right: 1%;
            }
            .left-box .comment h2 {
                font-size: .5rem;
                color:#ffa200;
                word-break: break-all
            }
            .left-box .comment h2.normal {
                color: #FFC100;
            }
            .left-box .comment h2.ds_bp {
                color: #FFDD1B;
            }
            .left-box .comment h2 img.barface_img {
                            width: .5rem;
                height: .5rem
                        }
            .left-box .user-img img {
                        min-width: 20%;
                max-width: 30%;
                max-height: 300px
                    }
                            .full-screen .pa-text h2 {
                color: #FFC100;
                font-size: .8rem;
                word-break: break-all;
                box-sizing: border-box;
                padding: 0 .2rem;

            }
            .full-screen .pa-text h2.color-green {
                color: #FFDD1B;
            }
            .hb-text{color: #FFDD1B;}
            .right-arrow,.arrow{display:none}
            .slide_image_box{width: 100%;height: 70%;box-sizing: border-box;background: rgba(0,0,0,.3);overflow:hidden;cursor: pointer;}
            .slidebox_img{width:100%;height:100% !imporant}
            #imageBox{width:100%; height:100%; position:relative;text-align:center;}
                #imageBox div{width:100%; text-align:center; height:100%; position:absolute; left:0; top:0; text-align:center; overflow:hidden; -moz-border-radius:4px;-webkit-border-radius:4px; border-radius:4px; z-index:4; filter:alpha(opacity=0);-moz-opacity:0; opacity:0;}
                /*#imageBox div img{visibility:hidden}*/
                #imageBox div.animateBig,#imageBox div.animateSmall{z-index:5; visibility:visible; filter:alpha(opacity=100);-moz-opacity:1;opacity:1;}
                #imageBox div.visible{visibility:visible; filter:alpha(opacity=100);-moz-opacity:1;opacity:1;}
                #imageBox div span{position:absolute; display:inline-block; background:rgba(0,0,0,0.6); color:#ffe400; font-size:12px; right:0; bottom:0; padding:5px 10px}

                #imageBox div.animateBig img{
                    -webkit-animation:img1 1.5s linear;
                    -moz-animation:img1 1.5s linear;
                    -o-animation:img1 1.5s linear;
                    animation:img1 1.5s linear;
                    -webkit-animation-fill-mode:forwards;
                    -moz-animation-fill-mode:forwards;
                    -o-animation-fill-mode:forwards;
                    animation-fill-mode:forwards;
                }
                #imageBox div.animateSmall img{
                    -webkit-animation:img2 1.5s linear;
                    -moz-animation:img2 1.5s linear;
                    -o-animation:img2 1.5s linear;
                    animation:img2 1.5s linear;
                    -webkit-animation-fill-mode:forwards;
                    -moz-animation-fill-mode:forwards;
                    -o-animation-fill-mode:forwards;
                    animation-fill-mode:forwards;
                }
                @-webkit-keyframes img1{
                  0% {-webkit-transform:scale(1);}
                  25%{-webkit-transform:scale(1.025);}
                  50%{-webkit-transform:scale(1.05);}
                  75%{-webkit-transform:scale(1.075);}
                  100% {-webkit-transform:scale(1.1);}
                }
                @keyframes img1{
                  0% {transform:scale(1);}
                  25%{transform:scale(1.025);}
                  50%{transform:scale(1.05);}
                  75%{transform:scale(1.075);}
                  100%{transform:scale(1.1);}
                }
                @-webkit-keyframes img2{
                  0% {-webkit-transform:scale(1.1);}
                  25%{-webkit-transform:scale(1.075);}
                  50%{-webkit-transform:scale(1.05);}
                  75%{-webkit-transform:scale(1.025);}
                  100%{-webkit-transform:scale(1);}
                }
                @keyframes img2{
                  0% {transform:scale(1.1);}
                  25%{transform:scale(1.075);}
                  50%{transform:scale(1.05);}
                  75%{transform:scale(1.025);}
                  100% {transform:scale(1);}
                }
                .full-container,.full-container .bpvideo-box ,.full-screen{
                    background-color:transparent !important;
                }
                .bp-bg-box{position:absolute;width:100%;height:100%;top:0;left:0;}
                .bp-bg-box-bgvideo{margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity:0;z-index:-1;}
                .qrtop{height: 33%;}
                .changebottom{height:67%;}
                .confession video {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: -1;
                    transform: scale(1.2);
                    -webkit-transform: scale(1.2);
                }
                .confession-container .confession-right .biaobai {
                    background: rgba(0,0,0,0.4);
                }
                .confession-container .confession-right h3 {
                    font-size: .6rem;
                    color: #FCD30B;
                    text-indent: .3rem;
                    text-shadow: 0 0 8px rgba(255,255,255,0.7);
                    border: 3px solid #FC588F;
                    box-sizing: border-box;
                    padding: .1rem .1rem;
                    border-radius: 5px;
                    min-height: 200px;
                    position: relative;
                    background-image: -webkit-linear-gradient(left, #147B96, #E6D205 25%, #147B96 50%, #E6D205 75%, red);
                    -webkit-text-fill-color: transparent;
                    -webkit-background-clip: text;
                    -webkit-background-size: 200% 100%;
                    -webkit-animation: masked-animation 4s infinite linear;
                    text-shadow: 0 0 7px 1px #fff;
                    box-shadow: 0 0 7px 1px #fff;
                }
                .confession-container .confession-right h3:after {
                        content: '';
                        position: absolute;
                        top: 47%;
                        left: -.3rem;
                        width: 0;
                        height: 0;
                        border: .15rem solid transparent;
                        border-right-color: #FC588F;
                }
                .enlarge-qrcode{opacity:0;z-index: 0;}
                .enlarge-qrcode img{width:320px;height:320px}
                .danmuBox{position:fixed; height:100%; width:100%; left:0; top:0; padding:25px 0; box-sizing:border-box; transform:translate3d(100%,0,0);z-index:671}
    .danmuText{height:100%; position:relative; width:999999px;}
    .danmuPicture{height:90%; position:absolute; left:0; top:5%; width:999999px}
    .danmuLine{width:100%; width:999999px}
    .danmuPicture .danmuLine{height:100%;}
    .danmuText .danmuLine{height:49%; top:51%;}
    .danmuText .danmuLine:first-child{top:0;}
    .onWallMsg.danmuMsg{min-width:450px; max-width:800px;}
    .onWallMsg.danmuMsg .themeIcon{right:-40px}
    .longMsg .onWallMsgMain{margin-right:200px}
    .onWallMsg.themeMsg0{background:rgba(62,7,78,0.7)}
    .onWallMsg.themeMsg1{background:rgba(7,11,71,0.7)}
    .onWallMsg.themeMsg2{background:rgba(81,29,3,0.7)}
    .onWallMsg.themeMsg3{background:rgba(81,10,18,0.7)}
    .onWallMsg.songMsg{background:rgba(4,40,61,0.7)}

    .onWallMsg{
    position:relative; padding:20px; min-height:100px; min-width:350px; margin-bottom:0px;  box-sizing:border-box; display:inline-block; position:absolute; max-width:900px; visibility:hidden}
    .onWallMsg.visible{visibility:visible}
    .onWallMsg .userHead{height:84px; width:84px; position:absolute; left:-44px; top:20px;
    border-radius:50%; border:solid 2px #ddd;}
    .onWallMsgInfo{margin:0px 0px 0px 50px;}
    #msgBox.showDetail{height:100%}
    .onWallMsg.showDetail{margin-bottom:0;}

    .onWallMsg .userHead{height:80px; width:80px; position:absolute; left:22px; top:20px;
    border-radius:50%; border:solid 2px #ddd;}
    .onWallMsgInfo{margin:0px 0px 0px 110px; position:relative; min-height:85px;}
    .onWallMsg .userName{font-size:24px;margin-top:10px;}
    .onWallMsg .msgTime{font-size:22px;position:absolute; right:10px; top:0;}
    .onWallMsgMain{margin-top:9px; margin-right:20px}
    .onWallMsg .msgText{font-size:.6rem; color:#FFC100; line-height:125%; font-weight:bold; letter-spacing:2px;}
    .onWallMsg .msgImage{margin-top:16px; max-height:150px; max-width:200px;}
    .onWallMsg .userHead.woman{border:solid 2px #fd4648}
    .onWallMsg .userHead.man{border:solid 2px #4a78ff}

    .onWallMsg .richText{color:#FFDD1B;}
    .onWallMsg .sitNumber{padding:2px 20px; color:#fff; font-size:1.1rem; background:#e7445f; display:inline-block; margin-bottom:10px; margin-right:20px;  border-radius:6px;}
    .onWallMsg .sitText{color:#FFDD1B;}
    .onWallMsg .dsText{color:#FFDD1B;}
    .onWallMsg .redBagText{color:#FFDD1B}
    .onWallMsg .songText{color:#FFDD1B;}


    .disco #msgBox{width:70%; left:15%;}
    .disco #msgBox .userHead{position:absolute; left:-45px; top:20px; z-index:1; border:solid 2px #000}
    .disco #msgBox .onWallMsgInfo{margin-left:50px}

    /*为TA霸屏*/
    .onWallMsg div.forTaBp{width:100%; margin-top:18px;}
    .forTaBp_line{width:100%; height:1px; margin:18px 0; background:#666;}
    .forTaBp_image{display:inline-block; float:left; max-width:200px; max-height:150px; margin-right:20px}
    .forTaBp_text{}
    .forTaBp_text span{font-size:0.4rem; line-height:125%; color:#8bd7ff; font-weight:bold; letter-spacing:1px}

    .msgLove{width:250px; height:254px; background:#ddd; border-radius:6px; overflow:hidden; padding:0;}
    .msgLove p{width:100%; text-align:center; padding:5px 0;}
    .msgLove p tt{margin:0 auto;}
    .msgLove div{width:250px; height:206px; overflow:hidden; position:relative;}
    .msgLove div img{position:absolute; visibility:hidden; width:auto; height:auto;}
    /*头像*/
    img.man{animation:userHeadMan 3s linear infinite}
    @keyframes userHeadMan{
        0%{border:2px solid #4a78ff; box-shadow:0 0 7px #fff}
        50%{border:2px solid rgba(40,255,5,0); box-shadow:0 0 7px rgba(255,255,255,0)}
        100%{border:2px solid #4a78ff; box-shadow:0 0 7px #fff}
    }
    img.woman{animation:userHeadWoman 3s linear infinite}
    @keyframes userHeadWoman{
        0%{border:2px solid #fd4648; box-shadow:0 0 7px #fff}
        50%{border:2px solid rgba(40,255,5,0); box-shadow:0 0 7px rgba(255,255,255,0)}
        100%{border:2px solid #fd4648; box-shadow:0 0 7px #fff}
    }
    .onWallMsg.themeMsgBp {
        background: transparent;
    }
    .onWallMsg {
        border-radius:10px;
        border:2px solid transparent;
        background: transparent;
    }
    .onWallMsg .userName,.onWallMsg .msgTime{color:#FFC100}
    .hongbao {
        z-index: 6666666;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .hongbao .fhb {
        height: 100%;
        margin-top: -5%;
    }
    .hongbao .hby {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .theme {
        z-index: 888889;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .theme video {
        width: 100%;
        height: 100%;
        transform: scale(1.2);
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
    }
    .ds_user_image{margin-right:180px;}
    </style>
        <style>
    .moneyScreen{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 999999;
        background: rgba(0,0,0,0.6);
    }
    .songli {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    .songli .songliTop {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 80%;
      margin: 0 10%;
    }
    .songli .songlifrom, .songli .songlito{
      width: 250px;
      height: 256px;

    }
    .songli_avatar_box{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 250px;
        height: 185px;


    }
    .songli #man{
        background-image: url(../addons/hm_newdpm/new_messages/app/images/manHeadImg.png);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .songli #woman{
        background-image: url(../addons/hm_newdpm/new_messages/app/images/womanHeadImg.png);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .songli_avatar_box img{
        width:160px;
        height:160px;
        border-radius:50%;
    }
    .songli .songliTop .songli_user{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        font-size: 36px;
        text-align: center;
        color: #FFFFFF;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        position: relative;
    }
    .songli .songliTop .songli_user span {
      position: relative;
      z-index: 2;
      display: block;
      overflow: hidden;
      max-width: 250px;
      white-space: nowrap;
      text-overflow: ellipsis;
      color:#fff;
    }
    .songli .songliTop .songli_user div {
      position: absolute;
      top: 0;
      width: 50%;
      height: 100%;
      z-index: 1;
    }
    .songli .songliTop .songli_user div:nth-child(2) {
      left: 0;
      border-bottom: 1px solid;
      border-top: 1px solid;
      border-image: -webkit-linear-gradient(left, rgba(52, 64, 140, 0), #34408c) 3 3;
      background: -webkit-linear-gradient(left, rgba(52, 64, 140, 0), rgba(52, 64, 140, 0.6));
    }
    .songli .songliTop .songli_user .nv1 {
      border-image: -webkit-linear-gradient(left, rgba(121, 46, 102, 0), #792e66) 3 3 !important;
      background: -webkit-linear-gradient(left, rgba(121, 46, 102, 0), rgba(121, 46, 102, 0.6)) !important;
    }
    .songli .songliTop .songli_user div:nth-child(3) {
      right: 0;
      border-bottom: 1px solid;
      border-top: 1px solid;
      border-image: -webkit-linear-gradient(left, #34408c, rgba(52, 64, 140, 0)) 3 3;
      background: -webkit-linear-gradient(left, rgba(52, 64, 140, 0.6), rgba(52, 64, 140, 0));
    }
    .songli .songliTop .songli_user .nv2 {
      border-image: -webkit-linear-gradient(left, #792e66, rgba(121, 46, 102, 0)) 3 3 !important;
      background: -webkit-linear-gradient(left, rgba(121, 46, 102, 0.6), rgba(121, 46, 102, 0)) !important;
    }
    .songlicontent{
        position:relative;
        flex:1;
        height:256px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .songlicontent_box{
        background-image:url('../addons/hm_newdpm/new_messages/app/images/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
        height:138px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .songli .songliTop .songlicontent_box .slTxt1 {
        width: 80%;
        margin-left: 10%;
        flex: 1;
        text-align: center;
        color: #FFFFFF;
        line-height: 78px;
        font-size: 38px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .songli .songliTop .songlicontent_box .slTxt1 span {
      font-weight: bold;
      font-size: 68px;
      color: #ffd75b;
      position: absolute;
      right: -5%;
      -webkit-text-stroke: 4px #c97407;
    }
    .songli .songliTop .songlicontent_box .slTxt2 {
        width: 100%;
        height: 60px;
        line-height: 40px;
        font-size: 36px;
        color: #ffd75b;
        text-align: center;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .songli .songliTop .jiantouimg {
      width: 100px;
      position: absolute;
      left: 0;
      top: 100px;
      z-index: -1;
      animation: jiantou 3s infinite linear;
    }

    @keyframes jiantou {
      0% {
        left: 0;
        opacity: 1;
      }
      100% {
        left: 666px;
        opacity: 0;
      }
    }
    .songli .songliBottom {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }
    .songli .songliBottom img {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 200px;
        bottom: 0;
        margin: auto;
        /* animation: tiao 10s infinite linear; */
    }
    .user-img .gift{
        width:60px;
        height:60px;
        min-width: 60px !important;
        max-width: 60px !important;
        max-height: 60px !important;
    }

    .left .message-bp-box{
         width: 100%;
         height: 1.5rem;
         position: relative;
    }
    .left .message-bp-box .message-bp {
        background-image: url(../addons/hm_newdpm/new_messages/app/images/bp.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width: 1.9rem;
        height: 1.5rem;
        position: absolute;
        right:0;
        bottom:0;
    }
    .onWallMsg .themeIcon_default{
        background-image: url(../addons/hm_newdpm/new_messages/app/images/bp.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width: 1.9rem;
        height: 1.5rem;
        position: absolute;
        top: 40px;
        right:60px;
    }
    .songli_djs{position:absolute;right:40px;bottom:40px;color:#fff}
    .songli_djs h2,.songli_djs span{color:#fff;font-size:0.3rem}
    .right .list-bd .bd-l i{display:none}
    .list-bd{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .list-bd .bd-l .avatar_bg{
        width: 1rem;
        height: 1rem;
    }
    .list-bd .bd-l .tuhao_list_avatar{
        position: absolute;
        top:0.06rem;
        left:0.08rem;
        border-radius: 50%;
        width: 0.84rem;
        height: 0.84rem;
    }
    </style>
        <style>

        .container{
            position:absolute;
            height:100px;
            width:100px;
            top:50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            -webkit-perspective:400px;
            perspective:400px;
        }
        .cube{
            height:100px;
            widht:100px;
            -webkit-transform-origin:50% 50%;
            transform-origin:50% 50%;
            -webkit-transform-style:preserve-3d;
            transform-style:preserve-3d;
            -webkit-animation:rotate 4s infinite ease-in-out;
            animation:rotate 4s infinite ease-in-out;

        }
        .side{
            position:absolute;
            display:block;
            height:100px;
            width:100px;
        }
        .side1{
            background:#41C3AC;
            -webkit-transform:translateZ(100px);
            transform:translateZ(100px);
        }
        .side2{
            background:#FF884D;
            -webkit-transform:rotateY(90deg) translateZ(100px);
            transform:rotateY(90deg) translateZ(100px);
        }
        .side3{
            background:#32526E;
            -webkit-transform:rotateY(180deg) translateZ(100px);
            transform:rotateY(180deg) translateZ(100px);
        }
        .side4{
            background:#65A2C5;
            -webkit-transform:rotateY(-90deg) translateZ(100px);
            transform:rotateY(-90deg) translateZ(100px);
        }
        .side5{
            background:#FFCC5C;
            -webkit-transform:rotateX(90deg) translateZ(100px);
            transform:rotateX(90deg) translateZ(100px);
        }
        .side6{
            background:#FF6B57;
            -webkit-transform:rotateX(-90deg) translateZ(100px);
            transform:rotateX(-90deg) translateZ(100px);
        }

        @-webkit-keyframes rotate{
            0%{
                -webkit-transform:rotateX(0deg) rotateY(0deg) rotateZ(0deg);
            }
            33.33%{
                -webkit-transform:rotateX(360deg) rotateY(0deg)  rotateZ(0deg);
            }
            66.66%{
                -webkit-transform:rotateX(360deg) rotateY(360deg)  rotateZ(0deg);
            }
            100%{
                -webkit-transform:rotateX(360deg) rotateY(360deg)  rotateZ(360deg);
            }
        }
        @keyframes rotate{
            0%{
                transform:rotateX(0deg) rotateY(0deg);
            }
            50%{
                transform:rotateX(360deg) rotateY(0deg);
            }
            100%{
                transform:rotateX(360deg) rotateY(360deg);
            }
        }
        a{
            font-family:helvetica;
            color:#428bca;
            text-align:center;
            display:block;
        }

        .container2{
            left:45%;
        }
        .container2 .side{
            border-radius:50%;
        }
    </style>

    <!--<script src="../../new_messages/app/js/new_barmain.js"></script>-->
</head>
<body <?php  if($reply['is_transparent']!=1) { ?>style="background-image:url('<?php  echo $bg;?>') "<?php  } ?>>

	<audio id="media" src="<?php  echo $music;?>" autoplay="autoplay" loop="true"></audio>

	<audio id="bp_music" src="<?php  echo $bg_voice;?>" preload="auto" loop="loop"></audio>

<video class="bg_video" id="bg_video" src="<?php  if(!empty($video['vodio_bg11'])&&$reply['is_transparent']!=1) { ?><?php  echo tomedia($video['vodio_bg11'])?><?php  } ?>"  autoplay="" loop="" muted="" style="margin: auto; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity:0;z-index:-1"></video>
<div class="loading">

    <div class="container container2">
        <div class="cube">
            <div class="side side1">
            </div>
            <div class="side side2">
            </div>
            <div class="side side3">
            </div>
            <div class="side side4">
            </div>
            <div class="side side5">
            </div>
            <div class="side side6">
            </div>
        </div>
    </div>

</div>
<div class="danmuBox">
    	<div class="danmuText" id="danmuText"><div class="danmuLine" style="position:absolute;"></div><div class="danmuLine" style="position:absolute;"></div></div>
        <div class="danmuPicture" id="danmuPicture">
        	<div class="danmuLine"></div>
        </div>
</div>
<div class="yiyukeji animated" id="yiyu-container">
    <header v-pre="">
        <div class="head">
			            <div class="head-title">
                <h1><?php  echo $bpreply['bp_title'];?></h1>
            </div>
        </div>
    </header>
    <section class="main">
        <!--消息格子模式-->
        <div class="left" style="opacity:<?php  if($fashb['bp_type']!=2) { ?>1<?php  } else { ?>0<?php  } ?>;z-index: 1">
            <div class="left-box" id="comment-box" >
                <ul id="comment-loop" @mouseenter="deleteShow = true" @mouseleave="deleteShow = false">
                    <template v-for="(item,index) in items">
                        <li>
                            <div class="delete-trash iconfont animated" @click.stop="deleteTrash(index)" v-show="deleteShow" :class="{bounceIn:deleteShow}">&#xe6b4;</div>
							
                            <template v-if="item.type=='2'">
								<div class="message-bg" style="background-image: url(../addons/hm_newdpm/new_messages/app/images/wall_ds.png);"></div>
							</template>
							<template v-if="item.type=='6'">
								<div class="message-bg" style="background-image: url(../addons/hm_newdpm/new_messages/app/images/wall_bb.png);"></div>
							</template>
                            <div class="user-head">
                                <img :src="item.avatar" alt="用户头像" draggable="false">
                            </div>
                            <div class="content-right">
                                <div class="user-top">
                                    <div class="name">
                                        <span v-html="item.nickname"></span>
                                        <!--<i class="sex" :class="{active:item.sex=='1'}" :style="{backgroundImage:'url('+sexPath+')'}"></i>-->
                                        <time class="animated fadeIn" :datetime="item.createtime" :class="newest(item.createtime)">{{item.createtime | formatDate}}</time>
                                    </div>
                                </div>
                                <template v-if="item.type=='1'||item.type=='4'" >
                                    <div class="comment">
                                        <h2 class="ds_bp">{{ item.theme | zhuti2name }}<span v-text="item.bptime" class="red-seconds"></span>秒：<span class="bp-content" v-html="item.word"></span></h2>
                                    </div>
                                </template>
                                <template v-if="item.type=='5'">
                                    <div class="comment">
                                        <h2 class="ds_bp">为 <span class="bp-content red-seconds"  v-if="item.for_nickname!=''" v-html="item.for_nickname"></span>重金霸屏<span v-text="item.bptime" class="red-seconds"></span>秒：<span class="bp-content" v-html="item.word"></span></h2>
                                    </div>
                                </template>
								<template v-if="item.type=='7'">
                                    <div class="comment">
                                        <h2 class="ds_bp">送出了<span v-text="item.says" class="red-seconds"></span>个<span v-text="item.extend_params.gift_des" class="red-seconds"></span><span class="red-seconds" v-if="item.word!=''">:</span><span class="bp-content" v-html="item.word"></span></h2>
                                    </div>
                                </template>
								<template v-if="item.type=='6'">
                                    <div class="comment">
                                        <h2 class="ds_bp">向<span class="bp-content red-seconds" v-html="item.for_nickname"></span>真情表白<span v-text="item.bptime" class="red-seconds"></span>秒：<span class="bp-content" v-html="item.word"></span></h2>
                                    </div>
                                </template>
								<template v-if="item.type=='9'">
                                    <div class="comment">
                                        <h2 class="ds_bp">重金弹幕<span v-text="item.bptime" class="red-seconds"></span>秒：<span class="bp-content" v-html="item.word"></span></h2>
                                    </div>
                                </template>
                                <template v-if="item.type=='0'">
                                    <div class="comment">
                                        <h2 v-html="face.replaceText(emojione.toImage(item.word))" class="normal"></h2>
                                    </div>
                                </template>
                                <template v-if="item.type=='2'">
                                    <div class="comment">
                                        <h2 class="ds_bp">重金打赏<span v-text="item.bp_time" class="red-seconds"></span>{{'秒给'+item.says+'：'}}<span class="bp-content" v-html="item.extend_params.name"></span>&nbsp;&nbsp;<span class="bp-content" v-if="item.word!=''" v-html="item.word"></span></h2>
                                    </div>
                                </template>
								<template v-if="item.type=='3'">
                                    <div class="comment">
                                        <h2 class="ds_bp">重金发红包&nbsp;&nbsp;<span class="bp-content" v-text="item.word=='' ? '大吉大利、恭喜发财！' : item.word"></span></h2>
                                    </div>
									<div class="user-img">
										<img src="../addons/hm_newdpm/imgs/redpack_walltalk.png" alt="红包图片" draggable="false" />
									</div>
                                </template>
                                <div class="user-img" v-if="item.wordimg!=''&&item.type!='4'">
                                    <img :src="item.wordimg" alt="用户图片" draggable="false" :class="item.type" />
                                </div>
                                <div class="user-img" v-if="item.wordimg!=''&&item.type=='4'">
                                    <video :src="item.wordimg" autoplay :class="item.type"></video>
                                </div>
                            </div>
							<template v-if="item.type=='1'||item.type=='4'||item.type=='5'" >
							 <div class="message-bp-box" >
									<div class="message-bp" :class="item.theme"></div>
							 </div>
							</template>
                        </li>
                    </template>
                </ul>
            </div>
        </div>

        <div class="right">
            <!--绑定位置图片轮播-->
			<div id="sb-slider" class="slide_image_box" <?php  if($bpreply['isbd']==1) { ?>style="display:none"<?php  } else { ?>style="display: block"<?php  } ?>>
                <div id="imageBox" class="imageBox">
                    <div class="defaultImage visible">
                        <img src="<?php  echo $lbbg;?>" class="slidebox_img"  />
                    </div>
                </div>
			</div>

            <div id="tuhao-lists" class="baping" <?php  if($bpreply['isbd']==1) { ?>style="display:block"<?php  } else { ?>style="display: none"<?php  } ?> >
                <div class="show-bp">
                    <div class="toggle-list">
                        <ul>
                            <li :class="{animated:true,active:isActive==0,bounceIn:isActive==0}">今日榜单</li>
                            <li :class="{animated:true,active:isActive==1,bounceIn:isActive==1}">总榜单</li>
                        </ul>
                    </div>
                    <transition enter-active-class="animated bounceIn">         
                        <div class="one" v-show="isActive==0">
                            <div class="list-bd" v-for="(item1,index) in tonight">
								<div class="bd-l">
									<img class="avatar_bg" v-if="index==0" src="../addons/hm_newdpm/new_messages/app/images/richer_first.png">
									<img class="avatar_bg" v-else-if="index==1" src="../addons/hm_newdpm/new_messages/app/images/richer_second.png">
									<img class="avatar_bg" v-else-if="index==2" src="../addons/hm_newdpm/new_messages/app/images/richer_third.png">
									<div class="avatar_bg" v-else="index>2"></div>
                                    <img :src="item1.avatar" alt="榜单头像" draggable="false" class="tuhao_list_avatar" />
                                </div>
                                <div class="bd-r">
                                    <h3 v-text="item1.nickname"></h3>
																			<p v-text="'消费共￥'+item1.money"></p>
									                                </div>
                            </div>
                        </div>
                    </transition>
                    <transition enter-active-class="animated bounceIn">
                        <div class="one" v-show="isActive==1">
                            <div class="list-bd" v-for="(item2,index) in total">
                                <div class="bd-l">
                                    <img class="avatar_bg" v-if="index==0" src="../addons/hm_newdpm/new_messages/app/images/richer_first.png">
									<img class="avatar_bg" v-else-if="index==1" src="../addons/hm_newdpm/new_messages/app/images/richer_second.png">
									<img class="avatar_bg" v-else-if="index==2" src="../addons/hm_newdpm/new_messages/app/images/richer_third.png">
									<div class="avatar_bg" v-else="index>2"></div>
                                    <img :src="item2.avatar" alt="榜单头像" draggable="false" class="tuhao_list_avatar" />
                                </div>
                                <div class="bd-r">
                                    <h3 v-text="item2.nickname"></h3>
									                                    <p v-text="'消费共￥'+item2.money"></p>
									                                </div>
                            </div>
                        </div>
                    </transition>
                </div>
            </div>

            <div class="qrcode-box">
                <div id="qrcode-appear" class="qrcode"  style="z-index:670">
                    <i class="qrcode-logo"></i>
                    <img :src="qrcodeImg" draggable="false" alt="二维码">
                    <h3 v-text="penel.qrcodeText"></h3>
                </div>
            </div>
        </div>
    </section>

    <!--霸屏-->
	<transition enter-active-class="magictime rollIn" leave-active-class="magictime rollOut">
			<section class="theme" v-show="themeshow">
					<div class="ds-box">
						<video :src="themes['video']" autoplay="autoplay" loop="loop" muted="muted"></video>
					</div>
			</section>
	</transition>
    <section class="full-container" :class="{active:show}">
		
		<div class="bp-bg-box"></div>
		<div class="bpvideo-box" :style="{opacity:paScreen.extend_params=='' ? 0 : 1}"></div>
        <div class="full-screen" :style="{background:paScreen.extend_params=='' ? '#000' : 'transparent'}">
            <div class="pa-img" :style="{opacity:paScreen.wordimg=='' ? 0 : 1, marginLeft:paScreen.wordimg=='' ? '-120%' : '0'}">
                <div id="rich" class="show" style="display: block;" v-pre="">
                    <div class="richBox">
                        <div class="richMain">
                            <div class="rich2">
                                <div class="richLeft"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <transition enter-active-class="animated bounceInLeft">
                <div class="pa-text" v-show="bpTextShow" :style="{width:paScreen.wordimg=='' ? '100%' : '40%'}">
                    <div class="text-container">
                        <div class="pa-user-head" id="qrcode">
                            <img :src="paScreen.avatar" alt="用户霸屏头像" draggable="false" />
                            <h2 class="color-orange" v-text="paScreen.for_nickname=='' ? paScreen.nickname : paScreen.nickname+'为'+paScreen.for_nickname+'霸屏'"></h2>
                        </div>
                        <h2 class="color-green" :style="{color:paScreen.color}" v-text="paScreen.word"></h2>
                        <h2 class="pa-seconds">{{ paScreen.theme | zhuti2name }}<span v-text="paScreen.bptime"></span>秒</h2>
                    </div>
                </div>
            </transition>
        </div>
    </section>
	
	
     <!--打赏-->
    <transition enter-active-class="animated zoomInDown" leave-active-class="animated zoomOutDown">
        <section class="dashang" v-show="dsShow==true && daItems.bp_time>0">
            <div class="ds-box">
                <video :src="daItems['forwho']" autoplay="autoplay" loop="loop" muted="muted"></video>
            </div>

            <transition enter-active-class="animated bounceInLeft">
                <div class="ds-text" v-show="textShow">
					<div class="ds_user_image"><img :src="daItems.wordimg" /> </div>
                    <div class="ds-text-box">
                        <div class="pa-user-head">
                            <img :src="daItems.avatar" alt="用户霸屏头像" draggable="false" />
                            <h2 class="color-orange" v-text="daItems.word=='' ? daItems.nickname : daItems.nickname+'打赏给 '+daItems.says"></h2>
                        </div>
                        <div class="ds-tocontent">{{daItems['extend_params'].name}}</div>
                        <h2 class="color-green" v-text="daItems.word"></h2>
                        <h2 class="animated tada infinite">打赏<span v-text="daItems.bp_time" class="ds-span"></span>秒</h2>

                    </div>
                </div>
            </transition>
        </section>
    </transition>

    <!--送礼-->
	<transition enter-active-class="animated bounceIn" leave-active-class="animated bounceOut">
		<div class="moneyScreen"  v-show="giftshow">
			  <div class="songli">
				<div class="songliTop">
				  <div class="songlifrom">
					<div class="songli_avatar_box" :id="newgift.sex == 1 ? 'man' : 'woman'">
						<img :src="newgift.avatar" class="sluse">
					</div>
					<div class="songli_user">
					  <span v-text="newgift.nickname"></span>
					  <div class="nv1"></div>
					  <div class="nv2"></div>
					</div>
				  </div>
				  <div class="songlicontent">
					<img src="../addons/hm_newdpm/new_messages/app/images/jiantou.png" class="jiantouimg">
					<div class="songlicontent_box">
					  <div class="slTxt1">{{ newgift.extend_params.gift_des }}
						<span>×{{ newgift.says }}</span>
					  </div>
				      <!--<div class="slTxt2" v-text="newgift.says"></div>-->
					</div>
				  </div>
				  <div class="songlito">
					<div class="songli_avatar_box" :id="newgift.to_sex == 1 ? 'man' : 'woman'">
						<img :src="newgift.wordimg" class="sluse">
					</div>
					<div class="songli_user">
					  <span v-text="newgift.for_nickname"></span>
					  <div class="nv1"></div>
					  <div class="nv2"></div>
					</div>
				  </div>
				</div>
				<div class="songliBottom">
				  <img :src="rootimg+newgift.extend_params.gift_gif" alt="送礼">
				</div>
				<div class="songli_djs"><h2 class="animated tada infinite">倒计时<span v-text="newgift.bptime" class="ds-span"></span>秒</h2></div>
			  </div>
			</div>
    </transition>


    <!--表白-->
    <transition enter-active-class="magictime vanishIn" leave-active-class="magictime vanishOut">
        <section class="confession" v-show="confession.show">
			<video :src="rootimg+confession.items.extend_params.bb_vodiobg" loop="loop" autoplay="autoplay" muted="muted"></video>
            <div class="confession-head active">
                <div class="confession-head-left">
                    <div class="confession-avatar">
                        <img :src="confession.items.avatar">
                    </div>
                    <div class="confession-head-text" v-text="confession.items.nickname"></div>
                </div>

                <div class="confession-head-right">
                    <div class="confession-avatar">
                        <img :src="confession.items.says"  alt="">
                    </div>
                    <div class="confession-head-text" v-text="confession.items.for_nickname"></div>
                </div>
            </div>

            <div class="confession-container">
                <div class="confession-left">
                    <img :src="confession.items.wordimg" alt="表白图片" :class="confession.imgClass">
                </div>
				<div class="confession-right">
					<h2 style="margin-bottom:.1rem">真情告白<span>{{ confession.items.bptime }}</span>秒</h2>
					<div class="biaobai"><h3>{{ confession.items.word }}</h3></div>
				</div>
            </div>
        </section>
    </transition>

    <!--发红包-->
    <transition enter-active-class="magictime zoomInDown" leave-active-class="magictime zoomOutDown">
	<section class="hongbao" v-show="redpackshow">
		<img src="../addons/hm_newdpm/new_messages/app/images/fhb.png" class="fhb">
		<img src="../addons/hm_newdpm/new_messages/app/images/hby.gif" class="hby">
		<transition enter-active-class="animated bounceInLeft">
                <div  v-show="redtextShow">
                    <div class="ds-text-box">
                        <h2 class="animated tada infinite">土豪<span class="hb-text">{{ redpack_detail.nickname }}</span>发红包啦<span v-text="redpack_detail.bptime" class="ds-span"></span>秒</h2>
                    </div>
                </div>
        </transition>
	</section>
	</transition>
	
    <section class="setting" :class="{active:penel.gear}">
        <div class="right-arrow iconfont" @click="close_penel()">&#xe621;</div>

        <div class="set-option">
            <div class="option-btn">
                <template v-for="(setItem, index) in penel.setItems">
                    <div :class="{active:penel.index == index}" @click="penel.index = index">
                        <i class="iconfont" v-html="setItem.icon"></i>
                        <p>{{ setItem.name }}</p>
                    </div>
                </template>
            </div>
        </div>

        <div class="photo-upload" v-show="penel.index == 0">
            <div class="bg-select">
                <ul>
                    <li v-for="(bgItem, index) in computedBgItems" :class="{active:penel.defaultIndex == index}" @click="penel.defaultIndex = index">
                        <img :src="bgItem.thumbnail" alt="缩略图">
                        <p>{{ bgItem.name }}</p>
                    </li>
                </ul>
            </div>
            <div class="load-more" @click="penel.limitNumber == 7 ? penel.limitNumber = penel.bgItems.length : penel.limitNumber = 7">{{ penel.limitNumber == 7 ? '点击展开更多' : '点击收起'}}</div>
            <div class="no-love" v-pre="">
                <p>如想使用后台背景图片请先到系统设置恢复初始化即可//特别注意:若是后台自定义了视频背景、此处设置不会生效）</span></p>
            </div>
            <div class="open-checkbox">
                <label for="bg-check" :class="{active:penel.bgCheckbox}">
                    <input type="checkbox" id="bg-check" v-model="penel.bgCheckbox">
                    <span class="off">关</span>
                    <span class="on">开</span>
                </label>
            </div>
            <div class="public-photo" :class="{active:penel.bgCheckbox}">
                <label class="iconfont" for="upload-bg">&#xe68f;</label>
				
                <input type="file" id="upload-bg" @change="upload('upload-bg','shows-thumbnail','imgPath',2*1048576)">
                <img src="../addons/hm_newdpm/new_messages/app/images/01.jpg" id="shows-thumbnail">
            </div>
            <div class="save-box" @click="saveBtn(0)">
                <button>永 久 保 存</button>
            </div>
        </div>

        <div class="other-set" v-show="penel.index == 1">
            <div class="other-box">

                <div class="other-right">
                    <div class="other-input">
                        <label for="qrcode-text">自定义二维码文字,限定12字内（无需保存修改即生效）</label>
                        <input type="text" id="qrcode-text" maxlength="12" v-model="penel.qrcodeText">
                    </div>
                    <div class="other-input">
                        <label for="speed-1">聊天内容滚动速度单位秒（无需保存修改即生效，最低速度0.7秒）</label>
                        <input type="text" id="speed-1" maxlength="12" v-model.number.trim="penel.speed">
                    </div>
                </div>
            </div>
            <div class="save-box" @click="saveBtn(1)">
                <button>永 久 保 存</button>
            </div>
        </div>

        

        <div class="system-set" v-show="penel.index == 2">
            <div class="system-container">
                <ul>
                    <li>
                        <my-title title="全部选中"></my-title>
                        <div class="open-checkbox">
                            <label for="clear-cache-1" :class="{active:penel.checkAll}">
                                <input type="checkbox" id="clear-cache-1" v-model="penel.checkAll">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="清除浏览器缓存"></my-title>
                        <div class="open-checkbox">
                            <label for="clear-cache" :class="{active:penel.systemCheckbox.clearCache}">
                                <input type="checkbox" id="clear-cache" v-model="penel.systemCheckbox.clearCache">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="榜单移至左侧&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（此项无需保存自动生效,保存后永久生效）"></my-title>
                        <div class="open-checkbox">
                            <label for="move-left" :class="{active:penel.systemCheckbox.moveLeft}">
                                <input type="checkbox" id="move-left" v-model="penel.systemCheckbox.moveLeft">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
					<li>
                        <my-title title="二维码和图片轮播位置调换（此项无需保存自动生效,保存后永久生效）"></my-title>
                        <div class="open-checkbox">
                            <label for="qr-top" :class="{active:penel.systemCheckbox.qrTop}">
                                <input type="checkbox" id="qr-top" v-model="penel.systemCheckbox.qrTop">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="聊天内容左右调换（此项无需保存自动生效,保存后永久生效）"></my-title>
                        <div class="open-checkbox">
                            <label for="chat-change" :class="{active:penel.systemCheckbox.chatChange}">
                                <input type="checkbox" id="chat-change" v-model="penel.systemCheckbox.chatChange">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="霸屏内容左右调换（此项无需保存自动生效,保存后永久生效）"></my-title>
                        <div class="open-checkbox">
                            <label for="pa_right" :class="{active:penel.systemCheckbox.paRight}">
                                <input type="checkbox" id="pa_right" v-model="penel.systemCheckbox.paRight">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="恢复系统初始化设置（慎选,前面所有开启无效）"></my-title>
                        <div class="open-checkbox">
                            <label for="recovery-default" :class="{active:penel.systemCheckbox.recoveryDefault}">
                                <input type="checkbox" id="recovery-default" v-model="penel.systemCheckbox.recoveryDefault">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <my-title title="保存设置后自动刷新"></my-title>
                        <div class="open-checkbox">
                            <label for="save_refresh" :class="{active:penel.systemCheckbox.saveRefresh}">
                                <input type="checkbox" id="save_refresh" v-model="penel.systemCheckbox.saveRefresh">
                                <span class="off">否</span>
                                <span class="on">是</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="save-box" @click="saveBtn(2)">
                <button>点 击 保 存</button>
            </div>
        </div>
    </section>

    <section class="right-menu" v-show="penel.menu">
        <div class="button-menu">
            <div @mousedown.stop="menuBtn(1)">返回主屏幕</div>
            <div @mousedown.stop="menuBtn(2)">控制面板</div>
            <div @mousedown.stop="menuBtn(3)">刷新页面</div>
            <div @mousedown.stop="menuBtn(6)">打开二维码</div>
            <div @mousedown.stop="menuBtn(4)">进入全屏</div>
            <div @mousedown.stop="menuBtn(5)">退出全屏</div>
        </div>
    </section>

    <div class="arrow iconfont" @click="show_penel()">&#xe6bd;</div>

    <div class="enlarge-qrcode">
        <div class="animated">
            <img src="<?php  echo tomedia($reply['up_qrcode'])?>" alt="二维码放大" draggable="false" class="enlarge-qrcode-img">
			<h2><span>微信扫一扫</span></h2>
        </div>
    </div>

    <footer class="footer" v-pre="">
        <div class="copyright">
            <?php  if(empty($reply['copyright'])) { ?> &copy;<?php  echo $_W['account']['name'];?><?php  } else { ?>&copy;<?php  echo $reply['copyright'];?><?php  } ?>        </div>
    </footer>
</div>
<!--menus-->
<!--danmu box-->



<script>

//大屏幕显示的消息条数
var msg_display_num = "20";  
// 后台接收参数
var RID = '<?php  echo $rid;?>';
var WEID = '<?php  echo $uniacid;?>';
//大屏幕背景图片
var backgroundImg = "";

// 右下角二维码
var QRCODE_IMAGE = "<?php  echo tomedia($reply['up_qrcode'])?>";

var show_slide_type = "2";
var slide_time = "180";
var slide_box = "180";
var tuhao_time = "180";
var tuhao_box = "180";
var slide_clock = null;
var tuhao_clock = null;
var SYS_BP_BG_TYPE = <?php  if($fashb['bp_opacity']==0) { ?>2<?php  } else { ?>3<?php  } ?>;
var SYS_BP_BG = <?php  echo $bp_video;?>;
var SYS_BP_IMGBG = <?php  echo $bp_bg;?>;
var _BP_BGItems = <?php  echo $bgItems;?>;
var open_canvas = "1";
var hb_texiaoshow = 1;
var bp_image_xuanku = 1;
$(function(){
				danmu.bindEvent();
				danmu2.init();
				image.setImage();
		        image.init();
			if (show_slide_type == 3) {
			    if (tuhao_clock != null) {
				clearInterval(tuhao_clock)
		     	}
			    if (slide_clock != null) {
				clearInterval(slide_clock)
			    }
			slide_clock = setInterval(slide_box_show, 1000)
		}
				

});

var bg_isPlaying =true; 

var screen_light_level="1";//屏幕亮度
var dou_seconds="20000";//屏幕亮度
function slide_box_show() {
	slide_box--;
	if (slide_box < 0) {
		clearInterval(slide_clock);
		tuhao_clock = setInterval(tuhao_box_show, 1000);
		$("#sb-slider").hide();
		$("#tuhao-lists").show();
		slide_box = slide_time
	}
}
function tuhao_box_show() {
	tuhao_box--;
	if (tuhao_box <= 0) {
		clearInterval(tuhao_clock);
		slide_clock = setInterval(slide_box_show, 1000);
		$("#sb-slider").show();
		$("#tuhao-lists").hide();
		tuhao_box = tuhao_time
	}
}
</script>
<script>
var danmu2_color_type = "2";//弹幕字体颜色是否随机
var danmu2_show_time = "2";
//是否开启弹幕
var danmu2 = {
	isOpen:<?php  if($fashb['bp_type']==2) { ?>true<?php  } else { ?>false<?php  } ?>,
	line:2,
	speed:160,
	isLoop:'true',
	loopRunning:false,
	msgArray:[],
	max:20,
	index:0,
	getRandom:function(begin,end){
		return parseInt(Math.random()*((end>begin?end-begin:begin-end)+1)+(end>begin?begin:end));
	},
	reset:function(){
		var box = document.getElementById('danmuText');
		var html = '';
		for(var x=0;x<this.line;x++){
			html += '<div class="danmuLine" style="position:absolute;"></div>';
		}
		$(box).html(html);
	},
	init:function(){
		danmu2.reset();
		$(window).bind('resize',function(){
			danmu2.reset();	
		});
		this.loop();
	},
	addToLine:function(line,html,left){
		var obj = $(html).appendTo(line);
		var height = obj[0].offsetHeight;
		var top = 0;
		height = height<=50?200:height;
		if(line.offsetHeight>height){
			top	= danmu2.getRandom(0,(line.offsetHeight-height));
		}
		$(obj).css({top:top,left:left+120}).addClass('visible');
		danmu2.x = danmu2.x==null?0:danmu2.x;
		danmu2.move(obj[0]);	
	},
	getLineLeft:function(e){
		var width = 0;
		if($(e).children().length>0){
			var lastChild = $(e).children().last();
			var oneWidth = lastChild.offset().left;
			width += oneWidth;	
			var offWidth = lastChild[0].offsetWidth;
			offWidth = offWidth<450?450:offWidth;
			width += offWidth;	
		}
		width = width-(window.innerWidth/2);
		width = width<0?0:width;
		return width;	
	},
	getLeft:function(){
		var allLine = $('.danmuLine');
		var left = {textLeft:[],maxLeft:0,picLeft:0};
		for(var x=0;x<allLine.length;x++){
			var e = allLine[x];	
			var width = this.getLineLeft(e);
			if(left.maxLeft<width){
				left.maxLeft = width;	
			}
			if(e.parentNode.id=='danmuText')
				left.textLeft.push(width);
			else if(e.parentNode.id=='danmuPicture')
				left.picLeft = width;
		}
		return left;		
	},
	getPicLine:function(){
		var leftData = this.getLeft();
		return {line:$('#danmuPicture .danmuLine')[0],left:leftData.maxLeft}
	},
	getTextLine:function(){
		var leftData = this.getLeft();
		var textLine = $('#danmuText .danmuLine');
		var useList = [];
		var use = null;
		var w = 0;
		for(var x=0;x<textLine.length;x++){
			var e = textLine[x];
			var width = 0;
			if($(e).children().length==0)
				useList.push(e);
			else{
				width = leftData.textLeft[x];	
			}
			if(x==0){
				w = width;
				use = textLine[x];	
			}
			if(w>width){
				use = e;
				w = width;	
			}
		}
		var maxLeft = leftData.maxLeft;
		if(leftData.maxLeft>leftData.picLeft||leftData.picLeft==0){
			maxLeft = w;
			maxLeft = maxLeft<leftData.picLeft?leftData.picLeft:maxLeft;
			maxLeft += danmu2.getRandom(50,100);
		}else{
			maxLeft += danmu2.getRandom(0,300);	
		}
		if(useList.length>0){
			ret = {
				line:useList[danmu2.getRandom(0,useList.length-1)],
				left:maxLeft		
			}
		}else{
			ret = {
				line:use,
				left:maxLeft		
			}				
		}
		return ret;
	},
	getTransformX:function(e){
		var transformX = $(e).css('transform');
		if(transformX=='none')
			return 0;
		transformX = transformX.replace('matrix(','');
		transformX = transformX.replace(')','');
		transformX = transformX.split(',');
		transformX = transformX[4];
		return transformX;	
	},
	_add:function(dt){
		var ret;
		if(dt.wordimg!=null&&dt.wordimg!='')
			ret = this.getPicLine();
		else
			ret = this.getTextLine();
		var html = this.create(dt);
		var obj = this.addToLine(ret.line,html,ret.left);		
	},
	addPic:function(dt){
//        console.log(dt.wordimg);
		var src = dt.wordimg;
		var img = new Image();
		img.onload = function(){
			danmu2._add(dt);		
		}
		img.onerror = function(){
			this.src = '../addons/hm_newdpm/bapinimg/tpsc.png';
		}
		img.src = src;
	},
	move:function(obj){
		var left = obj.offsetLeft+obj.offsetWidth+window.innerWidth;
		left = left*-1;
		var time = Math.abs(left)/this.speed;
		$(obj).css({transition:'transform '+time+'s linear'});
		$(obj).css({transform:'translate3d('+left+'px,0,0)'});
		$(obj).one("webkitTransitionEnd",function(){
			$(this).remove();
		})
	},
	theme2name:function(index){
				if(bp_zhutis.length==0){
					return '重金霸屏';
				}else{
					for(var j=0;j<bp_zhutis.length;j++){
						if(bp_zhutis[j].bp_ztindex==index){
							return bp_zhutis[j].bp_ztdes;
						}
					}
					return '重金霸屏';
				}
	},
	bpMsg:function(e){
		if(danmu2_color_type==2){
				var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '';
		var val = this.theme2name(e.theme);
//        console.log(e);
		if(e.type==5&&e.for_nickname!=''){

			html += '<p class="msgText richText" style="color:'+danmu_wall_text_color+'">为 '+e.for_nickname+' '+val+''+e.bptime+'秒：'+e.word+'</p>';
			html += '<p class="forTaBp_line"></p>';
			html += '<p class="forTaBp_text">';
			html += '<img class="forTaBp_image" src="'+e.wordimg+'" />';
			html += '<span style="color:'+danmu_wall_text_color+'">'+e.word+'</span>';
			html += '<p class="clear"></p>';
			html += '</p>';
		}else{
			html += '<p class="msgText richText" style="color:'+danmu_wall_text_color+'">'+val+''+e.bptime+'秒：'+e.word+'</p>';
			if(e.wordimg!=null&&e.wordimg.length>0&&e.type!=4) {
			    html += '<img class="msgImage" src="'+e.wordimg+'" />';
            }
            if(e.wordimg!=null&&e.wordimg.length>0&&e.type==4) {
                html += '<video class="msgImage" src="'+e.wordimg+'" autoplay /></video>';
            }
		}
		return html;
	},
	rand_color:function(){
		var e = .78,
		t = ["rgba(141,50,160," + e + ")", "rgba(225,99,15," + e + ")", "rgba(242,73,73," + e + ")", "rgba(18,155,240," + e + ")", "rgba(90,162,12," + e + ")", "rgba(20,185,148," + e + ")"],
		n = Math.floor(6 * Math.random());
		return t[n]
	},
	dsMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText dsText" style="color:'+danmu_wall_text_color+'">打赏给 "'+e.says+'" '+e.extend_params.name+'：'+e.word+'</p>';
		html += '<img class="msgImage" src="'+e.wordimg+'" />';
		return html;
	},
	bbMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText dsText" style="color:'+danmu_wall_text_color+'">向'+e.for_nickname+'表白：'+e.word+'</p>';
		html += '<img class="msgImage" src="'+e.wordimg+'" />';
		return html;
	},
	dmMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText dsText" style="color:'+danmu_wall_text_color+'">弹幕：'+e.word+'</p>';
		return html;
	},
	cakeMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText dsText" style="color:'+danmu_wall_text_color+'"><i class="'+allData.dsData['cake'].iconName+'"></i>为 '+e.toName+' 霸屏 生日蛋糕：'+e.word+'</p>';
		return html;
	},
	loveNightMsg:function(e){

		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<div class="msgLove">';
		html += '<p><tt class="loveNightMsgTop"></tt></p>';
		html += '<div><img onload="wemewOnWall.public.centerImage(this)" src="'+e.wordimg+'" /></div>';
		html += '</div>';
		return html;
	},
	sitMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText sitText" style="color:'+danmu_wall_text_color+'"><span class="sitNumber">'+e.sitNumber+'</span>';
		var sitMsg = e.sitMsg;
		if(e.sitMsg==null||e.sitMsg.length==0)
			sitMsg = '签到就座';
		html += '<br />'+sitMsg;
		html += '</p>';
		sitWineControl.addSign(e.tid,e.userName,e.sitNumber,e.sitMsg);
		return html;
	},
	redBagMsg:function(e){
		if(danmu2_color_type==2){
				var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText redBagText" style="color:'+danmu_wall_text_color+'"><i class="newDsIcon_redbag"></i>发出'+e.for_nickname+'元红包：'+e.word+'</p>';
		//html += '<span class="onWall_redBagShow"></span>';
		return html;		
	},
	songMsg:function(e){
		var html = '<p class="msgText songText">点了一首歌 '+(e.songName+'_'+e.singer)+'：'+e.word+'</p>';
		return html;		
	},
	giftMsg:function(e){
		if(danmu2_color_type==2){
			var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		var html = '<p class="msgText dsText" style="color:'+danmu_wall_text_color+'">向'+e.for_nickname+'送出：'+e.says+'个'+e.extend_params.gift_des+'</p>';
		html += '<img class="msgImage" src="'+rootimg+e.extend_params.gift_gif+'" />';
		return html;
	},
	normalMsg:function(e){
		if(danmu2_color_type==2){
				var danmu_wall_text_color = this.rand_color();
		}else{
			var danmu_wall_text_color = '';
		}
		if(e.type=='12')
			return this.songMsg(e);
		var html = '<p class="msgText" style="color:'+danmu_wall_text_color+'">'+face.replaceText(emojione.toImage(e.word))+'</p>';
		if(e.wordimg!=null&&e.wordimg.length>0){
			html += '<img class="msgImage" src="'+e.wordimg+'" />';
		}
		return html;
	},
	create:function(e){
		var cName = 'onWallMsg danmuMsg';
		if(e.type=='1'||e.type=='5'||e.type=='4'){
			cName += ' longMsg';
			cName += ' themeMsgBp';	
		}else if(e.type=='17'){
			cName += ' songMsg';
		}
		var html = '<div class="'+cName+'" id="danmu_wall_'+e.id+'">';
		if(e.type=='1'){
			var val = '<span class="themeIcon themeIcon_default '+e.theme+'"></span>';
			html += val;
		}
		if(e.sex==1){
			var temp_sex = 'man';
		}else{
			var temp_sex = 'woman'
		}
		html += '<img class="userHead '+temp_sex+'" src="'+e.avatar+'" />';
		html += '<div class="onWallMsgInfo">';
		html += '<span class="userName">'+e.nickname+'</span>';
		html += '<span class="msgTime">'+(danmu2_show_time==1?change_time(e.createtime):'')+'</span>';
		html += '<div class="onWallMsgMain">';
		if(e.type=='1'||e.type=='5'||e.type=='4'){
			html += this.bpMsg(e);	
		}else if(e.type=='2'){
			html += this.dsMsg(e);
		}else if(e.type=='6'){
			html += this.bbMsg(e);
		}else if(e.type=='3'){
			html += this.redBagMsg(e);
		}else if(e.type=='13'){
			html += this.dmMsg(e);
		}else if(e.type=='14'){
			html += this.cakeMsg(e);
		}else if(e.type=='15'){
			html += this.loveNightMsg(e);
		}else if(e.type=='16'){
			html += this.sitMsg(e);
		}else if(e.type=='17'){
			html += this.songMsg(e);
		}else if(e.type=='7'){
			html += this.giftMsg(e);
		}else{
			html += this.normalMsg(e);
		}
		html += '</div>';
		html += '</div></div>';
		return html;
	},
	add:function(e){
		
		if(this.isLoop=='true'){
			return this.newAdd(e);
		}
		this.toAdd(e);
	},
	toAdd:function(dt,isLoop){
		isLoop = isLoop==null?false:isLoop;

		if(!isLoop){
			if(dt.type=='richUser'||dt.type=='redBag'||dt.type=='song')
				bpControl.add(dt);
			if(dt.type=='richUser'||dt.type=='openRedBag')
				return;
		}
		if(!this.isOpen||this.isOpen=='false'){
			return;
		}
		if(dt.wordimg!=null&&dt.wordimg.length>0){
			this.addPic(dt);
		}else{
			this._add(dt);
		}
	},
	newAdd:function(e){
		e.running = true;
		danmu2.msgArray.unshift(e);//把新加进来的 放入到数组中
		if(danmu2.msgArray.length>danmu2.max){
			danmu2.msgArray.pop();//删除最后一个 大于最大值
		}
		danmu2.index++;//index+1
		danmu2.index = danmu2.index>=danmu2.msgArray.length?0:danmu2.index;
		danmu2.toAdd(e);
		this.loop();
	},
	loop:function(){
		
		if(this.isLoop=='false'||this.msgArray.length==0||this.loopRunning)
			return;
		this.loopRunning = true;
		var fn = function(){
			if(danmu2.msgArray.length==0){
				danmu2.loopRunning = false;
				return;
			}
			if($('.danmuMsg').length>4)
				return setTimeout(fn,500);
			var arg = arguments.callee;
			danmu2.index = danmu2.index>=danmu2.msgArray.length?0:danmu2.index;
			try{
				var e = danmu2.msgArray[danmu2.index];
				if($('#danmu_wall_'+e.id).length==0){
					danmu2.toAdd(e,true);
				}
			}catch(ex){
			}
			danmu2.index++;	
			danmu2.index = danmu2.index>=danmu2.msgArray.length?0:danmu2.index;	
			var delay = danmu2.getRandom(2000,6000);
			setTimeout(fn,delay);
        }
		fn();
	}
}
function change_time(time){
	 var date = new Date(parseInt(time) * 1000); //获取一个时间对象  注意：如果是uinx时间戳记得乘于1000。比如php函数time()获得的时间戳就要乘于1000   
    Y = '';  
    M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';  
    D = date.getDate() + ' ';  
    h = (date.getHours()< 10 ? '0'+date.getHours() : date.getHours()) + ':';  
    m = (date.getMinutes()< 10 ? '0'+date.getMinutes() : date.getMinutes()) + ':';  
    s = (date.getSeconds()< 10 ? '0'+date.getSeconds() : date.getSeconds());   
    return Y+M+D+h+m+s;  
}	
</script>
<script src="../addons/hm_newdpm/new_messages/app/js/new_barmain.js?v=123334" type="text/javascript" ></script>
<script type="text/javascript" src="../addons/hm_newdpm/new_messages/app/js/light_Contr.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            if($('#music_img',window.parent.document).attr("src") == '../addons/hm_newdpm/common/footer/no_music.png'){
                document.getElementById('media').pause();
            }
        });

        function spaceStart(){
            //预留空格开始的方法，不要删除
        }
    </script>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hm_newdpm"></script></body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('dpm_Keyborad', TEMPLATE_INCLUDEPATH)) : (include template('dpm_Keyborad', TEMPLATE_INCLUDEPATH));?>
</html>



