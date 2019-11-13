<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="main" style="padding-top:5px;">
 <form id="payform" action="" method="post" enctype="multipart/form-data" method="post" class="form-horizontal form"
 onsubmit="return validate();">
            <div class="panel panel-default">

                <div class="form-group" style="display: block;">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red">*</span>推荐用户</label>
                    <div class="col-sm-7 col-xs-6">
                        <div class="input-group ">
                            <input type="text" name="link" id="user_nickname" class="form-control" value="<?php  echo $chat_user['agent_nickname'];?>" onblur="seluser()">
                            <input type="hidden" name="select_uid" id="select_uid" value="<?php  echo $chat_user['agent_id'];?>">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn_seluser" type="button" >选择用户</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>分销商权限</label>
                    <div class="col-sm-9 col-xs-6">
                        <div class="input-group">
                            <label class="radio-inline">
                                <input type="radio" name="is_agent" value="1" <?php  if($chat_user['is_agent'] == 1) { ?>checked="checked"<?php  } ?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="is_agent" value="0" <?php  if($chat_user['is_agent'] == 0) { ?>checked="checked"<?php  } ?> >否
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>设置为分院用户</label>
                    <div class="col-sm-9 col-xs-6">
                        <div class="input-group">
                            <label class="radio-inline">
                                <input type="radio" name="branchcourt" value="1" <?php  if($chat_user['branchcourt'] == 1) { ?>checked="checked"<?php  } ?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="branchcourt" value="0" <?php  if($chat_user['branchcourt'] == 0) { ?>checked="checked"<?php  } ?> >否
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style="color:red;">*</span>设置招商员权限</label>
                    <div class="col-sm-9 col-xs-6">
                        <div class="input-group">
                            <label class="radio-inline">
                            <input type="radio" name="merchants" value="1" <?php  if($chat_user['merchants'] == 1) { ?>checked="checked"<?php  } ?> >是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="merchants" value="0" <?php  if($chat_user['merchants'] == 0) { ?>checked="checked"<?php  } ?>>否
                        </label></div>
                    </div>
                </div>

            </div>
            <div class="form-group col-sm-12">
            <input name="do-submit" type="submit" value="提交" class="btn btn-primary col-lg-1" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
        </div>
        </div>
    </form>
</div>

<div class="modal fade" id="user-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:800px;top:360px;">
            <div class="modal-content">
                <form action="./index.php?c=extension&a=module&do=info&" method="post" enctype="multipart/form-data" class="form-horizontal form" id="form-info">
                    <input type="hidden" name="m" value=""/>
                    <div class="modal-header">
                        <button type="button" class="close close_user" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4>选择用户</h4>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" value="" id="keyword_user" placeholder="请输入用户名称关键字">
                            <span class="input-group-btn"><button type="button" class="btn btn-default" onclick="search_users();">搜索</button></span>
                        </div>
                    </div>
            <div id="module-menus" style="padding-top:5px;"><div style="max-height:500px;overflow:auto;min-width:750px;">
            <table class="table table-hover" style="min-width:750px;">
                <tbody id="user_list">
                </tbody>
            </table>
                    </div></div>
                 </div>

                </form>
            </div>
        </div>
</div>

<script type="text/javascript">
function getuserRows(data){
    var html='';
    for(i=0;i<data.length;i++){
        html+='<tr>';
        html+='<td><img src="'+data[i].avatar+'" style="width:30px;height:30px;padding1px;border:1px solid #ccc"> '+data[i].nickname+'</td>';
        html+='<td></td>';
        html+='<td></td>';
        html+='<td style="width:80px;"><a href="javascript:;" onclick="select_user(this)" link_name='+data[i].nickname+' user_uid='+data[i].id+'>选择</a></td>';
        html+='</tr>';
    }
    return html;
}


function search_users(){
    var keyword_user=$("#keyword_user").val();
    $("#user_list").empty();

    $.post(location.href,{keyword_user:keyword_user},function(result){
        var html=getuserRows(result.data);
        $("#user_list").append(html);
    });
}
function  seluser(){
    var user_nickname = $("#user_nickname").val();
    if(user_nickname !=''){
        $.post(location.href,{user_nickname:user_nickname},function(result){
            if(result.success == 1){
                 $("#select_uid").val(result.data);
            }else{
                alert(result.data);
            }
        });
    }

}

function select_user(obj){
   $("#user_nickname").val($(obj).attr('link_name'));
   $("#select_uid").val($(obj).attr('user_uid'));
   $('#user-info').modal('hide');
}

$(function(){
    $(".btn_seluser").click(function(){
        $('#user-info').modal('show');
    });

    $(".close_user").click(function(){
        $('#user-info').modal('hide');
        $("#keyword_user").val('');
        $("#user_list").empty();
    });
});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>