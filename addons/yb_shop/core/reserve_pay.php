<?php
 error_reporting(0); define("\111\x4e\137\x49\101", ''); define("\x49\x41\137\x52\x4f\x4f\x54", ''); date_default_timezone_set("\101\x73\151\141\57\143\x68\157\156\147\161\x69\x6e\x67"); define("\x41\120\120\x5f\120\101\124\110", __DIR__ . "\x2f\x61\x70\160\x6c\x69\x63\141\164\x69\157\156\57"); define("\103\x4f\x4e\x46\x5f\120\101\x54\x48", APP_PATH); define("\105\x58\x54\105\116\x44\137\x50\101\124\x48", __DIR__ . "\x2f\x65\x78\164\145\156\x64\x2f"); require __DIR__ . "\x2f\164\150\x69\x6e\x6b\x70\150\x70\x2f\142\141\163\145\56\x70\x68\x70"; require EXTEND_PATH . "\x57\170\160\x61\x79\x2f\127\x78\x50\141\x79\x2e\x41\x70\151\56\x70\x68\x70"; use think\config; use think\Db; use think\Log; use think\Exception; goto cNIEL; HzTbE: exit("\xe6\x9c\252\346\x94\266\345\x88\xb0\xe5\233\x9e\350\xb0\203"); goto xsuG0; fBcBW: $data_pay = array("\x70\141\x79\x5f\163\x74\141\x74\x75\163" => 1, "\x70\141\x79\x5f\x74\x69\x6d\x65" => time()); goto pJavw; xsuG0: u5C10: goto e1nJI; Mh7vV: Config::load($filename, "\144\x61\164\141\142\x61\163\145"); goto yB6A8; e1nJI: libxml_disable_entity_loader(true); goto aNwDq; N2ASz: $data = array("\163\x74\141\x74\165\163" => 2); goto fBcBW; hddD0: if ($notify_data) { goto u5C10; } goto HzTbE; Iw5db: $doc->loadXML($notify_data); goto m2NXg; k8JlF: $notify_data = isset($GLOBALS["\x48\124\124\x50\x5f\x52\101\127\137\x50\117\x53\x54\137\104\101\x54\101"]) ? $GLOBALS["\x48\x54\x54\x50\x5f\122\101\127\137\x50\x4f\x53\124\x5f\x44\101\124\101"] : file_get_contents("\x70\150\160\x3a\57\57\x69\x6e\160\165\164"); goto hddD0; yB6A8: error_reporting(0); goto k8JlF; cNIEL: $filename = APP_PATH . "\x64\x61\x74\x61\x62\x61\163\x65\56\160\150\x70"; goto Mh7vV; yY5UN: try { goto suIRp; Wd7dj: Db::commit(); goto Cj2gt; suIRp: Db::name("\171\x62\163\143\x5f\162\x65\163\145\x72\x76\145\137\x70\141\x79\155\145\156\164")->where(["\x6f\165\164\x5f\x74\162\141\x64\x65\137\156\157" => $out_trade_no, "\x70\x61\171\137\x73\x74\x61\x74\x75\163" => 0])->update($data_pay); goto pXGvf; pXGvf: Db::name("\x79\142\163\143\137\162\x65\163\x65\162\x76\145\137\160\157\x69\x6e\x74")->where("\151\x64", $info["\164\x79\160\145\x5f\141\154\151\163\x5f\151\x64"])->update($data); goto Wd7dj; Cj2gt: } catch (\Exception $e) { Db::rollback(); Log::write($out_trade_no . "\54\346\x94\257\xe4\xbb\230\347\212\266\xe6\200\x81\xe6\x9b\264\346\x94\271\345\244\xb1\350\xb4\245" . $e, "\162\145\163\x65\x72\x76\x65\137\x70\141\171\137\x73\x74\141\x74\x65\137\x63\150\x61\156\147\x65\137\146\x61\151\154"); } goto ln5vA; m2NXg: $out_trade_no = $doc->getElementsByTagName("\157\x75\x74\x5f\164\x72\x61\x64\x65\x5f\x6e\157")->item(0)->nodeValue; goto N2ASz; iNVTV: if (!$info) { goto CbqGC; } goto qKDcx; qKDcx: Db::startTrans(); goto yY5UN; aNwDq: $doc = new \DOMDocument(); goto Iw5db; pJavw: $info = Db::name("\171\x62\x73\x63\137\x72\x65\x73\x65\x72\166\x65\x5f\160\x61\171\x6d\x65\156\164")->where(["\157\x75\164\137\x74\162\141\x64\145\137\156\x6f" => $out_trade_no, "\160\x61\171\137\x73\164\141\x74\x75\x73" => 0])->find(); goto iNVTV; ln5vA: CbqGC: