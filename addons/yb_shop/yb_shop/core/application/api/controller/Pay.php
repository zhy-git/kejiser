<?php
 namespace app\api\controller; use think\Request; use think\Log; use think\Db; require_once BASE_ROOT . "\x63\157\162\145\57\x61\x70\x70\x6c\151\143\141\164\151\x6f\x6e\57\141\160\x69\57\143\x6f\156\x74\162\157\x6c\x6c\x65\x72\57\102\x61\x73\145\103\157\x6e\164\162\157\154\x6c\x65\x72\x2e\x70\x68\160"; require_once BASE_ROOT . "\143\157\x72\145\57\x61\x70\160\154\x69\x63\x61\x74\x69\157\156\x2f\141\x70\151\x2f\x73\145\x72\x76\151\143\x65\57\x50\141\171\142\x64\x53\x65\162\166\151\143\x65\56\160\150\160"; use app\api\service\PayService; use app\api\service\PaybdService; class Pay extends BaseController { public function OrderInfo() { goto ImcKp; vtRIu: return json_encode($rs); goto m4vaM; QHSNq: if (empty($result)) { goto NChuQ; } goto oXMvi; dOkQ0: $result = $this->checkParam($rule, $data); goto QHSNq; g2fmh: $info = $pay->orderInfo($data); goto e1QaE; SgKS0: $rs["\x63\157\x64\x65"] = 1; goto C3el7; KvF1F: $rs["\155\x73\147"] = $result; goto vtRIu; eAZSD: $data = ["\157\162\144\145\x72\x5f\x69\144" => Request::instance()->param("\157\x72\144\x65\162\137\x69\x64")]; goto FP2qY; e1QaE: if (!empty($info)) { goto paOul; } goto SgKS0; c2mdb: return json_encode($rs); goto EPSW1; C3el7: $rs["\155\x73\x67"] = "\xe8\256\xa2\xe5\215\x95\344\277\241\xe6\x81\257\xe4\270\xba\347\251\272"; goto c2mdb; BkDgi: $pay = new PayService(); goto g2fmh; XrVXd: $rs["\x69\x6e\x66\x6f"] = $info; goto ct2Yv; ct2Yv: return json_encode($rs); goto KOhp1; ImcKp: $rs = array("\x63\157\144\x65" => 0, "\151\156\x66\157" => array()); goto eAZSD; oXMvi: $rs["\143\x6f\x64\x65"] = 1; goto KvF1F; EPSW1: paOul: goto XrVXd; m4vaM: NChuQ: goto BkDgi; FP2qY: $rule = [["\157\162\144\145\x72\137\x69\144", "\x72\x65\161\x75\151\x72\x65"]]; goto dOkQ0; KOhp1: } public function Pay() { goto UunT1; YAepU: unset($pay_info["\163\151\147\156"]); goto Ch0iN; QFOAj: $mch_id = $this->getMchId($app_id); goto eIHlo; BLx2e: B5UmC: goto Tsrm9; fggSu: $app_id = Request::instance()->param("\151"); goto QFOAj; eIHlo: $data = ["\157\x75\164\x5f\164\x72\141\x64\145\137\156\x6f" => Request::instance()->param("\x6f\x75\164\x5f\x74\x72\141\x64\145\x5f\x6e\157"), "\x6f\x70\x65\x6e\151\x64" => Request::instance()->param("\x6f\x70\x65\156\151\x64"), "\x6d\x63\150\x5f\x69\144" => $mch_id]; goto phk80; fNyQ6: $rs["\x6d\163\147"] = $result; goto DlP2n; DlP2n: return json_encode($rs); goto BLx2e; wxqBa: return json_encode($rs); goto aet5V; phk80: $rule = [["\157\165\x74\x5f\x74\162\x61\x64\145\x5f\156\x6f", "\x72\x65\x71\x75\151\x72\145"], ["\x6f\160\145\156\151\x64", "\x72\x65\161\165\151\162\145"], ["\155\143\150\137\151\144", "\162\x65\161\x75\x69\x72\145", "\344\270\215\345\xad\230\xe5\x9c\xa8\xe5\x95\206\xe6\x88\xb7"]]; goto ruptP; QeEKU: $pay_info["\160\x61\x79\123\x69\147\x6e"] = $pay_info["\x73\x69\147\x6e"]; goto YAepU; mOZ7M: $rs["\x63\x6f\144\x65"] = 1; goto fNyQ6; wVKeo: foreach ($this->objectArray($info["\x69\x6e\146\157"]) as $value) { $pay_info = $value; VK4up: } goto uOGxu; Ch0iN: $rs["\x69\156\146\x6f"] = $pay_info; goto QkCwL; bMnV1: if (empty($result)) { goto B5UmC; } goto mOZ7M; RZYuV: $rs["\155\x73\x67"] = $info["\155\163\x67"]; goto wxqBa; YVvbk: $pay_info = array(); goto wVKeo; UunT1: $rs = array("\x63\x6f\x64\x65" => 0, "\151\156\146\x6f" => array()); goto fggSu; aet5V: PQ9Hx: goto YVvbk; Tsrm9: $pay = new PayService(); goto cZyj7; ruptP: $result = $this->checkParam($rule, $data); goto bMnV1; uOGxu: iz8eQ: goto QeEKU; cZyj7: $info = $pay->orderPay($data); goto SesyY; SesyY: if (!($info["\143\x6f\144\145"] == 1)) { goto PQ9Hx; } goto Xetqg; QkCwL: return json_encode($rs); goto h4p3B; Xetqg: $rs["\143\x6f\144\145"] = 1; goto RZYuV; h4p3B: } public function Paybd() { goto FinTh; UOAY8: return json_encode($rs); goto IhXMj; qer1O: $rs["\143\x6f\x64\x65"] = 1; goto mKVUB; IhXMj: AdFT8: goto C0oes; C0oes: $pay = new PaybdService(); goto P4_m_; T1K5E: $result = $this->checkParam($rule, $data); goto Eymg9; Eymg9: if (empty($result)) { goto AdFT8; } goto qer1O; FinTh: $rs = array("\x63\x6f\x64\x65" => 0, "\151\x6e\146\x6f" => array()); goto UWvFG; mKVUB: $rs["\x6d\x73\147"] = $result; goto UOAY8; UWvFG: $app_id = Request::instance()->param("\151"); goto l2kDH; tRPG_: return $info; goto dKdZl; l2kDH: $mch_id = $this->getMchId($app_id); goto ghKjJ; ghKjJ: $data = ["\157\165\164\x5f\164\162\x61\144\145\137\156\157" => Request::instance()->param("\157\x75\x74\137\164\x72\x61\144\x65\137\x6e\x6f"), "\x6f\x70\x65\x6e\151\144" => Request::instance()->param("\157\160\145\156\x69\144"), "\155\143\150\137\151\x64" => $mch_id]; goto AE0ag; P4_m_: $info = $pay->orderPaybd($data); goto tRPG_; AE0ag: $rule = [["\157\165\164\x5f\x74\x72\141\x64\x65\x5f\156\x6f", "\162\x65\161\165\x69\162\145"], ["\155\x63\x68\137\x69\144", "\x72\145\161\165\151\162\145", "\344\xb8\215\xe5\xad\230\xe5\234\250\345\x95\x86\xe6\210\267"]]; goto T1K5E; dKdZl: } public function PayCallback() { goto CGuQ4; s20f1: $rs["\151\156\x66\x6f"] = $info; goto kLSZV; DmU5g: fwrite($fp, "\x77\x77\x77\167\167\167\x77\x77\167\167"); goto wwW4v; VJRCg: exit("\346\x9c\xaa\346\x94\xb6\xe5\210\xb0\xe5\233\236\xe8\xb0\x83"); goto J0TpF; N84dK: if ($notify_data) { goto cq7LH; } goto jBbrR; F74yN: $doc = new \DOMDocument(); goto v1pEs; v4sNu: cq7LH: goto oGCBn; W109S: $file_path = $_SERVER["\x44\x4f\x43\125\115\105\x4e\x54\x5f\x52\x4f\117\124"] . "\x2f\x70\x75\142\x6c\151\x63\x2f\164\x65\x73\164\x2e\x74\x78\x74"; goto wj1yW; J0TpF: n_b06: goto F74yN; Xc9ab: die; goto El59u; kLSZV: return json_encode($rs); goto kEkfT; RywGx: Log::write($out_trade_no . "\x2c\xe6\x94\257\344\xbb\x98\345\256\x8c\346\x88\220", "\163\x68\x6f\x70\137\160\141\171\x5f\163\165\x63\143\x65\x73\163"); goto cTuB_; cTuB_: $pay = new PayService(); goto e0SMb; CGuQ4: $file_path = $_SERVER["\x44\117\x43\125\x4d\105\116\124\x5f\x52\117\x4f\124"] . "\57\x70\x75\142\154\x69\x63\57\x61\141\x61\56\x74\170\164"; goto QtIiC; Z7A2f: fwrite($fp, $notify_data); goto n_mpg; n_mpg: fclose($fp); goto N84dK; jBbrR: $notify_data = $GLOBALS["\x48\x54\124\120\x5f\x52\x41\x57\x5f\120\x4f\x53\124\x5f\x44\x41\124\x41"] ?: ''; goto v4sNu; QtIiC: $fp = fopen($file_path, "\167\x2b"); goto DmU5g; v1pEs: $doc->loadXML($notify_data); goto m7QOQ; wwW4v: fclose($fp); goto t6Hgg; El59u: $notify_data = file_get_contents("\160\150\x70\72\57\57\151\x6e\x70\x75\x74"); goto W109S; oGCBn: if ($notify_data) { goto n_b06; } goto VJRCg; t6Hgg: echo 111; goto Xc9ab; m7QOQ: $out_trade_no = $doc->getElementsByTagName("\157\x75\x74\x5f\x74\x72\141\x64\x65\x5f\x6e\x6f")->item(0)->nodeValue; goto RywGx; e0SMb: $info = $pay->payCallback($out_trade_no, 1); goto s20f1; wj1yW: $fp = fopen($file_path, "\x77\53"); goto Z7A2f; kEkfT: } }