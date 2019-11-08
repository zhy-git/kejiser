<?php defined('IN_IA') or exit('Access Denied');?>	 <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/_header_base')) : (include web_template('common/_header_base', TEMPLATE_INCLUDEPATH));?>
	 <div id="message_tip" style="margin-top:100px;">
		<div class="container message-noexist text-center">
			<span class="error-icon"><i class="wi text-<?php  echo $label;?> wi-<?php  if($label=='success') { ?>right-sign<?php  } ?><?php  if($label=='danger') { ?>warning-sign<?php  } ?><?php  if($label=='info') { ?>info-sign<?php  } ?><?php  if($label=='warning') { ?>error-sign<?php  } ?>"></i></span>
			<div class="tips"><?php  echo $caption;?></div>
			<div class="state"><?php  echo $msg;?></div>
			<?php  if($redirect) { ?>
			<div class="btn-group">
				<a class="btn btn-link" href="<?php  echo $redirect;?>">如果你的浏览器没有自动跳转，请点击此链接</a>
				<script type="text/javascript">
					setTimeout(function () {
						location.href = "<?php  echo $redirect;?>";
					},1000);
				</script>
			</div>
			<?php  } else { ?>
				<p><a href="javascript:history.go(-1);">点击这里返回上一页</a></p>
			<?php  } ?>		
	   </div>
	  </div>
	 <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/_footer')) : (include web_template('common/_footer', TEMPLATE_INCLUDEPATH));?>
