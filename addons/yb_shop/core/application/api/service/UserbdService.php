<?php
 namespace app\api\service; use think\Db; require_once BASE_ROOT . "\143\157\162\145\57\141\x70\160\x6c\151\x63\x61\164\151\157\x6e\x2f\x63\x6f\x6d\155\157\x6e\x2e\160\150\x70"; class UserbdService { protected $config = array("\165\x72\x6c" => "\150\164\164\x70\163\72\57\x2f\157\x70\x65\x6e\141\160\151\x2e\142\x61\x69\144\165\x2e\143\157\155\x2f\x6e\x61\x6c\157\x67\151\x6e\x2f\147\x65\164\x53\145\163\163\x69\157\156\113\x65\171\x42\x79\103\157\144\x65", "\141\160\160\151\144" => "\x79\157\165\x72\40\x61\160\x70\x49\x64", "\163\145\x63\162\x65\164" => "\x79\157\165\x72\x20\x73\145\143\162\145\164"); public function __construct() { goto YTFr8; FmRzj: $param = json_decode($param, true); goto sWi_j; LBvVF: $this->config["\141\160\x70\151\x64"] = $key; goto m4dcQ; sWi_j: $key = $param["\101\120\120\x5f\x4b\145\x79"]; goto OOfcZ; m4dcQ: $this->config["\163\145\x63\162\x65\164"] = $secret; goto yyTnz; OOfcZ: $secret = $param["\101\x50\120\x5f\x53\105\103\x52\105\124"]; goto LBvVF; YTFr8: $param = Db::name("\171\x62\163\143\x5f\x63\157\156\x66\151\x67")->where("\153\x65\x79", "\102\104\101\120\x50")->where("\155\143\x68\x5f\x69\144", $GLOBALS["\155\143\x68\137\x69\144"])->value("\x76\141\x6c\165\x65"); goto FmRzj; yyTnz: } public function checkUser($appId, $pid) { goto ipP31; Xqadl: if (!empty($rs) && $rs["\165\151\x64"]) { goto H9KUT; } goto NSGN5; g3baR: H9KUT: goto Qw7Ct; R3ix7: goto dE8U8; goto g3baR; WVNZQ: CVDq3: goto Xqadl; Qw7Ct: return $rs["\x75\x69\144"]; goto ejpGD; IiIF3: if (!(!empty($rs) && $pid != 0 && $rs["\x70\x69\144"] == 0)) { goto CVDq3; } goto Fd30b; Fd30b: Db::name("\171\142\x73\x63\x5f\x75\163\145\162")->where("\167\x78\137\x6f\160\145\x6e\x69\144", $appId)->update(["\x70\x69\144" => $pid]); goto WVNZQ; ejpGD: dE8U8: goto Kn8AM; ipP31: $rs = Db::name("\x79\x62\163\143\x5f\165\x73\x65\162")->where("\x77\x78\137\x6f\x70\145\x6e\x69\x64", $appId)->find(); goto IiIF3; NSGN5: return null; goto R3ix7; Kn8AM: } public function addUser($data) { goto fXJ01; ow072: ID90T: goto xBvsK; fr1C9: return $rs; goto hYf1S; yGOgG: $data["\x70\x69\x64"] = 0; goto ow072; fXJ01: $info = Db::name("\x79\x62\163\x63\137\x75\163\145\x72\137\163\150\x61\162\x65\137\x73\x65\x74\x74\x69\156\x67")->where("\x6d\143\150\137\x69\144", $data["\155\143\x68\137\151\x64"])->find(); goto w0pYk; w0pYk: if (!(empty($info) || $info["\x6c\145\166\x65\x6c"] == 0)) { goto ID90T; } goto yGOgG; xBvsK: $rs = Db::name("\171\142\163\x63\137\x75\163\145\162")->insertGetId($data); goto fr1C9; hYf1S: } public function getUser($uid) { $result = Db::name("\x79\x62\163\x63\137\165\163\x65\x72")->where("\x75\151\144", $uid)->find(); return $result; } public function checkLogin($code) { goto rGKjo; TWLQD: $res = $this->makeRequest($this->config["\x75\162\x6c"], $params); goto CpxIo; YHSxa: return $a; goto AXlQb; CpxIo: $a = json_decode($res["\x72\x65\x73\x75\154\164"], true); goto YHSxa; rGKjo: $params = array("\143\154\x69\145\x6e\x74\137\x69\144" => $this->config["\141\160\x70\x69\x64"], "\163\x6b" => $this->config["\163\x65\x63\x72\x65\164"], "\x63\157\x64\145" => $code); goto TWLQD; AXlQb: } protected function makeRequest($url, $params = array(), $expire = 0, $extend = array(), $hostIp = '') { goto KXhco; ab8qN: curl_setopt_array($_curl, $extend); goto hDJCr; dhnbF: $result["\x69\156\146\157"] = curl_getinfo($_curl); goto utIAE; NTGhf: if (!($expire > 0)) { goto nbvLR; } goto sWRBw; yGwOJ: curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true); goto fkJ0o; Kqy0X: PdLLh: goto HsmKa; MsvIn: if (!(substr($url, 0, 8) == "\150\164\x74\x70\x73\72\x2f\x2f")) { goto DyYTi; } goto wFBvH; CIrhU: $_curl = curl_init(); goto aRmzD; CFMAs: $url = "\150\x74\164\x70\x3a\x2f\57{$hostIp}{$url}"; goto FgeWX; U29uX: curl_setopt($_curl, CURLOPT_POSTFIELDS, http_build_query($params)); goto Z38Lr; aRmzD: $_header = array("\101\x63\x63\x65\x70\164\x2d\x4c\x61\x6e\147\165\x61\147\145\x3a\x20\172\150\55\103\116", "\x43\x6f\x6e\x6e\145\x63\164\x69\157\x6e\x3a\x20\113\x65\x65\x70\x2d\101\x6c\151\166\145", "\x43\141\x63\x68\x65\55\x43\x6f\156\164\x72\157\x6c\72\40\156\157\55\143\141\143\x68\x65"); goto J33JB; I2UCq: curl_setopt($_curl, CURLOPT_HTTPHEADER, $_header); goto NTGhf; yui7x: $urlInfo = parse_url($url); goto zTfOu; Z38Lr: curl_setopt($_curl, CURLOPT_POST, true); goto rmLVJ; vxI_0: curl_setopt($_curl, CURLOPT_URL, $url); goto yGwOJ; HsmKa: $urlInfo["\150\x6f\x73\164"] = substr(DOMAIN, 7, -1); goto CFMAs; TMFCk: $result["\x63\x6f\144\145"] = curl_getinfo($_curl, CURLINFO_HTTP_CODE); goto dhnbF; Q2Qit: nbvLR: goto qQbzb; zTfOu: if (empty($urlInfo["\150\x6f\163\164"])) { goto PdLLh; } goto Jsyyt; d7t1K: curl_close($_curl); goto i3pP8; mBZcK: $result["\162\x65\x73\x75\x6c\x74"] = curl_error($_curl); goto j6LWT; sTNsA: goto uHoX9; goto Kqy0X; qQbzb: if (empty($extend)) { goto wNQxm; } goto ab8qN; MvVRx: RvHVV: goto CIrhU; j6LWT: $result["\143\x6f\x64\x65"] = -curl_errno($_curl); goto RJBPs; wFBvH: curl_setopt($_curl, CURLOPT_SSL_VERIFYPEER, FALSE); goto iqRqJ; i3pP8: return $result; goto nyvKp; Jsyyt: $url = str_replace($urlInfo["\150\157\163\164"], $hostIp, $url); goto sTNsA; iKASv: if (empty($params)) { goto fae6g; } goto U29uX; fkJ0o: curl_setopt($_curl, CURLOPT_USERAGENT, "\101\x50\111\40\x50\x48\120\x20\103\x55\x52\114"); goto I2UCq; NIEcP: $result["\162\145\163\165\x6c\164"] = curl_exec($_curl); goto TMFCk; FgeWX: uHoX9: goto m4bDo; YPHLo: Kk8TA: goto iKASv; sWRBw: curl_setopt($_curl, CURLOPT_TIMEOUT, $expire); goto AawJT; KXhco: if (!empty($url)) { goto RvHVV; } goto K_RPs; hDJCr: wNQxm: goto NIEcP; utIAE: if (!($result["\162\145\163\x75\x6c\164"] === false)) { goto C8gTY; } goto mBZcK; iqRqJ: curl_setopt($_curl, CURLOPT_SSL_VERIFYHOST, FALSE); goto yHav0; RJBPs: C8gTY: goto d7t1K; yHav0: DyYTi: goto vxI_0; rmLVJ: fae6g: goto MsvIn; AawJT: curl_setopt($_curl, CURLOPT_CONNECTTIMEOUT, $expire); goto Q2Qit; J33JB: if (empty($hostIp)) { goto Kk8TA; } goto yui7x; m4bDo: $_header[] = "\110\x6f\163\x74\x3a\x20{$urlInfo["\x68\157\163\164"]}"; goto YPHLo; K_RPs: return array("\x63\157\144\145" => "\61\x30\x30"); goto MvVRx; nyvKp: } public function get_userinfo($data) { $u = Db::name("\171\x62\x73\143\137\165\x73\145\x72")->where("\165\151\144", $data["\165\x69\x64"])->find(); return $u; } public function orderCount($data) { goto gT_Fl; I31g5: goto aXaHv; goto nphNj; AU55s: b78h3: goto Dpb3k; f_uRH: $cop = Db::name("\x79\142\163\143\x5f\x75\x73\x65\x72\x5f\x70\x65\x72\155\x69\x73\x73\x69\157\156")->where("\165\x73\x65\162\x5f\x69\144", $data["\x6d\143\x68\137\x69\x64"])->value("\151\x73\137\163\150\x6f\167\x5f\x63\157\160\171\x72\151\147\x68\x74"); goto nC7DY; PZTbb: CYXk6: goto ZjH7r; V4t9Y: $rs["\143\x6f\x70\171\162\151\147\x68\164"] = ''; goto yeIds; kRDQg: $rs["\x66\141\166\x6f\162\151\164\x65\x73"] = Db::name("\171\142\163\x63\137\x75\x73\x65\162\x5f\146\x61\166\x6f\162\151\164\x65\163")->where("\x75\151\x64", $data["\x75\x69\x64"])->count(); goto f_uRH; FAr22: $rs["\165\x73\145\162\x5f\154\145\166\x65\154"] = $u["\154\x65\166\x65\154\x5f\151\144"]; goto nIWid; Q7kfk: goto J5Ztk; goto PZTbb; yeIds: goto gL3gk; goto XXQAa; Dpb3k: J5Ztk: goto X6Ix9; n8lO6: $u = Db::name("\171\x62\x73\x63\x5f\165\163\145\162")->where("\165\151\x64", $data["\165\x69\144"])->find(); goto FAr22; ZjH7r: $copyright = Db::name("\x79\142\163\x63\x5f\x63\x6f\x70\x79\162\x69\x67\150\164")->where("\151\x64", 1)->find(); goto rkG2b; rAD6q: $rs["\x63\157\x70\171\162\151\147\x68\164"] = "\346\x8a\200\346\x9c\xaf\346\224\257\xe6\x8c\x81"; goto Q7kfk; nC7DY: if (!empty($cop) && $cop == 1) { goto LjkZ5; } goto bpX80; nphNj: LjkZ5: goto aFSMS; XXQAa: CMl4W: goto omObB; Nw5nu: $rs["\x6c\x65\x76\145\x6c\137\x6e\141\x6d\x65"] = $a["\x6c\145\x76\x65\154\137\x6e\141\155\x65"]; goto UXVam; wP2E6: $a = Db::name("\x79\x62\x73\x63\x5f\165\x73\x65\162\x5f\154\145\x76\x65\x6c")->where(["\151\144" => $u["\154\145\166\x65\x6c\x5f\x69\144"], "\x6d\143\x68\137\151\144" => $data["\155\x63\150\x5f\x69\x64"]])->find(); goto Nw5nu; nIWid: if (!($u["\x6c\x65\x76\x65\x6c\x5f\151\x64"] != 0)) { goto Mqocg; } goto wP2E6; TvEFL: $rs["\x70\145\156\144\151\x6e\x67\x5f\162\x65\143\145\x69\x70\x74"] = Db::name("\x79\142\163\x63\137\157\x72\x64\x65\x72")->where("\142\x75\x79\x65\162\x5f\151\144", $data["\165\x69\144"])->where("\151\x73\x5f\x64\145\x6c\x65\164\145\x64", 0)->where("\x6d\x63\x68\x5f\151\144", $data["\x6d\143\150\137\x69\144"])->where("\157\x72\x64\145\162\x5f\x73\164\x61\x74\x75\163", 2)->count(); goto wJGAs; omObB: if ($copy["\x63\157\x64\145"] == 0) { goto CYXk6; } goto rAD6q; rmJ0Q: return $rs; goto FSEVN; gT_Fl: $rs = array(); goto n8lO6; UXVam: Mqocg: goto rPw6q; X6Ix9: gL3gk: goto I31g5; rkG2b: if (empty($copyright)) { goto b78h3; } goto DnKux; bpX80: $copy = file_get_contents(VIPAPI . "\x61\160\151\x2f\x69\x6e\144\x65\x78\x2f\x69\163\x5f\x73\150\x6f\x77\137\x63\x6f\x70\171\x72\x69\x67\150\x74\77\x75\x6e\x69\141\143\151\144\x3d" . $data["\x61\160\x70\137\151\144"] . "\46\171\x75\x6d\151\x6e\x67\x3d" . $_SERVER["\x48\124\124\x50\x5f\110\117\123\124"]); goto nUYqj; IlODE: $rs["\160\145\156\x64\x69\x6e\147\x5f\x73\x68\x69\160\x6d\x65\156\x74"] = Db::name("\x79\x62\x73\143\137\x6f\x72\x64\145\162")->where("\x62\165\x79\145\162\x5f\151\144", $data["\165\151\x64"])->where("\151\163\137\x64\x65\x6c\145\x74\x65\x64", 0)->where("\x6d\x63\150\137\151\144", $data["\155\x63\150\137\x69\144"])->where("\x6f\x72\144\145\x72\x5f\x73\164\141\164\x75\163", 1)->count(); goto TvEFL; wJGAs: $rs["\162\x65\x66\165\156\144"] = Db::name("\x79\x62\163\x63\x5f\157\162\144\145\x72")->where("\x62\165\x79\145\x72\137\x69\144", $data["\x75\x69\x64"])->where("\x69\x73\137\x64\x65\x6c\x65\164\145\144", 0)->where("\x6d\x63\150\x5f\151\x64", $data["\155\143\150\x5f\151\x64"])->where("\x6f\x72\x64\x65\162\137\163\164\x61\164\x75\x73", 4)->count(); goto kRDQg; aFSMS: $rs["\x63\x6f\160\x79\162\x69\x67\150\164"] = ''; goto Ndjbi; nUYqj: if (!empty($copy)) { goto CMl4W; } goto V4t9Y; Ndjbi: aXaHv: goto rmJ0Q; rPw6q: $rs["\160\x65\x6e\144\151\x6e\147\137\x70\141\171\x6d\x65\x6e\x74"] = Db::name("\x79\x62\163\x63\137\157\162\x64\x65\162")->where("\142\165\x79\x65\162\137\x69\x64", $data["\x75\151\x64"])->where("\151\x73\x5f\144\x65\154\145\x74\145\144", 0)->where("\155\x63\150\137\x69\144", $data["\x6d\x63\150\x5f\151\144"])->where("\157\x72\144\x65\x72\x5f\163\x74\x61\x74\x75\x73", 0)->count(); goto IlODE; DnKux: $rs["\143\x6f\160\x79\x72\x69\x67\x68\x74"] = $copyright["\x63\x6f\x6e\164\145\x6e\164"]; goto AU55s; FSEVN: } public function about($data) { goto pM62h; s6gVT: oGqkM: goto fhiD3; evaKt: $rs["\154\157\x67\157"] = __IMG($rs["\x6c\157\147\157"]); goto DVYLu; zTjX5: $rs["\165\x73\145\162\137\x6c\x65\166\x65\x6c"] = $u["\154\145\x76\145\x6c\x5f\x69\x64"]; goto BSJLo; pM62h: $rs = Db::name("\x79\142\x73\143\x5f\142\x75\163\151\x6e\145\163\163\137\x61\x62\x6f\x75\x74")->where("\155\143\150\x5f\151\144", $data["\155\143\x68\x5f\151\x64"])->find(); goto evaKt; vbqC7: $u = Db::name("\171\142\163\x63\137\x75\163\x65\162")->where($data)->find(); goto zTjX5; pzApv: if (!($u["\x6c\145\166\145\154\x5f\151\x64"] != 0)) { goto oGqkM; } goto k8g_A; BSJLo: $rs["\x75\x73\145\x72\137\162\x65\x62\x61\164\x65"] = 10.0; goto pzApv; DVYLu: if (!($data["\165\151\x64"] != 0)) { goto C4Jcu; } goto vbqC7; HiP7B: return $rs; goto xPYjd; fhiD3: C4Jcu: goto HiP7B; O6sTT: if (!$a) { goto qA4rH; } goto yzdSv; k8g_A: $a = Db::name("\171\142\x73\143\137\x75\163\x65\162\137\154\x65\166\145\x6c")->where(["\x69\144" => $u["\154\145\x76\145\154\x5f\151\144"], "\x6d\x63\x68\x5f\x69\144" => $data["\x6d\x63\x68\137\151\x64"]])->find(); goto O6sTT; yzdSv: $rs["\x75\163\145\162\x5f\x72\x65\142\141\164\145"] = $a["\x72\x65\x62\141\x74\145"]; goto A4X63; A4X63: qA4rH: goto s6gVT; xPYjd: } public static $OK = 0; public static $IllegalAesKey = -41001; public static $IllegalIv = -41002; public static $IllegalBuffer = -41003; public static $DecodeBase64Error = -41004; public function decryptData($encryptedData, $sessionKey, $app_id, $iv) { goto yCUXd; LxJNq: $aesKey = base64_decode($sessionKey); goto j4D1D; O8V5D: if (!($dataObj->watermark->appid != $app_id)) { goto jNa2_; } goto qlTOg; hoMAj: jNa2_: goto gF_4G; nKKf0: GagY0: goto O8V5D; R5MQB: $dataObj = json_decode($result); goto CgexN; qlTOg: return self::$IllegalBuffer; goto hoMAj; gF_4G: return $dataObj; goto ur0G7; svK1G: $aesCipher = base64_decode($encryptedData); goto KVZoX; dbdPb: return self::$IllegalBuffer; goto nKKf0; A5O7S: $aesIV = base64_decode($iv); goto svK1G; KVZoX: $result = openssl_decrypt($aesCipher, "\x41\x45\123\55\61\x32\70\55\103\102\x43", $aesKey, 1, $aesIV); goto R5MQB; PissL: return self::$IllegalAesKey; goto C0zzs; CgexN: if (!($dataObj == NULL)) { goto GagY0; } goto dbdPb; qifN1: t4Rz3: goto A5O7S; yCUXd: if (!(strlen($sessionKey) != 24)) { goto FuGHf; } goto PissL; j4D1D: if (!(strlen($iv) != 24)) { goto t4Rz3; } goto eZ1fv; eZ1fv: return self::$IllegalIv; goto qifN1; C0zzs: FuGHf: goto LxJNq; ur0G7: } }
