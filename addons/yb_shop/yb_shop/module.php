<?php
 namespace yb_shop; use Comodojo\Zip\Zip; defined("\x49\x4e\137\x49\x41") or exit("\101\143\143\145\163\x73\x20\104\x65\x6e\x69\x65\x64"); class Init { public $src_url; public $db_url; public $src_file; public $db_file; public function __construct() { goto CWiFj; uzkms: $this->db_url = ''; goto Ll6Mc; CWiFj: $version = "\x30\56\x31\x2e\x30"; goto ospk8; ospk8: $this->src_url = ''; goto uzkms; Ll6Mc: $this->src_file = __DIR__ . ''; goto Dlcp3; Dlcp3: $this->db_file = __DIR__ . ''; goto mufIj; mufIj: } public function render($view, $params = array()) { goto CreDZ; CreDZ: foreach ($params as $name => $value) { ${$name} = $value; vDwsI: } goto xM0rq; XVpzt: require __DIR__ . "\57\143\157\x72\145\x2f\x69\156\x64\145\170\56\160\x68\160"; goto aCQb0; xM0rq: NNgaH: goto XVpzt; aCQb0: } public function renderJson($data) { goto ZGmE6; PmbBr: exit; goto psE7m; ZGmE6: header("\x61\160\x70\x6c\x69\143\x61\x74\151\157\x6e\x2f\152\x73\157\156"); goto q78Al; iz_gG: $data = json_encode($data, JSON_UNESCAPED_UNICODE); goto vE63h; vE63h: ZGVFM: goto AUubV; AUubV: echo $data; goto PmbBr; q78Al: if (!(is_array($data) || is_object($data))) { goto ZGVFM; } goto iz_gG; psE7m: } public function run() { goto WaaWF; riySz: U49xn: goto nRoB4; Gi7pN: $_SESSION["\167\x65\x37\137\x75\163\145\x72"] = $_W["\165\x73\145\x72"]; goto VptTn; sZT5j: O2Zsf: goto gRtuW; Sr8kB: set_time_limit($timeout); goto IkD6m; TyTUp: $res2 = true; goto sZT5j; VSmPX: goto YbkdK; goto riySz; CeBxk: t19z2: goto oAtPn; oAtPn: pdo_run("\x3c\74\x3c\x45\x4f\x46\40" . file_get_contents($this->db_file) . "\x20\105\117\106\x3b"); goto wOKFI; WcTfL: if (!(session_status() != PHP_SESSION_ACTIVE)) { goto Ju8sD; } goto Gkff5; VptTn: $_SESSION["\167\145\x37\x5f\141\143\143\157\165\156\164"] = $_W["\x61\x63\143\157\x75\x6e\x74"]; goto iXrXz; RJ3yW: $this->renderJson(["\143\157\144\145" => 1, "\x6d\x73\147" => "\345\xae\x89\350\xa3\205\345\xa4\xb1\xe8\264\xa5\xef\xbc\214\xe4\273\216\350\277\x9c\xe7\250\x8b\xe6\x9c\215\345\x8a\xa1\xe5\x99\xa8\344\270\x8b\xe8\275\xbd\346\x96\x87\344\xbb\266\xe5\244\xb1\350\xb4\245\357\274\x8c\xe8\xaf\xb7\346\243\200\346\237\245\346\234\215\xe5\x8a\241\345\x99\250\347\xbd\x91\347\273\234\xe6\230\257\345\220\xa6\xe6\255\xa3\345\xb8\xb8\357\274\214\xe7\275\x91\347\253\x99\347\233\xae\xe5\xbd\225\346\230\xaf\xe5\220\246\346\x9c\x89\xe5\206\x99\xe5\x85\xa5\346\x9d\x83\xe9\x99\220"]); goto CeBxk; aMws5: $res1 = httpcopy($this->src_url, $this->src_file, $timeout); goto VSmPX; IL2me: $zip->extract($core_dir); goto Rq4tp; Wn_Am: exit; goto WOq3j; WaaWF: global $_W; goto riMie; TcQ7v: file_delete($this->src_file); goto FgYf0; WOq3j: iwRgL: goto Fd7jq; TxfbA: $this->renderJson(["\x63\157\x64\x65" => 0, "\155\x73\x67" => "\xe5\256\x89\350\243\205\xe6\210\x90\xe5\212\x9f\xef\xbc\x8c\74\141\40\150\x72\x65\146\75\x22" . $url . "\x22\x3e\xe5\xbc\200\xe5\xa7\213\344\xbd\277\xe7\x94\250\x3c\x2f\x61\76"]); goto N1l7N; HpxbY: if (file_exists($this->db_file)) { goto l2xiS; } goto yEfmR; v2unm: v8yLr: goto EoqcJ; gu4X3: $_SESSION["\166\145\162\163\151\x6f\156\137\151\144"] = $_GPC["\166\x65\162\163\x69\157\156\x5f\x69\x64"]; goto v2unm; N1l7N: YwcJb: goto XUzUC; cPe9t: $timeout = 60 * 30; goto Sr8kB; iXrXz: if (!file_exists(__DIR__ . "\x2f\143\x6f\x72\145\57\x69\156\144\145\170\56\x70\x68\160")) { goto iwRgL; } goto gTWeP; eW3GJ: Ju8sD: goto Gi7pN; gRtuW: if (!($res1 == false || $res2 == false)) { goto t19z2; } goto RJ3yW; WwMEd: $this->render("\162\165\x6e", ["\x69\163\137\x61\x64\x6d\151\156" => $_W["\x75\x73\145\x72"]["\147\162\x6f\165\160\151\x64"] == 0]); goto U14FL; Dw3tq: YbkdK: goto HpxbY; WoNwf: if (file_exists($this->src_file)) { goto U49xn; } goto aMws5; edrqb: session_start(); goto d9yWK; Y4iiL: $url = $_W["\x73\151\164\145\x72\157\157\x74"] . "\x61\144\x64\157\156\163\57" . $_W["\x63\165\x72\x72\x65\156\x74\137\x6d\157\x64\x75\154\x65"]["\156\141\x6d\x65"] . "\57\x63\157\162\145\x2f\x69\156\144\x65\x78\56\160\150\160"; goto WcTfL; FgYf0: file_delete($this->db_file); goto TxfbA; Fd7jq: if ($_W["\151\x73\160\157\x73\164"]) { goto x40ni; } goto WwMEd; Gkff5: session_start(); goto eW3GJ; EoqcJ: $_SESSION["\167\145\67\x5f\167"] = $_W; goto Y4iiL; sehKh: x40ni: goto cPe9t; QwOK0: goto O2Zsf; goto PRSq2; Rq4tp: $zip->close(); goto TcQ7v; wOKFI: $zip = Zip::open($this->src_file); goto IL2me; riMie: global $_GPC; goto edrqb; nRoB4: $res1 = true; goto Dw3tq; d9yWK: if (empty($_GPC["\x76\x65\162\x73\x69\157\156\137\x69\144"])) { goto v8yLr; } goto gu4X3; PRSq2: l2xiS: goto TyTUp; IkD6m: $core_dir = __DIR__ . "\x2f\143\157\x72\145"; goto WoNwf; yEfmR: $res2 = httpcopy($this->db_url, $this->db_file, $timeout); goto QwOK0; U14FL: goto YwcJb; goto sehKh; gTWeP: header("\114\157\143\x61\x74\x69\x6f\156\x3a" . $url); goto Wn_Am; XUzUC: } } function httpcopy($url, $file = '', $timeout = 60) { goto EKDox; ROnms: !is_dir($dir) && @mkdir($dir, 0755, true); goto kDRaB; HkhnS: L9T2p: goto zca30; hrw9k: curl_setopt($ch, CURLOPT_URL, $url); goto FP87y; kDRaB: $url = str_replace("\x20", "\x25\62\60", $url); goto y3Dw6; NplOH: goto i9BCl; goto HkhnS; xPGMI: return $file; goto cXE6Q; FSIpK: $context = stream_context_create($opts); goto JPwAE; iwxCP: goto mADEF; goto igQfa; bbzqa: pn45P: goto xPGMI; JPwAE: if (@copy($url, $file, $context)) { goto pn45P; } goto Zx1By; igQfa: KLFfA: goto zE8QU; vRbU7: return false; goto NplOH; Zx1By: return false; goto VaCrg; YytGO: if (@file_put_contents($file, $temp) && !curl_error($ch)) { goto L9T2p; } goto vRbU7; EKDox: $file = empty($file) ? pathinfo($url, PATHINFO_BASENAME) : $file; goto ehnvT; FP87y: curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); goto KOH_R; y3Dw6: if (function_exists("\x63\x75\162\154\137\151\x6e\x69\x74")) { goto KLFfA; } goto rHdza; ehnvT: $dir = pathinfo($file, PATHINFO_DIRNAME); goto ROnms; hHDMh: $temp = curl_exec($ch); goto YytGO; KOH_R: curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); goto hHDMh; rHdza: $opts = array("\x68\x74\164\160" => array("\x6d\x65\x74\150\x6f\x64" => "\107\x45\124", "\150\x65\141\x64\145\x72" => '', "\x74\151\x6d\145\x6f\x75\164" => $timeout)); goto FSIpK; VaCrg: goto NvOGL; goto bbzqa; cXE6Q: NvOGL: goto iwxCP; zE8QU: $ch = curl_init(); goto hrw9k; LDjgr: i9BCl: goto IKPdW; zca30: return $file; goto LDjgr; IKPdW: mADEF: goto p7Z9l; p7Z9l: } (new Init())->run(); exit;
