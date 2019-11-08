<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
<script src="../addons/hc_face/template/mobile/js/layer/layer.js"></script>
<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/myreport.css">
<title>报告</title>
<style type="text/css">
</style>
</head>
<body>
	<div class="container">
		<div class="top column">
			<span>我添加的报告</span>
		</div>
		<div class="myList">
			<?php  if(is_array($list)) { foreach($list as $index => $item) { ?>
			<div class="myItem between">
				<div class="left row" onclick="window.location.href='<?php  echo $this->createMobileUrl('report',array('rid'=>$item['id']))?>'">
					<img src="<?php  echo $item['avatar'];?>">
					<span><?php  echo $item['name'];?>的面相报告</span>
				</div>
				<div class="right">
					<img class="rightimg" src="../addons/hc_face/template/mobile/images/my_right.png" onclick="window.location.href='<?php  echo $this->createMobileUrl('report',array('rid'=>$item['id']))?>'">
					<img class="deleteimg" data-id="<?php  echo $item['id'];?>" src="../addons/hc_face/template/mobile/images/delete.png">
				</div>
			</div>
			<?php  } } ?>
		</div>
		<div class="delete column">
			<img src="../addons/hc_face/template/mobile/images/del.png" onclick="del()">
			<span>删除报告</span>
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	var deletes=true
	function del(){
		if(deletes){
			deletes=false
			$(".deleteimg").css("display","block").siblings().css("display","none")
		}else{
			deletes=true
			$(".deleteimg").css("display","none").siblings().css("display","block")
		}
	}
	$(".deleteimg").click(function(){
		var id = $(this).attr('data-id');
		var that=this
		$.ajax({
			type: "GET",
			url: "<?php  echo $this->createMobileUrl('myreport',array('act'=>'del'))?>",
			data: {id:id},
			dataType: "json",
			success: function(data){
				layer.msg(data.msg);
				$(that).parents(".myItem").siblings().find(".deleteimg").hide()
				$(that).parents(".myItem").siblings().find(".rightimg").show()
				$(that).parents(".myItem").remove();
			}
		});
	})
</script>
</html>