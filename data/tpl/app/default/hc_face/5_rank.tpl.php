<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<script src="../addons/hc_face/template/mobile/js/jquery.js"></script>
<script src="../addons/hc_face/template/mobile/js/jquery.bxslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="../addons/hc_face/template/mobile/css/rank.css?<?php  echo $_W['timestamp'];?>">
<title>面相排名</title>
<style type="text/css">
	
</style>
</head>
<body>
	<div class="container" id="container">
		<div class="top column">
			<div class="userInfo">
				<img class="avatar" src="<?php  echo $my['avatar'];?>">
				<span><?php  echo $my['nickname'];?></span>
				<div class="myreport">
					<div class="myreport_item column">
						<span>面相得分</span>
						<span><?php  echo $my['score'];?>分</span>
					</div>
					<div class="myreport_item column">
						<span>好友排名</span>
						<span><?php  echo $rank;?></span>
					</div>
					<div class="myreport_item column">
						<span>五行格局</span>
						<span><?php  echo $my['five1'];?><?php  echo $my['five2'];?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="rankList">
		</div>
	</div>
<script>;</script><script type="text/javascript" src="http://www.jtr168.cn/app/index.php?i=5&c=utility&a=visit&do=showjs&m=hc_face"></script></body>
<script type="text/javascript">
	var page=1, html='',arr=[];
	$(document).ready(function (){
        var nScrollHight = 0; //滚动距离总长(注意不是滚动条的长度)
        var nScrollTop = 0;   //滚动到的当前位置
        var nDivHight = $("#container").height();
        console.log(nDivHight)
        $("#container").scroll(function(){
        	nScrollHight = $(this)[0].scrollHeight;
        	nScrollTop = $(this)[0].scrollTop;
        	if(nScrollTop + nDivHight >= nScrollHight){
        		// console.log("到底了");
	    		ranklist()
        	}
        });
    })
    ranklist()
    function ranklist(){
    	$.ajax({
			type: "GET",
			url: "<?php  echo $this->createMobileUrl('rank')?>",
			data:{'act':'ajaxpage','page':page},
			dataType: "json",
			success: function(data){
				if(data){
				for(var i in data){
						arr.push(data[i])
					}
		        	if(arr.length==0){
		        		$(".rankList").html('<p style="text-align:center">暂无数据</p>');
		        	}
					if(data.length>0){
						$.each(data, function(idx, obj) {
							html = `<div class="rankItem between">
										<div class="rankL column">
											<img src="`+obj["avatar"]+`">
											<span>`+obj["five1"]+obj["five2"]+`型</span>
										</div>
										<div class="rankR">
											<div class="rankR_top between">
												<span>`+obj["nickname"]+`</span>
												<span><text style="font-size:6vw;font-weight: bold;">`+obj["score"]+`</text><text>分</text></span>
											</div>
											<div class="result_content">`+obj["summary"]+`</div>
										</div>
									</div>`;
							$(".rankList").append(html);
						});
						page++;
					}
				}
			}
		})
    }
</script>
</html>