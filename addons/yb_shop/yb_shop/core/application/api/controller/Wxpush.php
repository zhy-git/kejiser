<?php
 namespace app\api\controller; require_once BASE_ROOT . "\143\157\162\x65\x2f\x61\x70\x70\154\151\143\x61\x74\x69\x6f\x6e\x2f\x61\x70\x69\x2f\143\x6f\156\164\162\157\154\154\145\162\57\x42\141\163\145\103\x6f\x6e\x74\162\157\x6c\154\x65\162\56\160\150\x70"; use think\Request; use think\Db; use think\Session; use think\Cache; class Wxpush extends BaseController { protected $config = array("\165\x72\x6c" => "\150\x74\164\x70\x73\x3a\x2f\x2f\x61\160\151\56\x77\145\x69\x78\x69\x6e\56\161\161\56\143\157\155\57\163\x6e\x73\x2f\x6a\163\x63\157\x64\x65\x32\163\145\163\x73\x69\157\x6e", "\141\160\x70\151\x64" => '', "\163\x65\x63\162\x65\164" => '', "\x67\x72\x61\156\164\x5f\x74\171\x70\x65" => "\141\x75\x74\150\x6f\x72\x69\172\x61\164\151\157\156\137\143\x6f\144\145"); function __construct() { goto BnpNl; XFxrD: $this->config["\141\160\x70\151\x64"] = $param["\101\120\120\x5f\x49\x44"]; goto jPC82; hiT9s: $param = json_decode($param, true); goto XFxrD; nI71v: goto FG2zV; goto iWuS1; DXq0O: die; goto nI71v; iWuS1: Fp2Wi: goto q1T82; K18hs: if ($mch_id) { goto Fp2Wi; } goto DXq0O; jPC82: $this->config["\x73\x65\143\x72\145\x74"] = $param["\101\120\120\137\x53\105\103\122\x45\x54"]; goto EUfEX; BnpNl: parent::__construct(); goto WD0Ad; EUfEX: FG2zV: goto MFIhu; q1T82: $param = Db::name("\171\142\163\143\137\x63\x6f\x6e\x66\151\x67")->where("\153\x65\171", "\127\130\x50\x41\131")->where("\x6d\143\150\137\x69\144", $mch_id)->value("\166\141\154\x75\145"); goto hiT9s; WD0Ad: $app_id = Request::instance()->param("\x69"); goto viOaZ; viOaZ: $mch_id = $this->getMchId($app_id); goto K18hs; MFIhu: } public function CreateOrderPush() { goto FGSEw; PVk0j: agGOd: goto B2yUV; yO9an: $user = Db::name("\x79\x62\163\x63\137\x75\163\145\x72")->where("\x75\151\144", $data["\165\151\x64"])->find(); goto CEs9j; mNdea: $data = ["\x6d\x63\x68\x5f\151\144" => $mch_id, "\x66\157\162\155\151\x64" => Request::instance()->param("\x66\157\162\155\151\x64"), "\165\151\144" => Request::instance()->param("\165\151\x64"), "\157\162\x64\x65\162\137\151\x64" => Request::instance()->param("\157\162\x64\x65\x72\137\x69\x64")]; goto QZzlZ; HdU_i: goto MOXFT; goto eQTsy; xOAwW: $new_data["\x6f\x70\145\156\x69\x64"] = $user["\167\x78\137\x6f\x70\x65\x6e\151\144"]; goto igJAD; B2yUV: $temp = json_decode($temp, true); goto kY56k; Vhi5w: $rs["\155\163\147"] = "\146\141\151\154\137\x74\145\x6d\160\154\x61\x74\x65\x5f\x69\144"; goto chpNW; uXwn5: if (!(empty($order) || empty($user) || empty($order_goods))) { goto rQ1c7; } goto GgtcW; FXMwV: $mch_id = $this->getMchId($app_id); goto D6Q8G; FGSEw: $app_id = Request::instance()->param("\151"); goto FXMwV; VD6Ud: rQ1c7: goto Jh19p; AeWMS: return $result; goto M6VA0; igJAD: $new_data["\146\157\162\155\x69\144"] = $data["\x66\x6f\x72\155\x69\144"]; goto tKk7S; wQGuU: foreach ($order_goods as $k => $v) { goto jQ2dy; jQ2dy: if ($k == 0) { goto pHbxd; } goto wRqkW; wRqkW: $good_name = $good_name . "\54" . $v["\147\x6f\157\144\x73\x5f\x6e\141\155\x65"]; goto db5dD; BOkzg: PkRet: goto Vpp5i; LUyK1: $good_name = $good_name . $v["\147\157\x6f\144\163\137\x6e\141\x6d\x65"]; goto BOkzg; ptHXt: pHbxd: goto LUyK1; Vpp5i: g7hsb: goto EMgvH; db5dD: goto PkRet; goto ptHXt; EMgvH: } goto v_CrM; kY56k: if ($temp["\x41\x54\60\x32\61\60"]) { goto AjV52; } goto ZuRaA; Jh19p: $temp = Db::name("\x79\142\x73\143\x5f\x74\155\160\154\137\144\x6f\160\x65")->where("\155\x63\150\x5f\151\144", $data["\155\143\x68\137\x69\144"])->value("\164\x65\155\x70"); goto Z__Rv; rdTRM: $new_data["\x70\x61\147\x65"] = "\171\142\137\163\x68\x6f\160\57\160\141\x67\145\x73\57\x69\x6e\x64\x65\x78\x2f\151\x6e\x64\x65\170"; goto xOAwW; GgtcW: return "\x66\141\x69\x6c\x5f\145\155\160\164\171"; goto VD6Ud; chpNW: return json_encode($rs); goto HdU_i; QZzlZ: $result = $this->checkParam($rule, $data); goto ODbeI; lksuy: $good_name = ''; goto wQGuU; v2vFD: return json_encode($rs); goto zYV7f; eQTsy: AjV52: goto WSjrv; NnF0H: MOXFT: goto qK9k3; v_CrM: fSsXS: goto I7Dve; fcPNe: return json_encode($rs); goto o2ml2; o2ml2: goto xyezh; goto PVk0j; I7Dve: $data_arr = array("\x6b\x65\171\167\x6f\162\x64\61" => array("\x76\141\154\165\145" => $order["\x6f\162\x64\145\x72\x5f\156\x6f"], "\143\x6f\154\157\162" => "\x23\64\x33\64\63\x34\x33"), "\153\145\x79\x77\157\x72\x64\62" => array("\x76\141\x6c\x75\145" => $order["\x70\141\x79\137\155\157\x6e\x65\171"], "\143\157\154\157\162" => "\43\x39\64\71\x34\x39\64"), "\x6b\x65\x79\167\157\x72\144\x33" => array("\166\x61\x6c\165\x65" => $good_name, "\143\x6f\154\157\162" => "\x23\x39\x34\x39\64\x39\64"), "\153\x65\171\167\157\x72\x64\64" => array("\166\141\154\x75\x65" => $order["\x62\165\171\x65\x72\x5f\155\x65\x73\x73\x61\x67\145"] ? $order["\x62\x75\171\x65\x72\137\x6d\145\163\163\x61\x67\x65"] : "\xe6\227\xa0", "\143\157\154\157\162" => "\x23\71\64\x39\64\x39\64")); goto KJk3A; tKk7S: $result = $this->push($new_data, $data_arr); goto AeWMS; Ge0k9: $rs["\143\157\x64\x65"] = 1; goto xZeKh; zYV7f: BAuaU: goto X4X6L; Z__Rv: if ($temp) { goto agGOd; } goto Ge0k9; xZeKh: $rs["\x6d\x73\147"] = "\x66\x61\x69\x6c\137\164\x65\x6d\160\154\141\164\145\137\x69\144"; goto fcPNe; KJk3A: $new_data["\164\x65\x6d\x70\x6c\141\x74\x65\x5f\x69\x64"] = $template_id; goto rdTRM; ODbeI: if (empty($result)) { goto BAuaU; } goto fyQTm; X4X6L: $order = Db::name("\171\x62\163\x63\137\157\162\144\145\x72")->where(["\155\x63\150\137\151\x64" => $data["\155\143\x68\x5f\151\x64"], "\157\162\x64\145\162\x5f\x69\144" => $data["\x6f\x72\144\145\x72\137\151\144"]])->find(); goto yO9an; fyQTm: $rs["\143\x6f\x64\145"] = 1; goto Mx17o; ZuRaA: $rs["\143\x6f\x64\x65"] = 1; goto Vhi5w; Mx17o: $rs["\x6d\x73\147"] = $result; goto v2vFD; WSjrv: $template_id = $temp["\x41\124\60\62\x31\60"]; goto NnF0H; CEs9j: $order_goods = Db::name("\171\142\163\x63\137\x6f\162\x64\x65\x72\x5f\147\x6f\157\x64\x73")->where(["\157\162\144\145\x72\x5f\151\x64" => $data["\157\162\144\x65\x72\x5f\151\144"]])->select(); goto uXwn5; D6Q8G: $rule = [["\146\157\162\155\151\x64", "\x72\x65\161\165\151\162\145"], ["\x6d\143\x68\137\x69\x64", "\x72\x65\x71\x75\x69\162\145", "\xe4\270\215\345\255\230\345\234\250\345\x95\x86\xe6\210\xb7"], ["\165\x69\x64", "\162\145\x71\x75\x69\x72\x65"], ["\x6f\162\x64\x65\x72\137\151\x64", "\162\145\161\165\151\x72\145"]]; goto mNdea; qK9k3: xyezh: goto lksuy; M6VA0: } public function PayOrderPush() { goto vuJSS; uATGi: $temp = json_decode($temp, true); goto NeNSj; T_cIr: $template_id = $temp["\101\124\x30\x30\64\70"]; goto tjAce; Pmf3u: $mch_id = $this->getMchId($app_id); goto it86u; tjAce: mTsw6: goto juI0L; mHCql: $new_data["\164\145\x6d\x70\154\141\x74\145\137\151\144"] = $template_id; goto kkLPl; sqlQ_: $result = $this->checkParam($rule, $data); goto iheW2; UdVZX: $order_goods = Db::name("\171\142\x73\x63\x5f\x6f\162\144\x65\x72\x5f\x67\157\157\144\x73")->where(["\x6f\x72\144\145\162\x5f\151\x64\x20" => $order["\x6f\x72\144\145\162\x5f\151\144"]])->select(); goto MA6gW; giBG3: $temp = Db::name("\x79\142\x73\x63\137\164\x6d\160\154\137\x64\x6f\160\x65")->where("\155\x63\x68\x5f\x69\x64", $data["\155\x63\150\137\x69\x64"])->value("\x74\145\155\160"); goto KFvLM; hLt6Z: if (!(empty($order) || empty($user) || empty($order_goods))) { goto VqDI4; } goto a9kQa; uTUhC: $new_data["\146\157\162\x6d\x69\144"] = $data["\x66\x6f\162\155\151\144"]; goto BsJu7; UNYcQ: $rs["\x6d\x73\147"] = $result; goto AhQOG; DzKu2: p_Wmd: goto uATGi; bfW0v: $data_arr = array("\x6b\145\x79\167\x6f\x72\144\x31" => array("\166\x61\x6c\x75\145" => $order["\x6f\162\144\x65\162\137\x6e\157"], "\143\157\x6c\x6f\162" => "\x23\64\x33\x34\x33\64\x33"), "\153\x65\x79\x77\x6f\162\x64\62" => array("\166\141\154\x75\145" => $user["\x6e\x69\143\x6b\x5f\x6e\x61\155\x65"], "\143\157\154\157\x72" => "\x23\71\64\x39\64\x39\64"), "\x6b\145\x79\167\157\162\144\x33" => array("\166\141\154\x75\x65" => $good_name, "\143\157\154\157\162" => "\x23\x39\x34\x39\x34\71\x34"), "\153\145\171\x77\157\x72\x64\64" => array("\x76\x61\154\165\x65" => $order["\x70\141\x79\137\x6d\157\x6e\x65\x79"], "\x63\157\154\x6f\162" => "\43\x39\x34\71\x34\71\64"), "\x6b\x65\171\167\157\x72\144\65" => array("\x76\x61\x6c\x75\145" => $order["\157\162\144\x65\x72\137\x6d\x6f\x6e\x65\x79"], "\143\157\x6c\x6f\162" => "\x23\71\64\x39\64\x39\64"), "\x6b\145\x79\x77\x6f\162\144\x36" => array("\x76\141\x6c\165\145" => $jifen_add, "\x63\157\x6c\157\x72" => "\43\71\64\x39\64\71\x34"), "\x6b\x65\171\167\157\x72\144\67" => array("\166\x61\154\165\x65" => $user["\151\156\x74\x65\147\x72\141\154"], "\143\x6f\x6c\x6f\x72" => "\x23\71\64\71\64\x39\x34"), "\x6b\x65\x79\x77\157\x72\x64\x38" => array("\x76\x61\x6c\165\x65" => date("\131\x2d\155\x2d\x64\x20\110\x3a\x69\72\163", $order["\x70\x61\171\137\x74\151\x6d\x65"]), "\x63\157\154\157\162" => "\x23\71\x34\71\64\x39\x34"), "\153\145\171\167\x6f\162\x64\x39" => array("\166\x61\x6c\x75\x65" => $order["\142\x75\x79\x65\162\x5f\x6d\x65\x73\163\x61\x67\x65"] ? $order["\x62\165\171\x65\162\x5f\155\145\163\x73\x61\x67\145"] : "\346\227\240", "\x63\x6f\154\x6f\162" => "\x23\x39\x34\x39\x34\x39\64")); goto mHCql; MRljc: foreach ($order_goods as $k => $v) { goto qsbJz; KpUcN: DSRri: goto eUZ9I; eUZ9I: ZeMap: goto py62Y; PCkzR: $good_name = $good_name . $v["\147\157\x6f\x64\163\x5f\156\141\x6d\x65"]; goto KpUcN; qsbJz: if ($k == 0) { goto FnVH5; } goto jnXRg; tOUtV: FnVH5: goto PCkzR; oeeBw: goto DSRri; goto tOUtV; jnXRg: $good_name = $good_name . "\54" . $v["\x67\x6f\157\144\x73\x5f\x6e\x61\x6d\x65"]; goto oeeBw; py62Y: } goto OYE07; v3OGk: $data = ["\x6d\x63\x68\x5f\x69\x64" => $mch_id, "\x66\157\x72\x6d\151\x64" => Request::instance()->param("\146\x6f\x72\x6d\151\144"), "\x75\x69\144" => Request::instance()->param("\165\151\x64"), "\157\165\x74\x5f\164\x72\x61\144\145\x5f\156\157" => Request::instance()->param("\x6f\165\x74\137\x74\x72\141\x64\145\x5f\x6e\157")]; goto sqlQ_; Uzq8K: $user = Db::name("\x79\x62\x73\143\x5f\x75\x73\x65\x72")->where("\x75\151\144", $data["\x75\151\144"])->find(); goto UdVZX; KFvLM: if ($temp) { goto p_Wmd; } goto yWTVM; B0zED: $jifen_add = $integral["\151\156\164\145\147\x72\141\x6c"] ? $integral["\151\156\164\x65\147\162\141\x6c"] : 0; goto hLt6Z; wL46l: return $result; goto teZSk; vRWQv: return "\146\141\x69\154\x5f\164\145\155\160\x6c\x61\x74\x65\x5f\151\144"; goto n56Yy; Lx8dp: VqDI4: goto giBG3; NtbOq: $rs["\143\x6f\144\x65"] = 1; goto UNYcQ; juI0L: mIPOZ: goto MfuOg; OYE07: cG8WE: goto bfW0v; NeNSj: if ($temp["\x41\124\60\60\64\70"]) { goto n4AOE; } goto vRWQv; MA6gW: $integral = Db::name("\171\x62\x73\143\137\151\156\x74\x65\147\x72\x61\154\137\x64\145\x74\141\151\154")->where(["\155\x63\150\x5f\151\x64" => $data["\x6d\x63\x68\x5f\x69\x64"], "\x6f\x72\144\145\x72\x5f\151\144\40" => $order["\157\x72\x64\x65\162\137\x69\144"]])->find(); goto B0zED; vuJSS: $app_id = Request::instance()->param("\x69"); goto Pmf3u; yWTVM: return "\x66\x61\151\154\137\164\x65\155\160\154\141\x74\145\137\x69\144"; goto VzD_O; n56Yy: goto mTsw6; goto pH4xb; kkLPl: $new_data["\160\x61\147\x65"] = "\x79\142\x5f\163\150\157\x70\57\x70\141\x67\145\163\57\x69\x6e\x64\145\170\57\151\x6e\144\145\x78"; goto uoNb8; oe42k: $order = Db::name("\x79\x62\x73\x63\x5f\x6f\162\x64\145\162")->where(["\x6d\143\150\x5f\151\x64" => $data["\x6d\143\150\x5f\151\144"], "\157\165\164\x5f\x74\x72\141\144\145\x5f\156\x6f" => $data["\x6f\x75\x74\137\164\x72\141\x64\145\x5f\x6e\x6f"]])->find(); goto Uzq8K; uoNb8: $new_data["\157\160\x65\156\x69\x64"] = $user["\x77\170\x5f\157\160\145\156\151\x64"]; goto uTUhC; a9kQa: return "\146\x61\151\x6c\x5f\145\155\x70\x74\171"; goto Lx8dp; pH4xb: n4AOE: goto T_cIr; AhQOG: return json_encode($rs); goto p_8d0; iheW2: if (empty($result)) { goto X9t3P; } goto NtbOq; it86u: $rule = [["\146\x6f\x72\x6d\x69\x64", "\162\145\x71\x75\x69\162\x65"], ["\155\x63\150\137\x69\x64", "\x72\145\161\165\151\x72\145", "\xe4\xb8\x8d\345\255\x98\xe5\x9c\xa8\345\225\206\346\210\xb7"], ["\165\151\144", "\x72\145\x71\x75\x69\162\145"], ["\157\165\x74\137\164\x72\x61\x64\x65\x5f\156\157", "\x72\x65\161\x75\x69\x72\145"]]; goto v3OGk; MfuOg: $good_name = ''; goto MRljc; p_8d0: X9t3P: goto oe42k; VzD_O: goto mIPOZ; goto DzKu2; BsJu7: $result = $this->push($new_data, $data_arr); goto wL46l; teZSk: } protected function Push($data, $data_arr) { goto R0rPs; wrCHu: $push_url = "\x68\164\164\x70\x73\72\x2f\57\141\160\x69\x2e\x77\145\151\170\x69\156\x2e\161\x71\x2e\143\x6f\x6d\x2f\x63\147\151\x2d\142\151\156\x2f\x6d\145\x73\x73\141\x67\x65\x2f\167\x78\x6f\x70\145\156\x2f\x74\x65\x6d\x70\154\x61\164\145\57\163\x65\x6e\144\77\x61\143\x63\x65\163\x73\137\164\157\153\x65\156\x3d" . $access_token["\x61\x63\143\x65\163\163\x5f\164\157\153\x65\156"]; goto F6EFC; lg3i9: $appid = $this->config["\x61\x70\160\x69\144"]; goto SBI21; TEvxg: $access_token = $this->getWxAccessToken($appid, $appsecret); goto wrCHu; F6EFC: $data = json_encode($params, true); goto EgWE4; R0rPs: $params = array("\x74\x6f\165\163\145\x72" => $data["\x6f\160\x65\x6e\x69\x64"], "\x74\x65\155\160\154\x61\x74\x65\x5f\151\x64" => $data["\164\x65\155\160\x6c\141\164\145\x5f\151\144"], "\160\x61\147\x65" => $data["\x70\141\x67\x65"], "\x66\157\162\155\137\x69\x64" => $data["\146\x6f\162\x6d\x69\x64"], "\144\141\x74\141" => $data_arr); goto lg3i9; tRl5S: return $result; goto DTsCF; EgWE4: $result = $this->send_post($push_url, $data); goto tRl5S; SBI21: $appsecret = $this->config["\163\145\143\162\x65\164"]; goto TEvxg; DTsCF: } protected function send_post($url, $post_data) { goto k76iJ; ynrfi: $context = stream_context_create($options); goto YZLYt; YZLYt: $result = file_get_contents($url, false, $context); goto iN8ko; iN8ko: return $result; goto GGLaH; k76iJ: $options = array("\x68\164\164\160" => array("\x6d\x65\x74\150\x6f\x64" => "\120\x4f\123\124", "\x68\x65\141\x64\145\162" => "\103\157\156\164\145\156\x74\55\x74\x79\x70\145\72\141\160\160\154\x69\143\x61\x74\151\x6f\156\57\x6a\x73\157\156", "\143\x6f\x6e\x74\x65\156\164" => $post_data, "\x74\151\x6d\x65\157\x75\164" => 60)); goto ynrfi; GGLaH: } function makeRequest($url, $params = array(), $expire = 0, $extend = array(), $hostIp = '') { goto kKGV8; gHil3: curl_setopt($_curl, CURLOPT_TIMEOUT, $expire); goto lntO8; FcT3s: $result["\162\x65\x73\165\x6c\164"] = curl_error($_curl); goto MxWTV; A4On7: curl_close($_curl); goto gkJTp; Lh4GL: if (empty($hostIp)) { goto PUC40; } goto lSkA1; TsKDQ: $_header = array("\101\x63\143\x65\160\x74\55\114\x61\x6e\x67\165\141\147\145\x3a\x20\172\150\x2d\x43\x4e", "\103\x6f\156\x6e\145\143\x74\151\x6f\156\x3a\40\x4b\145\x65\x70\x2d\101\154\151\x76\x65", "\103\141\143\150\145\x2d\103\157\x6e\164\162\157\x6c\72\x20\x6e\157\x2d\143\x61\x63\x68\x65"); goto Lh4GL; mWnJu: kMbpX: goto FSpqj; FSpqj: $_curl = curl_init(); goto TsKDQ; bNBWK: goto JCR7y; goto QldlM; usyf0: if (!($expire > 0)) { goto Pbo1a; } goto gHil3; Wp31L: $result["\162\145\x73\x75\x6c\164"] = curl_exec($_curl); goto KTwk0; q1bqu: curl_setopt($_curl, CURLOPT_SSL_VERIFYPEER, FALSE); goto o8rR7; bmoPQ: return array("\x63\157\144\145" => "\61\x30\x30"); goto mWnJu; E1Cci: JCR7y: goto stZYK; lntO8: curl_setopt($_curl, CURLOPT_CONNECTTIMEOUT, $expire); goto etiZQ; gkJTp: return $result; goto RvZWG; y2lbH: NjXvm: goto Wp31L; etiZQ: Pbo1a: goto U20Fe; lSkA1: $urlInfo = parse_url($url); goto t1TkV; LO001: curl_setopt($_curl, CURLOPT_USERAGENT, "\x41\120\111\x20\x50\x48\x50\40\103\x55\122\x4c"); goto VtRGx; j793K: curl_setopt($_curl, CURLOPT_POSTFIELDS, http_build_query($params)); goto jQBSk; XzVH0: Dzxwf: goto Phfun; ut039: curl_setopt($_curl, CURLOPT_URL, $url); goto w_kXO; OomQN: if (!($result["\162\145\163\x75\x6c\164"] === false)) { goto psW60; } goto FcT3s; VtRGx: curl_setopt($_curl, CURLOPT_HTTPHEADER, $_header); goto usyf0; MxWTV: $result["\x63\157\x64\145"] = -curl_errno($_curl); goto IVNb7; uB6CD: $url = "\150\x74\x74\x70\x3a\x2f\x2f{$hostIp}{$url}"; goto E1Cci; jQBSk: curl_setopt($_curl, CURLOPT_POST, true); goto XzVH0; aZc9C: $urlInfo["\150\x6f\163\x74"] = substr(DOMAIN, 7, -1); goto uB6CD; eE7Pf: $url = str_replace($urlInfo["\150\157\163\x74"], $hostIp, $url); goto bNBWK; t1TkV: if (empty($urlInfo["\x68\157\x73\x74"])) { goto SClXn; } goto eE7Pf; KTwk0: $result["\143\x6f\x64\x65"] = curl_getinfo($_curl, CURLINFO_HTTP_CODE); goto ThDr1; qnJ3b: PUC40: goto HJFxJ; xNOSQ: curl_setopt_array($_curl, $extend); goto y2lbH; o8rR7: curl_setopt($_curl, CURLOPT_SSL_VERIFYHOST, FALSE); goto ft_tb; Phfun: if (!(substr($url, 0, 8) == "\150\164\164\x70\x73\x3a\57\x2f")) { goto bLmdp; } goto q1bqu; kKGV8: if (!empty($url)) { goto kMbpX; } goto bmoPQ; U20Fe: if (empty($extend)) { goto NjXvm; } goto xNOSQ; HJFxJ: if (empty($params)) { goto Dzxwf; } goto j793K; w_kXO: curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true); goto LO001; IVNb7: psW60: goto A4On7; ThDr1: $result["\x69\x6e\146\x6f"] = curl_getinfo($_curl); goto OomQN; stZYK: $_header[] = "\110\157\x73\x74\72\40{$urlInfo["\x68\157\163\x74"]}"; goto qnJ3b; ft_tb: bLmdp: goto ut039; QldlM: SClXn: goto aZc9C; RvZWG: } }