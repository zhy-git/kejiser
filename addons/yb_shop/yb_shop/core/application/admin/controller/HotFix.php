<?php
 namespace app\admin\controller; use think\Db; use think\Request; class HotFix extends Base { public function yb_fix() { goto K4xko; EZv_W: afwe7: goto kwqB0; bV5hW: BFyZ7: goto r4145; kwv6x: if (!empty($flag)) { goto afwe7; } goto IszDx; K4xko: $flag = request()->param("\146\154\x61\x67"); goto kwv6x; e4ar8: x4JlH: goto DBelw; IszDx: exit; goto EZv_W; r4145: exit(json_encode($rr, true)); goto e4ar8; pJyMY: foreach ($list as $item) { goto RDSIs; N7VzQ: AGFL1: goto DQElB; pXG9u: $rr[] = $res; goto N7VzQ; HYrLk: $data["\166\x61\x6c\x75\145\163"] = json_encode($tb, true); goto CF119; wtZGl: zuoO1: goto tMyTw; ycCr3: $index["\x6d\145\x6e\x75\x5f\154\151\x73\164"] = $tb["\154\151\x73\164"]; goto USW4h; sguub: $index = json_decode($item["\151\x6e\x64\x65\170\137\x76\141\x6c\x75\145\x73"], true); goto Q7jzR; RDSIs: $data = array(); goto sguub; USW4h: $data["\x76\141\154\165\x65\x73"] = json_encode($tb, true); goto d42L_; ctvhx: $res = Db::name("\171\142\x73\x63\137\x75\x73\x65\162\x5f\164\x6d\160\x6c")->where(["\x69\x64" => $item["\151\144"]])->update($data); goto pXG9u; Q7jzR: if (!empty($index["\155\145\156\165\x5f\154\151\x73\164"])) { goto zuoO1; } goto ycCr3; d42L_: $data["\151\x6e\x64\145\x78\x5f\166\141\154\165\x65\163"] = json_encode($tb, true); goto xeQ7z; xeQ7z: goto sSrDx; goto wtZGl; CF119: sSrDx: goto ctvhx; tMyTw: $tb["\154\x69\163\164"] = $index["\155\145\x6e\165\137\x6c\151\x73\x74"]; goto HYrLk; DQElB: } goto bV5hW; Prx79: $list = Db::name("\171\142\x73\143\x5f\165\x73\x65\x72\137\164\155\160\x6c")->where(["\166\141\154\165\x65\x73" => ''])->select(); goto pJyMY; oE0_g: $tarbar_str = "\164\x61\x62\102\141\162\72\x20\173\12\40\40\40\x20\x6e\141\155\x65\x3a\40\42\344\xb8\207\350\203\275\351\227\xa8\345\xba\x97\x22\x2c\xa\40\40\40\40\142\141\143\x6b\x67\x72\x6f\x75\x6e\x64\72\x20\x22\x23\x46\64\106\x34\x46\64\x22\54\xa\x20\x20\x20\40\x62\x61\x63\x6b\147\162\157\x75\x6e\144\x54\145\170\164\x53\164\171\x6c\145\x3a\40\42\x23\146\146\x66\146\x66\146\x22\54\12\40\40\x20\x20\x62\141\143\153\147\x72\157\x75\156\144\103\157\x6c\157\162\72\40\42\x23\106\x46\x46\65\105\105\42\x2c\12\x20\x20\40\x20\143\157\x6c\157\x72\x3a\x20\42\43\70\142\70\142\70\x62\x22\x2c\12\x20\x20\x20\40\x73\x65\154\x65\x63\x74\x65\144\103\x6f\x6c\157\x72\x3a\40\x22\x23\145\60\62\x65\x32\64\42\x2c\12\40\x20\x20\40\154\x69\x73\x74\72\x20\133\xa\40\40\40\x20\40\40\x7b\12\x20\40\40\x20\x20\40\x20\40\x69\155\x67\x75\162\154\72\x20\42\x2f\x79\142\x5f\163\150\x6f\160\x2f\x70\141\x67\145\163\x2f\151\156\x64\x65\170\57\x69\x6e\x64\145\170\x22\54\12\x20\40\40\40\40\x20\40\x20\156\141\x6d\x65\72\x20\42\xe9\xa6\226\351\241\265\42\54\xa\x20\x20\40\x20\40\x20\x20\x20\x6b\x65\x79\72\x20\x27\x69\x6e\144\x65\170\x27\54\xa\x20\x20\40\x20\x20\40\40\40\x70\x61\x67\145\137\x69\143\157\x6e\72\40\42\57\x79\x62\137\x73\150\157\x70\57\163\x74\141\164\x69\143\x2f\151\143\x6f\156\57\x67\x72\x61\171\x5f\x68\x6f\x6d\145\x2e\160\x6e\x67\42\x2c\12\40\x20\x20\40\x20\40\40\40\160\x61\x67\145\137\163\145\154\x65\x63\164\137\x69\x63\x6f\156\x3a\x20\42\x2f\x79\142\137\x73\x68\x6f\x70\57\163\x74\141\x74\x69\143\x2f\x69\143\157\156\x2f\x72\x65\144\137\x68\157\155\145\56\160\156\147\42\xa\x20\x20\x20\x20\40\40\x7d\x2c\12\40\40\x20\40\40\x20\x7b\12\40\x20\40\40\x20\40\x20\40\151\x6d\147\x75\x72\154\x3a\40\x22\57\171\x62\137\x73\150\x6f\160\57\160\x61\147\145\x73\x2f\163\x68\157\x70\x5f\x63\x6f\165\x70\157\x6e\57\x69\156\x64\145\170\42\54\12\x20\40\x20\40\40\40\40\x20\x6e\141\x6d\x65\72\40\42\344\274\230\346\x83\xa0\xe5\210\270\x22\54\xa\x20\x20\40\40\x20\x20\40\x20\153\145\171\72\x20\x27\x73\x68\x6f\x70\x5f\143\x6f\x75\160\x6f\156\47\x2c\xa\40\x20\x20\40\x20\40\40\40\160\141\x67\x65\137\151\x63\157\x6e\72\40\x22\x2f\x79\142\x5f\163\x68\x6f\x70\57\x73\164\x61\x74\151\143\x2f\x69\x63\157\x6e\57\x67\x72\x61\x79\137\146\151\x6e\144\x2e\x70\156\x67\42\x2c\xa\x20\x20\x20\x20\x20\40\x20\40\160\141\x67\x65\x5f\163\145\154\145\x63\164\x5f\151\x63\157\156\72\x20\42\x2f\171\142\x5f\x73\x68\x6f\x70\x2f\163\x74\x61\x74\151\143\57\151\143\x6f\156\x2f\162\145\144\137\x66\151\156\144\x2e\x70\156\x67\42\12\40\x20\40\40\40\40\x7d\54\12\x20\40\x20\x20\40\40\x7b\12\x20\40\40\40\40\40\40\x20\x69\x6d\147\x75\162\x6c\72\40\x22\57\x79\142\137\163\x68\157\x70\x2f\160\141\x67\x65\x73\57\160\162\x6f\x64\165\143\x74\x2f\x69\x6e\x64\145\x78\42\x2c\xa\x20\40\40\40\40\40\40\x20\156\141\155\145\72\x20\42\xe5\225\x86\345\x93\x81\42\54\12\40\x20\x20\40\40\x20\x20\x20\153\x65\171\72\x20\x27\x70\x72\x6f\144\165\x63\164\47\54\xa\40\40\x20\x20\40\40\x20\x20\x70\x61\x67\x65\137\x69\143\x6f\156\72\x20\x22\x2f\171\x62\x5f\163\x68\157\x70\x2f\x73\x74\x61\164\151\143\57\151\x63\157\156\57\147\x72\141\171\x5f\143\141\164\145\x2e\x70\x6e\147\x22\x2c\12\x20\x20\x20\40\40\40\40\40\x70\141\x67\145\x5f\x73\x65\154\x65\x63\164\137\x69\143\157\156\72\40\42\57\171\142\137\163\150\157\160\x2f\x73\x74\x61\x74\151\x63\57\151\143\157\x6e\x2f\x72\145\x64\137\143\141\164\145\56\x70\x6e\x67\42\12\40\x20\40\40\x20\40\175\54\xa\x20\40\40\x20\40\x20\173\12\x20\x20\x20\x20\40\x20\x20\x20\151\x6d\x67\165\x72\x6c\72\x20\x22\57\x79\142\x5f\x73\x68\x6f\160\x2f\160\141\147\145\163\x2f\155\145\x6d\142\145\162\57\143\x61\162\x74\57\151\x6e\x64\x65\x78\42\54\12\x20\x20\40\x20\40\x20\x20\x20\x6e\141\155\x65\72\x20\x22\350\264\255\xe7\211\251\350\xbd\xa6\42\x2c\12\x20\x20\x20\x20\40\x20\40\40\x6b\x65\171\x3a\40\x27\x63\x61\x72\x74\47\x2c\12\40\40\40\40\40\40\40\40\160\x61\147\x65\137\151\143\x6f\x6e\72\x20\42\x2f\171\142\137\x73\150\x6f\x70\57\x73\x74\141\x74\x69\x63\57\x69\143\157\156\x2f\147\x72\141\171\x5f\x63\141\x72\x74\x2e\160\x6e\x67\x22\54\12\40\40\40\x20\x20\40\40\x20\160\x61\x67\x65\137\163\x65\x6c\145\x63\x74\137\x69\143\157\156\x3a\x20\x22\x2f\x79\x62\x5f\163\150\157\x70\x2f\x73\164\141\164\x69\x63\x2f\x69\x63\x6f\156\57\x72\145\144\137\x63\x61\x72\x74\x2e\x70\x6e\x67\42\xa\x20\x20\x20\40\x20\40\x7d\x2c\12\x20\x20\x20\40\40\x20\x7b\xa\x20\x20\x20\x20\40\x20\40\40\151\155\147\x75\x72\154\x3a\x20\42\x2f\x79\142\137\163\x68\x6f\160\x2f\160\x61\147\x65\x73\x2f\155\x65\x6d\x62\145\162\57\x69\x6e\x64\145\x78\57\x69\x6e\144\145\x78\x22\x2c\xa\x20\x20\x20\40\40\40\x20\40\156\x61\x6d\145\72\40\42\344\274\232\xe5\x91\x98\xe4\270\255\345\277\203\x22\x2c\12\40\x20\40\40\x20\40\40\40\x6b\x65\171\x3a\40\x22\155\145\x6d\x62\145\162\x5f\151\x6e\144\x65\x78\x22\54\12\x20\40\x20\x20\40\x20\x20\40\x70\x61\x67\145\x5f\151\x63\x6f\x6e\72\x20\x22\57\x79\x62\x5f\x73\x68\x6f\x70\x2f\x73\x74\x61\x74\151\x63\57\151\x63\157\156\57\147\x72\x61\171\x5f\160\145\157\160\x6c\145\56\x70\156\x67\42\54\xa\40\x20\40\40\x20\x20\40\x20\160\x61\x67\x65\x5f\163\x65\154\145\143\x74\x5f\x69\x63\157\x6e\x3a\x20\x22\57\171\x62\x5f\163\150\x6f\x70\57\163\164\141\x74\151\x63\x2f\151\x63\x6f\x6e\x2f\x72\x65\x64\137\x70\x65\157\x70\154\145\x2e\x70\x6e\x67\42\xa\40\40\40\40\x20\x20\x7d\12\40\x20\40\x20\x5d\12\40\40\175\xa"; goto xQpkf; Ie95I: $rr = array(); goto Prx79; xQpkf: $tb = json_decode($tarbar_str, true); goto Ie95I; kwqB0: if (!($flag == "\x37\106\x43\67\104\x44\103\67\103\106\x37\65\x36\65\67\x39\61\x30\x31\63\105\x46\x31\101\102\105\65\103\104\70\70\x31")) { goto x4JlH; } goto oE0_g; DBelw: } }