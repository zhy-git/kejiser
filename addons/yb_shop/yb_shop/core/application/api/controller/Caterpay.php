<?php
 namespace app\api\controller; use think\Request; use think\Log; use app\api\service\CaterPayService; use app\common\model\Business; use app\common\model\ResOrder; use app\common\model\BusinessStamping; require EXTEND_PATH . "\x4e\x65\x74\x70\x72\x69\x6e\x74\x2f\160\x72\151\156\x74\150\x65\154\160\145\x72\x2e\x70\150\x70"; class Caterpay extends BaseController { public function OrderInfo() { goto uNpmF; fF_AL: $pay = new CaterPayService(); goto diVvC; hNYA_: if (empty($result)) { goto hgvrH; } goto z2SRK; JHQDF: jvY6l: goto fg69S; ox1Zv: $rs["\x6d\163\x67"] = $result; goto u9H6J; Y3e28: return json_encode($rs); goto JHQDF; uNpmF: $rs = array("\143\157\144\145" => 0, "\151\156\x66\157" => array()); goto rYPlp; fg69S: $rs["\151\x6e\146\157"] = $info; goto QcGu4; QcGu4: return json_encode($rs); goto BARHg; OXRmm: hgvrH: goto fF_AL; SONmh: $result = $this->checkParam($rule, $data); goto hNYA_; ZYa1Q: $rs["\x6d\x73\x67"] = "\350\xae\xa2\345\215\x95\xe4\277\xa1\346\x81\257\xe4\xb8\xba\xe7\251\272"; goto Y3e28; rYPlp: $data = ["\157\x72\x64\x65\162\137\x69\x64" => Request::instance()->param("\157\162\144\x65\x72\137\151\144")]; goto QvTBm; u9H6J: return json_encode($rs); goto OXRmm; QvTBm: $rule = [["\157\162\144\x65\162\x5f\x69\x64", "\x72\145\x71\165\151\x72\145"]]; goto SONmh; z2SRK: $rs["\x63\157\x64\145"] = 1; goto ox1Zv; Ix1de: $rs["\143\x6f\144\x65"] = 1; goto ZYa1Q; ULMxh: if (!empty($info)) { goto jvY6l; } goto Ix1de; diVvC: $info = $pay->orderInfo($data); goto ULMxh; BARHg: } public function Pay() { goto ALXW6; GDAsv: Maefx: goto Cm6N2; uZQR7: return json_encode($rs); goto GDAsv; bdme5: $pay_info["\x70\141\x79\123\x69\x67\156"] = $pay_info["\x73\x69\147\x6e"]; goto sf_a6; wpcUG: return json_encode($rs); goto iKrTZ; IZVED: $result = $this->checkParam($rule, $data); goto CLwMs; PsxVo: $rs["\x63\157\144\x65"] = 1; goto vA45L; Rbq0X: $info = $pay->orderPay($data); goto HHmle; rohIE: foreach ($this->objectArray($info["\x69\x6e\146\157"]) as $value) { $pay_info = $value; KR9Hq: } goto sYtgT; ALXW6: $rs = array("\x63\157\x64\145" => 0, "\x69\x6e\146\x6f" => array()); goto Mrce2; sYtgT: CC5N2: goto bdme5; ZJGCa: $rs["\155\x73\x67"] = $info["\x6d\x73\x67"]; goto fyuvx; x8ht1: $data = ["\x6f\165\164\137\x74\162\141\144\x65\x5f\x6e\157" => Request::instance()->param("\157\165\164\137\x74\162\x61\x64\x65\137\156\x6f"), "\157\160\145\x6e\x69\144" => Request::instance()->param("\x6f\x70\x65\156\151\x64"), "\x6d\143\x68\x5f\x69\144" => $mch_id]; goto GvB8c; Mrce2: $app_id = Request::instance()->param("\151"); goto RoLKS; CLwMs: if (empty($result)) { goto Maefx; } goto PsxVo; RoLKS: $mch_id = $this->getMchId($app_id); goto x8ht1; Cm6N2: $pay = new CaterPayService(); goto Rbq0X; vA45L: $rs["\x6d\163\x67"] = $result; goto uZQR7; GvB8c: $rule = [["\157\x75\x74\137\164\162\141\x64\145\137\x6e\157", "\x72\145\x71\165\x69\162\x65"], ["\x6f\160\x65\156\151\x64", "\x72\x65\161\165\x69\x72\x65"], ["\x6d\143\x68\x5f\151\x64", "\162\145\x71\x75\151\x72\145", "\344\xb8\215\345\255\230\345\x9c\250\345\x95\x86\346\x88\xb7"]]; goto IZVED; Gm5T3: sdbJC: goto q0Sek; sf_a6: unset($pay_info["\x73\151\147\156"]); goto uXDXQ; uXDXQ: $rs["\151\156\146\x6f"] = $pay_info; goto wpcUG; q0Sek: $pay_info = array(); goto rohIE; HHmle: if (!($info["\143\x6f\144\x65"] == 1)) { goto sdbJC; } goto bdy6C; fyuvx: return json_encode($rs); goto Gm5T3; bdy6C: $rs["\x63\157\x64\x65"] = 1; goto ZJGCa; iKrTZ: } public function PayCallback() { goto fa9yi; bqHQb: $this->printorder($out_trade_no); goto UTOUb; MZpGz: if ($notify_data) { goto cQoTQ; } goto S1G7G; fa9yi: $notify_data = file_get_contents("\160\x68\x70\72\x2f\57\x69\156\160\165\x74"); goto kCG2Y; kCG2Y: if ($notify_data) { goto SE2Wo; } goto vG57j; kmQWH: $pay = new CaterPayService(); goto Xho2a; ZPtPd: SE2Wo: goto MZpGz; iRjwU: $out_trade_no = $doc->getElementsByTagName("\x6f\x75\164\137\x74\x72\x61\144\x65\x5f\x6e\x6f")->item(0)->nodeValue; goto Afklo; Xho2a: $info = $pay->payCallback($out_trade_no, 1); goto bqHQb; rzC8A: $doc = new \DOMDocument(); goto IMBB6; S1G7G: exit("\xe6\234\252\xe6\224\266\345\210\260\345\x9b\236\350\260\203"); goto QFEXc; QFEXc: cQoTQ: goto rzC8A; IMBB6: $doc->loadXML($notify_data); goto iRjwU; bmNfE: return json_encode($rs); goto mjQer; vG57j: $notify_data = $GLOBALS["\x48\x54\x54\x50\137\x52\x41\x57\x5f\x50\x4f\123\124\137\x44\x41\x54\101"] ?: ''; goto ZPtPd; UTOUb: $rs["\x69\x6e\146\x6f"] = $info; goto bmNfE; Afklo: Log::write($out_trade_no . "\x2c\xe6\x94\xaf\xe4\273\230\345\xae\x8c\346\x88\220", "\143\141\x74\145\x72\137\x70\x61\171\x5f\x73\165\x63\x63\145\163\163"); goto kmQWH; mjQer: } public function printorder($out_trade_no) { goto xl4gL; yy1mO: $print_list = $print->where("\155\x63\x68\x5f\151\x64", $info["\x6d\143\150\x5f\x69\x64"])->select(); goto m46cA; ROpgp: $url = "\x68\x74\x74\x70\163\x3a\57\57\x76\x69\x70\x2e\154\171\x31\x30\x30\x2e\x77\141\x6e\147\x2f\x61\x70\151\57\x61\x70\160\x2f\x41\x6c\151\x79\x75\156\57\160\165\163\150\x3f\155\x63\150\137\x69\144\75" . $info["\155\143\150\137\151\x64"]; goto zGDHa; sjJRh: if (!empty($info)) { goto Uxe1m; } goto OwuMo; V2BcU: $print = new BusinessStamping(); goto yy1mO; f638r: $resorder->where("\x6f\165\164\137\164\x72\x61\x64\x65\x5f\156\157", $out_trade_no)->update(["\151\x73\137\160\162\x69\156\164" => 1]); goto BGshn; LCsaq: $info = $resorder->where("\157\x75\x74\x5f\x74\x72\x61\144\145\137\x6e\x6f", $out_trade_no)->where("\x69\163\137\x70\x72\x69\156\164", "\60")->find(); goto sjJRh; NeFlI: $helper = new \PrintHelper(); goto V2BcU; lBx3F: Uxe1m: goto ROpgp; OwuMo: exit; goto lBx3F; oUWxn: lKrLF: goto f638r; m46cA: $res = array(); goto Bzrt4; Bzrt4: foreach ($print_list as $item) { $res[] = $helper->printHtmlContent($item["\x75\x75\x69\144"], "\x68\164\x74\x70\x73\x3a\57\x2f\x76\x69\160\x2e\x6c\171\61\x30\60\x2e\167\x61\x6e\x67\x2f\167\x61\x70\x2f\x63\157\165\x6e\x74\57\x52\x65\x73\117\x72\144\145\162\x44\151\163\150\x4c\151\163\x74\x3f\x61\x70\160\x5f\151\x64\x3d\x5a\120\122\132\111\x4a\116\x50\x46\x32\x26\157\162\144\145\162\x5f\151\144\75" . $info["\x6f\x72\x64\145\x72\x5f\151\x64"], $item["\157\x70\145\x6e\x5f\165\163\x65\x72\x5f\151\x64"]); egpg8: } goto oUWxn; zGDHa: file_get_contents($url); goto NeFlI; xl4gL: $resorder = new ResOrder(); goto LCsaq; BGshn: } }