<?php
 error_reporting(0); define("\111\116\x5f\111\x41", ''); define("\111\x41\137\x52\117\x4f\x54", ''); date_default_timezone_set("\x41\163\x69\141\x2f\143\150\157\156\147\161\151\156\x67"); define("\101\x50\120\x5f\120\101\x54\x48", __DIR__ . "\x2f\x61\x70\x70\x6c\x69\143\141\164\x69\157\156\x2f"); define("\103\x4f\116\106\137\x50\101\x54\x48", APP_PATH); define("\x45\x58\x54\105\x4e\x44\x5f\120\x41\124\110", __DIR__ . "\x2f\145\x78\x74\x65\x6e\x64\x2f"); require __DIR__ . "\x2f\x74\x68\x69\156\153\160\150\160\x2f\x62\141\x73\145\56\x70\x68\x70"; require EXTEND_PATH . "\x57\x78\160\141\171\57\127\170\x50\x61\171\56\101\160\x69\56\160\x68\160"; require __DIR__ . "\x2f\x61\x70\160\x6c\x69\x63\141\164\x69\x6f\156\x2f\141\x64\155\151\156\x2f\163\x65\x72\166\x69\143\x65\57\101\154\x69\x79\165\156\123\145\162\x76\x69\x63\145\x2e\x70\150\160"; require __DIR__ . "\x2f\x61\x70\x70\154\151\143\141\x74\x69\x6f\x6e\x2f\141\144\x6d\151\x6e\57\163\x65\162\x76\x69\x63\145\x2f\120\162\x69\156\164\x65\x72\123\x65\x72\166\x69\143\x65\56\x70\150\x70"; use app\admin\service\PrinterService; use app\admin\service\AliyunService; use think\config; use think\Db; use think\Log; goto GOUQC; Jj1a2: $data_jf["\143\157\x6e\163\x75\155\x65"] = $jifen; goto qZ0wv; Y2tf_: goto VxB1M; goto jrJHH; NFlKf: $order_money = $a["\157\162\x64\x65\x72\x5f\x6d\x6f\156\145\171"]; goto PYMNC; JbpwT: Db::startTrans(); goto N1kWb; cWvYz: if (!$a) { goto szwWY; } goto VayjS; CqwNJ: BGCwD: goto Zh2zV; PYMNC: $jifen = floor(floatval($order_money) / floatval($b["\143\x6f\x6e\163\x5f\155\x6f\156\145\x79"])) * floatval($b["\x63\x6f\156\163\137\x69\x6e\x74\145\x67\162\x61\x6c"]); goto aBWJO; WhK1F: Db::name("\171\142\x73\143\x5f\x75\x73\145\x72")->where("\165\151\144", $a["\x62\x75\171\x65\162\137\x69\x64"])->update($new_data); goto XQKa6; y1oZ2: $data_pay = array("\160\x61\171\x5f\163\x74\x61\164\x75\163" => 1, "\160\141\x79\137\x74\151\x6d\x65" => time()); goto aZJDj; GYH1L: JXzyP: goto RfEVt; vV29a: $jifen = 0; goto kzCEN; CmSUq: $i = 0; goto mEe7N; vhCAX: $i++; goto Y2tf_; jrJHH: T_Qra: goto cllma; kzCEN: if (!$b) { goto UqvVl; } goto qNAie; GOUQC: $filename = APP_PATH . "\144\141\164\141\142\x61\163\x65\x2e\x70\150\160"; goto qXA5j; TrZmq: $a = Db::name("\x79\142\163\143\137\157\x72\x64\145\x72")->where(["\157\x75\164\137\x74\162\141\144\x65\137\156\157" => $out_trade_no, "\157\x72\144\145\x72\x5f\163\164\141\x74\x75\x73" => 0])->find(); goto cWvYz; VayjS: $pp = new PrinterService($a["\x6d\x63\150\x5f\x69\x64"], $a["\157\x72\144\x65\162\137\x69\144"], "\x70\141\x79", 0); goto gAE5e; QK2AA: $doc = new \DOMDocument(); goto QLOSK; wYnZF: if (!$d) { goto HdZyb; } goto CmSUq; QNVn0: $data_jf["\157\x72\144\x65\x72\137\x69\144"] = $a["\x6f\162\x64\145\x72\x5f\x69\x64"]; goto aZ_yW; qNAie: $b = json_decode($b, true); goto RfnO7; iYIww: if (!($i < count($d))) { goto T_Qra; } goto OHGjb; mEe7N: VxB1M: goto iYIww; XQKa6: $data_jf["\165\163\x65\162\137\151\144"] = $a["\142\165\171\x65\162\x5f\x69\144"]; goto EBDah; kqGYh: $new_data["\x63\157\x6e\163\x75\x6d\x65"] = $jf_all; goto nJ8Ah; dOjzH: error_reporting(0); goto MOZ0B; OHGjb: if (!($jf_all >= $d[$i]["\150\151\x65\162\141\x72\x63\150\171"])) { goto BGCwD; } goto r3P0O; gTTVa: $push_config = array("\x61\160\160\151\x64" => "\x4c\124\x41\x49\101\66\x65\161\165\x77\x53\x79\153\123\103\113", "\x73\145\x63\x72\x65\x74" => "\x32\117\x54\161\x6f\131\123\x55\x32\130\126\x5a\x65\x32\70\x63\146\x69\112\160\152\153\x31\106\x44\x33\102\x45\161\x59", "\141\160\x70\x6b\x65\171" => "\x32\x34\71\66\x35\x39\x33\64"); goto dOjzH; E0rvi: $b = Db::name("\171\x62\163\x63\x5f\x69\156\164\x65\x67\x72\141\154\x5f\162\165\154\x65")->where("\x6d\143\150\137\x69\144", $a["\155\x63\150\x5f\151\144"])->value("\144\x61\164\x61"); goto vV29a; qZ0wv: $data_jf["\x6d\143\150\137\151\144"] = $a["\x6d\x63\x68\x5f\x69\144"]; goto QNVn0; I7rC5: goto T_Qra; goto CqwNJ; RfnO7: if (!($b["\x63\157\156\x73\137\x73\164\x61\x74\x75\163"] == 1)) { goto JXzyP; } goto NFlKf; MOZ0B: $notify_data = isset($GLOBALS["\110\x54\124\120\137\x52\101\x57\137\120\117\123\124\137\104\x41\124\101"]) ? $GLOBALS["\x48\124\x54\120\137\122\101\127\137\120\x4f\x53\124\137\104\x41\x54\101"] : file_get_contents("\x70\x68\x70\x3a\x2f\57\151\x6e\160\x75\164"); goto zlogG; xHR3m: exit("\xe6\234\252\xe6\x94\266\345\x88\xb0\xe5\233\x9e\350\xb0\x83"); goto BBZvB; BBZvB: yT5yv: goto QK2AA; aZ_yW: Db::name("\x79\x62\x73\143\x5f\151\156\164\x65\x67\162\x61\x6c\x5f\144\145\x74\x61\151\x6c")->insert($data_jf); goto I7rC5; QLOSK: $doc->loadXML($notify_data); goto UmbXL; nJ8Ah: $new_data["\151\x6e\x74\x65\147\x72\x61\x6c"] = round($jifen) + intval($c["\151\156\164\145\147\x72\141\154"]); goto WhK1F; pzJeZ: szwWY: goto JbpwT; UmbXL: $out_trade_no = $doc->getElementsByTagName("\x6f\165\164\x5f\164\x72\x61\144\x65\x5f\x6e\157")->item(0)->nodeValue; goto zUmSz; zUmSz: $data = array("\157\x72\x64\x65\162\137\163\164\x61\x74\x75\x73" => 1, "\x70\141\x79\x5f\163\164\x61\164\165\x73" => 1, "\160\x61\171\x5f\164\171\160\145" => 1, "\160\141\171\137\164\x69\155\145" => time()); goto y1oZ2; cllma: HdZyb: goto GYH1L; Zh2zV: UnFuG: goto vhCAX; EBDah: $data_jf["\151\x6e\164\145\147\x72\141\154"] = $jifen; goto Jj1a2; gAE5e: $pp->print_order(); goto E0rvi; aZJDj: $data_jf = array("\x74\151\x6d\x65" => time(), "\x69\164\171\x70\145" => 1, "\143\164\171\x70\x65" => 1, "\x65\x78\160\154\x61\151\x6e" => "\xe6\266\210\xe8\xb4\271"); goto TrZmq; aBWJO: $c = Db::name("\x79\142\163\143\137\165\163\145\x72")->where("\165\151\x64", $a["\x62\x75\171\145\x72\137\151\x64"])->find(); goto RhQ6T; RfEVt: UqvVl: goto pzJeZ; zlogG: if (!empty($notify_data)) { goto yT5yv; } goto xHR3m; vTnO7: $d = Db::name("\171\142\x73\143\137\165\163\145\162\x5f\154\x65\x76\x65\154")->where("\155\143\x68\137\x69\144", $a["\155\x63\x68\x5f\151\x64"])->order("\150\x69\x65\x72\x61\x72\143\150\x79", "\x64\x65\163\x63")->select(); goto wYnZF; r3P0O: $new_data["\x6c\x65\x76\x65\x6c\137\151\144"] = $d[$i]["\151\x64"]; goto kqGYh; RhQ6T: $jf_all = round($jifen) + intval($c["\x63\157\x6e\163\165\155\x65"]); goto vTnO7; qXA5j: Config::load($filename, "\x64\141\164\141\x62\x61\x73\x65"); goto gTTVa; N1kWb: try { goto Nu24K; WNT2Z: Db::name("\x79\142\163\x63\137\x6f\162\x64\145\x72\137\x70\141\x79\155\x65\x6e\x74")->where(["\x6f\x75\x74\137\164\162\x61\144\x65\x5f\x6e\157" => $out_trade_no, "\160\141\x79\x5f\163\x74\141\164\x75\163" => 0])->update($data_pay); goto wVptS; ybQyI: $user = Db::name("\171\x62\163\143\x5f\x62\x75\x73\x69\x6e\x65\x73\163")->where(["\x69\x64" => $mid])->find(); goto S4mSf; glmXn: $data["\x75\163\x65\x72\x6e\x61\x6d\145"] = $user["\156\x61\155\x65"]; goto oMHkP; IYpsb: CYwdE: goto k5RKi; c02zm: $un_url = explode("\72", $un_data["\x75\x72\154"]); goto VnAwU; S4mSf: $un_data["\165\x72\154"] = $_SERVER["\x48\x54\124\x50\x5f\x48\117\123\124"]; goto c02zm; NQNWL: $mid = $order["\x6d\143\x68\137\151\x64"]; goto ybQyI; tM8aO: $alias = md5($data["\x75\x72\x6c"] . $data["\x75\x73\145\162\156\x61\155\x65"] . $data["\165\156\151\x61\x63\151\x64"]); goto o8TB0; Nu24K: $res = Db::name("\171\x62\x73\x63\x5f\157\x72\144\x65\162")->where(["\157\x75\164\x5f\x74\162\x61\x64\x65\137\156\x6f" => $out_trade_no, "\x6f\x72\144\x65\162\x5f\x73\164\x61\x74\165\163" => 0])->update($data); goto WNT2Z; bMlzK: if (!(!empty($res) && $res > 0)) { goto CYwdE; } goto yuHlO; yuHlO: $order = Db::name("\x79\142\163\x63\x5f\157\x72\144\x65\162")->where(["\x6f\x75\164\137\164\162\x61\x64\145\x5f\156\157" => $out_trade_no])->find(); goto NQNWL; oMHkP: $data["\x75\156\x69\x61\x63\x69\144"] = $user["\165\x6e\151\x61\143\151\x64"]; goto tM8aO; VnAwU: $data["\x75\162\154"] = $un_url[0]; goto glmXn; o8TB0: $aliyun = new AliyunService(); goto tBiJP; wVptS: Db::commit(); goto bMlzK; tBiJP: $aliyun->push($push_config, $alias); goto O0_qg; O0_qg: Log::write($out_trade_no . "\x2c\xe6\224\257\xe4\xbb\x98\xe7\212\xb6\346\x80\201\346\233\xb4\xe6\x94\xb9\xe6\210\x90\xe5\x8a\237", "\163\150\157\160\x5f\x70\x61\171\x5f\163\164\x61\164\145\x5f\143\150\x61\156\x67\x65\x5f\x73\165\x63\143\145\x73\x73"); goto IYpsb; k5RKi: } catch (\Exception $e) { Db::rollback(); Log::write($out_trade_no . "\54\xe6\x94\257\344\273\230\xe7\212\266\xe6\200\201\xe6\x9b\264\346\224\xb9\345\244\261\350\264\245" . $e, "\163\x68\157\160\x5f\x70\141\x79\137\x73\164\141\164\x65\137\x63\150\141\156\147\x65\x5f\x66\x61\151\x6c"); }