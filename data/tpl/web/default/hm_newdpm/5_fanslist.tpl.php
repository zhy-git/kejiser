<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'manage') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('manage');?>">活动管理</a></li>
		<li<?php  if($_GPC['do'] == 'fanslist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('fanslist',array('rid' => $rid));?>">参与粉丝</a></li>
		<li<?php  if($_GPC['do'] == 'awardlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('awardlist',array('rid' => $rid));?>">中奖名单</a></li>
		<li<?php  if($_GPC['do'] == 'cashprize') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('cashprize',array('rid' => $rid));?>">提现管理</a></li>
		<!-- <li<?php  if($_GPC['do'] == 'rankinglist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('rankinglist',array('rid' => $rid));?>">状元榜单</a></li> -->
		<!-- <li<?php  if($_GPC['do'] == 'jifenlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('jifenlist',array('rid' => $rid));?>">积分榜</a></li> -->
		<li><a href="<?php  echo url('platform/reply/post',array('m'=>'hm_newdpm', 'rid' => $rid));?>">编辑规则</a></li>
		 <li<?php  if($_GPC['do'] == 'addfans') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('addfans',array('rid' => $rid));?>">增加用户</a></li>

	</ul>
    <div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
        	<input type="hidden" name="m" value="hm_newdpm" />
        	<input type="hidden" name="do" value="fanslist" />
        	<input type="hidden" name="rid" value="<?php  echo $_GPC['rid'];?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">微信名称</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="nickname" id="" type="text" value="<?php  echo $_GPC['nickname'];?>" placeholder="名称">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">openid</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="from_user" id="12" type="text" value="<?php  echo $_GPC['from_user'];?>" placeholder="openid">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">性别</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<select name="sex" class="form-control" style="float:left">
						<option value="" <?php  if($_GPC['sex']=='') { ?>selected<?php  } ?>>全部</option>
						<option value="1" <?php  if($_GPC['sex']=='1') { ?>selected<?php  } ?>>女</option>
						<option value="2" <?php  if($_GPC['sex']=='2') { ?>selected<?php  } ?>>男</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<select name="zhongjiang" class="form-control" style="float:left">
						<option value="" <?php  if($_GPC['zhongjiang']=='') { ?>selected<?php  } ?>>全部</option>
						<option value="1" <?php  if($_GPC['zhongjiang']=='0') { ?>selected<?php  } ?>>未中奖</option>
						<option value="2" <?php  if($_GPC['zhongjiang']=='1') { ?>selected<?php  } ?>>已中奖</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">手机号码</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="mobile" id="" type="text" value="<?php  echo $_GPC['mobile'];?>" placeholder="手机号码"> 
				</div>
				<div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>			

		</form>
	</div>
</div>
	<div class="panel panel-default">
		<div class="panel-heading">删除测试帐号数据</div>
		<form class="form-horizontal">
			<div class="form-group" style="margin-top: 14px;">
				<label class="col-xs-12 col-sm-2 col-md-2  col-lg-1 control-label ">微信openid</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input type="text" id="del_openid" class="form-control" placeholder="" name="del_openid" value="">
				</div>
				<div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default delete"> <span class="delete">删除</span></button>
				</div>
			</div>
		</form>
	</div>
	 <button class="btn btn-success" onclick="location.href='<?php  echo $this->createWebUrl('download',array('rid'=>$_GPC['rid']))?>'" type="button"><i class="fa fa-search"></i> 导出数据</button>
	<button class="btn btn-success" style="display: none" onclick="location.href='<?php  echo $this->createWebUrl('del_txt')?>'" type="button">清除桌面应用数据</button>
	<button id="gengxinqr" class="btn btn-primary" type="button" style="float: right;margin-left: 15px;">一键修复头像</button>

	<div class="panel panel-default">
       <div class="panel-heading">

	       <div class="alert" style="margin-bottom:0;">
		         本次活动参与粉丝总数：<?php  echo $num1;?>个　　中奖数：<?php  echo $num2;?>个　　未中奖：<?php  echo $num3;?>个　　
		   </div>
        </div>
		<form method="post" class="form-horizontal" id="formfans">
			<input type="hidden" name="op" value="del" />
			<div style="position:relative">
				<div class="panel-body table-responsive">
					<table class="table table-hover" style="position:relative;table-layout: auto;">
						<thead class="navbar-inner">
						<tr>
							<th class='with-checkbox' style="width:30px;">
								<input type="checkbox" class="check_all" />
							</th>
							<th style="width:50px;">序号</th>
							<th style="width:80px;">头像</th>
							<th style="width:100px;">微信名称</th>
							<th style="width:100px;">真实姓名</th>
							<th style="width:120px;">手机号码</th>
							<th style="width:320px;">微信OpenId</th>
							<th style="width:150px;">公司/部门</th>
							<th style="width:150px;">参与时间</th>
							<th style="width:120px;">详情</th>
							<th style="width:140px;">性别</th>
							<?php  if($reply['isbaoming']==1) { ?>
							<th style="width:120px;">报名状态</th>
							<?php  } ?>
							<th style="width:180px;">操作</th>
						</tr>
						</thead>
						<tbody>
						<?php  if(is_array($list)) { foreach($list as $row) { ?>
							<?php  if(empty($row['neiding'])) { ?>
							<tr>
								<td class="with-checkbox">
									<input type="checkbox" name="check" value="<?php  echo $row['id'];?>">
								</td>
								<td><?php  echo $row['id'];?></td>
								<td>
									<img style="width: 75px;height: 75px" src="<?php  echo tomedia($row['avatar'])?>">
								</td>
								<td> <?php  echo $row['nickname'];?></td>
								<td> <?php  echo $row['realname'];?></td>
								<td><?php  echo $row['mobile'];?></td>
								<td><?php  echo $row['from_user'];?></td>
								<td><?php  echo $row['address'];?></td>
								<td><?php  echo date('Y/m/d H:i',$row['createtime']);?></td>
								<td>
									<?php  if($row['zhongjiang']==0) { ?>
									未中奖
									<?php  } else { ?>
									<a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-success btn-sm awardinfo" style="width:130px;" data-toggle="tooltip" data-placement="top" title="中奖详情">
										<i class="fa fa-gift"></i>
										中奖详情[<?php  echo $row['awardinfo'];?>]
									</a>
									<?php  } ?>
								</td>
								<td>
									<!--<a href="<?php  echo $this->createWebUrl('SetfansSex',array('sex'=>1,'fansid'=>$row['id']))?>" class="btn-success btn-sm"  style="display: inline-block">未填写</a>-->

									<?php  if($row['sex']== 1) { ?>
									<a href="<?php  echo $this->createWebUrl('SetfansSex',array('sex'=>2,'fansid'=>$row['id']))?>" class="btn-primary btn-sm " style="display: inline-block">男</a>
									<?php  } else if($row['sex']== 2) { ?>
									<a href="<?php  echo $this->createWebUrl('SetfansSex',array('sex'=>1,'fansid'=>$row['id']))?>" class="btn-success btn-sm " style="display: inline-block">女</a>
									<?php  } else { ?>
									<a href="<?php  echo $this->createWebUrl('SetfansSex',array('sex'=>1,'fansid'=>$row['id']))?>" class="btn-success btn-sm " style="display: inline-block">未填写</a>
									<?php  } ?>
								</td>
								<?php  if($reply['isbaoming']==1) { ?>
								<td>
									<?php  if($row['isbaoming']==1) { ?>
									<button class="btn btn-success" disabled > <span>已经报名</span></button>
									<?php  } else { ?>
									<button class="btn btn-default" disabled> <span>已经签到</span></button>
									<?php  } ?>
								</td>
								<?php  } ?>
								<td>
									<?php  if($row['is_back']!= 0) { ?>
									<a href="<?php  echo $this->createWebUrl('SetfansStatus',array('is_back'=>0,'fansid'=>$row['id']))?>" class="btn btn-primary btn-sm lahei" style="width:60px;">恢复</a>
									<?php  } else { ?>
									<a href="<?php  echo $this->createWebUrl('SetfansStatus',array('is_back'=>1,'fansid'=>$row['id']))?>" class="btn btn-success btn-sm lahei" style="width:60px;">拉黑</a>
									<?php  } ?>
									<?php  if($fanshb['is_setadmin']==1) { ?>
										<?php  if(empty($row['is_admin'])) { ?>
										<a href="<?php  echo $this->createWebUrl('SetfansStatus',array('op'=>'set_admin','fansid'=>$row['id'],'rid'=>$row['rid']))?>" class="btn btn-info btn-sm " >设置为管理员</a>
										<?php  } else { ?>
										<a href="<?php  echo $this->createWebUrl('SetfansStatus',array('op'=>'del_admin','fansid'=>$row['id'],'rid'=>$row['rid']))?>" class="btn btn-danger btn-sm " >取消管理员</a>
										<?php  } ?>
									<?php  } ?>
								</td>

							</tr>
							<?php  } ?>
						<?php  } } ?>
						<tr>
							<td colspan="2">
								<input type="button" class="btn btn-primary" name="lahei_fans" value="批量拉黑" />
							</td>
							<td colspan="2">
								<input type="button" class="btn btn-danger" name="deleteall_fans" value="批量删除" />
							</td>
							<?php  if($types==2) { ?>
							<td colspan="2">
								<input type="button" class="btn btn-primary" name="setting_neiding" value="批量设置内定" />
							</td>
							<?php  } ?>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
     </div>
<?php  echo $pager;?>
</div>
<div style="display: none;position: fixed;background: rgba(0,0,0,.6);width: 100%;height: 100%;z-index: 9999999;top: 0;left: 0;right: 0;bottom: 0" id="myModal3">
	<div style="position: relative;width: 50%;margin-top: 20%;text-align: center;margin-left: auto;margin-right: auto">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div>
		<div style="color: #FFD60E;font-size: 18px;" id="gengxinhuasu">正在更新头像,请不要关闭本页面....</div>
	</div>
</div>
<div style="width: 100%;height: 100%;background: rgba(0,0,0,0.6);position: fixed;top: 0px;left: 0px;display: none;" class="cztl">
	<div style="width: 60%;height: 300px;background: #eee;position: absolute;top: 50%;left:50%;margin-left: -30%;margin-top: -150px;">
		<div style="height: 45px;width: 50%;position: absolute;top: 50%;left: 50%;margin-top: -22px;margin-left: -25%">
			<input type="number" placeholder="请输入要修改的值" style="width: 100%;height: 100%" class="number">
			<div style="margin-top: 20px;text-align: center">
				<button class="btn btn-success isokl" style="width: 120px;">确定</button>
				<button class="btn btn-default isnot" style="width: 120px;">取消</button>
			</div>

		</div>

	</div>
</div>

<div id="guanbi" class="hide">
	<span type="button" class="pull-right btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</span>
</div>
<script>
	require(['jquery', 'util'], function($, u){


		$(".delete").click(function(){
			var del_openid = $("#del_openid").val();

			var submitData = {
				del_openid:del_openid,

			}

			$.post("<?php  echo $this->createWebUrl('delete_openid',array('rid'=>$rid))?>", submitData, function(data) {

				if (data.success == 1) {

					alert(data.msg);
					location.href="<?php  echo $this->createWebUrl('fanslist', array('rid' => $rid))?>";

				} else {
					alert(data.msg);
					location.href="<?php  echo $this->createWebUrl('fanslist', array('rid' => $rid))?>";
				}
			},"json")

			return false;
		})

		$('.awardinfo').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/axq',array('m' => 'hm_newdpm','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝', '', 'error');
				} else {
					var obj = u.dialog('中奖详细情况', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})

        $('#gengxinqr').click(function(){
            var b = confirm("确定要修复部分不显示的头像,此操作将消耗大量服务器资源,请在访问量少的情况下操作！");
            if( b == true){
                $("#myModal3").show();
                var submitData = {};
                $.post("<?php  echo $this->createWebUrl('NewAllimg',array('rid'=>$rid))?>", submitData, function(idata) {
                    if (idata.flag == 1) {
                        var msg = "成功更新了";
                        alert(msg)
                        location.href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid))?>";
                    } else {
                        alert(idata.msg);
                    }
                },"json");
            }
        })

		$(".recharge").click(function(){
			$('.cztl').show()

			var num_ids = $(this).data("id");

			$(".isokl").click(function(){
				var nums = $(".number").val();
				if(nums==''){
					alert("请输入正确的状元数")
				}
				var submitData = {
					nums:nums,
					num_ids:num_ids,
				}
				$.post('<?php  echo $this->createWebUrl('chongzhi')?>', submitData, function(data) {

					if (data.success == 1) {

						alert(data.msg);
						location.href="<?php  echo $this->createWebUrl('fanslist', array('rid' => $rid))?>";

					} else {
						alert(data.msg);
					}
				},"json")
			})
			return false;
		});
		$(".isnot").click(function(){
			$('.cztl').hide();
		})
	});

	$(function(){

		$(".check_all").click(function(){
			var checked = $(this).get(0).checked;

			$("input[type=checkbox]").attr("checked",checked);
		});
		$("input[name=lahei_fans]").click(function(){
			var check = $("input:checked");

			if(check.length<2){
				alert('请选择要拉黑的记录!');
				return false;
			}
			if( confirm("确认要拉黑选择的记录?")){
				var id = new Array();
				check.each(function(i){
					id[i] = $(this).val();
				});
				$.post('<?php  echo $this->createWebUrl('Back_fans')?>', {idArr:id},function(data){
					if (data.flag ==1)
					{
						alert(data.msg);
						location.reload();
					} else {
						alert(data.msg);
					}


				},'json');
			}

		});
		$("input[name=deleteall_fans]").click(function(){
			var check = $("input:checked");

			if(check.length<2){
				alert('请选择要删除的记录!');
				return false;
			}
			if( confirm("确认要删除选择的记录?")){
				var id = new Array();
				check.each(function(i){
					id[i] = $(this).val();
				});
				$.post('<?php  echo $this->createWebUrl('Deleall_fans',array('rid'=>$rid))?>', {idArr:id},function(data){
					if (data.flag ==1)
					{
						alert(data.msg);
						location.reload();
					} else {
						alert(data.msg);
					}


				},'json');
			}

		});
		<?php  if($types==2) { ?>
		$("input[name=setting_neiding]").click(function(){
			var check = $("input:checked");

			if(check.length<2){
				alert('请选择要内定的记录!');
				return false;
			}
			if( confirm("确认要内定选择的记录?")){
				var id = new Array();
				check.each(function(i){
					id[i] = $(this).val();
				});
				$.post('<?php  echo $this->createWebUrl('setting_fans_nd',array('rid'=>$rid,'awardid'=>$award_id))?>', {idArr:id},function(data){
					if (data.flag ==1)
					{
						alert(data.msg);
						location.reload();
					} else {
						alert(data.msg);
					}


				},'json');
			}

		});
		<?php  } ?>
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>