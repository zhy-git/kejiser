<?php
 goto nLHwf; sCFgi: $params = array("\x3a\x75\x6e\151\141\x63\x69\144" => $_W["\165\156\151\141\x63\151\144"]); goto uHNKm; RciA5: $pager = pagination($total, $pindex, $psize); goto vAZad; EhA2C: load()->func("\x74\x70\154"); goto VHHez; uHNKm: if (empty($_GPC["\153\x65\x79\167\157\x72\x64"])) { goto OoAyG; } goto v9u2l; rnmxc: $sql = "\123\x45\x4c\x45\x43\x54\x20\103\x4f\x55\x4e\124\x28\52\51\x20\x46\122\117\115\x20" . tablename("\153\142\137\163\x65\x63\150\157\165\163\145\x5f\x66\141\166\157\162\151\x74\x65") . "\x20\x61\163\40\x61\40" . $condition; goto rUw7p; jLKO1: $condition = "\x20\x57\110\105\122\x45\40\141\x2e\x60\x75\x6e\x69\141\x63\x69\x64\x60\x20\75\40\x3a\x75\x6e\x69\x61\143\151\144\x20"; goto sCFgi; XcFTc: $opersql = "\40\101\116\x44\40\140\x72\x6f\x6c\145\x5f\165\x69\144\140\40\x3d\x3a\165\151\x64\40"; goto VzaFG; vAZad: fRf6e: goto o2bqk; o2bqk: XmoN0: goto L0QHz; k84hb: $sql = "\x53\x45\x4c\105\103\x54\40\x61\56\52\54\x62\x2e\x6e\x69\x63\x6b\156\x61\155\x65\54\142\x2e\x61\166\141\164\141\x72\x20\x46\122\x4f\115\x20" . tablename("\x6b\x62\x5f\x73\145\143\150\157\x75\163\145\137\146\141\x76\x6f\x72\x69\x74\145") . "\x20\141\163\40\x61\x20\154\145\x66\x74\40\x6a\157\151\156\40" . tablename("\x6d\143\x5f\155\x65\x6d\x62\x65\162\x73") . "\x20\x61\x73\40\x62\40\x6f\x6e\x20\x61\x2e\165\151\x64\x3d\142\56\165\x69\x64\40" . $condition . "\x20\x4f\122\104\105\x52\x20\x42\x59\40\141\56\140\151\144\x60\x20\x44\105\x53\x43\x20\114\x49\x4d\111\x54\40" . ($pindex - 1) * $psize . "\54" . $psize; goto ecJ3u; TOvOA: $params["\72\x66\164\x79\x70\x65"] = trim($_GPC["\146\x74\171\x70\145"]); goto RUfyy; VzBdP: $ftype = "\x76\151\145\x77"; goto VYS6E; ixDQp: $condition .= $opersql; goto quHsl; SRVdP: $uniacid = $_W["\165\156\151\141\x63\151\144"]; goto IBrTA; VwyZG: if (!$opersql) { goto w5JWr; } goto ixDQp; nLHwf: defined("\111\x4e\x5f\111\x41") or exit("\101\143\143\145\x73\163\x20\x44\x65\156\x69\x65\x64"); goto Og_fa; IBrTA: $openid = $_W["\157\160\x65\156\x69\x64"]; goto kClfZ; RUfyy: $ftype = trim($_GPC["\x66\164\171\160\x65"]); goto rkCtH; G_3QX: OoAyG: goto K1y3K; VYS6E: goto Trchb; goto dAJ88; SOpff: $condition .= "\40\x41\116\x44\x20\x61\56\x60\146\164\171\160\145\x60\x20\75\x20\x3a\146\164\171\x70\145"; goto q3bbj; v9u2l: $condition .= "\x20\x41\116\x44\x20\x61\x2e\140\x74\x69\x74\x6c\145\x60\40\x4c\x49\113\x45\x20\x3a\x74\151\x74\x6c\145"; goto oibic; X6UTT: $condition .= "\40\x41\x4e\x44\x20\141\x2e\x60\x61\143\164\x74\171\x70\145\x60\40\75\40\x3a\x66\164\x79\x70\145"; goto TOvOA; aIUDK: $selects = $this->_forms; goto LPNXj; uXhPE: w5JWr: goto rnmxc; VHHez: $operation = !empty($_GPC["\157\x70"]) ? $_GPC["\157\x70"] : "\144\151\163\160\154\141\171"; goto aIUDK; K1y3K: if (isset($_GPC["\x66\x74\x79\x70\x65"])) { goto uEeHu; } goto SOpff; KtJWH: $psize = 15; goto jLKO1; VzaFG: jBfP9: goto BMPM2; ecJ3u: $list = pdo_fetchall($sql, $params); goto RciA5; sNbz4: $pindex = max(1, intval($_GPC["\160\141\147\145"])); goto KtJWH; quHsl: $params["\72\165\151\144"] = $_W["\165\x69\x64"]; goto uXhPE; BMPM2: if (!($operation == "\x64\151\x73\x70\154\141\x79")) { goto XmoN0; } goto sNbz4; kClfZ: $opersql = ''; goto Sc6Wu; Sc6Wu: if (!($_W["\165\x73\145\x72"]["\x74\171\160\145"] == 3)) { goto jBfP9; } goto XcFTc; dAJ88: uEeHu: goto X6UTT; EkAdH: if (empty($total)) { goto fRf6e; } goto k84hb; LPNXj: $sec = $this->module_setting(); goto SRVdP; q3bbj: $params["\x3a\x66\x74\x79\x70\145"] = "\x76\x69\x65\167"; goto VzBdP; rkCtH: Trchb: goto VwyZG; Og_fa: global $_GPC, $_W; goto EhA2C; oibic: $params["\72\164\151\164\154\145"] = "\45" . trim($_GPC["\153\x65\171\167\x6f\162\x64"]) . "\x25"; goto G_3QX; rUw7p: $total = pdo_fetchcolumn($sql, $params); goto EkAdH; L0QHz: include $this->template("\x68\x6f\165\x73\145\x5f\163\164\141\x74\x69\x63\163");