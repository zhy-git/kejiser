<?php
 namespace app\admin\controller; use app\admin\service\ArlikiService; use think\Db; class Arliki extends Base { public function __construct() { parent::__construct(); } public function exp_load() { goto k0uKI; qchmF: $json && ($data = json_encode($data)); goto Iehys; SeK2h: $this->assign("\x6c\x69\x73\x74", $data); goto HlWcq; nRv31: w4j0u: goto vYlKh; HR6qn: return view(); goto zXN1M; UTkAN: $show = request()->param("\x73\x68\157\167", false); goto Fiu1O; Fiu1O: if (!empty($no)) { goto w4j0u; } goto gI27f; gI27f: $data["\x64\141\164\141"] = "\xe5\x8d\x95\345\x8f\267\345\xbc\202\345\270\xb8\54\xe8\257\267\xe6\xa0\270\345\256\x9e"; goto TwUVn; HlWcq: $this->assign("\143\x6f\x64\145", $data["\x63\x6f\x64\145"]); goto HR6qn; TwUVn: $data["\143\x6f\x64\x65"] = 0; goto LCap8; vYlKh: $ser = new ArlikiService($this->bus_id); goto UvBbV; Iehys: return $data; goto RGBKf; SLBIo: $json = request()->param("\x4a\123\x4f\x4e", false); goto UTkAN; MjbXm: if (!$show) { goto tyc2A; } goto SeK2h; LCap8: goto DrCM9; goto nRv31; UvBbV: $data = $ser->exp_load($no); goto beWk4; zXN1M: tyc2A: goto qchmF; beWk4: DrCM9: goto MjbXm; k0uKI: $no = request()->param("\x6e\x6f", ''); goto SLBIo; RGBKf: } public function send_sms() { goto mkcUr; vOTG0: $param["\x63\x6f\144\x65"] = $date; goto ysKZ1; mkcUr: $date = request()->param("\x63\x6f\156\x74\145\x6e\164", ''); goto DMaR9; kBCwY: $res = $ser->send_sms($param, $phone); goto csIUK; ysKZ1: $ser = new ArlikiService($this->bus_id); goto kBCwY; DMaR9: $phone = request()->param("\x70\x68\157\156\145", ''); goto vOTG0; csIUK: } public function get_barcode($data, $width = 200, $height = 200) { $str = "\74\x64\x69\166\40\x69\x64\x3d\42\142\x61\162\x5f\143\157\x64\145\42\x3e\74\x2f\144\x69\x76\x3e\x3c\163\143\162\x69\x70\164\76\44\x28\x66\x75\x6e\x63\x74\151\x6f\x6e\50\x29\x7b\x24\50\x22\43\x62\141\x72\137\x63\x6f\x64\145\x22\x29\x2e\161\162\x63\157\x64\145\50\173\167\151\x64\x74\150\72" . $width . "\x2c\150\x65\x69\147\x68\164\72" . $height . "\x2c\x74\145\170\164\x3a\42" . $data . "\x22\x7d\51\73\x7d\51\73\74\57\x73\143\162\x69\x70\164\76"; return $str; } public function get_qrcode($data, $width = 1, $height = 20, $font_size = 10, $bg = "\x23\146\146\146", $line_color = "\43\60\x30\x30", $show_value = true, $margin = 0) { goto Ogg9v; WhuEi: $str = "\x3c\x69\x6d\147\40\163\162\143\75\x22\42\x20\x69\144\75\x22\161\x72\x5f\143\157\x64\x65\42\x3e\x3c\x73\143\162\x69\x70\164\76\166\x61\x72\x20\x6f\x70\x74\x69\x6f\x6e\163\40\75\40\173\x66\157\x72\x6d\141\164\72\x20\42\x43\117\104\x45\61\x32\70\42\54\x77\x69\144\x74\150\x3a" . $width . "\54\x68\145\151\x67\150\x74\72" . $height . "\54\144\151\163\x70\154\141\171\x56\x61\x6c\x75\x65\x3a" . $show_value . "\54\x74\145\170\164\x3a\42\42\54\x66\157\156\164\117\x70\x74\151\157\156\x73\72\x22\x22\x2c\146\x6f\156\164\72\42\xe5\276\256\xe8\xbd\xaf\xe9\x9b\205\351\xbb\221\42\x2c\164\145\170\164\101\154\151\147\x6e\72\x22\x63\145\156\164\145\x72\x22\x2c\164\x65\170\164\x50\x6f\163\151\x74\x69\157\156\72\42\142\x6f\x74\x74\157\155\42\x2c\164\x65\170\x74\x4d\x61\162\147\151\x6e\x3a\60\54\x66\157\x6e\164\x53\151\x7a\x65\x3a" . $font_size . "\x2c\x62\141\x63\153\147\162\x6f\165\156\144\x3a\x22" . $bg . "\x22\x2c\x6c\151\156\145\103\157\x6c\x6f\x72\72\42" . $line_color . "\42\54\155\141\x72\147\151\x6e\72" . $margin . "\40\175\73\44\x28\x66\x75\156\x63\x74\x69\x6f\x6e\50\x29\173\44\x28\x22\43\161\162\137\143\157\x64\145\x22\x29\x2e\112\x73\102\x61\x72\143\x6f\x64\x65\x28\42" . $data . "\x22\54\157\x70\x74\x69\157\x6e\x73\x29\73\x7d\x29\x3b\x3c\x2f\163\143\162\x69\160\x74\x3e"; goto tN3F7; Ogg9v: if ($show_value) { goto TeU13; } goto IRFIG; tN3F7: return $str; goto nKVbc; qi3SY: TeU13: goto WhuEi; IRFIG: $show_value = "\146\x61\x6c\x73\x65"; goto qi3SY; nKVbc: } }