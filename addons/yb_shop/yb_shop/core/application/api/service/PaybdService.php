<?php
 namespace app\api\service; use think\Db; require_once BASE_ROOT . "\143\157\x72\x65\57\145\x78\164\145\156\144\57\x42\x64\x70\141\x79\x2f\101\165\x74\x6f\x6c\x6f\x61\144\x65\x72\x2e\160\150\160"; class PaybdService { private $o = "\171\x62\x73\x63\x5f\157\x72\144\x65\162"; private $og = "\x79\x62\x73\x63\137\157\x72\x64\x65\x72\x5f\147\157\x6f\x64\x73"; private $uc = "\x79\x62\x73\143\137\165\163\145\x72\137\143\157\165\160\x6f\156"; private $s = "\171\x62\163\x63\137\x67\x6f\157\x64\163\x5f\163\153\165"; private $g = "\x79\142\x73\x63\x5f\147\x6f\x6f\x64\x73"; private $op = "\171\x62\163\143\x5f\157\162\144\x65\x72\137\x70\x61\171\x6d\145\x6e\164"; private $i = "\x79\142\163\x63\x5f\x69\x6d\141\147\x65\x73"; private $dq = "\171\x62\x73\143\137\141\162\x65\x61"; private $cf = "\171\142\163\x63\x5f\143\157\x6e\x66\151\x67"; public function orderPaybd($data) { goto Ee5P7; pXh_q: $rsaSign = \NuomiRsaSign::genSignWithRsa($requestParamsArr, $rsaPriKeyStr); goto i7epB; orsqZ: $rs["\143\157\x64\145"] = 1; goto I4GV6; pO9vB: $checkSignRes = \NuomiRsaSign::checkSignWithRsa($requestParamsArr, $rsaPublicKeyStr); goto lM7VZ; i7epB: $requestParamsArr["\x73\151\147\156"] = $rsaSign; goto pO9vB; vq1M8: $orderinfo["\x61\x70\160\x4b\145\x79"] = $param["\141\x70\160\113\145\x79"] ? $param["\x61\x70\160\x4b\x65\x79"] : ''; goto uxQUy; cPHRk: $param = json_decode($param, true); goto hj6f4; BkWOa: $rs["\143\x6f\144\x65"] = 1; goto emj4O; UlZJJ: $orderinfo["\162\163\x61\123\151\147\x6e"] = $rsaSign; goto AcZxA; s1ycj: $param = Db::name("\x79\x62\x73\143\137\x63\157\156\x66\151\147")->where("\153\x65\x79", "\102\x44\x41\120\120")->where("\x6d\x63\x68\x5f\151\144", $data["\155\143\x68\x5f\151\144"])->value("\166\x61\154\x75\x65"); goto sfG0t; I4GV6: $rs["\x6d\163\x67"] = "\xe5\x95\x86\346\210\267\xe4\xbf\xa1\xe6\x81\257\xe4\xb8\x8d\xe5\256\214\346\225\264"; goto ceuXs; Eh7Vt: NUzdb: goto luUoJ; AcZxA: $rs["\x69\156\x66\157"] = $orderinfo; goto COHzW; ncXse: oVhbn: goto tb6r_; Ee5P7: $rs = array("\143\x6f\144\x65" => 0, "\151\156\x66\157" => array()); goto JNcol; Sc1hV: return json_encode($rs); goto DbsUP; V4_0N: if (!(empty($orderinfo["\144\x65\141\x6c\x49\144"]) || empty($orderinfo["\x61\160\160\113\x65\x79"]) || empty($rsaPublicKeyStr) || empty($rsaPriKeyStr))) { goto NUzdb; } goto orsqZ; luUoJ: $requestParamsArr = array("\157\162\x64\x65\x72\x49\x64" => $data["\157\165\164\137\x74\x72\141\144\x65\137\x6e\x6f"], "\162\x65\x66\165\156\144\102\141\164\x63\150\x49\144" => self::createNoncestr()); goto pXh_q; emj4O: $rs["\155\x73\x67"] = "\350\257\xb7\xe9\205\x8d\347\275\256\345\225\206\xe6\210\xb7\344\277\xa1\346\x81\257"; goto Sc1hV; q6y7R: $rs["\x63\x6f\144\145"] = 1; goto Z7XVU; uxQUy: $rsaPriKeyStr = $param["\x70\x61\171\137\x73\x65\x63\x72\145\164"] ? $param["\160\x61\171\137\x73\145\x63\162\145\x74"] : ''; goto V4_0N; ceuXs: return json_encode($rs); goto Eh7Vt; Z7XVU: $rs["\x6d\163\x67"] = "\350\256\xa2\345\x8d\x95\344\270\xbb\xe9\242\230\345\267\262\xe6\224\xb9\xe5\x8f\x98"; goto BQ4d_; DbsUP: uh14j: goto cPHRk; Ep3Ik: return json_encode($rs); goto UwfQo; ZfyeZ: $orderinfo = []; goto Z9QxX; COHzW: return json_encode($rs); goto aV3Ls; UwfQo: ZmOTN: goto UlZJJ; q9thm: $rsaPublicKeyStr = $param["\141\x70\x70\137\x70\x75\x62"] ? $param["\141\160\x70\137\x70\165\142"] : ''; goto vq1M8; Z9QxX: if (!empty($info)) { goto oVhbn; } goto Rnb4m; B033Q: $rs["\155\x73\147"] = "\350\256\242\345\215\225\344\xb8\215\345\xad\x98\xe5\234\250"; goto UWTd_; sfG0t: if (!empty($param)) { goto uh14j; } goto BkWOa; JNcol: $info = Db::name($this->op)->where("\157\165\164\x5f\164\x72\x61\x64\145\x5f\x6e\x6f", $data["\157\x75\x74\137\x74\x72\x61\x64\145\137\156\x6f"])->find(); goto ZfyeZ; Rnb4m: $rs["\x63\x6f\144\x65"] = 1; goto B033Q; UWTd_: return json_encode($rs); goto ncXse; kqkts: $rs["\x6d\163\x67"] = "\xe7\xad\276\345\x90\215\xe9\x94\231\xe8\257\xaf\54\xe8\xaf\xb7\xe7\xa1\xae\xe8\256\xa4\345\217\x82\xe6\225\260\xe6\x98\xaf\345\x90\246\345\241\253\xe5\x86\x99\346\255\xa3\347\xa1\256"; goto Ep3Ik; Ako9d: $rs["\x63\x6f\144\145"] = 1; goto kqkts; lM7VZ: if ($checkSignRes) { goto ZmOTN; } goto Ako9d; hj6f4: $orderinfo["\144\x65\x61\x6c\x49\144"] = $param["\144\145\x61\x6c\111\x64"] ? $param["\144\x65\x61\x6c\x49\144"] : ''; goto q9thm; tb6r_: if (!($info->pay_status != 0)) { goto nfNt0; } goto q6y7R; BQ4d_: return json_encode($rs); goto QUUIu; QUUIu: nfNt0: goto s1ycj; aV3Ls: } private function createNoncestr($length = 32) { goto z0r5d; DGY6b: tYu6L: goto T2VZ9; z0r5d: $chars = "\141\x62\x63\144\145\146\x67\x68\151\x6a\x6b\154\155\x6e\157\x70\161\162\x73\x74\165\166\x77\170\x79\172\60\61\62\63\64\x35\x36\x37\x38\x39"; goto OHgLR; Ob58u: $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1); goto DGY6b; aGtkT: goto k5hg8; goto QMI9b; OHgLR: $str = ''; goto FTwce; cET56: k5hg8: goto VLer_; T2VZ9: $i++; goto aGtkT; fOiMV: return $str; goto sd8mb; QMI9b: gB6VV: goto fOiMV; VLer_: if (!($i < $length)) { goto gB6VV; } goto Ob58u; FTwce: $i = 0; goto cET56; sd8mb: } }