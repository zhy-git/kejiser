<?php
 namespace app\api\controller; use think\Request; use think\Db; use think\Session; use app\api\service\DistribeService; require_once BASE_ROOT . "\143\x6f\162\x65\57\x61\160\160\154\151\x63\141\x74\x69\x6f\x6e\57\141\x70\151\x2f\143\157\156\x74\162\157\x6c\x6c\x65\162\57\102\x61\x73\x65\x43\157\156\164\x72\x6f\154\x6c\145\162\56\x70\x68\160"; class Distribe extends BaseController { public function userinfo() { goto quyOM; B1aWL: $rs["\151\x6e\x66\157"] = $info; goto qB9PI; EUyWm: $info = $user->user_info($data); goto CK2sv; CK2sv: if (!empty($info)) { goto yIggH; } goto zr28R; CavJA: yIggH: goto B1aWL; fmJM8: tOl4Z: goto GzgBR; Dq2oy: $rs["\x6d\163\x67"] = $result; goto ZWTJU; bI84S: $rule = [["\x75\151\x64", "\x72\x65\161\x75\151\162\145"], ["\x6d\143\150\137\151\x64", "\162\145\x71\165\151\162\145", "\344\xb8\215\345\255\230\xe5\234\250\345\225\206\xe6\210\xb7"]]; goto DSId2; GzgBR: $user = new DistribeService(); goto EUyWm; KWiYq: $uid = Request::instance()->param("\x75\151\144"); goto iHdEd; qB9PI: return json_encode($rs); goto H2XZt; eN8Fo: $result = $this->checkParam($rule, $data); goto af724; oUFvE: $rs["\x6d\x73\147"] = "\xe8\257\xa5\347\x94\xa8\xe6\x88\xb7\xe4\270\215\345\xad\230\345\x9c\xa8"; goto H_XYj; af724: if (empty($result)) { goto tOl4Z; } goto WOMq3; DSId2: $data = ["\165\x69\144" => $uid, "\x6d\143\x68\x5f\x69\144" => $mch_id]; goto eN8Fo; WOMq3: $rs["\x63\157\x64\145"] = 1; goto Dq2oy; zr28R: $rs["\x63\x6f\x64\x65"] = 1; goto oUFvE; yAf2n: $mch_id = $this->getMchId($app_id); goto bI84S; ZWTJU: return json_encode($rs); goto fmJM8; H_XYj: return json_encode($rs); goto CavJA; iHdEd: $app_id = Request::instance()->param("\x69"); goto yAf2n; quyOM: $rs = array("\x63\x6f\144\145" => 0, "\151\156\x66\157" => array()); goto KWiYq; H2XZt: } public function join() { goto jPXQJ; hzblr: $rule = [["\165\x73\x65\162\137\151\144", "\x72\x65\x71\165\x69\x72\x65"], ["\x6d\143\150\x5f\x69\x64", "\x72\x65\x71\x75\151\x72\145", "\344\270\215\xe5\255\x98\xe5\x9c\250\xe5\x95\x86\346\210\267"], ["\155\x6f\142\x69\154\x65", "\162\145\161\165\x69\x72\x65"], ["\x6e\141\155\x65", "\162\145\161\165\151\x72\145"]]; goto V_0Nu; Ew37M: $app_id = Request::instance()->param("\151"); goto zrQfe; cKub6: $result = $this->checkParam($rule, $data); goto M65U1; HEj1q: WxxBn: goto KbdBF; KbdBF: $user = new DistribeService(); goto ljEdb; NZ1Xn: $rs["\155\163\x67"] = $result; goto KU8Hf; KS2Nd: return $info; goto fKI8y; V_0Nu: $data = ["\165\163\145\162\137\x69\144" => $uid, "\x6d\x63\x68\137\151\x64" => $mch_id, "\x6d\x6f\x62\x69\154\x65" => Request::instance()->param("\x6d\x6f\142\x69\154\145"), "\156\141\x6d\x65" => Request::instance()->param("\x6e\141\x6d\145")]; goto cKub6; ljEdb: $info = $user->get_join($data); goto KS2Nd; zrQfe: $mch_id = $this->getMchId($app_id); goto hzblr; NjUWN: $rs["\x63\157\x64\145"] = 1; goto NZ1Xn; KU8Hf: return json_encode($rs); goto HEj1q; M65U1: if (empty($result)) { goto WxxBn; } goto NjUWN; jPXQJ: $uid = Request::instance()->param("\x75\x73\145\162\137\x69\144"); goto Ew37M; fKI8y: } public function addman() { goto He_o2; QnETx: $pid = Request::instance()->param("\x70\x69\x64"); goto V4gfe; T9vie: return json_encode($rs); goto XjC_i; VcgUW: cdVj1: goto Wy1dV; IuVvL: return json_encode($rs); goto VcgUW; XjC_i: Wm5ol: goto OOg1p; i_rfd: $rs["\143\x6f\144\x65"] = 1; goto kwHTF; Wy1dV: $rs["\x69\x6e\146\157"] = $info; goto Gztdo; vDALo: $mch_id = $this->getMchId($app_id); goto lJE8M; Z19Xu: $rs["\x63\157\144\x65"] = 1; goto iNAAS; jAgxh: $result = $this->checkParam($rule, $data); goto Bgg_W; Bgg_W: if (empty($result)) { goto Wm5ol; } goto Z19Xu; iNAAS: $rs["\155\163\x67"] = $result; goto T9vie; OOg1p: $user = new DistribeService(); goto i95dh; kwHTF: $rs["\x6d\x73\x67"] = "\350\257\245\xe7\x94\250\346\210\xb7\344\xb8\215\xe5\xad\230\345\x9c\xa8"; goto IuVvL; V4gfe: $rule = [["\165\151\x64", "\x72\x65\161\x75\151\162\145"], ["\x70\151\144", "\x72\x65\161\x75\151\x72\x65"], ["\x6d\x63\x68\x5f\x69\144", "\162\145\x71\165\151\162\145", "\344\270\215\345\xad\x98\xe5\234\xa8\xe5\x95\206\346\x88\267"]]; goto Tj0fu; Tj0fu: $data = ["\165\151\x64" => $uid, "\155\143\150\x5f\151\x64" => $mch_id, "\x70\x69\x64" => $pid]; goto jAgxh; aZnEN: $app_id = Request::instance()->param("\x69"); goto vDALo; lJE8M: $uid = Request::instance()->param("\x75\151\144"); goto QnETx; Gztdo: return json_encode($rs); goto V67bQ; eRIFl: if (!empty($info)) { goto cdVj1; } goto i_rfd; i95dh: $info = $user->addman($data); goto eRIFl; He_o2: $rs = array("\143\x6f\144\145" => 0, "\x69\156\146\157" => array()); goto aZnEN; V67bQ: } public function myteam() { goto hSba9; RYhEd: return json_encode($rs); goto uupBG; Jj_0D: $info = $user->get_myteam($data, $page); goto K0UxG; zau06: $rule = [["\165\x69\x64", "\162\145\161\x75\x69\x72\x65"], ["\x6d\143\150\137\151\x64", "\162\x65\161\165\151\x72\x65", "\344\270\215\345\xad\230\xe5\x9c\xa8\xe5\x95\206\xe6\x88\xb7"], ["\163\x74\141\164\x75\x73", "\162\145\161\x75\151\162\x65"]]; goto zk7L3; tuZQ4: $page = Request::instance()->param("\160\141\147\145", 1); goto zau06; S_bgI: return json_encode($rs); goto u3tj4; K0UxG: $rs["\x69\156\x66\157"] = $info; goto RYhEd; hSba9: $rs = array("\x63\157\144\145" => 0, "\x69\156\x66\x6f" => array()); goto Z_4qj; zk7L3: $data = ["\163\164\141\x74\165\x73" => Request::instance()->param("\163\x74\141\164\165\163", 1), "\165\x69\x64" => $uid, "\x6d\143\x68\137\151\x64" => $mch_id]; goto kzgiW; NjyB7: $rs["\x63\x6f\144\145"] = 1; goto LOCPw; SouXl: $app_id = Request::instance()->param("\151"); goto YsaJp; u3tj4: ed6nF: goto x7NcV; uXCIX: if (empty($result)) { goto ed6nF; } goto NjyB7; kzgiW: $result = $this->checkParam($rule, $data); goto uXCIX; Z_4qj: $uid = Request::instance()->param("\x75\151\x64"); goto SouXl; LOCPw: $rs["\155\x73\x67"] = $result; goto S_bgI; YsaJp: $mch_id = $this->getMchId($app_id); goto tuZQ4; x7NcV: $user = new DistribeService(); goto Jj_0D; uupBG: } public function shareOrder() { goto lOz55; z1ptf: $rs["\151\156\146\157"] = $info; goto tYtdo; ukAYL: $info = $user->get_shareOrder($data, $page); goto z1ptf; NbRwU: return json_encode($rs); goto KTVLu; F9Opx: $page = Request::instance()->param("\160\141\147\x65", 1); goto mcSzr; tYtdo: return json_encode($rs); goto l_h6S; mcSzr: $rule = [["\165\x73\145\162\137\x69\x64", "\x72\145\x71\x75\151\x72\145"], ["\155\143\x68\x5f\x69\144", "\x72\145\161\x75\x69\x72\145", "\xe4\xb8\x8d\xe5\255\x98\345\234\xa8\xe5\225\206\346\x88\xb7"], ["\x73\x74\141\164\x75\163", "\162\145\161\x75\151\162\145"]]; goto yY5cR; yY5cR: $data = ["\163\164\x61\164\x75\163" => Request::instance()->param("\163\x74\141\x74\x75\163", -1), "\165\163\x65\x72\x5f\x69\x64" => $uid, "\155\143\x68\x5f\x69\x64" => $mch_id]; goto c8i3X; lOz55: $rs = array("\x63\x6f\144\x65" => 0, "\151\156\x66\x6f" => array()); goto orukS; RbhQl: $rs["\x63\x6f\x64\145"] = 1; goto WpKzh; c8i3X: $result = $this->checkParam($rule, $data); goto PNYLp; GKJqS: $user = new DistribeService(); goto ukAYL; KTVLu: KKO5_: goto GKJqS; WpKzh: $rs["\x6d\x73\x67"] = $result; goto NbRwU; orukS: $uid = Request::instance()->param("\165\151\x64"); goto THSI2; THSI2: $app_id = Request::instance()->param("\151"); goto YAEt5; YAEt5: $mch_id = $this->getMchId($app_id); goto F9Opx; PNYLp: if (empty($result)) { goto KKO5_; } goto RbhQl; l_h6S: } public function shareSetting() { goto toEpL; toEpL: $rs = array("\143\x6f\144\x65" => 0, "\x69\x6e\146\157" => array()); goto vXrfJ; YOiZg: $rs["\143\157\144\145"] = 1; goto lySV8; VEq_v: $mch_id = $this->getMchId($app_id); goto jAf2I; jAf2I: if (!empty($mch_id)) { goto y3k6T; } goto YOiZg; lySV8: $rs["\155\163\x67"] = "\xe6\x9c\252\350\x8e\267\345\x8f\226\345\x88\260\xe5\x95\x86\345\256\266\344\277\241\346\201\xaf"; goto DLtBu; Kf3C4: return json_encode($rs); goto sJG6_; vXrfJ: $app_id = Request::instance()->param("\x69"); goto VEq_v; kpy0Y: $info = $user->get_shareSetting($mch_id); goto gbs15; FgPxL: $user = new DistribeService(); goto kpy0Y; DLtBu: return json_encode($rs); goto vrNOp; vrNOp: y3k6T: goto FgPxL; gbs15: $rs["\151\x6e\x66\157"] = $info; goto Kf3C4; sJG6_: } public function addCash() { goto UdrrE; riNsl: $data = ["\x75\x73\145\162\x5f\x69\144" => Request::instance()->param("\165\163\x65\x72\x5f\x69\144"), "\x6d\x63\150\x5f\151\x64" => $mch_id, "\x6d\x6f\x62\151\x6c\145" => Request::instance()->param("\155\x6f\142\151\x6c\x65"), "\156\141\x6d\145" => Request::instance()->param("\x6e\x61\155\x65"), "\142\141\156\153\x5f\156\x61\x6d\145" => Request::instance()->param("\x62\x61\156\153\x5f\156\141\155\145"), "\160\162\x69\143\145" => Request::instance()->param("\x70\162\x69\143\x65"), "\x73\x74\141\164\165\163" => 0, "\151\x73\137\x64\145\x6c" => 1, "\143\x72\x65\141\164\x65\137\164\x69\155\145" => time(), "\164\x79\160\x65" => Request::instance()->param("\160\141\171\x5f\164\x79\160\145")]; goto CUhQU; naL9p: $rs["\x63\x6f\144\145"] = 1; goto dgkMu; tjJxB: TKcP8: goto KtRP2; bfcVK: return $info; goto YmrW2; boL8m: return json_encode($rs); goto tjJxB; dc2GT: $info = $user->get_addCash($data); goto bfcVK; wmZA8: $mch_id = $this->getMchId($app_id); goto q7aQP; UdrrE: $app_id = Request::instance()->param("\x69"); goto wmZA8; CUhQU: $result = $this->checkParam($rule, $data); goto XIfd8; dgkMu: $rs["\x6d\x73\x67"] = $result; goto boL8m; XIfd8: if (empty($result)) { goto TKcP8; } goto naL9p; KtRP2: $user = new DistribeService(); goto dc2GT; q7aQP: $rule = [["\165\163\145\162\x5f\151\144", "\162\145\161\x75\x69\x72\x65"], ["\155\x63\x68\137\151\x64", "\x72\145\x71\165\151\x72\145", "\344\270\x8d\345\xad\x98\345\234\250\345\x95\206\346\x88\xb7"], ["\155\x6f\142\x69\154\145", "\162\x65\x71\x75\x69\x72\x65"], ["\156\x61\x6d\145", "\162\145\161\165\151\162\x65"], ["\x70\x72\151\x63\145", "\162\x65\x71\165\x69\162\x65"], ["\x74\171\x70\x65", "\x72\x65\161\165\151\162\x65"]]; goto riNsl; YmrW2: } public function CashList() { goto ST8RU; gir9S: $rs["\155\x73\147"] = $result; goto zOBrx; gSUDF: $info = $user->get_CashList($data, $page); goto QdpmE; QdpmE: $rs["\151\x6e\146\x6f"] = $info; goto h4kDc; vjLPB: if (empty($result)) { goto rGllB; } goto qlwk1; oMe_M: $user = new DistribeService(); goto gSUDF; KpFBX: $rule = [["\165\x73\x65\x72\x5f\x69\x64", "\162\x65\x71\x75\151\x72\145"], ["\155\143\150\137\151\144", "\162\145\161\165\x69\162\145", "\xe4\270\215\345\255\x98\xe5\x9c\250\345\225\x86\346\210\267"], ["\163\164\141\x74\x75\163", "\x72\145\x71\x75\x69\162\145"]]; goto gWy89; ACllu: rGllB: goto oMe_M; DCzMV: $uid = Request::instance()->param("\x75\x69\x64"); goto Ydb1B; WZoJG: $result = $this->checkParam($rule, $data); goto vjLPB; h4kDc: return json_encode($rs); goto IXdm8; IiWMx: $page = Request::instance()->param("\160\141\x67\145", 1); goto KpFBX; xcQ6T: $mch_id = $this->getMchId($app_id); goto IiWMx; ST8RU: $rs = array("\143\157\144\x65" => 0, "\151\x6e\146\x6f" => array()); goto DCzMV; gWy89: $data = ["\163\164\x61\x74\x75\163" => Request::instance()->param("\163\164\141\x74\x75\x73", -1), "\x75\x73\x65\x72\x5f\151\144" => $uid, "\155\143\150\137\151\x64" => $mch_id]; goto WZoJG; qlwk1: $rs["\x63\157\x64\145"] = 1; goto gir9S; zOBrx: return json_encode($rs); goto ACllu; Ydb1B: $app_id = Request::instance()->param("\x69"); goto xcQ6T; IXdm8: } public function getShareCode() { goto LUhy4; B4fHN: $rs["\143\x6f\144\145"] = 1; goto yOqyl; Rxpg5: $param = Db::name("\171\142\163\143\137\x63\x6f\x6e\146\151\147")->where("\153\x65\171", "\x57\x58\x50\101\x59")->where("\155\x63\150\137\151\144", $mch_id)->value("\166\x61\154\165\x65"); goto jbdXm; WCuX6: if (empty($result)) { goto KV90E; } goto r9oAs; IXif_: $APPSECRET = $param["\101\x50\x50\x5f\x53\105\103\122\105\x54"]; goto Wti_I; ZxOTI: $app_id = Request::instance()->param("\151"); goto PSnTZ; ckA0O: $post_data = array("\160\141\x74\150" => "\171\x62\137\x73\150\x6f\x70\x2f\x70\141\147\145\163\x2f\x69\156\144\145\170\x2f\x69\x6e\x64\x65\x78\77\x70\x69\x64\x3d" . $uid); goto IiHJp; JPPWs: $ACCESS_TOKEN = $this->getWxAccessToken($APP_ID, $APPSECRET); goto SjUKt; ovtEe: $result = $this->checkParam($rule, $data); goto WCuX6; W4HXi: $data = $this->send_post($url, $post_data); goto mrnGs; Q998r: KV90E: goto Rxpg5; wP8Ub: $rs["\x69\x6e\x66\x6f"] = $result; goto K3WpP; mrnGs: $result = $this->data_uri($data, "\x69\x6d\x61\x67\x65\x2f\160\156\147"); goto wP8Ub; ADdpl: $APP_ID = $param["\x41\120\120\x5f\111\x44"]; goto IXif_; COUxv: $data = ["\165\x69\x64" => $uid, "\155\x63\x68\137\x69\x64" => $mch_id]; goto ovtEe; K3WpP: return json_encode($rs); goto r2ZtK; no8Z7: LCWb6: goto JPPWs; jbdXm: $param = json_decode($param, true); goto ADdpl; SLArY: return json_encode($rs); goto no8Z7; IiHJp: $post_data = json_encode($post_data); goto W4HXi; ekjb3: $uid = Request::instance()->param("\165\151\144"); goto ZxOTI; SjUKt: $url = "\x68\164\164\160\163\x3a\57\x2f\x61\x70\151\x2e\167\x65\x69\170\151\x6e\x2e\161\161\56\x63\x6f\155\57\x63\x67\x69\x2d\x62\151\156\57\167\x78\141\x61\160\x70\x2f\x63\162\x65\x61\x74\145\x77\170\x61\161\162\143\x6f\x64\x65\77\x61\x63\x63\145\x73\163\137\164\157\153\x65\x6e\x3d" . $ACCESS_TOKEN["\141\x63\x63\x65\x73\x73\137\x74\157\153\145\x6e"]; goto ckA0O; yOqyl: $rs["\x6d\163\x67"] = "\xe6\x9c\xaa\351\205\215\347\xbd\xae\345\225\x86\xe6\210\267\344\xbf\241\xe6\x81\257"; goto SLArY; LUhy4: $rs = array("\x63\x6f\x64\x65" => 0, "\x69\x6e\146\x6f" => array()); goto ekjb3; r9oAs: $rs["\143\157\x64\x65"] = 1; goto EFwr_; EFwr_: $rs["\x6d\x73\147"] = $result; goto YMBqy; YMBqy: return json_encode($rs); goto Q998r; PSnTZ: $mch_id = $this->getMchId($app_id); goto WtbhQ; WtbhQ: $rule = [["\x75\x69\144", "\162\145\161\165\x69\x72\x65"], ["\x6d\143\x68\x5f\151\x64", "\162\x65\x71\165\x69\x72\x65", "\344\270\x8d\345\255\x98\345\x9c\xa8\xe5\225\206\xe6\x88\267"]]; goto COUxv; Wti_I: if (!(empty($APP_ID) || empty($APPSECRET))) { goto LCWb6; } goto B4fHN; r2ZtK: } }