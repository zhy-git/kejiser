<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\Hostweb\wbwx.xcweibao.com\addons\yb_shop\core\/template/sappl\sappl_add.html";i:1537249580;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" href="/public/static/h-ui/css/H-ui.admin.css"/>
</head>

<body>

<article class="cl pd-20">

    <form action="" method="post" class="form form-horizontal" id="">


        <div class="row cl">

            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>小程序名称：</label>

            <div class="formControls col-xs-8 col-sm-9">

                <input type="text" autocomplete="off" name="sapp_name" value="" placeholder="请输入要跳转的小程序名称" class="input-text">

            </div>

        </div>

        <div class="row cl">

            <label class="form-label col-xs-3 col-sm-3"><span class="c-red">*</span>APPID：</label>

            <div class="formControls col-xs-8 col-sm-9">

                <input type="text" autocomplete="off" name="appid" value="" placeholder="请输入小程序ID" class="input-text">

            </div>

        </div>

        <div class="row cl">

            <label class="form-label col-xs-3 col-sm-3">跳转地址：</label>

            <div class="formControls col-xs-8 col-sm-9">

                <input type="text" autocomplete="off" name="url" value="" placeholder="请输入要跳转的小程序地址" class="input-text">
                <span>（不填写则默认跳转首页）</span>
            </div>

        </div>

        <div class="row cl">

            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

                <input class="btn btn-primary radius" onclick="attr_mod_add()" type="button"
                       value="&nbsp;&nbsp;提交&nbsp;&nbsp;">

            </div>

        </div>

    </form>

</article>

<script type="text/javascript" src="/public/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/public/static/layer/2.4/layer.js"></script>
<script type="text/javascript">

    var lock = false;

    function attr_mod_add() {
        var sapp_name=$("[name='sapp_name']").val();
        var appid=$("[name='appid']").val();
        var url=$("[name='url']").val();
        if(verify(sapp_name,appid) &&!lock){
            lock = true;
            $.ajax({

                type: "post",

                url: "<?php echo url('sappl/sappl_add'); ?>",

                data: {
                    "sapp_name": sapp_name,
                    "appid": appid,
                    "url": url,
                },

                success: function (data) {

                    if (data['code'] > 0) {
                        layer.msg('添加成功!', {icon: 1, time: 2000});
                        parent.location.reload();

                    } else {

                        layer.msg(data['message'], {icon: 2, time: 1000});

                        lock = false;
                    }

                }

            });
        }
    }
function verify(sapp_name,appid) {
    if (sapp_name == '') {

        layer.msg('请填写名称', {icon: 5, time: 1000});

        return false;

    }



    if (appid == '') {

        layer.msg('请填写Appid', {icon: 5, time: 1000});

        return false;

    }

    return true;
}
</script>

</body>

</html>