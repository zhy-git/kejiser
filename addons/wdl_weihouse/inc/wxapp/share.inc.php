<?php
 goto zpEDY; Yezto: $ret = pdo_fetch("\163\145\154\x65\143\x74\x20\52\x20\x66\162\x6f\155\40" . tablename("\153\142\x5f\x73\x68\x61\162\145\x5f\x75\x73\x65\x72") . "\x20\x77\150\145\162\145\40\x75\x6e\x69\x61\x63\x69\144\x3d\x27{$uniacid}\x27\40\x61\x6e\x64\40\x75\151\144\75\47{$post_uid}\x27"); goto BUGSO; GM1Yf: $post_uid = $_GPC["\x75\x69\x64"]; goto dhkh0; W0nbd: $this->result(0, "\163\x75\143\x63\145\163\x73", $save); goto R6fpu; OwIQ4: lF6Ou: goto m0Y51; xu2bI: if ($qrinfo["\x75\151\144"] != $uid) { goto CEoS3; } goto n_zLa; ONbRZ: G1pxG: goto JvRho; s6U4O: hitKp: goto aWniE; BUGSO: if ($ret["\x69\x64"] > 0) { goto hZ2ol; } goto HYOEf; ZrSF0: if (!(isset($_GPC["\x6c\x69\155\x69\x74"]) && !empty($_GPC["\154\x69\x6d\151\164"]))) { goto KJuXP; } goto qViPy; aWniE: $total = $_GPC["\164\157\164\141\154"]; goto KmzXb; BnQko: if (empty($ret)) { goto lF6Ou; } goto TMmeI; i9Yau: if (!(isset($_GPC["\154\x69\x6d\x69\x74"]) && !empty($_GPC["\154\151\x6d\x69\x74"]))) { goto o_yoL; } goto NIW0N; m0Y51: $data["\163\x61\x6c\145\x6c\151\x73\x74"] = $ret; goto hPq5m; Xx1pF: hZ2ol: goto ZoUVo; TMmeI: foreach ($ret as $key => $val) { $ret[$key]["\x73\x68\x6f\x77\164\x69\155\145"] = date("\x59\345\271\264\x6d\xe6\x9c\x88\x64\xe6\227\xa5", $val["\x61\x64\x64\x74\151\155\x65"]); ukVhQ: } goto ba7Rl; WHzUt: if ($operation == "\155\171\163\150\141\162\x65") { goto AndEt; } goto bxUbd; J5n0h: $startlimit = ($page - 1) * $pagesize; goto fy9mD; PMzAp: $pagesize = $limit; goto Aj4EM; zZdyU: goto Rqz0s; goto ONbRZ; zXe9W: oRO_r: goto GM1Yf; OTWj6: $this->result(0, "\x73\165\x63\143\145\x73\x73", $ret); goto KeDtP; Aj7dx: $save["\x75\156\151\x61\x63\151\144"] = $uniacid; goto o0MAc; ZoUVo: pdo_update("\153\142\x5f\x73\150\x61\x72\145\137\165\x73\145\162", $save, array("\151\x64" => $ret["\x69\144"])); goto hu0y4; JfLDR: CEoS3: goto BvxOm; zfshc: pdo_insert("\153\142\137\x73\150\x61\x72\x65\137\x75\163\145\x72", $save); goto w8Mdq; Qo0pW: $sql_add_newshop = "\x20\151\144\40\151\x6e\40\50\x73\145\x6c\145\143\x74\40\151\156\x66\157\x69\144\40\x66\x72\157\x6d\x20" . tablename("\153\x62\137\163\x68\141\162\145\x5f\x73\x63\x65\156\x63\x65") . "\x20\167\x68\145\162\145\x20\x75\x69\144\75\x27{$uid}\47\x20\x61\156\144\x20\x75\x6e\151\141\143\151\144\x3d\47{$uniacid}\47\40\141\156\144\x20\143\141\164\145\147\157\162\x79\x3d\x27\156\145\167\163\x68\157\x70\x27\40\147\162\157\165\x70\x20\142\x79\x20\x69\x6e\146\x6f\x69\x64\x20\x20\51"; goto R6V4F; DFjX_: $ret_newshop = pdo_fetchall("\163\x65\x6c\x65\x63\x74\40\x6e\x65\167\163\150\157\x75\163\145\x5f\x69\x64\x2c\x20\150\x6f\x75\163\145\137\164\151\164\154\145\x2c\40\150\157\x75\x73\x65\x5f\164\171\160\x65\54\x61\x76\145\x72\141\x67\145\137\160\x72\151\x63\x65\40\x20\x66\x72\157\155\40" . tablename("\x6b\142\x5f\x68\157\165\163\145\137\151\x6e\x66\157") . "\40\x77\x68\x65\162\145\x20{$sql_add_newshop}\x20\x20\154\151\x6d\x69\x74\40\x35\60"); goto rb3ke; HEinC: $save["\157\x70\x65\x6e\x69\144"] = $openid; goto Aj7dx; HiJWG: $sql_add_sec = "\x20\x69\x64\40\151\x6e\40\50\x73\145\x6c\145\x63\164\40\x69\156\146\157\x69\x64\40\146\162\x6f\x6d\40" . tablename("\x6b\x62\x5f\163\150\141\162\x65\137\x73\x63\145\156\x63\145") . "\x20\x77\150\x65\162\145\40\x75\151\144\x3d\x27{$uid}\x27\x20\141\156\x64\40\165\x6e\151\x61\x63\151\144\x3d\47{$uniacid}\x27\40\141\156\x64\x20\143\141\x74\x65\x67\157\162\171\75\x27\x73\x65\143\47\40\147\162\157\x75\160\x20\x62\171\x20\151\x6e\146\x6f\151\x64\x20\x20\51"; goto Qo0pW; KmzXb: gkrsE: goto nZqjV; xyvTX: $operation = $_GPC["\157\160"]; goto Nc5se; KeDtP: goto Rqz0s; goto mZpq1; jmzGl: $operation = "\144\x69\x73\160\154\141\x79"; goto n_wsU; n_wsU: if (!(isset($_GPC["\x6f\x70"]) && !empty($_GPC["\x6f\x70"]))) { goto yYTpR; } goto xyvTX; JvRho: $post_uid = $_GPC["\x75\151\x64"]; goto IYuV5; LAXkF: $uid = $_W["\155\145\155\x62\x65\162"]["\165\151\144"]; goto V4mzj; bxUbd: if ($operation == "\155\x79\164\x72\x65\145") { goto nvD4s; } goto L7_Pr; hPq5m: $data["\164\x6f\164\141\x6c"] = $total; goto oVQt3; BvxOm: $save["\160\x61\x72\145\x6e\x74\137\165\x69\144"] = $qrinfo["\165\151\x64"]; goto EtbjG; V4mzj: $openid = $_W["\157\x70\x65\156\151\144"]; goto jmzGl; OQdxp: $pagesize = $limit; goto J5n0h; DphZW: if (isset($_GPC["\x74\x6f\164\x61\154"]) && !empty($_GPC["\x74\157\164\x61\154"])) { goto hitKp; } goto q3v1z; rcBbG: $qrinfo = pdo_fetch("\163\x65\x6c\x65\143\x74\40\x2a\40\x66\162\157\155\40" . tablename("\153\142\x5f\163\150\x61\x72\145\x5f\163\x63\145\x6e\x63\145") . "\40\40\x77\x68\x65\162\145\40\x73\x63\145\x6e\143\145\75\47{$scence}\47\x20\157\162\x64\145\x72\x20\142\171\40\x69\x64\40\144\x65\163\x63"); goto xu2bI; rb3ke: $data["\163\141\154\x65\x6c\x69\x73\x74"] = array("\163\x65\143" => $ret_sec, "\156\145\x77\163\x68\157\x70" => $ret_newshop); goto IoWSL; zpEDY: global $_GPC, $_W; goto J27Fd; ba7Rl: sWuUE: goto OwIQ4; EtbjG: WSd9M: goto fQFlz; vv5OD: $save["\x69\x64\145\x6e\x74\x69\146\171"] = $_GPC["\x69\x64\145\x6e\x74\151\146\171"]; goto HEinC; Bnl5g: $page = max(1, $_GPC["\160\141\x67\x65"]); goto OQdxp; AWFqy: $page = max(1, $_GPC["\x70\x61\x67\x65"]); goto PMzAp; n_zLa: $save["\160\x61\x72\x65\156\x74\137\x75\x69\x64"] = 0; goto zsyQb; VlFYY: nvD4s: goto zdNRx; T9GKG: o_yoL: goto wqWl9; ZWZAq: $save["\155\x6f\x62\x69\154\x65"] = $_GPC["\155\157\142\151\x6c\145"]; goto vv5OD; fQFlz: HQy4W: goto Yezto; o0MAc: $scence = $_GPC["\x73\x63\x65\x6e\x63\x65"]; goto memay; HYOEf: $save["\141\x64\144\x74\x69\x6d\145"] = TIMESTAMP; goto zfshc; g4l1t: goto Rqz0s; goto zXe9W; arH1r: $save["\x6e\x61\x6d\145"] = $_GPC["\165\163\145\162\x6e\x61\x6d\145"]; goto ZWZAq; nZqjV: $ret = pdo_fetchall("\x73\145\x6c\145\x63\x74\x20\52\40\40\146\x72\157\155\x20" . tablename("\153\142\137\163\x68\x61\162\145\x5f\x75\x73\x65\162") . "\x20\x20\40\x77\x68\x65\x72\145\40{$sql_add}\x20\x6f\162\144\x65\x72\40\x62\x79\40\x20\141\x64\144\x74\151\155\145\40\x64\x65\x73\x63\x20\154\x69\155\151\x74\x20{$startlimit}\x2c{$pagesize}\40"); goto BnQko; fy9mD: $category = array(); goto DphZW; oHtdx: goto gkrsE; goto s6U4O; hKaRC: KJuXP: goto AWFqy; R6V4F: $ret_sec = pdo_fetchall("\x73\145\154\x65\x63\164\x20\151\144\x2c\40\164\151\164\x6c\145\x2c\40\154\157\x79\x65\x72\54\160\162\151\x78\x5f\165\x6e\151\164\141\151\162\145\x2c\40\x68\x61\x6c\154\x2c\162\157\x6f\x6d\x2c\147\x61\x72\x64\x65\x72\54\40\x72\145\x6e\x74\x5f\x74\171\160\x65\40\x66\162\x6f\155\40" . tablename("\x6b\x62\137\163\x65\x63\x68\157\x75\163\x65") . "\x20\x77\x68\x65\x72\145\x20{$sql_add_sec}\x20\x20\154\x69\x6d\151\x74\x20\x35\60\40"); goto DFjX_; hu0y4: TM_Jb: goto W0nbd; dhkh0: $ret = pdo_fetch("\x73\x65\x6c\145\143\x74\x20\x2a\x20\x66\162\157\x6d\40" . tablename("\x6b\142\x5f\x73\x68\141\x72\x65\x5f\165\163\x65\162") . "\x20\x77\150\145\162\145\x20\165\156\151\141\x63\151\x64\75\x27{$uniacid}\47\x20\x61\156\144\40\x75\151\x64\x3d\47{$post_uid}\x27"); goto OTWj6; J27Fd: $uniacid = $this->_uniacid; goto LAXkF; oVQt3: $this->result(0, "\163\165\143\143\x65\x73\163", $data); goto zZdyU; Bde82: $limit = 4; goto ZrSF0; zQ8JF: goto Rqz0s; goto VlFYY; Nc5se: yYTpR: goto oUsp_; zsyQb: goto WSd9M; goto JfLDR; memay: if (!(isset($_GPC["\163\x63\145\156\143\145"]) && !empty($_GPC["\x73\143\145\x6e\x63\x65"]))) { goto HQy4W; } goto rcBbG; qViPy: $limit = intval($_GPC["\x6c\x69\155\151\x74"]); goto hKaRC; zdNRx: $limit = 4; goto i9Yau; w8Mdq: goto TM_Jb; goto Xx1pF; oUsp_: if ($operation == "\x64\x69\163\x70\x6c\141\x79") { goto oRO_r; } goto WHzUt; q3v1z: $total = pdo_fetchcolumn("\x73\145\154\145\143\164\x20\143\x6f\x75\156\164\x28\52\51\40\40\x66\x72\x6f\155\x20" . tablename("\153\x62\137\163\150\x61\x72\145\x5f\165\x73\145\162") . "\40\40\167\150\145\162\x65\40{$sql_add}\40"); goto oHtdx; hp007: $this->result(0, "\163\x75\x63\143\145\163\163", $data); goto zQ8JF; mZpq1: AndEt: goto Bde82; NIW0N: $limit = intval($_GPC["\x6c\151\x6d\151\164"]); goto T9GKG; wqWl9: $sql_add = "\40\165\156\x69\x61\143\x69\x64\x3d\47{$uniacid}\47\40\141\156\144\x20\x70\x61\162\x65\156\164\137\x75\151\x64\75\47{$uid}\47\40"; goto Bnl5g; IoWSL: $data["\164\157\164\x61\154"] = $total; goto hp007; IYuV5: $save["\165\x69\x64"] = $_GPC["\165\x69\x64"]; goto arH1r; L7_Pr: if ($operation == "\x6d\x6f\144\x69\x66\171") { goto G1pxG; } goto g4l1t; Aj4EM: $startlimit = ($page - 1) * $pagesize; goto HiJWG; R6fpu: Rqz0s: