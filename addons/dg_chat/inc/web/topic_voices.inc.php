<?php
global $_W,$_GPC;
load()->func('tpl');
$id=$_GPC['topic_id'];
$uniacid=$_W['uniacid'];
$operation=!empty($_GPC['op']) ? $_GPC['op'] : "display";
$topic=pdo_fetch("select * from ".tablename('chat_topic')." where id=:id",array(":id"=>$id));
$user=pdo_fetch("select * from ".tablename('chat_users')." where openid=:openid and uniacid=:uniacid",array(":openid"=>$topic['create_openid'],":uniacid"=>$uniacid));
$records=pdo_fetchall("select * from ".tablename('chat_subjects')." where topic_id=:id and uniacid=:uniacid",array(":id"=>$id,":uniacid"=>$uniacid));
$total=pdo_fetchcolumn("select count(1) from ".tablename('chat_subjects')." where topic_id=:id and uniacid=:uniacid",array(":id"=>$id,":uniacid"=>$uniacid));
if($operation=="post"){
    if(checksubmit()){
        empty($_GPC['sub_content'])&&message('音频不能为空');
        empty($_GPC['sub_content_ext'])&&message('音频时间不能为空');
        $htpi=stripos($_GPC['sub_content'],'http');
        $data=array(
                'uniacid'=>$_W['uniacid'],
                'room_id'=>$topic['room_id'],
                'topic_id'=>$id,
                'sub_type'=>'voice',
                'sub_status'=>1,
                'owner_uid'=>$user['id'],
                'owner_openid'=>$user['openid'],
                'owner_nickname'=>$user['nickname'],
                'owner_avatar'=>$user['avatar'],
                'role_name'=>'管理员',
                'create_time'=>time(),
                'sub_content'=>$_GPC['sub_content'],
                'sub_content_ext'=>$_GPC['sub_content_ext']
        );
		if($_W['setting']['remote'] == 0){
			$sub_content=ATTACHMENT_ROOT.$_GPC['sub_content'];
			$data['sub_content'] = $_GPC['sub_content']; 
		}else{
			$sub_content=$_W['attachurl'].$_GPC['sub_content'];
			$data['sub_content'] = $sub_content; 
		}
        pdo_insert('chat_subjects',$data);
        $voice_id=pdo_insertid();
		if($_W['setting']['remote'] == 0){
			$file_key="sub_voice_".$voice_id;
			$qiniu=$this->upload_qiniu($sub_content,$file_key);
			if($qiniu!=false){
				pdo_update('chat_subjects',array("sub_content_down"=>$file_key),array('id'=>$voice_id));
				message("语音上传成功",referer,'success');
			}
		}else{
			message("语音上传成功",referer,'success');
		}
        
    }

}
include $this->template('topic_voices');