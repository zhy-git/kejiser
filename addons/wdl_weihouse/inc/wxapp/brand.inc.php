<?php
 goto D7f5p; GL1d3: b_y7L: goto PbjPk; D7f5p: global $_GPC, $_W; goto mdgCJ; mdgCJ: $uniacid = $this->_uniacid; goto NxiO2; Z8Ih5: $keyword = ''; goto Z46Z7; a8iNq: if (!(isset($_GPC["\x6c\x69\x6d\151\x74"]) && !empty($_GPC["\x6c\151\155\151\164"]))) { goto dVo_q; } goto vDx9F; iq8tv: if (!$ret["\164\150\x75\x6d\142"]) { goto b_y7L; } goto p0WgM; Z46Z7: if (!$_GPC["\153\x65\171\x77\157\162\x64"]) { goto pje88; } goto BdoeM; Ms4lD: if ($data["\164\157\x74\x61\154"] < $page * $limit) { goto pxGAh; } goto GYXfM; GYXfM: $data["\151\x73\x6c\141\x73\164\x70\141\147\145"] = 0; goto OZtPI; F5xb0: pje88: goto NJycc; bmbNP: if (empty($ret)) { goto zV3KS; } goto Vf_OC; Mhe0T: $ret = pdo_fetch("\x73\x65\154\x65\143\164\x20\x2a\x20\x66\162\157\155\40" . tablename("\x6b\x62\137\x73\145\143\150\157\x75\163\145\x5f\141\x72\145\x61") . "\40\167\150\x65\x72\145\40\x75\x6e\x69\141\x63\x69\144\75\47{$uniacid}\47\40\x20\x61\x6e\x64\x20\x64\151\163\141\142\x6c\x65\144\x3d\60\40\x61\156\x64\40\151\144\75\x27{$shopid}\x27"); goto jxH1Z; OZtPI: goto A7FS3; goto xicYI; mw7Z6: $page = max(1, $_GPC["\160\x61\147\145"]); goto ZaXcI; NxiO2: $shopid = $_GPC["\163\150\x6f\x70\x69\144"]; goto NN5Jw; nuZFC: A7FS3: goto D2ZTA; mGHae: $sql_add = "\x20\x64\x69\163\x61\142\x6c\145\x64\x3d\x30\40\x61\156\144\x20\x75\x6e\x69\x61\x63\151\144\75\x27{$uniacid}\47\x20\x61\x6e\x64\40\164\x79\160\145\75\x33\40"; goto yxqY3; eBA9N: zV3KS: goto CGXKp; vDx9F: $limit = intval($_GPC["\x6c\x69\x6d\151\x74"]); goto N1HLx; Vf_OC: foreach ($ret as $key => $val) { $ret[$key]["\164\x68\x75\x6d\142"] = tomedia($val["\x74\150\165\155\142"]); KuRgU: } goto dVVGB; oAQDr: $data["\x74\x6f\164\x61\154"] = pdo_fetchcolumn("\163\x65\x6c\x65\x63\164\x20\x63\x6f\x75\x6e\x74\x28\x2a\x29\x20\x66\x72\157\155\40" . tablename("\x6b\142\137\163\145\143\150\157\165\163\x65\x5f\163\x68\x6f\x70") . "\x20\x77\x68\x65\162\x65\x20\x20{$sql_add}\x20\40"); goto Ms4lD; jxH1Z: $ret["\x73\155\141\154\x6c\164\145\170\x74"] = htmlspecialchars_decode($ret["\163\155\141\x6c\154\x74\145\x78\x74"]); goto iq8tv; BdoeM: $keyword = $_GPC["\153\x65\171\x77\x6f\162\144"]; goto F5xb0; PbjPk: $this->result(0, "\x73\x75\x63\x63\145\x73\x73", $ret); goto YfUyL; dVVGB: LRNXq: goto eBA9N; mEd73: $ret = pdo_fetchall("\x73\145\x6c\145\143\x74\x20\x2a\x20\146\x72\x6f\155\40" . tablename("\x6b\142\x5f\x73\145\143\150\157\x75\x73\x65\x5f\x61\162\145\141") . "\x20\40\x77\x68\145\162\x65\x20{$sql_add}\x20\157\162\x64\145\162\x20\142\x79\40\x69\x73\x74\x6f\x70\40\x64\x65\x73\143\x2c\151\144\x20\144\145\x73\143\40\154\151\155\151\164\x20{$startlimit}\54{$pagesize}\x20"); goto bmbNP; gttYb: pdo_update("\x6b\142\x5f\164\x68\x72\145\x61\144", array("\x63\x6c\x69\x63\x6b\x20\53\75" => 1), array("\151\x64" => $shopid)); goto Mhe0T; J6Gn0: $startlimit = ($page - 1) * $pagesize; goto mEd73; p0WgM: $ret["\x74\150\x75\x6d\142"] = tomedia($ret["\x74\150\165\x6d\x62"]); goto GL1d3; N1HLx: dVo_q: goto mGHae; YfUyL: cvCrx: goto Z8Ih5; NN5Jw: if (!(isset($_GPC["\145\x6e\x65\x77\163"]) && $_GPC["\x65\x6e\x65\x77\163"] == "\x64\145\x74\141\x69\154")) { goto cvCrx; } goto gttYb; CGXKp: $data["\162\x65\x73\x75\x6c\x74"] = $ret; goto oAQDr; vbliV: $sql_add .= "\40\x61\156\x64\40\50\x20\x6e\x61\x6d\145\40\x6c\151\x6b\x65\40\47\x25{$keyword}\x25\47\x20\x20\157\x72\x20\x61\x64\x64\x72\x65\x73\x73\x20\154\151\x6b\x65\40\x27\x25{$keyword}\45\47\51"; goto jige_; NJycc: $limit = 10; goto a8iNq; jige_: ylMxn: goto mw7Z6; xicYI: pxGAh: goto n4A53; ZaXcI: $pagesize = $limit; goto J6Gn0; yxqY3: if (!$keyword) { goto ylMxn; } goto vbliV; n4A53: $data["\151\x73\154\x61\x73\164\x70\141\147\x65"] = 1; goto nuZFC; D2ZTA: $this->result(0, "\163\x75\x63\143\145\x73\163", $data);