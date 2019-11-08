<?php
class Dg_Base{	
	protected static $Tb_chat_ask_share="chat_ask_share";	
	protected static $Tb_chat_ask="chat_ask";
	protected static $Tb_chat_ask_answer="chat_ask_answer";
	protected static $Tb_chat_ask_banner="chat_ask_banner";
	protected static $Tb_chat_ask_follow="chat_ask_follow";
	protected static $Tb_chat_ask_score="chat_ask_score";
	protected static $Tb_chat_ask_summary="chat_ask_summary";
	protected static $Tb_chat_ask_summary_last="chat_ask_summary_last";
	protected static $Tb_chat_ask_tags="chat_ask_tags";
	protected static $Tb_chat_users="chat_users";

	/*根据id获取数据信息*/
	public static function getInfoById($uniacid,$id){
		$id=intval($id);
		if($id<=0){
			return false;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$records=pdo_fetch("SELECT * FROM ".tablename($tbname)." WHERE id=:id AND uniacid=:uniacid",array(":id"=>$id,":uniacid"=>$uniacid));
		if(empty($records)){
			return false;
		}
		return $records;
	}
	
	/*获取全部信息-数组方式*/
	public static function getAllInfo($uniacid){
		$uniacid=intval($uniacid);
		if($uniacid<=0){
			return false;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$records=pdo_fetchall("SELECT * FROM ".tablename($tbname)." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
		if(empty($records)){
			return false;
		}
		return $records;
	}
	
	/*获取全部信息-字典方式*/
	public static function getAllInfoDic($uniacid,$key){
		$uniacid=intval($uniacid);
		if($uniacid<=0){
			return false;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$records=pdo_fetchall("SELECT * FROM ".tablename($tbname)." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
		if(empty($records)){
			return false;
		}
		$dic_record=array();
		foreach ($records as $temp_record){
			$dic_record[$temp_record[$key]]=$temp_record;
		}
		unset($temp_record);
		unset($records);
		return $dic_record;
	}
	
	/*删除数据*/
	public  static  function delInfoById($uniacid,$id){
		$id=intval($id);
		if($id<=0){
			return false;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$result=pdo_fetch("DELETE FROM ".tablename($tbname)." WHERE id=:id AND uniacid=:uniacid",array(":id"=>$id,":uniacid"=>$uniacid));
		if($result!=1){
			return false;
		}
		return true;
	}
	
	/*插入数据*/
	public static function insertInfo($data){
		if(empty($data['uniacid'])){
			throw new Exception("uniacid 不能为空");exit;
		}
		if(empty($data)){
			throw new Exception("data参数不能为空");exit;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$row_count=pdo_insert($tbname,$data);
		return $row_count;
	}
	
	/*更新数据*/
	public static function updateInfo($data,$parameters){
		if(empty($data)){
			throw new Exception("data参数不能为空");exit;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$row_count=pdo_update($tbname,$data,$parameters);
		return $row_count;
	}
	
	public static function findFirstRecordByCodition($Condition){
		if(empty($Condition)){
			throw new Exception("Condition参数不能为空");exit;
		}
		if(empty($Condition[':uniacid'])){
			throw new Exception("uniacid 不能为空");exit;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$keys=array_keys($Condition);
		$temp_cs=array();
		foreach ($keys as $key){
			$temp_cs[]=substr($key, 1)."=".$key;
		}
		$last_result=join(" AND ", $temp_cs);
	    $records=pdo_fetch("SELECT * FROM ".tablename($tbname)." WHERE ".$last_result." LIMIT 1 ",$Condition);
		if(empty($records)){
			return false;
		}
		return $records;
	}
	
    /*根据条件_查找信息记录-不分页*/
	public static function findInfoByCondition($Condition){
		if(empty($Condition)){
			throw new Exception("Condition参数不能为空");exit;
		}
		if(empty($Condition[':uniacid'])){
			throw new Exception("uniacid 不能为空");exit;
		}
		$tbname=get_called_class();
		$tbname=strtolower($tbname);
		$keys=array_keys($Condition);
		$temp_cs=array();
		foreach ($keys as $key){
			$temp_cs[]=substr($key, 1)."=".$key;
		}
		$last_result=join(" AND ", $temp_cs);
	    $records=pdo_fetchall("SELECT * FROM ".tablename($tbname)." WHERE ".$last_result,$Condition);
		if(empty($records)){
			return false;
		}
		return $records;
	}
	
	/*根据条件_查找信息记录数量*/
	public static function findInfoCountByCondition($Condition){
		if(empty($Condition)){
			throw new Exception("Condition参数不能为空");exit;
		}
		$tbname=get_called_class();$tbname=strtolower($tbname);
		$keys=array_keys($Condition);
		$temp_cs=array();
		foreach ($keys as $key){
			$temp_cs[]=substr($key, 1)."=".$key;
		}
		$last_result=join(" AND ", $temp_cs);
		$records=pdo_fetchcolumn("SELECT COUNT(0) FROM ".tablename($tbname)." WHERE ".$last_result,$Condition);
		if(empty($records)){
			return 0;
		}
		return $records;
	}
}
?>