<?php
 namespace app\api\service; use app\common\model\Addons; class AddonsService { public function getAddonsList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = "\x2a") { goto FKwW4; rpiFp: $i = $key_start; goto L9NhZ; tAZaS: emuco: goto wbpUw; abU8o: if (!($dirs === FALSE || !file_exists($addon_dir))) { goto cvQMZ; } goto D1Omt; Px5dk: return $new_array; goto CRUd4; TSIhO: $data[$i] = $addons[$i]; goto G5pNL; IZaFh: $where["\x6e\x61\155\145"] = array("\x69\156", $dirs); goto Wf5r9; Ng8UG: $new_array["\x70\141\x67\145\137\143\x6f\x75\156\164"] = $page_count; goto Px5dk; eQdni: $addons = $this->list_sort_by($addons, "\x75\156\151\156\163\164\141\x6c\154", "\x64\145\x73\x63"); goto Dw8oC; AQbw2: $addons = array(); goto IZaFh; C1Yd9: $i++; goto mWIAV; Py067: if (!($i <= $key_end)) { goto emuco; } goto EBebB; F8Ljr: foreach ($dirs as $value) { goto bwIkw; QZTRX: LcP_x: goto FRkzE; FRkzE: N19Ko: goto qPPSQ; nneHc: goto N19Ko; goto E88lG; pu07N: $class = get_addon_class($value); goto WztJQ; bwIkw: if (isset($addons[$value])) { goto LcP_x; } goto pu07N; kvoSd: $addons[$value] = $obj->info; goto Twqxf; rIud_: $obj = new $class(); goto kvoSd; E88lG: iqlE1: goto rIud_; Twqxf: if (!$addons[$value]) { goto PP3pA; } goto SIpom; ZWngQ: PP3pA: goto QZTRX; MOLSq: \think\Log::record("\xe6\x8f\x92\xe4\273\266" . $value . "\347\x9a\204\xe5\205\xa5\345\x8f\xa3\346\226\x87\344\273\266\344\xb8\x8d\xe5\xad\x98\xe5\x9c\xa8\xef\xbc\x81"); goto nneHc; XaAOC: unset($addons[$value]["\163\164\141\164\165\163"]); goto ZWngQ; WztJQ: if (class_exists($class)) { goto iqlE1; } goto i6Elp; SIpom: $addons[$value]["\165\x6e\151\x6e\163\164\x61\x6c\x6c"] = 1; goto XaAOC; i6Elp: trace($class); goto MOLSq; qPPSQ: } goto jBBI5; L9NhZ: g2tYb: goto Py067; wbpUw: $new_array["\144\x61\164\141"] = $data; goto YaT9Z; FKwW4: $yb_addons = new Addons(); goto KDsXS; mWIAV: goto g2tYb; goto tAZaS; lfOJL: $total_count = count($addons); goto o23Gd; xB9cm: $page_size = PAGE_NUM; goto SHFMj; G5pNL: f0Evc: goto HCIc_; EBebB: if (empty($addons[$i])) { goto f0Evc; } goto TSIhO; HCIc_: AfKgV: goto C1Yd9; dzhPC: $dirs = array_map("\142\141\163\x65\156\141\x6d\x65", glob($addon_dir . "\52", GLOB_ONLYDIR)); goto abU8o; TCbIJ: TH4lQ: goto F8Ljr; Wf5r9: $list = $yb_addons->getQuerys($where, "\52", "\143\162\x65\141\164\145\x5f\164\x69\155\145\40\x64\145\163\x63"); goto qXyXm; YaT9Z: $new_array["\164\157\164\141\x6c\137\143\x6f\x75\156\164"] = $total_count; goto Ng8UG; xyazM: dlZi4: goto g6NSm; ABRDk: $key_end = $page_index * $page_size - 1; goto rpiFp; KDsXS: if (!($page_size == 0)) { goto uxHrS; } goto xB9cm; Dw8oC: $new_array = []; goto lfOJL; SHFMj: uxHrS: goto s2nQt; jBBI5: EWtFC: goto eQdni; HKCHL: cvQMZ: goto AQbw2; o23Gd: $page_count = ceil($total_count / $page_size); goto qqKYY; s2nQt: $addon_dir = ADDON_PATH; goto dzhPC; qqKYY: $key_start = ($page_index - 1) * $page_size; goto ABRDk; D1Omt: return "\145\162\162\x6f\x72"; goto HKCHL; qXyXm: foreach ($list as $key => $value) { $list[$key] = $value->toArray(); uE__5: } goto xyazM; g6NSm: foreach ($list as $addon) { goto JUuaH; nZKMI: i21_J: goto vtjey; JthQO: $addons[$addon["\156\141\155\x65"]] = $addon; goto nZKMI; JUuaH: $addon["\165\x6e\151\156\163\x74\141\154\x6c"] = 0; goto JthQO; vtjey: } goto TCbIJ; CRUd4: } protected function list_sort_by($list, $field, $sortby = "\x61\163\x63") { goto QdneC; JB1C8: foreach ($list as $i => $data) { $refer[$i] =& $data[$field]; J2HvU: } goto cIKiB; cIKiB: xuxZo: goto nQ3CE; ujuGA: Pd0A0: goto Kc0aW; Kc0aW: foreach ($refer as $key => $val) { $resultSet[] =& $list[$key]; HOpMO: } goto B4a68; L1eNi: $refer = $resultSet = array(); goto JB1C8; nQ3CE: switch ($sortby) { case "\x61\x73\143": asort($refer); goto Pd0A0; case "\144\x65\163\143": arsort($refer); goto Pd0A0; case "\x6e\141\164": natcasesort($refer); goto Pd0A0; } goto N4lk_; N4lk_: yokw2: goto ujuGA; r6afj: return false; goto Jv5ff; QdneC: if (!is_array($list)) { goto vCIJJ; } goto L1eNi; gGWPS: vCIJJ: goto r6afj; hdL4i: return $resultSet; goto gGWPS; B4a68: XRXE4: goto hdL4i; Jv5ff: } }