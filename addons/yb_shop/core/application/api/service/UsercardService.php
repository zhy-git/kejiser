<?php
 namespace app\api\service; use think\Db; use think\Exception; class UsercardService { public function get_cardinfo($data) { goto YHz1z; XxNmB: $rs["\x63\157\144\x65"] = 1; goto zPwL3; fCHz6: $rs["\151\156\x66\157"]["\150\141\x76\145"] = 1; goto A5r_s; elc13: return json_encode($rs); goto nU2cd; bFclx: MGytD: goto RZMfH; zPwL3: $rs["\155\163\147"] = "\xe4\274\232\345\221\230\xe5\215\241\xe5\x8a\x9f\xe8\203\xbd\xe6\232\202\xe6\x9c\xaa\345\274\x80\345\220\257"; goto bcG3b; MwbCw: $rs["\x69\156\x66\157"]["\163\145\x74\164\151\156\x67"] = $setting; goto FJSSh; uFS0w: $a = Db::name("\171\x62\x73\143\137\x75\x73\x65\x72\137\x6c\145\166\145\154")->field("\154\145\166\x65\x6c\x5f\156\141\x6d\145")->where(["\151\x64" => $u["\154\145\166\x65\154\x5f\x69\x64"], "\155\143\150\x5f\x69\x64" => $data["\155\x63\150\x5f\151\144"]])->find(); goto sRliT; nGvut: if (!(empty($setting) || $setting["\151\163\x5f\x6f\160\x65\x6e"] == 0)) { goto j4tpg; } goto XxNmB; elwys: $rs["\x69\x6e\x66\157"]["\x6c\145\166\145\x6c\137\156\141\155\x65"] = $a["\x6c\145\166\x65\x6c\137\156\x61\x6d\x65"]; goto pIrui; al1rK: DJpvc: goto elc13; pIrui: Y8ptT: goto bFclx; bcG3b: return json_encode($rs); goto k1uWA; k1uWA: j4tpg: goto MwbCw; JfjUZ: if (empty($user)) { goto Qonpz; } goto fCHz6; A5r_s: $card_num = $this->str_insert($user["\143\x61\x72\144\137\x6e\x75\x6d"], 4, "\x20"); goto N2kia; nrJsn: Qonpz: goto HieMU; FJSSh: $data["\151\x73\x5f\x64\145\154"] = 1; goto cSbor; EEjMw: if (!($u["\x6c\x65\x76\145\x6c\137\151\x64"] != 0)) { goto MGytD; } goto uFS0w; sRliT: if (empty($a)) { goto Y8ptT; } goto elwys; p5gF3: goto DJpvc; goto nrJsn; RZMfH: $setting = Db::name("\x79\142\163\143\x5f\165\x73\x65\162\x5f\143\x61\162\x64\x5f\x73\145\164\x74\x69\x6e\147")->where(["\x6d\x63\150\137\x69\144" => $data["\155\x63\150\x5f\x69\x64"]])->find(); goto nGvut; Tcfh3: $u = Db::name("\171\x62\163\143\137\165\x73\145\x72")->where("\x75\151\144", $data["\165\x73\145\x72\x5f\x69\144"])->find(); goto EEjMw; N2kia: $card_num = $this->str_insert($card_num, 9, "\40"); goto hgUrW; YHz1z: $rs = array("\x63\x6f\x64\145" => 0, "\151\x6e\x66\157" => array()); goto Tcfh3; hgUrW: $user["\143\x61\x72\x64\137\156\165\155"] = $card_num; goto XhWGK; HieMU: $rs["\x69\x6e\x66\x6f"]["\150\x61\166\145"] = 0; goto al1rK; XhWGK: $rs["\151\156\146\157"]["\x75\x73\x65\162"] = $user; goto p5gF3; cSbor: $user = Db::name("\x79\x62\x73\x63\x5f\165\x73\x65\162\137\x63\x61\x72\x64")->where($data)->find(); goto JfjUZ; nU2cd: } public function str_insert($str, $i, $substr) { goto D7vp6; diJGX: return $str; goto KIZo0; jEGTS: $str = $start . $substr . $end; goto diJGX; LIMpf: $end = substr($str, $i); goto jEGTS; D7vp6: $start = substr($str, 0, $i); goto LIMpf; KIZo0: } public function get_card_num() { goto MzSz5; MzSz5: $lxm = (double) (mt_rand(100000, 999999) . mt_rand(100000, 999999)); goto PBWZ1; IX6g1: if (!($num > 0)) { goto LE0zP; } goto fQoZp; PBWZ1: $num = Db::name("\171\142\163\x63\137\x75\163\x65\162\x5f\x63\x61\x72\x64")->where(["\151\x73\x5f\144\x65\154" => 1, "\143\x61\162\144\137\156\x75\x6d" => $lxm])->count(); goto IX6g1; j5k2G: LE0zP: goto n8vec; n8vec: return $lxm; goto wqp7b; fQoZp: $lxm = $this->get_card_num(); goto j5k2G; wqp7b: } public function get_addcard($data) { goto vM1ar; NWciu: $data["\151\163\x5f\144\145\154"] = 1; goto xED_u; LWPKH: if (!(empty($setting) || $setting["\x69\163\x5f\157\160\x65\156"] == 0)) { goto RgdlE; } goto vLzk7; N6pxY: $data["\143\x72\145\x61\164\145\x5f\164\151\155\x65"] = time(); goto cynVq; aq0EB: $id = Db::name("\171\x62\163\x63\137\165\163\145\x72\x5f\143\x61\162\x64")->insertGetId($data); goto lfWdz; M0WlQ: $data["\x73\164\x61\164\165\x73"] = 1; goto eTWDj; YUvq7: goto f8A9V; goto PvJRR; xED_u: $count = Db::name("\171\142\163\143\x5f\x75\x73\145\162\x5f\143\x61\162\144")->where($data)->count(); goto dpnGn; wGRlw: NYo0O: goto dPCS9; dpnGn: if ($count > 0) { goto JIM_Y; } goto kVTUz; dPCS9: $rs["\x69\156\x66\x6f"] = $setting["\151\163\137\143\x68\145\143\x6b"]; goto wipLt; cynVq: $data["\x6d\x6f\156\x65\171"] = 0.0; goto aq0EB; FEb9G: cW4B3: goto UD4Ln; lfWdz: if ($id) { goto NYo0O; } goto ev8DA; vLzk7: $rs["\143\157\144\145"] = 1; goto eYQ4p; ZQvJ3: $data["\143\141\162\144\x5f\156\x75\155"] = $this->get_card_num(); goto NWciu; gU8_U: $rs["\143\x6f\x64\x65"] = 1; goto jd23Z; bK6hz: return json_encode($rs); goto q_WBx; NoG4G: f8A9V: goto GaVCy; jd23Z: $rs["\x6d\x73\147"] = "\346\x82\250\345\xb7\xb2\xe7\xbb\x8f\xe6\277\200\346\xb4\xbb\xe4\274\232\xe5\x91\x98\345\x8d\241"; goto UkeiG; ev8DA: $rs["\x63\157\144\145"] = 1; goto RMFxB; vM1ar: $rs = array("\x63\157\144\x65" => 0, "\x69\x6e\146\157" => array()); goto E2bJp; kVTUz: if ($setting["\151\163\137\x63\150\x65\143\x6b"] == 1) { goto cW4B3; } goto M0WlQ; mFdPh: goto rw1LB; goto wGRlw; UkeiG: return json_encode($rs); goto NoG4G; RMFxB: $rs["\x6d\163\x67"] = "\xe6\xbf\x80\xe6\264\273\xe5\xa4\xb1\xe8\xb4\245"; goto mFdPh; UD4Ln: $data["\x73\x74\141\x74\165\163"] = 0; goto hEghN; q_WBx: RgdlE: goto ZQvJ3; wipLt: rw1LB: goto UNdiK; hEghN: g5047: goto N6pxY; eTWDj: goto g5047; goto FEb9G; eYQ4p: $rs["\x6d\x73\x67"] = "\xe4\274\x9a\345\221\x98\xe5\215\241\345\212\237\350\x83\275\346\232\x82\xe6\234\252\345\xbc\200\345\x90\257"; goto bK6hz; UNdiK: return json_encode($rs); goto YUvq7; E2bJp: $setting = Db::name("\x79\x62\x73\143\x5f\x75\163\x65\x72\137\143\x61\x72\x64\x5f\x73\145\x74\164\151\156\147")->where(["\x6d\x63\x68\137\x69\x64" => $data["\x6d\143\x68\137\151\144"]])->find(); goto LWPKH; PvJRR: JIM_Y: goto gU8_U; GaVCy: } public function get_exchangelog($data, $page) { goto GY2Lv; oafyC: foreach ($list as $k => $v) { goto DlMvF; DlMvF: if (!$v["\x63\162\145\141\164\x65\137\164\x69\x6d\x65"]) { goto dAe4l; } goto t7Qq1; tON8N: kwq9t: goto E5YVW; t7Qq1: $list[$k]["\155\157\156\145\171"] = floatval($v["\160\141\x79\x70\x72\151\143\x65"]) + floatval($v["\x67\151\166\x65\x70\162\x69\x63\x65"]); goto BPKD0; BPKD0: $list[$k]["\143\x72\x65\x61\164\145\x5f\x74\151\155\x65"] = date("\131\55\155\x2d\144\40\110\x3a\x73", $v["\x63\162\145\141\164\x65\137\x74\151\x6d\145"]); goto PWmb_; PWmb_: dAe4l: goto tON8N; E5YVW: } goto wwKkV; GY2Lv: $data["\x69\x73\x70\141\x79"] = 1; goto Fsrko; Fsrko: $list = Db::name("\x79\142\x73\x63\137\x75\x73\145\x72\x5f\x63\x61\x72\x64\x5f\x6f\162\144\145\162\163")->where($data)->order(["\151\x64" => "\x64\145\163\x63"])->page($page, PAGE_NUM)->select(); goto Rruad; AOF1w: gLiUy: goto rbtVX; wwKkV: ZMAq_: goto AOF1w; Rruad: if (empty($list)) { goto gLiUy; } goto oafyC; rbtVX: return $list; goto t8gyk; t8gyk: } public function get_rechargemeal($data) { goto mb4fL; ufK6T: return json_encode($rs); goto McFER; W9ETs: CK4x6: goto aZ_4u; EkBlZ: goto XyhHq; goto LYSJG; whXhb: if (!(empty($setting) || $setting["\151\x73\137\x6f\x70\145\x6e"] == 0)) { goto akOFB; } goto fZUYA; n_mhc: $rs["\x6d\163\x67"] = "\344\274\x9a\345\221\230\345\x8d\241\xe5\212\x9f\350\x83\xbd\346\x9a\x82\346\x9c\xaa\xe5\274\x80\xe5\x90\257"; goto D_ZYD; bEZF7: goto CK4x6; goto RQXTD; LYSJG: wJQrY: goto EGTeQ; D_ZYD: return json_encode($rs); goto DXum8; zm1rQ: $rs["\151\156\146\157"]["\155\145\141\154"] = json_decode($setting["\x72\145\x63\150\x61\x72\147\145"], true); goto W9ETs; McFER: XyhHq: goto f6tUR; WlgYl: $data["\151\x73\137\x64\145\154"] = 1; goto BbxA_; fZUYA: $rs["\143\x6f\x64\145"] = 1; goto n_mhc; DXum8: akOFB: goto WlgYl; mb4fL: $rs = array("\143\x6f\x64\145" => 0, "\151\156\146\x6f" => array()); goto geZ2H; dGWMw: $rs["\x6d\163\147"] = "\xe4\xbc\x9a\345\221\230\xe5\x8d\241\xe6\234\xaa\346\277\200\346\xb4\xbb"; goto ufK6T; RQXTD: XLau7: goto zm1rQ; u7EJB: $rs["\151\x6e\x66\x6f"]["\165\163\145\162"] = $user; goto EkBlZ; BbxA_: $user = Db::name("\x79\142\x73\x63\137\165\x73\145\x72\x5f\143\x61\162\144")->where($data)->find(); goto KDY9R; dL0Z1: $rs["\x69\x6e\146\x6f"]["\x6d\145\141\x6c"] = []; goto bEZF7; aZ_4u: return json_encode($rs); goto a5VXb; EGTeQ: $rs["\x63\157\144\x65"] = 1; goto dGWMw; geZ2H: $setting = Db::name("\x79\x62\163\143\137\x75\x73\x65\x72\137\143\x61\162\x64\x5f\x73\x65\x74\x74\151\x6e\147")->where(["\155\143\150\137\x69\144" => $data["\x6d\143\150\x5f\x69\144"]])->find(); goto whXhb; KDY9R: if (empty($user)) { goto wJQrY; } goto u7EJB; f6tUR: if ($setting["\x72\145\x63\150\x61\162\147\145"]) { goto XLau7; } goto dL0Z1; a5VXb: } }