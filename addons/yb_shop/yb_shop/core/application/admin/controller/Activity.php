<?php
 namespace app\admin\controller; use app\admin\service\BusActivity; use think\Db; use think\Exception; class Activity extends Base { protected $contr_share_set = array("\x31" => "\xe5\x8f\xaf\xe6\217\x90\347\216\xb0\344\275\243\351\207\x91", "\62" => "\xe5\267\262\xe6\x8f\220\347\x8e\xb0\344\xbd\xa3\xe9\x87\x91", "\63" => "\346\216\xa8\350\215\x90\344\272\xba", "\64" => "\346\234\xaa\xe7\273\223\xe7\xae\x97\344\275\xa3\351\207\221", "\65" => "\345\210\206\351\x94\200\344\xbd\xa3\xe9\x87\221", "\66" => "\345\x88\206\351\224\200\350\xae\242\345\215\x95", "\x37" => "\xe6\x8f\220\xe7\216\260\346\x98\x8e\xe7\xbb\x86", "\70" => "\346\210\x91\xe7\232\204\xe5\233\242\xe9\x98\237", "\x39" => "\xe6\216\xa8\345\271\xbf\344\272\214\xe7\273\264\347\240\x81", "\x31\60" => "\xe5\217\x91\xe5\261\x95\xe4\270\x8b\347\xba\xbf", "\61\61" => "\xe5\276\205\346\211\223\346\254\xbe\xe4\275\243\351\207\221", "\x31\62" => "\xe5\x88\x86\xe9\224\200\344\xb8\255\xe5\xbf\203", "\x31\x33" => "\345\x88\x86\351\x94\200\345\225\x86"); protected $contr_pay_type = array("\60" => "\xe5\276\256\344\277\xa1\346\224\257\344\xbb\x98", "\61" => "\346\224\257\344\xbb\x98\345\xae\235\xe6\x94\257\344\273\230", "\x32" => "\351\x93\xb6\350\xa1\x8c\xe5\x8d\xa1\xe6\x94\257\xe4\xbb\x98", "\x33" => "\344\275\x99\351\242\x9d\346\224\257\344\xbb\x98"); protected $contr_order_status = array("\x2d\61" => "\345\267\262\xe5\x8f\x96\xe6\266\x88", "\x30" => "\345\xbe\x85\346\x94\xaf\344\273\x98", "\61" => "\xe5\276\x85\xe5\x8f\221\xe8\xb4\xa7", "\x32" => "\xe5\xbe\x85\xe6\224\266\xe8\264\247", "\x33" => "\xe5\xb7\262\xe5\256\x8c\xe6\x88\220", "\x34" => "\xe9\x80\200\346\xac\276\xe4\xb8\255", "\x35" => "\xe5\xb7\262\xe9\x80\200\xe6\254\xbe"); protected $contr_share_deep = 3; public function index() { goto cspPb; pY6YQ: $condition["\155\143\x68\x5f\151\x64"] = array("\145\161", $mch_id); goto VUeY5; Mw9L2: $activity = new BusActivity(); goto pY6YQ; ZdW6z: vzLvn: goto mraek; cspPb: $mch_id = isset($this->bus_id) ? $this->bus_id : "\60"; goto qXU72; qXU72: $actn = request()->post("\163\145\141\162\x63\150\x5f\164\145\x78\164", ''); goto LyDqW; GWCyY: return view("\x61\x63\x74\151\x76\x69\x74\x79\x2f\x69\x6e\x64\145\170"); goto qWKmn; hMt5h: goto vzLvn; goto jlwGQ; LyDqW: if ($actn) { goto DDozb; } goto Mw9L2; mraek: $page = $list->render(); goto kJtTl; ipqMD: $list = Db::name("\171\x62\163\143\137\x62\165\x73\x69\156\145\x73\163\137\x61\x63\x74\x69\166\151\x74\x79")->where("\141\x63\x74\x69\x76\x69\x74\171\x5f\156\x61\155\x65", "\154\151\x6b\x65", "\45{$actn}\45")->where("\x6d\143\x68\137\x69\x64", $mch_id)->order("\163\x74\x61\x72\x5f\x74\x69\x6d\x65", "\x64\145\163\x63")->paginate(20, false, ["\161\x75\145\162\171" => ["\163" => $url]]); goto ZdW6z; da8YX: $this->assign("\160\x61\x67\145", $page); goto GWCyY; t0B7V: $url = explode("\x3d\57", $url); goto tMtQJ; s0_kx: $url = "\57" . $url[0]; goto ipqMD; X3Rid: $this->assign("\x6c\x69\x73\164", $list); goto da8YX; tMtQJ: $url = explode("\x26", $url[1]); goto s0_kx; VUeY5: $list = $activity->getActivityAll($condition, '', "\x73\164\x61\x72\137\164\x69\155\x65\x20\x64\145\163\x63"); goto hMt5h; kJtTl: $this->assign("\163\145\x61\x72\143\150\137\164\x65\x78\x74", $actn); goto X3Rid; jlwGQ: DDozb: goto o9OBT; o9OBT: $url = request()->query(); goto t0B7V; qWKmn: } public function addActivity() { goto ZlKXR; ZlKXR: $mch_id = isset($this->bus_id) ? $this->bus_id : "\x30"; goto vIxKv; RDCnx: if (!request()->isAjax()) { goto i1ir2; } goto fNpFk; gGrXq: $res = $activity->addActivity($activity_name, $satisfy_money, $discount_money, $star_time, $end_time, $is_use, $mch_id); goto E5xIL; XlZ2Z: $end_time = strtotime(input("\x70\x61\162\x61\x6d\56\x65\156\144\137\x74\x69\x6d\x65", "\60")); goto kp1ci; wggzY: i1ir2: goto Svx0p; Svx0p: return view("\141\143\164\151\x76\x69\164\171\57\x61\144\144\x5f\141\x63\x74\151\166\151\x74\x79"); goto wManE; E5xIL: return AjaxReturn($res); goto wggzY; kp1ci: $is_use = input("\x70\141\x72\141\x6d\x2e\151\163\x5f\165\163\x65"); goto gGrXq; VDFbi: $star_time = strtotime(input("\x70\x61\162\x61\155\x2e\x73\x74\x61\x72\137\164\151\155\145"), "\x30"); goto XlZ2Z; fNpFk: $activity_name = input("\x70\141\x72\x61\x6d\56\x61\x63\x74\151\166\x69\164\171\x5f\x6e\141\155\x65", ''); goto wz_46; wz_46: $satisfy_money = input("\x70\x61\162\x61\x6d\56\x73\x61\164\151\163\x66\171\137\x6d\x6f\x6e\x65\171", "\x30"); goto bjkji; bjkji: $discount_money = input("\160\x61\162\x61\x6d\56\144\x69\163\143\x6f\x75\156\164\137\155\157\156\145\x79", "\60"); goto VDFbi; vIxKv: $activity = new BusActivity(); goto RDCnx; wManE: } public function editActivity() { goto bUK1S; Zo3jZ: $this->assign("\x69\156\x66\157", $info); goto ywiDD; ILDvY: Zi69N: goto uhYsE; YsCTv: $star_time = strtotime(input("\160\x61\x72\141\155\x2e\x73\164\141\x72\137\x74\151\x6d\x65"), "\60"); goto eFbpS; KZujL: $is_use = input("\160\141\162\141\155\x2e\151\x73\x5f\x75\x73\145"); goto YaPuE; rMXhS: $discount_money = input("\160\141\162\141\155\x2e\x64\x69\163\x63\x6f\165\x6e\164\x5f\x6d\x6f\156\145\x79", "\x30"); goto YsCTv; YaPuE: $res = $activity->editActivity($id, $activity_name, $satisfy_money, $discount_money, $star_time, $end_time, $is_use, $mch_id); goto nw8NS; TKB0E: $id = input("\160\x61\162\x61\x6d\56\151\144", "\x30"); goto IsvNZ; IsvNZ: $activity_name = input("\160\141\x72\x61\155\56\x61\143\x74\x69\166\151\x74\171\x5f\156\x61\x6d\x65", ''); goto NAP06; ywiDD: return view("\x61\x63\164\x69\166\x69\x74\171\x2f\145\x64\x69\x74\137\x61\x63\x74\151\166\151\164\x79"); goto O6Wkp; nw8NS: return AjaxReturn($res); goto ILDvY; jh15x: $info = $activity->getActivityInfo($id); goto Zo3jZ; f97K_: $activity = new BusActivity(); goto TAB6k; uhYsE: $id = input("\160\141\x72\141\x6d\56\151\144", "\60"); goto jh15x; bUK1S: $mch_id = isset($this->bus_id) ? $this->bus_id : "\x30"; goto f97K_; eFbpS: $end_time = strtotime(input("\160\141\x72\x61\155\56\x65\x6e\144\137\x74\x69\155\145", "\x30")); goto KZujL; TAB6k: if (!request()->isAjax()) { goto Zi69N; } goto TKB0E; NAP06: $satisfy_money = input("\x70\x61\x72\x61\155\x2e\x73\141\164\151\163\x66\x79\x5f\x6d\x6f\x6e\145\x79", "\60"); goto rMXhS; O6Wkp: } public function delActivity() { goto LPp0s; q2I60: $activity = new BusActivity(); goto ky3r5; Zbw4H: return AjaxReturn($res); goto Rh4zt; bLk3j: $res = $activity->delActivity($id, $mch_id); goto Zbw4H; LPp0s: $mch_id = isset($this->bus_id) ? $this->bus_id : "\60"; goto q2I60; ky3r5: $id = input("\160\141\x72\141\155\x2e\151\144", "\x30"); goto bLk3j; Rh4zt: } public function offActivity() { goto oQza4; ZTRgR: return AjaxReturn($res); goto ZAeTF; pzYXp: $id = input("\x70\141\162\141\x6d\x2e\x69\x64", "\60"); goto jsqAF; I_GD4: $activity = new BusActivity(); goto pzYXp; jsqAF: $res = $activity->offActivity($id); goto ZTRgR; oQza4: $mch_id = isset($this->bus_id) ? $this->bus_id : "\x30"; goto I_GD4; ZAeTF: } public function onActivity() { goto WQ2PB; X59pL: $res = $activity->onActivity($id); goto qioSa; WQ2PB: $mch_id = isset($this->bus_id) ? $this->bus_id : "\60"; goto Gypmn; qioSa: return AjaxReturn($res); goto qhDMc; U34Jd: $id = input("\x70\141\162\141\x6d\56\x69\144", "\60"); goto X59pL; Gypmn: $activity = new BusActivity(); goto U34Jd; qhDMc: } public function coupon() { goto J26iQ; bEwh0: $this->assign("\x6c\x69\163\x74", $list); goto Uibkk; d3dMI: $where = array(); goto oRhYj; J26iQ: $search_text = request()->param("\x73\145\141\162\143\150\137\x74\x65\170\164", ''); goto d3dMI; oRhYj: if (empty($search_text)) { goto Ocv0E; } goto AzMmQ; AzMmQ: $where["\x61\143\164\151\166\151\164\x79\137\156\x61\x6d\145"] = array("\x6c\x69\153\x65", "\x25" . $search_text . "\x25"); goto r1iN3; zazWl: $this->assign("\163\x65\x61\x72\143\x68\137\x74\x65\x78\164", $search_text); goto WhwA0; Jf_d1: $list = db::name("\171\142\x73\x63\137\x62\165\163\x69\156\x65\x73\163\137\143\x6f\x75\x70\157\156")->where("\x6d\x63\150\137\x69\x64", $this->bus_id)->where($where)->order("\x65\156\x64\137\164\x69\x6d\145")->paginate(20); goto HCxVu; Uibkk: $this->assign("\x70\x61\x67\x65", $page); goto zazWl; WhwA0: return view("\x61\x63\x74\x69\166\151\164\171\x2f\x63\x6f\x75\x70\x6f\x6e"); goto KvYqa; r1iN3: Ocv0E: goto Jf_d1; HCxVu: $page = $list->render(); goto bEwh0; KvYqa: } public function add_coupon() { goto LcWqn; zza_m: return view("\x61\143\164\x69\166\x69\164\x79\x2f\x63\x6f\x75\x70\157\156\x5f\141\x64\144"); goto PXedo; UDXQp: $data["\x73\141\x74\151\x73\x66\x79\137\155\x6f\156\145\x79"] = input("\x70\141\x72\x61\x6d\56\x73\x61\x74\x69\163\146\x79\137\x6d\157\x6e\145\x79", "\x30"); goto AKDm0; HWrrf: $data["\x61\x63\x74\x69\x76\x69\x74\171\137\x6e\141\155\145"] = input("\160\141\x72\x61\155\56\141\x63\164\x69\x76\x69\164\x79\137\x6e\x61\x6d\x65", ''); goto UDXQp; DU0AV: $data["\x6d\143\x68\x5f\151\x64"] = $this->bus_id; goto loWmH; ldz7c: $data["\164\157\147\x65\164\150\145\162"] = input("\160\141\162\x61\x6d\56\164\157\147\145\164\150\145\162", "\61"); goto JDJqf; EkTpo: $data["\x65\156\144\x5f\x74\151\155\x65"] = strtotime(input("\x70\x61\162\141\155\56\145\156\x64\137\x74\x69\x6d\x65", "\60")); goto UiQ1a; Q94Qs: $data["\162\x65\155\137\x63\x6f\165\156\x74"] = input("\160\141\162\141\155\x2e\143\x6f\165\x6e\x74", "\61\x30"); goto ldz7c; LcWqn: if (!request()->isAjax()) { goto iKjzf; } goto HWrrf; UiQ1a: $data["\151\163\137\165\x73\145"] = input("\x70\x61\162\141\x6d\x2e\x69\163\x5f\165\163\145"); goto DU0AV; Ex8Ys: $data["\x73\x74\x61\162\x5f\164\151\155\145"] = strtotime(input("\x70\x61\162\141\155\x2e\163\x74\141\162\137\x74\x69\x6d\145"), "\x30"); goto EkTpo; HSClJ: return AjaxReturn($res); goto L3gzn; AKDm0: $data["\144\151\163\x63\x6f\165\156\x74\x5f\155\x6f\156\x65\x79"] = input("\x70\x61\162\x61\x6d\x2e\x64\x69\x73\x63\x6f\165\x6e\164\137\155\x6f\156\145\171", "\60"); goto Ex8Ys; L3gzn: iKjzf: goto zza_m; loWmH: $data["\143\157\x75\x6e\164"] = input("\160\x61\162\x61\x6d\56\x63\x6f\165\x6e\164", "\61\x30"); goto Q94Qs; JDJqf: $res = db::name("\171\142\x73\143\137\x62\x75\163\x69\x6e\145\163\x73\137\143\x6f\165\x70\157\156")->insert($data); goto HSClJ; PXedo: } public function edit_coupon() { } public function off_coupon() { goto XtBYC; XtBYC: $id = input("\x70\x61\x72\141\x6d\56\151\x64", "\60"); goto HTi0A; HTi0A: $res = db::name("\171\142\x73\143\x5f\142\165\163\x69\x6e\x65\163\163\137\143\157\165\x70\157\x6e")->where("\x69\x64", $id)->update(["\151\x73\x5f\165\163\145" => 2]); goto zixuy; zixuy: return AjaxReturn($res); goto VIMcZ; VIMcZ: } public function on_coupon() { goto syOdb; LANpB: return AjaxReturn($res); goto Tvw6n; syOdb: $id = input("\x70\x61\x72\x61\155\56\x69\x64", "\60"); goto LQNTw; LQNTw: $res = db::name("\x79\x62\x73\x63\x5f\142\x75\163\x69\156\145\163\x73\137\143\157\165\160\x6f\x6e")->where("\151\x64", $id)->update(["\151\163\137\165\163\x65" => 1]); goto LANpB; Tvw6n: } public function together_stop() { goto U1yTZ; ywVQX: $res = db::name("\x79\x62\163\143\137\x62\165\163\151\156\x65\x73\x73\137\x63\x6f\x75\160\157\x6e")->where("\151\144", $id)->update(["\x74\x6f\147\x65\x74\x68\145\162" => 1]); goto lcP6f; U1yTZ: $id = input("\160\141\162\141\155\x2e\151\144", "\60"); goto ywVQX; lcP6f: return AjaxReturn($res); goto xKq7C; xKq7C: } public function together_on() { goto jeU7e; CDUBA: $res = db::name("\x79\142\x73\x63\x5f\x62\x75\x73\x69\x6e\x65\163\x73\x5f\143\157\x75\x70\x6f\x6e")->where("\151\x64", $id)->update(["\164\x6f\x67\145\x74\x68\x65\x72" => 2]); goto bqgnY; jeU7e: $id = input("\160\141\162\141\x6d\56\x69\144", "\x30"); goto CDUBA; bqgnY: return AjaxReturn($res); goto hILoZ; hILoZ: } public function together_user_list() { goto cCMS2; a1Vtd: return view("\141\x63\x74\151\166\x69\164\171\57\143\x6f\165\160\157\x6e\x5f\x75\163\145\x72\x5f\x6c\151\163\164"); goto TM7Ty; Aw7md: $url = explode("\x26", $url[1]); goto qlzKf; pER7d: if (empty($search_text)) { goto fW2wl; } goto hfdRZ; jmKcw: $url = request()->query(); goto nmp3j; Hx0ew: $end_time = db::name("\171\x62\163\143\137\142\165\163\x69\156\145\x73\x73\137\x63\157\x75\x70\x6f\156")->where("\x69\144", $id)->value("\145\156\144\x5f\164\151\155\x65"); goto Vky9v; cSrMm: fW2wl: goto Hx0ew; BaBsf: $page = $list->render(); goto YcBUT; hfdRZ: $where["\x63\x2e\x6b\x65\171"] = array("\154\x69\153\145", "\45" . $search_text . "\45"); goto cSrMm; WMnkF: $this->assign("\x70\x61\147\145", $page); goto i2rfg; cCMS2: $id = input("\160\141\162\x61\155\56\x69\x64"); goto Eop7s; qlzKf: $url = "\x2f" . $url[0]; goto quWFj; jVAMg: $this->assign("\x73\145\x61\162\143\x68\137\164\x65\170\x74", $search_text); goto a1Vtd; Eop7s: $search_text = preg_replace("\43\x20\43", '', input("\160\141\162\141\155\x2e\x73\145\141\x72\143\x68\137\x74\145\170\164")); goto OthSJ; quWFj: $list = db::name("\171\142\163\143\x5f\165\163\145\162\x5f\x63\x6f\x75\160\157\x6e")->alias("\x63")->join("\171\142\163\143\x5f\x75\163\x65\162\40\x75", "\x75\56\165\x69\x64\x3d\143\x2e\x75\x73\145\x72\x5f\151\144", "\154\145\146\164")->where("\143\x2e\155\x63\x68\x5f\x69\x64", $this->bus_id)->where("\x63\x2e\x63\157\165\160\x6f\x6e\x5f\x69\x64", $id)->where($where)->field("\165\x2e\156\x69\x63\x6b\x5f\156\x61\x6d\145\x2c\143\56\x2a")->order("\x63\56\x67\x65\164\137\164\x69\x6d\145\x20\144\145\x73\x63")->paginate(4, false, ["\161\165\x65\x72\x79" => ["\x73" => $url, "\x69\x64" => $id]]); goto BaBsf; i2rfg: $this->assign("\x69\x64", $id); goto jVAMg; Vky9v: $this->assign("\145\156\144\137\x74\151\155\145", $end_time); goto jmKcw; OthSJ: $where = array(); goto pER7d; YcBUT: $this->assign("\x6c\151\163\x74", $list); goto WMnkF; nmp3j: $url = explode("\75\x2f", $url); goto Aw7md; TM7Ty: } public function coupon_user_hx() { goto P4Sls; nIMSs: $res = db::name("\171\142\x73\143\137\165\x73\145\x72\137\143\x6f\x75\160\x6f\156")->where("\x69\x64", $id)->update(["\x75\x73\x65\137\x74\x69\155\145" => time(), "\163\x74\x61\164\165\163" => 1]); goto Og9zr; P4Sls: $id = input("\160\x61\x72\141\155\56\151\x64"); goto nIMSs; Og9zr: return AjaxReturn($res); goto SpmA9; SpmA9: } public function user_share() { goto XUUfw; LE0ZO: if (!($status == "\x30" || $status == "\x31")) { goto eysae; } goto RhFl0; mL86e: if (!(strlen($user[$i]["\163\x65\154\154\145\162\137\143\157\x6d\155\x65\156\x74\x73"]) > 10)) { goto lnkbN; } goto x0L6l; WF5XV: $i++; goto qS333; x0L6l: $user[$i]["\x73\x65\154\x6c\x65\162\x5f\x63\x6f\155\155\x65\x6e\164\163"] = substr($user[$i]["\163\145\x6c\154\x65\x72\x5f\x63\157\x6d\x6d\145\156\x74\x73"], 0, 9) . "\56\56\56"; goto NK9Gt; VAB6u: $get_child = new BusActivity(); goto b4dNu; RhFl0: $condition["\x73\x74\x61\x74\165\163"] = $status; goto IWB1C; UO9BM: $this->assign("\x73\164\x61\x74\x75\163", $status); goto NrSkA; IWB1C: eysae: goto rov72; uw340: PHT3y: goto LE0ZO; qS333: goto mgHWO; goto VVGXp; rov72: $user = db::name("\x79\x62\x73\x63\137\165\163\x65\162\x5f\163\150\141\x72\145")->alias("\x73")->join("\x79\142\163\x63\x5f\x75\163\145\162\40\x75", "\163\x2e\x75\x73\145\162\x5f\x69\x64\75\165\56\x75\x69\144", "\154\145\x66\164")->field("\x73\56\165\163\145\x72\x5f\151\144\x20\x73\x69\x64\x2c\155\157\142\151\154\145\x2c\x6e\141\155\145\54\x73\x74\x61\164\165\x73\x2c\143\x72\145\141\x74\145\x5f\x74\151\x6d\145\x2c\163\x65\x6c\154\145\x72\x5f\x63\x6f\155\x6d\145\x6e\164\x73\x2c\156\x69\143\153\x5f\156\x61\155\145\x2c\164\x6f\x74\x61\154\x5f\x70\162\x69\x63\x65\x2c\x70\162\151\x63\x65\54\x70\x69\144")->where($condition)->order("\x73\x2e\x69\x64\40\144\145\x73\x63")->select(); goto voBqr; uvgpT: AqYvW: goto S3k7k; yiL6D: $condition["\x73\56\151\163\x5f\x64\x65\x6c"] = 1; goto oQMD3; flgrx: $search_name = input("\x70\x61\x72\x61\x6d\x2e\x73\145\x61\162\143\150\137\156\x61\x6d\145", ''); goto yiL6D; sv0bE: $this->assign("\154\x69\x73\x74", $user); goto LLRmH; XUUfw: $status = request()->get("\163\164\x61\x74\165\x73", ''); goto flgrx; h5l_N: $pid = db::name("\x79\142\x73\143\137\165\163\x65\162\x5f\x73\x68\x61\162\x65")->field("\156\x61\155\145")->where("\165\x73\x65\162\x5f\x69\144", $user[$i]["\x70\x69\144"])->find(); goto QtDZo; U67tN: $condition["\x73\56\155\x63\x68\137\151\x64"] = $mch_id; goto oShYr; QtDZo: $user[$i]["\146\x61\x74\x68\145\x72"] = $pid["\156\x61\155\x65"]; goto pQeJB; vkXJT: mgHWO: goto WBOnA; voBqr: $deep = $this->contr_share_deep; goto VAB6u; pQeJB: goto yOGqk; goto uvgpT; S3k7k: $user[$i]["\x66\141\x74\150\x65\162"] = "\346\200\273\xe5\xba\x97"; goto g87nB; NK9Gt: lnkbN: goto ja8iF; VVGXp: AI24K: goto UO9BM; oShYr: if (empty($search_name)) { goto PHT3y; } goto qqg4_; WBOnA: if (!($i < count($user))) { goto AI24K; } goto mL86e; NrSkA: $this->assign("\x73\145\141\162\x63\x68\x5f\x6e\141\155\x65", $search_name); goto sv0bE; ja8iF: if ($user[$i]["\x70\151\x64"] == 0) { goto AqYvW; } goto h5l_N; g87nB: yOGqk: goto xmeIJ; qqg4_: $condition["\x6e\x69\x63\x6b\137\156\x61\155\x65"] = ["\154\x69\x6b\x65", "\45" . $search_name . "\45"]; goto uw340; oQMD3: $mch_id = $this->bus_id; goto U67tN; b4dNu: $i = 0; goto vkXJT; LLRmH: return view(); goto qlhKd; xOX0k: gnSWh: goto WF5XV; xmeIJ: $user[$i]["\x63\x68\x69\x6c\144"] = $get_child->get_child_share($user[$i]["\x73\x69\144"], "\x2d\x31", $deep); goto xOX0k; qlhKd: } public function user_share_edit() { goto CQVMt; Pkh5F: pdo_run($sql); goto KpBqC; KpBqC: return 1; goto of7w7; DhkUf: y17rl: goto piDzW; QIybw: prOSr: goto HMdrd; HMdrd: return 0; goto FmlK1; CQVMt: $id = input("\160\141\162\141\155\56\151\x64", "\60"); goto KBSP_; DQ3tO: if ($sql == '') { goto prOSr; } goto Pkh5F; Jz2x5: switch ($type) { case "\144\x65\154\x5f\x73\150\141\162\x65": $sql = "\165\160\144\141\x74\145\40\151\x6d\x73\x5f\x79\x62\163\x63\137\x75\163\145\162\137\x73\150\x61\x72\x65\x20\163\x20\x49\x4e\x4e\x45\x52\x20\x4a\117\111\116\40\x69\x6d\163\x5f\x79\142\x73\x63\x5f\x75\x73\x65\x72\40\165\x20\157\x6e\x20\163\56\165\163\x65\x72\137\151\144\x3d\x75\x2e\x75\151\144\40\x73\x65\164\x20\163\56\151\x73\137\144\x65\x6c\x20\75\40\x32\54\165\56\x69\163\137\x64\151\163\164\162\x69\x62\x75\164\x6f\162\75\x30\40\167\x68\x65\162\x65\40\163\56\x75\x73\145\x72\137\151\144\x3d" . $id; goto oyFB5; case "\151\163\137\160\141\163\x73": $sql = "\x75\x70\x64\141\x74\x65\40\x69\x6d\163\137\x79\x62\x73\143\x5f\x75\163\145\162\137\163\150\x61\x72\x65\x20\163\40\x49\116\116\105\x52\x20\112\x4f\x49\116\x20\x69\155\x73\x5f\x79\142\x73\x63\x5f\x75\x73\x65\x72\40\x75\40\157\x6e\40\x73\x2e\x75\x73\145\162\137\x69\x64\75\165\56\165\151\x64\x20\163\145\x74\x20\163\x2e\x73\164\x61\164\x75\x73\x20\75\40\x31\54\x75\x2e\151\x73\x5f\144\x69\163\164\162\x69\x62\165\164\x6f\x72\75\x31\x20\x77\150\x65\x72\x65\40\x73\x2e\165\x73\145\162\137\x69\144\75" . $id; goto oyFB5; case "\x6e\157\x5f\x70\141\x73\x73": $sql = "\x75\160\144\141\164\x65\40\151\x6d\163\137\x79\x62\163\143\x5f\x75\163\145\162\x5f\163\150\141\162\x65\40\x73\x20\x49\116\116\105\x52\x20\112\117\111\116\40\151\x6d\163\137\171\142\163\143\137\x75\x73\145\162\40\x75\x20\157\156\x20\x73\56\165\163\x65\162\x5f\151\x64\75\x75\56\x75\151\144\40\163\x65\164\40\163\x2e\x73\164\x61\164\165\x73\x20\75\x20\x32\x2c\x75\x2e\x69\x73\137\x64\x69\163\x74\162\151\142\x75\164\157\x72\75\x30\40\167\x68\145\162\x65\40\163\56\x75\163\x65\162\x5f\151\144\75" . $id; goto oyFB5; case "\141\x6c\x6c\137\x70\x61\x73\163": goto p9Vm6; bSiy1: if (!(strlen($id) == 0)) { goto YG76X; } goto gNJW0; rtUv8: goto oyFB5; goto nw43G; C0rp9: $sql = "\165\x70\144\141\x74\x65\x20\151\155\x73\x5f\171\142\163\143\137\x75\163\x65\x72\x5f\163\x68\x61\162\145\x20\x73\x20\111\116\x4e\x45\x52\x20\x4a\x4f\111\116\x20\x69\155\x73\137\x79\142\x73\143\x5f\165\163\145\162\x20\165\x20\157\x6e\40\x73\56\165\x73\145\x72\137\x69\x64\75\x75\56\x75\x69\144\40\x73\x65\164\x20\163\56\163\x74\x61\164\x75\163\x20\75\40\61\54\x75\x2e\x69\x73\x5f\x64\151\x73\164\162\x69\x62\x75\x74\157\x72\75\x31\40\x77\x68\145\x72\145\x20\163\56\165\x73\145\162\x5f\x69\x64\x20\151\156\x20\50\40" . $id . "\x20\x29"; goto rtUv8; T_3_P: $id = $check->screen_id("\171\x62\x73\x63\x5f\x75\163\x65\x72\x5f\163\x68\141\162\x65", $id, "\x75\163\x65\162\x5f\x69\x64", 0, "\163\164\141\x74\165\x73"); goto bSiy1; p9Vm6: $check = new BusActivity(); goto T_3_P; gNJW0: return 1; goto u6PPJ; u6PPJ: YG76X: goto C0rp9; nw43G: } goto DhkUf; KBSP_: $type = input("\160\141\162\141\155\x2e\164\x79\160\x65\x73", "\60"); goto Jz2x5; of7w7: goto fgMAH; goto QIybw; piDzW: oyFB5: goto DQ3tO; FmlK1: fgMAH: goto Ndkvj; Ndkvj: } public function comment_edit() { goto l2LkZ; kFg6s: $comment = db::name("\x79\142\163\x63\x5f\165\x73\x65\x72\x5f\x73\x68\x61\162\x65")->where("\x75\x73\145\x72\x5f\x69\x64", $id)->field("\163\x65\x6c\154\x65\162\137\143\x6f\155\x6d\145\x6e\164\x73\x2c\165\163\x65\x72\x5f\x69\144")->find(); goto hJecW; l2LkZ: $id = request()->get("\151\144", "\60"); goto kFg6s; HZ9pS: return view("\141\x63\x74\x69\x76\151\164\171\x2f\x63\157\x6d\155\145\x6e\x74\137\x65\x64\151\x74"); goto jGqzR; hJecW: $this->assign("\144\x61\x74\x61", $comment); goto HZ9pS; jGqzR: } public function update_comment() { goto poiZn; spM55: gJBQX: goto OmlCh; OmlCh: $sql = "\165\x70\144\141\164\x65\x20\x69\155\163\x5f\171\142\163\x63\x5f\165\163\145\162\x5f\163\150\141\162\145\x20\x73\x65\x74\40\163\145\x6c\154\145\162\137\143\x6f\x6d\x6d\145\x6e\x74\x73\75\47" . $com . "\x27\40\x77\x68\x65\x72\145\40\165\x73\x65\x72\137\151\x64\x3d" . $id; goto EWqed; fZ5Uv: return "\x31"; goto wnhed; wnhed: goto Z_A67; goto spM55; Ae_mo: Z_A67: goto bhIt0; Pn1Q9: $com = request()->post("\143\157\x6d"); goto TdyDX; TdyDX: if (!empty($com)) { goto gJBQX; } goto fZ5Uv; EWqed: pdo_run($sql); goto TwQ4y; poiZn: $id = input("\x70\x61\162\x61\x6d\x2e\x69\x64"); goto Pn1Q9; TwQ4y: return "\x32"; goto Ae_mo; bhIt0: } public function child_show() { goto vvyKj; zzYSD: $deep = request()->get("\144\x65\145\x70"); goto lGGQe; lGGQe: $child = $get_child->get_child_share($pid, $deep); goto yiNUV; Sfc1f: $pid = request()->get("\160\x69\144"); goto zzYSD; yiNUV: $this->assign("\x6c\x69\x73\164", $child); goto oRsxT; oRsxT: return view(); goto sdWnF; vvyKj: $get_child = new BusActivity(); goto Sfc1f; sdWnF: } public function share_set() { goto SB1oI; pzckN: if (!(!empty($level) || $level == "\x30")) { goto dsOlg; } goto Q83Ig; bErIL: return $data; goto lFlm6; lFlm6: dsOlg: goto CXyWd; JNmb_: XaGvO: goto Gc1of; L_rpA: $pay_type = request()->post("\160\x61\x79\x5f\164\x79\x70\145"); goto QSBhh; PuYmo: $max_money = request()->post("\x6d\141\x78\x5f\x6d\157\156\145\171"); goto h7bcc; CXyWd: $share = db::name("\x79\142\163\143\x5f\x75\163\x65\x72\137\163\x68\141\162\x65\137\163\x65\164\164\151\156\147")->where("\155\143\150\x5f\151\x64", $id)->find(); goto OtAZD; qGAXu: NyN3d: goto I0fg6; OtAZD: if (!(count($share) == 0)) { goto XaGvO; } goto SC5QO; SC5QO: $share["\160\x61\x79\137\x74\171\x70\145"] = ''; goto caHIB; yazbf: $is_rebate = request()->post("\x69\163\137\x72\x65\142\x61\164\x65"); goto wPY4c; Gc1of: $share["\x70\x61\171\x5f\164\171\x70\x65"] = json_decode($share["\160\141\171\137\x74\x79\x70\x65"], true); goto K0LO7; caHIB: $share["\154\145\x76\145\x6c"] = 0; goto YCMJ6; K0LO7: $this->assign("\x73\150\141\162\145", $share); goto MN7Vp; CmGK4: $res = db::name("\x79\142\x73\143\137\x75\x73\145\x72\x5f\x73\150\x61\x72\x65\137\x73\145\164\164\x69\x6e\x67")->insert(["\x6c\145\x76\145\154" => $level, "\160\x61\171\137\164\171\160\145" => $pay_type, "\155\151\x6e\137\x6d\157\156\x65\x79" => $min_money, "\x6d\141\170\x5f\x6d\157\x6e\x65\x79" => $max_money, "\x63\x6f\156\x74\x65\x6e\164" => $content, "\x73\x68\141\x72\145\x5f\143\157\156\144\x69\x74\151\157\156" => $share_condition, "\141\x67\x72\145\x65" => $agree, "\x6d\x63\150\x5f\x69\x64" => $this->bus_id, "\x69\163\137\x72\x65\x62\141\x74\145" => $is_rebate]); goto qGAXu; ZXHnX: goto NyN3d; goto ByxwT; XUg9z: $share["\x63\x6f\156\164\x65\x6e\164"] = ''; goto QpvPm; RwHrI: $share["\x6d\x69\156\x5f\x6d\x6f\x6e\x65\x79"] = "\x30\x2e\60\60"; goto Zpsu8; I0fg6: $data = "\62"; goto bErIL; MN7Vp: return view(); goto vu3As; SB1oI: $id = $this->bus_id; goto L_rpA; Zpsu8: $share["\155\141\170\x5f\x6d\x6f\x6e\145\171"] = "\x30\x2e\60\60"; goto XUg9z; p7Tte: $res = db::name("\171\142\x73\x63\x5f\165\163\145\162\137\x73\x68\141\162\145\x5f\x73\x65\164\164\151\x6e\147")->where("\155\143\x68\137\x69\x64", $id)->update(["\x6c\x65\166\x65\154" => $level, "\160\141\171\137\x74\x79\x70\x65" => $pay_type, "\x6d\151\x6e\x5f\x6d\x6f\156\x65\171" => $min_money, "\155\141\x78\x5f\155\157\x6e\x65\x79" => $max_money, "\x63\x6f\x6e\x74\145\x6e\x74" => $content, "\x73\150\141\162\x65\137\x63\157\x6e\x64\151\164\151\157\156" => $share_condition, "\x61\x67\x72\145\145" => $agree, "\155\143\x68\x5f\x69\x64" => $this->bus_id, "\x69\163\137\x72\145\142\x61\x74\145" => $is_rebate]); goto ZXHnX; wPY4c: $share_condition = request()->post("\x73\150\141\x72\x65\x5f\x63\x6f\x6e\x64\x69\164\x69\157\x6e"); goto VErMu; VErMu: $level = request()->post("\154\145\166\145\154"); goto qtTs6; h7bcc: $content = request()->post("\x63\157\156\x74\145\x6e\164"); goto pnVmb; qtTs6: $count = db::name("\171\x62\x73\143\x5f\x75\163\x65\162\137\163\150\x61\x72\145\x5f\163\145\164\164\x69\156\x67")->where("\155\143\x68\x5f\x69\x64", $id)->count(); goto pzckN; ByxwT: liDI5: goto CmGK4; QSBhh: $min_money = request()->post("\x6d\151\156\x5f\x6d\x6f\156\145\x79"); goto PuYmo; pnVmb: $agree = request()->post("\141\147\x72\x65\145"); goto yazbf; YCMJ6: $share["\151\x73\x5f\x72\x65\x62\141\x74\145"] = 0; goto RwHrI; Q83Ig: if ($count == 0) { goto liDI5; } goto p7Tte; QpvPm: $share["\x61\x67\162\x65\x65"] = ''; goto JNmb_; vu3As: } public function share_pay() { goto OIvPA; YWeZg: $share["\151\143\x6f\x6e"] = "\x25"; goto EC5Y_; EC5Y_: if (!($share["\x6c\x65\166\145\x6c"] == 0)) { goto godjE; } goto WOAF8; zOidB: $share = db::name("\x79\142\x73\x63\x5f\x75\x73\x65\162\137\163\150\141\162\145\137\x73\x65\x74\164\x69\x6e\147")->where("\155\x63\150\x5f\x69\144", $id)->field("\151\144\x2c\x6c\145\166\145\154\54\x66\x69\x72\x73\164\137\x6e\x61\155\145\54\x73\x65\x63\157\x6e\144\x5f\156\141\155\x65\54\164\150\151\x72\x64\137\156\x61\x6d\145\x2c\x66\x69\162\163\x74\54\x73\x65\x63\x6f\x6e\144\54\164\x68\151\162\144\x2c\160\162\x69\143\x65\137\164\x79\160\x65")->find(); goto zlxnV; Mk0p7: goto mRWvm; goto iKcNq; GSU37: godjE: goto Mk0p7; RIpLe: return "\60"; goto yykc_; yykc_: qqyjR: goto PAfXf; WOAF8: $share["\x6c\145\x76\145\154"] = "\x36"; goto kzLgS; ThcS7: mRWvm: goto wTOuF; s8N9I: qFGVR: goto n20S7; n20S7: $share = db::name("\x79\x62\x73\x63\x5f\x75\163\145\162\x5f\x73\150\x61\162\x65\x5f\163\x65\164\164\151\x6e\147")->where("\155\x63\150\x5f\151\144", $id)->update(request()->post()); goto RIpLe; PAfXf: $this->assign("\x73\150\141\162\145", $share); goto HIQho; kzLgS: $share["\160\162\x69\143\x65\137\164\171\160\145"] = "\x30"; goto xmXx6; zlxnV: if (!(count($share) == 0)) { goto qm7to; } goto VseoU; VseoU: $share["\x6c\145\x76\x65\x6c"] = 0; goto X58Vq; NCdo1: $share["\x69\143\x6f\x6e"] = "\345\205\203"; goto ThcS7; OIvPA: $id = $this->bus_id; goto YOXG5; HQ7Bh: switch ($share["\x6c\x65\x76\145\x6c"]) { case 0: goto bZiC0; case 1: goto g69is; NNokk: $share["\164\x68\151\162\x64"] = "\x2d\x31"; goto I0WuB; g69is: $share["\163\x65\x63\x6f\156\x64"] = "\x2d\61"; goto NNokk; I0WuB: goto bZiC0; goto K2CNl; K2CNl: case 2: $share["\164\x68\151\x72\144"] = "\x2d\61"; goto bZiC0; } goto q2GXu; bCSsA: $share["\164\150\x69\162\x64"] = "\55\x31"; goto GSU37; q2GXu: HAjW0: goto xqjUR; HIQho: return view(); goto I2LET; X58Vq: qm7to: goto HQ7Bh; xqjUR: bZiC0: goto DrOH8; iKcNq: Wy_Gv: goto NCdo1; YOXG5: if (request()->isAjax()) { goto qFGVR; } goto zOidB; xmXx6: $share["\163\x65\x63\x6f\156\144"] = "\x2d\61"; goto bCSsA; DrOH8: if (!empty($share["\x70\x72\x69\x63\145\x5f\x74\x79\x70\145"]) && $share["\x70\x72\x69\x63\145\x5f\164\171\160\x65"] != 0) { goto Wy_Gv; } goto YWeZg; wTOuF: goto qqyjR; goto s8N9I; I2LET: } public function share_other() { goto dMX0D; kyPZY: goto xvw6l; goto eqKoX; zX6jf: if ($share["\x6f\x74\x68\x65\162"]) { goto uiLlB; } goto BJv7A; REt_E: $share = db::name("\x79\x62\x73\143\137\165\163\x65\x72\137\163\150\x61\x72\145\x5f\x73\145\164\164\151\156\x67")->where("\155\x63\150\137\151\144", $id)->field("\157\x74\150\145\x72")->find(); goto KvwBm; KvwBm: $share_default = $this->contr_share_set; goto zX6jf; SoahC: if (!request()->isAjax()) { goto t1pCD; } goto cOJam; dMX0D: $id = $this->bus_id; goto SoahC; eqKoX: uiLlB: goto PkN6T; cLk7P: return "\x30"; goto mXrkT; V7j04: $this->assign("\163\x68\x61\162\x65\137\x64\x65\x66\x61\165\x6c\x74", $share_default); goto NOjSi; mXrkT: t1pCD: goto REt_E; NOjSi: return view(); goto wGRMc; PkN6T: $share = json_decode($share["\157\164\x68\x65\x72"], true); goto wmRsV; wmRsV: xvw6l: goto YtEGH; BJv7A: $share = $share_default; goto kyPZY; cOJam: $share = db::name("\171\x62\x73\143\137\165\x73\x65\162\x5f\x73\150\141\x72\x65\137\x73\145\164\x74\151\156\x67")->where("\155\x63\x68\137\151\x64", $id)->update(request()->post()); goto cLk7P; YtEGH: $this->assign("\163\x68\141\x72\x65", $share); goto V7j04; wGRMc: } public function set_share_title() { goto Wt4it; Ko1b_: $res = Db::name("\171\x62\x73\143\x5f\165\163\x65\x72\x5f\163\x68\x61\x72\x65\x5f\163\x65\x74\x74\x69\x6e\x67")->where("\155\x63\x68\137\x69\x64", $this->bus_id)->update(["\157\x74\x68\145\x72" => $new_data]); goto OL5QU; kIvbg: $data = $this->contr_share_set; goto G2RED; OL5QU: return AjaxReturn($res); goto QSLeX; TisYS: $info = Db::name("\x79\x62\163\x63\137\165\x73\x65\x72\x5f\x73\x68\141\x72\145\137\x73\145\x74\164\x69\156\147")->where("\155\x63\150\137\x69\x64", $this->bus_id)->value("\157\x74\150\x65\162"); goto dvJNW; Wt4it: $type = input("\160\x61\x72\141\155\56\164\171\x70\x65"); goto LD7o1; U1Gir: $data[$type] = $val; goto lEc_v; nJpCb: $data = json_decode($info, true); goto fIW1e; SFfcv: xXmbV: goto kIvbg; dvJNW: if (empty($info)) { goto xXmbV; } goto nJpCb; lEc_v: $new_data = json_encode($data); goto Ko1b_; LD7o1: $val = input("\x70\x61\162\x61\x6d\56\x76\141\154"); goto TisYS; G2RED: sP_Jl: goto U1Gir; fIW1e: goto sP_Jl; goto SFfcv; QSLeX: } public function share_cash() { goto UMI4N; XJAgu: fuJNS: goto yJciJ; Wa0d9: if (empty($search_text)) { goto uieRE; } goto XnQjG; BUF2w: r28_E: goto GDXdx; QXMOi: nLiiA: goto BimJJ; EEtxh: iiWyQ: goto AErQf; L6yYu: $cash = db::name("\171\142\163\143\x5f\x75\x73\145\162\x5f\x73\x68\x61\x72\x65\x5f\x63\x61\x73\x68")->alias("\143")->join("\171\x62\163\143\137\165\163\145\162\x20\165", "\165\x2e\x75\151\144\75\x63\x2e\x75\163\145\162\137\x69\x64", "\x6c\145\x66\164")->field("\x63\56\151\x64\54\x63\56\x74\x79\x70\x65\54\x75\56\156\x69\143\x6b\x5f\156\141\x6d\145\54\165\x2e\160\x72\151\x63\x65\40\x74\157\164\x61\154\54\x63\x2e\x70\162\x69\143\x65\40\x70\x72\x69\143\x65\x2c\143\x2e\x63\x72\x65\x61\x74\x65\137\x74\151\155\x65\x2c\143\56\x73\164\141\164\x75\x73\54\143\56\142\141\x6e\x6b\137\156\141\x6d\x65\x2c\x63\x2e\x6d\157\142\151\154\145")->where("\x63\x2e\x6d\143\x68\137\151\144", $this->bus_id)->where($condition)->select(); goto Kv_lQ; ESR1F: if (!($nn == "\x32")) { goto iiWyQ; } goto FnW8G; yJciJ: $nn = "\62"; goto OmFiZ; KuGxG: NgmRY: goto NdMvC; xBu9d: $i = 0; goto QXMOi; TGpZS: goto nLiiA; goto BUF2w; fbdKG: $this->assign("\143\141\163\x68", $cash); goto QPIzi; MADJb: empty($status) ? $condition["\x73\164\x61\164\x75\x73"] = '' : ($condition["\x73\164\141\164\165\x73"] = $status); goto fbdKG; XnQjG: $condition["\165\56\156\x69\x63\153\137\156\x61\155\x65"] = array("\x6c\x69\x6b\x65", "\x25{$search_text}\45"); goto MihlO; ljmOb: empty($status) ? $condition["\163\x74\141\164\x75\x73"] = array("\x69\x6e", "\60\x2c\61\54\62\54\x33") : ($condition["\163\x74\141\164\x75\163"] = $status); goto ESR1F; wOqza: $this->assign("\x73\145\141\x72\x63\150\137\164\x65\x78\164", $search_text); goto echWm; OmFiZ: qx_ef: goto ljmOb; EpKe2: $nn = ''; goto TSfv4; cqftA: if ($status == "\x2d\x31") { goto fuJNS; } goto EpKe2; Kv_lQ: $type = $this->contr_pay_type; goto xBu9d; echWm: return view(); goto MZdIj; WD_rT: Shj8p: goto MADJb; NdMvC: $i++; goto TGpZS; qYStJ: $search_text = request()->param("\163\145\141\162\143\x68\137\x74\x65\170\164", ''); goto cqftA; UMI4N: $status = request()->param("\x73\x74\141\x74\165\163", ''); goto qYStJ; MihlO: uieRE: goto L6yYu; i0LCk: $cash[$i]["\143\162\145\141\164\x65\137\x74\151\155\145"] = date("\x59\55\155\x2d\x64\40\x48\72\x69\x3a\x73", $cash[$i]["\x63\x72\145\x61\x74\x65\137\164\x69\x6d\x65"]); goto KuGxG; AErQf: $condition["\x63\x2e\151\163\x5f\x64\145\154"] = 1; goto Wa0d9; GDXdx: if (!($nn == "\62")) { goto Shj8p; } goto F2BeV; TSfv4: goto qx_ef; goto XJAgu; DBd0O: $cash[$i]["\x74\171\x70\145"] = $type[$cash[$i]["\x74\171\x70\145"]]; goto i0LCk; FnW8G: $condition["\163\x74\x61\164\165\163"] = "\60"; goto EEtxh; F2BeV: $condition["\163\164\x61\x74\x75\x73"] = "\x2d\61"; goto WD_rT; QPIzi: $this->assign("\x73\x74\141\x74\165\x73", $status); goto wOqza; BimJJ: if (!($i < count($cash))) { goto r28_E; } goto DBd0O; MZdIj: } public function share_cash_edit() { goto TKfHP; Ea59k: $info = 0; goto tTb5H; vqwml: try { goto oulVk; X4l7v: throw new Exception("\60"); goto QPrMO; f_Kya: if (!empty($rs)) { goto jwysX; } goto X4l7v; rLEBP: sKO7q: goto Pm60P; oulVk: if ($status == 0 || $status == 1 || $status == 2 || $status == 3) { goto BWgUD; } goto ClKR7; Dqyiu: goto TMg2N; goto bQRzp; bQRzp: BWgUD: goto A3HgP; ClKR7: $info = Db::name("\x79\142\x73\143\x5f\165\x73\145\162\137\163\150\x61\x72\145\x5f\143\x61\x73\x68")->where("\x69\144", $id)->update(["\151\163\x5f\x64\x65\154" => 2]); goto Dqyiu; N2LQJ: $rs = Db::name("\x79\x62\x73\143\x5f\165\x73\x65\x72")->where("\x75\x69\x64", $u["\165\163\x65\162\137\x69\144"])->setInc("\160\x72\x69\x63\145", $u["\x70\162\151\x63\145"]); goto f_Kya; IX57q: Db::commit(); goto wID_n; Pm60P: TMg2N: goto IX57q; A3HgP: $info = Db::name("\171\x62\x73\x63\x5f\x75\163\145\162\137\163\x68\x61\x72\145\x5f\143\x61\x73\x68")->where("\151\144", $id)->update(["\163\x74\x61\x74\165\163" => $status]); goto U5Wgj; majb9: $u = Db::name("\x79\x62\163\143\x5f\x75\x73\145\162\137\x73\x68\141\162\x65\x5f\143\x61\163\150")->where("\151\144", $id)->find(); goto N2LQJ; QPrMO: jwysX: goto rLEBP; U5Wgj: if (!($status == 3)) { goto sKO7q; } goto majb9; wID_n: } catch (\Exception $e) { Db::rollback(); return 0; } goto CyXWf; TKfHP: $id = request()->post("\151\144"); goto lWpMC; CyXWf: return $info; goto qgRgs; tTb5H: Db::startTrans(); goto vqwml; lWpMC: $status = request()->post("\x73\164\x61\164\165\x73"); goto Ea59k; qgRgs: } public function share_order() { goto FmjBP; lJ9iS: $stime = input("\160\141\x72\x61\x6d\x2e\163\x74\x69\x6d\145", ''); goto t5lDa; Uwyal: $this->assign("\x6f\162\x64\x65\162\137\x6e\x6f", $order_no); goto ZYLnj; GXab8: $condition["\163\56\x63\162\145\x61\x74\145\x5f\x74\151\x6d\x65"] = ["\x62\145\x74\x77\x65\145\156", [$sstime, $sstime + 86400]]; goto INaLs; qa7YX: $this->assign("\154\151\163\164", $list); goto T1vGG; vmUCj: if (!(!empty($stime) && !empty($etime))) { goto kaZ7d; } goto F7Uep; Qpk8d: Eu4aW: goto vmUCj; aKOiC: $mch_id = $this->bus_id; goto uh7Sj; ZYLnj: return view(); goto x07Ie; YCmRR: if (empty($etime)) { goto Eu4aW; } goto KQlfY; esZ8K: $condition["\x73\56\155\x63\150\x5f\151\x64"] = $mch_id; goto NPcGs; mxC67: V7bs4: goto tpgUG; IJXS8: $etime = strtotime($etime); goto ywrdi; tpgUG: if (empty($order_status)) { goto Q_NGg; } goto JRC3j; INaLs: nMQrz: goto YCmRR; IzCnx: $order_no = input("\160\141\162\141\x6d\x2e\157\x72\144\145\x72\x5f\x6e\157", ''); goto aKOiC; oC3d9: $condition["\x6f\56\157\x72\x64\x65\162\137\156\x6f"] = ["\x6c\151\x6b\x65", "\x25" . $order_no . "\45"]; goto mxC67; uh7Sj: $condition = array(); goto esZ8K; KCA8o: $sstime = strtotime($stime); goto GXab8; C2UBo: $this->assign("\160\x61\147\145", $page); goto qa7YX; F7Uep: $stime = strtotime($stime); goto IJXS8; iXyar: $etime = date("\131\55\x6d\55\144", $etime); goto IgL4_; K9R8g: $list = $order->get_order_list($condition, $order_no); goto gYT0e; kZ_KL: $this->assign("\145\164\151\x6d\x65", $etime); goto Uwyal; SM22B: $order_status = input("\x70\x61\162\x61\x6d\x2e\x73\x74\141\164\165\x73", ''); goto lJ9iS; T1vGG: $this->assign("\x73\x74\x69\x6d\x65", $stime); goto kZ_KL; GRSTw: if (empty($stime)) { goto nMQrz; } goto KCA8o; ywrdi: $condition["\x73\56\x63\x72\x65\x61\164\x65\137\x74\151\x6d\145"] = ["\142\x65\x74\167\145\145\156", [$stime, $etime]]; goto w_ehG; IgL4_: kaZ7d: goto K9R8g; KQlfY: $eetime = strtotime($etime); goto IP8LU; jr7t2: Q_NGg: goto GRSTw; NPcGs: if (empty($order_no)) { goto V7bs4; } goto oC3d9; JRC3j: $condition["\x6f\x2e\x6f\162\144\x65\x72\x5f\163\164\141\164\x75\163"] = $order_status; goto jr7t2; gYT0e: $page = $list->render(); goto C2UBo; w_ehG: $stime = date("\x59\55\155\55\144", $stime); goto iXyar; FmjBP: $order = new BusActivity(); goto SM22B; IP8LU: $condition["\163\x2e\143\x72\x65\x61\x74\x65\137\x74\151\x6d\145"] = ["\142\x65\x74\167\x65\x65\x6e", [$eetime - 86400, $eetime]]; goto Qpk8d; t5lDa: $etime = input("\x70\x61\162\x61\x6d\56\145\164\151\x6d\145", ''); goto IzCnx; x07Ie: } function recancel() { goto myaZy; myaZy: $pid = request()->post("\151\144"); goto IEMKW; lBqMX: return AjaxReturn($res); goto kTO3L; IEMKW: $res = db::name("\x79\142\x73\x63\137\165\x73\145\x72")->where("\165\x69\x64", $pid)->update(["\160\151\144" => 0]); goto lBqMX; kTO3L: } }
