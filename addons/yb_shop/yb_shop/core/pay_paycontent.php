<?php
 error_reporting(0); define("\111\x4e\137\x49\101", ''); date_default_timezone_set("\x41\x73\151\141\x2f\143\x68\157\x6e\x67\x71\151\156\147"); define("\x41\x50\x50\x5f\120\x41\x54\x48", __DIR__ . "\57\141\160\x70\x6c\151\x63\141\164\x69\x6f\x6e\x2f"); define("\103\x4f\116\x46\x5f\x50\x41\124\110", APP_PATH); define("\x45\130\x54\x45\x4e\104\x5f\x50\x41\x54\x48", __DIR__ . "\x2f\145\170\x74\145\x6e\144\x2f"); require __DIR__ . "\57\x74\150\x69\x6e\153\x70\x68\x70\57\142\x61\163\x65\56\x70\150\x70"; require EXTEND_PATH . "\x57\x78\160\x61\x79\57\x57\x78\x50\x61\x79\x2e\x41\160\151\x2e\160\x68\x70"; use think\config; use think\Db; use think\Log; use think\Exception; goto lYWzp; VvlbV: $doc = new \DOMDocument(); goto bT1oS; kX6q2: error_reporting(0); goto oNSq8; kzzy1: if ($notify_data) { goto vASu3; } goto wKoUY; rNMxs: if (!$info) { goto mLjL2; } goto ig_kt; tGk_s: $out_trade_no = $doc->getElementsByTagName("\x6f\x75\164\137\x74\x72\x61\144\x65\x5f\x6e\157")->item(0)->nodeValue; goto vjL_G; bT1oS: $doc->loadXML($notify_data); goto tGk_s; xLyi1: $info = Db::name("\171\142\x73\x63\x5f\160\141\171\x63\x6f\x6e\x74\x65\156\164\x5f\157\x72\144\145\162\163")->where(["\157\165\164\137\x74\162\141\144\145\x5f\x6e\157" => $out_trade_no, "\x69\163\120\141\x79" => 0])->find(); goto rNMxs; lYWzp: $filename = APP_PATH . "\x64\141\164\141\142\141\x73\x65\56\160\150\160"; goto WzXBH; RoFNm: vASu3: goto VvlbV; qIA65: try { goto VHWEH; HhVZw: $time = time(); goto LHk4r; LHk4r: if (empty($user)) { goto nK1YG; } goto qbzZx; l9PLo: $expire = $user["\145\170\x70\151\x72\145"] + $info["\144\141\171"] * 24 * 60 * 60 * $info["\x6e\x75\155"]; goto KD71Y; fUrWv: $user = Db::name("\x79\x62\163\143\137\x70\x61\x79\143\x6f\156\164\x65\156\164\137\165\163\145\162")->where(["\165\x69\x64" => $info["\x75\151\x64"], "\155\143\150\137\151\x64" => $info["\x6d\143\150\x5f\x69\x64"]])->find(); goto HhVZw; Z6KWX: Db::name("\x79\142\x73\x63\137\160\141\171\x63\157\x6e\x74\145\156\x74\137\165\163\x65\162")->insert($udata); goto JlRQ8; iOai0: $udata["\165\x69\x64"] = $info["\165\x69\144"]; goto D0f9O; n0XOw: Db::commit(); goto iBeOV; z2UpJ: if (!($info["\160\x72\151\143\x65\137\x69\x64"] > 0)) { goto C0y_R; } goto fUrWv; aYpHt: Db::name("\x79\142\163\143\137\160\x61\171\143\157\156\164\x65\156\164")->where(["\151\x64" => $info["\143\x6f\x6e\x74\145\156\164\137\x69\x64"], "\155\x63\x68\137\151\x64" => $info["\155\x63\x68\x5f\151\x64"]])->setInc("\142\x75\171\x5f\143\x6f\165\156\164\x5f\162\145\x61\154"); goto n0XOw; Azx9i: $udata["\145\x78\x70\151\162\145"] = $time + $info["\144\141\171"] * 24 * 60 * 60 * $info["\156\165\155"]; goto Z6KWX; KD71Y: Db::name("\171\142\x73\143\x5f\160\x61\x79\143\x6f\x6e\x74\x65\x6e\164\137\165\x73\x65\162")->where(["\x75\151\x64" => $info["\165\151\x64"], "\x6d\x63\x68\x5f\x69\144" => $info["\x6d\x63\150\137\151\x64"]])->update(["\x65\x78\160\x69\x72\x65" => $expire]); goto cXX1f; JlRQ8: q8bD0: goto Dzd02; D0f9O: $udata["\155\x63\150\x5f\151\144"] = $info["\155\143\x68\137\151\x64"]; goto Azx9i; Dzd02: C0y_R: goto aYpHt; VHWEH: Db::name("\171\142\163\143\137\160\141\x79\143\x6f\156\x74\145\x6e\164\137\x70\x61\x79\155\145\x6e\164")->where(["\157\165\164\x5f\x74\162\141\x64\x65\137\x6e\157" => $out_trade_no, "\160\141\x79\x5f\163\164\141\x74\165\163" => 0])->update($data_pay); goto Uf7A2; cXX1f: goto q8bD0; goto YqLU5; Uf7A2: $res = Db::name("\x79\142\x73\143\x5f\x70\x61\171\143\157\x6e\164\145\156\164\x5f\x6f\x72\144\145\x72\163")->where(["\x6f\x75\x74\x5f\x74\x72\x61\x64\x65\x5f\x6e\x6f" => $out_trade_no, "\x69\163\x50\x61\171" => 0])->update($data); goto z2UpJ; qbzZx: $user["\145\170\x70\x69\162\145"] = $user["\x65\170\160\x69\162\145"] < $time ? $time : $user["\145\x78\x70\x69\162\x65"]; goto l9PLo; YqLU5: nK1YG: goto iOai0; iBeOV: } catch (\Exception $e) { Db::rollback(); Log::write($out_trade_no . "\54\xe6\224\xaf\xe4\xbb\230\xe7\212\266\346\x80\x81\xe6\x9b\xb4\346\224\xb9\345\xa4\xb1\xe8\264\245" . $e, "\x70\x61\x79\143\157\x6e\x74\x65\x6e\164\137\160\141\171\137\163\164\x61\x74\145\x5f\143\150\141\x6e\x67\145\x5f\x66\x61\151\154"); } goto MNjyT; Ex3nN: $data_pay = array("\160\x61\171\x5f\x73\x74\141\164\165\163" => 1, "\x70\x61\171\x5f\x74\x69\x6d\x65" => time()); goto xLyi1; oNSq8: $notify_data = isset($GLOBALS["\x48\x54\x54\120\137\122\x41\127\137\x50\x4f\x53\x54\x5f\104\101\124\x41"]) ? $GLOBALS["\110\124\124\120\x5f\x52\x41\127\137\120\117\123\x54\x5f\104\101\124\101"] : file_get_contents("\160\x68\x70\x3a\57\x2f\x69\x6e\x70\x75\164"); goto kzzy1; wKoUY: exit("\xe6\x9c\xaa\346\224\xb6\xe5\x88\260\345\x9b\x9e\xe8\260\203"); goto RoFNm; WzXBH: Config::load($filename, "\144\141\x74\141\x62\x61\x73\x65"); goto kX6q2; vjL_G: $data = array("\151\163\x50\x61\x79" => 1, "\160\141\x79\124\151\x6d\x65" => time()); goto Ex3nN; ig_kt: Db::startTrans(); goto qIA65; MNjyT: mLjL2:
