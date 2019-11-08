<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<?php  if($turntable == 1) { ?>
	    <li><a  href="<?php  echo $this->createWebUrl('code');?>"><?php  echo $awardtitle;?>奖品管理</a></li>
    	<?php  } ?>
	    <li class="active"><a  href="#">编辑奖品</a></li>
	</ul>
	

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" value="<?php  echo $item['id'];?>" name="listid">

			<div class="form-group">
				<label class="control-label">奖品类型:</label>
				<div style="display: inline-block;margin-left: 30px;">
					<label class="radio-inline">
						<input type="radio" name="ptype" value="2" <?php  if($item['ptype']==2) { ?> checked="checked"<?php  } ?> onclick="$('#gcredit_0').hide();$('#gcredit_1').hide();"/>实物
					</label>
					<?php  if($turntable == 2||$turntable == 1||$turntable == 4) { ?>
					<label class="radio-inline">
						<input type="radio" name="ptype" value="1" <?php  if($item['ptype']==1) { ?> checked="checked"<?php  } ?> onclick="$('#gcredit_0').hide();$('#gcredit_1').show();"/>微信卡券
					</label>
					<?php  } ?>
					<label class="radio-inline">
						<input type="radio" name="ptype" value="0"  <?php  if($item['ptype']==0) { ?> checked="checked"<?php  } ?> onclick="$('#gcredit_1').hide();$('#gcredit_0').show();"/>红包
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="prizename" class="control-label">奖品名称:</label>
				<input type="text" class="form-control" name="prizename" value="<?php  echo $item['prizename'];?>">
			</div>
			<div class="form-group">
				<label for="sort" class="control-label">奖品排序:</label>
				<input type="text" class="form-control" name="sort" value="<?php  echo $item['sort'];?>">
				<div class="help-block">抽奖奖品出现的先后顺序，数字越高排越前(大转盘无效)</div>
			</div>
			<div class="form-group">
				<label class="control-label">奖品图片:</label>
				<div>
					<?php  echo tpl_form_field_image('awardsimg',$item['awardsimg']);?>
					<div class="help-block">奖品图片 图片大小200px X 150px</div>
				</div>
			</div>
			<div class="form-group" id="gcredit_1"<?php  if($item['ptype']!=1) { ?> style="display: none;"<?php  } ?>>
				<label for="couponid" class="control-label">卡券ID:</label>
				<input type="text" class="form-control" name="couponid" value="<?php  echo $item['couponid'];?>">
			</div>

			
			<div class="form-group" id="gcredit_0"  <?php  if($item['ptype']!=0) { ?>style="display: none;"<?php  } ?>>
				<label for="addetails" class="control-label">红包金额:</label>
				<div class="input-group">
					<input type="text" class="form-control" name="credit" value="<?php  echo $item['credit']/100?>" />
					<?php  if($turntable == 2) { ?>
					<span class="input-group-addon" style="border-left: none;border-right: none;">-</span>
					<input type="text" class="form-control" name="credit2" value="<?php  echo $item['credit2']/100?>" />
					<?php  } ?>
					<span class="input-group-addon" style="border-left: none;border-right: none;">元</span>
				</div>
				<div class="help-block">
				<?php  if($turntable == 2) { ?>可以设成区间，右侧必须大于左侧，只能正数不能为负数，可以设小数点后两位，最少0.01元。设成固定金额的话，左右一致就行。
				<?php  } else { ?>
				只能正数不能为负数，可以设小数点后两位，最少0.01元。
				<?php  } ?>
				</div>
			</div>

			<?php  if($turntable == 2||$turntable == 3||$turntable == 9) { ?>
			<div class="form-group">
				<label for="awardstotal" class="control-label">奖品数量:</label>
				<div class="input-group">
					<input name="awardstotal" type="text" class="form-control" value="<?php  echo $item['awardstotal'];?>"/>
					<span class="input-group-addon" >剩余:<?php  echo $item['awardstotal']-$item['prizedraw']?></span>
				</div>
			</div>
			
			<div class="form-group">
				<label for="awardspro" class="control-label">中奖概率:</label>
				<div class="input-group">
					<input name="awardspro" type="text" class="form-control" value="<?php  echo $item['awardspro'];?>"/>
					<span class="input-group-addon" >%(百分制)</span>
				</div>
			</div>
			<?php  } ?>

			<?php  if($turntable == 9) { ?>
			<div class="form-group">
				<label class="control-label">背景音乐<br>mp3格式</label>
				<div class="control-label">
					<?php  echo tpl_form_field_audio('prizetxt',$item['prizetxt']);?>
					<div class="help-block">开幕墙背景音乐，不上传则不使用背景音乐</div>
				</div>
			</div>
			<?php  } ?>


			<div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="op2" value="updataad" />
            <input type="hidden" name="turntable" value="<?php  echo $turntable;?>" />
        	</div>
		</div>
	</div>
	</form>

</div>
<!-- <div id="queding" class="hide">
	<span class="pull-right btn btn-primary" id="chengaddd" onclick="abc()">确定</span>
</div> -->
<script>
	require(['bootstrap'],function($){
		$('.btn').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
	});


$(function(){

    $(".check_all").click(function(){
       var checked = $(this).get(0).checked;

       $("input[type=checkbox]").attr("checked",checked);
    });
	$("input[name=deleteall]").click(function(){
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
		$.post('<?php  echo $this->createWebUrl('deleteAllcard')?>', {idArr:id},function(data){
			if (data.errno ==0)
			{
				location.reload();
			} else {
				alert(data.error);
			}


		},'json');
		}

	});
});
</script>
<script>
function drop_confirm(msg, url){
    if(confirm(msg)){
        window.location = url;
    }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>