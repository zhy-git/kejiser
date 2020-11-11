<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header-base', TEMPLATE_INCLUDEPATH)) : (include template('common/header-base', TEMPLATE_INCLUDEPATH));?>
<div data-skin="default" class="skin-default <?php  if($_GPC['main-lg']) { ?> main-lg-body <?php  } ?>">
<?php  $frames = buildframes(FRAME);_calc_current_frames($frames);?>

 
<script type="text/javascript">
	window.version_id = "<?php  echo intval( $_GPC['version_id'] )?>";
	window.auth = <?php  echo json_encode( model_auth::authList() )?>;
</script>
<link rel="stylesheet" type="text/css" href="<?php  echo MODULE_URL?>template/web/css/common.css<?php echo '?t='.TIMESTAMP?>">
<link rel="stylesheet" type="text/css" href="<?php  echo MODULE_URL?>template/web/css/tao.css<?php echo '?t='.TIMESTAMP?>">
<link rel="stylesheet" href="<?php  echo MODULE_URL?>template/web/css/jquery-ui.css">
<script src="<?php  echo MODULE_URL?>template/web/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php  echo MODULE_URL?>template/web/js/tao.js<?php echo '?t='.TIMESTAMP?>"></script>
<style>
/*背景层*/
        #popLayer {
            display: none;
            background-color: #B3B3B3;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);/* 只支持IE6、7、8、9 */
        }
 
        /*弹出层*/
        #popBox {
            display: none;
            background-color: #FFFFFF;
            z-index: 11;
            width: 300px;
            height: 150px;
            position:fixed;
            /*top:0;*/
            right:0;
            /*left:0;*/
            bottom:0;
            margin:auto;
            border: #d8f5d9 10px solid;
        }
 
        #popBox .close{
            text-align: right;
            margin-right: 5px;
            background-color: #F8F8F8;
                opacity: 0.5;
                    width: 100%;
        }
 
        /*关闭按钮*/
        #popBox .close a {
            text-decoration: none;
            color: #2D2C3B;
        }
        .el-button--primary {
    color: #fff;
    background-color: #409eff;
    border-color: #409eff;
}
.el-button {
    display: inline-block;
    line-height: 1;
    white-space: nowrap;
    cursor: pointer;
    background: #fff;
    border: 1px solid #dcdfe6;
    color: #606266;
    -webkit-appearance: none;
    text-align: center;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: 0;
    margin: 0;
    -webkit-transition: .1s;
    transition: .1s;
    font-weight: 500;
    padding: 9px 20px;
    font-size: 14px;
    border-radius: 4px;
}
</style>
<script>
// 新订单提醒
        function hello() {
            $.ajax({
                url:"<?php  echo self::pwUrl('site','reguser',array('op'=>'order'))?>",
                type:'POST',
                dataType:"json",
                success:function (result) {
                    console.log(result.message);
                    if (result.message != 0){
                        // 右下角弹框
                        popBox();
                        // alert('你有' +result.message+ '个新的申请特派员需审核。');
                        $("#td1").text(result.message);
                    }
                }
            });
        }
        setInterval("hello()",1000);
        
        
        /*点击弹出按钮*/
    function popBox() {
        var popBox = document.getElementById("popBox");
         //var popLayer = document.getElementById("popLayer");
        popBox.style.display = "block";
        // popLayer.style.display = "block";

    };
 
    /*点击关闭按钮*/
    function closeBox() {
        var popBox = document.getElementById("popBox");
         //var popLayer = document.getElementById("popLayer");
        popBox.style.display = "none";
         //popLayer.style.display = "none";

    }
</script>

	<div id="popBox">
	    <div class="close">
	        <a  onclick="closeBox()" href="javascript:void(0)" >x</a>
	    </div>
	    <div class="content" style="text-align:left;font-size:18px;padding-left:15px;"><h1>您有<span id="td1"></span>条新的特派员申请消息</h1>
	    <div style="float:right;padding-right:10px;padding-top:30px;">
	    <form  method="post" action="<?php  echo self::pwUrl('site','reguser')?>">
	    	<input type="hidden" name="op" value="search" />
    	  	<input type="hidden" name="istrue" value="2" class="el-input__inner"  style="margin-right:10px;">
    	  	<button  type="submit" class="el-button el-button--primary el-button--mini"  style="color: #fff;background-color: #409eff;border-color: #409eff;"><i class="el-icon-search"></i><span>确定</span></button>
    	</form>
	    </div>
	    </div>
	</div>   
	
