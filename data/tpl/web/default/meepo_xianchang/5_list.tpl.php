<?php defined('IN_IA') or exit('Access Denied');?><?php  include $this->template('common/_header')?>
<!--slider css--->
<link rel="stylesheet" href="<?php  echo MEEPO_XIANCHANG_TPL?>resource/css/boostrap.slider.css"> 
<style>
.slider.slider-horizontal {
	height:40px;
	width:100%;
}
.slider.slider-horizontal .slider-handle {
	margin-left: -10px;
	margin-top: 10px;
}
#Slider .slider-handle {
	background: #36b27a;
	border-radius:50%;
}
#Slider .slider-selection {
	background: #36b27a;
}
.add-jian input{height:40px;text-align:center}
.quantity-remove, .quantity-add {
	cursor: pointer;
}
.quantity-add.glyphicon, .quantity-remove.glyphicon {
	display: block;
	cursor: pointer;
}
.slider_box{
padding:20px;margin-bottom:0px;display:none
}
.update_important{
	position:absolute;
	top:0;
	right:80px;
	color:gray;
	cursor:pointer;
	z-index:10
}
.update_important.active{
	color:#22B766
}
.update_important.active:hover{
	color:gray
}
.update_important:hover{
	color:#22B766
}
.input-tip-button{
	background-color: #449d44;
    border-color: #398439;
	color:#fff!important;
	cursor: pointer;
}
.pc_loginpass{position:absolute;bottom:10px;right:20px;font-size:22px;color:#Fff;}
</style>
<!--slider end--->
<?php  if($op == 'list') { ?>
<ul class="nav nav-tabs">
	<li <?php  if(empty($_GPC['ac_status']) && empty($_GPC['del_status'])) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list')?>"><i class="fa fa-file"></i> 全部活动</a>
	</li>
	<li <?php  if($_GPC['ac_status']==1) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('ac_status'=>'1'))?>"><i class="fa fa-play"></i> 正在进行</a>
	</li>
	<li <?php  if($_GPC['ac_status']==2) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('ac_status'=>'2'))?>"><i class="fa fa-pause"></i> 未开始</a>
	</li>
	<li <?php  if($_GPC['ac_status']==3) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('ac_status'=>'3'))?>"><i class="fa fa-stop"></i> 已结束</a>
	</li>
	<li <?php  if($_GPC['del_status']==1) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('del_status'=>'1'))?>"><i class="<?php  if(IMS_VERSION == '0.52' || IMS_VERSION == '0.6' || IMS_VERSION == '0.7' || IMS_VERSION == '0.8') { ?>glyphicon glyphicon-trash<?php  } else { ?>fa fa-trash-o<?php  } ?>"></i> 活动回收站</a>
	</li>
	<?php  if($_W['isfounder'] || in_array('list',$_user_sys_control)) { ?>
	<li <?php  if($_GPC['ac_status']==4) { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('ac_status'=>'4'))?>"><i class="fa fa-heart"></i> 特别关心</a>
	</li>
	<?php  } ?>
	<li><a href="<?php  echo $this->createWebUrl('list',array('op'=>'post'))?>"  ><i class="fa fa-plus" ></i> 新建活动</a></li>
</ul>

<div class="panel panel-default">
	<div class="panel-heading">活动筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="meepo_xianchang" />
			<input type="hidden" name="do" value="list" />
			<input type="hidden" name="ac_status" value="<?php  echo $_GPC['ac_status'];?>" />
			<input type="hidden" name="del_status" value="<?php  echo $_GPC['del_status'];?>" />
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">活动名称</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="title" id="" type="text" value="<?php  echo $_GPC['title'];?>" placeholder="请输入活动名称">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-6 col-sm-4 col-md-4 col-lg-2 control-label">活动用户(精准搜索)</label>
				<div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
					<input class="form-control" name="uid_name" id="" type="text" value="<?php  echo $_GPC['uid_name'];?>" placeholder="请输入完整的活动用户名称">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
				<div class="col-sm-8 col-lg-9 col-xs-12">
					<input class="btn btn-primary" id="" type="submit" value="搜索">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="wall-lists">
		  <?php  if(is_array($list)) { foreach($list as $item) { ?>
			<div class="listBox" style="position:relative">
			<?php  if($_W['isfounder'] || in_array('list',$_user_sys_control)) { ?>
				<div class="update_important <?php  if($item['is_important']==1) { ?>active<?php  } ?>" data-id="<?php  echo $item['id'];?>" data-important="<?php  echo $item['is_important'];?>"><i class="fa fa-heart"></i> 特别关心</div>
			<?php  } ?>
            <div class="dataBox">	
                <div class="earsTag <?php  if(TIMESTAMP > $item['end_time']) { ?>styEnd<?php  } else if(TIMESTAMP < $item['start_time']) { ?>styNoStart<?php  } else { ?>styNoComplete<?php  } ?>">
					<div class="box <?php  if(TIMESTAMP > $item['end_time']) { ?>end<?php  } else if(TIMESTAMP < $item['start_time']) { ?>nostart<?php  } else { ?>doing<?php  } ?>">
						<div class="stateTxt">           
							<div><span class="label <?php  if(TIMESTAMP > $item['end_time']) { ?>label-danger<?php  } else if(TIMESTAMP < $item['start_time']) { ?>label-warning<?php  } else { ?>label-success<?php  } ?>"><?php  if(TIMESTAMP > $item['end_time']) { ?>已结束<?php  } else if(TIMESTAMP < $item['start_time']) { ?>未开始<?php  } else { ?>进行中<?php  } ?></span></div>
						</div>  
						<div style="display:block">
							<div class="stateTime">
								<div class="timeDay"><?php  echo date('Y-m-d',$item['start_time']);?></div>
								<div class="timeHour"><?php  echo date('H:i:s',$item['start_time']);?></div>
							</div>
							<div class="endTime">至<?php  echo date('Y-m-d H:i:s',$item['end_time']);?></div>
						</div>
					</div>
			    </div>
                <div class="tag-state" style="position:relative;overflow:hidden">
                    <div class="contMain">
                        <div class="playCont" >                          
						   <div class="campaignBox">
								<div class="box">
										<div class="tabCell first noBound">
											<div class="edition noBound" style="height:45%">
												<div class="playTite"><?php  echo $item['title'];?>&nbsp;&nbsp;<?php  if($_W['isfounder'] || in_array('list',$_user_sys_control)) { ?>所属用户:<span class="red"> <?php  echo $item['uid_username'];?></span><?php  } ?></div>
											</div>
											<div class="playData" style="position:relative;height:55%">
												<div class="dataBlk">
													<span class="txt">参与人数</span>
													<span class="dataNum"><?php  echo intval($item['users'])?>人</span>
												</div>
												<div class="dataBlk">
													<span class="txt">签到人数</span>
													<span class="dataNum"><?php  echo intval($item['qd_users'])?>人</span>
												</div>
												<div class="dataBlk">
													<span class="txt">上墙消息</span>
													<span class="dataNum"><?php  echo intval($item['walls'])?>条</span>
												</div>
												<div class="dataBlk">
													<span class="txt">霸屏上墙消息</span>
													<span class="dataNum"><?php  echo intval($item['barwalls'])?>条</span>
												</div>
												
											</div>
											<div class="pc_loginpass">
													<?php  if(!empty($item['pass_word'])) { ?><i class="fa fa-key"></i> <?php  echo $item['pass_word'];?><?php  } else { ?>免密码登陆<?php  } ?>
											</div>
										</div><!--tabCell-->
										<div class="tabCell second">
											<ul class="cotrolBox noBound">
												<li><a href="<?php  echo $this->createWebUrl('list',array('op'=>'edit','id'=>$item['id']))?>"><i class="fa fa-cog"></i><div>编辑活动</div></a></li>
												<li><a href="<?php  echo $this->createWebUrl('basic_config',array('id'=>$item['id']))?>"><i class="fa fa-cubes"></i><div>管理活动</div></a></li>
												<li><a href="<?php  echo $this->createWebUrl('urls',array('id'=>$item['id']))?>"><i class="fa fa-weixin fa-fw"></i><div>活动二维码</div></a></li>			
												<li ><?php  if($item['has_del']==0) { ?><a href="<?php  echo $this->createWebUrl('list',array('op'=>'del','id'=>$item['id']))?>" onclick="return confirm('您确定要删除活动吗？');return false;"><i class="fa fa-times"></i><div>删除活动</div></a><?php  } else { ?><a href="<?php  echo $this->createWebUrl('list',array('op'=>'reopen','id'=>$item['id']))?>" onclick="return confirm('您确定要恢复活动吗？');return false;"><i class="fa fa-gavel"></i><div>恢复活动</div></a><?php  } ?></li>
											</ul>           
										</div><!--tabCell-->
										<?php  if($_W['isfounder']) { ?>
										<div class="tabCell last  noBound">
											<div class="cotrLi"><a onclick="refreshdata(this)" href="javascript:;" data-id="<?php  echo $item['id'];?>"><i class="fa fa-refresh"></i><div>重置数据</div></a></div>
										</div>
										<?php  } ?>
										<?php  if($item['is_pay']==2&&$item['total_money']>0) { ?><div style="position:absolute;top:10%;padding:10px;background-color:#44b549;border-radius:6px"><a href="<?php  echo $this->createWebUrl('web_pay',array('id'=>$item['id']))?>" target="_blank" style="color:#fff;">支付未完成</a></div><?php  } ?>
							</div> <!--box-->
						</div><!--campaignBox--->
                       </div><!--playCont--->
				</div><!---contMain-->
				</div><!--tag-state-->  
			</div><!--dataBox---> 
		</div><!--listBox-->
		<?php  } } ?>
		<div class="pager_box">
			<?php  echo $pager;?>
		</div>
	</div><!--wall-list-->
	<script>
	$(function(){
		$(".update_important").on('click',function(){
			var $this = $(this);
			var ac_id = $this.attr('data-id');
			var is_important = $this.attr('data-important');
			$.post("<?php  echo $this->createWebUrl('update_important')?>",{ac_id:ac_id,is_important:is_important},function(result){
				console.log(result);
				if(result.errno==0){
					if(result.message==1){//加入特别关心
						$this.attr('data-important','1');
						$this.addClass('active');
						
					}else{//取消特别关心
						$this.attr('data-important','0');
						$this.removeClass('active');
					}
				}
			},'json');
		});
	})
	function refreshdata(obj){
			var hdid = $(obj).attr('data-id');
			if(hdid){
				layer.confirm('重置数据即为重置抽奖，砸金蛋，抽奖箱等的中奖记录，摇一摇，3d摇一摇，数钱，等摇一摇功能的轮数游戏状态与中奖数据，重置后将无法恢复，您确定要重置么？', {
					title: ['警告', 'font-size:18px;color:red'],
					closeBtn:0,
					shade :0.6,
					move:false,
					btn: ['确定重置','让我再想想'] //按钮
				}, function(){
						layer.msg('正在拼命重置数据中，切勿关闭本页面....', {
						  icon: 16,
						  shade: 0.01,
						  time:0,
						  shade: [0.8, '#393D49']
						});
						$.ajax({
							 type: "POST",
							 url: "<?php  echo $this->createWebUrl('list',array('op'=>'resetdata'))?>",
							 data:{hdid:hdid},
							 dataType: "json",
							 success: function(json){
								layer.closeAll();
								if(json.errno==0){
									layer.msg('重置成功');
									setTimeout(function(){
										window.location.reload();
									},300);
								}else{
									layer.msg(json.message)
								}
							 }
						 });
				}, function(){
					layer.closeAll();
				});
			}else{
				layer.msg('活动id不存在，重置失败!');
			}
	}
	</script>
