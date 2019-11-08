<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  echo $sys_config['sys_name'];?></title>
	<link rel="shortcut icon" href="<?php  if(!empty($sys_config['sys_icon'])) { ?><?php  echo tomedia($sys_config['sys_icon'])?><?php  } else { ?><?php  echo $_W['siteroot'];?>web/resource/images/favicon.ico<?php  } ?>" />
	<meta name="keywords" content="<?php  echo $sys_config['sys_name'];?>" />
	<meta name="description" content="<?php  echo $sys_config['sys_name'];?>" />
	<link href="./resource/css/bootstrap.min.css" rel="stylesheet">
	<?php  if(IMS_VERSION == '0.52' || IMS_VERSION == '0.6' || IMS_VERSION == '0.7' || IMS_VERSION == '0.8') { ?>
	<link href="./resource/css/font-awesome.min.css" rel="stylesheet">
	<?php  } ?>
	<link href="./resource/css/common.css" rel="stylesheet">
	<!--my css-->
	<link  rel="stylesheet" href="<?php  echo MEEPO_XIANCHANG_TPL?>resource/css/common.css">
	<link  rel="stylesheet" href="<?php  echo MEEPO_XIANCHANG_TPL?>resource/css/sys.css">
	<link  rel="stylesheet" href="<?php  echo MEEPO_XIANCHANG_TPL?>resource/css/style.css">
	<link rel="stylesheet" href="<?php echo MODULE_URL;?>template/mobile/app/css/spinners.css" type="text/css">
	<link rel="stylesheet" href="<?php echo MODULE_URL;?>template/mobile/app/css/animate.min.css" type="text/css">
	<script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
		}
	}
	window.sysinfo = {
		<?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
		<?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?>
		<?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
		<?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
		'siteroot': '<?php  echo $_W['siteroot'];?>',
		'siteurl': '<?php  echo $_W['siteurl'];?>',
		'attachurl': '<?php  echo $_W['attachurl'];?>',
		'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
		'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
		<?php  if(defined('MODULE_URL')) { ?>'MODULE_URL': '<?php echo MODULE_URL;?>',<?php  } ?>
		'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'},
		'account' : <?php  echo json_encode($_W['account'])?>
	};
	
	</script>
	<script>var require = { urlArgs: 'v=<?php  echo date('YmdHis');?>' };</script>
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script src="<?php echo MODULE_URL;?>template/mobile/app/js/layer/layer.js?t=1"></script>
	<script type="text/javascript" src="./resource/js/app/util.js?v=20170209"></script>
	<script type="text/javascript" src="./resource/js/app/common.min.js?v=20170209"></script>
	<script type="text/javascript" src="./resource/js/require.js?v=20170209"></script>
	<script type="text/javascript" src="./resource/js/app/config.js?v=20170209"></script>
	<style>
	body{background-color:#e7e8eb;}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
		background-color:#44b549;
	}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus,.nav.nav-tabs{
	border-color:#44b549;
	
	}
	a{color:#595959;}
	.label-info{
	background-color:#FBC15E;
	}
	.btn-primary{
		background-color:#44b549;
		border-color:#44b549;
	}
	.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus{
		background-color:#44b549;
		border-color:#44b549;
	}
	
	
	.alert-danger,.alert-info,.panel-info>.panel-heading{
		border-color:#faebcc;
		color:#8a6d3b;
		background-color:#fcf8e3;
	}
	.panel-info{
		border-color:#faebcc;
	}
	.text-danger{
		color:#FBC15E;
	}
	.nav-tabs>li>a:hover{
		border-color:#eee #eee #44b549 #eee;
		color:#2d2d2d;
	}
	.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary{
		background-color:#44b549;
		border-color:#44b549;
	}
	.well{
		background-color:#FFF;
		margin:0 80px 0 80px;
		}
	.gw-container{
		background:#e7e8eb url('<?php  echo MEEPO_XIANCHANG_TPL?>resource/images/hucebg.png') repeat;
	}
	.gw-container .breadcrumb{
		background-color:#FFF;
	}
	.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus{
		background-color:#44b549;
		border-color:#44b549;
	}
	.pagination>li>a, .pagination>li>span{
		color:#44b549;
	}
	.gw-container .well .account .panel-heading a{
		color:#44b549;
	}
	.gw-container .tile:hover{
		background:#44b549;
	}
	.index_show_area a,.index_show_area a:hover,.index_show_area a:focus{ 
		underline:none;
		text-decoration:none;
		color:#FFF;
		}
	.panel-default>.panel-heading{
		background-color:#FFF;
	}
	/*.menu_item a:hover {
		background: #44b549;color:#fff
	}*/
	.menu_item a:visited {
		underline:none;
		text-decoration:none;
	}
	.uploader .placeholder .webuploader-pick {
		background: #44b549 !important;
	}
	.btn-info {
		color: #fff;
		background-color: #44b549;
		border-color: #44b549;
	}
	.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open>.dropdown-toggle.btn-info {
		color: #fff;
		background-color: #44b549;
		border-color: #44b549;
	}
	.meepo_head .meepo_logo a {
		display: inline-block;
		background-image: url(<?php  if(empty($sys_config['top_logo'])) { ?><?php  echo MODULE_URL?>sys_logo.png<?php  } else { ?><?php  echo tomedia($sys_config['top_logo'])?><?php  } ?>);
		background-size:cover;
		background-repeat:no-repeat;
	}
	.pager_box{padding: 20px;width: 100%;text-align: center;}
	/*20170415新增*/
	#loading_box { position: fixed; top:0;left:0;width:100%;height:100%;background: rgba(0, 0, 0, 0.4); z-index: 9999;}
	#loading_content { position: fixed; top:50%;left:50%;width:300px;margin-left:-150px; height: 27px; color:#fff;text-align:center;font-size:14px;z-index: 9909;text-align:center;line-height:150px}
	.min_tips_box .bg{position:fixed;z-index:1005;left:0;top:0;content:"";width:100%;height:100%;background:#000;opacity:.3;filter:alpha(opacity=5)}.min_tips_box .tips_content{position:fixed;z-index:1006;max-width:80%;min-width:100px;line-height:20px;margin-top:-23px;margin-left:-50%;padding:12px 10px;left:50%;top:50%;background:#000;border-radius:5px;text-align:center;color:#fff;box-shadow:0 0 5px #000;word-break:break-all;font-size:13px}
	.btnClose a{display:none !important}
	.we7-form{padding: 30px;background-color:#fff}
	</style>
	
	<!---默认-->
</head>
<body class="zh_CN">

<div id="loading" <?php  if(!empty($msg) || ($_GPC['do']=='bd_manage'&&$op=='data') || ($_GPC['do']=='user_manage'&&$op=='list')) { ?>style="display:none"<?php  } ?>>
	<div id="loading_box"></div>
	<div id="loading_content">
		<div class="circles-loader"> Loading… </div>
	</div>
</div>

