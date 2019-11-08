<?php defined('IN_IA') or exit('Access Denied');?><?php  $foot_list = pdo_fetchall("select * from ".tablename("chat_foot_menu")." where uniacid=:uniacid order by displayorder asc limit 5 ",array(":uniacid"=>$uniacid));?>
<?php  if($foot_list) { ?>
<footer>
	<?php  if(is_array($foot_list)) { foreach($foot_list as $foot) { ?>
	<!-- <div class="foot_item"> -->
	    <?php  if($foot['url_type'] == 1&&$foot['id_page'] ==4) { ?>
		 <a href="<?php  echo $foot['link'];?>" class="foot_item" data-color="<?php  echo $foot['color'];?>"> 
		<?php  } else if($foot['url_type'] == 2&&$foot['id_page'] ==1) { ?>
		 <a href="<?php  echo $this->createMobileUrl('index')?>" class="menu_home foot_item" data-color="<?php  echo $foot['color'];?>">
	 	<?php  } else if($foot['url_type'] == 2&&$foot['id_page'] ==2) { ?>
	 	 <a href="<?php  echo $this->createMobileUrl('room_list')?>" class="menu_live foot_item" data-color="<?php  echo $foot['color'];?>">
	    <?php  } else if($foot['url_type'] == 2&&$foot['id_page'] ==3) { ?>
	 	 <a href="<?php  echo $this->createMobileUrl('my_chat')?>" class="menu_my foot_item" data-color="<?php  echo $foot['color'];?>">
	    <?php  } else { ?>
	 		<?php  if($foot['seq'] == 1) { ?>
	 		<a href="<?php  echo $this->createMobileUrl('index')?>" class="menu_my foot_item"  data-color="#f19937">
	 		<?php  } else if($foot['seq'] == 2) { ?>
	 		<a href="<?php  echo $this->createMobileUrl('room_list')?>" class="menu_my foot_item"  data-color="#f19937">
	 		<?php  } else if($foot['seq'] == 3) { ?>
	 		<a href="<?php  echo $this->createMobileUrl('my_chat')?>" class="menu_my foot_item"  data-color="#f19937">
	 		<?php  } ?>
	 <?php  } ?>
		<?php  if($foot['icontype'] ==1) { ?>
		<span class="img_box  <?php  echo $foot['inco'];?>"></span>
		<?php  } else { ?>
		<span class="img_box"><img src="<?php  echo $foot['inco'];?>"/></span>
		<?php  } ?>
		<span class="text_box"><?php  echo $foot['title'];?></span>
		</a>
	<!-- </div> -->
	<?php  } } ?>
	
</footer>
<?php  } else { ?>
<div class="menu_wkBox back_box">
    <a  href="<?php  echo $this->createMobileUrl('index')?>" class="menu_boxFl menu_home">推荐</a>
	<a  href="<?php  echo $this->createMobileUrl('room_list')?>" class="menu_boxFl menu_live">发现</a>
	<a  href="<?php  echo $this->createMobileUrl('my_chat')?>" class="menu_boxFl menu_my">我的</a>
</div>
<?php  } ?>
		<link rel="stylesheet" href="<?php echo TEMPLATE_PATH;?>/css/font-awesome.min.css" />
<script type="text/javascript">
 $(function(){
 	for(i=0;i<$(".foot_item").length;i++){
 		if($(".foot_item").eq(i).attr('href').indexOf("do=<?php  echo $_GPC['do'];?>")>0){
 			$(".foot_item").eq(i).addClass('on');
 			var color = $(".foot_item").eq(i).attr('data-color');
 			$(".on").css('color',color);
 		}
 	}
	 // var url=location.href;
	 // if(url.indexOf('do=index')>0){
		//  $(".menu_home").addClass('on');
	 // }else if(url.indexOf('do=room_list')>0||url.indexOf('do=c_index')>0||url.indexOf('do=chat_index')>0){
		//  $(".menu_live").addClass('on');
	 // }else if(url.indexOf('do=my_')>0){
		//  $(".menu_my").addClass('on');
	 // }
 });
</script>
<style>
html {
    font-size: 62.5%;
    height: 100%;
    background: #eee;
}
body, input, select, button, textarea {
    font-family: Tahoma,Microsoft yahei,sans-serif;
    font-weight: 300;
}

footer{
border-top: 1px solid rgb(242, 242, 242);	
width: 100%;
display: flex;
flex-flow: row nowrap;
justify-content: space-around;
position: fixed;
bottom: 0;
background: #fff;
padding: 4px 0 2px 0;
z-index: 1;
max-width: 640px;
}
footer .foot_item{
text-align: center;
color: #5d5b5b;
width: 33%;
display: flex;
flex-direction: column;
align-items: center;
}
footer .foot_item .img_box{
display: block;
width: 30px;
height: 30px;
line-height: 30px;
text-align: center;
font-size: 26px;

}
footer .foot_item .img_box img{
width: 100%;
height: 100%;
margin-bottom: 10px;
}
footer .foot_item .text_box{
	font-size: 14px;
	line-height: 160%;
}
</style>