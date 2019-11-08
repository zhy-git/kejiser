<?php
/**
 * * @author 夺冠互动
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Dg_chatModuleProcessor extends WeModuleProcessor {
	public function respond() {
		global $_W,$_GPC;
		if(($this->message['event'] == 'subscribe'||$this->message['event'] == 'SCAN')&&!empty($this->message['content'])){
			$scenestr = $this->message ['content'];
		$i=strpos($scenestr,'_uid');
		$topic_id=substr($scenestr,8,$i-8);//房间名
		$y=strpos($scenestr, '_series');
//		load()->func("logging");
//		logging_run("房间名".$topic_id);
		if(empty($y)){
			$uid=substr($scenestr,$i+4);//用户id;
			
			$topic=pdo_fetch("select * from ".tablename('chat_topic')." where id=:id",array(":id"=>$topic_id));
			$topic_name=$topic['topic_name'];
			$topic_img=$topic['topic_icon'];
			$fromuser=pdo_fetch("select * from ".tablename('chat_users')." where id=:id",array(":id"=>$uid));
			$form_name=$fromuser['nickname'];
			return $this->respNews(array(
					'Title' => $topic_name,
					'Description' => "你已成功接受【".$form_name."】的邀请\n开播时间:".date("Y-m-d H:i:s",$topic['begin_time'])
							."\n主讲人:"
							.$topic['guest_name']
					."\n直播概要:"
							.$topic['topic_desc'],
					'PicUrl' => $topic_img,
					'Url' => $this->createMobileUrl('chat', array('topic_id' => $topic_id,'fuid'=>$uid))
			));
		}else{
			$uid=substr($scenestr,$i+4,$y-$i-4);
			logging_run("取的的为".$uid."总人".$scenestr);
			$series = pdo_fetch("select * from ".tablename('chat_room')." where id=:id",array(":id"=>$topic_id));
			$series_name=$series['room_name'];
			$series_img=$series['room_icon'];
			$fromuser=pdo_fetch("select * from ".tablename('chat_users')." where id=:id",array(":id"=>$uid));
			$form_name=$fromuser['nickname'];
			// logging_run('房间名：'.$series_name."人".$form_name."tu".$series_img);
			return $this->respNews(array(
					'Title' => $series_name,
					'Description' => "你已成功接受【".$form_name."】的邀请\n",
					'PicUrl' => $series_img,
					'Url' => $this->createMobileUrl('series_info', array('series_id' => $series['id'],'fuid'=>$uid))
			));
		}
		}
		
	}

}