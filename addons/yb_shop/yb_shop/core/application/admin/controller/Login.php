<?php
 namespace app\admin\controller; use think\Controller; use think\Db; use think\Cookie; load()->model("\167\170\141\160\160"); load()->model("\x75\163\x65\162"); class Login extends Controller { public function __construct() { goto YKjSH; hYuXy: $siteroot = $_W["\163\x69\x74\x65\x72\157\x6f\x74"]; goto kRvAC; pNUqB: $GLOBALS["\x62\x61\143\x6b\x5f\x74\x79\x70\x65"] = $site_name["\142\141\143\x6b\x5f\x74\x79\x70\x65"]; goto KWasT; kRvAC: $this->assign("\163\x69\164\x65\x72\157\x6f\164", $siteroot); goto LUkaI; KWasT: $this->assign("\163\x69\164\x65\137\156\141\x6d\x65", $site_name["\x73\151\164\145\137\156\x61\155\145"]); goto hYuXy; vUJJC: global $_W; goto BngiJ; YKjSH: parent::__construct(); goto vUJJC; BngiJ: $site_name = Db::name("\x79\x62\x73\x63\137\143\x6f\160\x79\x72\151\x67\150\164")->where("\x69\x64", 1)->find(); goto pNUqB; LUkaI: } public function index() { goto spuLR; spuLR: global $_W; goto yXPMU; BOLF3: exit; goto nE6Aq; NDhJH: $list = Db::name("\x79\x62\163\x63\137\x63\x6f\x70\171\162\151\x67\x68\x74")->where("\x69\x64", 1)->find(); goto BDryh; yXPMU: if (empty($_W["\x75\x73\x65\x72"])) { goto Avdnl; } goto Ii4ED; kWtWm: $this->assign("\x73\x69\x74\145\137\162\x6f\157\164", $_W["\163\x69\x74\x65\162\x6f\157\164"]); goto CYNGS; BDryh: $this->assign("\x69\x6e\146\x6f", $list); goto kWtWm; nE6Aq: Avdnl: goto NDhJH; Ii4ED: header("\x4c\x6f\143\141\x74\x69\x6f\x6e\x3a" . url("\x61\144\155\x69\156\57\x6c\x6f\147\151\156\x2f\167\x78\x61\160\160")); goto BOLF3; CYNGS: return view(); goto sdAD9; sdAD9: } public function login() { goto ewZWB; sPk2m: qznhI: goto sv9xy; K2hiP: Hzqgk: goto g3K5Q; rDKcA: vnz5X: goto NAZNk; ASPb0: return AjaxReturnMsg(0, "\xe7\231\xbb\xe5\275\225\xe5\xa4\xb1\xe8\264\xa5\357\274\214\350\xaf\267\346\243\200\xe6\x9f\245\xe6\202\250\350\xbe\x93\xe5\205\xa5\347\232\x84\350\264\246\345\x8f\xb7\xe5\222\x8c\345\xaf\x86\xe7\240\201"); goto LLCK5; R149o: $where .= "\x20\101\116\104\x20\x75\56\140\x75\x73\x65\162\156\x61\155\x65\x60\x3d\72\x75\x73\145\x72\156\141\x6d\145"; goto tHo7Q; x5Cae: if (!($record["\163\164\141\164\x75\x73"] == USER_STATUS_CHECK || $record["\163\x74\141\x74\165\x73"] == USER_STATUS_BAN)) { goto YM9Wj; } goto JXPSW; JvILH: if (empty($member["\x75\x73\145\x72\x6e\x61\155\145"])) { goto vnz5X; } goto R149o; rZPHR: $password = user_hash($member["\160\141\x73\163\x77\x6f\x72\x64"], $record["\163\x61\154\164"]); goto IN4KN; LnMdc: isetcookie("\x5f\137\143\x6f\x64\145", ''); goto g8J7l; FsWmS: $record = pdo_fetch($sql, $params); goto HrU0Y; tHo7Q: $params["\x3a\x75\163\145\162\156\x61\x6d\145"] = $member["\x75\x73\145\162\156\x61\155\x65"]; goto rDKcA; ldufp: yf9Et: goto OCrL1; AZ69e: return AjaxReturnMsg(1, "\347\231\273\xe5\xbd\x95\xe6\x88\220\345\212\x9f"); goto V3aiA; yNHWe: global $_W; goto aEm9O; OCrL1: if (!empty($record)) { goto Ea4vB; } goto AzJ2u; AzJ2u: $failed = pdo_get("\165\x73\x65\162\163\x5f\x66\141\x69\x6c\x65\x64\137\154\x6f\147\x69\x6e", array("\x75\x73\145\x72\156\x61\155\x65" => trim($uname), "\151\160" => CLIENT_IP)); goto ILO_u; Kj0kT: PBolf: goto IR_Kq; NkKQ9: $failed = pdo_get("\165\x73\145\x72\x73\137\146\141\151\154\145\x64\137\154\157\147\x69\156", array("\165\163\145\x72\156\141\x6d\145" => trim($uname), "\x69\160" => CLIENT_IP)); goto IvS6O; h1LXB: user_update($status); goto NkKQ9; za30X: return AjaxReturnMsg(0, "\351\xaa\x8c\350\xaf\x81\xe7\xa0\x81\xe9\x94\231\350\xaf\257"); goto Kj0kT; wZZAR: $params = array(); goto JvILH; lIoWh: $where = "\40\127\x48\105\122\x45\40\x31\40"; goto wZZAR; NAZNk: $sql = "\123\x45\114\x45\x43\124\x20\165\x2e\52\x2c\x20\x70\x2e\141\166\141\x74\x61\x72\40\x46\x52\117\115\40" . tablename("\165\163\x65\162\x73") . "\x20\x41\x53\40\165\x20\114\x45\x46\124\x20\112\x4f\x49\x4e\x20" . tablename("\x75\x73\x65\162\163\137\x70\x72\157\146\x69\154\x65") . "\x20\x41\123\x20\160\40\117\116\40\x75\56\165\151\x64\40\75\40\x70\56\165\151\x64\40" . $where . "\40\114\x49\115\111\x54\40\61"; goto FsWmS; rAgr2: $status = array(); goto bG73R; rDzI4: $status["\154\141\x73\164\x69\160"] = CLIENT_IP; goto h1LXB; ewZWB: if (!(request()->isAjax() && request()->post())) { goto sXPXN; } goto yNHWe; sv9xy: $cookie = array(); goto o8qf0; IBDCG: $cookie["\150\x61\163\x68"] = md5($record["\160\x61\x73\163\x77\x6f\162\x64"] . $record["\163\x61\x6c\164"]); goto H0Yeh; g8J7l: if (!($codehash != $vcode)) { goto PBolf; } goto za30X; o8qf0: $cookie["\165\x69\x64"] = $record["\x75\151\144"]; goto OziMe; FoV19: return AjaxReturnMsg(0, "\xe8\xb4\246\345\x8f\267\346\210\x96\xe5\xaf\206\347\240\x81\xe9\224\x99\350\257\257"); goto X5gZ2; AUKEn: YM9Wj: goto FoTnv; IR_Kq: $member = ["\x75\163\x65\x72\156\x61\x6d\x65" => $uname, "\160\141\163\163\167\157\162\144" => $upass]; goto lIoWh; iwIiH: $status["\154\x61\x73\164\166\151\163\x69\x74"] = TIMESTAMP; goto rDzI4; IvS6O: pdo_delete("\x75\x73\x65\x72\x73\x5f\x66\141\x69\154\145\x64\x5f\x6c\x6f\147\x69\156", array("\151\144" => $failed["\x69\144"])); goto AZ69e; z1vWI: $upass = $data["\x70\141\163\163\167\157\x72\144"]; goto Cuf2H; H0Yeh: $session = authcode(json_encode($cookie), "\x65\x6e\143\x6f\144\145"); goto uc2gF; Utg5e: $_SESSION["\x5f\137\x63\157\x64\x65"] = ''; goto LnMdc; U617a: pdo_update("\165\163\x65\x72\x73\x5f\146\x61\x69\154\145\x64\137\154\157\147\x69\156", array("\143\x6f\165\156\x74" => $failed["\x63\157\165\x6e\x74"] + 1, "\x6c\x61\x73\x74\x75\160\144\141\x74\x65" => TIMESTAMP), array("\151\144" => $failed["\151\144"])); goto ng5FQ; Q2ZcA: $vcode = $_SESSION["\137\x5f\143\157\x64\x65"]; goto Utg5e; UnGMx: cyjuq: goto ASPb0; iAFcx: return AjaxReturnMsg(0, "\xe7\253\x99\347\x82\271\345\267\262\345\205\263\351\227\xad\357\xbc\x8c\345\205\xb3\xe9\227\255\xe5\216\237\xe5\233\xa0\72" . $_W["\163\145\x74\164\151\x6e\x67"]["\143\157\160\171\162\x69\147\x68\164"]["\x72\x65\x61\x73\157\156"]); goto sPk2m; X5gZ2: UWf8M: goto ldufp; IN4KN: if (!($password != $record["\160\141\x73\x73\167\157\162\144"])) { goto UWf8M; } goto FoV19; mploT: return AjaxReturnMsg(0, "\xe8\264\xa6\xe5\217\267\xe6\x88\x96\xe5\xaf\206\347\xa0\201\xe9\x94\231\xe8\257\xaf"); goto K2hiP; LLCK5: goto mEykp; goto WnvA0; ng5FQ: goto cyjuq; goto uKFYk; vwfOW: $codehash = md5(strtolower($code) . $_W["\x63\x6f\x6e\x66\x69\x67"]["\163\x65\164\164\x69\156\147"]["\141\x75\164\x68\x6b\x65\x79"]); goto Q2ZcA; R70dX: $_W["\151\163\146\x6f\165\x6e\x64\145\162"] = user_is_founder($record["\165\151\x64"]); goto T8cbP; uc2gF: isetcookie("\137\x5f\163\x65\x73\x73\151\x6f\x6e", $session, 7 * 86400, true); goto rAgr2; OziMe: $cookie["\x6c\141\x73\x74\166\x69\163\x69\x74"] = $record["\154\141\163\x74\x76\151\x73\151\x74"]; goto sWIkx; JXPSW: return AjaxReturnMsg(0, "\346\x82\250\xe7\x9a\x84\350\xb4\246\xe5\x8f\xb7\xe6\255\xa3\345\x9c\xa8\xe5\256\241\346\240\270\xe6\x88\226\xe6\230\257\xe5\xb7\262\347\273\217\xe8\xa2\xab\347\xb3\273\347\273\237\347\xa6\201\346\255\242\357\xbc\x8c\xe8\xaf\267\xe8\201\x94\xe7\263\xbb\xe7\275\221\347\xab\231\xe7\xae\xa1\xe7\x90\x86\xe5\x91\230\xe8\xa7\243\345\x86\263\77"); goto AUKEn; ILO_u: if (empty($failed)) { goto KauSn; } goto U617a; g3K5Q: if (empty($member["\160\x61\x73\163\x77\x6f\162\144"])) { goto yf9Et; } goto rZPHR; jdA_X: $uname = $data["\165\163\x65\x72\x6e\141\x6d\x65"]; goto z1vWI; HrU0Y: if (!empty($record)) { goto Hzqgk; } goto mploT; THOZQ: sXPXN: goto ixJ6S; FoTnv: $_W["\165\151\x64"] = $record["\x75\151\144"]; goto R70dX; T8cbP: $_W["\x75\163\x65\162"] = $record; goto y5xtl; zvc9Y: pdo_insert("\x75\163\145\162\163\x5f\146\x61\151\x6c\145\144\x5f\x6c\157\147\x69\156", array("\151\160" => CLIENT_IP, "\x75\163\x65\x72\x6e\x61\x6d\145" => trim($uname), "\x63\x6f\x75\x6e\164" => "\x31", "\154\141\163\164\x75\x70\144\x61\x74\145" => TIMESTAMP)); goto UnGMx; y5xtl: if (!(!empty($_W["\163\x69\164\145\x63\x6c\157\x73\145"]) && empty($_W["\x69\163\x66\x6f\x75\x6e\x64\x65\162"]))) { goto qznhI; } goto iAFcx; Cuf2H: $code = $data["\143\x61\x70\x74\143\x68\x61"]; goto vwfOW; sWIkx: $cookie["\154\x61\x73\164\x69\x70"] = $record["\154\x61\x73\164\x69\x70"]; goto IBDCG; uKFYk: KauSn: goto zvc9Y; V3aiA: mEykp: goto THOZQ; bG73R: $status["\x75\x69\144"] = $record["\x75\151\x64"]; goto iwIiH; WnvA0: Ea4vB: goto x5Cae; aEm9O: $data = request()->post(); goto jdA_X; ixJ6S: } public function logout() { goto SwUVf; DAjQC: isetcookie("\x5f\137\163\167\x69\164\143\x68", '', -10000); goto olK9Y; twVyE: exit; goto ZuReL; ukvVZ: header("\114\x6f\143\141\164\x69\157\x6e\x3a" . url("\x61\144\x6d\x69\x6e\x2f\x6c\157\x67\x69\156\57\x69\x6e\144\x65\170")); goto HY99q; HY99q: ag6gk: goto twVyE; rJFWu: isetcookie("\137\x5f\167\x78\x61\160\160\x76\x65\x72\163\151\x6f\156\x69\x64\x73", '', -10000); goto YH6cY; BA8V2: goto ag6gk; goto AdOmG; AdOmG: Yzblv: goto ukvVZ; X8bTQ: unset($_SESSION["\x77\145\x37\137\165\x73\x65\x72"]); goto MLLPf; TRyK8: if ($back_type == 1) { goto Yzblv; } goto v33RZ; gGf_B: Cookie::delete("\164\x6f\x70\x5f\x6d\151\x64"); goto Ca0FQ; V5Jvc: unset($_W); goto bg51y; e8Oyt: isetcookie("\x5f\x5f\163\145\163\x73\151\x6f\156", '', -10000); goto DAjQC; bg51y: unset($_SESSION["\x77\145\67\x5f\x77"]); goto X8bTQ; v33RZ: header("\114\157\143\141\164\x69\157\156\x3a" . $site_url); goto BA8V2; olK9Y: isetcookie("\137\x5f\x75\156\151\x61\143\x69\144", '', -10000); goto HUha9; MLLPf: unset($_SESSION["\167\145\67\137\x61\x63\143\x6f\165\156\x74"]); goto e8Oyt; jMfVk: $back_type = $site_name["\x62\x61\143\x6b\x5f\164\171\160\x65"]; goto TRyK8; SwUVf: global $_W; goto EOhyI; YH6cY: $site_name = Db::name("\171\142\x73\143\137\x63\157\160\x79\162\151\x67\150\164")->where("\151\144", 1)->find(); goto jMfVk; HUha9: isetcookie("\x5f\137\165\x69\x64", '', -10000); goto rJFWu; XIpm8: Cookie::delete("\164\150\x72\145\145\137\155\x69\x64"); goto V5Jvc; Ca0FQ: Cookie::delete("\x73\165\x62\x5f\155\151\x64"); goto XIpm8; EOhyI: $site_url = $_W["\x73\x69\x74\x65\162\157\x6f\x74"]; goto gGf_B; ZuReL: } public function wxapp() { goto cQtvn; Ijq_1: $table = Db::name("\165\x6e\x69\137\x61\x63\143\157\165\156\164"); goto v69Mc; fMtYM: $errs = array(); goto Izeff; H1ZLI: $arrs = array(); goto fMtYM; kdxFw: if (!($uniacid > 0)) { goto qFZYG; } goto WJNab; pgzkb: qFZYG: goto grrs2; JynBP: $where["\x61\x2e\144\145\x66\x61\x75\154\x74\137\141\143\151\x64"] = array("\156\x65\x71", "\x30"); goto JApOw; OdDvn: if (!user_is_founder($_W["\165\x69\144"]) || user_is_vice_founder()) { goto bRj3F; } goto c3r18; tMphK: $order = "\141\x2e\x72\141\x6e\x6b\x20\144\145\x73\x63\54\x61\56\x75\x6e\151\141\143\151\x64\x20\x64\145\163\x63"; goto KQdSf; grrs2: $about = empty($about) ? array("\154\157\x67\157" => '') : $about; goto zXcCD; c3r18: $where["\141\x2e\144\145\146\x61\165\x6c\164\137\141\143\x69\x64"] = array("\x6e\x65\161", "\60"); goto HPnr_; Izeff: foreach ($list as &$account) { goto liAQ7; IcntA: if (!empty($account["\166\145\162\x73\151\157\x6e\163"])) { goto jtfV5; } goto TWFND; liAQ7: $account = uni_fetch($account["\165\156\x69\141\x63\151\144"]); goto bt7cR; xqBpM: od3zp: goto Fqm31; QDWXB: gbiL2: goto x1Euc; FPj5J: goto ml3eg; goto WoNMR; snIHa: jtfV5: goto jjFjF; jjFjF: foreach ($account["\x76\145\162\163\151\x6f\156\x73"] as $version) { goto deGNe; G6uDg: JWirc: goto WKKco; HRkbQ: goto f_9Bv; goto cUaog; z56fJ: goto He3ry; goto lqxWl; U6vOO: $errs[] = $account; goto z56fJ; lqxWl: goto toa3C; goto G6uDg; z9nJ8: He3ry: goto ONPHz; cUaog: toa3C: goto z9nJ8; WKKco: $account["\143\x75\162\162\145\x6e\x74\137\166\x65\x72\163\151\157\156"] = $version; goto HRkbQ; deGNe: if (!empty($version["\143\x75\x72\162\x65\156\x74"])) { goto JWirc; } goto U6vOO; ONPHz: } goto jyH39; x1Euc: goto Je5DO; goto xqBpM; rXjoR: goto ml3eg; goto QDWXB; kgN1X: goto ml3eg; goto tWw1o; vR25x: xANQE: goto GVFTD; tsjbH: $arrs[] = $account; goto Uqqyu; akLOC: if (!(strpos($modul, "\x79\x62\x5f\x73\150\157\160") === false)) { goto gbiL2; } goto rXjoR; YCmRZ: $modul = $account["\x63\x75\162\162\145\156\164\x5f\x76\x65\162\163\151\x6f\x6e"]["\155\x6f\x64\x75\x6c\x65\163"]; goto akLOC; EX4a5: $account["\x76\145\x72\x73\x69\157\156\x73"] = Db::name("\x77\x78\141\x70\160\x5f\x76\x65\162\x73\x69\157\156\x73")->where("\x75\156\x69\x61\143\151\144", $account["\x75\x6e\x69\141\x63\151\x64"])->order("\x69\144\x20\x64\x65\163\x63")->limit(4)->field("\x69\x64\54\165\x6e\x69\141\x63\x69\144\54\166\145\x72\x73\151\157\x6e\x2c\x64\145\163\143\x72\151\160\x74\x69\157\156\x2c\155\x6f\x64\x75\154\x65\x73\54\143\x72\x65\x61\164\x65\164\x69\155\x65")->select(); goto DjxXH; DjxXH: $account["\166\145\162\x73\x69\157\156\163"][0]["\143\165\162\x72\x65\156\164"] = true; goto IcntA; TWFND: $errs[] = $account; goto FPj5J; GVFTD: $brrs[] = $account; goto PkjXb; Fqm31: goto ml3eg; goto gCQso; WoNMR: goto xANQE; goto snIHa; PkjXb: if (empty($account["\143\165\162\x72\145\156\x74\x5f\x76\145\x72\x73\151\x6f\156"]["\166\145\162\x73\x69\x6f\156"])) { goto od3zp; } goto YCmRZ; Uqqyu: ml3eg: goto myr6g; gCQso: Je5DO: goto tsjbH; bt7cR: if (!empty($account["\165\156\x69\x61\143\x69\144"])) { goto XKV2K; } goto xMe4Y; xMe4Y: $errs[] = $account; goto kgN1X; tWw1o: XKV2K: goto EX4a5; jyH39: f_9Bv: goto vR25x; myr6g: } goto Pl7sk; DnbkZ: HC94g: goto yfXRB; yfXRB: $list = $table->where($where)->order($order)->field("\x61\56\52\x2c\x62\x2e\141\143\x69\x64\x2c\x62\x2e\x68\x61\x73\x68\x2c\142\x2e\164\x79\x70\x65\x2c\142\56\145\156\x64\x74\151\155\145")->select(); goto H1ZLI; F07we: $xcx_name = $_W["\165\163\145\162\156\x61\x6d\x65"]; goto Tlm3U; WJNab: $about = Db::name("\x79\x62\163\x63\x5f\142\x75\x73\151\x6e\145\163\x73\137\x61\x62\x6f\165\164")->where("\155\143\x68\x5f\151\144", $uniacid)->find(); goto pgzkb; Pl7sk: w0J0e: goto vqFAe; OZ177: $uniacid = empty($_W["\x61\143\143\x6f\165\x6e\x74"]["\165\156\151\x61\143\x69\x64"]) ? 0 : $_W["\x61\143\x63\x6f\x75\x6e\x74"]["\165\156\x69\141\143\x69\144"]; goto kdxFw; Tlm3U: $this->assign("\170\143\x78\137\156\141\x6d\x65", $xcx_name); goto OZ177; v69Mc: $where["\x62\56\x74\x79\160\x65"] = array("\x69\x6e", array(ACCOUNT_TYPE_APP_NORMAL, ACCOUNT_TYPE_APP_AUTH)); goto Yx0TA; zXcCD: $this->assign("\x61\142\157\165\164", $about); goto Ijq_1; vqFAe: $this->assign("\154\151\x73\164", $arrs); goto ltddv; ltddv: return view(); goto dgzHn; JApOw: $where["\143\56\165\x69\x64"] = $_W["\x75\x69\144"]; goto DnbkZ; HPnr_: goto HC94g; goto yHIkO; Yx0TA: $where["\x62\x2e\151\163\x64\x65\x6c\x65\164\145\144"] = array("\156\x65\161", "\x31"); goto tMphK; cQtvn: global $_W; goto F07we; KQdSf: $table->alias("\x61")->join("\141\143\143\157\x75\x6e\164\40\142", "\141\x2e\165\156\151\141\x63\x69\x64\x20\75\x20\142\x2e\165\x6e\x69\141\143\x69\144\40\141\x6e\x64\40\141\56\144\x65\146\x61\165\154\x74\137\x61\x63\x69\144\40\x3d\40\142\56\x61\143\x69\x64", "\154\145\146\164"); goto OdDvn; ZB_1K: $table->join("\165\x6e\x69\137\141\143\x63\157\x75\x6e\x74\x5f\165\163\145\x72\x73\x20\x63", "\x61\x2e\165\156\151\141\143\x69\144\x20\x3d\40\x63\56\165\x6e\x69\x61\x63\151\144", "\x6c\x65\x66\164"); goto JynBP; yHIkO: bRj3F: goto ZB_1K; dgzHn: } }