<?php  } else if($op == 'post') { ?>
<div class="bd_nav_list">
	<div class="btn-group">
		<a class="btn btn-default" href="javascript:;" onclick="history.go( -1 );"><i class="fa fa-arrow-left"></i> 返回活动</a>
	</div>
</div>
<div class="panel panel-default">
<ul class="step step2" id="module_steps">
        <li class="step_on"><i class="fa fa-circle"></i><span>基本信息</span></li>
        <li><i class="fa fa-circle"></i><span>功能设置</span></li>
        <li><i class="fa fa-circle"></i><span>支付</span></li>
        <li><i class="fa fa-circle"></i><span>完成</span></li>
</ul>
</div>
<form  method="post" class="form-horizontal" enctype="multipart/form-data" id="form1" onsubmit="return check();">
	<input type="hidden" name="total_money" id="total_money">
	<input type="hidden" name="can_join" id="can_join" value="<?php  echo $sys_config['min_persons'];?>">
	<div class="panel panel-default">
	<div class="panel-heading">新增活动</div>	
	<div class="panel-body">
	<div class="tab-pane  active" id="tab_step1">
		<div class="panel panel-default">
			<div class="panel-heading"></div>					
			<div class="panel-body">				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动主题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['title'];?>" class="form-control" name="title" id="title">
						<span class="help-block">活动主题</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">本次活动起止时间</label>
					<div class="col-sm-9">
						<?php  if(IMS_VERSION == '0.52' || IMS_VERSION == '0.6' || IMS_VERSION == '0.7' || IMS_VERSION == '0.8') { ?>
								<?php echo tpl_form_field_daterange_zam('ac_times',array('start'=>date('Y-m-d H:i:s',empty($alist['start_ttime'])?time():$alist['start_ttime']),'end'=>date('Y-m-d H:i:s',empty($alist['end_time'])?time()+3600*6:$alist['end_time'])),true,$sys_max_day);?>
						<?php  } else { ?>
								<?php echo tpl_form_field_daterange_10('ac_times',array('start'=>date('Y-m-d H:i:s',empty($alist['start_ttime'])?time():$alist['start_ttime']),'end'=>date('Y-m-d H:i:s',empty($alist['end_time'])?time()+3600*6:$alist['end_time'])),true,$sys_max_day);?>
						<?php  } ?>
						<span class="help-block">活动时间 <font color="red">一经确定、活动时间无法修改</font> <?php  if($sys_max_day>0) { ?><font color="red">、注意:活动时间范围必须小于等于<?php  echo $sys_max_day;?>天</font><?php  } ?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">场控密码</label>
					<div class="col-sm-5">
						<div class="input-group">
							<input type="text" class="form-control" name="pass_word" value="<?php  echo $alist['pass_word'];?>">
							<div class="input-group-addon input-tip-button" onclick="clickChangesecret(this)">换个密码</div>
						</div>
						<span class="help-block">活动场控密码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏登陆页背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pclogin_bgimg', $alist['pclogin_bgimg']);?>
						<span class="help-block">大屏登陆页背景图片 建议标准 1440 * 828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏登陆页背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('pclogin_bgvideo', $alist['pclogin_bgvideo']);?>
						<span class="help-block">大屏登陆页背景视频 格式为:mp4或者webm格式 建议用外链如http://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是活动基础设置的默认风格</span>
					</div>
				</div>
				<div class="form-group" <?php  if($sys_config['open_mustgz']!=1&&!$_W['isfounder']) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">是否必须关注</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="gz_must" value="1"  <?php  if($alist['gz_must'] == '1') { ?>checked="true"<?php  } ?> id="open_gz"> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="gz_must" value="0"   <?php  if($alist['gz_must'] == '0') { ?>checked="true"<?php  } ?> id="close_gz">否
						</label>
						<span class="help-block">认证服务号有效</span>
					</div>
				</div>
				<div class="form-group open_gz" <?php  if($alist['gz_must'] == '0'  || ($sys_config['open_mustgz']!=1&&!$_W['isfounder'])) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注素材</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['gz_url'];?>" class="form-control" name="gz_url" >
						<span class="help-block">认证服务号引导关注素材链接</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">开启地区限制</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="open_gps" value="1"  <?php  if($alist['open_gps'] == '1') { ?>checked="true"<?php  } ?> id="open_gps">开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_gps" value="0"  <?php  if($alist['open_gps'] == '0') { ?>checked="true"<?php  } ?> id="close_gps">关闭
						</label>
					</div>
				</div>
				<div class="form-group open_gps open_ip" <?php  if($alist['open_gps'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">限制方式</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="dwtype" value="1"  <?php  if($alist['dwtype'] == '1') { ?>checked="true"<?php  } ?> onclick="hideIp()">GPS定位
						</label>
						<label class="radio-inline">
							<input type="radio" name="dwtype" value="2"  <?php  if($alist['dwtype'] == '2') { ?>checked="true"<?php  } ?> onclick="showIp()">IP定位
						</label>
						<span class="help-block">GPS定位安卓手机耗时较长，ip定位方便快捷，但是最低仅可限制到市级别</span>
					</div>
				</div>
				<div class="form-group open_ip" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['mustaddress'];?>" class="form-control" name="mustaddress" >
						<span class="help-block">标准格式:地区 或者 地区#地区 例子1:湖南省 例子2:湖南省#河北省 例子3: 北京市#重庆市 注意:最低只能是市</span>
					</div>
				</div>
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">开启地区调试模式</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="open_gps_tiaoshi" value="1"  <?php  if($alist['open_gps_tiaoshi'] == '1') { ?>checked="true"<?php  } ?> id="open_gps">开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_gps_tiaoshi" value="0"  <?php  if($alist['open_gps_tiaoshi'] == '0') { ?>checked="true"<?php  } ?> id="close_gps">关闭
						</label>
						<span class="help-block">活动开始后、请关闭调试模式</span>
					</div>
				</div>
				
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区页面背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gps_bg', $alist['gps_bg']);?>
						<span class="help-block">限制地区页面背景 规格 640px*1000px 注:此图必须认真做、可以作为广告图</span>
					</div>
				</div>
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区经纬度</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['must_location'];?>" class="form-control" name="must_location" >
						<span class="help-block">标准格式:纬度|经度，请以|分隔开 如:23.70|113.60</span>
					</div>
				</div>
				<div class="form-group open_gps"  <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">地区误差范围</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="must_range"  class="form-control" value="<?php  echo $alist['must_range'];?>">
							<span class="input-group-addon">米</span>
						</div>
						<span class="help-block">地区误差范围 只可以为整数</span>
					</div>
				</div>
				<div class="form-group open_gps open_ip"  <?php  if($alist['open_gps'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">验证有效时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="success_time"  class="form-control" value="<?php  echo $alist['success_time'];?>">
							<span class="input-group-addon">分钟</span>
						</div>
						<span class="help-block">用户验证成功后、存活有效时间 只可以为整数</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户是否需要审核</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="status" value="1"  <?php  if($alist['status'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2"   <?php  if($alist['status'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">准许用户分享</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="is_share" value="1"  <?php  if($alist['is_share'] == '1') { ?>checked="true"<?php  } ?>>可以分享
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_share" value="0"   <?php  if($alist['is_share'] == '0') { ?>checked="true"<?php  } ?>>禁止分享
						</label>
					</div>
				</div>
				
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label"></label>
					<div class="col-sm-9 ">
						<a class="btn btn-success" href="javascript:;" onclick="step(1)">下一步</a>
					</div>
			</div>
		</div>
	</div><!--step1 end-->
	<div class="tab-pane  active" id="tab_step2" style="display:none">
		<div class="panel panel-default">
			<div class="panel-heading">功能与人数选择</div>					
			<div class="panel-body">
				<div class="had_selected_control" style="display:none"></div>
				<div class="had_selected_zzcontrol" style="display:none"></div>
				<div class="order_title">活动功能选择</div>
				<ul id="moduleList" class="moduleList order_line">
				<?php  if($uidModules=='all') { ?>
				  <?php  if(is_array($sys_modules)) { foreach($sys_modules as $row) { ?>
					<?php  if($row['isshow']==1) { ?>
					<li data-price="<?php  echo $row['money'];?>" data-control="<?php  echo $row['control'];?>">
						<i class="<?php  echo $row['icon'];?>"></i>
						<a class="module-name"><?php  echo $row['name'];?></a><span>￥<?php  echo $row['money'];?></span>
						
					</li> 
					<?php  } ?>
				  <?php  } } ?>
				<?php  } else { ?>
				  <?php  if(is_array($sys_modules)) { foreach($sys_modules as $skey => $row) { ?>
					
					<?php  if($row['isshow']==1) { ?>
					<?php  if(in_array($skey,$uidModules)) { ?>
					<li data-price="<?php  echo $row['money'];?>" data-control="<?php  echo $row['control'];?>">
						<i class="<?php  echo $row['icon'];?>"></i>
						<a class="module-name"><?php  echo $row['name'];?></a><span>￥<?php  echo $row['money'];?></span>
						
					</li> 
					<?php  } ?>
					<?php  } ?>
				  <?php  } } ?>
				<?php  } ?>
				</ul>
			</div>
			<?php  if(!empty($sys_service)) { ?>
			<div class="panel-body">
				<div class="order_title">增值服务功能</div>
				<ul id="zzList" class="zzList order_line">
				  <?php  if(is_array($sys_service)) { foreach($sys_service as $row) { ?>
					<?php  if($row['zz_isshow']==1) { ?>
					<li data-price="<?php  echo $row['zz_money'];?>" data-zzcontrol="<?php  echo $row['zz_control'];?>">
						<i class="<?php  echo $row['zz_icon'];?>"></i>
						<a class="module-name"><?php  echo $row['zz_name'];?></a><span>￥<?php  echo $row['zz_money'];?></span>
						
					</li> 
					<?php  } ?>
				  <?php  } } ?>
				</ul>
			</div>
			<?php  } ?>
			<div class="panel-body">
				<div class="order_title">参与人数选择【<?php  echo $sys_config['one_price'];?>元/人、最小参与人数为<?php  echo $sys_config['min_persons'];?>人】</div>
				<!--slider--->
				<div class="form-group slider_box" style="display:none">
					<div class="col-sm-12  col-xs-12 col-md-12">
						<input id="slider" data-slider-id='Slider' type="text"/>
						<span class="label label-success">拖动上方绿色圆点即可更改活动人数</span>
						<?php  if($sys_max_freeman>0 && $sys_config['one_price']>0) { ?>
						<br><br>
						<span class="label label-danger">活动免费人数为:<?php  echo $sys_max_freeman;?>人以内</span>
						<?php  } ?>
					</div>
					<div style="display:inline-block;width:200px;float:left;margin-right:50px;">
							<div class="input-group">
								<input  class="form-control" id="true_persons"  value="<?php  echo $sys_config['min_persons'];?>"  />
								<div class="input-group-addon">人</div>
							</div>
					</div>
				</div>
				<!--slider--->
				<?php  $default_persons_money = $sys_config['one_price']*($sys_config['min_persons'] - $sys_max_freeman);?>
				<ul id="personsList" class="personsList order_line">
					<li data-price="<?php  if($default_persons_money<0) { ?>0<?php  } else { ?><?php  echo $default_persons_money;?><?php  } ?>" id="persons_li">
						<i class="meepo-users"></i>
						
						<a class="module-name persons_num"><?php  echo $sys_config['min_persons'];?>人</a>
						<span class="persons_money">
						￥<?php  if($default_persons_money<0) { ?>0<?php  } else { ?><?php  echo $default_persons_money;?><?php  } ?>
						</span>
					</li> 
				</ul>
			</div>
			<div class="form-group col-sm-12">
				<div id="choseModule" class="order_line">
					当前已选择 <span class="label label-success" id="num">0</span> 个功能，共 <span class="label label-danger" id="allPrice">￥0.00</span>
				</div>
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label"></label>
					<div class="col-sm-9 ">
						<a class="btn btn-default" href="javascript:;" onclick="back_step(1)" style="margin-right:20px;">上一步</a>
						<a class="btn btn-success" href="javascript:;" onclick="step(2)">下一步</a>
					</div>
			</div>
		</div>
	</div><!--step2-->
	<div class="tab-pane  active" id="tab_step3" style="display:none">
		<div class="panel panel-default">
			<div class="panel-heading">请确认本次活动信息</div>					
			<div class="panel-body">
				<table class="table table-hover">
					<tbody id="order_detail"></tbody>
				</table>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">请选择支付方式</div>					
			<div class="panel-body">
					<ul id="pay_type" class="pay_type">
						<li data-type="1" class="pay_on">
							微信支付
							<input type="radio" name="pay_type" value="1" class="hidden" checked="checked" />
							<i class="fa fa-check-circle pay_checked"></i>
						</li>  
				    </ul>
			</div>
		</div>
		<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label"></label>
					<div class="col-sm-9 ">
						<a class="btn btn-default" href="javascript:;" onclick="back_step(2)" style="margin-right:20px;">上一步</a>
						<input type="submit" name="submit" value="确定提交" class="btn btn-success" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
		</div>
	</div><!--step3-->
	</div>
	</div>
	</form>
<script type="text/javascript">
var requireExtend = require.config({
	baseUrl: 'resource/js/app', //基础目录，将从此目录引用JS
	paths: {
		'bootstrap-slider': '../../../../addons/meepo_xianchang/template/resource/js/bootstrap-slider.min', //结尾不写.js
	}
});
var one_price = <?php  echo $sys_config['one_price'];?>;
var min_persons = <?php  echo $sys_config['min_persons'];?>;
var max_persons = <?php  echo $sys_config['max_persons'];?>;
var free_persons = <?php  echo $sys_max_freeman;?>;
requireExtend(["bootstrap-slider"],function(){
		var mySlider = $('#slider').slider({
			step: 1,
			min: min_persons,
			max: max_persons,
			value:"<?php  echo $sys_config['min_persons'];?>",
			handle: 'square',
			tooltip: 'always',
			formatter: function(value) {
				if(!$('.slider_box').is(':hidden')){
					$(".persons_num").text(value+"人");
					$("#can_join").val(value);
					var money = (value - free_persons )*one_price;
					$("#persons_li").attr("data-price",(money<0?0:money.toFixed(2)));
					$(".persons_money").text((money<0?0:money.toFixed(2))+"元");
					var all_modules = $('#moduleList li.module_on');
					var allPrice = money<0?0:money;
					console.log(allPrice);
					for(var i=0;i<all_modules.length;i++){
							allPrice += parseFloat($(all_modules[i]).data('price'));
					}
					var zz_modules = $('#zzList li.module_on');
					if(zz_modules.length>0){
						for(var i=0;i<zz_modules.length;i++){
								allPrice += parseFloat($(zz_modules[i]).data('price'));
						}
					}
					$('#num').html(($('#moduleList li.module_on').length+1));
					$("#total_money").val(allPrice.toFixed(2));
					$('#allPrice').html('￥' + allPrice.toFixed(2));
					$("#true_persons").val(value);
				}
				return value+"人";
				
			}
		});
		
		 
		$('#true_persons').bind('blur', function() {  
				var value = parseInt($("#true_persons").val());
				if(isNaN(value)){ 
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数请输入大于'+min_persons+'、小于'+max_persons+'的数字', '', 'error');
					return;
				}
				if(value<min_persons){
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数不能少于'+min_persons+'人.', '', 'error');
					return;
				}
				if(value>max_persons){
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数不能超过'+max_persons+'人.', '', 'error');
					return;
				}
				
				if(!$('.slider_box').is(':hidden')){
					$(".persons_num").text(value+"人");
					$("#can_join").val(value);
					var money = (value - free_persons )*one_price;
					$("#persons_li").attr("data-price",(money<0?0:money.toFixed(2)));
					$(".persons_money").text((money<0?0:money.toFixed(2))+"元");
					var all_modules = $('#moduleList li.module_on');
					var allPrice = money<0?0:money;
					console.log(allPrice);
					for(var i=0;i<all_modules.length;i++){
							allPrice += parseFloat($(all_modules[i]).data('price'));
					}
					var zz_modules = $('#zzList li.module_on');
					if(zz_modules.length>0){
						for(var i=0;i<zz_modules.length;i++){
								allPrice += parseFloat($(zz_modules[i]).data('price'));
						}
					}
					$('#num').html(($('#moduleList li.module_on').length+1));
					$("#total_money").val(allPrice.toFixed(2));
					$('#allPrice').html('￥' + allPrice.toFixed(2));
					mySlider.slider('setValue',value);
				}
		}); 
		
});

function clickChangesecret(obj){
	$(obj.parentNode).find('input').val(randomWord(parseInt("<?php  echo $sys_config['code_Nums'];?>")));
}
function randomWord(num){
    var str = "",
        range = num,
        arr = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    for(var i=0; i<range; i++){
        pos = Math.round(Math.random() * (arr.length-1));
        str += arr[pos];
    }
    return str;
}
</script>
	<script>
		$(function(){
			$('html,body').animate({scrollTop: '0px'}, 80);
			$("#open_gz").on('click',function(){
				$(".open_gz").show();
			});
			$("#close_gz").on('click',function(){
				$(".open_gz").hide();
			});
			$("#open_gps").on('click',function(){
				$(".open_gps").show();
			});
			$("#close_gps").on('click',function(){
				$(".open_gps,.open_ip").hide();
			});
			$('#moduleList li').click(function(){
                var $this = $(this);
                if($this.hasClass('module_on')){
					$('.had_selected_control').find('.'+$this.attr('data-control')).remove();
                    $this.removeClass('module_on').find('.module_checked').remove();
                }else{
					if($('.had_selected_control').find('.'+$this.attr('data-control')).length<=0){
						$('.had_selected_control').append('<input type="hidden" name="controls[]" class="'+$this.attr('data-control')+'" value="'+$this.attr('data-control')+'">');
					}
					$this.addClass('module_on').append('<i class="fa fa-check-circle module_checked"></i>'); 
				}
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
            });
			$('#zzList li').click(function(){
                var $this = $(this);
                if($this.hasClass('module_on')){
					$('.had_selected_zzcontrol').find('.'+$this.attr('data-zzcontrol')).remove();
                    $this.removeClass('module_on').find('.module_checked').remove();
                }else{
					if($('.had_selected_zzcontrol').find('.'+$this.attr('data-zzcontrol')).length<=0){
						$('.had_selected_zzcontrol').append('<input type="hidden" name="zz_controls[]" class="'+$this.attr('data-zzcontrol')+'" value="'+$this.attr('data-zzcontrol')+'">');
					}
					$this.addClass('module_on').append('<i class="fa fa-check-circle module_checked"></i>'); 
				}
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
            });
			
			$('#personsList li').click(function(){
				$(".slider_box").css({"display":"flex","display":"-webkit-flex"});
                var $this = $(this);
                $('#personsList li').removeClass('module_on');
				$('#personsList li').find('.module_checked').remove();
				$this.addClass('module_on').append('<i class="fa fa-check-circle module_checked"></i>'); 
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
				//$("#can_join").val($('#personsList li.module_on').data('nums'));
            });
			$('#pay_type li').click(function(){
                var $this = $(this);
				$(this).addClass("pay_on").siblings().removeClass("pay_on");
                $('#pay_type li').find('.pay_checked').remove();
				$('#pay_type li').find('input').prop("checked", "");
				$this.find('input').prop("checked", "checked");
				$this.append('<i class="fa fa-check-circle pay_checked"></i>'); 
            });
		});
		function showIp(){
			
			$(".open_gps").hide();
			$(".open_ip").show();
		}
		function hideIp(){
			$(".open_ip").hide();
			$(".open_gps").show();
		}
		function step(id){
			if(id==1){
				if($.trim($(':text[name="title"]').val()) == '') {
					util.message('请输入活动名称.', '', 'error');
					return false;
				}
				/*if($.trim($(':text[name="pass_word"]').val()) == '') {
					util.message('请输入场控密码.', '', 'error');
					return false;
				}*/
				if($("input[name='open_gps']:checked").val()==1){
					if($.trim($(':text[name="must_location"]').val()) == '') {
						util.message('请输入限制地区.', '', 'error');
						return false;
					}	
				}
				$("#module_steps").children().eq(0).removeClass('step_on');
				$("#module_steps").children().eq(1).addClass('step_on');
				$("#tab_step1").hide();
				$("#tab_step2").show();
				$('html,body').animate({scrollTop: '0px'}, 80);
			}else if(id==2){
				var all_modules = $('#moduleList li.module_on');
				var zz_modules = $('#zzList li.module_on');
				var check_modules = all_modules.length;
				if(check_modules<=0){
					util.message('请选择活动功能.', '', 'error');
					return false;
				}
				if($('#personsList li.module_on').length<=0){
					util.message('请选择活动参与人数.', '', 'error');
					return false;
				}
				$("#module_steps").children().eq(1).removeClass('step_on');
				$("#module_steps").children().eq(2).addClass('step_on');
				$("#tab_step1").hide();
				$("#tab_step2").hide();
				var html = "";
				html += "<tr>";
                    html += "<td width=\"100\" align=\"right\">活动名称：</td>";
                    html += "<td>"+$("#title").val()+"</td>";
                    html += "<td width=\"100\" align=\"right\">开始时间：</td>";
                    html += "<td>"+$("input[name='ac_times[start]']").val()+"</td>";
                    html += "<td width=\"100\" align=\"right\">结束时间：</td>";
                    html += "<td>"+$("input[name='ac_times[end]']").val()+"</td>";
                html += "</tr>";
                html += "<tr>";
                    html += "<td align=\"right\" valign=\"top\">已选功能：</td>";
                    html += "<td colspan=\"5\">";
                        html += "<ul id=\"myModuleList\">";
						 for(var i=0;i<check_modules;i++){
							var module = $(all_modules[i]);
							html += '<li><i class="'+module.find('i').eq(0).attr('class')+'"></i>'+module.find('.module-name').text()+'<span>￥'+module.data('price')+'</span>';
							html += " <i class=\"and\">+</i>";
                            html += "</li> ";
						 }
						 if(zz_modules.length>0){
						   for(var i=0;i<zz_modules.length;i++){
								var zz_module = $(zz_modules[i]);
								html += '<li><i class="'+zz_module.find('i').eq(0).attr('class')+'"></i>'+zz_module.find('.module-name').text()+'<span>￥'+zz_module.data('price')+'</span>';
								html += " <i class=\"and\">+</i>";
								html += "</li> ";
						   }
						 }
                           html += '<li><i class="'+$('#personsList li.module_on').find('i').eq(0).attr('class')+'"></i>'+$('#personsList li.module_on').find('.module-name').text()+'<span>￥'+$('#personsList li.module_on').data('price')+'</span>';
							html += " <i class=\"and\">+</i>";
                            html += "</li> ";
							var allPrice = 0.00;
							for(var i=0;i<all_modules.length;i++){
									allPrice += parseFloat($(all_modules[i]).data('price'));
							}
							if(zz_modules.length>0){
									for(var i=0;i<zz_modules.length;i++){
										allPrice += parseFloat($(zz_modules[i]).data('price'));
									}
							}
							if($('#personsList li.module_on').length>0){
								allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
							}
                            html += '<li class=\"all\">￥'+allPrice.toFixed(2)+'<i class=\"and\">=</i>';
							html += "</li>";
                        html += "</ul>";
                    html += "</td>";
                html += "</tr>";
				$("#order_detail").html(html);
				$("#tab_step3").show();
				$('html,body').animate({scrollTop: '0px'}, 80);
			}
		}
		function back_step(id){
			if(id==1){
				$("#tab_step1").show();
				$("#tab_step2").hide();
				$("#tab_step3").hide();
			}else if(id==2){
				$("#tab_step1").hide();
				$("#tab_step3").hide();
				$("#tab_step2").show();
			}
		}
		function check(){
			var pay_type = $('input:radio[name="pay_type"]:checked').val();
			if(typeof(pay_type)=="undefined" || pay_type==''){ 
				util.message('请选择支付方式.', '', 'error');
				return false;
			}
		}
	</script>
<?php  } else if($op=='edit') { ?>
<div class="bd_nav_list">
	<div class="btn-group">
		<a class="btn btn-default" href="<?php  echo $this->createWebUrl('list')?>"><i class="fa fa-arrow-left"></i> 返回我的活动</a>
	</div>
</div>
<div class="panel panel-default" style="border-right:0;border-left:0">
<ul class="nav nav-tabs" style="margin-bottom:0;margin-top:20px;">
	<li <?php  if(empty($_GPC['oop'])||$oop=='basic') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('op'=>'edit','oop'=>'basic','id'=>$id))?>">基础设置</a>
	</li>
	<li <?php  if($_GPC['oop']=='gn') { ?>class="active"<?php  } ?>>
		<a href="<?php  echo $this->createWebUrl('list',array('op'=>'edit','oop'=>'gn','id'=>$id))?>">活动功能</a>
	</li>
</ul>
</div>
<?php  if($oop=='basic') { ?>
<style>
.display-none{display:none}
</style>
<form  method="post" class="form-horizontal list_form" enctype="multipart/form-data" id="form1" onsubmit="return check_edit();">
	<input type="hidden" value="<?php  echo $alist['id'];?>" class="form-control" name="id">
	<input type="hidden" value="<?php  echo $alist['uid'];?>" class="form-control" name="uid" id="list_uid">
	<div class="panel panel-default">
	<div class="panel-heading">基础设置</div>	
	<div class="panel-body">
	<div class="tab-pane  active" id="tab_step1">
		<div class="panel panel-default">
			<div class="panel-heading"></div>					
			<div class="panel-body">
				<div class="form-group" <?php  if(!$_W['isfounder']&&!in_array('change_uid',$_user_sys_control)) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">所属用户</span></label>
					<div class="col-sm-9">
						<?php  $alist['username'] = pdo_fetchcolumn("SELECT `username` FROM " . tablename('users') . " WHERE `uid`=:uid",array(":uid"=>$alist['uid']));?>
						<div class="col-sm-9">
							<div class="label label-success" id="pick_manage_user" style="margin:10px;padding:10px;"><i class="fa fa-external-link"></i> 点击选择用户</div>
							当前所属用户: <span class="label label-danger had_select_user"><?php  if(!empty($alist['username'])) { ?><?php  echo $alist['username'];?><?php  } ?></span>
						</div>
						
						
					</div>
				</div>
				<div class="form-group" <?php  if(!$_W['isfounder']&&!in_array('list',$_user_sys_control)) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">支付状态</span></label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="is_pay" value="1"  <?php  if($alist['is_pay'] == '1') { ?>checked="true"<?php  } ?> id="is_pay">支付成功
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_pay" value="2"   <?php  if($alist['is_pay'] == '2') { ?>checked="true"<?php  } ?> id="is_pay">支付未完成
						</label>
						<span class="help-block"></span>
					</div>
				</div>
				<div class="form-group" <?php  if(!$_W['isfounder']&&!in_array('list',$_user_sys_control)) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span><span class="label label-danger">是否特别关心</span></label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="is_important" value="1"  <?php  if($alist['is_important'] == '1') { ?>checked="true"<?php  } ?> id="is_important">是
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_important" value="0"   <?php  if($alist['is_important'] == '0') { ?>checked="true"<?php  } ?> id="is_important">否
						</label>
						<span class="help-block"></span>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动主题</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['title'];?>" class="form-control" name="title" id="title">
						<span class="help-block">活动主题</span>
					</div>
				</div>
				<?php  if($_W['isfounder']||in_array('list',$_user_sys_control)) { ?>
					<div class="form-group">
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">本次活动起止时间</label>
						<div class="col-sm-9">
									<?php echo tpl_form_field_daterange('ac_times',array('start'=>date('Y-m-d H:i:s',empty($alist['start_time'])?time():$alist['start_time']),'end'=>date('Y-m-d H:i:s',empty($alist['end_time'])?time()+3600*6:$alist['end_time'])),true);?>
							<span class="help-block">活动时间 <font color="red">一经确定、活动时间无法修改</font></span>
						</div>
					</div>
				<?php  } ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">场控密码</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['pass_word'];?>" class="form-control" name="pass_word" >
						<span class="help-block">活动场控密码</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏登陆页背景图片</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('pclogin_bgimg', $alist['pclogin_bgimg']);?>
						<span class="help-block">大屏登陆页背景图片 建议标准 1440 * 828px</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏登陆页背景视频</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_video('pclogin_bgvideo', $alist['pclogin_bgvideo']);?>
						<span class="help-block">大屏登陆页背景视频 格式为:mp4或者webm格式 建议用外链如http:://xxxx.mp4 注:视频背景优先级最高、次之为背景图片、再次之是活动基础设置的默认风格</span>
					</div>
				</div>
				<div class="form-group" <?php  if($sys_config['open_mustgz']!=1&&!$_W['isfounder']) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label" >是否必须关注</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="gz_must" value="1"  <?php  if($alist['gz_must'] == '1') { ?>checked="true"<?php  } ?> id="open_gz"> 是
						</label>
						<label class="radio-inline">
							<input type="radio" name="gz_must" value="0"   <?php  if($alist['gz_must'] == '0') { ?>checked="true"<?php  } ?> id="close_gz">否
						</label>
						<span class="help-block">认证服务号有效</span>
					</div>
				</div>
				<div class="form-group open_gz" <?php  if($alist['gz_must'] == '0' || ($sys_config['open_mustgz']!=1&&!$_W['isfounder'])) { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注素材</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['gz_url'];?>" class="form-control" name="gz_url" >
						<span class="help-block">认证服务号引导关注素材链接</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">开启地区限制</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="open_gps" value="1"  <?php  if($alist['open_gps'] == '1') { ?>checked="true"<?php  } ?> id="open_gps">开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_gps" value="0"  <?php  if($alist['open_gps'] == '0') { ?>checked="true"<?php  } ?> id="close_gps">关闭
						</label>
					</div>
				</div>
				<div class="form-group open_gps open_ip" <?php  if($alist['open_gps'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">限制方式</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="dwtype" value="1"  <?php  if($alist['dwtype'] == '1') { ?>checked="true"<?php  } ?> onclick="hideIp()">GPS定位
						</label>
						<label class="radio-inline">
							<input type="radio" name="dwtype" value="2"  <?php  if($alist['dwtype'] == '2') { ?>checked="true"<?php  } ?> onclick="showIp()">IP定位
						</label>
						<span class="help-block">GPS定位安卓手机耗时较长，ip定位方便快捷，但是最低仅可限制到市级别</span>
					</div>
				</div>
				<div class="form-group open_ip" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '1') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['mustaddress'];?>" class="form-control" name="mustaddress" >
						<span class="help-block">标准格式:地区 或者 地区#地区 例子1:湖南省 例子2:湖南省#河北省 例子3: 北京市#重庆市 注意:最低只能是市</span>
					</div>
				</div>
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">开启地区调试模式</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="open_gps_tiaoshi" value="1"  <?php  if($alist['open_gps_tiaoshi'] == '1') { ?>checked="true"<?php  } ?> id="open_gps">开启
						</label>
						<label class="radio-inline">
							<input type="radio" name="open_gps_tiaoshi" value="0"  <?php  if($alist['open_gps_tiaoshi'] == '0') { ?>checked="true"<?php  } ?> id="close_gps">关闭
						</label>
						<span class="help-block">活动开始后、请关闭调试模式</span>
					</div>
				</div>
				
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区页面背景</label>
					<div class="col-sm-9">
						<?php  echo tpl_form_field_image('gps_bg', $alist['gps_bg']);?>
						<span class="help-block">限制地区页面背景 规格 640px*1000px 注:此图必须认真做、可以作为广告图</span>
					</div>
				</div>
				<div class="form-group open_gps" <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">限制地区经纬度</label>
					<div class="col-sm-9">
						<input type="text" value="<?php  echo $alist['must_location'];?>" class="form-control" name="must_location" >
						<span class="help-block">标准格式:纬度|经度，请以|分隔开 如:23.70|113.60</span>
					</div>
				</div>
				<div class="form-group open_gps"  <?php  if($alist['open_gps'] == '0'||$alist['dwtype'] == '2') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">地区误差范围</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="must_range"  class="form-control" value="<?php  echo $alist['must_range'];?>">
							<span class="input-group-addon">米</span>
						</div>
						<span class="help-block">地区误差范围 只可以为整数</span>
					</div>
				</div>
				<div class="form-group open_gps open_ip"  <?php  if($alist['open_gps'] == '0') { ?>style="display:none"<?php  } ?>>
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">验证有效时间</label>
					<div class="col-sm-9 ">
						<div class="input-group">
							<input type="text" name="success_time"  class="form-control" value="<?php  echo $alist['success_time'];?>">
							<span class="input-group-addon">分钟</span>
						</div>
						<span class="help-block">用户验证成功后、存活有效时间 只可以为整数</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户是否需要审核</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="status" value="1"  <?php  if($alist['status'] == '1') { ?>checked="true"<?php  } ?>> 无需审核
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="2"   <?php  if($alist['status'] == '2') { ?>checked="true"<?php  } ?>>必须审核
						</label>
					</div>
				</div>
				<?php  if(in_array('meeting',$alist['controls'])) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">用户参与互动是否需要报名</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="mustbm" value="1"  <?php  if($alist['mustbm'] == '1') { ?>checked="true"<?php  } ?>> 必须提前报名
						</label>
						<label class="radio-inline">
							<input type="radio" name="mustbm" value="2"   <?php  if($alist['mustbm'] == '2') { ?>checked="true"<?php  } ?>> 不需要报名
						</label>
					</div>
				</div>
				<?php  } ?>
				<?php  if(in_array('faceqd',$alist['controls'])) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">参与互动是否必须人脸签到</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="facebm" value="1"  <?php  if($alist['facebm'] == '1') { ?>checked="true"<?php  } ?>> 必须人脸签到
						</label>
						<label class="radio-inline">
							<input type="radio" name="facebm" value="2"   <?php  if($alist['facebm'] == '2') { ?>checked="true"<?php  } ?>> 不需要人脸签到
						</label>
					</div>
				</div>
				<?php  } ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label">准许用户分享</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">
							<input type="radio" name="is_share" value="1"  <?php  if($alist['is_share'] == '1') { ?>checked="true"<?php  } ?>>可以分享
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_share" value="0"   <?php  if($alist['is_share'] == '0') { ?>checked="true"<?php  } ?>>禁止分享
						</label>
					</div>
				</div>
				
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label"></label>
					<div class="col-sm-9 ">
						<input type="submit" name="submit" value="保存" class="btn btn-success" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					</div>
			</div>
		</div>
	</div><!--basic end-->
	<div style="color: red !important;">&#38463;&#33707;&#28304;&#30721;&#31038;&#21306;&#119;&#119;&#119;&#46;&#48;&#53;&#49;&#54;&#99;&#105;&#116;&#121;&#46;&#99;&#111;&#109;</div>
</form>
<script type="text/javascript">
require(['../../../../addons/meepo_xianchang/template/resource/js/activity_user', 'bootstrap'], function(sys_manage){
	$(function(){
		$('#pick_manage_user').click(function(){
			sys_manage.user.browser(function(us){
			},{mode:'invisible',direct:'1'});
		});
	});
});
function showIp(){		
	$(".open_gps").hide();
	$(".open_ip").show();
}
function hideIp(){
	$(".open_ip").hide();
	$(".open_gps").show();
}
</script>
<?php  } else if($oop=='gn') { ?>
	<form  method="post" class="form-horizontal" enctype="multipart/form-data" id="form1" onsubmit="return check_gn();">
	<input type="hidden" value="<?php  echo $alist['id'];?>" class="form-control" name="id">
	<input type="hidden" name="total_money" id="total_money">
	<input type="hidden" name="can_join" id="can_join" value="<?php  echo $alist['can_join'];?>">
	<div class="panel panel-default">
	<div class="panel-body">
		<div class="tab-pane  active">
		<div class="panel panel-default">
			<div class="panel-heading">功能与人数选择</div>					
			<div class="panel-body">
				<div class="order_title">活动功能选择</div>
				<div class="had_selected_control" style="display:none">
						<?php  if(is_array($alist['controls'])) { foreach($alist['controls'] as $row) { ?>
							
								<input type="hidden" name="controls[]" class="<?php  echo $row;?>" value="<?php  echo $row;?>">
							
						<?php  } } ?>
				</div>
				<div class="had_selected_zzcontrol" style="display:none">
						<?php  if(is_array($alist['zz_controls'])) { foreach($alist['zz_controls'] as $row) { ?>
							
							<input type="hidden" name="zz_controls[]" class="<?php  echo $row;?>" value="<?php  echo $row;?>">
							
						<?php  } } ?>
				</div>
				<ul id="moduleList" class="moduleList order_line">
				<?php  if($uidModules=='all') { ?>
				  <?php  if(is_array($sys_modules)) { foreach($sys_modules as $row) { ?>
					<?php  if($row['isshow']==1) { ?>
					<li data-price="<?php  echo $row['money'];?>" data-control="<?php  echo $row['control'];?>" <?php  if(in_array($row['control'],$alist['controls'])) { ?>class="module_on"<?php  } ?>>
						<i class="<?php  echo $row['icon'];?>"></i>
						<a class="module-name"><?php  echo $row['name'];?></a><span>￥<?php  echo $row['money'];?></span>
						<?php  if(in_array($row['control'],$alist['controls'])) { ?><i class="fa fa-check-circle module_checked"></i><?php  } ?>
					</li> 
					<?php  } ?>
				  <?php  } } ?>
				<?php  } else { ?>
				   <?php  if(is_array($sys_modules)) { foreach($sys_modules as $skey => $row) { ?>
					<?php  if($row['isshow']==1) { ?>
					<?php  if(in_array($skey,$uidModules)) { ?>
					<li data-price="<?php  echo $row['money'];?>" data-control="<?php  echo $row['control'];?>" <?php  if(in_array($row['control'],$alist['controls'])) { ?>class="module_on"<?php  } ?>>
						<i class="<?php  echo $row['icon'];?>"></i>
						<a class="module-name"><?php  echo $row['name'];?></a><span>￥<?php  echo $row['money'];?></span>
						<?php  if(in_array($row['control'],$alist['controls'])) { ?><i class="fa fa-check-circle module_checked"></i><?php  } ?>
					</li>
					<?php  } ?>
					<?php  } ?>
				  <?php  } } ?>
				<?php  } ?>
				</ul>
			</div>
			<?php  if(!empty($sys_service)) { ?>
			<div class="panel-body">
				<div class="order_title">增值服务功能</div>
				<ul id="zzList" class="zzList order_line">
				  <?php  if(is_array($sys_service)) { foreach($sys_service as $row) { ?>
					<?php  if($row['zz_isshow']==1) { ?>
					<li data-price="<?php  echo $row['zz_money'];?>" data-zzcontrol="<?php  echo $row['zz_control'];?>" <?php  if(in_array($row['zz_control'],$alist['zz_controls'])) { ?>class="module_on"<?php  } ?>>
						<i class="<?php  echo $row['zz_icon'];?>"></i>
						<a class="module-name"><?php  echo $row['zz_name'];?></a><span>￥<?php  echo $row['zz_money'];?></span>
						<?php  if(in_array($row['zz_control'],$alist['zz_controls'])) { ?><i class="fa fa-check-circle module_checked"></i><?php  } ?>
					</li> 
					<?php  } ?>
				  <?php  } } ?>
				</ul>
			</div>
			<?php  } ?>
			<div class="panel-body">
				<div class="order_title">参与人数选择</div>
				<!--slider--->
				<div class="form-group" style="padding:20px;margin-bottom:0px;display:flex;display:-webkit-flex;">
					<div class="col-sm-12  col-xs-12 col-md-12">
						<input id="slider2" data-slider-id='Slider' type="text"/>
						<span class="label label-success">拖动上方绿色圆点即可更改活动人数</span>
						<?php  if($sys_max_freeman>0 && $sys_config['one_price']>0) { ?>
						<br><br>
						<span class="label label-danger">活动免费人数为:<?php  echo $sys_max_freeman;?>人以内</span>
						<?php  } ?>
					</div>
					<div style="display:inline-block;width:200px;float:left;margin-right:50px;">
							<div class="input-group">
								<input type="num" class="form-control" id="true_persons"  value="<?php  echo $alist['can_join'];?>"  />
								<div class="input-group-addon">人</div>
							</div>
					</div>
				</div>
				<!--slider--->
				<ul id="personsList" class="personsList order_line">
					<li data-price="<?php  echo $alist['can_join']*$sys_config['one_price']?>" class="module_on" id="persons_li">
						<i class="meepo-users"></i>
						<a class="module-name persons_num"><?php  echo $alist['can_join'];?>人</a><span class="persons_money">￥<?php  echo $alist['can_join']*$sys_config['one_price']?></span>
						<i class="fa fa-check-circle module_checked"></i>
					</li> 
				</ul>
			</div>
			<div class="form-group col-sm-12">
				<div id="choseModule" class="order_line">
					当前已选择 <span class="label label-success" id="num">0</span> 个功能，共 <span class="label label-danger" id="allPrice">￥0.00</span>
				</div>
			</div>
			<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2  control-label"></label>
					<div class="col-sm-9 ">
					  <?php  if($alist['is_pay']==2) { ?>
						<input type="submit" name="submit" value="保存" class="btn btn-success" />
						<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					  <?php  } else { ?>
					  <span class="label label-danger">该活动已经支付成功、不能选择活动功能!</span>
					  <span class="label label-success">如需开启更多功能、请重新新建活动!</span>
					  <?php  } ?>
					</div>
			</div>
		</div>
	</div><!--step2-->
	</form>
	<?php  } ?>
<script type="text/javascript">
var requireExtend = require.config({
	baseUrl: 'resource/js/app', //基础目录，将从此目录引用JS
	paths: {
		'bootstrap-slider': '../../../../addons/meepo_xianchang/template/resource/js/bootstrap-slider.min', //结尾不写.js
	}
});
var one_price = <?php  echo $sys_config['one_price'];?>;
var min_persons = <?php  echo $sys_config['min_persons'];?>;
var max_persons = <?php  echo $sys_config['max_persons'];?>;
var free_persons = <?php  echo $sys_max_freeman;?>;
<?php  if($alist['is_pay']!==1) { ?>
	$("#true_persons").val(parseInt("<?php  echo $alist['can_join'];?>"));
	$(".persons_num").text(parseInt("<?php  echo $alist['can_join'];?>")+"人");
	var money = (parseInt("<?php  echo $alist['can_join'];?>") - free_persons )*one_price;
	$("#can_join").val(parseInt("<?php  echo $alist['can_join'];?>"));
	$("#persons_li").attr("data-price",(money<0?0:money.toFixed(2)));
	$(".persons_money").text((money<0?0:money.toFixed(2))+"元");
	var all_modules = $('#moduleList li.module_on');
	var allPrice = (money<0?0:money);
	for(var i=0;i<all_modules.length;i++){
			allPrice += parseFloat($(all_modules[i]).data('price'));
	}
	var zz_modules = $('#zzList li.module_on');
	if(zz_modules.length>0){
		for(var i=0;i<zz_modules.length;i++){
				allPrice += parseFloat($(zz_modules[i]).data('price'));
		}
	}
	$('#num').html(($('#moduleList li.module_on').length+1));
	$("#total_money").val(allPrice.toFixed(2));
	$('#allPrice').html('￥' + allPrice.toFixed(2));
<?php  } ?>
requireExtend(["bootstrap-slider"],function(){
		var mySlider = $('#slider2').slider({
			step: 1,
			min: min_persons,
			max: max_persons,
			value:"<?php  echo $alist['can_join'];?>",
			handle: 'square',
			tooltip: 'always',
			<?php  if($alist['is_pay']!=1) { ?>
			formatter: function(value) {
				$("#true_persons").val(value);
				$(".persons_num").text(value+"人");
				var money = (value - free_persons )*one_price;
				$("#can_join").val(value);
				$("#persons_li").attr("data-price",(money<0?0:money.toFixed(2)));
				$(".persons_money").text((money<0?0:money.toFixed(2))+"元");
				var all_modules = $('#moduleList li.module_on');
				var allPrice = (money<0?0:money);
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
                $('#num').html(($('#moduleList li.module_on').length+1));
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
				return value+"人";
			}
			<?php  } else { ?>
			enabled:false
			<?php  } ?>
		});
		
		
		$('#true_persons').bind('blur', function() {  
				<?php  if($alist['is_pay']==1) { ?>
					$("#true_persons").val("<?php  echo $alist['can_join'];?>");
					util.message('此订单已经支付完成、无法修改活动人数.', '', 'error');
					return false;
				<?php  } ?>
				var value = parseInt($("#true_persons").val());
				if(isNaN(value)){ 
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数请输入大于'+min_persons+'、小于'+max_persons+'的数字', '', 'error');
					return;
				}
				if(value<min_persons){
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数不能少于'+min_persons+'人.', '', 'error');
					return;
				}
				if(value>max_persons){
					$("#true_persons").val(parseInt($("#can_join").val()));
					util.message('参与人数不能超过'+max_persons+'人.', '', 'error');
					return;
				}
				if(!$('.slider_box').is(':hidden')){
					$(".persons_num").text(value+"人");
					$("#can_join").val(value);
					var money = (value - free_persons )*one_price;
					$("#persons_li").attr("data-price",(money<0?0:money.toFixed(2)));
					$(".persons_money").text((money<0?0:money.toFixed(2))+"元");
					var all_modules = $('#moduleList li.module_on');
					var allPrice = money<0?0:money;
					console.log(allPrice);
					for(var i=0;i<all_modules.length;i++){
							allPrice += parseFloat($(all_modules[i]).data('price'));
					}
					var zz_modules = $('#zzList li.module_on');
					if(zz_modules.length>0){
						for(var i=0;i<zz_modules.length;i++){
								allPrice += parseFloat($(zz_modules[i]).data('price'));
						}
					}
					$('#num').html(($('#moduleList li.module_on').length+1));
					$("#total_money").val(allPrice.toFixed(2));
					$('#allPrice').html('￥' + allPrice.toFixed(2));
					mySlider.slider('setValue',value);
				}
		}); 
});
</script>
<script>
$(function(){
			
			<?php  if($oop=='gn') { ?>
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
			<?php  } ?>
			$('html,body').animate({scrollTop: '0px'}, 80);
			$("#open_gz").on('click',function(){
				$(".open_gz").show();
			});
			$("#close_gz").on('click',function(){
				$(".open_gz").hide();
			});
			$("#open_gps").on('click',function(){
				$(".open_gps").show();
			});
			$("#close_gps").on('click',function(){
				$(".open_gps").hide();
			});
			$('#zzList li').click(function(){
				<?php  if($alist['is_pay']==1) { ?>
					util.message('此订单已经支付完成、无法选择增值服务功能.', '', 'error');
					return false;
				<?php  } ?>
                var $this = $(this);
                if($this.hasClass('module_on')){
                   $('.had_selected_zzcontrol').find('.'+$this.attr('data-zzcontrol')).remove();
				     $this.removeClass('module_on').find('.module_checked').remove();
                }else{
					//if($('.had_selected_zzcontrol').find('.'+$this.attr('data-zzcontrol')).length==0){
						$('.had_selected_zzcontrol').append('<input type="hidden" name="zz_controls[]" class="'+$this.attr('data-zzcontrol')+'" value="'+$this.attr('data-zzcontrol')+'">');
					//}
					$this.addClass('module_on').append('<i class="fa fa-check-circle module_checked"></i>'); 
				}
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
            });
			$('#moduleList li').click(function(){
				<?php  if($alist['is_pay']==1) { ?>
					util.message('此订单已经支付完成、无法选择活动功能.', '', 'error');
					return false;
				<?php  } ?>
                var $this = $(this);
                if($this.hasClass('module_on')){
					$('.had_selected_control').find('.'+$this.attr('data-control')).remove();
                    $this.removeClass('module_on').find('.module_checked').remove();
                }else{
					if($('.had_selected_control').find('.'+$this.attr('data-control')).length<=0){
						$('.had_selected_control').append('<input type="hidden" name="controls[]" class="'+$this.attr('data-control')+'" value="'+$this.attr('data-control')+'">');
					}
					$this.addClass('module_on').append('<i class="fa fa-check-circle module_checked"></i>'); 
				}
				var num = $('#moduleList li.module_on').length;
				num = num + $('#personsList li.module_on').length;
				var all_modules = $('#moduleList li.module_on');
				var allPrice = 0.00;
				for(var i=0;i<all_modules.length;i++){
						allPrice += parseFloat($(all_modules[i]).data('price'));
				}
				if($('#personsList li.module_on').length>0){
						allPrice = allPrice + parseFloat($("#persons_li").attr("data-price"));
				}
				var zz_modules = $('#zzList li.module_on');
				if(zz_modules.length>0){
					for(var i=0;i<zz_modules.length;i++){
							allPrice += parseFloat($(zz_modules[i]).data('price'));
					}
				}
                $('#num').html(num);
				$("#total_money").val(allPrice.toFixed(2));
                $('#allPrice').html('￥' + allPrice.toFixed(2));
            });
});
function check_edit(){
	return true;
}
function check_gn(){
	var all_modules = $('#moduleList li.module_on');
	var check_modules = all_modules.length;
	if(check_modules<=0){
		util.message('请选择活动功能.', '', 'error');
		return false;
	}
	if($('#personsList li.module_on').length<=0){
		util.message('请选择活动参与人数.', '', 'error');
		return false;
	}
	return true;
}
</script>
<?php  } ?>
<?php  include $this->template('common/_footer')?>
