<?php
/**
 * 作者：刘健军
 * 时间：2018.9.27
 * 描述：发送验证码
 * 参数：
 */

require_once (MODULE_ROOT."/dysms/api_demo/SmsDemo.php");
SmsDemo::sendSms();
exit;