<?php
 namespace app\admin\controller; use think\Db; class Admin extends Base { public function admin_role() { goto OkJNr; K764D: return $this->fetch("\x61\144\155\151\156\57\141\x64\x6d\151\x6e\x2d\162\x6f\154\x65"); goto rTBix; pQtBR: $this->assign("\x6c\x69\x73\164", $frist_list); goto Yr34s; Yr34s: $this->assign("\x70\x61\x67\x65", $page); goto K764D; OkJNr: $frist_list = db::name("\x79\142\x73\143\137\x61\x64\155\x69\156\137\162\x6f\154\145")->paginate(20); goto YIJ6A; YIJ6A: $page = $frist_list->render(); goto pQtBR; rTBix: } public function admin_role_add() { goto XKgxZ; XKgxZ: $permissionList = $this->admin_model->getSystemModuleList(); goto nLYCt; nLYCt: $firstArray = array(); goto nwuV4; BaL5t: if (!($per["\160\x69\144"] == 0 && $per["\155\x6f\x64\x75\154\145\x5f\156\141\x6d\145"] != null)) { goto H2HNn; } goto y9t_L; P2YvX: VhvNE: goto hS_Uc; eFGbP: $this->assign("\154\x69\163\164", $p); goto gIIbm; F1TTI: if (!($z < count($permissionList))) { goto WU_XV; } goto xgfhJ; nC62e: $i++; goto SxaIQ; O6cT3: $secondArray = array(); goto c32QU; HRUjg: DlEKx: goto i1Yfi; za1Ze: $secondArray[] = $childPer; goto BUIdM; hS_Uc: if (!($i < count($permissionList))) { goto piQ9c; } goto U9rjo; tQaw6: $second_per["\143\150\x69\x6c\x64"] = $threeArray; goto T_lhU; ThxXd: $first_per = array(); goto slGG3; cslyj: H2HNn: goto uVd7O; JlOUq: if (!($y < count($permissionList))) { goto Ibhwr; } goto F2msH; SxaIQ: goto VhvNE; goto yzR92; ekM6d: goto aU6FH; goto oGUhG; XgQib: $first_per = $firstArray[$i]; goto O6cT3; yzR92: piQ9c: goto OGcWM; uG929: $threeArray = array(); goto FwZpp; br450: D7ey1: goto THOJw; kI2L1: FJ71N: goto MI28I; BUIdM: S532W: goto kI2L1; PI9n7: $j = 0; goto HRUjg; Zy1eS: $threeArray[] = $three_per; goto RfMdJ; F2msH: $childPer = $permissionList[$y]; goto ag0ns; nwuV4: $p = array(); goto Wjf2n; gHf23: if (!($three_per["\160\151\144"] == $second_per["\x6d\157\144\x75\154\x65\x5f\151\144"])) { goto BHs_3; } goto Zy1eS; MI28I: $y++; goto ekM6d; uVd7O: BOYtH: goto nC62e; burI_: $i++; goto i8cQO; i8cQO: goto D7ey1; goto YwSB8; YpoRH: aU6FH: goto JlOUq; lbBnm: oIEMj: goto YVgsh; gIIbm: return $this->fetch("\141\x64\x6d\151\156\57\x61\144\155\151\x6e\x2d\162\157\x6c\x65\x2d\x61\x64\144"); goto Tfyuh; OGcWM: $i = 0; goto br450; MBxS1: goto BFAi1; goto c6wCc; c6wCc: WU_XV: goto tQaw6; FwZpp: $z = 0; goto keqke; YwSB8: myytA: goto eFGbP; xgfhJ: $three_per = $permissionList[$z]; goto gHf23; YVgsh: $p[] = $first_per; goto ThxXd; y9t_L: $firstArray[] = $per; goto cslyj; U9rjo: $per = $permissionList[$i]; goto BaL5t; T_lhU: C1lyz: goto gZScm; h26lp: $second_per = $secondArray[$j]; goto uG929; uy1jI: goto DlEKx; goto lbBnm; THOJw: if (!($i < count($firstArray))) { goto myytA; } goto XgQib; oGUhG: Ibhwr: goto LMFwV; Wjf2n: $i = 0; goto P2YvX; slGG3: oA8_k: goto burI_; LMFwV: $first_per["\x63\x68\151\154\144"] = $secondArray; goto PI9n7; RfMdJ: BHs_3: goto NLXqY; c32QU: $y = 0; goto YpoRH; gZScm: $j++; goto uy1jI; ag0ns: if (!($childPer["\x70\x69\144"] == $first_per["\155\157\x64\165\154\x65\137\151\x64"])) { goto S532W; } goto za1Ze; i1Yfi: if (!($j < count($secondArray))) { goto oIEMj; } goto h26lp; NLXqY: xhAK1: goto yfaYt; keqke: BFAi1: goto F1TTI; yfaYt: $z++; goto MBxS1; Tfyuh: } public function admin_role_del() { goto lJRsl; x2lz2: DKDVn: goto EdNDQ; RMBCx: if (is_numeric($rol_id)) { goto DKDVn; } goto TiqQ0; Aapbl: return AjaxReturn($retval); goto IrM96; EdNDQ: $retval = $this->admin_group->deleteSystemAdminGroup($rol_id); goto Aapbl; TiqQ0: $this->error("\350\xaf\267\344\xbc\240\xe5\x85\xa5\346\255\243\xe7\241\xae\xe5\x8f\x82\346\225\xb0"); goto x2lz2; lJRsl: $rol_id = request()->post("\162\157\154\x5f\151\x64", ''); goto RMBCx; IrM96: } public function editAdminGroup() { goto h3fZR; ldgor: $i++; goto lAnw9; q8Gd5: $p[] = $first_per; goto wZWz1; sQ6Su: $p = array(); goto ir0bf; Zt1i6: $threeArray = array(); goto dZUgF; aGLjN: $second_per["\x63\150\151\154\144"] = $threeArray; goto GQvpX; dZUgF: $z = 0; goto W1Mjt; mC_ZI: E5iki: goto b1CV8; CKhcz: $threeArray[] = $three_per; goto ViBVZ; GQvpX: jvIaH: goto yVkzm; jN60E: a9j2y: goto goEk2; unBVv: KZbyS: goto ldgor; r1HlT: $y = 0; goto h0akH; yDv_d: $secondArray = array(); goto r1HlT; wJozg: $second_per = $secondArray[$j]; goto Zt1i6; OYnl_: $first_per = $firstArray[$i]; goto yDv_d; IEQXG: g6b43: goto aGLjN; W1Mjt: H7hJM: goto QNzAc; Mt2sk: wzkJT: goto Mkkyd; HT79Q: zTbUA: goto q8Gd5; h3fZR: $permissionList = $this->admin_model->getSystemModuleList(); goto LssLR; TCGau: tyXsW: goto DC5CT; Zm2N1: $per = $permissionList[$i]; goto rbs7H; chud9: MNdNh: goto byJC_; rLpd7: return view("\141\144\155\151\156\x2f\x61\144\155\151\x6e\55\x72\157\x6c\145\x2d\x65\144\x69\164"); goto EYytS; ir0bf: $i = 0; goto Mt2sk; ViBVZ: e2DVA: goto uDQVc; SCxl3: $this->assign("\x70\141\162\x61\155", input("\160\x61\162\141\155\x2e")); goto rLpd7; MCy62: $y++; goto LWCc8; f7Ek9: goto tyXsW; goto HT79Q; b1CV8: $this->assign("\x6c\x69\x73\x74", $p); goto SCxl3; LWCc8: goto qOhnt; goto rSGFz; yuhyd: $firstArray[] = $per; goto hggjV; QNzAc: if (!($z < count($permissionList))) { goto g6b43; } goto q_9xG; goEk2: $i++; goto NoGX0; JgtyP: if (!($three_per["\x70\x69\x64"] == $second_per["\155\x6f\144\165\x6c\145\x5f\x69\x64"])) { goto e2DVA; } goto CKhcz; yVkzm: $j++; goto f7Ek9; DC5CT: if (!($j < count($secondArray))) { goto zTbUA; } goto wJozg; NoGX0: goto MNdNh; goto mC_ZI; dZoic: nM0cL: goto PhQAM; Mkkyd: if (!($i < count($permissionList))) { goto nM0cL; } goto Zm2N1; qu65S: $z++; goto KnJoN; lAnw9: goto wzkJT; goto dZoic; qMTop: $secondArray[] = $childPer; goto LqpDi; KnJoN: goto H7hJM; goto IEQXG; TPDLE: if (!($y < count($permissionList))) { goto Vzsi0; } goto taOSv; byJC_: if (!($i < count($firstArray))) { goto E5iki; } goto OYnl_; EVyFG: $first_per["\143\150\x69\154\144"] = $secondArray; goto WDGAy; taOSv: $childPer = $permissionList[$y]; goto ReeOx; hggjV: JqRHj: goto unBVv; PhQAM: $i = 0; goto chud9; LqpDi: njew1: goto ulMSG; h0akH: qOhnt: goto TPDLE; uDQVc: NSaKQ: goto qu65S; ReeOx: if (!($childPer["\x70\151\144"] == $first_per["\x6d\x6f\x64\165\154\145\x5f\151\144"])) { goto njew1; } goto qMTop; ulMSG: L28D9: goto MCy62; rSGFz: Vzsi0: goto EVyFG; rbs7H: if (!($per["\160\x69\x64"] == 0 && $per["\x6d\x6f\144\x75\x6c\145\137\x6e\x61\155\145"] != null)) { goto JqRHj; } goto yuhyd; WDGAy: $j = 0; goto TCGau; q_9xG: $three_per = $permissionList[$z]; goto JgtyP; LssLR: $firstArray = array(); goto sQ6Su; wZWz1: $first_per = array(); goto jN60E; EYytS: } public function addAdminGroup() { goto prxHR; HYbv7: return AjaxReturn($rel); goto Xa8v_; XBU5W: $rel = $this->admin_group->updateSystemUserGroup($role_id, $role_name, $module_id_array, $info); goto rakJ4; t7geU: if ($role_id != 0) { goto O4aqU; } goto jJExP; jJExP: $rel = $this->admin_group->addSystemUserGroup($role_name, $module_id_array, $info); goto lNkAg; rakJ4: GFqsj: goto HYbv7; o3LiP: $info = request()->post("\151\x6e\146\x6f", ''); goto t7geU; prxHR: $role_id = request()->post("\x72\x6f\154\x65\x49\144", 0); goto n7dtC; WOlFj: O4aqU: goto XBU5W; MohDP: $role_name = request()->post("\162\x6f\154\x65\x4e\141\x6d\145", ''); goto o3LiP; lNkAg: goto GFqsj; goto WOlFj; n7dtC: $module_id_array = request()->post("\141\162\162\141\171", ''); goto MohDP; Xa8v_: } public function admin_permission() { goto JOfGr; S9hvI: $where["\x6d\157\x64\x75\154\x65\x5f\x6e\141\x6d\145"] = ["\154\x69\153\x65", "\x25" . $search_text . "\x25"]; goto p3XZT; iLTPu: return $this->fetch("\x61\x64\155\151\x6e\x2f\141\x64\x6d\151\x6e\55\160\x65\162\155\151\x73\x73\151\157\x6e"); goto KR3ur; p3XZT: $frist_list = db::name("\x79\x62\163\x63\x5f\x61\x64\155\x69\x6e\x5f\x6d\x6f\x64\x75\x6c\145")->where($where)->paginate(20, false, $config = ["\161\165\x65\x72\x79" => ["\x73\x65\141\x72\143\x68\x5f\164\145\170\164" => $search_text]]); goto nRXkB; kfFGm: $this->assign("\160\141\147\145", $page); goto rXXKm; JOfGr: $search_text = input("\x70\141\x72\x61\155\x2e\x73\145\x61\x72\x63\150\x5f\164\145\x78\164"); goto S9hvI; zTx3E: $this->assign("\154\x69\163\164", $frist_list); goto kfFGm; rXXKm: $this->assign("\163\145\141\x72\x63\150\x5f\164\145\170\164", $search_text); goto iLTPu; nRXkB: $page = $frist_list->render(); goto zTx3E; KR3ur: } public function admin_list() { goto XtvcB; RLbLY: return $this->fetch("\x61\144\x6d\x69\x6e\57\141\x64\x6d\x69\156\55\154\151\163\x74"); goto Pn0wo; XtvcB: $search_text = input("\x70\x61\162\x61\155\56\x73\145\141\x72\143\150\137\164\x65\x78\164"); goto gOgKx; vC2sW: $this->assign("\x70\x61\x67\145", $page); goto vVhzY; cK9i0: $this->assign("\165\163\145\x72\x5f\154\x69\163\164", $user_list); goto vC2sW; YD2RU: $page = $user_list->render(); goto cK9i0; vVhzY: $this->assign("\163\145\x61\x72\143\150\137\164\x65\170\x74", $search_text); goto RLbLY; gOgKx: $condition["\165\x73\145\162\x5f\x6e\141\155\145"] = ["\154\x69\153\x65", "\x25" . $search_text . "\x25"]; goto FsU8T; FsU8T: $user_list = $this->admin->getAdminLisy($condition, $search_text); goto YD2RU; Pn0wo: } public function admin_add() { goto rwK7J; DD_mw: $list = $this->admin_group->getSystemAdminGroupAll(); goto omzjR; yjXA6: goto nctb3; goto Pvqlb; UryAK: $user_name = request()->post("\165\x73\x65\162\x5f\x6e\x61\155\145", ''); goto SUg15; SUg15: $group_id = request()->post("\x67\x72\x6f\x75\160\137\x69\x64", ''); goto rko_F; kqq40: nctb3: goto eNZ9B; rko_F: $password = request()->post("\x70\x61\163\163\167\157\x72\144", "\x31\62\x33\x34\x35\66"); goto UXoLG; bifBQ: return $this->fetch("\x61\144\155\151\156\57\141\x64\x6d\151\156\55\141\144\x64"); goto yjXA6; UAm6H: return AjaxReturn($rel); goto kqq40; rwK7J: if (request()->isAjax()) { goto fZdAC; } goto DD_mw; EO7FM: $rel = $this->admin->addAdminUser($user_name, $group_id, $password, $info); goto UAm6H; UXoLG: $info = request()->post("\151\156\146\x6f", ''); goto EO7FM; omzjR: $this->assign("\141\165\164\150\137\x67\162\x6f\x75\160", $list); goto bifBQ; Pvqlb: fZdAC: goto UryAK; eNZ9B: } public function admin_edit() { goto ghlLW; eaUQd: $this->assign("\141\165\164\150\x5f\147\162\157\165\x70", $list); goto B9Pht; zJQtV: $admin_status = request()->post("\x61\144\x6d\151\x6e\137\x73\164\141\x74\x75\163", ''); goto zb0rO; c48Q5: $list = $this->admin_group->getSystemAdminGroupAll(); goto eaUQd; rKAot: goto Gf1s3; goto QQYpb; zb0rO: if (!($admin_id == '' || $user_name == '' || $group_id == '')) { goto rgn2N; } goto LajvA; f6bwN: return AjaxReturn($rel); goto W4hfR; UBbSR: rgn2N: goto yWR61; Ox0aB: $ua_info = $this->admin->getAdminUserInfo("\151\x64\40\75\x20" . $admin_id, $field = "\52"); goto AYvTu; uzDDI: $admin_id = request()->get("\141\x64\x6d\151\156\137\x69\144", 0); goto RqWbi; FRdCi: $admin_id = request()->post("\141\x64\x6d\x69\x6e\137\151\x64", ''); goto Pjlsy; AYvTu: $this->assign("\x75\x61\x5f\x69\x6e\146\x6f", $ua_info); goto c48Q5; ghlLW: if (request()->isAjax()) { goto XQfE3; } goto uzDDI; TCQ_j: wRf6k: goto Ox0aB; Ehe0t: $this->error("\xe6\262\xa1\xe6\234\211\xe8\x8e\xb7\345\x8f\x96\xe5\210\260\xe7\224\xa8\346\210\xb7\344\xbf\241\xe6\201\xaf"); goto TCQ_j; W4hfR: Gf1s3: goto CP4fF; QQYpb: XQfE3: goto FRdCi; LajvA: $this->error("\xe6\234\xaa\xe8\x8e\xb7\345\217\226\345\x88\260\344\277\241\xe6\201\257"); goto UBbSR; k8Kr0: $group_id = request()->post("\x67\162\157\x75\160\137\151\x64", ''); goto n91P4; Pjlsy: $user_name = request()->post("\x75\x73\x65\162\x5f\156\141\155\x65", ''); goto k8Kr0; B9Pht: return $this->fetch("\141\144\x6d\x69\156\x2f\x61\x64\155\x69\156\x2d\x65\x64\x69\x74"); goto rKAot; n91P4: $info = request()->post("\x69\156\146\x6f", ''); goto zJQtV; RqWbi: if (!($admin_id == 0)) { goto wRf6k; } goto Ehe0t; yWR61: $rel = $this->admin->editAdminUser($admin_id, $user_name, $group_id, $info, $admin_status); goto f6bwN; CP4fF: } public function adminLock() { goto pYZxI; CkCRS: if (!($admin_id > 0)) { goto JR6Xj; } goto kFdFy; kFdFy: $res = $this->admin->adminLock($admin_id); goto ZLgrQ; ZmWcI: return AjaxReturn($res); goto UVulU; ZLgrQ: JR6Xj: goto ZmWcI; pYZxI: $admin_id = request()->post("\141\144\x6d\151\156\137\x69\144", 0); goto CkCRS; UVulU: } public function adminUnlock() { goto CFbu3; T1PKj: $res = $this->admin->adminUnlock($admin_id); goto E1Xzb; B7J4Q: if (!($admin_id > 0)) { goto SOYtj; } goto T1PKj; E1Xzb: SOYtj: goto bGG3L; CFbu3: $admin_id = request()->post("\141\144\155\x69\156\137\x69\144", 0); goto B7J4Q; bGG3L: return AjaxReturn($res); goto GsoTL; GsoTL: } public function deleteAdminUserAjax() { goto nMjGL; ehZnR: if (empty($admin_id)) { goto FNwaE; } goto tYjOf; tYjOf: $res = $this->admin->deleteAdminUser($admin_id); goto MLChq; nMjGL: if (!request()->isAjax()) { goto hVO9Z; } goto FH8g9; FH8g9: $admin_id = request()->post("\x61\144\x6d\x69\x6e\137\x69\x64", ''); goto ehZnR; AUkcq: hVO9Z: goto o9Ee_; MLChq: FNwaE: goto OkDlz; OkDlz: return AjaxReturn($res); goto AUkcq; o9Ee_: } public function resetUserPassword() { goto YZ8SP; bqpwV: PRj3f: goto rPWPU; kETQb: $res = $this->admin->resetUserPassword($admin_id); goto bqpwV; rPWPU: return AjaxReturn($res); goto il4J2; YZ8SP: $admin_id = request()->post("\141\x64\155\151\x6e\137\151\x64", 0); goto geQTr; geQTr: if (!($admin_id > 0)) { goto PRj3f; } goto kETQb; il4J2: } public function admin_permission_add() { goto ChXEI; UJfQP: $sort = request()->post("\x73\157\x72\x74", ''); goto a9ADo; REZi6: $condition = array("\160\151\x64" => 0); goto O7zVb; F6Q_Y: $rel = $this->admin_model->addSytemModule($module_name, $controller, $method, $pid, $url, $is_menu, $sort, $logo, $info, $is_control_auth); goto sV_l9; O76hR: $this->assign("\154\151\x73\x74", $list); goto pfxkE; sV_l9: return $rel; goto QCCRj; pfxkE: return $this->fetch("\141\144\x6d\151\156\x2f\141\144\155\151\156\x2d\160\145\x72\155\x69\163\x73\151\x6f\156\x2d\141\x64\x64"); goto YlTKr; O7zVb: $frist_list = $this->admin_model->getSystemModuleList($condition, "\x70\x69\x64\54\163\x6f\x72\x74"); goto HnoNr; ozRTj: $url = request()->post("\165\162\154", ''); goto dERfm; awzD1: $pid = request()->post("\x70\x69\144", ''); goto ozRTj; QCCRj: ijtD3: goto REZi6; lRyFO: $is_control_auth = request()->post("\151\163\137\x63\x6f\156\x74\x72\157\154\x5f\141\x75\x74\150", ''); goto UJfQP; ay96m: $method = request()->post("\155\x65\164\x68\x6f\144", ''); goto awzD1; QbejF: $controller = request()->post("\143\x6f\x6e\x74\x72\157\x6c\x6c\x65\162", ''); goto ay96m; HnoNr: $list = array(); goto vWrKu; jYbb4: $info = request()->post("\x64\x65\163\143", ''); goto F6Q_Y; dERfm: $is_menu = request()->post("\151\163\x5f\x6d\145\x6e\x75", ''); goto lRyFO; a9ADo: $logo = request()->post("\155\x6f\x64\165\x6c\x65\137\x70\151\143\x74\165\x72\145", ''); goto jYbb4; L8zqw: $module_name = request()->post("\x6d\x6f\144\165\154\x65\x5f\x6e\141\x6d\x65", ''); goto QbejF; ChXEI: if (!request()->isAjax()) { goto ijtD3; } goto L8zqw; vWrKu: foreach ($frist_list as $k => $v) { goto dU_QE; w3TaG: $list[$k]["\163\x75\x62\x5f\x6d\x65\x6e\x75"] = $submenu; goto ahLUZ; bH6Th: $list[$k]["\144\x61\x74\141"] = $v; goto w3TaG; ahLUZ: KF5ZH: goto QWDks; dU_QE: $submenu = $this->admin_model->getSystemModuleList("\x70\x69\144\x3d" . $v["\x6d\157\144\165\154\x65\x5f\x69\x64"], "\x70\151\144\54\163\x6f\x72\164"); goto bH6Th; QWDks: } goto qN7fE; qN7fE: rIuhc: goto O76hR; YlTKr: } public function admin_permission_edit() { goto bJaAG; jBSDo: $module_id = request()->post("\155\x6f\x64\x75\154\x65\x5f\x69\144", ''); goto XRUGj; p10LQ: $module_info = $this->admin_model->getSystemModuleInfo($mod_id); goto KNryS; fKeTV: $is_control_auth = request()->post("\x69\x73\x5f\143\x6f\x6e\x74\162\157\x6c\x5f\141\x75\164\x68", ''); goto F2GzP; cXkkj: $frist_list = $this->admin_model->getSystemModuleList("\160\151\x64\75\60", "\x70\x69\x64\x2c\163\157\162\x74"); goto WvKu6; X3Nl8: $pid = request()->post("\x70\x69\x64", ''); goto qV_Cu; KNryS: $this->assign("\x6d\x6f\144\x75\x6c\x65\137\x69\x6e\146\x6f", $module_info); goto VgV29; j7ibT: $info = request()->post("\x64\x65\x73\143", ''); goto u3iPJ; k9qpB: z1_xa: goto h2038; ugJYC: $is_menu = request()->post("\151\163\x5f\x6d\145\156\x75", ''); goto fKeTV; OJhwx: $mod_id = input("\x70\141\x72\141\x6d\56\155\157\144\137\x69\144"); goto p10LQ; CXxHP: $controller = request()->post("\143\157\156\164\162\x6f\x6c\154\145\x72", ''); goto MScTl; bJaAG: if (!request()->isAjax()) { goto I_EXT; } goto jBSDo; h2038: $this->assign("\x6c\151\163\x74", $list); goto OJhwx; WvKu6: $list = array(); goto jKW7W; XRUGj: $module_name = request()->post("\x6d\157\x64\165\x6c\145\137\x6e\x61\155\x65", ''); goto CXxHP; rbXNE: $logo = request()->post("\155\x6f\x64\165\x6c\145\x5f\x70\x69\x63\x74\x75\162\x65", ''); goto j7ibT; qV_Cu: $url = request()->post("\165\162\x6c", ''); goto ugJYC; GTapd: I_EXT: goto cXkkj; MScTl: $method = request()->post("\155\x65\164\150\x6f\x64", ''); goto X3Nl8; nCWmW: return $rel; goto GTapd; F2GzP: $sort = request()->post("\x73\x6f\162\164", ''); goto rbXNE; VgV29: return $this->fetch("\141\144\x6d\x69\156\57\141\x64\155\x69\156\x2d\160\x65\162\x6d\x69\x73\x73\x69\x6f\x6e\55\145\144\151\x74"); goto NChXE; jKW7W: foreach ($frist_list as $k => $v) { goto CGCB5; hsHEK: $list[$k]["\x64\141\x74\141"] = $v; goto XEBYl; XEBYl: $list[$k]["\163\x75\142\137\x6d\x65\x6e\x75"] = $submenu; goto Oq4pj; Oq4pj: NRo13: goto c6E9a; CGCB5: $submenu = $this->admin_model->getSystemModuleList("\160\x69\144\75" . $v["\x6d\x6f\144\x75\x6c\x65\x5f\x69\x64"], "\160\x69\x64\x2c\x73\157\x72\164"); goto hsHEK; c6E9a: } goto k9qpB; u3iPJ: $rel = $this->admin_model->updateSystemModule($module_id, $module_name, $controller, $method, $pid, $url, $is_menu, $sort, $logo, $info, $is_control_auth); goto nCWmW; NChXE: } public function del_admin_permission() { goto TRRPm; Oz0AT: return $retval; goto Tlfe3; cIzoB: $retval = $this->admin_model->deleteSystemModule($module_id); goto Oz0AT; TRRPm: $module_id = request()->post("\155\157\144\x75\x6c\145\137\151\x64", ''); goto cIzoB; Tlfe3: } public function edit_pwd() { goto Fjeos; gf7oB: if (!(md5($old_pwd) != $check["\160\x61\x73\x73\x77\157\x72\144"])) { goto qoa5I; } goto I5G5_; WLFK8: return $this->fetch("\x61\144\x6d\x69\x6e\x2f\x65\x64\151\164\x5f\160\167\x64"); goto aqbbf; Ml0yc: $res = db::name("\x79\x62\x73\143\x5f\142\165\163\x69\156\145\x73\163")->where("\151\x64", $this->bus_id)->update(["\160\x61\x73\163\x77\x6f\162\144" => $new_pwd]); goto Vjp9R; LLrwt: $check = db::name("\171\x62\163\143\137\142\165\x73\x69\x6e\145\163\x73")->where("\151\144", $this->bus_id)->find(); goto gf7oB; iaNW5: qoa5I: goto Ml0yc; I5G5_: return AjaxReturn(2); goto iaNW5; E9lfy: $old_pwd = input("\160\x61\162\141\x6d\56\x6f\x6c\x64\x5f\160\x77\144"); goto WEqPL; Fjeos: if (!request()->isAjax()) { goto Uq6Jw; } goto E9lfy; Vjp9R: return AjaxReturn($res); goto MyPaH; WEqPL: $new_pwd = md5(input("\160\x61\x72\x61\x6d\x2e\156\145\167\x5f\x70\x77\x64")); goto LLrwt; MyPaH: Uq6Jw: goto WLFK8; aqbbf: } }
