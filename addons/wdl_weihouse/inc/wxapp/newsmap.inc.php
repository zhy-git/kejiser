<?php
 goto GwqHI; gJBfN: h3LbH: goto P2Np0; Bnhop: if ($tags == 2) { goto T2IQC; } goto f6Yb9; f6Yb9: if ($tags == 3) { goto asm3i; } goto FtLYz; IJI66: goto h3LbH; goto jT12z; eKG6M: T2IQC: goto upDsk; jKctz: sefjC: goto SWPiy; K47P1: $addon = "\40\141\156\x64\x20\x7a\x68\x75\164\x79\x70\145\x3d\x33\40"; goto gJBfN; YNqi7: $tags = intval($_GPC["\164\141\x67\x73"]); goto IK7UQ; kX1iQ: $addon = "\x20\x61\156\x64\40\172\x68\x75\x74\x79\x70\145\x3d\x32\x20"; goto IJI66; P2Np0: $ret = pdo_fetchall("\163\145\154\x65\x63\164\40\151\x64\54\40\163\150\x6f\160\x5f\x6e\x61\155\x65\54\x20\x20\x6d\x61\x70\137\x78\x2c\x6d\x61\160\x5f\171\40\x66\x72\157\x6d\40" . tablename("\x6b\x62\x5f\150\157\x75\163\x65") . "\x20\x77\x68\145\x72\145\x20\x6d\141\x70\x5f\170\76\60\x20\141\x6e\x64\40\155\x61\160\137\x79\76\x30\40\x61\x6e\x64\x20\165\156\x69\x61\143\151\144\75\47{$uniacid}\x27\40"); goto zNvI4; vFr5w: goto h3LbH; goto k6CoH; nDUGu: if ($tags == 1) { goto sefjC; } goto Bnhop; Dbv6T: UNxlv: goto WhGw4; WhGw4: $addon = "\40\x61\156\x64\x20\162\x65\156\x74\x5f\x74\x79\160\145\75\x30\x20\141\x6e\144\40\172\x68\165\x74\171\160\145\75\60\40"; goto lRN0G; lRN0G: goto h3LbH; goto jKctz; IK7UQ: if ($tags == 0) { goto UNxlv; } goto nDUGu; SWPiy: $addon = "\40\x61\x6e\144\40\162\145\156\x74\x5f\164\171\x70\145\x3d\x32\40\x61\x6e\144\x20\172\150\x75\x74\x79\160\x65\x3d\60\40"; goto YbnES; AgYZx: $uniacid = $this->_uniacid; goto YNqi7; upDsk: $addon = "\x20\x20\141\156\x64\x20\x7a\x68\165\x74\x79\x70\x65\x3d\x31\40"; goto vFr5w; ESQQn: goto h3LbH; goto Dbv6T; zNvI4: $items = array(); goto pE_0d; YbnES: goto h3LbH; goto eKG6M; pE_0d: foreach ($ret as $key => $val) { goto gzI5J; woAlg: $z = sqrt($x * $x + $y * $y) - 2.0E-5 * sin($y * $X_PI); goto TAkqj; TpzcJ: AJ_Qi: goto iHeJ9; XJ9Sw: $lat = $z * sin($theta); goto jlRHQ; jlRHQ: $items[] = array("\x69\144" => $val["\151\x64"], "\164\x69\164\x6c\x65" => $val["\163\x68\x6f\x70\137\x6e\x61\155\x65"], "\155\141\160\151\x6e\x66\x6f" => $val["\155\x61\160\151\x6e\146\157"], "\154\x61\x74" => $lat, "\154\x6f\x6e" => $lon); goto TpzcJ; TAkqj: $theta = atan2($y, $x) - 3.0E-6 * cos($x * $X_PI); goto YUo_n; wzcaq: $bd_lon = $point[0]; goto mrHz5; JreVP: $point = array($val["\155\x61\160\137\170"], $val["\155\x61\160\x5f\171"]); goto wzcaq; YUo_n: $lon = $z * cos($theta); goto XJ9Sw; CCcKl: $X_PI = M_PI * 3000.0 / 180.0; goto RMcaw; mrHz5: $bd_lat = $point[1]; goto CCcKl; gzI5J: if (!$val["\x6d\141\160\137\170"]) { goto AJ_Qi; } goto JreVP; okWK8: $y = $bd_lat - 0.006; goto woAlg; iHeJ9: v3Emh: goto IiYSp; RMcaw: $x = $bd_lon - 0.0065; goto okWK8; IiYSp: } goto vJAu9; vJAu9: wCLZb: goto GtxLL; FtLYz: if ($tags == 4) { goto VDn2B; } goto ESQQn; GwqHI: global $_GPC, $_W; goto AgYZx; k6CoH: asm3i: goto kX1iQ; jT12z: VDn2B: goto K47P1; GtxLL: $this->result(0, "\346\237\245\350\xaf\242\xe6\210\220\345\212\x9f\x20{$sql}", $items);