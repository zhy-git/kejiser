<?php
 goto VR8jC; uX20h: $data["\x74\x6f\164\x61\154"] = $total; goto hVBnd; v0QDi: $uniacid = $this->_uniacid; goto Of7kV; hDc1u: $category = array(); goto iA7vF; owIv3: Kuv25: goto WfIDg; ojhiY: uw_SV: goto fIoPb; wUcW2: foreach ($ret as $key => $val) { goto j46yp; GDR6T: Gh46U: goto us3Ps; j46yp: $ret[$key]["\x63\141\x74\145\147\x6f\x72\x79"] = $this->other["\x73\x61\x6c\x65\164\x79\x70\145"][$val["\x74\141\x67\163"]]; goto e7bd1; e7bd1: $ret[$key]["\x73\x68\157\167\x74\x69\x6d\x65"] = date("\x59\345\xb9\xb4\155\xe6\x9c\210\x64\xe6\227\xa5", strtotime($val["\141\144\x64\x74\151\x6d\145"])); goto uJGXu; uJGXu: $ret[$key]["\164\x68\x75\155\142"] = tomedia($val["\164\150\x75\155\142"]); goto GDR6T; us3Ps: } goto JHo_f; H43kr: $total = pdo_fetchcolumn("\163\x65\x6c\145\143\164\40\143\x6f\x75\x6e\x74\x28\52\51\x20\40\146\162\157\x6d\x20" . tablename("\x6b\142\137\x68\x6f\x75\x73\145\x5f\163\141\154\145\x69\x6e\146\x6f") . "\x20\163\40\x77\x68\x65\x72\x65\x20{$sql_add}\x20"); goto d13KJ; yRTm9: $data["\143\141\x74\x65\x67\157\x72\171"] = $category; goto uX20h; OtVbb: $sql_add = "\40\163\56\x75\x6e\x69\141\x63\151\x64\x3d\47{$uniacid}\47\40\141\x6e\144\40\x74\151\144\75\x31\x30\x20"; goto bmEf5; N0kBp: if (!(isset($_GPC["\145\156\145\167\x73"]) && $_GPC["\145\x6e\145\x77\163"] == "\x73\150\x6f\x77")) { goto h1_Zs; } goto ctKvV; yLCgk: inCZo: goto iqhZN; iO4A2: if (!$_GPC["\164\x61\147\163"]) { goto mSk4p; } goto lkZ0Q; Ayokx: if (empty($ret)) { goto Kuv25; } goto wUcW2; JHo_f: fqzX8: goto owIv3; VVygx: if (!(isset($_GPC["\x6c\x69\155\151\x74"]) && !empty($_GPC["\x6c\151\155\x69\164"]))) { goto o_qVk; } goto VkSDJ; wJW7D: o_qVk: goto OtVbb; YoVGt: $this->result(0, "\163\x75\x63\x63\145\x73\x73", $category); goto dS9TG; BtElv: pdo_update("\x6b\142\137\150\157\165\x73\145\x5f\163\141\x6c\x65\151\156\x66\x6f", array("\157\x6e\143\154\151\143\x6b\x20\x2b\75" => 1), array("\151\144" => $id)); goto vh3fo; Fu0LB: $sql_add .= "\x20\x61\x6e\144\40\50\x20\x73\x2e\164\x69\x74\154\145\x20\x6c\x69\x6b\145\40\47\x25{$keyword}\x25\47\40\51"; goto yLCgk; xgSpE: $tags = 0; goto iO4A2; asuBD: ZIvPv: goto uDga7; bmEf5: if (!$tags) { goto nIZk0; } goto wksUB; dS9TG: aThfu: goto N0kBp; NDORk: $pagesize = $limit; goto uGHpC; lkZ0Q: $tags = $_GPC["\164\x61\x67\x73"]; goto TxX41; fIoPb: $ret = pdo_fetchall("\x73\145\x6c\145\143\x74\x20\x69\x64\54\x74\151\164\154\145\x2c\146\151\144\x2c\x66\156\x61\155\x65\x2c\x73\155\x61\x6c\x6c\164\x65\x78\164\54\164\x68\x75\155\x62\54\141\x64\x64\164\x69\x6d\x65\x20\40\146\x72\x6f\x6d\40" . tablename("\x6b\142\x5f\x68\x6f\x75\x73\145\137\163\x61\x6c\145\151\156\146\157") . "\40\x73\40\x20\x20\x77\x68\x65\162\x65\40{$sql_add}\x20\157\x72\x64\x65\x72\x20\142\x79\x20\163\56\141\x64\x64\164\x69\155\145\40\144\145\163\x63\x20\154\x69\155\x69\164\40{$startlimit}\x2c{$pagesize}\40"); goto Ayokx; d13KJ: goto uw_SV; goto asuBD; TxX41: mSk4p: goto QgTu7; L1qNZ: $limit = 4; goto VVygx; kXUiK: Ml_wE: goto YoVGt; VkSDJ: $limit = intval($_GPC["\x6c\151\155\x69\x74"]); goto wJW7D; kf0fr: if (!$keyword) { goto inCZo; } goto Fu0LB; UWaAR: $keyword = $_GPC["\x6b\145\171\x77\157\x72\x64"]; goto xgSpE; VR8jC: global $_GPC, $_W; goto v0QDi; vh3fo: $this->result(0, "\x73\x75\x63\143\x65\163\x73", $ret); goto qBp4m; Jgnhq: nIZk0: goto kf0fr; QgTu7: if (!(isset($_GPC["\145\156\x65\x77\163"]) && $_GPC["\145\156\x65\167\163"] == "\x63\141\x74\145\147\x6f\162\171")) { goto aThfu; } goto pkMiT; pkMiT: $ret = pdo_fetchall("\163\145\x6c\145\143\x74\40\x2a\x20\x66\x72\x6f\155\x20" . tablename("\163\x69\164\145\137\x63\x61\164\145\x67\x6f\162\x79") . "\40\x77\x68\x65\x72\145\40\165\156\151\x61\x63\x69\x64\75\47{$uniacid}\x27\x20\x61\x6e\x64\40\x70\141\x72\145\x6e\164\x69\144\x3d\x30\x20\40\141\x6e\x64\x20\145\156\141\142\154\x65\144\75\x31"); goto hDc1u; wksUB: $sql_add .= "\x20\x61\156\x64\x20\163\56\x66\151\x64\40\x69\156\40\x28\x73\145\x6c\145\143\x74\x20\151\x64\40\146\x72\x6f\x6d\x20" . tablename("\163\151\164\x65\x5f\143\x61\x74\145\147\x6f\x72\171") . "\40\x77\150\x65\162\x65\x20\x28\x69\144\75\47{$tags}\x27\x20\x6f\x72\40\x70\141\x72\x65\x6e\x74\151\x64\x3d\x27{$tags}\x27\51\x29\x20"; goto Jgnhq; WfIDg: $data["\163\x61\154\x65\154\x69\163\x74"] = $ret; goto yRTm9; qBp4m: h1_Zs: goto L1qNZ; wOj1D: $ret["\156\x65\x77\163\x74\145\x78\x74"] = htmlspecialchars_decode($ret["\x6e\x65\167\x73\164\x65\x78\x74"]); goto BtElv; Hezck: $ret = pdo_fetch("\163\x65\154\145\143\164\40\52\x20\x66\x72\x6f\155\40" . tablename("\153\x62\x5f\150\157\165\x73\x65\x5f\x73\141\154\x65\x69\156\x66\x6f") . "\x20\x77\150\145\162\145\40\165\x6e\151\x61\143\x69\x64\x3d\47{$uniacid}\47\40\141\156\x64\40\x74\151\x64\x3d\61\x30\40\40\x61\x6e\x64\40\x64\151\163\141\142\154\x65\144\x3d\60\x20\x61\x6e\x64\40\151\144\75\x27{$id}\x27"); goto wOj1D; Of7kV: $newhouse_id = $_GPC["\156\x65\167\150\x6f\165\163\x65\137\x69\x64"]; goto UWaAR; ctKvV: $id = intval($_GPC["\x61\x69\144"]); goto Hezck; iA7vF: foreach ($ret as $k => $cat) { goto HmsKo; HmsKo: $key = $cat["\x69\144"]; goto tWLVQ; tWLVQ: $category[$key]["\x6e\x61\x6d\145"] = $cat["\x6e\x61\155\x65"]; goto lTjMJ; XC6D9: $category[$key]["\163\x65\x6c\x65\143\164\x65\144"] = $key == $tags ? 1 : 0; goto o1xL7; lTjMJ: $category[$key]["\x74\141\x67\163"] = $key; goto XC6D9; o1xL7: $category[$key]["\164\x6f\x74\141\154"] = 0; goto FdRnW; FdRnW: BSMub: goto vZtcA; vZtcA: } goto kXUiK; uDga7: $total = $_GPC["\x74\157\164\141\154"]; goto ojhiY; iqhZN: $page = max(1, $_GPC["\160\141\147\145"]); goto NDORk; uGHpC: $startlimit = ($page - 1) * $pagesize; goto wCyw9; ZhT6W: if (isset($_GPC["\x74\157\164\x61\154"]) && !empty($_GPC["\164\157\164\x61\x6c"])) { goto ZIvPv; } goto H43kr; wCyw9: $category = array(); goto ZhT6W; hVBnd: $this->result(0, "\x73\x75\x63\x63\x65\163\163", $data);