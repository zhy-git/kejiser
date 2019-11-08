<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">

	    <li class="active"><a  href="#">爬烟囱设置</a></li>
	    <li ><a  href="<?php  echo $this->createWebUrl('webmshake_show', array('rid' => $rid,'style'=>'mshake'))?>">爬烟囱场次</a></li>
	</ul>

	<div class="panel panel-default">
		<div class="panel-body">
		<form action="" method="post" class=" form" enctype="multipart/form-data">
			<input type="hidden" name="mshakereplyid" value="<?php  echo $mshakereply['id'];?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">直接调用链接</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" id="link" class="form-control" placeholder="" name="link" disabled="disabled" value="<?php  echo $url;?>">
					<div class="help-block"><b style="color: #FC110D">第一次建立，必须保存后再调用这个链接</b>，需要拥有高级接口权限的！</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码图片调用</label>
				<div class="col-sm-9 col-xs-12">
					<img src="<?php  echo $imgUrl;?>">
					<div class="help-block"><b style="color: #FC110D">第一次建立规则，必须保存后再使用这个二维码图片</b>，需要拥有高级接口权限的！</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启互动</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="isshake" value="0" <?php  if($mshakereply['isshake']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="isshake" value="1" <?php  if($mshakereply['isshake']==1) { ?> checked="checked"<?php  } ?>/>开启
					</label>
					<div class="help-block">默认关闭。</div>
				</div>
			</div>
			<div class="form-group" style="display: block">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">是否成功开启互动端口</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="port" value="0" <?php  if($mshakereply['port']==0) { ?> checked="checked"<?php  } ?>/>关闭
					</label>
					<label class="radio-inline">
						<input type="radio" name="port" value="1" <?php  if($mshakereply['port']==1) { ?> checked="checked"<?php  } ?>/>已开启
					</label>
					<div class="help-block">默认关闭(不懂咨询开发者QQ：3296170993，不然无法进行互动，这个很重要)。</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">标题</label>
				<div class="col-sm-9 col-xs-12">
					<input type="text" name="title" class="form-control" value="<?php  echo $mshakereply['title'];?>">
					<div class="help-block">显示在页面的标题</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">大屏幕背景设置</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_pdbg', $mshakereply['shake_pdbg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：1440*900</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">手机背景设置</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_bg', $mshakereply['shake_bg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：750*1334</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">手机端摇一摇图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_myyybg', $mshakereply['shake_myyybg']);?>
					<div class="help-block">不上传使用默认背景，尺寸为：540*500</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频背景</label>
				<div class="col-sm-9 col-xs-12">
					<?php  if(IMS_VERSION >= 0.8) { ?>
					<?php  echo tpl_form_field_video('shake_vodio', $mshakereply['shake_vodio']);?>
					<div class="help-block">视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } else { ?>
					<input type="text" class="form-control" name="shake_vodio" value="<?php  echo $mshakereply['shake_vodio'];?>">
					<div class="help-block">由于系统0.8以下版本无法上传视频，所以，请直接通过FTP把视频传到服务器，再把文件名填入这边，视频背景mp4格式，控制在3M以内，背景视频只能播放背景效果，无法播放声音</div>
					<?php  } ?>
				</div>
			</div>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">背景音乐<br>mp3格式</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_audio('shake_music',$mshakereply['shake_music']);?>
					<div class="help-block">现场活动背景音乐，不上传则不使用背景音乐</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇的最大次数</label>
				<div class="col-sm-9 col-xs-12">
					<input type="number" name="shake_maxnum" class="form-control" value="<?php  echo $mshakereply['shake_maxnum'];?>">
					<div class="help-block">谁最先摇到这个数就是第一名，后面名次依次往后推，建议设100以上</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">摇一摇人数限制</label>
				<div class="col-sm-9 col-xs-12">
					<div class="input-group">
						<input type="number" name="shake_mannum" class="form-control" value="<?php  echo $mshakereply['shake_mannum'];?>">
						<span class="input-group-addon" >人</span>
					</div>
					<div class="help-block">每次摇一摇的人数限制，必须大于10人</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">默认互动图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_pdbg2', $mshakereply['shake_pdbg2']);?>
					<div class="help-block">不上传使用默认图，尺寸为：114*120</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">默认动图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_maimg', $mshakereply['shake_maimg']);?>
					<div class="help-block">不上传使用默认图必须gif格式，尺寸为：114*120</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">默认用户头像</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_maimg2', $mshakereply['shake_maimg2']);?>
					<div class="help-block">不上传使用默认用户头像，尺寸为：200*200</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-xs-12 col-sm-3 col-md-2">默认障碍图</label>
				<div class="col-sm-9 col-xs-12">
					<?php  echo tpl_form_field_image('shake_banner', $mshakereply['shake_banner']);?>
					<div class="help-block">不上传使用默认图，尺寸为：80*100</div>
				</div>
			</div>


			<div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="op" value="addad" />
        	</div>
		</form>
		</div>
	</div>


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