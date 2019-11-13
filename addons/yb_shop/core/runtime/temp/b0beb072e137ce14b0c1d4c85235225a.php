<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/login\index.html";i:1540172025;}*/ ?>
<html><head>
    <meta charset="utf-8">
    <title><?php echo $info['site_name']; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/public/login/layui.css" media="all">
    <!--必要样式-->
    <link href="/public/login/styles.css" rel="stylesheet" type="text/css">
    <link href="/public/login/demo.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        /*修改Input中placeholder字的颜色*/
        input::-webkit-input-placeholder{
            color:#fff;
            font-size: 12px;
        }
        input::-moz-placeholder{   /* Mozilla Firefox 19+ */
            color:#fff;
            font-size: 12px;
        }
        input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
            color:#fff;
            font-size: 12px;
        }
        input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
            color:#fff;
            font-size: 12px;
        }
        body .login_fields__submit{margin: 20px 0 0 125px;}
        .login_forget,p{font-size: 14px !important;}
        .login_forget a{color:#fff !important;}
        .login_forget{position: absolute;right: 0;bottom: 0;}
        body .login_title{font-size: 26px;text-align: center;letter-spacing: 2px;}
        .login_fields__user{margin-top: 15px;border: 1px solid #099;border-radius: ;}
        .login_fields__password{margin-top:36px;border: 1px solid #099;}
        .login_fields__user img,.login_fields__password img{width: 26px; height: 26px;}
        input:-webkit-autofill , textarea:-webkit-autofill, select:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #393d52 inset !important;
            border: 1px solid #393d52!important;
            color: #fff !important;
        }
        .lk-login-title{display:inline-block; float:left; width: 80px;text-align: right;}
        .lk-login-content{display:inline-block; float: left; width: 360px;}
        .lk-login-ul li{min-height: 50px; line-height: 50px;overflow: hidden;}
        .lk-login-we{margin-top: 20px;margin-left: 70px;}
        .disclaimer{width: 90% !important;}
        .login_fields{width: 70%;margin-left:14%;}
    </style>

<body><canvas class="pg-canvas" width="1920" height="536"></canvas>

<div class="login">



    <div class="login_title">
        <span>管理员登录</span>
    </div>

    <form action="" method="post" id="form1" onsubmit="return false;">
    <div class="login_fields">
        <div class="login_fields__user">
            <div class="icon" style="opacity: 0.5;">
                <img alt="" src="/public/login/user_icon_copy.png">
            </div>
            <input id="input_username" name="username" placeholder="账号" type="text">
        </div>

        <div class="login_fields__password">
            <div class="icon" style="opacity: 0.5;">
                <img alt="" src="/public/login/lock_icon_copy.png">
            </div>
            <input placeholder="密码" id="input_password" name="password" type="password" autocomplete="off">
        </div>

        <div class="login_fields__password">
            <div class="icon" style="opacity: 0.5;">
                <img alt="" src="/public/login/auth_code.png">
            </div>
            <input id="input_captcha" style="width: 210px;" name="captcha" placeholder="验证码" type="text">
            <img id="code" style="width: 120px;height: 44px; float: right;" src="<?php echo $site_root; ?>web/index.php?c=utility&a=code&" onclick="this.src='<?php echo $site_root; ?>web/index.php?c=utility&a=code&r='+Math.random();" title="换一张"/>
        </div>

        <div class="login_fields__submit">
            <input id="btn" type="button" value="登录">
        </div>
    </div>
    </form>

    <div class="disclaimer">
        <p>欢迎登陆<?php echo $info['site_name']; ?>管理后台</p>
        <span class="login_forget"><a href="javascript:void(0);"></a></span>
    </div>

</div>


<div class="OverWindows"></div>

<script src="/public/js/jquery-2.1.1.js"></script>
<script src="/public/static/layer/2.4/layer.js"></script>
<script src="/public/js/Particleground.js"></script>
<script type="text/javascript">

    $('#form1').on('submit',function () {
        return false;
    });

    //粒子背景特效
    $('body').particleground({
        dotColor: '#fff',
        lineColor: '#099'
    });

    $('input[name="pwd"]').focus(function () {
        $(this).attr('type', 'password');
    });
    $('input[type="text"]').focus(function () {
        $(this).prev().animate({ 'opacity': '1' }, 200);
    });
    $('input[type="text"],input[type="password"]').blur(function () {
        $(this).prev().animate({ 'opacity': '.5' }, 200);
    });


    $('input[name="login"],input[name="pwd"]').keyup(function () {
        var Len = $(this).val().length;
        if (!$(this).val() == '' && Len >= 5) {
            $(this).next().animate({
                'opacity': '1',
                'right': '30'
            }, 200);
        } else {
            $(this).next().animate({
                'opacity': '0',
                'right': '20'
            }, 200);
        }
    });

    //绑定键盘点击事件
    $(document).keypress(function(e) {
        // 回车键事件
        if(e.which == 13) {
            $("#btn").click();
        }
    });

    var flag = false;

    $('#btn').on('click',function () {
        var uname = $("#input_username").val().trim();
        var pass = $("#input_password").val().trim();
        var code = $("#input_captcha").val().trim();

        if(uname.length * pass.length * code.length == 0)
        {
            layer.msg('请完善信息', {icon: 2, time: 1000});
            return;
        }

        if(flag)
        {
            return;
        }

        flag = true;

        $.ajax({
            url: "<?php echo url('login/login'); ?>",
            type: 'POST',
            cache: false,
            data: new FormData($('#form1')[0]),
            processData: false,
            contentType: false,
            dataType: 'json',
            success:function (res) {
                console.log(res);

                if(res.code == 0)
                {
                    layer.msg(res.message, {icon: 2, time: 1000});
                }
                else if(res.code == 1)
                {
                    location.reload();
                }

                $('#code').click();

                flag = false;
            },
            error:function (err) {
                console.log(err);
                flag = false;
            }
        }).done(function(res) {

        }).fail(function(res) {

        });

    });


    /***登陆验证 end***/
</script>

</body></html>