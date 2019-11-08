<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>霸屏</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <script src="../addons/haoman_base/base/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="../addons/hm_newdpm/bapinimg/icon.css">
    <!--这2个js要引入-->
    <script src="../addons/hm_newdpm/bapinimg/three.js"></script>
    <script src="../addons/hm_newdpm/bapinimg/flowerFly.js"></script>
    <script src="../addons/hm_newdpm/bapinimg/canvas_richBg.js"></script>
    <script src="../addons/hm_newdpm/bapinimg/canvas_richBlock.js"></script>
    <script src="../addons/hm_newdpm/bapinimg/canvas_richFont.js"></script>
    <script src="../addons/hm_newdpm/bapinimg/onWallVideo.js"></script>
    <!--五角星 五角星特效引用下面的js-->
    <script src="../addons/hm_newdpm/bapinimg/stars.js"></script>
    <link href="./index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&m=haoman_base&do=GetCss&css=baping" rel="stylesheet" type="text/css">
    <link href="../addons/hm_newdpm/bapinimg/reward.css?v=32312313" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../addons/hm_newdpm/new_messages/emojione.js"></script>

    <script>
    /*音频js*/
    var audio = {
        init: function(src) {
            audio.src = src;
            if (audio.src != null && audio.src.length > 0) {
                var html = '<audio id="audioPreload" style="display:none"></audio>';
                $(html).appendTo($('body'));
                this.preload();
            }
        },
        preload: function() {
            var x = 0;
            (function() {
                var arg = arguments.callee;
                $('#audioPreload').unbind('canplaythrough').bind('canplaythrough', function() {
                    x++;
                    if (x >= audio.src.length)
                        audio.loadEnd();
                    arg();
                });
                $('#audioPreload').unbind('stalled').bind('stalled', function() {
                    x++;
                    if (x >= audio.src.length)
                        audio.loadEnd();
                    arg();
                });
                $('#audioPreload').attr({
                    src: audio.src[x]
                });
            })();
        },
        loadEnd: function() {
            $('#audioPreload').remove();
        },
        play: function(src) {
            if (src != null && src.length > 0) {
                $('#dsAudio').remove();
                var html = '<audio id="dsAudio" style="display:none" autoplay="autoplay" src="' + src + '" ></audio>';
                $(html).appendTo($('body'));
            }
        },
        close: function() {
            $('#dsAudio').remove();
        }
    }

    var setFont = function() {
        var w = $(window).width();
        var h = $(window).height();
        var maxWidth = 900;
        var maxHeight = 653;
        if (w >= h) {
            var zoom = h / maxHeight;
            if (w / h > 3 && w / maxWidth > 2) {
                zoom += 0.1;
            }
            $('#all').css({
                zoom: zoom
            });
        } else {
            var zoom = w / maxWidth;
            $('#all').css({
                zoom: zoom
            });
        }
    }


    var getRandom = function(begin, end) {
        return parseInt(Math.random() * ((end > begin ? end - begin : begin - end) + 1) + (end > begin ? begin : end));
    }
    var errorSrc = '<?php  echo $lbbg;?>';
    var image = {
        percent: '',
        max: 32, //最大图片容量
        time: 6, //更新图片的时间
        advertTime: 10, //更新广告图片时间
        last: null,
        index: 0,
        start: false,
        isRound: false,
        able: true,
        timeout: null,
        round: -1,
        resetRound: function() {
            this.isRound = false;
            this.round = 100 / parseInt(this.percent);
            if (this.percent == 100 && $('#imageBox .advert').length > 0)
                this.round = -2;
            if ($('#imageBox .advert').length == 0 || this.percent == 0)
                this.round = -1;
        },
        init: function() {
            $('#beforeImageLoad').remove();
            this.percent = 0;
            this.resetRound();
            this.run();
        },
        getLast: function() {
            var arr = $('#imageBox .normal');
            if (arr.length == 0)
                return null;
            var last = parseInt($(arr[0]).attr('index'));
            var lastObj = arr[0];
            for (var i = 1; i < arr.length; i++) {
                if (last > parseInt($(arr[i]).attr('index'))) {
                    last = parseInt($(arr[i]).attr('index'));
                    lastObj = arr[i];
                }
            }
            return lastObj;
        },
        replace: function(tid, src) {
            var obj = this.getLast();
            if (obj == null)
                return;
            var index = this.getMaxIndex() + 1;
            $(obj).html('<img onload="image.load(this)" onerror="image.error(this)" src="' + src + '" />').attr({
                index: index,
                tid: tid
            });
        },
        add: function(tid, src) {
            tid = tid || '';
            if (this.percent == 100 && $('#imageBox .advert').length > 0)
                return;
            if ($('#imageBox div').length >= this.max)
                this.replace(tid, src);
            else {
                var index = this.getMaxIndex() + 1;
                var html = '<div class="normal" index="' + index + '" tid="' + tid + '"><img src="' + src + '" onload="image.load(this)" onerror="image.error(this)" /></div>';
                $(html).appendTo($('#imageBox'));
                if ($('#imageBox .defaultImage').length > 0)
                    $('#imageBox .defaultImage').remove();
            }
            if (!this.start)
                this.run();
        },
        getOne: function() {
            if (this.round == -2) {
                var index = getRandom(0, $('#imageBox .advert').length - 1);
                index = $($('#imageBox .advert')[index]).index();
                if (this.last != null && $('#imageBox .advert').length > 1) {
                    while (this.last == index) {
                        index = getRandom(0, $('#imageBox .advert').length - 1);
                        index = $($('#imageBox .advert')[index]).index();
                    }
                }
                return index;
            } else if (this.round == -1) {
                var index = getRandom(0, $('#imageBox div').length - 1);
                if (this.last != null && $('#imageBox div').length > 1) {
                    while (this.last == index) {
                        index = getRandom(0, $('#imageBox div').length - 1);
                    }
                }
                return index;
            } else {
                this.round--;
                var index;
                if (this.isRound) {
                    if ($('#imageBox .normal').length == 0) {
                        index = getRandom(0, $('#imageBox div').length - 1);
                        while (this.last == index) {
                            index = getRandom(0, $('#imageBox div').length - 1);
                        }
                    } else {
                        index = getRandom(0, $('#imageBox .normal').length - 1);
                        index = $($('#imageBox .normal')[index]).index();
                        if (this.last != null && $('#imageBox .normal').length > 1) {
                            while (this.last == index) {
                                index = getRandom(0, $('#imageBox .normal').length - 1);
                                index = $($('#imageBox .normal')[index]).index();
                            }
                        }
                    }
                    if (this.round == 0)
                        this.resetRound();
                    return index;
                } else {
                    var index;
                    if (this.round == 0) {
                        index = getRandom(0, $('#imageBox .advert').length - 1);
                        index = $($('#imageBox .advert')[index]).index();
                        if (this.last != null && $('#imageBox .advert').length > 1) {
                            while (this.last == index) {
                                index = getRandom(0, $('#imageBox .advert').length - 1);
                                index = $($('#imageBox .advert')[index]).index();
                            }
                        }
                        this.isRound = true;
                        this.resetRound();
                    } else {
                        index = getRandom(0, $('#imageBox div').length - 1);
                        if (this.last != null && $('#imageBox div').length > 1) {
                            while (this.last == index) {
                                index = getRandom(0, $('#imageBox div').length - 1);
                            }
                        }
                        if ($($('#imageBox div')[index]).hasClass('advert'))
                            this.isRound = true;
                    }
                    return index;
                }
            }
        },
        run: function() {
            if (this.start)
                return;
            this.able = true;
            var arr = $('#imageBox div');

            if (arr.length < 2)
                return $('#imageBox div').addClass('visible'), this.able = false;
            this.start = true;
            var delay = this.time;
            var t = this;
            $('#imageBox div.visible').removeClass('visible');
            var one = this.getOne();
            this.last = one;
            $($('#imageBox div')[one]).addClass('animateBig');
            this.timeout = setTimeout(function() {
                if ($('#imageBox div').length < 2) {
                    $('#imageBox div').addClass('visible');
                    t.able = false;
                    return;
                }
                var index = t.getOne();
                t.last = index;
                if ($('#imageBox div.animateBig').length > 0) {
                    var e = $('#imageBox div.animateBig')[0];
                    $(e).removeClass('animateBig');
                    $(e).find('img').css({
                        '-webkit-transform': 'scale(1)',
                        'transform': 'scale(1)'
                    });
                    $($('#imageBox div')[index]).find('img').css({
                        '-webkit-transform': 'scale(1.1)',
                        'transform': 'scale(1.1)'
                    });
                    $($('#imageBox div')[index]).addClass('animateSmall');
                } else {
                    if ($('#imageBox div.animateSmall').length > 0) {
                        var e = $('#imageBox div.animateSmall')[0];
                        $(e).removeClass('animateSmall');
                        $(e).find('img').css({
                            '-webkit-transform': 'scale(1)',
                            'transform': 'scale(1)'
                        });
                    }
                    $($('#imageBox div')[index]).find('img').css({
                        '-webkit-transform': 'scale(1)',
                        'transform': 'scale(1)'
                    });
                    $($('#imageBox div')[index]).addClass('animateBig');
                }
                if ($('#imageBox div').length < 2) {
                    $('#imageBox div').addClass('visible');
                    image.start = false;
                    return;
                }
                var arg = arguments.callee;
                var _delay = t.time;
                if ($($('#imageBox div')[index]).hasClass('advert'))
                    _delay = t.advertTime;
                if (t.able)
                    t.timeout = setTimeout(arg, _delay * 1000);
            }, delay * 1000);
        },
        setImage: function() {
            var arr = $('#imageBox img');
            for (var x = 0; x < arr.length; x++) {
                this.load(arr[x]);
            }
        },
        error: function(e) {
            $(e).attr({
                src: errorSrc
            });
        },
        load: function(e) {
            var dir = $(e.parentNode).width() / $(e.parentNode).height();
            if ($(e).width() / $(e).height() <= dir) {
                $(e).css({
                    width: '100%',
                    left: 0
                });
                setTimeout(function() {
                    var mt = ($(e).height() - $(e.parentNode).height()) / -2;
                    $(e).css({
                        top: mt,
                        visibility: 'visible'
                    });
                }, 10);
            } else {
                $(e).css({
                    top: 0,
                    height: '100%'
                });
                setTimeout(function() {
                    var ml = ($(e).width() - $(e.parentNode).width()) / -2;
                    $(e).css({
                        left: ml,
                        visibility: 'visible'
                    });
                }, 10);
            }
        },
        getMaxIndex: function() {
            var arr = $('#imageBox .normal');
            if (arr.length == 0)
                return 0;
            var last = parseInt($(arr[0]).attr('index'));
            for (var i = 1; i < arr.length; i++) {
                if (last < parseInt($(arr[i]).attr('index'))) {
                    last = parseInt($(arr[i]).attr('index'));
                }
            }
            return last;
        },
        del: function(tid) {
            $('#imageBox div[tid="' + tid + '"]').remove();
        },
        replaceAll: function(dt) {
            if (this.percent == 100 && $('#imageBox .advert').length > 0)
                return;
            this.able = false;
            this.start = false;
            var html = '';
            var len = dt.length;
            for (var x = 0; x < dt.length; x++) {
                html += '<div class="normal" index="' + (len - x) + '" tid=""><img src="' + dt[x] + '" onload="image.load(this)" onerror="image.error(this)" /></div>';
            }
            $('#imageBox .normal').remove();
            $(html).appendTo($('#imageBox'));
            this.able = true;
            try {
                clearTimeout(image.timeout);
            } catch (ex) {}
            this.run();
        }

    }

    var showCode = function(e) {
        if ($('.bigCode').length > 0)
            return $('.bigCode').remove();
        var html = '<img class="bigCode" onclick="$(this).remove()" src="' + $(e).attr('src') + '" />';
        $(html).appendTo($('body'));
    }

    var init = function() {
        if ($(window).width() < 1100)
            $('#rightBox').hide(), $('.main').addClass('full');
        $(window).bind('resize', function() {
            setFont();
            if ($(window).width() < 1100)
                $('#rightBox').hide(), $('.main').addClass('full');
            else
                $('#rightBox').show(), $('.main').removeClass('full');
            image.setImage();
        });
    }
    var control = {
        hold: false,
        delay: 4000,
        max: 20,
        start: false,
        index: 0,
        running: false,
        array: [],
        delArray: [],
        addHtml: '',
        replaceData: null,
        createOne: function(newIndex, dt) {
            var html = '<div class="oneMsg" index="' + newIndex + '" id="' + dt.tid + '">';
            html += '<img class="userHead ' + dt.sex + '" src="' + dt.userHead + '">';
            html += '<div class="oneMsg_info">';
            html += '<span class="oneMsg_name">' + dt.name + '</span>';
            html += '<span class="oneMsg_time">' + dt.time + '</span>';
            html += '<div class="oneMsg_onWall">';

            var str = '<p class="txt">' + dt.txt + '</p>';
            if(dt.type=='redBag'){
                str = '<p class="txt oneMsg_redBag" style="color: #ffde8d;">发出了'+dt.redBagMoney+'元红包：'+dt.txt+'</p>';
                str += '<span class="onWall_redBagShow"></span>';
            }
            if(dt.type=='loveNight'){
                str = '<div class="msgLove"><p><tt class="loveNightMsgTop"></tt></p>';
                str += '<div><img onload="centerImage(this)" src="'+dt.img+'" /></div></div>';
                if(dt.bool&&(dt.videoUrl==null||dt.videoUrl==''))
                    image.add(dt.tid,dt.img);
            }
            if (dt.type == 'ds' || dt.type == 'cake') {
                if (dt.type == 'cake')
                    dt.action.giftId = 'cake';
                var giftName = '';
                if (dt.action.giftId != null && dt.action.giftId != '') {
//                    console.log(dt.action.giftId);
//                    className = dsData[dt.action.giftId].iconName;


                    if($.inArray(dt.action.giftId, arr)!=-1){
//                        console.log($.inArray(dt.action.giftId, arr));
                        giftName = dsData[dt.action.giftId].name;
                    }

//                    says = dsData[dt.action.giftId].says;
                }
                str = '<p class="txt oneMsg_dsText">';
//                str += '<i class="' + className + '"></i>';
                if (dt.action.giftId == 'cake') {
                    str += '为 "' + dt.action.toName + '" 霸屏 ' + giftName + '：' + (dt.action.txt || '') + '</p>';
                } else {
                    str += '打赏给"' + dt.action.showName + '" ' + giftName + '</p>';
                }
                str += '<span class="textMain22">' + dt.action.say + '</span>';
            }

            if (dt.type == 'sit') {
                str = '<p class="txt oneMsg_sitText"><span class="oneMsg_sitNumber">' + dt.sitNumber + '</span><br />' + dt.txt + '</p>';
                if (dt.bool)
                    bigShow.addSign(dt.tid, dt.name, dt.sitNumber, dt.txt);
            }
            if (dt.type == 'bp' || dt.type == 'forTaBp') {
                str = dt.type == 'forTaBp' ? '为 ' + dt.action.name + ' ' : '';
                str += '重金霸屏' + dt.richTime + '秒：';
                str += dt.txt;
                str = '<p class="txt oneMsg_rich">' + str + '</p>';
            }

            html += str;

            if (dt.img != null && dt.img != '' && dt.type != 'forTaBp') {
                if(dt.video==4){
                    html += '<video onload="setImage(this)" class="img" src="' + dt.img + '" ></video>';
                }else {
                    html += '<img onload="setImage(this)" class="img" src="' + dt.img + '" />';
                }

                if (dt.bool)
                    image.add(dt.tid, dt.img);
            }

            if (dt.type == 'forTaBp') {
                html += '<div class="forTaBp"><p class="forTaBp_line"></p>';
                html += '<p class="forTaBp_text">';
                if (dt.action.img != null && dt.action.img != '')
                    html += '<img class="forTaBp_image" src="' + dt.action.img + '" onerror="$(this).remove()" />';
                if (dt.action.txt != null && dt.action.txt.length > 0)
                    html += '<span>' + face.replaceText(dt.action.txt) + '</span>';
                html += '<p class="clear"></p></p></div>';
            }

            html += '</div></div></div>';
            return html;
        },
        replaceAll: function(dt) {

            if (dt != null)
                this.replaceData = dt;
            if (this.running)
                return;
            if (this.replaceData == null)
                return;
            var html = '';
            var len = this.replaceData.length;
            for (var x = 0; x < len; x++) {
                html += control.createOne(len - x, control.replaceData[x]);
            }

            $('#msgBox').html(html);
            this.replaceData = null;
            if ($('#msgBox .oneMsg').length < 3) {
                try {
                    control.start = false;
                    clearInterval(control.interval);
                } catch (ex) {}
            } else
                this.init();
        },
        init: function() {
            var len = $('#msgBox .oneMsg').length;
            if (len >= 3 && !this.start) {
                this.start = true;
                var self = this;
                this.interval = setInterval(function() {
                    self.scroll();
                }, self.delay);
            }
        },
        scroll: function() {
            this.running = true;
            var firstChild = $('#msgBox .oneMsg')[0];
            var node = firstChild.cloneNode(true);
            $('#msgBox')[0].appendChild(node);
            var t = this;
            $('#msgBox').animate({
                top: $('#msgBox')[0].offsetTop - firstChild.offsetHeight - 10
            }, 'normal', function() {
                if ($('#msgBox .oneMsg')[0])
                    $($('#msgBox .oneMsg')[0]).remove();
                $('#msgBox').css({
                    top: 0
                });
                t.running = false;
                var arr = t.array;
                if (arr.length > 0) {
                    for (var x = 0; x < arr.length; x++) {
                        control.add(arr[x]);
                    }
                }
                if (t.replaceData != null)
                    t.replaceAll();

                control.del(t.delArray);
                t.replaceData = null;
                t.array = [];
                t.delArray = [];
            });
        },
        add: function(dt) {
            dt.bool = dt.bool == null ? true : dt.bool;
            if (this.running)
                return this.array.push(dt);
            var len = $('#msgBox .oneMsg').length;

            var newIndex = this.getMaxIndex() + 1;
            var html = this.createOne(newIndex, dt);

            $(html).appendTo($('#msgBox'));

            if (!this.start && !this.hold)
                this.init();
        },
        getLast: function() {
            var arr = $('#msgBox .oneMsg');
            var last = parseInt($(arr[0]).attr('index'));
            var lastObj = arr[0];
            for (var i = 1; i < arr.length; i++) {
                if (last > parseInt($(arr[i]).attr('index'))) {
                    last = parseInt($(arr[i]).attr('index'));
                    lastObj = arr[i];
                }
            }
            return lastObj;
        },
        replaceLast: function(dt) {
            var lastObj = this.getLast();
            if (!this.running) {
                var newIndex = this.getMaxIndex() + 1;
                $(lastObj).attr({
                    index: newIndex,
                    id: dt.tid
                });
                $(lastObj).find('.userHead').attr({
                    src: dt.userHead
                }).removeClass('woman man').addClass(dt.sex);
                $(lastObj).find('.oneMsg_name').html(dt.name);
                $(lastObj).find('.oneMsg_time').html(dt.time);
                var html = '';
                var str = '<p class="txt">' + dt.txt + '</p>';

                if (dt.type == 'ds' || dt.type == 'cake') {
                    if (dt.type == 'cake')
                        dt.action.giftId = 'cake';
                    var className, giftName;
                    if (dt.action.giftId != null && dt.action.giftId != '') {
//                        className = dsData[dt.action.giftId].iconName;
                        giftName = dsData[dt.action.giftId].name;
                    }
                    str = '<p class="txt oneMsg_dsText">';
//                    str += '<i class="' + className + '"></i>';
                    if (dt.action.giftId == 'cake')
                        str += '为 "' + dt.action.toName + '" 霸屏 ' + giftName + '：' + (dt.action.txt || '') + '</p>';
                    else
                        str += '打赏给 "' + dt.action.showName + '" ' + giftName + '</p>';
                }

                if (dt.type == 'sit') {
                    str = '<p class="txt oneMsg_sitText"><span class="oneMsg_sitNumber">' + dt.sitNumber + '</span><br />' + dt.txt + '</p>';
                    if (dt.bool)
                        bigShow.addSign(dt.tid, dt.name, dt.sitNumber, dt.txt);
                }

                if (dt.type == 'bp' || dt.type == 'forTaBp') {
                    str = dt.type == 'forTaBp' ? '为 ' + dt.action.name + ' ' : '';
                    str += '重金霸屏' + dt.richTime + '秒：';
                    str += dt.txt;
                    str = '<p class="txt oneMsg_rich">' + str + '</p>';
                }

                html += str;

                if (dt.img != null && dt.img != '' && dt.type != 'forTaBp') {
                    if(dt.video==4){
                        html += '<video onload="setImage(this)" class="img" src="' + dt.img + '" ></video>';
                    }else {
                        html += '<img onload="setImage(this)" class="img" src="' + dt.img + '" />';
                    }
                    if (dt.bool)
                        image.add(dt.tid, dt.img);
                }

                if (dt.type == 'forTaBp') {
                    html += '<div class="forTaBp"><p class="forTaBp_line"></p>';

                    html += '<p class="forTaBp_text">';
                    if (dt.action.img != null && dt.action.img != '')
                        html += '<img class="forTaBp_image" src="' + dt.action.img + '"  onerror="$(this).remove()" />';
                    if (dt.action.txt != null && dt.action.txt.length > 0)
                        html += '<span>' + face.replaceText(dt.action.txt) + '</span>';
                    html += '<p class="clear"></p></p></div>';
                }

                $(lastObj).find('.oneMsg_onWall').html(html);
            } else {
                this.array.push(dt);
            }
        },
        getMaxIndex: function() {
            var arr = $('#msgBox .oneMsg');
            if (arr.length == 0)
                return 0;
            var last = parseInt($(arr[0]).attr('index'));
            for (var i = 1; i < arr.length; i++) {
                if (last < parseInt($(arr[i]).attr('index'))) {
                    last = parseInt($(arr[i]).attr('index'));
                }
            }
            return last;
        },
        stop: function() {
            return;
            try {
                control.start = false;
                control.hold = true;
                clearInterval(control.interval);
            } catch (ex) {}
        },
        del: function(tid) {
            if (tid == null || tid == '' || tid == 'undefined')
                return;
            tid = typeof tid == 'string' ? [tid] : tid;
            for (var x = 0; x < tid.length; x++) {
                this.remove(tid[x]);
            }
        },
        remove: function(tid) {
            if (this.running)
                return this.delArray.push(tid);
            $('#' + tid).remove();
            image.del(tid);
            var len = $('#msgBox .oneMsg').length;
            if (len < 3 && this.start) {
                this.start = false;
                this.stop();
            }
        },
        reStart: function() {
            return;
            control.hold = false;
            if (!this.start)
                this.init();
        }
    }

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

    var setImage = function(e) {
        if ($(e).width() > $(e).height())
            $(e).addClass('wImg');
        if ($(e.parentNode).find('.txt').length == 0)
            $(e).css({
                marginTop: 0
            });
    }

    var addData = function(isDel, data) {
        if (data == null)
            return;
        var newData = [];

        for (var x = 0; x < data.length; x++) {
            var txt = '',
                img = '',
                redBagMoney = '';
            var sitNumber = null;
            var type = null;
            var richTime = null;
            var video = null;
            var dt = {}; //行为

            if(data[x].type == 'image'){
                img = data[x].word;
            } else if (data[x].type == 'news') {
                txt = face.replaceText(emojione.toImage(data[x].message));
                img = data[x].imgurl;
            } else if (data[x].type == 'interact') { //就座消息
                type = 'sit';
                txt = data[x].message;
                sitNumber = data[x].imgurl;
            } else if (data[x].is_bp ==1&&data[x].gift==0) { //霸屏
                type = 'bp';
                //霸屏时间
                  video =data[x].type;

                 richTime = data[x].bptime;
                 txt = face.replaceText(emojione.toImage(data[x].word));
       //         txt = data[x].word;
                img = data[x].wordimg;
                //这里判断是否是为TA霸屏
                var forusername = data[x].for_nickname;
                if (forusername != null&& forusername !='') {
                    type = 'forTaBp';
                    //赋值
                    dt = {
                        name: data[x].for_nickname, //用户名
                        img: data[x].wordimg, //发的图片
                        txt: data[x].word //文字
                    }
                }
            }else if (data[x].is_bp ==0&&data[x].type == 0) { //普通消息
                type = 'pt';
                txt = face.replaceText(emojione.toImage(data[x].word));
               // txt = data[x].word;
                img = data[x].wordimg;



            }else if (data[x].type == 7) {
                type = 'cake';
                img = data[x].wordimg;
                dt = {
                    //赠送蛋糕
                    toName: data[x].for_nickname, //送给谁
                    img: data[x].wordimg, //发的图片
                    txt: data[x].word //文字
                }
            } else if (data[x].type == 2) {
                type = 'ds';
                //打赏
                dt = {
                    giftId: data[x].gift_id, //增加礼物id 以前的为null或者''
                    gift: data[x].gift, //礼物类型
                    showName: data[x].says, //节目名称
                    say: data[x].word //节目名称
                }
            }else if (data[x].type == 3){
                type = 'redBag';
                redBagMoney = data[x].for_nickname;
                txt = data[x].word;
            }else{

            }

            if (!isDel) {
                newData.push({
                    type: type,
                    userHead: data[x].avatar, //头像
                    name: data[x].nickname, //用户名
                    time: data[x].createtime, //时间
                    txt: txt, //上墙文字
                    img: img, //图片
                    video: video, //视频
                    tid: data[x].id, //id
                    sitNumber: sitNumber,
                    richTime: richTime,
                    bool: !isDel,
                    action: dt,
                    redBagMoney:redBagMoney
                });

            } else {
                newData.push({
                    type: type,
                    userHead: data[x].avatar, //头像
                    name: data[x].nickname, //用户名
                    time: data[x].createtime, //时间
                    txt: txt, //上墙文字
                    img: img, //图片
                    video: video, //视频
                    tid: data[x].id, //id
                    sitNumber: sitNumber,
                    richTime: richTime,
                    bool: !isDel,
                    action: dt,
                    redBagMoney:redBagMoney
                });
            }
        }

        if (isDel)
            return control.replaceAll(newData);

        for (var x = 0; x < newData.length; x++) {
            if ($('#' + newData[x].tid).length > 0)
                continue;
            control.add(newData[x]);
        }
    }


    control.ajax = function(delay) {
        setTimeout(function() {
            var arg = arguments.callee;
            ajax_getData(function(data) {
                if (data == null)
                    return;

                addData(false, data);
            }, function() {

                setTimeout(arg, delay || 4000);
            });
        }, delay || 4000);
    }
    var bptime = "2016-12-10 23:09:11";
    var newtime = "2016-12-10 23:09:11";
    var now = "0"; //设置为当前服务器的状态值
    var randoms = [0];
    var last_id = 0;

    var ajax_getData = function(callback, fnc) {
        $.ajax({
            type: 'POST',
            url: "<?php  echo $this->createMobileUrl('addweionwallNewsMsg', array('id' => $rid))?>",
            data: {

                last_id: last_id
            },
            success: function(result) {
              //  console.log(result);
                if (result.isResultTrue) {
                    var obj = result.resultMsg;
                    var delNum = last_id;
                    last_id = obj[0].id;
                    var time = 1;
//                    console.log(delNum);
                //    console.log(obj.length);
//                    console.log(1234);
                    var wineDate = '';
                    var pascreen = '';
                    var weionwallmsgs = obj;
                    var d = new Date();
                    randoms = obj.nums == undefined ? [0] : obj.nums;
                    newtime = time;
                    //霸屏
                    if (pascreen != null && pascreen != "") {
                        for (i = 0; i < pascreen.length; i++) {
                            if (pascreen[i].is_bp == 1) {
                                rich.add({
                                    tid: pascreen[i].id,
                                    img: pascreen[i].wordimg,
                                    txt: pascreen[i].word,
                                    src: pascreen[i].avatar,
                                    userName: pascreen[i].nickname,
                                    time: pascreen[i].bptime,
                                })
                            } else {
                                rich.add({
                                    tid: pascreen[i].id,
                                    type: 'pt',
                                    img: pascreen[i].wordimg,
                                    txt: pascreen[i].word,
                                    src: pascreen[i].avatar,
                                    userName: pascreen[i].nickname,
                                })
                            }
                            d.setTime(pascreen[i].createtime);
                            var date = (d.getFullYear()) + "-" + (d.getMonth() + 1) + "-" + (d.getDate()) + " " + (d.getHours()) + ":" + (d.getMinutes()) + ":" + (d.getSeconds());
                            bptime = date;
                        }
                    }
                   
                    if (delNum != now) {

                        now = delNum;
                        $.post("<?php  echo $this->createMobileUrl('getWeiOnWallMsg', array('id' => $rid))?>", {
                            _id: delNum,
                            index: 1
                        }, function(data) {
                            if (data.isResultTrue) {
                                var newobj = data.resultMsg;
//                                console.log(_id);
//                                console.log(newobj);
                                var newmsg = newobj;
                                var newimages = newobj;
                                if (newmsg != null && newmsg != "") {
                                    addData(true, newmsg);
                                }
                                if (newimages != null && newimages != "") {
                                    var replaceImage = [];
                                    for (x = 0; x < newimages.length; x++) {
                                        var img = '';
                                        if (newimages[x].type == 'image') {
                                            img = newimages[x].message;
                                        }
                                        if (newimages[x].type == 'news' || newimages[x].is_bp == 1) {
                                            img = newimages[x].wordimg;
                                        }
                                        replaceImage.push(img);
                                    }
                                    image.replaceAll(replaceImage);
                                } else {
                                    image.replaceAll([]);
                                }
                                return;
                            } else {
                                image.replaceAll([]);
                                addData(true, []);
                            }
                        },'json');

                    }

                    //普通消息
                    if (weionwallmsgs != null && weionwallmsgs != "" && weionwallmsgs.length > 0) {
                        callback(weionwallmsgs);
                    }
                }

                fnc();
            },
            dataType: 'json',
            error: function() {
                fnc();
            }
        });
    }

    var isOpenAudio = 'true'; //是否开启音效
    //视频路径前缀
    var videoUrl = '<?php  echo $_W['attachurl'];?>';

    //新的打赏数据 check-1:选中 0:未选中 iconName,time,src是固定的
    var ispmd = '<?php  echo $bpreply['ispmd'];?>';

    var dsData =<?php  echo $dsData;?>;
    var arr =<?php  echo $arr;?>;
