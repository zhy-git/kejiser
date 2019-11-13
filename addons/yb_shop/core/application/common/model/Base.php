<?php
 namespace app\common\model; use think\Model; use think\Db; use think\Validate; use think\Loader; class Base extends Model { protected $error = 0; protected $name; protected $rule = array(); protected $msg = array(); protected $Validate; public function __construct($data = array()) { goto B2W9k; EA5mx: $this->Validate = new Validate($this->rule, $this->msg); goto zt4pc; zt4pc: $this->Validate->extend("\156\x6f\137\x68\164\155\154\x5f\x70\141\162\x73\x65", function ($value, $rule) { return true; }); goto n5wHN; B2W9k: parent::__construct($data); goto EA5mx; n5wHN: } public function getEModel($names) { goto Q7KIi; RRiYl: foreach ($rs as $key => $v) { goto EspBK; DGLik: HxKAb: goto cagNN; c1HGy: if (!($v["\113\145\x79"] == "\120\x52\x49")) { goto HxKAb; } goto GONRB; cagNN: Vj2xs: goto eQS27; GONRB: $obj[$v["\x46\151\145\x6c\x64"]] = 0; goto DGLik; EspBK: $obj[$v["\x46\x69\145\x6c\x64"]] = $v["\x44\x65\x66\141\165\154\x74"]; goto c1HGy; eQS27: } goto wCiSi; UF_2q: return $obj; goto b3v6z; bTkl5: ZJ8lm: goto UF_2q; Q7KIi: $rs = Db::query("\163\150\x6f\167\40\143\157\x6c\165\155\156\163\x20\x46\x52\117\115\40\140" . config("\x64\x61\x74\x61\142\141\x73\145\x2e\x70\162\x65\146\151\170") . $names . "\140"); goto MfUg7; YGteT: if (!$rs) { goto ZJ8lm; } goto RRiYl; wCiSi: Ngww5: goto bTkl5; MfUg7: $obj = []; goto YGteT; b3v6z: } public function save($data = array(), $where = array(), $sequence = null) { goto K7MPM; GmCbo: if (!($retval !== false)) { goto QA_c6; } goto oCB18; g2dWS: if (empty($where)) { goto BQXaj; } goto amUBI; amUBI: if (!($retval == 0)) { goto E1KKF; } goto GmCbo; OUPib: QA_c6: goto qmJbq; qmJbq: E1KKF: goto kAig8; K7MPM: $data = $this->htmlClear($data); goto JFYxm; kAig8: BQXaj: goto CX9x3; CX9x3: return $retval; goto IY1lw; JFYxm: $retval = parent::save($data, $where, $sequence); goto g2dWS; oCB18: $retval = 1; goto OUPib; IY1lw: } public function ihtmlspecialchars($string) { goto xbNZ4; uY0Jk: goto vzztB; goto JitnJ; oCatu: $string = preg_replace("\57\x26\x61\x6d\x70\73\50\50\43\x28\144\x7b\x33\x2c\x35\175\174\x78\133\x61\55\146\x61\55\x66\x30\x2d\71\x5d\173\x34\x7d\51\x7c\133\x61\55\172\141\x2d\x7a\135\133\141\x2d\x7a\x30\x2d\x39\x5d\x7b\62\x2c\x35\x7d\51\73\x29\x2f", "\46\x5c\x31", str_replace(array("\x26", "\x22", "\74", "\x3e"), array("\46\x61\x6d\x70\73", "\46\x71\x75\157\x74\73", "\x26\154\x74\73", "\x26\x67\164\x3b"), $string)); goto uY0Jk; S02Al: vzztB: goto q0ISK; JitnJ: i7ZfB: goto xoqTM; xbNZ4: if (is_array($string)) { goto i7ZfB; } goto oCatu; xoqTM: foreach ($string as $key => $val) { $string[$key] = $this->ihtmlspecialchars($val); u0PwP: } goto K1XlQ; K1XlQ: S7pDR: goto S02Al; q0ISK: return $string; goto gCKzm; gCKzm: } protected function htmlClear($data) { goto qRuGL; H_l1K: $info = empty($rule) ? $this->Validate : $rule; goto Q8253; Q8253: foreach ($data as $k => $v) { goto E6gNf; KebeV: WQ3Ty: goto goi09; q_zPw: FcNcQ: goto kKOTy; E6gNf: if (empty($info)) { goto WtQwJ; } goto V6LoM; goi09: WtQwJ: goto GYRZr; GYRZr: dR82M: goto TZNmh; Be_c9: $data[$k] = $v; goto Ruy2e; JSgfb: $is_Specialchars = $this->is_Specialchars($info, $k); goto G1uIe; G1uIe: if ($is_Specialchars) { goto FcNcQ; } goto Be_c9; V6LoM: if (is_array($info)) { goto CxXBJ; } goto DtHWi; obxl0: y4aAm: goto KebeV; kKOTy: $data[$k] = $this->ihtmlspecialchars($v); goto obxl0; DtHWi: goto WQ3Ty; goto upHzN; Ruy2e: goto y4aAm; goto q_zPw; upHzN: CxXBJ: goto JSgfb; TZNmh: } goto q7A93; fBZjh: return $data; goto tkBys; q7A93: E95uB: goto fBZjh; qRuGL: $rule = $this->rule; goto H_l1K; tkBys: } protected function is_Specialchars($rule, $k) { goto thuHY; gh9tE: foreach ($rule as $key => $value) { goto zXZDA; hAmLu: BfOup: goto VB9_1; V9CvZ: goto pKE9I; goto ByjsU; h9dF0: if (strcasecmp($value, "\156\157\137\x68\x74\x6d\x6c\x5f\160\141\x72\163\x65") != 0) { goto DP31M; } goto ZV5r6; eeuda: q7a8r: goto hAmLu; bS2F2: $is_have = true; goto sumCb; zXZDA: if (!($key == $k)) { goto q7a8r; } goto h9dF0; sumCb: pKE9I: goto eeuda; ByjsU: DP31M: goto bS2F2; ZV5r6: $is_have = false; goto V9CvZ; VB9_1: } goto eomhk; thuHY: $is_have = true; goto gh9tE; eomhk: kEKvW: goto dxBec; dxBec: return $is_have; goto hq0zN; hq0zN: } public function startTrans() { Db::startTrans(); } public function commit() { Db::commit(); } public function rollback() { Db::rollback(); } public function pageQuery($page_index, $page_size, $condition, $order, $field) { goto YrhHP; dWOfN: return array("\144\x61\164\x61" => $list, "\164\157\x74\x61\x6c\x5f\x63\157\x75\156\164" => $count, "\x70\141\147\x65\x5f\x63\157\165\x6e\164" => $page_count); goto BVgI8; tduN2: if ($page_size == 0) { goto abpwX; } goto yRr3Z; mL5e_: $page_count = 1; goto klBIa; Vg8Kg: goto kt2XL; goto qW2uo; qXr7g: $list = $this->field($field)->where($condition)->order($order)->select(); goto mL5e_; qz8yI: $page_count = (int) ($count / $page_size) + 1; goto OBIaU; xMHHm: if ($count % $page_size == 0) { goto evrU6; } goto qz8yI; fxfj_: $list = $this->field($field)->where($condition)->order($order)->limit($start_row . "\54" . $page_size)->select(); goto xMHHm; gb1Ao: FsHKy: goto Vg8Kg; k8JEl: $page_count = $count / $page_size; goto gb1Ao; qW2uo: abpwX: goto qXr7g; klBIa: kt2XL: goto dWOfN; OBIaU: goto FsHKy; goto ruCRr; ruCRr: evrU6: goto k8JEl; YrhHP: $count = $this->where($condition)->count(); goto tduN2; yRr3Z: $start_row = $page_size * ($page_index - 1); goto fxfj_; BVgI8: } public function getQuerys($condition, $field, $order) { $list = $this->field($field)->where($condition)->order($order)->select(); return $list; } public function getAdminLisy($condition, $search_text) { $list = $this->alias("\x61")->join("\171\x62\164\143\137\x61\x64\155\x69\x6e\137\x72\x6f\x6c\145\40\162", "\x61\56\x72\157\x6c\145\137\x69\x64\x5f\x61\x72\x72\141\x79\75\162\56\x72\x6f\154\x65\x5f\151\144")->field("\x61\x2e\x75\163\x65\x72\x5f\x6e\x61\155\x65\x2c\x61\x2e\151\x64\x2c\x61\56\151\x73\x5f\x61\144\155\151\x6e\54\x61\56\141\x64\155\x69\156\137\x73\x74\141\x74\x75\x73\54\141\56\x69\156\x66\157\x2c\141\56\x63\x72\145\141\164\145\x5f\x74\151\155\x65\54\162\56\x72\157\154\x65\137\x6e\x61\x6d\x65")->where($condition)->paginate(20, false, $config = ["\161\165\145\x72\x79" => ["\x73\x65\x61\162\x63\150\x5f\164\145\x78\164" => $search_text]]); return $list; } public function getPageLisy($condition, $search_text, $order = '') { goto njyYp; RXdUz: if ($order == '') { goto nxc8a; } goto NAswi; GNJPG: return $list; goto Rhl4l; yiHSy: $url = explode("\x3d\57", $url); goto f2uIu; njyYp: $url = request()->query(); goto yiHSy; vrkj6: nxc8a: goto UP4Dn; xmaUv: $url = "\57" . $url[0]; goto RXdUz; NAswi: $list = $this->where($condition)->order($order)->paginate(20, false, $config = ["\x71\165\145\x72\x79" => ["\163" => $url, "\x73\145\x61\x72\x63\x68\x5f\164\x65\x78\x74" => $search_text]]); goto tEL0_; ii1ox: J1p1O: goto GNJPG; f2uIu: $url = explode("\46", $url[1]); goto xmaUv; tEL0_: goto J1p1O; goto vrkj6; UP4Dn: $list = $this->where($condition)->paginate(20, false, $config = ["\x71\x75\x65\x72\x79" => ["\163" => $url, "\163\145\141\x72\143\150\137\164\145\x78\x74" => $search_text]]); goto ii1ox; Rhl4l: } public function getPageLisy1($condition, $order = '') { goto fvAK8; YVT5R: goto dTn7M; goto usVWo; TzCpw: $list = $this->where($condition)->order($order)->select(); goto YVT5R; ZY30u: $list = $this->where($condition)->select(); goto sL2Jv; sL2Jv: dTn7M: goto Mgi9K; NVsQJ: if ($order == '') { goto RdNZH; } goto TzCpw; fvAK8: $url = request()->query(); goto SR961; SR961: $url = explode("\x3d\x2f", $url); goto vKm1g; Mgi9K: return $list; goto DTCbi; usVWo: RdNZH: goto ZY30u; Tup5q: $url = "\57" . $url[0]; goto NVsQJ; vKm1g: $url = explode("\46", $url[1]); goto Tup5q; DTCbi: } public function viewPageQuery($viewObj, $page_index, $page_size, $condition, $order) { goto CB5nc; l3Imb: $start_row = $page_size * ($page_index - 1); goto EmySP; EmySP: $list = $viewObj->where($condition)->order($order)->limit($start_row . "\x2c" . $page_size)->select(); goto Q8bJ8; CB5nc: if ($page_size == 0) { goto bvLXh; } goto l3Imb; mOyeL: $list = $viewObj->where($condition)->order($order)->select(); goto jcBx6; HMtv_: return $list; goto hIwLJ; hL_z_: bvLXh: goto mOyeL; jcBx6: xMt8a: goto HMtv_; Q8bJ8: goto xMt8a; goto hL_z_; hIwLJ: } public function viewCount($viewObj, $condition) { $count = $viewObj->where($condition)->count(); return $count; } public function setReturnList($list, $count, $page_size) { goto Zlpl_; jsqIA: wF0Jx: goto N7n4a; Zlpl_: if ($page_size == 0) { goto fxxSS; } goto otvhB; otvhB: if ($count % $page_size == 0) { goto wF0Jx; } goto wRx4_; HrzUT: goto dlrry; goto WT0nz; ssbrl: $page_count = 1; goto LWpHv; U2U8h: return array("\x64\x61\164\x61" => $list, "\164\x6f\164\141\x6c\137\x63\157\x75\x6e\164" => $count, "\x70\x61\x67\145\137\143\157\165\x6e\164" => $page_count); goto cb_Fc; LWpHv: dlrry: goto U2U8h; N7n4a: $page_count = $count / $page_size; goto T_1IX; wRx4_: $page_count = (int) ($count / $page_size) + 1; goto qzmqt; WT0nz: fxxSS: goto ssbrl; qzmqt: goto zrbiu; goto jsqIA; T_1IX: zrbiu: goto HrzUT; cb_Fc: } public function getInfo($condition = '', $field = "\x2a") { $info = Db::name($this->name)->where($condition)->field($field)->find(); return $info; } public function getCount($condition) { $count = Db::name($this->name)->where($condition)->count(); return $count; } public function getSum($condition, $field) { goto yu0vu; yu0vu: $sum = Db::name($this->name)->where($condition)->sum($field); goto qwS9D; qwS9D: if (empty($sum)) { goto N2lVe; } goto EbSiz; SSMER: U5ZXu: goto jufQJ; EbSiz: return $sum; goto oxYHa; Iuq1L: return 0; goto SSMER; eL6ew: N2lVe: goto Iuq1L; oxYHa: goto U5ZXu; goto eL6ew; jufQJ: } public function getMax($condition, $field) { goto BRxol; BRxol: $max = Db::name($this->name)->where($condition)->max($field); goto xRrC4; EFp7c: zG3Qf: goto Sf1MA; oJ0zw: return 0; goto EFp7c; xRrC4: if (empty($max)) { goto jlP2u; } goto Svosr; hQuju: jlP2u: goto oJ0zw; E9ReH: goto zG3Qf; goto hQuju; Svosr: return $max; goto E9ReH; Sf1MA: } public function getMin($condition, $field) { goto u49ku; brwYp: D_28b: goto uhr50; u49ku: $min = Db::name($this->name)->where($condition)->min($field); goto T_50G; DwsSC: iic3j: goto nV2ix; Z3I5V: return $min; goto hMQGX; T_50G: if (empty($min)) { goto iic3j; } goto Z3I5V; nV2ix: return 0; goto brwYp; hMQGX: goto D_28b; goto DwsSC; uhr50: } public function getAvg($condition, $field) { goto rUMBZ; XqdAM: f3ip4: goto mbmZ3; AWGuc: k2moe: goto TDE4K; TDE4K: return 0; goto XqdAM; HQM83: if (empty($avg)) { goto k2moe; } goto q81Ne; rUMBZ: $avg = Db::name($this->name)->where($condition)->avg($field); goto HQM83; q81Ne: return $avg; goto UzA6b; UzA6b: goto f3ip4; goto AWGuc; mbmZ3: } public function getFirstData($condition, $order) { goto D_1D6; srIC2: return $data[0]; goto laZEf; G7vDe: if (!empty($data)) { goto Bubiw; } goto bYLLK; laZEf: wNRCN: goto YAaGz; UWp1Z: goto wNRCN; goto XXliJ; bYLLK: return ''; goto UWp1Z; D_1D6: $data = Db::name($this->name)->where($condition)->order($order)->limit(1)->select(); goto G7vDe; XXliJ: Bubiw: goto srIC2; YAaGz: } public function ModifyTableField($pk_name, $pk_id, $field_name, $field_value) { goto AxY99; AxY99: $data = array($field_name => $field_value); goto FcvLD; nSLJj: return $res; goto kLbvB; FcvLD: $res = $this->save($data, [$pk_name => $pk_id]); goto nSLJj; kLbvB: } }
