<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main">
<?php  if(is_array($list)) { foreach($list as $row) { ?>
	<div class="panel panel-primary">
    <div class="panel-heading">【<?php  echo $row['name'];?>】下的所有链接和二维码</div>
    <div class="panel-body">
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="-2" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="新版手机端消息">新版手机端消息</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="1" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="手机端消息">手机端消息</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="2" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="报名地址">手机端报名地址</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="3" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="签到地址">手机端签到地址</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="4" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="惩罚大转盘">惩罚大转盘</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="5" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="抢红包">手机端抢红包</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="6" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="摇一摇">手机端摇一摇</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="-3" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="数钱">手机端数钱</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="-4" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="爬烟囱">手机端爬烟囱</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="7" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="嘉宾">手机端嘉宾</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="8" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="投票">手机端投票</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="-1" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="商城">手机购物商城</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="9" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕抽奖">大屏幕抽奖</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="10" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕抢红包">大屏幕抢红包</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="11" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕摇一摇">大屏幕摇一摇</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="12" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕开幕墙">大屏幕开幕墙</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="13" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕闭幕墙">大屏幕闭幕墙</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="14" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕嘉宾">大屏幕嘉宾</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="15" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕弹幕">大屏幕弹幕</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="16" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕许愿树">大屏幕许愿树</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="17" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕幸运号">大屏幕幸运号</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="18" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕幸运手机号">大屏幕幸运手机号</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="19" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕霸屏">大屏幕霸屏</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="20" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕对对碰">大屏幕对对碰</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="21" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕抽奖箱">大屏幕抽奖箱</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="22" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕消息墙">大屏幕消息墙</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="23" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕3D墙">大屏幕3D墙</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="24" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕投票">大屏幕投票</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="25" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕大转盘">大屏幕大转盘</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="26" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕地址">大屏幕地址</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="27" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="手绘签到">手绘签到</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="28" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="普通签到">普通签到</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="29" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="相册">相册</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="30" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="大屏幕数钱">大屏幕数钱</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="31" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="web拍照签到">web拍照签到</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="32" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="自定义抽奖">自定义抽奖</a>
      <a href="javascript:void(0);" class="btn getLink btn-default" data-id="33" data-rid="<?php  echo $row['id'];?>" data-placement="top" data-title="圣诞老人爬烟囱">圣诞老人爬烟囱</a>
    </div>
  </div>
<?php  } } ?>

</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span id="title">签到人员</span>功能的二维码和链接</h4>
      </div>
      <div class="modal-body">
        <p><img id="showQrcode" src=""></p>
        <p>链接地址：<span id="showUrl"></span></p>
        <p id="Tip">您可以直接把二维码图片另存为，保存到本地电脑上使用。</p>
        <a target="_blank" id ="open_dpm" href="#" type="button" class="btn btn-danger " style="display: none">打开大屏幕</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(".getLink").on("click",function(){
    var itemID = $(this).data("id"),
        rid = $(this).data("rid"),
        title = $(this).data("title");

    $.post('<?php  echo $this->createWebUrl('all_link')?>', {itemID:itemID,rid:rid},function(data){
      if (data.flag ==1){
        $('#title').html(title);
        $('#showUrl').html(data.url);
        $('#showQrcode').attr('src',data.qrcode);
        $('#open_dpm').attr('href',data.url);
        $('#myModal').modal('show')
        if(itemID >8){
          $('#Tip').hide();
          $('#open_dpm').show();
        }else{
          $('#Tip').show();
          $('#open_dpm').hide();
        }
      } else {
        alert(data.msg);
      }
    },'json');
    
});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>