//    console.log(dsData);
    var dsVideoList = [];
    var dsVideoData = [];
    for (var i in dsData)
        dsVideoList.push(videoUrl + dsData[i].src);

    //加载视频
    var loadVideoSrc = videoUrl + 'loading.mp4';
    var allInit = function() {
        $('#all').css({
            visibility: 'visible'
        });
        if(ispmd==0){
            marquee.init();
        }
        control.init();
        control.ajax(3000);

            audio.init(['<?php  echo $bg_voice;?>', '']);

        try {
            var obj = document.getElementById('effect');
            initEffect(obj);
        } catch (ex) {}
    }

     function n(){
         setTimeout(function() {
             ajax_getFail(function(dt) {

                 if (dt != null && dt.length > 0) {
                     for (var x = 0; x < dt.length; x++) {
                         rich.add(dt[x]);
                     }
                 }
                 rich.init();

             }, function() {
                 setTimeout(n(),1000);

             });

         },1000);

        }

    $(function() {
        setFont();
        init();

       ! function (){
               n();
        }();

        allInit();

    });

    window.onload = function() {
        image.init();
    }


    </script>
    <style type="text/css">
        .richCover {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        background: <?php  if($fashb['bb_bgcoclor']) { ?><?php  echo $fashb['bb_bgcoclor'];?><?php  } else { ?>#000<?php  } ?>;
        opacity: <?php  if($fashb['bp_opacity']>1||$fashb['bp_opacity']<0) { ?>1<?php  } else { ?><?php  echo $fashb['bp_opacity'];?><?php  } ?>;
        }
    </style>
</head>

<body <?php  if(!empty($video['vodio_bg11'])&&$reply['is_transparent']!=1) { ?>data-vide-bg="<?php  echo tomedia($video['vodio_bg11'])?>"<?php  } ?>>
    <div id="all" style="zoom: 1.39663; visibility: visible;">
        <div id="rich" class="show" style="display: none;">
            <div id="richCover"></div>
            <div class="richBox">
                <div class="richCover">
                    <canvas style="opacity:0.3" width="1311" height="653"></canvas>
                </div>
                <div class="richMain">

                </div>
            </div>
        </div>
        <script>


        //已显示霸屏
        var ajax_bp = function(tid, errorFn) {
                $.post("<?php  echo $this->createMobileUrl('setshowpascreen')?>", {
                    id: tid,
                }, function(data) {
                    if (!data.isResultTrue) {
                        errorFn();
                    }
                });
            }
            //以前的霸屏


        var ajax_getFail = function(fn1, fn2) {

            $.post("<?php  echo $this->createMobileUrl('noshowpascreens', array('id' => $rid))?>", {

            }, function(data) {

                if (data.isResultTrue) {

                    if (data.resultMsg != null && data.resultMsg != "") {
                        var obj = data.resultMsg;
                        var dt = [];
                        for (i = 0; i < obj.length; i++) {
                            var ob = {
                                type: obj[i].type, //0普通，1霸屏，2打赏，3红包，4视频，5为人霸屏，6表白,7礼物
                                tid: obj[i].id,
                                img: obj[i].wordimg,
                                txt: obj[i].word,
                                src: obj[i].avatar,
                                userName: obj[i].nickname,
                                sit: '',
                                sex: '',
                                time: obj[i].bptime,
                                bpForTa: obj[i].for_nickname,
                                gift: obj[i].gift,
                                giftId: obj[i].gift_id,
                                say: obj[i].says

                            };
                            dt.push(ob);
                        }
                        fn1(dt);


                    }

                    if(data.ranking != null && data.ranking != ""){
                        var html = '',
                                lists = data.ranking;

                        for (var i in lists) {
                            if (i < 3) {

                                html += '<li>' + '<i class="No">' + (parseInt(i) + 1) + '</i>' + '<div class="richer_sort">' + '<i></i>' + '<img src="' + lists[i].avatar + '">' + '<h3>' + lists[i].nickname + '</h3>' + '<p>' + lists[i].pt  + '</p>' + '</div>' + '</li>'

                            } else {

                                html += '<li>' + '<i class="No">' + (parseInt(i) + 1) + '</i>' + '<div class="richer_sort">' + '<h3 style="margin-left:10px;">' + lists[i].nickname + '</h3>' + '<p>' + lists[i].pt  + '</p>' + '</div>' + '</li>';
                            }
                        }
                        $('.rewards_ranking').html(html);

                    }

                } else {
                    fn2();
                }
            }, "json");
        }
        var rich = {
            noCakeSrc: '../addons/hm_newdpm/bapinimg/noCakeImg.jpg', //默认蛋糕图片
            noImgSrc: '../addons/hm_newdpm/bapinimg/tpsc.png', //删除图片的替代路径
            starUrl: '../addons/hm_newdpm/bapinimg/richStarIcon.png', //星星图片路径
            addList: [],
            adding: false,
            useId: [], //使用过的id
            noImg: function(e) {
                $(e).attr({
                    src: rich.noImgSrc
                });
            },
            list: [],
            rotateInterval: null,
            autoRotate: true,
            manage: {
                loadTime: 8000, //加载超时放弃
                isLoad: false,
                timeout: null,
                startCount: function(img, fn) {
                    this.isLoad = false;
                    this.timeout = setTimeout(function() {
                        if (!rich.manage.isLoad && fn)
                            fn();
                    }, this.loadTime);
                },
                stopCount: function() {
                    this.isLoad = true;
                    clearTimeout(this.timeout);
                },
                addFail: function(dt) {
                    rich.list.push({
                        bpForTa: dt.bpForTa,
                        type: dt.type || 'rich',
                        giftId: dt.giftId == null ? '' : dt.giftId,
                        gift: (dt.gift == null || dt.gift == '') ? 0 : dt.gift,
                        tid: dt.tid,
                        img: dt.img || '',
                        txt: dt.txt,
                        src: dt.src,
                        userName: dt.userName,
                        sit: dt.sit,
                        sex: dt.sex,
                        time: dt.time
                    });
                }
            },
            setLittleImg: function(e) {
                $('.textMain').css({
                    paddingRight: $(e).width() + 30
                });
            },
            setImage: function(e) {
                var dir = $(e.parentNode).width() / $(e.parentNode).height();
                if ($(e).width() / $(e).height() <= dir) {
                    $(e).css({
                        width: '100%',
                        left: 0
                    });
                    var mt = ($(e).height() - $(e.parentNode).height()) / -2;
                    $(e).css({
                        top: mt,
                        visibility: 'visible'
                    });
                } else {
                    $(e).css({
                        height: '100%'
                    });
                    var ml = ($(e).width() - $(e.parentNode).width()) / -2;
                    $(e).css({
                        left: ml,
                        visibility: 'visible'
                    });
                }
                var auto = $(e).attr('auto');
                auto == 1 ? true : false;
                var type = $(e).attr('type');
                if (type == 'ds')
                    auto = false;
                else
                    blockImage.init(e, auto);
            },
            create1: function(dt) {
                var html = '<div class="rich1"><div class="table"><span class="tableSpan">';
                if (dt.bpForTa != null&&dt.bpForTa != '')
                    html += '<span class="richForTa">为&nbsp;&nbsp;<tt>' + dt.bpForTa + '</tt>&nbsp;&nbsp;重金霸屏：</span>';
                html += '<span class="richText">' + dt.txt + '</span>';
                if (dt.type == 4&&dt.img != '')
                html += '<video src="' + dt.img + '" loop="loop" autoplay style="width: 100%;height:80%"></video>';

                html += '</span></div>';
                html += '<div class="richUser"><span class="richUserInfo">';
                html += '<img class="' + dt.sex + '" src="' + dt.src + '" />';
                html += '<span>' + dt.userName + '&nbsp;&nbsp;重金霸屏 <tt id="richCountTime">' + dt.time + '</tt> 秒';
                html += '</span></span></div></div>';
                for (var x = 1; x <= 10; x++) {
                    html += '<img class="richStar richStar' + x + '" src="' + this.starUrl + '" />';
                }
                $('.richMain').html(html);
                this.fontAnimate(10);
            },
            create2: function(dt) {
                var auto = dt.time > 10 ? 1 : 2;
                var html = '<div class="rich2"><div class="richLeft">';
                if (dt.img != null && dt.img != '' && dt.bpForTa != null)
                    html += '<img type="rich" class="richLeftBg" onload="rich.setImage(this)" onerror="rich.noImg(this)" auto="' + auto + '" src="' + dt.img + '" />';
                else
                    html += '<img type="rich" auto="' + auto + '" class="richLeftBg" onload="rich.setImage(this)" src="' + dt.img + '" />';
                html += '</div>';
                html += '<div class="richRight"><div class="richUser">';
                html += '<span class="richUserInfo">';
                html += '<img class="' + dt.sex + '" src="' + dt.src + '" /><span>' + dt.userName + '</span>';
                html += '</span></div>';
                html += '<div class="table"><span class="tableSpan">';
                if (dt.bpForTa != null&&dt.bpForTa != '')
                    html += '<span class="richForTa">为&nbsp;&nbsp;<tt>' + dt.bpForTa + '</tt>&nbsp;&nbsp;重金霸屏：</span>';
                html += '<span class="richText">' + dt.txt + '</span>';
                html += '</span></div>';
                html += '<div class="rich2_info">重金霸屏 <tt id="richCountTime">' + dt.time + '</tt> 秒';
                html += '</div></div></div>';
                $('.richMain').html(html);
                this.fontAnimate(10);
            },
            create3: function(dt) {
                var auto = dt.time > 10 ? 1 : 2;
                var html = '<div class="rich3"><div class="richLeft">';
                if (dt.img != null && dt.img != '' && dt.bpForTa != null)
                    html += '<img type="rich" auto="' + auto + '" class="richLeftBg" onload="rich.setImage(this)" onerror="rich.noImg(this)" src="' + dt.img + '" />';
                else
                    html += '<img type="rich" auto="' + auto + '" class="richLeftBg" onload="rich.setImage(this)" src="' + dt.img + '" />';
                html += '</div>';
                html += '<div class="richRight">';

                html += '<div class="richUser"><span class="richUserInfo">';
                html += '<img class="' + dt.sex + '" src="' + dt.src + '" /><span>' + dt.userName + '</span>';
                html += '</span></div>';

                html += '<div class="table"><span class="tableSpan">';
                if (dt.bpForTa != null&&dt.bpForTa != '') {
                    html += '<div class="richForTa">为&nbsp;&nbsp;<tt>' + dt.bpForTa + '</tt>&nbsp;&nbsp;重金霸屏 <i id="richCountTime">' + dt.time + '</i> 秒<tt class="bpWMlogo"></tt></div>';
                    if (dt.sit != null && dt.sit.length > 0)
                        html += '<div class="rich3_info">座席：' + dt.sit + '</div>';
                } else {
                    html += '<div class="rich3_info">重金霸屏 <tt id="richCountTime">' + dt.time + '</tt> 秒<tt class="bpWMlogo"></tt>';
                    if (dt.sit != null && dt.sit.length > 0)
                        html += '&nbsp;&nbsp;座席：' + dt.sit;
                    html += '</div>';
                }
                html += '</span></div></div></div>';
                $('.richMain').html(html);
            },

            showDs: function(dt, isCake) {
                isCake = isCake == null ? false : isCake;
                dt.giftId = isCake ? 'cake' : dt.giftId;
                var videoSrc =  dsData[dt.giftId].src;

                var giftName = dsData[dt.giftId].name;
//                var says = dsData[dt.giftId].says;
                var html = '<div class="textMain">';
                html += '<div class="_textMain">';
                html += '<p class="textMain1 animate"><img class="' + dt.sex + '" src="' + dt.src + '" />' + dt.userName + '</p>';

                if (isCake)
                    html += '<p class="textMain2">为 ' + dt.toName + ' 霸屏</p>';
                else
                    html += '<p class="textMain2">打赏给 ' + dt.say + '</p>';

                html += '<p class="textMain3"><tt>' + giftName + '</tt></p>';
                html += '<p class="textMain22">'+dt.txt+'</p>';
                //文字
                if (isCake && dt.txt != null && $.trim(dt.txt).length > 0)
                    html += '<p class="textMain0">' + dt.txt + '</p>';

                html += '<p class="textMain4">倒计时 <tt id="richCountTime">' + dt.giftTime + '</tt> 秒<tt class="bpWMlogo"></tt></p>';
                html += '</div>';
                if (dt.img != null && dt.img != ''){
                    html += '<p class="littleImageBox"><img onload="rich.setLittleImg(this)" class="littleImage" src="' + dt.img + '" /></p>';
                }
                html += '<div style="clear:both"></div>';
                html += '</div>';
                html += '<div class="richDsLeft"><div class="dsVideoCover"></div>';

                if (videoSrc == null||videoSrc==''){
                    html += '<img id="dsVideoLoadFail" src="'+videoUrl + dsData[dt.giftId].img + '" />';
                }
                else{
                    html += '<video id="dsVideo" src="' + videoUrl+videoSrc + '" loop="loop"></video>';
                }

                html += '</div>';
                html += '<div class="richDsRight"><div class="playerImgCover"></div><img class="playerImg" type="ds" onload="rich.setImage(this,true)" src="' + dt.img + '" /></div>';
                $('.richMain').html(html);

                setTimeout(function() {
                    var h = $('.textMain')[0].offsetHeight;
                    var w = $('.textMain')[0].offsetWidth;
                    $('.textMain').css({
                        top: '50%',
                        marginTop: h / -2,
                        right: ($('#rich').width() - w) / 2
                    });
                    $('.textMain').addClass('show');
                    setTimeout(function() {
                        $('.textMain').addClass('animate');
                        $('.textMain').animate({
                            right: 0
                        }, 1200);
                        setTimeout(function() {
                            $('.playerImgCover').addClass('animate');
                            $('.dsVideoCover').addClass('animate');
                            if (videoSrc != null) {
                                var e = $('#dsVideo')[0];
//                                Video.fullScreen(e, dsData[dt.giftId].data, e.parentNode);
                                $('#dsVideo')[0].play();
                            }
                        }, 1200);
                    }, 1100);
                }, 60);
            },

            clear: function() {
                audio.close();
                $('#rich').removeClass('show').removeClass('animate');
                blockImage.close();
                bpFontAnimate.close();
                window.canvasRichBg.close();
                try {
                    clearInterval(rich.rotateInterval);
                } catch (ex) {}
                $('.richCover').html('');
                $('.richMain').html('');
            },
            _show: function(dt) {
                if (dt.img != null && $.trim(dt.img).length > 0&&dt.type!=4) {
                    var img = new Image();
                    var able = false;
                    img.onload = function() {
                        if (able)
                            return;
                        able = true;
                        rich.manage.stopCount();
                        rich.show(dt);
                    }
                    img.onerror = function() {
                        if ($(this).attr('next') == 'true') {
                            if (able)
                                return;
                            able = true;
                            img = null;
                            rich.manage.stopCount();
                            rich.manage.addFail(dt);
                            rich.init();
                            return;
                        }
                        $(this).attr({
                            next: 'true'
                        });
                        dt.img = this.src = rich.noImgSrc;
                    }
                    this.manage.startCount(img, function() {
                        if (able)
                            return;
                        able = true;
                        img.onload = img.onerror = null;
                        img = null;
                        rich.manage.addFail(dt);
                        rich.init();
                    });
                    img.src = dt.img;
                } else
                    this.show(dt);
            },
            show: function(dt) {
                setTimeout(function() {
                    ajax_bp(dt.tid, function() {});
                }, 1000);
                var showTime;
                if (dt.type == 2) {

                    dt.giftTime = showTime = dsData[dt.giftId].time;
                    this.showDs(dt);
                } else {
                    $('.richCover').html('<canvas style="opacity:0.3"></canvas>');
                    if (dt.img != null && $.trim(dt.img).length > 0&&dt.type!=4) {
                        this.create2(dt);
                    } else
                        this.create1(dt);
                    showTime = dt.time;
                }
                $('#rich').fadeIn().addClass('show');

               
                if (isOpenAudio == 'true'){
                    audio.play(audio.src[dt.type == 'ds' ? 1 : 0]);
                }

                this.countTime(showTime, dt);
                if (dt.type != 2) {
                    setTimeout(function() {
                        rich.bgAnimate();
                    }, 1000);
                }

            },
            rotate: function() {
                try {
                    clearInterval(rich.rotateInterval);
                } catch (ex) {}
                rich.rotateInterval = setInterval(function() {
                    $('.richBox').addClass('animate');
                    setTimeout(function() {
                        $('.richBox').removeClass('animate');
                    }, 1000);
                }, 10000);
            },
            countTime: function(showTime, dt) {


                setTimeout(function() {
                    setTimeout(function() {
                        showTime--;
                        if (showTime == -1) {
                            $('#rich').fadeOut(function() {
                                rich.clear();
                                $('#rich').removeClass('show');
                            });
                            rich.init();
                            return;
                        }
                        $('#richCountTime').html(showTime);
                        setTimeout(arguments.callee, 1000);
                    }, 1000);
                }, 1000);
            },
            add: function(dt) {
                if (dt.type == 7)
                    dt.img = rich.noCakeSrc;

                this.list.push({
                    toName: dt.toName || '',
                    bpForTa: dt.bpForTa|| '',
                    type: dt.type || 'rich',
                    giftId: dt.giftId == null ? '' : dt.giftId,
                    gift: (dt.gift == null || dt.gift == '') ? 0 : dt.gift,
                    tid: dt.tid,
                    img: dt.img,
                    txt: dt.txt,
                    src: dt.src,
                    userName: dt.userName,
                    sit: dt.sit,
                    sex: dt.sex,
                    time: dt.time,
                    say: dt.say
                });
            },
            init: function() {
//                try {
//                    clearTimeout(rich.con)
//                } catch (ex) {}
                this.con = setTimeout(function() {

                    if (rich.list.length > 0) {

                        var dt = rich.list[0];
                        rich.list.shift();
                        rich._show(dt);
                    } else{

                        rich.con = setTimeout(n(),1000);
                    }

                }, 2000);
            },
            fontAnimate: function(num, x) {
                x = x == null ? 0 : x;
                var color = ['rgba(255,162,0,', 'rgba(255,255,255,'];
                bpFontAnimate.init(color[x]);
                var val = $.trim($('.richText').html());
                if (val.length == 0)
                    return;
                var html = '';
                for (var x = 0; x < val.length; x++)
                    html += '<b class="oneFont">' + val.charAt(x) + '</b>';
                $('.richText').html(html);
                setTimeout(function() {
                    var word = $('.richText .oneFont'),
                        x = 0;
                    setTimeout(function() {
                        $(word[x]).css({
                            'transition': '0.5s all',
                            transform: 'scale(1)',
                            opacity: 1
                        });
                        bpFontAnimate.draw(num, $(word[x]).offset().left + 40, $(word[x]).offset().top + 40);
                        x++;
                        if (x < word.length)
                            setTimeout(arguments.callee, 60);
                        else
                            setTimeout(function() {
                                bpFontAnimate.close();
                            }, 1500);
                    }, 50);
                }, 50);
            },
            getRandom: function(begin, end) {
                return parseInt(Math.random() * ((end > begin ? end - begin : begin - end) + 1) + (end > begin ? begin : end));
            },
            bgAnimate: function() {
                var canvas = $('.richCover canvas')[0];
                canvas.width = $('.richCover')[0].offsetWidth;
                canvas.height = $('.richCover')[0].offsetHeight;
                var index = this.getRandom(0, window.canvasRichBg.animate.length - 1);
                window.canvasRichBg.animate[index]($('.richCover canvas')[0]);
            },
            loop: function(dt) {
                setTimeout(function() {
                    dt.num = parseInt(dt.num) - 1;
                    rich.add(dt);
                }, (parseInt(dt.time) - 5) * 1000);
            }
        }
        </script>
        <div id="effect">
            <canvas width="1920" height="912"></canvas>
        </div>
        <div class="allCover"></div>
        <?php  if($reply['is_transparent']!=1) { ?>
            <?php  if(empty($video['vodio_bg11'])) { ?><img class="onWallBg" src="<?php  echo $bg;?>"><?php  } ?>
        <?php  } ?>
        <div class="all">
            <div class="onWallHead">
                <div><?php  echo $bpreply['bp_title'];?></div>
            </div>
            <div class="onWallMain">
                <div class="main">
                    <div id="msgBox" style="top: 0px;">
                    </div>
                </div>
                <script>
                (function() {
                    var arr = $('.oneMsg');
                    var len = arr.length;
                    for (var x = 0; x < len; x++) {
                        $(arr[x]).attr({
                            index: len - x
                        });
                    }
                })();
                </script>
                <div id="rightBox">
                    <?php  if($bpreply['isbd']==1) { ?>
                    <div class="guest_reward_right">
                        <div class="totalBox">
                            <h2>
                                <i class="iconfont"></i>今日霸屏榜
                            </h2>
                            <ul class="clearfix rewards_ranking">
                                <?php  if(is_array($topfans)) { foreach($topfans as $index => $row) { ?>
                                <li class="ranking_key<?php  echo $index;?>">
                                    <i class="No"><?php  echo $index+1?></i>
                                    <div class="richer_sort">
                                        <?php  if($index <3) { ?><i></i>
                                        <img src="<?php  echo tomedia($row['avatar'])?>"><?php  } ?>
                                        <h3><?php  echo $row['nickname'];?></h3>
                                        <p><?php  echo $row['pt']?></p>
                                    </div>
                                </li>
                                <?php  } } ?>

                            </ul>
                        </div>
                    </div>
                    <?php  } else { ?>
                    <div id="imageBox">
                    <!--这个是广告图片-->
                    <div class="normal visible" index="1" tid=""><img src="" onload="image.load(this)" onerror="image.error(this)" style="width: 100%; left: 0px; top: -61.5px; visibility: visible;"></div>
                    </div>
                    <?php  } ?>

                    <div id="codeBox">
                        <!--二维码-->
                        <img src="<?php  echo tomedia($reply['up_qrcode'])?>">
                        <!--没有二维码，不生成这个div-->
                        <div>扫描二维码上大屏幕</div>
                    </div>
                </div>
            </div>
            <script>
            (function() {
                var arr = $('#imageBox .normal');
                var len = arr.length;
                for (var x = 0; x < len; x++) {
                    $(arr[x]).attr({
                        index: len - x
                    });
                }
            })();
            </script>

        </div>
       <?php  if($bpreply['ispmd']==0) { ?>
        <div class="newMarquee">
            <div class="newMarqueeBox">
              <span></span>
            </div>
        </div>
        <?php  } ?>
        <script>
        var nextFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback, delay) {
                return setTimeout(callback, delay || 15);
            }
        })();
        var cancelFrame = (function() {
            return window.cancelRequestAnimationFrame || window.webkitCancelAnimationFrame || window.webkitCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || clearTimeout
        })();
        var marquee = {
            speed: 3,
            delay: 10, //这个是后台设置的显示间隔
            ajaxDelay: 5000, //初始跑马灯数据为空时，隔多久获取一次新消息
            //生成数据
            list: [

            ],
            running: false,
            able: true,
            init: function() {
                if (this.list.length == 0) {
                    setTimeout(function() {
                        marquee.ajax(function() {
                            marquee.init();
                        });
                    }, marquee.ajaxDelay);
                } else {
                    this.start();
                }
            },
            next: function() {
                this.ajax(function() {
                    setTimeout(function() {
                        marquee.start();
                    }, marquee.delay);
                });
            },
            start: function() {
                if (this.list.length == 0)
                    return;
                var html = '';
                var giftName = '';
                for (var x = 0; x < this.list.length; x++) {
//                    if (this.list[x].type == 4)
//                        dt.action.giftId = 'cake';

                    if(this.list[x].type==2){
                        if($.inArray(this.list[x].gift_id, arr)!=-1){
                            //console.log($.inArray(dt.action.giftId, arr));
                            giftName = dsData[this.list[x].gift_id].name;
                        }

                        html += '<span class="one" style="' + (x == 0 ? 'margin-left:0' : '') + '"><img src="'+this.list[x].avatar+'">'+this.list[x].nickname+'：打赏给 "'+ this.list[x].says +'" '+ giftName+' </span>';
                    }else if(this.list[x].type == 4){

                    }else {
                        html += '<span class="one" style="' + (x == 0 ? 'margin-left:0' : '') + '"><img src="'+this.list[x].avatar+'">'+this.list[x].nickname+'：'+ this.list[x].word + ' </span>';

                    }

                }
                html += '<div style="clear:both"></div>';
                $('.newMarqueeBox').html(html);
                $('.newMarquee').fadeIn(1500, function() {
                    setTimeout(function() {
                        var width = 0;
                        var arr = $('.newMarqueeBox .one');
                        for (var i = 0; i < arr.length; i++)
                            width += arr[i].offsetWidth + 1150;
                        width -= 1000;
                        $('.newMarqueeBox').css({
                            width: width
                        });
                        marquee.run(width);
                    }, 100);
                });
            },
            run: function(width) {
                var x = $('.newMarqueeBox')[0].offsetLeft;
                var animate = function() {
                    x = x - marquee.speed;
                    $('.newMarqueeBox').css({
                        'left': x
                    });
                    if (x * -1 >= width) {
                        cancelFrame(animate);
                        $('.newMarqueeBox').css({
                            left: '100%'
                        });
                        $('.newMarquee').fadeOut(1000, function() {
                            marquee.next();
                        });
                        return;
                    }
                    nextFrame(animate);
                }
                animate();
            },
            ajax: function(fn) {
                ajax_getMarquee(function(arr, time) {
                    arr = arr == null ? [] : arr;
                    marquee.list = arr;
                    marquee.delay = time == null ? marquee.delay : time;
                    if (fn)
                        fn();
                }, function() {
                    if (fn)
                        fn();
                });
            }
        }

        var ajax_getMarquee = function(fn1, fn2) {
            //返回跑马灯信息 数组格式 
            //增加返回 最新的间隔时间-毫秒

            $.post("<?php  echo $this->createMobileUrl('getmarquee',array('id'=>$rid))?>", {
            }, function(result) {
                if (result.isResultTrue) {
                    var resultstr = result.resultMsg;
                    var obj = resultstr;
                    var str = [];
                    if (obj.length > 0) {
                        for (i = 0; i < obj.length; i++) {
                            str.push(obj[i]);
                        }
                    }
                    fn1(str, 0);
                } else {
                    fn2();
                }
            },'json');
        }
        </script>
      
        <script>
        var bigShow = {
            checkDelay: 3000,
            actionDelay: 5000,
            running: false,
            showTime: 3500, //显示时间
            list: [],
            addSign: function(tid, name, sitNumber, txt) {
                if (tid == '')
                    return this.list.push({
                        tid: tid || '',
                        name: name
                    });
                var bool = false;
                for (var x = 0; x < this.list.length; x++) {
                    if (this.list[x].tid == tid)
                        return;
                }
                this.list.push({
                    tid: tid || '',
                    name: name,
                    sitNumber: sitNumber,
                    txt: txt
                });
            },
            removeList: function(x) {
                if (x == 0)
                    this.list.shift();
                else
                    this.list.splice(x, 1);
            },
            start: function() {
                setTimeout(function() {
                    var arg = arguments.callee;
                    if (bigShow.runnig || bigShow.list.length == 0)
                        return setTimeout(arg, bigShow.checkDelay);
                    if (bigShow.list.length > 0) {
                        var e = bigShow.list[0];
                        if (bigShow.list[0].tid == '') {
                            bigShow.wineShow(e.name, function() {
                                setTimeout(arg, bigShow.actionDelay);
                                bigShow.removeList(0);
                            });
                        } else {
                           
                        }
                    }
                }, 0);
            },
           
            init: function() {
                this.H5 = false;
                if (window.applicationCache)
                    this.H5 = true;
                this.start();
            },
           
        }

        bigShow.init();
        </script>
        <!--设置屏幕亮度-->
        <style>
        .lightCover {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 20
        }
        
        #richCover {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9;
        }
        </style>
        <style>
        #richCover {
            background: rgba(0, 0, 0, 0);
        }
        
        .lightCover {
            background: rgba(0, 0, 0, 0);
        }
        </style>
        <div class="lightCover"></div>
    </div>
    <audio src="<?php  echo $music;?>" preload="auto" id="media" autoplay="autoplay" loop="loop"></audio>

    <audio id="dsAudio" style="display:none"  src="../addons/haoman_base/dpm/bp.mp3"></audio>
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
