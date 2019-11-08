<?php
/**
 * 夺冠直播模块定义
 *
 * @author 吴亚宾
 * @url http://wx.duoguan.com/
 */
defined('IN_IA') or exit('Access Denied');

class Dg_chatModuleCron extends WeModuleCron {
	
	public function doCronTips(){
		global $_W;
		load()->func("logging");
		$cfg=$this->module['config'];
		$temp_id=$cfg['lesson_templete'];
		$uniacid=$_W['uniacid'];
		
		if(empty($temp_id)){
			exit;
		}
		
		$begin_time=10*60;
		$end_time=60*60;

		$sql="SELECT A1.room_id,A1.openid,A2.id,A2.topic_name,A2.topic_desc,A2.begin_time,A2.begin_time-unix_timestamp(now()) FROM ".tablename("chat_subscribe")." A1 INNER JOIN 
			".tablename("chat_topic")." A2 ON A1.topic_id=A2.topic_id 
			WHERE A1.uniacid=:uniacid AND A2.end_time=0 AND A2.begin_time-unix_timestamp(now())>".$begin_time."
			AND A2.begin_time-unix_timestamp(now())<".$end_time." AND A1.sub_type='topic' AND NOT EXISTS(
			SELECT 1 FROM ".tablename("chat_cron")." A3 WHERE A2.id=A3.ext_info AND module_name='dg_chat')";		
		$records=pdo_fetchall($sql,array(":uniacid"=>$uniacid));
		
		if(empty($records)){
			exit;
		}
		
		$insert_sql="INSERT INTO ".tablename("chat_cron")."(uniacid,module_name,task_name,ext_info,create_time)
				SELECT A2.uniacid,'dg_chat','new_tips',A2.id,unix_timestamp(now()) FROM ".tablename("chat_topic")." A2 
				WHERE A2.uniacid=3 AND A2.end_time=0 AND A2.begin_time-unix_timestamp(now())>".$begin_time."
				AND A2.begin_time-unix_timestamp(now())<".$end_time."  AND NOT EXISTS(
				SELECT 1 FROM ".tablename("chat_cron")." A3 WHERE A2.id=A3.ext_info AND module_name='dg_chat')";
		pdo_query($insert_sql);
		
		$Account = WeAccount::create($_W['account']);
		
		foreach ($records as $record){
			$postdata=$this->getPostData($record);
			$temp_url=$this->createMobileUrl('chat_index',array("room_id"=>$record['room_id']));
			$temp_url=substr($temp_url, 1);
			$url=$_W['siteroot']."app".$temp_url;
			$Account->sendTplNotice($record['openid'],$temp_id,$postdata,$url,"#FF683F");
		}			
	}
		
	//获取模板消息数组
	public function getPostData($record){
		$post_data=array(
				'first' => array(
						'value' => "您预约的课程即将开始！",
						"color" => "#4a5077"
				),
				'keyword1' => array(
						'value' => $record['topic_name'],
						"color" => "#4a5077"
				),
				'keyword2' => array(
						'value' => date('Y/m/d H:i:s', $record['begin_time']),
						"color" => "#4a5077"
				),
				'remark' => array(
						'value' => "\r\n点击查看详情！",
						"color" => "#09BB07"
				)
		);		
	   return $post_data;
	}
}