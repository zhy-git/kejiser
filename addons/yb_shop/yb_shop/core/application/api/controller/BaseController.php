<?php
 namespace app\api\controller; require_once BASE_ROOT . "\x63\x6f\162\145\57\164\x68\x69\156\153\x70\150\x70\57\142\x61\163\x65\x2e\x70\150\x70"; require_once BASE_ROOT . "\143\157\x72\145\x2f\141\x70\x70\x6c\151\143\x61\164\151\157\156\x2f\x61\x70\151\x2f\163\x65\x72\166\151\x63\145\x2f\x55\x73\145\162\x53\145\x72\166\151\143\x65\56\x70\150\x70"; require_once BASE_ROOT . "\x63\157\162\x65\x2f\141\x70\160\x6c\x69\x63\x61\x74\151\x6f\156\x2f\x61\x70\151\x2f\x73\145\x72\166\x69\x63\x65\x2f\x41\x64\144\x72\145\163\x73\x53\x65\162\x76\x69\143\145\56\160\150\160"; require_once BASE_ROOT . "\x63\157\x72\145\x2f\x61\160\x70\154\151\143\141\x74\151\157\156\57\x61\160\x69\57\163\145\162\166\151\143\x65\x2f\107\x6f\x6f\x64\x73\x53\x65\162\166\151\x63\x65\56\160\150\x70"; require_once BASE_ROOT . "\143\157\162\x65\x2f\x61\x70\x70\154\x69\x63\141\x74\x69\x6f\x6e\x2f\141\160\151\x2f\x73\x65\x72\166\151\143\145\57\x43\141\x72\x74\x53\145\x72\166\151\x63\x65\x2e\160\x68\x70"; require_once BASE_ROOT . "\x63\157\x72\145\57\x61\x70\160\x6c\151\x63\141\164\x69\157\x6e\x2f\141\160\151\57\163\145\162\x76\151\x63\x65\57\x41\x6c\x62\165\155\123\x65\162\x76\x69\x63\x65\x2e\x70\150\160"; require_once BASE_ROOT . "\x63\x6f\x72\x65\57\x61\160\160\x6c\x69\x63\x61\164\151\157\156\x2f\x61\x70\151\57\163\x65\x72\x76\151\x63\x65\x2f\x41\x72\x74\151\143\154\145\123\x65\x72\x76\x69\x63\145\x2e\160\150\160"; require_once BASE_ROOT . "\x63\157\x72\145\x2f\x61\x70\160\x6c\x69\x63\141\164\151\x6f\156\x2f\x61\x70\151\57\x73\145\x72\x76\x69\143\145\x2f\117\x72\144\x65\x72\123\145\x72\166\151\143\x65\x2e\160\150\x70"; require_once BASE_ROOT . "\x63\x6f\162\x65\x2f\141\160\x70\154\151\x63\141\164\x69\x6f\x6e\x2f\141\160\x69\x2f\x73\145\162\166\x69\x63\x65\x2f\x50\141\171\123\145\x72\166\151\x63\145\x2e\x70\x68\160"; require_once BASE_ROOT . "\143\157\162\145\57\x61\160\x70\x6c\151\x63\x61\x74\151\x6f\x6e\x2f\141\x70\151\57\163\x65\x72\x76\151\x63\145\57\x4d\141\x72\153\x65\164\123\145\x72\166\x69\143\145\56\x70\150\x70"; require_once BASE_ROOT . "\143\157\162\x65\57\x61\x70\160\154\151\x63\141\164\x69\x6f\156\x2f\x61\x70\x69\57\x73\145\x72\x76\x69\143\x65\x2f\111\x6e\x64\145\x78\123\145\x72\x76\151\x63\145\56\160\150\x70"; require_once BASE_ROOT . "\x63\x6f\x72\145\57\141\160\160\x6c\151\x63\141\164\x69\157\x6e\x2f\x61\x70\x69\57\x73\145\x72\166\151\143\145\x2f\x42\x61\162\147\x61\151\156\x53\x65\162\166\151\143\145\56\x70\150\x70"; require_once BASE_ROOT . "\x63\x6f\162\x65\x2f\x61\x70\160\154\x69\143\x61\x74\151\x6f\x6e\x2f\141\x70\151\x2f\x73\145\x72\x76\151\143\145\57\x50\x69\156\x74\165\141\156\123\x65\162\166\151\143\145\x2e\160\150\160"; require_once BASE_ROOT . "\x63\x6f\x72\x65\x2f\x61\160\x70\x6c\x69\x63\141\x74\x69\x6f\156\57\141\x70\x69\57\163\145\162\166\151\x63\145\x2f\104\151\x73\164\x72\x69\x62\145\x53\145\162\166\x69\x63\145\x2e\160\150\160"; use think\Controller; use think\Validate; use think\Cache; use think\config; use think\Db; use think\Session; class BaseController extends Controller { public function __construct() { goto QsCl7; A9CHx: Config::load($filename, "\x64\x61\164\141\x62\141\163\145"); goto OSaXR; fMRDO: $filename = BASE_ROOT . "\143\157\162\145\x2f\x61\160\x70\x6c\151\x63\x61\x74\x69\157\156\57\x64\141\x74\x61\x62\141\x73\145\x2e\160\x68\x70"; goto A9CHx; QsCl7: parent::__construct(); goto fMRDO; OSaXR: } protected function checkParam($rule, $data) { goto LYQUl; mGEG1: return null; goto HwiqF; DAYBK: return $validate->getError(); goto OUz4a; VYqv_: if ($result) { goto JOyrv; } goto DAYBK; LYQUl: $validate = new Validate($rule); goto OsrFG; OUz4a: JOyrv: goto mGEG1; OsrFG: $result = $validate->check($data); goto VYqv_; HwiqF: } public function createOutTradeNo() { goto PmD3t; PoA0v: $order_no = $time_str . time() . rand(111, 999); goto rDFT9; PmD3t: $time_str = date("\x59\155\x64"); goto PoA0v; rDFT9: return $order_no; goto KCLiK; KCLiK: } public function createOrderNo() { $no = time() . rand(111, 999); return $no; } public function objectArray($obj) { goto Oj2Jh; Ws84T: return $obj; goto fZN0r; mrrwT: w7O4H: goto Ws84T; a6hQm: foreach ($obj as $k => $v) { goto VNE9j; VNE9j: if (!(gettype($v) == "\162\145\163\x6f\165\162\143\x65")) { goto PwxoK; } goto nmIcN; jhkbD: W4PFm: goto Lk0Dd; tzYq_: $obj[$k] = (array) $this->objectArray($v); goto z5idV; IWK9n: PwxoK: goto fGmjK; nmIcN: return; goto IWK9n; fGmjK: if (!(gettype($v) == "\x6f\142\152\x65\143\164" || gettype($v) == "\x61\162\x72\141\x79")) { goto rJc5U; } goto tzYq_; z5idV: rJc5U: goto jhkbD; Lk0Dd: } goto mrrwT; Oj2Jh: $obj = (array) $obj; goto a6hQm; fZN0r: } public function getMchId($app_id) { goto uOYvv; PA_pE: return $rs; goto AdbWX; uanT2: $rs = $info["\x69\144"]; goto IzU9j; Kz_gi: if (!($rs != false)) { goto MN72Y; } goto PA_pE; AdbWX: MN72Y: goto RSKmt; uOYvv: $rs = Cache::get("\x61\160\151" . $app_id); goto Kz_gi; IzU9j: Cache::set("\x61\160\151" . $app_id, $rs, CACHE_TIME); goto aCoW_; RSKmt: $info = Db::name("\171\x62\163\143\x5f\x62\x75\x73\x69\x6e\x65\x73\163")->field("\151\x64")->where("\x75\x6e\151\x61\143\x69\144", $app_id)->find(); goto uanT2; aCoW_: return $rs; goto mJi2z; mJi2z: } protected function send_post($url, $post_data) { goto GZ8Is; GZ8Is: $options = array("\x68\x74\x74\160" => array("\155\145\164\150\x6f\x64" => "\x50\x4f\x53\x54", "\150\x65\x61\144\x65\162" => "\103\x6f\156\x74\145\156\164\x2d\x74\171\x70\145\72\141\x70\x70\154\151\x63\141\x74\151\x6f\156\x2f\152\163\157\x6e", "\143\157\156\164\145\156\x74" => $post_data, "\x74\151\155\145\x6f\x75\x74" => 60)); goto pQkIY; ORU6i: return $result; goto nxYFW; pQkIY: $context = stream_context_create($options); goto l131t; l131t: $result = file_get_contents($url, false, $context); goto ORU6i; nxYFW: } public function data_uri($contents, $mime) { $base64 = base64_encode($contents); return "\144\x61\164\x61\x3a" . $mime . "\73\x62\x61\163\x65\66\x34\54" . $base64; } public function makeRequest($url, $params = array(), $expire = 0, $extend = array(), $hostIp = '') { goto Fe2Qf; sBQ4f: curl_setopt($_curl, CURLOPT_CONNECTTIMEOUT, $expire); goto YxdSX; vW3Vx: return array("\x63\x6f\x64\x65" => "\61\x30\x30"); goto Wh1sA; WyaoS: if (empty($urlInfo["\150\x6f\x73\x74"])) { goto E9PpS; } goto UK3rn; YxdSX: izaaQ: goto xrQ_w; CsZwV: $result["\143\157\x64\145"] = -curl_errno($_curl); goto oyK2S; LtFa_: curl_setopt($_curl, CURLOPT_USERAGENT, "\101\120\x49\x20\120\x48\120\x20\103\125\122\x4c"); goto j0Ej4; Fe2Qf: if (!empty($url)) { goto A_CeA; } goto vW3Vx; Wh1sA: A_CeA: goto txjzk; dKYKx: $result["\162\x65\x73\165\154\164"] = curl_error($_curl); goto CsZwV; jTuNK: $_header = array("\x41\x63\143\x65\160\x74\x2d\114\141\156\x67\x75\141\x67\145\72\40\172\150\x2d\x43\x4e", "\103\x6f\156\x6e\x65\143\x74\151\x6f\156\x3a\x20\113\x65\145\160\55\101\x6c\151\166\145", "\x43\x61\x63\x68\145\55\103\157\156\x74\162\157\154\72\40\x6e\x6f\x2d\x63\x61\x63\x68\x65"); goto CzyIG; hIhVB: $url = "\150\164\164\160\72\57\57{$hostIp}{$url}"; goto eq_jv; txjzk: $_curl = curl_init(); goto jTuNK; oyK2S: pVCD2: goto Lvy1P; BuqTq: return $result; goto bIqnp; wBqcP: nYW2I: goto o5YCL; Y1l0y: curl_setopt($_curl, CURLOPT_POST, true); goto wBqcP; XC1Xw: wlCT3: goto Xx66D; jYoHd: goto wyz0W; goto VaCLQ; fFVP6: $result["\143\157\144\145"] = curl_getinfo($_curl, CURLINFO_HTTP_CODE); goto aLByb; gM83v: FP_kk: goto vG0D8; j0Ej4: curl_setopt($_curl, CURLOPT_HTTPHEADER, $_header); goto dzBll; a6q6H: LeCxY: goto yzPIF; JSDZl: curl_setopt($_curl, CURLOPT_SSL_VERIFYPEER, FALSE); goto DSAtr; vG0D8: curl_setopt($_curl, CURLOPT_URL, $url); goto kSk00; MMbH9: curl_setopt_array($_curl, $extend); goto a6q6H; CzyIG: if (empty($hostIp)) { goto wlCT3; } goto QvMHy; eq_jv: wyz0W: goto O_1zv; F_YIK: curl_setopt($_curl, CURLOPT_POSTFIELDS, http_build_query($params)); goto Y1l0y; DSAtr: curl_setopt($_curl, CURLOPT_SSL_VERIFYHOST, FALSE); goto gM83v; y36h1: curl_setopt($_curl, CURLOPT_TIMEOUT, $expire); goto sBQ4f; Lvy1P: curl_close($_curl); goto BuqTq; o5YCL: if (!(substr($url, 0, 8) == "\x68\164\x74\x70\163\72\x2f\57")) { goto FP_kk; } goto JSDZl; Xx66D: if (empty($params)) { goto nYW2I; } goto F_YIK; QvMHy: $urlInfo = parse_url($url); goto WyaoS; O_1zv: $_header[] = "\x48\x6f\163\164\x3a\x20{$urlInfo["\150\157\163\164"]}"; goto XC1Xw; dzBll: if (!($expire > 0)) { goto izaaQ; } goto y36h1; VaCLQ: E9PpS: goto pOZAY; xrQ_w: if (empty($extend)) { goto LeCxY; } goto MMbH9; jlJK3: if (!($result["\162\x65\163\165\154\x74"] === false)) { goto pVCD2; } goto dKYKx; UK3rn: $url = str_replace($urlInfo["\150\157\163\x74"], $hostIp, $url); goto jYoHd; pOZAY: $urlInfo["\150\157\163\x74"] = substr(DOMAIN, 7, -1); goto hIhVB; aLByb: $result["\x69\x6e\146\157"] = curl_getinfo($_curl); goto jlJK3; yzPIF: $result["\162\145\163\165\x6c\x74"] = curl_exec($_curl); goto fFVP6; kSk00: curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true); goto LtFa_; bIqnp: } public function getWxAccessToken($appid, $appsecret) { goto kikIG; xpbe5: return $access_token; goto m1bmS; wuWky: $access_token = json_decode($access_token["\162\x65\x73\x75\154\x74"], true); goto yCSwo; t6_CU: $url = "\x68\164\164\160\163\x3a\x2f\x2f\141\160\151\56\x77\145\151\x78\151\x6e\x2e\x71\161\x2e\143\157\x6d\x2f\143\147\151\x2d\x62\x69\x6e\x2f\x74\x6f\x6b\x65\x6e\77\147\162\x61\x6e\x74\x5f\164\171\160\x65\x3d\x63\154\151\x65\156\x74\x5f\x63\162\x65\144\x65\156\x74\x69\141\x6c\46\141\x70\x70\x69\144\75" . $appid . "\46\163\x65\x63\162\x65\x74\75" . $appsecret; goto Ox8DL; yCSwo: Session::set("\141\x63\143\145\x73\x73\137\x74\157\x6b\x65\x6e\x5f" . $appid, $access_token); goto ynmoX; kikIG: if (Session::get("\x61\x63\143\145\x73\x73\x5f\x74\x6f\153\145\x6e\x5f" . $appid) && Session::get("\145\170\x70\151\x72\x65\x5f\164\151\x6d\x65\x5f" . $appid) > time()) { goto VKuCa; } goto t6_CU; FAXsM: return Session::get("\141\143\143\145\x73\163\x5f\x74\x6f\x6b\x65\156\137" . $appid); goto i0dB6; ynmoX: Session::set("\x65\x78\x70\x69\162\145\137\x74\151\x6d\x65\137" . $appid, time() + 7000); goto xpbe5; Ox8DL: $access_token = $this->makeRequest($url); goto wuWky; i0dB6: C8ktd: goto FXtX2; OHaKO: VKuCa: goto FAXsM; m1bmS: goto C8ktd; goto OHaKO; FXtX2: } }
