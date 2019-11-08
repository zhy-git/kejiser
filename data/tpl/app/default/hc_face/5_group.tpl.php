<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
	<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/group.css?<?php  echo $_W['timestamp'];?>">
	<title>我的团队</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="container">
		<div class="top column">
			<img src="../addons/hc_face/template/mobile/images/group.png">
			<span class="name">我的团队</span>
			<span class="num"><text><?php  echo $team;?></text>个</span>
		</div>
		<div class="group">
			<div class="groupTitle row">
				<div class="userName">用户信息</div>
				<div class="time line">时间</div>
				<div class="ID">身份</div>
			</div>
			<?php  if(is_array($nexus)) { foreach($nexus as $index => $item) { ?>
			<div class="groupItem row">
				<div class="userName row">
					<img src="<?php  echo $item['avatar'];?>">
					<span><?php  echo $item['nickname'];?></span>
				</div>
				<div class="time"><?php  echo date('Y-m-d H:i',$item['createtime']);?></div>
				<div class="ID right"><?php  echo $item['type'];?></div>
			</div>
			<?php  if(is_array($item['second'])) { foreach($item['second'] as $i => $it) { ?>
			<div class="groupItem row">
				<div class="userName row">
					<img src="<?php  echo $it['avatar'];?>">
					<span><?php  echo $it['nickname'];?></span>
				</div>
				<div class="time"><?php  echo date('Y-m-d H:i',$it['createtime']);?></div>
				<div class="ID"><?php  echo $it['type'];?></div>
			</div>
			<?php  if(is_array($it['third'])) { foreach($it['third'] as $i1 => $it1) { ?>
			<div class="groupItem row">
				<div class="userName row">
					<img src="<?php  echo $it1['avatar'];?>">
					<span><?php  echo $it1['nickname'];?></span>
				</div>
				<div class="time"><?php  echo date('Y-m-d H:i',$it1['createtime']);?></div>
				<div class="ID"><?php  echo $it1['type'];?></div>
			</div>
			<?php  } } ?>
			<?php  } } ?>
			<?php  } } ?>
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	$(document).ready(function (){
        var nScrollHight = 0; //滚动距离总长(注意不是滚动条的长度)
        var nScrollTop = 0;   //滚动到的当前位置
        var nDivHight = $("#container").height();
        console.log(nDivHight)
        $("#container").scroll(function(){
        	nScrollHight = $(this)[0].scrollHeight;
        	nScrollTop = $(this)[0].scrollTop;
        	if(nScrollTop + nDivHight >= nScrollHight){
        		// alert("滚动条到底部了");
        		console.log("到底了");
        	}
        });
    })
</script>
</html>