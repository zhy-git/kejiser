<?php
 goto XBNdL; D2pA4: define("\110\x54\x54\120\123\110\117\x53\x54", $_W["\141\x74\x74\x61\143\x68\165\x72\x6c"]); goto FcqYv; FcqYv: define("\x52\117\x4f\x54\x5f\x50\101\124\x48", IA_ROOT . "\x2f\x61\x64\144\x6f\x6e\x73\x2f\x73\165\144\x75\x38\137\160\x61\x67\x65\57"); goto V9vuB; XBNdL: defined("\111\x4e\x5f\111\x41") or die("\x41\x63\x63\145\163\x73\x20\104\145\x6e\x69\145\144"); goto D2pA4; V9vuB: class Sudu8_page_plugin_signModuleWxapp extends WeModuleWxapp { public function doPageAppbase() { goto sB3bb; QDN3Y: $uniacid = $_W["\165\x6e\x69\141\x63\x69\144"]; goto klg5g; Uqgyl: $array = get_object_vars($jsondecode); goto kBhke; NEdjP: $weixin = file_get_contents($url); goto ILZAs; Z5MXY: $url = "\150\x74\x74\160\x73\72\57\57\x61\160\x69\x2e\167\145\151\x78\x69\156\56\161\x71\x2e\x63\157\x6d\57\x73\x6e\163\57\152\163\x63\x6f\x64\x65\62\163\x65\163\x73\151\x6f\x6e\x3f\x61\x70\x70\x69\144\x3d" . $appid . "\x26\163\x65\x63\x72\x65\x74\x3d" . $appsecret . "\x26\152\x73\x5f\x63\x6f\x64\x65\x3d" . $code . "\x26\x67\162\x61\x6e\x74\137\164\x79\x70\x65\75\141\165\x74\x68\x6f\x72\151\x7a\141\x74\x69\x6f\156\137\x63\x6f\x64\x65"; goto NEdjP; jbWWs: goto FewAC; goto ZLzZN; F6usz: N319G: goto FNW21; kBhke: $openid = $array["\157\160\145\x6e\151\144"]; goto GcYx6; WBZSe: $data = array("\x75\x6e\151\x61\143\151\144" => $uniacid, "\x6f\160\x65\x6e\x69\144" => $openid, "\143\162\145\141\164\145\164\x69\155\x65" => time()); goto QRp1a; vDqYH: $appid = $app["\x6b\x65\171"]; goto rm9Gi; Pvzyp: var_dump($weixin); goto jbWWs; DEtEm: FewAC: goto PVMrF; ZNFW9: return $this->result(0, "\x73\165\x63\x63\x65\x73\x73", $data); goto dYn0K; v6Lq0: h83D5: goto DEtEm; FNW21: pdo_insert("\x73\165\144\x75\70\137\160\141\147\x65\137\x75\x73\145\x72", $data); goto bag5r; GcYx6: if ($openid) { goto gSkG3; } goto Pvzyp; LdYd9: if ($user["\156"] == 0) { goto N319G; } goto ZNFW9; klg5g: $code = $_GPC["\143\157\x64\x65"]; goto kt3b8; bag5r: return $this->result(0, "\163\165\x63\x63\145\163\x73", $data); goto v6Lq0; sB3bb: global $_GPC, $_W; goto QDN3Y; QRp1a: $user = pdo_fetch("\x53\105\114\105\103\x54\x20\x63\157\x75\x6e\164\x28\52\x29\40\x61\163\x20\156\40\106\x52\x4f\115\x20" . tablename("\x73\x75\144\x75\x38\x5f\160\141\x67\x65\137\165\163\x65\162") . "\40\x57\x48\105\x52\105\x20\157\x70\x65\156\151\x64\40\x3d\40\x3a\x69\144\x20\141\x6e\144\x20\165\x6e\x69\141\x63\x69\x64\40\x3d\x20\72\x75\156\151\x61\143\x69\144", array("\72\151\x64" => $openid, "\72\x75\156\151\x61\x63\151\144" => $_W["\165\x6e\151\141\x63\151\x64"])); goto LdYd9; ILZAs: $jsondecode = json_decode($weixin); goto Uqgyl; ZLzZN: gSkG3: goto WBZSe; kt3b8: $app = pdo_fetch("\x53\105\x4c\x45\x43\x54\40\52\x20\x46\122\117\x4d\x20" . tablename("\141\143\143\157\x75\156\164\137\x77\170\x61\160\x70") . "\x20\127\x48\x45\122\x45\x20\x75\x6e\x69\141\143\151\x64\40\x3d\40\x3a\x75\156\x69\141\x63\151\x64", array("\72\x75\x6e\151\x61\143\151\x64" => $_W["\165\156\x69\141\143\151\144"])); goto vDqYH; rm9Gi: $appsecret = $app["\163\x65\143\x72\145\x74"]; goto Z5MXY; dYn0K: goto h83D5; goto F6usz; PVMrF: } public function doPageUseupdate() { goto N2tms; Z80IZ: $res = pdo_update("\x73\165\144\165\x38\137\x70\141\x67\x65\137\x75\163\145\162", $data, array("\x6f\160\x65\x6e\151\x64" => $openid, "\165\x6e\x69\x61\143\151\144" => $uniacid)); goto nJOOC; rp9J9: $user = pdo_fetch("\123\x45\114\105\103\x54\x20\52\40\106\x52\x4f\115\x20" . tablename("\163\x75\x64\165\x38\137\160\141\x67\145\x5f\x75\163\145\x72") . "\40\127\x48\105\x52\105\40\157\x70\x65\x6e\151\144\x20\x3d\40\72\x69\144\40\141\x6e\144\x20\x75\156\x69\x61\143\151\x64\40\75\40\x3a\x75\156\x69\141\143\x69\144", array("\x3a\151\x64" => $openid, "\x3a\165\x6e\151\141\143\151\x64" => $_W["\165\156\x69\141\x63\x69\144"])); goto zNMvk; N2tms: global $_GPC, $_W; goto gBp7q; zNMvk: $data = array("\165\156\x69\141\143\x69\x64" => $uniacid, "\x6e\151\x63\x6b\156\141\155\x65" => $_GPC["\156\x69\x63\153\156\141\x6d\145"], "\x61\x76\x61\x74\x61\x72" => $_GPC["\141\x76\x61\x74\x61\x72\x55\162\x6c"], "\x67\x65\x6e\144\x65\162" => $_GPC["\x67\x65\156\144\145\162"], "\162\x65\x73\x69\144\x65\x70\162\x6f\166\151\156\x63\x65" => $_GPC["\160\x72\157\166\x69\156\143\145"], "\x72\145\163\151\144\x65\x63\x69\x74\171" => $_GPC["\x63\x69\164\171"], "\x6e\141\164\151\x6f\x6e\141\154\x69\164\171" => $_GPC["\143\157\x75\156\x74\162\x79"]); goto Z80IZ; TNrtW: return $this->result(0, "\x73\165\x63\143\145\163\163", $newuserinfo); goto rDw8h; hCDgc: $openid = $_GPC["\x6f\160\145\x6e\151\144"]; goto rp9J9; nJOOC: $newuserinfo = pdo_fetch("\123\105\114\105\103\x54\x20\x2a\x20\106\x52\x4f\x4d\40" . tablename("\x73\x75\144\x75\x38\137\160\x61\147\x65\137\165\163\145\162") . "\40\127\110\105\122\105\40\x6f\x70\145\x6e\151\x64\x20\x3d\x20\72\151\x64\40\141\156\x64\40\x75\156\151\141\x63\151\144\x20\x3d\x20\x3a\x75\156\x69\x61\x63\x69\x64", array("\x3a\x69\x64" => $openid, "\x3a\x75\156\151\141\143\x69\x64" => $_W["\165\x6e\151\x61\x63\151\x64"])); goto TNrtW; gBp7q: $uniacid = $_W["\x75\x6e\151\141\143\151\x64"]; goto hCDgc; rDw8h: } public function dopageMysign() { goto yUC4V; qisSn: $i = 1; goto dWjbj; ZTva4: $uniacid = $_W["\x75\156\151\141\x63\x69\144"]; goto YBCfx; SOXLM: P2qKt: goto CpzHj; wCyjL: wUyIX: goto AZoCv; H9_Sn: $dayarr = array(); goto tdHM5; Am9o8: $days = date("\x74", strtotime($year . "\55" . $month . "\55\x31")); goto yPuDS; yUC4V: global $_GPC, $_W; goto ZTva4; tdHM5: $nowarr = array(); goto qisSn; pvueN: $year = $_GPC["\171\x65\x61\162"] ? $_GPC["\171\x65\x61\x72"] : date("\x59", time()); goto cVzF0; X2EBm: T4bOI: goto bMXRD; YBCfx: $openid = $_GPC["\157\x70\145\x6e\151\144"]; goto pvueN; bMXRD: $dayarr[] = $nowarr; goto BwyUw; qXU6T: if (in_array($i, $choiceday)) { goto wUyIX; } goto B3UpJ; p2Ef3: $rend = $year . "\55" . $month . "\x2d" . $days . "\x20\62\63\x3a\65\x39\72\x35\71"; goto c3NP2; c3NP2: $begintime = strtotime($rbeing); goto PhMEs; AZoCv: $nowarr["\143\x68\x6f\x6f\x73\x65\x64"] = true; goto X2EBm; BwyUw: epk9H: goto wbpB9; B3UpJ: $nowarr["\143\150\x6f\x6f\x73\145\144"] = false; goto Zw5O5; T9gKi: goto p8APR; goto SOXLM; CpzHj: return $this->result(0, "\x73\x75\143\143\x65\163\x73", $dayarr); goto EB10e; Zw5O5: goto T4bOI; goto wCyjL; wbpB9: $i++; goto T9gKi; ocENe: if (!($i <= $days)) { goto P2qKt; } goto zOvil; PhMEs: $endtime = strtotime($rend); goto wnENp; zOvil: $nowarr["\144\141\171"] = $i; goto qXU6T; dWjbj: p8APR: goto ocENe; srOUM: foreach ($alls as $key => &$res) { $choiceday[] = date("\144", $res["\143\162\145\141\164\164\x69\155\145"]); hbDi1: } goto F3zww; cVzF0: $month = $_GPC["\x6d\157\156\164\150"] ? $_GPC["\x6d\x6f\156\x74\150"] : date("\155", time()); goto Am9o8; NHOT4: $choiceday = array(); goto srOUM; yPuDS: $rbeing = $year . "\x2d" . $month . "\x2d\61" . "\x20\60\60\x3a\60\x30\72\x30\60"; goto p2Ef3; wnENp: $alls = pdo_fetchall("\123\105\x4c\105\x43\124\40\x2a\x20\106\x52\117\x4d\x20" . tablename("\163\165\x64\165\x38\137\x70\x61\147\x65\137\x73\x69\147\156") . "\x57\110\x45\122\x45\40\165\x6e\x69\141\x63\x69\144\x20\75\x20\x3a\165\x6e\x69\x61\143\x69\144\x20\141\156\x64\x20\x6f\160\145\156\151\144\40\x3d\40\x3a\x6f\160\x65\156\151\144\x20\141\x6e\x64\x20\x63\162\145\141\x74\164\x69\155\145\x20\x3e\x3d\40\x3a\142\x74\151\155\145\40\x61\x6e\x64\x20\143\162\x65\141\x74\164\x69\155\145\40\x3c\x3d\40\72\x65\164\x69\x6d\145", array("\x3a\165\156\151\141\x63\x69\144" => $uniacid, "\x3a\157\160\145\x6e\x69\x64" => $openid, "\72\x62\164\x69\x6d\145" => $begintime, "\72\x65\164\151\155\x65" => $endtime)); goto NHOT4; F3zww: lmU9m: goto H9_Sn; EB10e: } public function dopageMysignjl() { goto h3UAV; ERNzk: $uniacid = $_W["\x75\156\x69\141\x63\x69\x64"]; goto iFfSY; h3UAV: global $_GPC, $_W; goto ERNzk; j7Cx7: f2e9a: goto nfs9F; ogvo3: foreach ($alls as $key => &$res) { $res["\x63\162\145\141\164\164\x69\155\x65"] = date("\x59\55\155\55\144", $res["\x63\x72\x65\141\164\x74\x69\x6d\x65"]); P13nM: } goto j7Cx7; AHQeS: $alls = pdo_fetchall("\123\105\114\105\103\x54\40\x2a\x20\x46\122\x4f\115\x20" . tablename("\163\x75\144\x75\70\137\160\141\147\x65\137\x73\151\x67\156") . "\127\x48\105\x52\105\40\165\156\x69\x61\143\x69\144\40\x3d\x20\x3a\165\x6e\151\141\143\x69\x64\x20\x61\156\144\x20\157\x70\145\156\x69\144\40\75\x20\x3a\x6f\160\145\x6e\x69\x64\40\x6f\x72\144\x65\162\40\x62\x79\x20\143\x72\x65\x61\x74\x74\x69\x6d\x65\40\144\145\x73\143\40\x6c\151\x6d\x69\x74\x20\60\54\65", array("\72\x75\156\151\x61\143\151\144" => $uniacid, "\72\x6f\x70\145\156\151\x64" => $openid)); goto ogvo3; nfs9F: return $this->result(0, "\163\x75\143\143\x65\163\163", $alls); goto RPedk; iFfSY: $openid = $_GPC["\157\x70\x65\156\x69\144"]; goto AHQeS; RPedk: } public function dopageQiandao() { goto hnXxj; NA6Qq: $ybeing = $yesterday . "\x20\x30\x30\72\60\x30\72\x30\60"; goto kf8iP; T5xpC: pdo_update("\x73\165\x64\x75\70\x5f\160\x61\147\145\x5f\x73\151\x67\156\137\154\170", $lx, array("\x6f\x70\145\x6e\151\x64" => $openid, "\x75\x6e\x69\141\143\151\144" => $uniacid)); goto mTFkB; b2ryz: JcGJm: goto i7AFr; h4Xro: Vugn8: goto BTtrb; UouHy: $newcount = $newlxqd["\x63\157\165\156\164"] + 1; goto YbgAd; ibpLb: $user = pdo_fetch("\123\x45\114\105\103\124\40\x2a\x20\x46\122\x4f\115\40" . tablename("\163\165\144\165\x38\137\160\141\147\145\137\x75\x73\x65\x72") . "\40\x57\x48\105\122\105\x20\157\x70\x65\156\151\144\x20\75\40\72\x6f\160\145\x6e\151\144\x20\x61\x6e\144\40\165\x6e\151\141\x63\151\x64\x20\x3d\x20\x3a\165\156\151\x61\x63\151\144", array("\x3a\x6f\160\145\x6e\151\144" => $openid, "\72\165\156\151\x61\143\x69\x64" => $uniacid)); goto bDTxP; bKIjR: if ($c7Mui) { goto JcGJm; } goto l6TLy; FprJ9: $rbeing = $datas . "\x20\60\x30\x3a\60\x30\72\60\x30"; goto f3ogh; BTtrb: $udata["\163\x63\157\162\145"] = $user_score + $score; goto McSS0; LOds8: $guize = pdo_fetch("\x53\105\114\105\x43\x54\x20\52\40\x46\122\x4f\x4d\40" . tablename("\x73\x75\x64\x75\70\137\160\x61\x67\145\x5f\163\x69\x67\x6e\137\143\157\x6e") . "\x57\110\x45\122\105\x20\165\x6e\151\141\x63\x69\144\x20\75\x20\x3a\x75\156\x69\x61\143\151\144", array("\72\165\156\x69\x61\143\151\144" => $uniacid)); goto lRYtt; SQV7L: $lx["\143\157\x75\156\164"] = $newcount; goto lrvBc; J9Ha9: $ybegintime = strtotime($ybeing); goto gQQNz; c1Br3: $lx["\155\141\170\137\143\x6f\x75\156\164"] = $maxcount; goto c7gPr; ZJ4yV: WBnnP: goto s0gPV; gQQNz: $yendtime = strtotime($yend); goto IlJA0; g1RtI: $ldata["\157\160\145\156\x69\144"] = $openid; goto YIvhc; XQurI: $lxqd = pdo_fetch("\123\105\114\105\x43\x54\40\52\40\x46\122\x4f\115\x20" . tablename("\x73\x75\144\x75\x38\x5f\160\141\147\145\x5f\163\x69\x67\156\x5f\x6c\170") . "\x57\x48\x45\x52\x45\40\x75\156\151\141\143\x69\x64\40\x3d\40\72\165\156\151\141\x63\x69\144\x20\x61\x6e\x64\40\x6f\160\145\156\151\x64\40\x3d\x20\72\157\160\145\156\x69\x64\40", array("\72\165\156\x69\141\143\x69\144" => $uniacid, "\72\x6f\x70\145\x6e\x69\x64" => $openid)); goto B0IpX; EvfSv: nGBpE: goto ex0Td; ex0Td: $lx["\x6d\x61\170\137\143\x6f\x75\156\x74"] = $newcount; goto ZJ4yV; tNtyu: tRrxv: goto h4Xro; aLXqy: $lx["\141\x6c\x6c\137\x63\157\x75\156\x74"] = $cleiji["\156"]; goto T5xpC; l6TLy: $ldata["\165\156\151\x61\x63\151\144"] = $uniacid; goto g1RtI; s0gPV: $lx["\x61\154\154\x5f\x63\x6f\x75\x6e\164"] = $cleiji["\156"]; goto NmJjU; IlJA0: $yres = pdo_fetch("\x53\x45\114\x45\103\x54\x20\x2a\x20\x46\x52\x4f\x4d\40" . tablename("\163\x75\144\165\70\137\160\141\x67\x65\x5f\x73\151\x67\156") . "\x57\x48\x45\x52\x45\40\x75\x6e\x69\x61\x63\151\x64\x20\75\x20\72\x75\x6e\x69\141\143\151\x64\40\141\156\x64\40\x6f\160\145\156\151\x64\x20\x3d\x20\x3a\x6f\x70\x65\x6e\151\x64\40\141\x6e\x64\x20\143\162\x65\x61\x74\164\x69\x6d\145\x20\x3e\75\x20\72\x62\x74\x69\x6d\x65\40\141\156\144\40\143\162\x65\141\164\164\151\155\x65\x20\x3c\75\40\x3a\145\x74\x69\x6d\x65", array("\x3a\x75\156\x69\x61\143\151\x64" => $uniacid, "\72\157\160\x65\156\151\144" => $openid, "\x3a\x62\x74\151\155\145" => $ybegintime, "\72\x65\x74\x69\x6d\x65" => $yendtime)); goto XQurI; Fe6xs: $data["\x6f\160\x65\156\x69\144"] = $openid; goto pR4VP; x0Ylw: $datas = date("\x59\x2d\x6d\55\x64", $dateriqi); goto FprJ9; nkO91: goto Vugn8; goto JmndN; OCy7h: goto tRrxv; goto gx0Nc; wlOIG: pdo_insert("\163\x75\x64\x75\70\137\x70\x61\x67\145\x5f\163\x69\x67\x6e\137\x6c\x78", $ldata); goto b2ryz; dhdCN: $lx["\143\x6f\x75\x6e\164"] = 1; goto aLXqy; HJdxe: if ($yres) { goto Swd0x; } goto dhdCN; nkc6k: $score = rand($smval, $upval); goto x0Ylw; JmndN: Pgnfo: goto q1K06; n25VP: $ldata["\155\x61\x78\x5f\x63\157\165\x6e\164"] = 0; goto wlOIG; Rgmdh: if ($jiascor >= $guize["\x6d\x61\x78\137\x73\143\157\x72\x65"]) { goto JNRKx; } goto sLZ6E; Qpee1: $begintime = strtotime($rbeing); goto gFaB8; x7EU9: $smval = $sj[0]; goto XIpXf; vFtU1: $dateriqi = time(); goto LOds8; f3ogh: $rend = $datas . "\x20\x32\x33\72\x35\x39\x3a\x35\71"; goto Qpee1; c7gPr: goto WBnnP; goto EvfSv; qixHa: if ($guize["\155\141\170\137\163\x63\157\162\145"] > $user_score) { goto Pgnfo; } goto QFAXz; kf8iP: $yend = $yesterday . "\x20\x32\63\72\x35\71\x3a\65\x39"; goto J9Ha9; i7AFr: $newlxqd = pdo_fetch("\x53\x45\x4c\105\103\x54\40\52\x20\x46\x52\117\115\x20" . tablename("\163\165\x64\165\x38\137\160\141\147\x65\137\163\151\147\156\137\x6c\170") . "\127\110\105\x52\105\40\x75\156\x69\x61\x63\x69\x64\x20\x3d\40\x3a\x75\156\x69\x61\x63\151\144\x20\x61\x6e\144\x20\x6f\160\x65\x6e\151\x64\x20\75\40\x3a\157\x70\x65\x6e\x69\144\x20", array("\72\165\x6e\x69\141\143\151\x64" => $uniacid, "\x3a\157\x70\145\x6e\151\x64" => $openid)); goto HJdxe; M69Ie: $score = $guize["\x6d\x61\x78\137\163\143\x6f\x72\x65"] - $user_score; goto tNtyu; SuGEa: JBnvh: goto Eh0ZM; McSS0: pdo_update("\x73\x75\144\165\x38\137\160\x61\147\x65\137\x75\163\145\x72", $udata, array("\157\x70\145\x6e\x69\144" => $openid, "\x75\156\x69\x61\x63\x69\x64" => $uniacid)); goto uzCGO; gx0Nc: JNRKx: goto M69Ie; tuCsb: $data["\163\x63\157\x72\x65"] = $score; goto aFa2r; sLZ6E: $score = $score; goto OCy7h; NmJjU: pdo_update("\x73\165\144\x75\x38\x5f\160\141\147\145\x5f\163\x69\x67\x6e\x5f\154\170", $lx, array("\157\160\x65\156\x69\x64" => $openid, "\165\156\151\141\x63\x69\144" => $uniacid)); goto SuGEa; YbgAd: $maxcount = $newlxqd["\x6d\x61\170\137\x63\157\165\x6e\x74"]; goto SQV7L; v1eT_: Swd0x: goto UouHy; bDTxP: $user_score = $user["\x73\x63\x6f\162\x65"]; goto qixHa; pw2p7: return $this->result(0, "\163\x75\143\143\145\163\163", 1); goto bKCpe; pR4VP: $data["\143\x72\145\x61\164\164\151\x6d\145"] = time(); goto tuCsb; lrvBc: if ($newcount > $maxcount) { goto nGBpE; } goto c1Br3; YIvhc: $ldata["\143\157\165\x6e\164"] = 0; goto n25VP; mSqTb: goto I3k8B; goto VLdLM; XIpXf: $upval = $sj[1]; goto nkc6k; bKCpe: I3k8B: goto um1K7; u0A7M: $uniacid = $_W["\165\156\151\141\x63\151\x64"]; goto EaGyK; aFa2r: pdo_insert("\x73\x75\144\165\x38\x5f\x70\x61\x67\145\137\163\x69\x67\156", $data); goto k4LeM; GUxco: $yesterday = date("\131\55\x6d\55\x64", strtotime("\55\61\x20\144\141\171")); goto NA6Qq; QFAXz: $score = 0; goto nkO91; hnXxj: global $_GPC, $_W; goto u0A7M; k4LeM: $cleiji = pdo_fetch("\x53\105\114\x45\103\124\40\143\x6f\x75\x6e\164\x28\52\51\40\x61\163\x20\156\x20\106\122\x4f\x4d\x20" . tablename("\163\165\144\165\x38\x5f\x70\x61\147\x65\137\x73\x69\x67\x6e") . "\x57\x48\105\x52\x45\40\165\156\151\141\143\x69\x64\x20\x3d\x20\x3a\165\x6e\151\141\143\151\x64\40\x61\x6e\144\40\x6f\160\x65\x6e\x69\x64\x20\x3d\x20\x3a\157\160\145\x6e\151\144\40", array("\x3a\x75\x6e\151\x61\x63\x69\x64" => $uniacid, "\72\x6f\x70\x65\156\x69\144" => $openid)); goto GUxco; EaGyK: $openid = $_GPC["\x6f\x70\145\x6e\x69\144"]; goto vFtU1; IMRv6: if ($res) { goto tKUCv; } goto ibpLb; B0IpX: $c7Mui = $lxqd; goto bKIjR; q1K06: $jiascor = $user_score + $score; goto Rgmdh; gFaB8: $endtime = strtotime($rend); goto qRbtZ; Eh0ZM: return $this->result(0, "\x73\165\143\x63\145\x73\163", 0); goto mSqTb; mTFkB: goto JBnvh; goto v1eT_; VLdLM: tKUCv: goto pw2p7; lRYtt: $sj = explode("\57", $guize["\x73\143\x6f\x72\145"]); goto x7EU9; uzCGO: $data["\x75\156\x69\141\x63\x69\144"] = $uniacid; goto Fe6xs; qRbtZ: $res = pdo_fetch("\123\105\x4c\105\103\124\40\52\x20\106\122\117\115\x20" . tablename("\163\165\144\165\x38\137\x70\x61\x67\145\137\163\151\147\156") . "\127\x48\x45\122\x45\x20\165\156\x69\141\143\151\144\40\x3d\x20\x3a\165\x6e\151\x61\x63\x69\144\x20\x61\156\x64\40\x6f\160\145\156\151\144\40\75\40\x3a\157\160\x65\x6e\x69\x64\x20\141\x6e\144\x20\x63\x72\145\141\164\x74\x69\155\145\x20\x3e\x3d\40\x3a\142\164\151\155\x65\x20\x61\156\144\x20\143\x72\145\x61\x74\164\151\x6d\145\40\x3c\x3d\x20\x3a\145\164\x69\155\x65", array("\x3a\x75\156\151\141\143\x69\144" => $uniacid, "\72\157\x70\145\156\x69\x64" => $openid, "\72\x62\164\151\x6d\145" => $begintime, "\x3a\145\x74\x69\155\145" => $endtime)); goto IMRv6; um1K7: } public function dopageMysigntj() { goto XdF6k; NxR0_: return $this->result(0, "\x73\165\143\143\x65\163\163", $data); goto SUVVd; uZ0pb: $data["\x70\141\151\x78"] = 0; goto wpz8u; AKCZ4: $arr = pdo_fetchall("\x53\105\x4c\105\x43\x54\x20\52\x20\106\122\117\x4d\x20" . tablename("\163\x75\x64\165\70\x5f\x70\141\x67\x65\x5f\163\x69\x67\x6e\137\154\x78") . "\127\110\x45\122\x45\x20\165\156\151\x61\143\151\144\x20\x3d\x20\x3a\x75\156\x69\141\143\x69\x64\x20\x6f\162\x64\x65\162\x20\x62\x79\x20\141\154\154\x5f\x63\x6f\165\x6e\x74\40\x64\x65\x73\x63\54\151\144\40\144\145\x73\143", array("\72\165\x6e\x69\141\x63\151\x64" => $uniacid)); goto zMffR; tB4l7: $data["\x61\154\x6c\137\143\157\x75\x6e\x74"] = $lxqd["\x61\x6c\x6c\x5f\x63\157\x75\x6e\x74"]; goto X20Fa; nTky8: $data["\161\144\142\x67"] = MODULE_URL . "\x69\155\147\57\x71\144\142\147\56\160\x6e\147"; goto ISSvp; X20Fa: $paix = 0; goto BfLIM; y_u8k: TOz_m: goto vR1CH; wpz8u: goto LN9qf; goto y_u8k; uYiit: $data["\160\141\x69\x78"] = $paix; goto Onetg; rhRNu: $data["\x6c\151\141\x6e\x71"] = 0; goto M3khL; HktWY: QpzoM: goto uYiit; zMffR: if ($lxqd) { goto TOz_m; } goto rhRNu; Se0yY: $lxqd = pdo_fetch("\x53\105\x4c\x45\103\x54\40\x2a\40\x46\x52\x4f\115\x20" . tablename("\x73\x75\144\x75\70\137\x70\x61\x67\145\x5f\x73\x69\x67\156\x5f\x6c\170") . "\127\110\x45\x52\105\40\x75\156\151\141\143\x69\x64\x20\75\x20\72\x75\156\151\141\x63\x69\144\x20\x61\156\x64\40\x6f\x70\x65\156\151\x64\40\x3d\40\x3a\157\x70\145\x6e\151\x64\40", array("\72\x75\156\x69\141\143\151\x64" => $uniacid, "\x3a\157\160\145\156\x69\144" => $openid)); goto AKCZ4; ISSvp: $data["\x73\143\x6f\162\145"] = pdo_fetch("\123\x45\114\x45\x43\x54\x20\163\143\x6f\162\x65\x20\106\x52\x4f\x4d\x20" . tablename("\163\x75\x64\165\70\137\160\x61\147\x65\x5f\165\x73\145\x72") . "\127\x48\105\122\x45\x20\x75\156\151\x61\x63\151\144\40\x3d\x20\x3a\x75\x6e\x69\141\143\151\x64\x20\x61\x6e\144\40\157\x70\x65\156\151\x64\x20\75\40\72\157\x70\145\156\x69\144", array("\72\x75\156\x69\141\143\151\144" => $uniacid, "\x3a\x6f\160\x65\156\x69\x64" => $openid)); goto NxR0_; vR1CH: $data["\154\151\141\x6e\x71"] = $lxqd["\143\x6f\x75\156\x74"]; goto g1crz; BfLIM: foreach ($arr as $key => &$res) { goto tOxhv; SpPNA: if ($g0pAT) { goto DMsBQ; } goto R0zl8; R0zl8: $paix = $key + 1; goto KadVi; fb_rO: DMsBQ: goto bOFvj; bOFvj: LoccM: goto E1lJa; KadVi: goto QpzoM; goto fb_rO; tOxhv: $g0pAT = !($res["\x6f\x70\145\x6e\151\x64"] == $lxqd["\157\160\145\156\151\x64"]); goto SpPNA; E1lJa: } goto HktWY; Onetg: LN9qf: goto nTky8; XdF6k: global $_GPC, $_W; goto dvhH0; wSrqy: $openid = $_GPC["\157\x70\145\156\x69\144"]; goto Se0yY; M3khL: $data["\x6d\x61\x78\154\151\x61\x6e\x71"] = 0; goto JaWwx; JaWwx: $data["\141\x6c\154\x5f\143\157\165\156\164"] = 0; goto uZ0pb; dvhH0: $uniacid = $_W["\165\x6e\151\x61\x63\151\x64"]; goto wSrqy; g1crz: $data["\x6d\x61\170\x6c\x69\141\156\x71"] = $lxqd["\155\141\x78\x5f\143\157\x75\156\x74"]; goto tB4l7; SUVVd: } public function dopagePaihb() { goto IAzC7; Un1WA: $uniacid = $_W["\165\x6e\x69\141\143\x69\144"]; goto XhB7n; e2vkL: vj8_S: goto UmNjq; IAzC7: global $_GPC, $_W; goto Un1WA; XhB7n: $arr = pdo_fetchall("\123\105\114\105\103\124\40\52\40\106\122\117\115\40" . tablename("\x73\165\x64\x75\70\137\x70\x61\147\x65\137\x73\x69\147\156\137\154\x78") . "\127\x48\105\x52\105\x20\x75\156\151\141\x63\151\144\40\75\40\x3a\x75\156\151\x61\x63\151\144\40\157\x72\x64\145\x72\x20\x62\x79\40\141\x6c\154\137\143\157\x75\x6e\164\x20\x64\x65\x73\x63\x2c\151\x64\40\x64\145\x73\143\x20\154\151\155\151\x74\40\60\x2c\x20\67", array("\x3a\165\156\151\x61\143\151\144" => $uniacid)); goto IxqYD; UmNjq: return $this->result(0, "\163\x75\x63\143\145\x73\163", $arr); goto fwahS; IxqYD: foreach ($arr as $key => &$res) { goto wmZZu; eB3Ec: $res["\x61\x76\x61\x74\x61\162"] = $user["\x61\166\141\164\x61\162"]; goto JVP7j; JVP7j: $res["\x6e\x69\x63\153\x6e\x61\x6d\x65"] = $user["\156\151\143\153\156\141\155\x65"]; goto JADmm; JADmm: fiWSr: goto hGjMh; wmZZu: $user = pdo_fetch("\123\105\x4c\x45\x43\x54\x20\52\x20\106\x52\117\115\x20" . tablename("\x73\165\144\x75\x38\x5f\160\141\147\x65\x5f\x75\163\x65\x72") . "\x20\127\x48\x45\x52\105\x20\x6f\160\145\x6e\x69\144\40\x3d\x20\72\x6f\x70\145\x6e\151\144\40\141\x6e\144\40\x75\x6e\151\x61\x63\151\144\x20\x3d\40\x3a\165\156\x69\x61\143\x69\x64", array("\x3a\157\x70\x65\x6e\151\144" => $res["\157\160\x65\156\x69\x64"], "\72\x75\156\x69\x61\143\x69\x64" => $uniacid)); goto eB3Ec; hGjMh: } goto e2vkL; fwahS: } public function dopageZxqd() { goto NETTj; YxsQ2: foreach ($arr as $key => &$res) { goto wFVAz; jOQfu: $res["\141\x76\141\164\141\x72"] = $user["\141\166\141\164\x61\x72"]; goto zCyzn; zCyzn: $res["\x6e\151\143\153\156\141\x6d\x65"] = $user["\x6e\151\143\153\x6e\141\155\145"]; goto Zbesx; QreaX: mPAVg: goto h3lRy; wFVAz: $user = pdo_fetch("\x53\105\x4c\x45\103\124\40\52\40\x46\122\x4f\115\x20" . tablename("\x73\165\x64\x75\70\137\160\141\x67\x65\137\165\x73\x65\162") . "\x20\127\x48\105\x52\x45\40\157\160\145\156\151\144\40\x3d\x20\x3a\x6f\x70\145\x6e\x69\x64\40\x61\x6e\x64\x20\165\x6e\x69\141\x63\151\x64\x20\75\x20\x3a\165\x6e\x69\141\143\x69\x64", array("\x3a\x6f\x70\x65\x6e\x69\144" => $res["\157\x70\x65\x6e\x69\144"], "\x3a\x75\156\151\141\x63\151\144" => $uniacid)); goto jOQfu; Zbesx: $res["\x63\162\x65\x61\x74\x74\x69\x6d\x65"] = date("\x59\x2d\155\55\x64\40\150\72\x6d\72\163", $res["\x63\x72\x65\141\164\164\151\155\x65"]); goto QreaX; h3lRy: } goto tA5d0; tA5d0: jonAS: goto nogdo; gQvBC: $uniacid = $_W["\165\x6e\x69\x61\143\151\144"]; goto EpCul; nogdo: return $this->result(0, "\163\x75\143\x63\x65\163\x73", $arr); goto siZc2; NETTj: global $_GPC, $_W; goto gQvBC; EpCul: $arr = pdo_fetchall("\x53\105\114\x45\x43\x54\40\x2a\x20\106\122\117\x4d\40" . tablename("\x73\x75\144\165\x38\137\160\141\147\x65\137\x73\151\147\156") . "\x57\x48\x45\x52\105\40\x75\156\x69\x61\143\151\x64\x20\75\x20\x3a\x75\156\x69\141\143\151\144\x20\157\x72\x64\x65\162\40\x62\x79\x20\143\x72\x65\141\164\x74\151\x6d\x65\40\144\145\x73\x63\x20\154\x69\x6d\151\164\40\x30\54\40\x39", array("\x3a\x75\x6e\x69\x61\x63\151\x64" => $uniacid)); goto YxsQ2; siZc2: } }