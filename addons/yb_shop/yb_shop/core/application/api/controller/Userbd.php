<?php
 namespace app\api\controller; require_once BASE_ROOT . "\143\157\x72\145\x2f\x61\x70\x70\154\151\143\141\x74\151\157\156\57\x61\160\x69\57\143\x6f\x6e\164\162\157\154\x6c\145\162\x2f\102\x61\x73\x65\x43\157\x6e\x74\x72\x6f\x6c\x6c\x65\x72\x2e\160\150\160"; require_once BASE_ROOT . "\143\157\x72\x65\x2f\x61\x70\160\x6c\x69\143\x61\164\x69\x6f\156\x2f\x61\160\x69\x2f\163\x65\x72\166\x69\x63\x65\x2f\125\x73\x65\x72\142\x64\123\145\x72\166\151\143\145\x2e\160\x68\x70"; use think\Request; use think\Log; use app\api\service\UserbdService; use app\api\service\AddressService; use app\api\service\GoodsService; class Userbd extends BaseController { public function OpenId() { goto V9AS5; gFgcw: $result = $this->checkParam($rule, $data); goto i0jO_; g5q67: return json_encode($rs); goto teUi0; V9AS5: $rs = array("\x63\157\x64\145" => 0, "\151\156\x66\157" => array()); goto bRA7J; A3zVA: $GLOBALS["\155\x63\x68\x5f\x69\x64"] = $mch_id; goto SXL0I; QEwly: $rule = [["\x63\157\144\x65", "\162\x65\161\x75\x69\x72\x65"], ["\x6d\x63\x68\137\x69\144", "\162\145\x71\x75\151\x72\145", "\xe4\270\x8d\345\xad\230\345\x9c\xa8\xe5\x95\x86\xe6\x88\267"]]; goto JtxmY; CwktB: return json_encode($rs); goto waQF7; U7CuD: $info = $user->checkLogin($code); goto vfu9m; vfu9m: $rs["\151\156\146\x6f"] = $info; goto CwktB; tQoJ3: $mch_id = $this->getMchId($app_id); goto QEwly; bRA7J: $code = Request::instance()->param("\x77\170\137\143\157\144\x65"); goto lmrjB; lmrjB: $app_id = Request::instance()->param("\151"); goto tQoJ3; DSocw: $rs["\x63\x6f\144\145"] = 1; goto HMDLk; i0jO_: if (empty($result)) { goto RL8eW; } goto DSocw; teUi0: RL8eW: goto A3zVA; SXL0I: $user = new UserbdService(); goto U7CuD; HMDLk: $rs["\x6d\x73\147"] = $result; goto g5q67; JtxmY: $data = ["\143\x6f\144\145" => $code, "\155\143\150\x5f\151\144" => $mch_id]; goto gFgcw; waQF7: } public function Login() { goto zf53R; Pk9Hz: $rule = [["\165\x73\145\x72\137\x68\145\141\144\x69\x6d\x67", "\162\145\x71\165\x69\x72\x65"], ["\x6e\x69\143\x6b\x5f\x6e\141\155\145", "\162\x65\161\x75\x69\162\x65"], ["\155\143\150\x5f\x69\x64", "\162\x65\x71\165\151\x72\145", "\xe4\xb8\215\xe5\xad\230\345\234\xa8\345\x95\x86\346\210\267"]]; goto kH3rY; bTld_: return json_encode($rs); goto yYGT3; E0N6G: $rs["\155\163\147"] = $result; goto bTld_; IHO3d: $rs["\x69\x6e\146\x6f"] = $info; goto SsQGK; Ay6vw: $appid = Request::instance()->param("\x77\170\137\x6f\160\145\156\x69\144"); goto zp0jt; kH3rY: $data = ["\x75\x73\x65\162\x5f\150\x65\x61\144\151\x6d\x67" => $user_headimg, "\156\x69\143\x6b\137\156\x61\155\x65" => $nick_name, "\167\x78\137\x6f\x70\145\x6e\151\144" => $appid, "\x6d\143\150\137\151\144" => $mch_id, "\162\x65\x67\137\x74\151\155\145" => time(), "\151\163\137\144\x69\163\164\162\151\x62\x75\x74\x6f\162" => 0, "\165\163\x65\x72\137\164\171\160\x65" => 2, "\x70\x69\x64" => $pid]; goto gEJCL; FJPdn: if (!empty($info)) { goto OIirP; } goto OAN68; gEJCL: $result = $this->checkParam($rule, $data); goto a1ufH; s303C: $app_id = Request::instance()->param("\151"); goto F6dcN; iKPq1: $user = new UserbdService(); goto y96N3; yYGT3: E6Bhz: goto iKPq1; y96N3: $info = $user->checkUser($appid, $pid); goto GfPZv; DrLpE: $rs["\x6d\163\x67"] = "\xe7\224\xa8\346\x88\267\346\267\273\345\x8a\xa0\xe5\xa4\xb1\xe8\xb4\245"; goto GPJjv; zp0jt: $pid = Request::instance()->param("\160\151\x64", 0); goto Pk9Hz; GfPZv: if (empty($info)) { goto b2P_5; } goto IHO3d; SsQGK: return json_encode($rs); goto bjfSx; xJ_83: $rs["\x63\157\x64\x65"] = 1; goto E0N6G; a1ufH: if (empty($result)) { goto E6Bhz; } goto xJ_83; iibb5: $user_headimg = Request::instance()->param("\165\163\x65\162\137\x68\145\141\x64\151\x6d\x67"); goto hzYhx; kUX0V: OIirP: goto XKptM; bjfSx: b2P_5: goto ekyeS; GPJjv: return json_encode($rs); goto kUX0V; OAN68: Log::write("\xe7\x94\xa8\346\210\xb7\xe6\xb7\xbb\xe5\212\240\xe5\xa4\261\350\xb4\xa5\x20\x2d\x2d" . $appid); goto iq_eP; XKptM: $rs["\x69\156\x66\x6f"] = $info; goto Fsq91; hzYhx: $nick_name = Request::instance()->param("\x6e\151\x63\153\x5f\156\x61\x6d\x65"); goto Ay6vw; zf53R: $rs = array("\x63\x6f\144\145" => 0, "\x69\x6e\146\x6f" => array()); goto s303C; iq_eP: $rs["\x63\x6f\x64\x65"] = 1; goto DrLpE; Fsq91: return json_encode($rs); goto TCyRw; ekyeS: $info = $user->addUser($data); goto FJPdn; F6dcN: $mch_id = $this->getMchId($app_id); goto iibb5; TCyRw: } public function Index() { goto hvJPx; mJ88S: $rs["\x69\156\x66\157"] = $info; goto Z0AmZ; TVqjU: if (empty($result)) { goto D853U; } goto e9Ohy; hvJPx: $rs = array("\x63\157\144\x65" => 0, "\151\156\x66\x6f" => array()); goto ZVhrU; apd3K: $mch_id = $this->getMchId($app_id); goto pW2uM; eUf6M: $info = $user->orderCount($data); goto mJ88S; IJGu1: return json_encode($rs); goto JJh_l; qRMtS: $result = $this->checkParam($rule, $data); goto TVqjU; XNPu0: $rs["\155\x73\x67"] = $result; goto IJGu1; HYg0F: $app_id = Request::instance()->param("\x69"); goto apd3K; ZVhrU: $uid = Request::instance()->param("\165\151\x64"); goto HYg0F; pW2uM: $rule = [["\x75\x69\x64", "\162\x65\161\165\151\162\x65"], ["\155\x63\150\137\x69\x64", "\x72\145\161\165\x69\162\145", "\344\270\215\xe5\xad\230\xe5\x9c\xa8\xe5\225\206\346\x88\267"]]; goto fVPrS; e9Ohy: $rs["\143\157\144\x65"] = 1; goto XNPu0; f6i1K: $user = new UserbdService(); goto eUf6M; JJh_l: D853U: goto f6i1K; Z0AmZ: return json_encode($rs); goto ijDdi; fVPrS: $data = ["\165\151\x64" => $uid, "\155\143\x68\137\151\144" => $mch_id, "\141\160\x70\x5f\151\x64" => $app_id]; goto qRMtS; ijDdi: } public function UserInfo() { goto JOI0c; UQkmE: $rs["\151\156\146\x6f"] = $info; goto MwlNI; vVo5E: $uid = Request::instance()->param("\165\x69\x64"); goto tRCqY; FjwiB: $rs["\143\x6f\x64\145"] = 1; goto WlHOt; n7m08: $rule = [["\165\151\144", "\x72\145\x71\x75\x69\x72\145"], ["\x6d\143\x68\137\x69\x64", "\x72\145\x71\165\151\x72\145", "\xe4\xb8\215\xe5\255\x98\345\x9c\xa8\xe5\x95\206\346\x88\267"]]; goto l_syB; qJqKA: $result = $this->checkParam($rule, $data); goto mFU4L; l_syB: $data = ["\165\x69\144" => $uid, "\155\x63\150\x5f\x69\144" => $mch_id]; goto qJqKA; JOI0c: $rs = array("\143\x6f\x64\145" => 0, "\151\156\x66\x6f" => array()); goto vVo5E; Ld3I6: return json_encode($rs); goto Zp4ja; Zp4ja: n1eDw: goto Mx3cc; d6H2Y: $info = $user->get_userinfo($data); goto UQkmE; WlHOt: $rs["\155\x73\x67"] = $result; goto Ld3I6; MwlNI: return json_encode($rs); goto bbYDq; g8xeE: $mch_id = $this->getMchId($app_id); goto n7m08; tRCqY: $app_id = Request::instance()->param("\151"); goto g8xeE; mFU4L: if (empty($result)) { goto n1eDw; } goto FjwiB; Mx3cc: $user = new UserbdService(); goto d6H2Y; bbYDq: } public function About() { goto It1cI; OF3Kg: $rule = [["\x6d\x63\150\137\151\x64", "\162\x65\161\x75\151\162\145", "\344\xb8\x8d\345\xad\x98\345\234\250\345\225\x86\xe6\x88\xb7"], ["\x75\x69\x64", "\x72\145\161\x75\151\x72\145"]]; goto J85ZJ; TeRzI: $app_id = Request::instance()->param("\151"); goto dZP1U; m_zUG: $result = $this->checkParam($rule, $data); goto mnstd; QfizJ: $rs["\x6d\x73\147"] = $result; goto LtbwQ; mnstd: if (empty($result)) { goto wCjOf; } goto DjTI4; DjTI4: $rs["\143\157\144\145"] = 1; goto QfizJ; xUs4N: wCjOf: goto CPRLq; J85ZJ: $data = ["\155\x63\x68\137\151\x64" => $mch_id, "\x75\151\x64" => Request::instance()->param("\165\163\145\162\x5f\151\144", 0)]; goto m_zUG; dZP1U: $mch_id = $this->getMchId($app_id); goto OF3Kg; xhqHo: $info = $index->about($data); goto NIpDu; LtbwQ: return json_encode($rs); goto xUs4N; CPRLq: $index = new UserbdService(); goto xhqHo; ig3si: return json_encode($rs); goto vLwtf; NIpDu: $rs["\151\x6e\146\x6f"] = $info; goto ig3si; It1cI: $rs = array("\143\x6f\x64\145" => 0, "\x69\156\146\157" => array()); goto TeRzI; vLwtf: } public function CreateAddress() { goto yonNj; wCezx: $rs["\x69\x6e\146\157"] = $info; goto B0kU9; xk8Yj: $info = $address->createAddress($data); goto Dtz3t; XFYZE: $rs["\x6d\163\x67"] = $result; goto RHCcX; DIEi1: return json_encode($rs); goto Wxq1C; Wxq1C: QvAsm: goto wCezx; EGBhW: Log::write("\347\224\250\346\x88\267\345\x9c\xb0\xe5\x9d\x80\346\xb7\273\xe5\212\240\xe5\244\261\xe8\264\245\40\55\x2d" . $data["\165\151\144"]); goto GhDS1; YJdSm: $rs["\155\x73\147"] = "\347\224\xa8\346\x88\267\345\234\xb0\xe5\x9d\x80\xe6\267\273\345\x8a\xa0\345\244\xb1\xe8\264\245"; goto DIEi1; B0kU9: return json_encode($rs); goto mDnD6; Uj1z6: $rs["\143\x6f\144\x65"] = 1; goto XFYZE; zc_fb: $rule = [["\x75\151\144", "\162\145\161\165\151\x72\145\174\x6e\x75\x6d\x62\x65\162"], ["\143\x6f\x6e\163\151\x67\x6e\x65\162", "\x72\145\x71\165\x69\x72\145"], ["\x70\x68\157\156\x65", "\162\x65\161\165\x69\x72\x65\174\x6e\165\155\142\x65\162\174\154\145\x6e\x67\164\x68\72\x31\61", "\xe6\211\x8b\xe6\234\xba\345\217\267\346\xa0\xbc\345\xbc\x8f\344\270\215\xe6\255\xa3\xe7\241\256"], ["\141\162\x65\141", "\x72\x65\x71\165\x69\x72\145\174\x6e\x75\x6d\x62\145\162"], ["\141\x64\x64\162\x65\163\x73", "\x72\145\161\x75\x69\x72\x65"]]; goto aXGoA; aXGoA: $result = $this->checkParam($rule, $data); goto YXZRi; zsejG: X457n: goto OFexl; RHCcX: return json_encode($rs); goto zsejG; GhDS1: $rs["\143\x6f\x64\x65"] = 1; goto YJdSm; yonNj: $rs = array("\143\x6f\144\x65" => 0, "\151\x6e\x66\x6f" => array()); goto Q0Czd; Q0Czd: $data = ["\165\x69\x64" => Request::instance()->param("\165\x69\144"), "\143\x6f\156\163\151\x67\156\x65\162" => Request::instance()->param("\x63\157\x6e\x73\x69\x67\x6e\145\162"), "\160\x68\x6f\156\x65" => Request::instance()->param("\x70\150\x6f\156\x65"), "\141\162\x65\141" => Request::instance()->param("\x61\x72\x65\x61\151\x64"), "\141\144\144\162\145\163\x73" => Request::instance()->param("\x61\x64\144\162\x65\x73\163"), "\x7a\151\x70\137\143\x6f\144\x65" => Request::instance()->param("\x7a\x69\x70\137\x63\x6f\x64\x65"), "\151\x73\x5f\x64\145\x66\141\165\x6c\164" => Request::instance()->param("\x69\163\137\x64\x65\146\141\165\x6c\x74", 0), "\143\162\145\x61\x74\145\x5f\164\x69\x6d\x65" => time()]; goto zc_fb; YXZRi: if (empty($result)) { goto X457n; } goto Uj1z6; OFexl: $address = new AddressService(); goto xk8Yj; Dtz3t: if (!empty($info)) { goto QvAsm; } goto EGBhW; mDnD6: } public function AddressList() { goto xv4TW; hG7lP: if (empty($result)) { goto vd9ik; } goto IbACd; CvtQO: vd9ik: goto S6lXi; TlYR_: $address = new AddressService(); goto TzmRN; nkmu8: return json_encode($rs); goto kDu2O; C1i3C: $rs["\155\163\147"] = $result; goto FLFd5; A_XCB: $rs["\x6d\163\x67"] = "\347\x94\xa8\346\x88\267\xe6\x97\240\345\x9c\260\xe5\235\200"; goto nkmu8; X1rYR: $result = $this->checkParam($rule, $data); goto hG7lP; Ke2Ts: return json_encode($rs); goto gaQhy; IbACd: $rs["\143\x6f\x64\145"] = 1; goto C1i3C; xv4TW: $rs = array("\x63\157\144\145" => 0, "\x69\156\x66\157" => array()); goto UU45I; kDu2O: sBwKl: goto ZR9jj; S6lXi: $page = Request::instance()->param("\160\x61\147\x65", 1); goto TlYR_; FLFd5: return json_encode($rs); goto CvtQO; UU45I: $data = ["\165\151\144" => Request::instance()->param("\165\151\144")]; goto M_CFX; JNTGV: if (!empty($info)) { goto sBwKl; } goto FjGMN; ZR9jj: $rs["\151\x6e\x66\157"] = $info; goto Ke2Ts; M_CFX: $rule = [["\x75\151\x64", "\162\x65\161\165\151\x72\x65\x7c\x6e\165\155\142\145\162"]]; goto X1rYR; TzmRN: $info = $address->addressList($data, $page); goto JNTGV; FjGMN: $rs["\x63\x6f\144\145"] = 1; goto A_XCB; gaQhy: } public function SingleAddress() { goto csRZX; hVfCm: return json_encode($rs); goto yRqjx; UaEWk: $address = new AddressService(); goto pdcK1; oK140: if (!empty($info)) { goto mNJ8r; } goto cNubN; csRZX: $rs = array("\x63\x6f\x64\145" => 0, "\151\156\146\157" => array()); goto AoJ8z; cNubN: $rs["\143\x6f\144\145"] = 1; goto G5b0H; pdcK1: $info = $address->singleAddress($data); goto oK140; e1ge3: $rule = [["\151\144", "\x72\x65\x71\x75\151\162\x65\174\x6e\165\x6d\x62\145\x72"], ["\165\151\144", "\x72\145\x71\165\151\162\x65\174\x6e\165\x6d\x62\145\x72"]]; goto HW6TF; AoJ8z: $data = ["\151\144" => Request::instance()->param("\151\x64"), "\165\151\x64" => Request::instance()->param("\165\x69\x64")]; goto e1ge3; yRqjx: Ed8AZ: goto UaEWk; KasxY: return json_encode($rs); goto dM4DB; E7IUG: $rs["\155\163\147"] = $result; goto hVfCm; Uu5s3: if (empty($result)) { goto Ed8AZ; } goto F_c81; G5b0H: $rs["\155\163\147"] = "\xe7\224\xa8\346\210\267\346\227\240\xe5\x9c\260\xe5\x9d\x80"; goto KasxY; bhQhq: return json_encode($rs); goto l9vDg; F_c81: $rs["\143\x6f\x64\145"] = 1; goto E7IUG; HW6TF: $result = $this->checkParam($rule, $data); goto Uu5s3; dM4DB: mNJ8r: goto efOi8; efOi8: $rs["\x69\156\x66\157"] = $info; goto bhQhq; l9vDg: } public function UpdateAddress() { goto hNb_z; PWMcz: $data = array_filter($data); goto D7uH_; D7uH_: $rule = [["\151\144", "\162\145\x71\165\151\x72\x65\174\x6e\x75\x6d\x62\145\162"], ["\165\x69\x64", "\162\145\161\165\151\162\x65\x7c\156\x75\x6d\142\145\x72"]]; goto QTSqS; KVRp_: $rs["\x69\156\x66\157"] = $info; goto CInAQ; boehj: $rs["\143\157\144\145"] = 1; goto TmaHm; nT0bJ: $rs["\155\x73\x67"] = $result; goto LZqgg; hNb_z: $rs = array("\x63\157\x64\145" => 0, "\151\156\146\157" => array()); goto tQ_cy; MTZAg: $rs["\x63\157\144\x65"] = 1; goto IaPzy; dBSHd: $info = $address->updateAddress($data); goto CrUdt; S3Km1: ou8bj: goto RoJ6W; rthRp: return json_encode($rs); goto YYpyA; kLKS8: return json_encode($rs); goto OJS0o; F5Z_J: Log::write("\347\x94\250\346\210\267\xe5\x9c\260\345\x9d\x80\346\267\273\xe5\212\xa0\xe5\xa4\xb1\xe8\264\245\40\55\55" . $data["\165\x69\x64"]); goto boehj; CGWja: if (!($info == "\106\101\111\114")) { goto O9Mje; } goto MTZAg; CrUdt: if (!empty($info)) { goto yzqCb; } goto F5Z_J; tQ_cy: $data = ["\x69\x64" => Request::instance()->param("\151\144"), "\x75\151\x64" => Request::instance()->param("\165\x69\144"), "\x63\x6f\156\x73\151\147\x6e\145\162" => Request::instance()->param("\x63\x6f\156\163\151\x67\x6e\x65\162"), "\160\x68\x6f\156\x65" => Request::instance()->param("\x70\150\157\x6e\145"), "\141\x72\145\x61" => Request::instance()->param("\141\x72\145\141\151\x64"), "\141\144\x64\162\145\x73\x73" => Request::instance()->param("\x61\x64\x64\x72\x65\x73\x73"), "\172\151\160\x5f\143\157\x64\x65" => Request::instance()->param("\x7a\x69\x70\137\x63\x6f\144\145"), "\x69\x73\x5f\144\145\146\141\165\154\164" => Request::instance()->param("\x69\163\137\144\145\x66\x61\x75\154\164", 0)]; goto PWMcz; QTSqS: $result = $this->checkParam($rule, $data); goto MaFe_; RoJ6W: $address = new AddressService(); goto dBSHd; CInAQ: return json_encode($rs); goto mIeV4; MaFe_: if (empty($result)) { goto ou8bj; } goto P3VJB; YYpyA: O9Mje: goto KVRp_; OJS0o: yzqCb: goto CGWja; TmaHm: $rs["\155\x73\147"] = "\347\224\250\xe6\210\xb7\345\x9c\xb0\xe5\235\x80\346\267\273\xe5\212\xa0\345\244\xb1\350\xb4\245"; goto kLKS8; P3VJB: $rs["\x63\157\x64\x65"] = 1; goto nT0bJ; LZqgg: return json_encode($rs); goto S3Km1; IaPzy: $rs["\x6d\x73\x67"] = "\xe7\224\xa8\xe6\x88\xb7\344\xb8\x8d\345\xad\x98\345\x9c\xa8\350\257\245\xe5\x9c\260\xe5\x9d\x80"; goto rthRp; mIeV4: } public function DelAddress() { goto SaNW1; TB4Ed: if (!empty($info)) { goto SDgWA; } goto F3Z1P; F3Z1P: Log::write("\347\x94\250\346\210\267\345\234\xb0\345\235\x80\xe5\x88\240\351\x99\xa4\345\244\xb1\xe8\264\xa5\40\55\55" . $data["\151\144"]); goto M0AAV; DY7dL: return json_encode($rs); goto C5IFd; V8dCn: $rule = [["\151\x64", "\162\145\161\x75\151\162\145\174\x6e\x75\x6d\x62\x65\x72"]]; goto QqdxK; hsoFy: return json_encode($rs); goto KZ8xZ; EyUMJ: $rs["\143\x6f\144\145"] = 1; goto yU_2Z; C5IFd: SDgWA: goto dK7GF; QqdxK: $result = $this->checkParam($rule, $data); goto kV323; NRoez: $rs["\x6d\163\147"] = "\347\x94\250\346\x88\xb7\xe5\x9c\xb0\345\235\200\345\x88\240\xe9\231\244\345\xa4\xb1\xe8\264\xa5"; goto DY7dL; TaJc3: $info = $address->delAddress($data); goto TB4Ed; JF1I4: return json_encode($rs); goto WQYx3; K88jh: $address = new AddressService(); goto TaJc3; Lb1Zf: $data = ["\151\x64" => Request::instance()->param("\x69\x64")]; goto V8dCn; SaNW1: $rs = array("\x63\x6f\144\x65" => 0, "\151\156\x66\x6f" => array()); goto Lb1Zf; kV323: if (empty($result)) { goto oIOg3; } goto EyUMJ; KZ8xZ: oIOg3: goto K88jh; dK7GF: $rs["\x69\156\x66\157"] = $info; goto JF1I4; M0AAV: $rs["\143\157\144\145"] = 1; goto NRoez; yU_2Z: $rs["\155\x73\147"] = $result; goto hsoFy; WQYx3: } public function GetFavorites() { goto k5zAy; ANTku: return json_encode($rs); goto ZTtfZ; XLqwC: $data = ["\165\151\x64" => Request::instance()->param("\x75\x69\x64")]; goto Y1k9T; Y1k9T: $rule = [["\165\x69\x64", "\162\145\161\165\151\x72\x65\x7c\x6e\x75\x6d\142\x65\162"]]; goto gqBC0; ZTtfZ: eykpx: goto BbiJi; k5zAy: $rs = array("\143\157\x64\x65" => 0, "\x69\156\x66\x6f" => array()); goto XLqwC; E0Y10: if (empty($result)) { goto af8EU; } goto eLoid; d4BAQ: $result = $this->checkParam($rule, $data); goto E0Y10; gqBC0: $page = Request::instance()->param("\x70\141\147\145", 1); goto d4BAQ; jsRRh: return json_encode($rs); goto Knj2F; BbiJi: $rs["\151\x6e\x66\157"] = $info; goto q_jLb; vC5Y7: $info = $goods->getFavorites($data, $page); goto GsNcy; o6l3y: $rs["\x6d\x73\147"] = "\346\227\xa0\xe6\224\xb6\xe8\x97\217\xe5\225\206\xe5\x93\201"; goto ANTku; Knj2F: af8EU: goto BIYzF; y8eCf: $rs["\143\157\144\145"] = 1; goto o6l3y; BIYzF: $goods = new GoodsService(); goto vC5Y7; q_jLb: return json_encode($rs); goto MGkQk; eLoid: $rs["\x63\157\144\x65"] = 1; goto fUzk7; fUzk7: $rs["\155\x73\x67"] = $result; goto jsRRh; GsNcy: if (!empty($info)) { goto eykpx; } goto y8eCf; MGkQk: } }
