<?php
 namespace app\api\service; use think\Db; require_once BASE_ROOT . "\x63\x6f\162\x65\x2f\x65\170\164\145\x6e\x64\57\127\170\x70\x61\x79\x2f\x57\170\x50\x61\171\x2e\101\160\151\x2e\x70\150\160"; class PayService { private $o = "\x79\x62\163\143\137\157\162\144\x65\162"; private $og = "\x79\142\163\x63\x5f\x6f\162\x64\145\x72\x5f\147\x6f\157\x64\163"; private $uc = "\171\142\x73\x63\x5f\165\x73\145\162\x5f\143\x6f\165\160\x6f\156"; private $s = "\x79\142\x73\x63\x5f\x67\157\157\x64\163\x5f\x73\x6b\165"; private $g = "\171\142\x73\x63\x5f\x67\157\157\144\163"; private $op = "\x79\142\163\143\x5f\157\x72\x64\x65\x72\x5f\160\x61\x79\155\145\156\x74"; private $i = "\x79\x62\x73\x63\x5f\151\x6d\x61\x67\x65\163"; private $dq = "\x79\x62\163\x63\x5f\141\x72\145\141"; private $cf = "\171\x62\163\143\137\143\157\156\x66\x69\147"; public function orderInfo($data) { goto QYr1m; rcSFv: $city = Db::name($this->dq)->where("\151\x64", $res["\160\x69\x64"])->find(); goto WLbs5; Yo0VW: $res = Db::name($this->dq)->where("\x69\144", $info["\162\x65\143\145\x69\166\x65\x72\137\x61\x72\x65\x61"])->find(); goto rcSFv; RScHZ: $rs["\x70\162\x6f\x76\x69\x6e\143\145"] = $pro["\156\x61\x6d\x65"]; goto aqDd_; mG9Hc: $rs["\144\151\163\164\x72\151\x63\164"] = $res["\156\141\x6d\145"]; goto CvgZ3; jOg2E: return $info; goto nMKSC; aqDd_: $rs["\x63\151\164\x79"] = $city["\x6e\x61\x6d\x65"]; goto mG9Hc; CvgZ3: $info["\141\x64\x64\x72\x65\x73\163"] = $rs; goto jOg2E; WLbs5: $pro = Db::name($this->dq)->where("\x69\144", $city["\x70\151\144"])->find(); goto RScHZ; QYr1m: $info = Db::name($this->o)->where($data)->find(); goto Yo0VW; nMKSC: } public function orderPay($data) { goto Pamj8; P7lll: if (!($unifiedorder["\x72\x65\164\x75\162\x6e\x5f\143\x6f\144\145"] == "\x46\101\x49\x4c")) { goto TIWsK; } goto peAIp; vhQf4: $rs["\x69\156\146\x6f"] = $res; goto NQxUP; NQxUP: return $rs; goto ABwHO; oKYHX: return $rs; goto W6kJ1; UwRWY: $input->SetOpenid($data["\x6f\x70\x65\x6e\151\x64"]); goto dNgBf; t82sf: $res = $this->weixinapp($unifiedorder); goto vhQf4; JKufJ: TIWsK: goto HfVFt; fzMg6: $unifiedorder = \WxPayApi::unifiedOrder($input); goto P7lll; W6kJ1: jpokk: goto JO_eB; l2Q3g: $input->SetBody($info["\160\x61\x79\x5f\142\x6f\144\171"]); goto UwRWY; dhYv6: return $rs; goto FhHpC; MOrMM: if (!empty($info)) { goto VI6JK; } goto nR1so; ewVpy: $input = new \WxPayUnifiedOrder(); goto l2Q3g; SREzt: if (!($info->pay_status != 0)) { goto jpokk; } goto UQJLq; OMT1t: $input->SetOut_trade_no($data["\x6f\x75\x74\137\164\162\x61\x64\145\137\x6e\157"]); goto PNbv_; dNgBf: $input->SetDetail($info["\x70\x61\x79\x5f\x64\x65\x74\141\x69\154"]); goto g3hjG; UQJLq: $rs["\x63\157\x64\145"] = 1; goto NUhSP; FhHpC: VI6JK: goto SREzt; tjpYu: $rs["\143\x6f\144\145"] = 1; goto rsYDN; zJzbM: PrYbw: goto t82sf; RINI0: return $rs; goto JKufJ; PNbv_: $input->SetTrade_type("\112\x53\101\120\111"); goto fzMg6; Tn16R: return $rs; goto zJzbM; NUhSP: $rs["\x6d\x73\x67"] = "\350\256\242\345\215\225\344\270\273\351\242\230\345\xb7\xb2\xe6\224\271\xe5\217\x98"; goto oKYHX; CNvVZ: $rs["\x6d\x73\147"] = $unifiedorder["\x72\145\x74\x75\162\x6e\x5f\x6d\x73\x67"]; goto RINI0; nG_5X: $info = Db::name($this->op)->where("\x6f\x75\x74\137\164\x72\141\x64\145\x5f\156\157", $data["\157\x75\164\137\x74\x72\x61\144\145\x5f\156\157"])->find(); goto MOrMM; JO_eB: $GLOBALS["\x6d\143\x68\137\151\x64"] = $data["\x6d\143\150\137\151\144"]; goto ewVpy; g3hjG: $input->SetTotal_fee($info["\160\x61\171\x5f\x6d\157\x6e\145\171"] * 100); goto OMT1t; Kcy2Q: $rs["\155\x73\x67"] = "\350\xae\xa2\xe5\x8d\x95\344\xb8\x8d\xe5\xad\230\xe5\234\xa8"; goto dhYv6; nR1so: $rs["\143\157\x64\145"] = 1; goto Kcy2Q; peAIp: $rs["\143\157\x64\x65"] = 1; goto CNvVZ; rsYDN: $rs["\x6d\x73\x67"] = $unifiedorder["\x65\162\x72\137\143\157\x64\x65\137\144\145\x73"]; goto Tn16R; Pamj8: $rs = array("\143\x6f\x64\x65" => 0, "\x69\156\146\157" => array()); goto nG_5X; HfVFt: if (!($unifiedorder["\162\145\x73\x75\154\164\x5f\143\157\144\x65"] == "\106\x41\111\114")) { goto PrYbw; } goto tjpYu; ABwHO: } private function weixinapp($unifiedorder) { goto V3jPI; vQ50Q: $input->SetPackage("\x70\x72\x65\x70\x61\x79\137\x69\144\x3d" . $unifiedorder["\160\162\x65\x70\141\x79\x5f\151\144"]); goto QBvWq; dDDzg: $input = new \WxPayJsApiPay(); goto L9ad2; v1nQR: return $input; goto x0QoI; Cxs32: $param = json_decode($param, true); goto dDDzg; edBQv: $input->SetSign(); goto v1nQR; L9ad2: $input->SetAppid($param["\101\x50\x50\137\111\104"]); goto JdrXh; V3jPI: $param = Db::name($this->cf)->where("\153\145\171", "\127\130\120\101\x59")->where("\x6d\x63\x68\137\151\144", $GLOBALS["\155\143\150\137\x69\x64"])->where("\151\x73\137\x75\163\x65", 1)->value("\166\141\154\165\x65"); goto Cxs32; BJhfM: $input->SetNonceStr($this->createNoncestr()); goto vQ50Q; QBvWq: $input->SetSignType("\x4d\x44\x35"); goto edBQv; JdrXh: $input->SetTimeStamp('' . time() . ''); goto BJhfM; x0QoI: } private function createNoncestr($length = 32) { goto bcVBk; l8Qau: $i++; goto lZNIS; FM39C: $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1); goto CrlYL; Zf1rd: if (!($i < $length)) { goto Tip2u; } goto FM39C; tmVrs: Tip2u: goto IcY3d; IcY3d: return $str; goto gO09J; bcVBk: $chars = "\141\x62\x63\144\x65\x66\147\x68\x69\152\x6b\154\x6d\x6e\x6f\x70\x71\x72\x73\164\x75\166\x77\x78\171\x7a\x30\x31\x32\x33\64\x35\66\67\x38\71"; goto IMsEe; CrlYL: zeh6x: goto l8Qau; GyISv: $i = 0; goto phTF7; lZNIS: goto ul0zU; goto tmVrs; IMsEe: $str = ''; goto GyISv; phTF7: ul0zU: goto Zf1rd; gO09J: } public function payCallback($out_trade_no, $pay_type) { goto nM2km; Jkc4E: try { goto JBkMk; SZF5b: Db::commit(); goto RnH5f; JBkMk: Db::name($this->o)->where(["\157\165\x74\x5f\x74\x72\x61\x64\145\137\x6e\x6f" => $out_trade_no])->update($data); goto OBiNZ; OBiNZ: Db::name($this->op)->where(["\x6f\165\x74\x5f\164\x72\x61\144\x65\137\x6e\157" => $out_trade_no])->update($data_pay); goto SZF5b; RnH5f: } catch (\Exception $e) { Db::rollback(); return null; } goto COn6A; et4lC: Db::startTrans(); goto Jkc4E; LWg3K: $data_pay = array("\x70\141\171\137\163\x74\141\164\165\163" => 1, "\160\x61\171\137\164\x69\155\145" => time()); goto et4lC; nM2km: $data = array("\x6f\162\x64\x65\x72\x5f\163\164\x61\x74\x75\x73" => 1, "\x70\141\171\137\x73\x74\141\x74\x75\x73" => 1, "\x70\141\171\x5f\164\x79\x70\x65" => $pay_type, "\x70\141\x79\x5f\x74\151\x6d\145" => time()); goto LWg3K; COn6A: return "\x73\x75\143\x63\x65\x73\163"; goto ypaVk; ypaVk: } }
