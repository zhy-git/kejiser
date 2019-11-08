<?php
/**
 * 夺冠直播模块定义
 *
 * @author 吴亚宾
 * @url http://wx.duoguan.com/
 */
defined('IN_IA') or exit('Access Denied');

class Dg_chatModule extends WeModule {
	public function settingsDisplay($settings) {
		// 声明为全局才可以访问到.
		global $_W, $_GPC;
		empty($settings['cash_money']) && $settings['cash_money']="10.00";
		empty($settings['create_room']) && $settings['create_room']="1";
		empty($settings['plat_percent']) && $settings['plat_percent']="2";
		
		if(checksubmit()) {
			empty($_GPC['qn_accesskey']) && message('请填写accesskey');
			empty($_GPC['qn_secretkey']) && message('请填写secretkey');
			empty($_GPC['qn_bucket']) && message('请填写bucket');
			empty($_GPC['qn_queuename']) && message('请填写队列名称');
			empty($_GPC['qn_domain']) && message('请填写七牛绑定的域名');
			empty($_GPC['plat_percent']) && message('请设置平台分成比例');
			empty($_GPC['chat_type']) && message('请设置直播方式');
			empty($_GPC['is_authentication'])&&message('请设置认证是否开启');
			$plat_percent=$_GPC['plat_percent'];
			if($plat_percent<0||$plat_percent>100){
				message('平台分成比例设置不正确');
				exit;
			}
			
			
			$dat['qn_accesskey']=$_GPC['qn_accesskey'];
			$dat['qn_secretkey']=$_GPC['qn_secretkey'];
			$dat['qn_bucket']=$_GPC['qn_bucket'];
			$dat['qn_queuename']=$_GPC['qn_queuename'];
			$dat['lesson_templete']=$_GPC['lesson_templete'];
			$dat['qn_domain']=$_GPC['qn_domain'];
			$dat['cash_money']=$_GPC['cash_money'];
			$dat['new_lesson']=$_GPC['new_lesson'];
			$dat['create_room']=$_GPC['create_room'];
			$dat['temp_pass']=$_GPC['temp_pass'];
			$dat['qr_code']=$_GPC['qr_code'];
			$dat['plat_percent']=$_GPC['plat_percent'];
			$dat['pay_success']=$_GPC['pay_success'];
			$dat['chat_type']=$_GPC['chat_type'];
			$dat['pc_appid']=$_GPC['pc_appid'];
			$dat['pc_appSecret']=$_GPC['pc_appSecret'];
			$dat['is_authentication'] = $_GPC['is_authentication'];
			$dat['template_type'] = $_GPC['template_type'];
			$dat['score_percent'] = $_GPC['score_percent'];
			$dat['inconme_warn'] = $_GPC['inconme_warn'];
			
			$msg_type = $_GPC['msg_type'];
			if($msg_type == 'alidayu' ||$msg_type == 'alidayu_new'){
				$dat['info_appkey'] = $_GPC['info_appkey'];
				$dat['info_secretkey'] = $_GPC['info_secretkey'];
				$dat['sign_name'] = $_GPC['sign_name'];
				$dat['info_tempid'] = $_GPC['info_tempid'];
				$dat['content_key'] = $_GPC['content_key'];	
			}else if($msg_type == 'juhe'){
				$dat['juhe_appkey'] = $_GPC['juhe_appkey'];
				$dat['juhe_tempid'] = $_GPC['juhe_tempid'];
				$dat['juhecontent_key'] = $_GPC['juhecontent_key'];	
			}
			$dat['msg_type'] = $msg_type;
			$dat['siteroot']=$_W["siteroot"];
			//字段验证, 并获得正确的数据$dat
			if (!$this->saveSettings($dat)) {
				message('保存信息失败','','error');
			} else {
				message('保存信息成功','','success');
			}
		}
	
		// 模板中需要用到 "tpl" 表单控件函数的话, 记得一定要调用此方法.
		load()->func('tpl');
	
		//这里来展示设置项表单
		include $this->template('setting');
	}

}