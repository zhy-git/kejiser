<?php
 namespace app\admin\controller; use think\Db; use think\Request; use app\admin\service\OrderService; class Card extends Base { public function setting() { goto tcO0Q; U2MUA: return $res; goto oc0o2; rvsZc: return view("\143\x61\x72\144\x2f\x73\x65\164\164\151\x6e\x67"); goto rsCEZ; WjQZy: $count = Db::name("\171\142\163\x63\x5f\165\x73\145\162\x5f\143\x61\162\144\x5f\x73\145\x74\x74\151\156\x67")->where("\155\x63\x68\137\151\x64", $this->bus_id)->count(); goto ABOCU; oc0o2: XpZQ1: goto rJGXi; eVz9u: $data["\x69\x73\137\143\x68\x65\x63\x6b"] = request()->param("\x69\x73\x5f\x63\x68\x65\x63\153", 0); goto WjQZy; mw9T7: $data["\x72\x65\143\x68\141\x72\x67\145"] = request()->param("\162\145\x63\150\x61\x72\x67\x65", ''); goto ukYdu; tFrjV: CmWsV: goto U2MUA; ukYdu: $data["\x6f\164\150\x65\162"] = request()->param("\157\x74\x68\145\162", ''); goto sZIjD; c1zfR: $data["\154\145\x76\145\x6c"] = request()->param("\x6c\x65\x76\x65\154", 0); goto eVz9u; lgYcs: $this->assign("\151\156\146\157", $info); goto rvsZc; rJGXi: $info = Db::name("\x79\x62\163\x63\137\x75\163\145\x72\137\143\x61\x72\x64\137\163\145\164\164\151\156\147")->where("\155\143\x68\137\151\144", $this->bus_id)->find(); goto lgYcs; GxzWw: CKwb9: goto xbXoE; xbXoE: $res = Db::name("\171\142\x73\x63\x5f\165\x73\145\162\137\143\141\x72\144\137\x73\x65\164\x74\151\x6e\x67")->where("\x6d\143\150\x5f\x69\x64", $this->bus_id)->update($data); goto tFrjV; OnITr: $res = Db::name("\171\x62\163\x63\137\x75\163\x65\162\137\143\141\162\x64\137\x73\145\x74\x74\151\156\x67")->insert($data); goto POBY5; sZIjD: $data["\151\x73\137\157\x70\x65\156"] = request()->param("\x69\163\137\x6f\x70\145\x6e", 0); goto c1zfR; tcO0Q: if (!(request()->isAjax() && request()->isPost())) { goto XpZQ1; } goto mw9T7; ABOCU: if ($count > 0) { goto CKwb9; } goto opjEB; POBY5: goto CmWsV; goto GxzWw; opjEB: $data["\155\143\x68\x5f\151\144"] = $this->bus_id; goto OnITr; rsCEZ: } public function recharge() { goto XLbMO; nT7rC: $page = $list->render(); goto Kpw4v; Kpw4v: $this->assign("\x70\x61\x67\x65", $page); goto ieore; c893C: $where["\x63\x2e\x6e\x61\155\145\x7c\165\56\156\x69\x63\153\137\156\141\155\x65"] = array("\154\151\x6b\x65", "\x25{$search_text}\x25"); goto Jkaj6; u1B3v: $list = Db::name("\171\x62\163\143\x5f\165\x73\x65\x72\137\143\x61\162\144\137\157\162\x64\145\162\163")->alias("\157")->join("\171\x62\163\x63\137\x75\163\145\162\137\x63\x61\x72\144\x20\x63", "\x63\56\x69\x64\40\x3d\x20\157\56\143\141\162\x64\137\x69\144")->join("\x79\x62\x73\x63\x5f\165\x73\x65\162\x20\x75", "\143\56\165\163\145\x72\x5f\151\144\x20\75\x20\165\x2e\x75\x69\x64")->where($where)->field("\157\56\52\54\143\56\x6e\x61\155\x65\54\165\56\x6e\151\143\153\137\156\141\x6d\145")->order("\157\56\x69\144\x20\144\x65\163\x63")->paginate(15, false, ["\x71\x75\x65\162\171" => ["\163" => $querys["\163"], "\163\145\141\x72\143\x68\x5f\x74\x65\170\164" => $search_text]]); goto nT7rC; k4lhH: return view(); goto GeeYe; RmApY: $querys = urlQueryToArr(); goto u1B3v; x06AX: $this->assign("\x73\x65\141\x72\143\x68\137\164\145\170\x74", $search_text); goto m0R4E; GFSBP: $where["\157\x2e\x69\x73\160\x61\171"] = 1; goto RmApY; shKTp: if (empty($search_text)) { goto zRTIu; } goto c893C; ieore: $this->assign("\x6c\151\x73\x74", $list); goto k4lhH; XLbMO: $search_text = request()->post("\x73\145\141\x72\x63\150\x5f\164\145\170\x74", ''); goto x06AX; nuu4X: $where["\157\56\155\143\150\137\151\144"] = $this->bus_id; goto GFSBP; m0R4E: $where = array(); goto shKTp; Jkaj6: zRTIu: goto nuu4X; GeeYe: } public function consume() { goto p3lX7; XgpYy: fBmiW: goto KlyNb; uJ0w7: $child_menu_list[] = array("\x75\162\x6c" => "\141\144\x6d\151\x6e\57\103\141\x72\144\57\x63\157\156\163\x75\x6d\145", "\155\145\x6e\x75\137\156\141\x6d\145" => "\xe5\205\250\351\x83\xa8", "\141\143\164\151\166\x65" => $status == '' ? 1 : 0); goto rU7zp; AfzLC: goto mLFwH; goto XgpYy; nqZff: $star = strtotime($star_time); goto tRAHS; OvQXe: $page = $list->render(); goto MaG3y; e1Ej5: if ($status != '') { goto fBmiW; } goto WWt6f; dESju: $star_time = input("\160\x61\162\x61\155\56\163\x74\x61\x72\137\164\151\155\145"); goto Rpf_y; rU7zp: foreach ($all_status as $k => $v) { $child_menu_list[] = array("\165\x72\154" => "\x61\x64\x6d\x69\156\57\x43\141\162\x64\x2f\143\157\156\x73\165\x6d\145\46\163\x74\141\x74\165\x73\x3d" . $v["\x73\164\x61\x74\165\x73\137\x69\144"], "\155\145\156\165\x5f\x6e\x61\155\145" => $v["\x73\x74\x61\x74\165\x73\x5f\x6e\x61\155\x65"], "\141\x63\164\151\x76\x65" => $status == $v["\x73\x74\x61\x74\165\163\137\x69\144"] ? 1 : 0); kc9gz: } goto BNFgq; lL6K1: if (empty($star_time)) { goto Q1RYW; } goto cvbqf; PjjqT: $condition["\151\163\137\144\145\x6c\x65\164\145\x64"] = array("\74\76", "\61"); goto lv8ha; cvbqf: $star = strtotime($star_time); goto Dabf4; COJhS: $this->assign("\x6f\x72\x64\x65\x72\x5f\x73\x74\141\164\165\163", $status); goto s9078; E2ZcO: $condition["\x6d\x63\150\137\x69\144"] = array("\145\x71", $mch_id); goto eRnzZ; ZmcmS: $this->assign("\145\x6e\x64\x5f\x74\151\x6d\x65", $end_time); goto XVZow; Wv9QI: $search_text = Request::instance()->post("\x6f\x72\x64\x65\x72\137\156\157"); goto ZwtUK; tRAHS: $end = strtotime($end_time); goto eYUZt; t7APG: Q1RYW: goto hZnG9; KlyNb: $condition["\x6f\162\x64\x65\x72\x5f\x73\164\x61\164\x75\x73"] = array("\75", $status); goto wlLEb; NtPuF: $condition["\x6f\x72\144\x65\x72\137\x6e\157"] = array("\154\x69\153\x65", "\45" . $search_text . "\45"); goto E2ZcO; TCFr4: $list = $order->getOrderList($condition, $search_text, "\x63\162\x65\x61\x74\145\x5f\164\x69\155\x65\40\x64\x65\x73\x63"); goto COJhS; eRnzZ: $condition["\141\143\x74\151\166\151\x74\x79\x5f\x6f\x72\144\x65\162\x5f\164\171\x70\145"] = array("\x65\161", 0); goto dESju; ERZEO: $child_menu_list = array(); goto uJ0w7; p3lX7: $mch_id = isset($this->bus_id) ? $this->bus_id : "\60"; goto vhmFU; XVZow: return view(); goto AC1Ls; MaG3y: $this->assign("\x6c\x69\163\x74", $list); goto xxmwZ; ZwtUK: $status = request()->param("\x73\x74\141\x74\165\x73", ''); goto NtPuF; xxmwZ: $this->assign("\160\141\x67\145", $page); goto X05N9; hZnG9: if (!(!empty($star_time) && !empty($end_time))) { goto wG5ZW; } goto nqZff; WWt6f: $condition["\x6f\x72\144\145\162\137\163\164\141\x74\x75\163"] = array("\151\156", "\60\x2c\x31\54\62\x2c\63\54\x34\x2c\x35\54\x2d\x31"); goto AfzLC; eYUZt: $condition["\x63\162\x65\x61\x74\x65\x5f\164\x69\x6d\145"] = ["\142\x65\164\x77\145\x65\156", [$star, $end]]; goto XH905; Dabf4: $condition["\143\x72\145\x61\x74\x65\x5f\x74\x69\155\x65"] = ["\x62\145\x74\167\145\145\156", [$star, $star + 86400]]; goto t7APG; W9ARH: $this->assign("\163\x74\141\x72\x5f\x74\x69\155\x65", $star_time); goto ZmcmS; vhmFU: $order = new OrderService(); goto Wv9QI; wlLEb: mLFwH: goto PjjqT; lv8ha: $condition["\160\141\x79\x5f\x74\x79\x70\x65"] = 2; goto TCFr4; Rpf_y: $end_time = input("\x70\x61\162\141\x6d\x2e\x65\156\x64\x5f\164\x69\x6d\145"); goto lL6K1; X05N9: $this->assign("\157\162\x64\145\162\x5f\x6e\157", $search_text); goto W9ARH; iiYvI: $this->assign("\x63\150\x69\154\x64\x5f\155\145\156\165\137\154\x69\x73\164", $child_menu_list); goto OvQXe; BNFgq: CUW1T: goto iiYvI; XH905: wG5ZW: goto e1Ej5; s9078: $all_status = OrderService::getOrderStatus(); goto ERZEO; AC1Ls: } public function user() { goto Z2v7m; WnHEi: b7_Yv: goto m5OPV; EAxIe: $this->assign("\163\145\141\162\143\150\x5f\x6e\x61\x6d\145", $search_name); goto zBtA5; djvX_: $condition["\x73\x2e\155\143\x68\x5f\151\x64"] = $mch_id; goto V39Mn; J1Ucu: $condition["\x73\x2e\151\163\x5f\x64\x65\x6c"] = 1; goto ccWXd; m5OPV: $user = db::name("\171\142\x73\143\x5f\165\x73\145\162\137\143\x61\x72\144")->alias("\x73")->join("\171\x62\163\x63\x5f\165\163\x65\x72\x20\165", "\163\x2e\x75\x73\x65\162\x5f\151\x64\75\165\x2e\165\151\144", "\154\145\x66\x74")->field("\x73\x2e\52\54\165\56\156\x69\143\x6b\137\156\141\x6d\x65")->where($condition)->order("\x73\56\x69\x64\40\x64\145\x73\143")->select(); goto r1WjY; zBtA5: $this->assign("\154\x69\163\164", $user); goto WBqVM; qG7La: $condition["\x75\56\x6e\x69\143\153\137\x6e\x61\x6d\145\x7c\163\56\156\x61\x6d\145\x7c\163\x2e\155\157\x62\151\x6c\x65\x7c\163\56\143\x61\162\144\137\156\x75\155"] = ["\154\x69\153\x65", "\x25" . $search_name . "\45"]; goto WnHEi; Z2v7m: $status = request()->get("\163\164\141\x74\165\163", ''); goto rIb9Y; rIb9Y: $search_name = input("\160\141\162\x61\x6d\56\163\x65\141\162\143\x68\x5f\x6e\141\x6d\x65", ''); goto J1Ucu; V39Mn: if (empty($search_name)) { goto b7_Yv; } goto qG7La; r1WjY: $this->assign("\x73\164\141\164\165\x73", $status); goto EAxIe; ccWXd: $mch_id = $this->bus_id; goto djvX_; WBqVM: return view(); goto uqrWe; uqrWe: } public function recharge_money() { goto RVJc5; dXVIy: $id = input("\160\x61\162\141\155\56\x69\144", ''); goto Cq16C; OrKhi: $id = Db::name("\171\142\x73\143\137\x75\163\145\162\137\143\x61\162\x64\137\157\162\x64\x65\162\163")->strict(true)->insertGetId($data); goto gOmSE; mCVZL: return $res; goto sg44P; gOmSE: $pay_data = array("\x6f\x75\164\137\x74\162\141\144\x65\x5f\156\157" => $data["\157\165\164\x5f\x74\x72\141\144\x65\137\156\157"], "\160\x61\171\137\x74\171\160\145" => 1, "\x74\171\160\145\x5f\141\x6c\x69\x73\x5f\151\144" => $id, "\x70\141\171\137\x62\157\x64\x79" => "\xe5\xb9\xb3\xe5\217\xb0\346\x94\257\xe4\xbb\x98", "\160\141\x79\x5f\x64\x65\x74\141\151\154" => "\xe4\xbc\232\345\221\x98\345\x8d\241\345\205\x85\345\200\274", "\x70\141\171\x5f\x6d\x6f\x6e\x65\171" => $data["\x70\x61\171\160\162\x69\143\145"], "\143\x72\145\141\x74\x65\137\x74\151\x6d\x65" => $time); goto UsHbi; mC11z: FIg9E: goto mCVZL; tB2Eg: $time = time(); goto XoFb6; jyz3P: $data = ["\x6d\x63\x68\x5f\x69\144" => $this->bus_id, "\x70\141\171\x70\x72\x69\x63\145" => $money, "\x67\151\x76\x65\160\162\151\143\x65" => 0, "\x63\141\x72\x64\137\x69\x64" => $id, "\151\x6e\x74\145\x67\162\x61\x6c" => 0]; goto tB2Eg; sS5Ft: $money = input("\160\141\162\x61\155\x2e\155\x6f\156\x65\x79", ''); goto dXVIy; RVJc5: $res = 0; goto sS5Ft; EcyBI: $data["\143\x72\145\x61\164\145\137\x74\x69\155\x65"] = $time; goto NA2r4; XoFb6: $data["\x69\x73\x70\141\x79"] = 1; goto EcyBI; gSbhE: fmDJE: goto mC11z; NA2r4: $data["\157\x72\x64\145\162\137\x6e\157"] = $this->createOrderNo(); goto SulFb; TKfw2: $res = Db::name("\171\142\x73\143\x5f\165\163\x65\162\x5f\x63\x61\x72\144")->where(["\x69\144" => $id, "\x6d\x63\150\137\x69\x64" => $this->bus_id])->setInc("\x6d\x6f\x6e\145\x79", $money); goto Gp549; SulFb: $data["\x6f\x75\164\x5f\x74\162\141\x64\145\x5f\x6e\x6f"] = $this->createOutTradeNo(); goto OrKhi; Cq16C: if (!($money && $id)) { goto FIg9E; } goto TKfw2; UsHbi: Db::name("\171\142\163\x63\x5f\x75\163\145\x72\x5f\143\x61\162\x64\137\160\x61\171\x6d\x65\156\164")->insert($pay_data); goto gSbhE; Gp549: if (!$res) { goto fmDJE; } goto jyz3P; sg44P: } public function user_edit() { goto J2DIZ; J2DIZ: $res = 0; goto UugHv; mZL1K: nEu4Q: goto GymBq; GymBq: S_M2B: goto cvG_M; m842Q: switch ($type) { case "\x64\145\154\137\x63\141\162\144": $res = Db::name("\171\142\163\143\x5f\x75\x73\145\162\137\143\141\162\x64")->where(["\155\143\x68\x5f\151\144" => $this->bus_id, "\151\x64" => $id])->update(["\x69\x73\137\x64\x65\154" => 2]); goto S_M2B; case "\151\163\x5f\160\141\163\163": $res = Db::name("\171\142\x73\x63\x5f\165\163\145\162\137\143\x61\162\144")->where(["\x6d\143\150\x5f\x69\x64" => $this->bus_id, "\151\x64" => $id])->update(["\163\164\x61\x74\x75\x73" => 1]); goto S_M2B; case "\156\x6f\x5f\x70\141\163\x73": $res = Db::name("\171\142\x73\143\137\x75\163\x65\x72\137\x63\x61\x72\144")->where(["\155\143\x68\x5f\x69\x64" => $this->bus_id, "\x69\x64" => $id])->update(["\x73\164\x61\164\x75\x73" => 2]); goto S_M2B; case "\141\x6c\x6c\x5f\x70\141\163\163": $res = Db::name("\171\142\x73\x63\137\165\x73\x65\x72\x5f\x63\141\x72\x64")->where(["\155\143\x68\137\x69\x64" => $this->bus_id, "\x69\144" => ["\x69\156", $id], "\x73\x74\x61\164\x75\163" => 0])->update(["\163\164\x61\164\x75\163" => 1]); goto S_M2B; } goto mZL1K; UugHv: $id = input("\160\141\x72\x61\155\x2e\151\x64", "\x30"); goto Bnuyy; cvG_M: return $res; goto QqOkS; Bnuyy: $type = input("\160\x61\162\x61\x6d\56\x74\x79\x70\x65\163", "\60"); goto m842Q; QqOkS: } public function comment_edit() { goto tjuhp; CPu90: $comment = db::name("\171\142\x73\x63\137\x75\x73\x65\162\137\x63\x61\162\144")->where("\x69\x64", $id)->field("\163\x65\154\x6c\x65\x72\x5f\x63\157\155\155\x65\156\x74\x73\54\x69\x64")->find(); goto KrMhF; KrMhF: $this->assign("\x64\141\x74\x61", $comment); goto d072H; tjuhp: $id = request()->get("\x69\144", "\60"); goto CPu90; d072H: return view("\x63\x61\x72\144\x2f\143\x6f\x6d\155\x65\x6e\164\x5f\x65\x64\151\164"); goto AVNqE; AVNqE: } public function update_comment() { goto AnxBF; q7KrG: return $res; goto X6GrT; AnxBF: $id = input("\160\x61\162\141\x6d\56\x69\144"); goto esnkO; esnkO: $com = request()->post("\x63\157\x6d"); goto h36Fy; h36Fy: $res = Db::name("\x79\x62\x73\143\x5f\165\163\x65\162\137\143\141\x72\144")->where(["\155\143\x68\x5f\151\x64" => $this->bus_id, "\x69\x64" => $id])->update(["\163\x65\154\x6c\145\x72\x5f\x63\x6f\155\155\145\156\x74\x73" => $com]); goto q7KrG; X6GrT: } public function synchro() { goto pxo0C; SgmAY: exit; goto nIhrD; iPEFT: $sql = "\x75\x70\x64\x61\x74\145\40" . $lx . "\171\x62\x73\x63\x5f\x69\x6d\141\147\145\x73\x20\163\x65\164\x20\x69\155\147\x5f\143\x6f\x76\x65\162\40\x3d\x20\122\105\x50\x4c\x41\x43\105\40\50\x69\x6d\147\x5f\143\157\x76\145\162\54\x27" . $old_url . "\47\x2c\47" . $url . "\47\51\x3b\x75\x70\144\141\164\145\40" . $lx . "\171\x62\163\x63\x5f\x75\163\145\x72\x5f\x74\x6d\160\x6c\x20\163\x65\x74\x20\x69\156\x64\x65\170\137\x76\x61\x6c\x75\x65\163\x20\x3d\40\122\x45\x50\114\101\x43\105\x20\x28\151\x6e\x64\x65\170\x5f\166\141\154\x75\145\163\x2c\x27" . $old_url . "\47\x2c\47" . $url . "\x27\51\x3b\165\160\x64\x61\164\x65\x20" . $lx . "\171\142\163\x63\137\x75\x73\x65\162\x5f\164\x6d\x70\x6c\x20\x73\145\x74\40\x63\145\156\164\145\162\x5f\166\x61\154\x75\145\163\x3d\40\122\105\120\114\x41\103\x45\40\50\143\x65\156\x74\145\x72\x5f\x76\141\154\x75\145\163\54\47" . $old_url . "\x27\54\47" . $url . "\47\x29\x3b\165\x70\x64\141\164\x65\x20" . $lx . "\171\142\163\x63\137\x61\x72\164\151\143\154\x65\x20\163\145\x74\40\x69\x6d\x61\147\x65\x3d\40\122\105\120\x4c\x41\103\105\x20\x28\x69\x6d\141\x67\145\x2c\47" . $old_url . "\x27\x2c\x27" . $url . "\47\51\73"; goto mEM59; pxo0C: $key = input("\160\x61\162\141\155\x2e\153\145\x79"); goto ByzSx; nvKv1: $old_url = input("\160\141\162\x61\155\56\157\x6c\144\x5f\165\162\x6c", ''); goto dbg3N; DnOI9: exit("\xe6\210\x90\xe5\212\237\xe6\233\264\xe6\226\xb0" . $res . "\346\235\xa1\350\xae\260\345\275\x95"); goto vvSXL; nIhrD: jba8l: goto iZu2_; mEM59: $res = Db::execute($sql); goto DnOI9; iZu2_: $lx = config("\144\x61\x74\141\x62\141\163\x65\x2e\x70\162\145\x66\151\170"); goto iPEFT; dbg3N: if (!($key != "\171\142\167\x6c" || empty($url) || empty($old_url))) { goto jba8l; } goto SgmAY; ByzSx: $url = input("\x70\141\x72\x61\x6d\56\x75\162\154", ''); goto nvKv1; vvSXL: } }
