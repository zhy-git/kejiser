<?php
 goto fpnne; u9tNo: $page = max(1, $_GPC["\x70\141\147\x65"]); goto uOd23; aVGzp: if (!$_GPC["\164\141\x67\163"]) { goto Udv_G; } goto Vm_eQ; OTTrt: if (empty($ret)) { goto rN99u; } goto zNiUG; xg5gb: Wlxzb: goto w0mw5; vvp7D: $ret = pdo_fetchall("\163\145\x6c\145\143\x74\x20\x75\x69\144\x2c\151\x64\54\141\x64\x64\x74\x69\x6d\145\54\163\155\x61\154\154\x74\x65\170\164\54\146\x74\x79\x70\x65\40\40\x66\162\x6f\155\40" . tablename("\x6b\x62\137\x73\x65\x63\150\x6f\x75\163\145\x5f\146\141\x76\x6f\162\x69\164\145") . "\40\x20\167\150\x65\162\145\40{$sql_add}\x20\x6f\162\144\x65\x72\x20\x62\171\40\x69\144\40\x64\x65\163\x63\x20\x6c\x69\155\x69\x74\40{$startlimit}\54{$pagesize}\x20"); goto OTTrt; fpnne: global $_GPC, $_W; goto lExNt; pP1df: Jt3Ve: goto meicc; y0fQl: $data["\x63\x6f\155\155\x65\x6e\164\163\161\154"] = "\163\x65\154\145\143\164\x20\165\x69\144\54\151\144\x2c\141\144\x64\164\151\155\145\54\163\x6d\x61\x6c\154\x74\x65\170\164\x2c\146\164\x79\x70\145\x20\40\x66\162\157\x6d\x20" . tablename("\x6b\x62\137\163\145\143\x68\x6f\165\163\x65\x5f\x66\141\166\x6f\x72\151\x74\x65") . "\x20\40\167\x68\145\162\145\40{$sql_add}\40\157\x72\x64\145\x72\40\142\x79\x20\151\144\x20\144\x65\x73\x63\x20\x6c\151\155\x69\164\40{$startlimit}\54{$pagesize}\x20"; goto lP12N; mzAUq: $newhouse_id = $_GPC["\151\x6e\x66\x6f\151\x64"]; goto TEkvC; Uat3d: $total = pdo_fetchcolumn("\x73\x65\154\145\143\x74\40\x63\x6f\165\156\x74\50\52\x29\x20\x20\146\x72\157\x6d\x20" . tablename("\153\x62\x5f\x73\145\x63\x68\157\x75\163\145\x5f\146\x61\166\157\x72\151\x74\x65") . "\x20\40\x20\167\x68\x65\162\x65\x20{$sql_add}\40"); goto cgow1; pG2Lx: $limit = intval($_GPC["\x6c\x69\x6d\x69\x74"]); goto pP1df; uOd23: $pagesize = $limit; goto rlLCn; Vm_eQ: $tid = $_GPC["\164\x61\147\163"]; goto oiACu; P1GkI: if (!(isset($_GPC["\154\151\x6d\151\x74"]) && !empty($_GPC["\154\x69\x6d\x69\164"]))) { goto Jt3Ve; } goto pG2Lx; TEkvC: $keyword = $_GPC["\x6b\x65\x79\167\157\x72\x64"]; goto aYFT8; w2sgL: $category = array(); goto HQKgU; xkxqC: $limit = 4; goto P1GkI; lExNt: $uniacid = $this->_uniacid; goto mzAUq; HQKgU: if (isset($_GPC["\164\157\164\141\x6c"]) && !empty($_GPC["\x74\157\164\141\154"])) { goto uUJY3; } goto Uat3d; cgow1: goto XVyd8; goto zUDnP; ZGzSs: $data["\164\157\x74\141\x6c"] = $total; goto y0fQl; w0mw5: rN99u: goto xIxD1; xIxD1: $data["\163\x61\154\145\x6c\151\x73\164"] = $ret; goto ZGzSs; QXpIw: XVyd8: goto vvp7D; meicc: $sql_add = "\x20\x75\156\151\x61\x63\151\144\75\47{$uniacid}\x27\x20\x61\x6e\x64\40\x66\x74\x79\x70\x65\x3d\x27{$tid}\47\x20\x20\x61\156\144\40\150\x6f\x75\163\145\x69\144\75\x27{$newhouse_id}\47"; goto u9tNo; rlLCn: $startlimit = ($page - 1) * $pagesize; goto w2sgL; PdWUx: $total = $_GPC["\x74\157\164\x61\154"]; goto QXpIw; zNiUG: foreach ($ret as $key => $val) { goto D7H7L; Nzon5: $ret[$key]["\156\x69\143\x6b\x6e\141\x6d\x65"] = $fans["\x6e\x69\x63\x6b\x6e\141\155\145"]; goto NYq1q; D7H7L: $smalltext = explode("\174", $val["\163\155\141\154\154\164\145\x78\164"]); goto AyCaw; pdxv8: YxCGy: goto jwCuC; xgh7m: $fans = mc_fetch($val["\165\151\x64"], array("\141\x76\x61\x74\141\162", "\x6e\x69\x63\x6b\x6e\x61\155\145")); goto Nzon5; ZGKBP: $ret[$key]["\x73\x63\x6f\162\x65"] = $smalltext[1]; goto rTVdH; pBkkR: if (empty($val["\x75\x69\144"])) { goto fLkqc; } goto xgh7m; ezCbn: fLkqc: goto pdxv8; NYq1q: $ret[$key]["\x61\166\x61\x74\x65\162"] = $fans["\141\x76\141\x74\x61\162"]; goto ezCbn; AyCaw: $ret[$key]["\x63\x6f\x6e\x74\x65\x6e\164"] = str_replace("\347\x95\231\xe8\250\x80\357\274\x9a", '', $smalltext[0]); goto ZGKBP; rTVdH: $ret[$key]["\163\150\x6f\167\164\x69\x6d\x65"] = date("\131\345\xb9\264\155\xe6\x9c\210\144\xe6\x97\xa5", $val["\141\144\144\164\151\x6d\145"]); goto pBkkR; jwCuC: } goto xg5gb; zUDnP: uUJY3: goto PdWUx; aYFT8: $tid = 39; goto aVGzp; oiACu: Udv_G: goto xkxqC; lP12N: $this->result(0, "\x73\165\x63\143\x65\163\163", $data);