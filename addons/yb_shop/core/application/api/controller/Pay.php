<?php
 namespace app\api\controller; use think\Request; use think\Log; use think\Db; require_once BASE_ROOT . "\143\x6f\x72\145\57\141\160\x70\x6c\x69\143\141\x74\151\x6f\x6e\57\141\160\x69\x2f\143\x6f\x6e\x74\x72\157\x6c\154\x65\162\x2f\102\x61\163\x65\x43\157\x6e\164\162\157\x6c\x6c\x65\162\x2e\160\x68\160"; require_once BASE_ROOT . "\x63\x6f\x72\x65\57\x61\x70\x70\154\x69\x63\x61\x74\x69\157\156\57\141\160\151\57\x73\x65\162\x76\151\143\x65\57\x50\141\171\142\144\x53\x65\162\x76\x69\143\x65\x2e\160\150\160"; use app\api\service\PayService; use app\api\service\PaybdService; class Pay extends BaseController { public function OrderInfo() { goto yPh58; FjRPW: $rs["\x63\157\144\x65"] = 1; goto uOu2p; sd1oM: $data = ["\157\162\x64\145\x72\x5f\151\x64" => Request::instance()->param("\157\x72\x64\145\162\137\151\x64")]; goto UsH24; dhc0J: return json_encode($rs); goto NaGHj; K9lIm: if (!empty($info)) { goto sADJM; } goto FjRPW; mIIbC: $mch_id = $this->getMchId($app_id); goto GcJnv; UfL23: return json_encode($rs); goto zWlhx; jASk_: $result = $this->checkParam($rule, $data); goto Bl7gf; GcJnv: $rs = array("\143\157\144\145" => 0, "\x69\x6e\146\x6f" => array()); goto sd1oM; uOu2p: $rs["\x6d\163\147"] = "\350\256\xa2\345\215\225\xe4\277\241\346\x81\xaf\xe4\270\272\347\xa9\xba"; goto dhc0J; F3l0h: $rs["\151\x6e\x66\157"] = $info; goto UfL23; f_Q7X: $rs["\143\157\x64\x65"] = 1; goto FADQE; gWSq1: $pay = new PayService(); goto bkDBA; yXKxR: return json_encode($rs); goto YWv33; bkDBA: $info = $pay->orderInfo($data, $mch_id); goto K9lIm; UsH24: $rule = [["\157\162\144\145\x72\x5f\151\x64", "\x72\x65\161\165\151\162\145"]]; goto jASk_; FADQE: $rs["\155\163\x67"] = $result; goto yXKxR; Bl7gf: if (empty($result)) { goto WBCQ4; } goto f_Q7X; YWv33: WBCQ4: goto gWSq1; yPh58: $app_id = Request::instance()->param("\x69"); goto mIIbC; NaGHj: sADJM: goto F3l0h; zWlhx: } public function Pay() { goto E2Fwb; ShNbL: $rs["\x6d\163\147"] = $result; goto ZwbyP; wZlME: $result = $this->checkParam($rule, $data); goto NwVL3; PZ26S: return json_encode($rs); goto cK1yS; ZwbyP: return json_encode($rs); goto Pls4B; n2x_q: if (!($info["\x63\x6f\x64\x65"] == 1)) { goto uxUCY; } goto Fj3Ho; kucZn: uxUCY: goto tjc5V; kos8r: $data = ["\157\x75\x74\x5f\164\162\x61\x64\x65\x5f\156\157" => Request::instance()->param("\157\165\164\137\x74\x72\x61\x64\x65\137\x6e\x6f"), "\157\160\x65\x6e\x69\x64" => Request::instance()->param("\157\x70\x65\x6e\x69\x64"), "\155\x63\x68\x5f\x69\x64" => $mch_id]; goto HwvgO; JqWIU: $info = $pay->orderPay($data); goto n2x_q; s85g3: pXRH0: goto zsACe; GedoE: $rs["\x69\156\x66\x6f"] = $pay_info; goto PZ26S; TTRNW: $app_id = Request::instance()->param("\x69"); goto Y404d; wf9Xx: $rs["\x6d\x73\x67"] = $info["\x6d\163\147"]; goto BhUks; Fj3Ho: $rs["\143\157\144\145"] = 1; goto wf9Xx; tjc5V: $pay_info = array(); goto PrYnT; Pls4B: FFm0t: goto idq0_; Y404d: $mch_id = $this->getMchId($app_id); goto kos8r; u2IBf: $rs["\x63\x6f\x64\x65"] = 1; goto ShNbL; HwvgO: $rule = [["\157\165\164\137\164\162\141\x64\145\x5f\x6e\157", "\x72\x65\161\165\x69\x72\145"], ["\x6f\160\145\x6e\151\144", "\x72\145\161\165\x69\162\x65"], ["\x6d\143\x68\137\x69\144", "\x72\145\161\165\151\162\145", "\344\270\x8d\345\255\x98\xe5\234\xa8\345\x95\x86\346\210\267"]]; goto wZlME; NwVL3: if (empty($result)) { goto FFm0t; } goto u2IBf; zsACe: $pay_info["\x70\x61\171\x53\x69\147\x6e"] = $pay_info["\163\x69\x67\156"]; goto Nlyrj; E2Fwb: $rs = array("\x63\x6f\144\x65" => 0, "\151\156\x66\157" => array()); goto TTRNW; Nlyrj: unset($pay_info["\163\151\147\156"]); goto GedoE; idq0_: $pay = new PayService(); goto JqWIU; BhUks: return json_encode($rs); goto kucZn; PrYnT: foreach ($this->objectArray($info["\151\156\146\157"]) as $value) { $pay_info = $value; FQCoT: } goto s85g3; cK1yS: } public function cardpay() { goto yhdMH; B6fCp: $rs["\143\157\144\145"] = 1; goto ot3qK; p1JtS: return $info; goto msJnd; o30UZ: $rule = [["\157\x75\164\x5f\164\x72\x61\x64\145\137\156\x6f", "\x72\145\x71\x75\x69\162\145", "\xe6\234\xaa\xe8\x8e\267\345\217\x96\350\xae\xa2\345\215\x95\xe5\217\267"], ["\146\x6f\x72\155\x5f\151\144", "\162\x65\x71\165\x69\x72\145", "\346\x9c\252\xe8\216\xb7\xe5\x8f\x96\346\xb6\210\xe6\x81\257\346\x8e\250\351\x80\201\146\157\x72\x6d\x5f\x69\144"], ["\155\143\150\x5f\151\x64", "\162\145\x71\x75\x69\x72\x65", "\xe4\270\215\xe5\xad\x98\xe5\x9c\xa8\xe5\x95\206\xe6\210\xb7"]]; goto faBgJ; faBgJ: $result = $this->checkParam($rule, $data); goto LwOhp; nNv7k: $mch_id = $this->getMchId($app_id); goto OSOQ7; M41MB: $info = $pay->to_cardpay($data["\157\165\164\137\164\x72\x61\144\x65\137\x6e\157"], $data["\155\x63\150\x5f\x69\144"], $data["\146\x6f\x72\155\137\151\144"]); goto p1JtS; feEtm: $app_id = Request::instance()->param("\x69"); goto nNv7k; RILxr: $pay = new PayService(); goto M41MB; LwOhp: if (empty($result)) { goto TU_2w; } goto B6fCp; ot3qK: $rs["\155\163\x67"] = $result; goto xCxhV; OSOQ7: $data = ["\x6f\x75\164\137\164\x72\x61\144\145\x5f\156\157" => Request::instance()->param("\157\x75\x74\137\164\x72\141\144\x65\x5f\x6e\x6f"), "\146\x6f\x72\155\137\151\x64" => Request::instance()->param("\146\157\162\x6d\137\x69\144"), "\155\143\x68\x5f\x69\144" => $mch_id]; goto o30UZ; xCxhV: return json_encode($rs); goto vHzgw; yhdMH: $rs = array("\x63\157\x64\145" => 0, "\x69\x6e\x66\x6f" => array()); goto feEtm; vHzgw: TU_2w: goto RILxr; msJnd: } public function Paybd() { goto RC6ts; QJYcx: $rs["\x6d\x73\147"] = $result; goto jHBtH; RC6ts: $rs = array("\143\x6f\144\145" => 0, "\151\x6e\x66\157" => array()); goto jPS79; jQSC_: return $info; goto QSAYt; jPS79: $app_id = Request::instance()->param("\151"); goto WoyDD; dp36F: if (empty($result)) { goto MZheR; } goto ytzqu; zVzff: $pay = new PaybdService(); goto pf5YV; VDB7K: $rule = [["\157\165\x74\137\164\162\x61\144\x65\137\x6e\157", "\x72\x65\x71\x75\151\162\x65"], ["\155\143\150\x5f\151\x64", "\x72\x65\x71\165\x69\x72\x65", "\xe4\xb8\x8d\xe5\xad\x98\345\x9c\xa8\xe5\225\x86\xe6\210\267"]]; goto PxPhB; pf5YV: $info = $pay->orderPaybd($data); goto jQSC_; ytzqu: $rs["\x63\x6f\144\145"] = 1; goto QJYcx; Mlivo: $data = ["\x6f\165\164\137\x74\162\x61\x64\x65\x5f\x6e\x6f" => Request::instance()->param("\157\x75\x74\137\164\x72\141\144\145\137\156\157"), "\x6f\160\x65\156\x69\x64" => Request::instance()->param("\x6f\160\x65\156\151\x64"), "\155\x63\150\137\151\144" => $mch_id]; goto VDB7K; PxPhB: $result = $this->checkParam($rule, $data); goto dp36F; iVYe9: MZheR: goto zVzff; jHBtH: return json_encode($rs); goto iVYe9; WoyDD: $mch_id = $this->getMchId($app_id); goto Mlivo; QSAYt: } public function Paywap() { goto NsLTy; fkJM0: if (empty($result)) { goto nrwdk; } goto lC9sI; gH8i8: return json_encode($rs); goto nVwiy; fR0Zw: return json_encode($rs); goto uGV5s; sRWzr: $pay = new PayService(); goto TKONR; lC9sI: $rs["\143\x6f\144\x65"] = 1; goto jVxfI; p_XhD: $data = ["\x6f\x75\x74\137\164\x72\141\144\x65\137\x6e\x6f" => Request::instance()->param("\x6f\x75\164\x5f\x74\162\141\144\145\x5f\x6e\x6f"), "\155\143\150\x5f\151\144" => $mch_id]; goto Pmm7X; WHAPd: $rs["\143\x6f\x64\145"] = 1; goto XjZeG; JsigY: $mch_id = $this->getMchId($app_id); goto p_XhD; nVwiy: i1sTG: goto DV90I; ioS8N: $result = $this->checkParam($rule, $data); goto fkJM0; yt11t: return json_encode($rs); goto Qbd9o; uGV5s: nrwdk: goto sRWzr; jVxfI: $rs["\155\x73\x67"] = $result; goto fR0Zw; o8o2o: if (!($pay_info["\143\x6f\144\145"] == 1)) { goto i1sTG; } goto WHAPd; NsLTy: $rs = array("\x63\x6f\144\145" => 0, "\x69\156\x66\x6f" => array()); goto qJcdN; DV90I: $rs["\151\x6e\x66\157"] = $pay_info; goto yt11t; TKONR: $pay_info = $pay->orderPaywap($data); goto o8o2o; qJcdN: $app_id = Request::instance()->param("\x69"); goto JsigY; XjZeG: $rs["\x6d\163\x67"] = $pay_info["\x6d\163\x67"]; goto gH8i8; Pmm7X: $rule = [["\x6f\165\164\x5f\x74\162\x61\144\x65\137\x6e\x6f", "\162\x65\x71\165\x69\x72\x65"], ["\155\x63\150\137\151\x64", "\162\x65\161\x75\151\162\145", "\xe4\xb8\215\xe5\255\230\xe5\234\250\xe5\x95\x86\346\210\267"]]; goto ioS8N; Qbd9o: } public function PayCallback() { goto gNW_c; XvQig: $file_path = $_SERVER["\104\x4f\103\125\115\x45\116\x54\x5f\122\117\117\124"] . "\57\x70\165\142\x6c\x69\x63\57\164\x65\163\164\56\x74\x78\x74"; goto c_g29; B1Zr2: $doc = new \DOMDocument(); goto x9M50; p4RF4: $out_trade_no = $doc->getElementsByTagName("\157\x75\164\137\164\x72\x61\144\x65\137\156\157")->item(0)->nodeValue; goto AjpCD; cvAdQ: $rs["\151\156\146\x6f"] = $info; goto UFYR4; u4_3_: fwrite($fp, "\167\x77\x77\x77\167\167\x77\167\167\167"); goto HIbCx; Mv8YH: die; goto cIDTz; AjpCD: Log::write($out_trade_no . "\x2c\xe6\x94\xaf\xe4\xbb\230\xe5\xae\x8c\xe6\210\x90", "\163\150\x6f\x70\137\x70\x61\171\x5f\x73\165\x63\x63\145\x73\163"); goto nn2Gt; j0yZG: $notify_data = $GLOBALS["\x48\124\x54\120\x5f\x52\x41\x57\137\120\x4f\123\x54\x5f\104\101\x54\x41"] ?: ''; goto qZ7T1; x9M50: $doc->loadXML($notify_data); goto p4RF4; oYqqC: if ($notify_data) { goto vOGhr; } goto TNAlY; nn2Gt: $pay = new PayService(); goto MQHLA; UFYR4: return json_encode($rs); goto Lk8yO; c_g29: $fp = fopen($file_path, "\x77\x2b"); goto LMcps; MQHLA: $info = $pay->payCallback($out_trade_no, 1); goto cvAdQ; NJll1: echo 111; goto Mv8YH; HIbCx: fclose($fp); goto NJll1; gNW_c: $file_path = $_SERVER["\x44\x4f\x43\125\x4d\x45\116\124\137\122\x4f\117\x54"] . "\57\x70\165\142\154\151\x63\x2f\141\x61\141\x2e\x74\170\164"; goto o4t9o; fO3F_: if ($notify_data) { goto ec2G0; } goto j0yZG; LMcps: fwrite($fp, $notify_data); goto xt38i; TNAlY: exit("\346\234\252\346\x94\266\345\x88\xb0\xe5\x9b\x9e\350\xb0\203"); goto INeHg; cIDTz: $notify_data = file_get_contents("\160\150\160\72\57\x2f\151\x6e\x70\x75\164"); goto XvQig; qZ7T1: ec2G0: goto oYqqC; xt38i: fclose($fp); goto fO3F_; INeHg: vOGhr: goto B1Zr2; o4t9o: $fp = fopen($file_path, "\x77\53"); goto u4_3_; Lk8yO: } public function updPayStatus() { goto D4Z3A; ZiYqC: M1mJI: goto OQSZe; zlhuQ: return json_encode($rs); goto DujUs; ZE9eN: $out_trade_no = $data["\x6f\x72\x64\x65\162\x5f\151\144"]; goto S0Pk6; WCtWe: PkWdP: goto ccYC9; wRm5Y: R7URN: goto B92_W; ygIt4: goto PkWdP; goto KVp3e; ccYC9: goto Vtckm; goto KBQ7P; EPl61: CkI32: goto bQs_f; TGaoD: eIf1r: goto zlhuQ; FQhh8: if ($pay_type == 3) { goto ik1PC; } goto gJJOj; bQs_f: $rs = $pay->upBdPay($out_trade_no); goto I_wbO; KVp3e: ggt73: goto yIQk3; I_wbO: NwCtD: goto ygIt4; apVIS: elkbW: goto GGAkK; f8ynY: $pay_type = Request::instance()->param("\x70\x61\171\137\164\x79\160\x65", 1); goto cO6MH; BuKV2: if ($pay_type == 5) { goto CkI32; } goto TfuMZ; RAIki: goto NwCtD; goto EPl61; x3Zqj: if (empty($result)) { goto iRa_6; } goto NitUt; TfuMZ: if ($pay_type == 6) { goto R7URN; } goto AYOyM; qI11D: return json_encode($rs); goto A2Aia; N1RGW: $result = $this->checkParam($rule, $data); goto x3Zqj; Rna1g: if ($pay_type == 2) { goto elkbW; } goto FQhh8; IeAxF: $rs = $pay->upBargainPay($out_trade_no); goto ZiYqC; dRrYg: $mch_id = $this->getMchId($app_id); goto f8ynY; obMQ4: $app_id = Request::instance()->param("\x69"); goto dRrYg; GGAkK: $rs = $pay->upPtPay($out_trade_no); goto pJIZQ; S0Pk6: $pay = new PayService(); goto R1DZu; dtjVM: goto eIf1r; goto kMs6y; cO6MH: $data = ["\157\162\x64\x65\x72\137\151\144" => Request::instance()->param("\157\x72\144\145\x72\137\151\144"), "\155\143\x68\137\x69\144" => $mch_id]; goto l1zXA; kMs6y: qglpk: goto sA5jS; R1DZu: if ($pay_type == 1) { goto qglpk; } goto Rna1g; XlQMn: $rs["\155\x73\147"] = $result; goto qI11D; VuM_z: goto blYkI; goto apVIS; B92_W: $rs = $pay->upContentPay($out_trade_no); goto fB6ce; sA5jS: $rs = $pay->updPayStatus($out_trade_no); goto TGaoD; yIQk3: $rs = $pay->upCardPay($out_trade_no); goto WCtWe; NitUt: $rs["\143\x6f\x64\x65"] = 1; goto XlQMn; DcgmB: $rs = $pay->upMsPay($out_trade_no); goto Vg8yM; pJIZQ: blYkI: goto dtjVM; KBQ7P: ik1PC: goto DcgmB; l1zXA: $rule = [["\x6f\x72\144\145\162\137\x69\x64", "\x72\145\161\165\151\x72\145"], ["\x6d\143\150\x5f\x69\144", "\162\x65\161\x75\151\x72\145", "\344\xb8\x8d\345\xad\230\345\234\250\xe5\x95\206\xe6\x88\267"]]; goto N1RGW; D4Z3A: $rs = array("\x63\x6f\144\x65" => 0, "\x69\156\146\x6f" => array()); goto obMQ4; AYOyM: if (!($pay_type == 7)) { goto M1mJI; } goto IeAxF; A2Aia: iRa_6: goto ZE9eN; fB6ce: cCSif: goto RAIki; Vg8yM: Vtckm: goto VuM_z; gJJOj: if ($pay_type == 4) { goto ggt73; } goto BuKV2; OQSZe: goto cCSif; goto wRm5Y; DujUs: } }
