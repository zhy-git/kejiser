<?php
global $_GPC, $_W;
load()->func("tpl");

$uniacid=$_W['uniacid'];
$field_list = pdo_fetchall("SELECT * FROM ".tablename('chat_user_fields')." WHERE uniacid=:uniacid order by displayorder DESC ",array(":uniacid"=>$uniacid));
if($_GPC['type']=='del'){
	$del_id = $_GPC['del_id'];
	pdo_delete('chat_user_fields',array('id'=>$del_id));
	header('content-type:application/json;charset=utf8');
    $res['success'] = 1;
    exit(json_encode($res));
}
if(checksubmit('submit')){
	$count = count($_GPC['field_name']);
	$field_name=$_GPC['field_name'];
	//$sample_img=$_GPC['sample_img'];
	$field_type=$_GPC['field_type'];
	$field_length=$_GPC['field_length'];
	$field_id=$_GPC['field_id'];
	$desc=$_GPC['desc'];
	$displayorder=$_GPC['displayorder'];
	$is_ness  = $_GPC['is_ness'];
	$data = array();
	for($i=0;$i<$count;$i++){
		$data['uniacid']=$uniacid;
		$data['field_name']=$field_name[$i];
		$data['field_type']=$field_type[$i];
		$data['desc']=$desc[$i];
		$data['is_ness']=$is_ness[$i];
		
		//$data['sample_img']=tomedia($sample_img[$i]);

		$data['field_length']=$field_length[$i];
		/*if(empty($field_length[$i])){
			message('字符串长度不能为空',"","error");
			
		}*/
		$data['displayorder']=$displayorder[$i];
		$data['create_time']=time();

		if($field_id[$i]){
			if($data['field_name']){
				pdo_update('chat_user_fields',$data,array('id'=>$field_id[$i]));
			}
		}else{
			if($data['field_name']){
				pdo_insert('chat_user_fields',$data);
			}
		}
	}

	 message('保存成功！', $this->createWebUrl('user_info'), 'success');
}
include $this->template('user_info');