<?php  $menu = menu::init()?>


<div class="header" style="padding-top: 0;">
    <div class="wrap">
        <div class="logo" style="padding-right: 0;">
        	<img src="<?php echo $_W['siteroot'].'attachment/headimg_'.$_W['uniacid'].'.jpg?time='.TIMESTAMP?>" style="display: inline-block;">
        	<span class="header_name"><?php  echo $_W['account']['name'];?></span>
        </div>
        <div class="nav">
            <ul>
                <?php  if(is_array($menu)) { foreach($menu as $index => $item) { ?>
                	<li  id="menu<?php  echo $index;?>" <?php  if($_GPC['p'] == $item['p'] ) { ?>class="selected"<?php  } ?>><a href="<?php  echo $item['url'];?>"><?php  echo $item['name'];?></a></li>
                <?php  } } ?>
            </ul>
        </div>
        <div class="nav_r">
        	<li>
        		<a href="./index.php?c=wxapp&a=display&do=home">返回小程序</a>
        	</li>
        </div>
    </div>
</div>
<?php  if(is_array($menu)) { foreach($menu as $out) { ?>
<?php  if($out['p'] == $_GPC['p']) { ?>
	
 	<div id="body" class="body page_message" style="padding-top: 1px;">
   		<div id="js_container_box" class="container_box cell_layout side_l">
	    	<div class="col_side"> 
	    		 <div class="menu_box" id="menuBar">
				    <?php  if(is_array($out['leftbar'])) { foreach($out['leftbar'] as $k => $item) { ?>

				    	<?php  if($item['hide'] == 0 && !empty( $item )) { ?>
					    <dl class="menu">
					     	<dt class="menu_title clickable">
					     		<a href="<?php echo empty($item['url']) ? 'javascript:;' : $item['url']?>">
					      			<i class="icon_menu" style="background:url(<?php  echo $item['icon'];?>) no-repeat;"> </i><?php  echo $item['name'];?> 
					      		</a>
					     	</dt>
					     	<?php  if(is_array($item['list'])) { foreach($item['list'] as $kk => $vv) { ?>
					     		<?php  if($vv['hide'] == 0) { ?>
							    <dd class="menu_item <?php  if(($_GPC['do'] == $k && $_GPC['op'] == $vv['op']) || $_GPC['c'] == 'module' && $vv['op'] == 'set' ) { ?>selected<?php  } ?>">
							      	<a href="<?php  echo $vv['url'];?>" class="left_title_box"><?php  echo $vv['name'];?> <?php  if(isset($vv['num'])) { ?><i><?php  echo $vv['num'];?></i><?php  } ?></a>
							    </dd>
							    <?php  } ?>
							<?php  } } ?>
					    </dl>
					    <?php  } ?>
				    <?php  } } ?>
	     		</div>
	    	</div>
	    	<div class="col_main">
	    		<?php  if(is_array($out['leftbar'])) { foreach($out['leftbar'] as $k => $item) { ?>
	    			<?php  if($_GPC['do'] == $k) { ?>
						<div class="main_hd">
							<h2><?php  echo $item['name'];?></h2>
							<div class="title_tab" id="topTab">
								<ul class="tab_navs title_tab">
									<?php  if(is_array($item['list'])) { foreach($item['list'] as $kk => $vv) { ?>
										
										<?php  if($vv['hide'] != 1 || ($_GPC['op'] == $vv['op'] && $vv['hide'] == 1 ) || $vv['showtop'] == 1) { ?>
										<li class="tab_nav first js_top <?php  if($_GPC['op'] == $vv['op']) { ?>selected<?php  } ?>">
										<?php  if(in_array( $_GPC['op'],(array)$item['toplist'] )) { ?>
											<a class="left_title_box top_title_box" href="<?php  echo $vv['url'];?>"><?php  echo $vv['name'];?> <?php  if(isset($vv['num'])) { ?><i><?php  echo $vv['num'];?></i><?php  } ?> </a>
										<?php  } ?>
										</li>
										<?php  } ?>
									<?php  } } ?>
								</ul>
							</div>
						</div>
					<?php  } ?>
				<?php  } } ?>
				
				<div class="main_bd">
<?php  } ?>
<?php  } } ?>
