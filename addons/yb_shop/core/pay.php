<?php
 error_reporting(0); define("\111\116\x5f\111\x41", ''); define("\x49\101\137\122\x4f\117\x54", ''); date_default_timezone_set("\101\x73\151\141\57\x63\150\x6f\156\147\161\151\156\147"); define("\101\120\x50\137\x50\x41\124\x48", __DIR__ . "\x2f\141\x70\x70\154\151\143\x61\164\x69\x6f\x6e\x2f"); define("\102\101\123\105\137\122\117\117\x54", str_replace("\x63\157\162\x65\57", '', __DIR__ . "\x2f")); define("\103\x4f\116\106\137\x50\x41\124\x48", APP_PATH); define("\x45\x58\x54\105\116\x44\137\x50\101\x54\110", __DIR__ . "\x2f\x65\x78\x74\145\x6e\x64\57"); require __DIR__ . "\x2f\164\150\151\156\x6b\x70\150\x70\57\142\x61\x73\145\56\160\x68\160"; require EXTEND_PATH . "\x57\170\x70\x61\171\57\127\170\x50\141\x79\56\101\160\151\x2e\160\x68\160"; require __DIR__ . "\x2f\141\160\x70\154\x69\143\x61\x74\151\x6f\156\57\x61\144\155\x69\x6e\x2f\163\145\x72\166\151\x63\x65\x2f\x41\x6c\151\171\x75\156\x53\x65\162\166\151\143\x65\x2e\160\150\160"; require __DIR__ . "\57\x61\160\x70\154\x69\x63\141\164\x69\x6f\156\57\141\144\155\x69\156\x2f\163\145\x72\x76\151\143\x65\57\x50\162\x69\x6e\x74\145\162\x53\145\x72\x76\x69\x63\145\56\x70\150\x70"; require __DIR__ . "\x2f\x61\x70\160\x6c\x69\143\141\x74\151\x6f\x6e\57\x61\x70\151\57\163\145\x72\166\x69\x63\x65\57\101\x72\154\151\153\151\123\145\x72\x76\151\x63\145\x2e\160\x68\160"; use app\api\service\ArlikiService; use app\admin\service\PrinterService; use app\admin\service\AliyunService; use think\config; use think\Db; use think\Log; goto J6mau; MBjEn: $jf_all = round($jifen) + intval($c["\143\x6f\x6e\x73\x75\155\145"]); goto qpsFg; IbGpI: $data_jf["\155\x63\150\137\x69\144"] = $a["\155\143\x68\x5f\151\144"]; goto iEVZt; Uft4c: oY9wJ: goto GwZ1l; TUKQK: if (!($b["\143\x6f\x6e\x73\x5f\163\164\x61\x74\165\163"] == 1)) { goto Om1q7; } goto IPk7M; dfHtO: g3YLN: goto irHju; pQQZT: $data = array("\x6f\x72\144\x65\x72\x5f\163\164\141\x74\x75\x73" => 1, "\160\x61\x79\137\163\x74\x61\x74\165\163" => 1, "\160\x61\171\137\164\171\160\x65" => 1, "\160\x61\171\137\164\x69\x6d\x65" => time()); goto IdeJB; dRWuD: $data_jf["\x63\x6f\156\x73\x75\x6d\x65"] = $jifen; goto IbGpI; n3WkY: $new_data["\x63\x6f\x6e\x73\x75\155\x65"] = $jf_all; goto HKDFr; MmPs5: $jifen = floor(floatval($order_money) / floatval($b["\x63\157\156\x73\137\155\157\x6e\145\171"])) * floatval($b["\x63\157\x6e\x73\137\x69\x6e\x74\x65\147\x72\x61\x6c"]); goto DUpGU; CZPJ0: Config::load($filename, "\144\x61\164\x61\x62\141\x73\x65"); goto AZ2ps; irHju: libxml_disable_entity_loader(true); goto kf9y5; eqT0N: $doc->loadXML($notify_data); goto JjSd7; JjSd7: $out_trade_no = $doc->getElementsByTagName("\157\x75\x74\x5f\164\162\141\x64\145\137\156\157")->item(0)->nodeValue; goto pQQZT; iEVZt: $data_jf["\x6f\x72\x64\x65\162\137\151\144"] = $a["\157\x72\144\145\x72\x5f\x69\144"]; goto jWjye; Ih5Sf: $a = Db::name("\x79\x62\163\143\x5f\x6f\x72\x64\145\x72")->where(["\157\x75\164\137\x74\x72\x61\144\x65\x5f\156\157" => $out_trade_no, "\x6f\162\144\145\x72\x5f\163\x74\x61\x74\165\163" => 0])->find(); goto IieZ0; Ku7F7: $b = json_decode($b, true); goto TUKQK; y9t84: if (!$b) { goto vHosg; } goto Ku7F7; f1pxm: $data_jf["\x75\163\145\x72\137\151\144"] = $a["\142\x75\x79\x65\x72\x5f\151\x64"]; goto WCxnP; WCxnP: $data_jf["\x69\x6e\164\145\x67\162\141\x6c"] = $jifen; goto dRWuD; hYlTq: if (!($i < count($d))) { goto QkqnG; } goto bTjBn; Ro8Fv: vHosg: goto Uft4c; uA1Ki: Om1q7: goto Ro8Fv; lkiF_: $new_data["\x6c\x65\x76\x65\x6c\x5f\x69\144"] = $d[$i]["\x69\x64"]; goto n3WkY; kZCiu: $notify_data = isset($GLOBALS["\x48\124\x54\x50\x5f\x52\101\127\137\120\117\x53\124\137\x44\x41\124\101"]) ? $GLOBALS["\x48\x54\x54\120\137\x52\101\127\x5f\x50\117\x53\x54\137\104\101\x54\101"] : file_get_contents("\x70\150\x70\x3a\x2f\x2f\x69\156\x70\165\x74"); goto HnzCi; o1JWa: $i++; goto YuEV6; aRMWO: if (!$d) { goto RzQbS; } goto P1gn4; HKDFr: $new_data["\x69\156\164\145\x67\x72\x61\x6c"] = round($jifen) + intval($c["\x69\156\x74\x65\x67\x72\x61\x6c"]); goto GrjlX; HnzCi: if (!empty($notify_data)) { goto g3YLN; } goto jdimW; VlM9P: QkqnG: goto trWfl; jdimW: exit("\xe6\x9c\252\346\224\xb6\xe5\x88\260\xe5\x9b\236\xe8\xb0\x83"); goto dfHtO; J6mau: $filename = APP_PATH . "\x64\141\164\x61\x62\x61\163\x65\x2e\x70\x68\160"; goto CZPJ0; Vv00G: error_reporting(0); goto kZCiu; b5_LR: $b = Db::name("\171\x62\x73\x63\x5f\151\x6e\x74\145\147\x72\141\154\137\162\x75\154\145")->where("\x6d\143\x68\137\x69\144", $a["\155\143\150\137\151\x64"])->value("\x64\x61\164\x61"); goto Ht2KY; d4Nro: goto QkqnG; goto dLpTQ; Ht2KY: $jifen = 0; goto y9t84; qpsFg: $d = Db::name("\x79\142\163\143\137\165\163\145\x72\137\x6c\x65\166\145\154")->where("\x6d\x63\x68\x5f\x69\144", $a["\155\143\150\137\x69\x64"])->order("\x68\x69\x65\162\x61\162\143\150\171", "\x64\145\x73\143")->select(); goto aRMWO; G6jfE: grkLN: goto o1JWa; P1gn4: $i = 0; goto TBpL2; TBpL2: qZ2nE: goto hYlTq; trWfl: RzQbS: goto uA1Ki; IdeJB: $data_pay = array("\x70\x61\171\137\x73\164\141\x74\x75\163" => 1, "\x70\x61\x79\x5f\x74\x69\x6d\145" => time()); goto hY1Mf; dLpTQ: fRdI3: goto G6jfE; IieZ0: if (!$a) { goto oY9wJ; } goto b5_LR; DUpGU: $c = Db::name("\x79\142\x73\143\x5f\x75\x73\145\162")->where("\x75\151\x64", $a["\x62\165\171\145\x72\x5f\151\x64"])->find(); goto MBjEn; YuEV6: goto qZ2nE; goto VlM9P; IPk7M: $order_money = $a["\x6f\162\x64\145\162\137\x6d\x6f\x6e\145\171"]; goto MmPs5; hY1Mf: $data_jf = array("\164\151\x6d\145" => time(), "\151\164\x79\160\145" => 1, "\143\x74\x79\x70\145" => 1, "\x65\x78\160\x6c\141\x69\156" => "\346\266\210\xe8\xb4\271"); goto Ih5Sf; kf9y5: $doc = new \DOMDocument(); goto eqT0N; bTjBn: if (!($jf_all >= $d[$i]["\x68\x69\x65\x72\x61\x72\x63\x68\171"])) { goto fRdI3; } goto lkiF_; GwZ1l: Db::startTrans(); goto Z_nb_; jWjye: Db::name("\171\x62\163\x63\137\151\156\164\145\x67\162\x61\x6c\x5f\x64\x65\164\x61\151\154")->insert($data_jf); goto d4Nro; GrjlX: Db::name("\x79\142\x73\143\x5f\165\x73\145\x72")->where("\165\x69\144", $a["\x62\165\171\145\162\x5f\151\144"])->update($new_data); goto f1pxm; AZ2ps: $push_config = array("\141\160\x70\x69\x64" => "\114\x54\101\x49\101\x36\x65\161\165\167\123\171\x6b\123\x43\113", "\x73\145\143\162\145\x74" => "\62\x4f\x54\161\x6f\131\123\125\x32\130\126\x5a\x65\62\x38\143\x66\x69\112\160\x6a\153\x31\x46\x44\63\x42\x45\161\131", "\x61\160\160\153\x65\x79" => "\x32\x34\x39\x36\x35\71\63\x34"); goto Vv00G; Z_nb_: try { goto RXCCS; Xkavg: $data["\165\163\x65\162\156\x61\x6d\x65"] = $user["\x6e\x61\155\145"]; goto nHcZN; ZO6SM: $pp->print_order(); goto M1Q69; nHcZN: $data["\x75\156\x69\x61\x63\151\x64"] = $user["\x75\x6e\151\x61\143\x69\144"]; goto OoQy5; ft_2V: $pp = new PrinterService($a["\x6d\x63\x68\137\151\x64"], $a["\157\x72\144\x65\x72\x5f\151\144"], "\x70\x61\x79", 0); goto ZO6SM; RU8iz: if (!(!empty($res) && $res > 0)) { goto XqKkS; } goto T3Uya; Ig7HC: $user = Db::name("\x79\142\x73\x63\x5f\142\165\x73\x69\156\x65\x73\x73")->where(["\x69\x64" => $mid])->find(); goto BZYCP; M1Q69: XqKkS: goto UVCFI; aTnGw: Log::write($out_trade_no . "\54\346\x94\xaf\xe4\xbb\230\xe7\x8a\266\346\200\201\xe6\233\264\346\x94\271\346\x88\220\345\x8a\237", "\x73\150\157\160\137\160\x61\171\137\x73\164\141\x74\145\x5f\143\150\x61\156\147\x65\137\x73\165\x63\x63\145\163\x73"); goto ft_2V; RXCCS: $res = Db::name("\171\x62\x73\x63\x5f\x6f\x72\144\145\x72")->where(["\157\165\x74\x5f\x74\162\141\x64\x65\137\156\157" => $out_trade_no, "\157\x72\x64\x65\x72\137\163\164\141\x74\x75\x73" => 0])->update($data); goto GIp35; XG1ZQ: $r = $sms->send_sms($a["\157\x72\x64\x65\162\x5f\x6e\157"] . "\x28\346\x99\256\351\x80\x9a\51", 2); goto aTnGw; qyQCo: $mid = $order["\x6d\143\x68\x5f\x69\144"]; goto Ig7HC; T3Uya: $order = Db::name("\171\x62\163\x63\137\157\162\x64\x65\x72")->where(["\157\x75\164\137\x74\x72\141\x64\145\x5f\156\157" => $out_trade_no])->find(); goto qyQCo; wTOdZ: Db::commit(); goto RU8iz; twyze: $aliyun->push($push_config, $alias); goto d3E7u; BZYCP: $un_data["\x75\162\154"] = $_SERVER["\x48\124\x54\120\137\x48\117\x53\124"]; goto lc_n7; d3E7u: $sms = new ArlikiService($a["\155\143\x68\137\151\144"]); goto XG1ZQ; RbPMK: $aliyun = new AliyunService(); goto twyze; OoQy5: $alias = md5($data["\165\x72\154"] . $data["\x75\163\145\162\x6e\141\155\x65"] . $data["\x75\x6e\151\x61\143\151\x64"]); goto RbPMK; lc_n7: $un_url = explode("\x3a", $un_data["\x75\x72\154"]); goto futxA; futxA: $data["\165\162\154"] = $un_url[0]; goto Xkavg; GIp35: Db::name("\x79\142\163\143\x5f\157\162\144\145\x72\x5f\160\141\171\x6d\145\156\x74")->where(["\157\165\164\137\164\x72\141\144\145\137\x6e\157" => $out_trade_no, "\160\x61\x79\137\x73\x74\x61\x74\165\x73" => 0])->update($data_pay); goto wTOdZ; UVCFI: } catch (\Exception $e) { Db::rollback(); Log::write($out_trade_no . "\54\xe6\x94\257\xe4\xbb\x98\347\x8a\266\346\200\201\346\233\xb4\346\x94\271\345\244\xb1\xe8\xb4\245" . $e, "\163\x68\157\x70\137\160\141\x79\137\163\x74\x61\x74\x65\137\x63\150\141\156\147\x65\x5f\x66\x61\151\x6c"); }