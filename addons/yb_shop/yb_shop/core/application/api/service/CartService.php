<?php
 namespace app\api\service; use think\Db; require_once BASE_ROOT . "\x63\157\x72\145\x2f\141\160\160\154\151\x63\141\x74\151\x6f\156\57\143\x6f\x6d\155\157\156\x2e\160\150\x70"; class CartService { private $g = "\x79\x62\x73\143\137\x67\x6f\157\x64\163"; private $c = "\171\142\163\x63\137\143\x61\162\x74"; private $i = "\x79\x62\x73\143\137\151\x6d\x61\x67\145\163"; private $s = "\x79\x62\163\x63\137\x67\157\157\x64\163\137\163\153\165"; public function getCart($data, $page = 1) { goto qdzCR; WxwXL: zVUDK: goto b1wZW; rGJhE: foreach ($cart_goods_list as $key => $value) { goto Y0dqP; xfbnm: dxgMl: goto cXwKs; O_IXB: O1ydA: goto N9gd2; e_GoZ: T4iu_: goto Qnq1o; Qnq1o: $cart_goods_list[$key]["\163\153\x75"] = Db::name($this->s)->where("\163\153\165\137\x69\144", $value["\163\153\x75\137\151\x64"])->field("\160\x72\151\x63\145\54\x73\x6b\165\x5f\x6e\141\x6d\145\54\163\164\x6f\x63\x6b")->find(); goto xfbnm; N9gd2: $goods_info = Db::name($this->g)->where("\x67\x6f\x6f\144\x73\x5f\x69\144", $value["\x67\x6f\x6f\x64\x73\x5f\x69\144"])->where("\x69\163\137\x64\x65\x6c", 0)->find(); goto ZMw_u; AP596: if (!$pic) { goto O1ydA; } goto G7FCG; Y0dqP: $pic = Db::name($this->i)->where("\151\155\x67\137\151\144", $value["\147\157\157\144\x73\137\151\x6d\x61\147\x65\163"])->field("\x69\155\147\x5f\143\157\x76\145\162\x2c\151\155\147\137\x63\x6f\166\145\x72\x5f\142\x69\x67\54\x69\x6d\x67\137\x63\157\x76\145\162\137\x6d\x69\144\54\151\155\x67\x5f\143\x6f\x76\x65\x72\x5f\x73\x6d\x61\154\154")->find(); goto AP596; G7FCG: $cart_goods_list[$key]["\x70\151\x63"] = $pic; goto O_IXB; ZQxBm: goto dxgMl; goto e_GoZ; ZMw_u: if (!empty($goods_info)) { goto T4iu_; } goto ZQxBm; cXwKs: } goto WxwXL; b1wZW: return $cart_goods_list; goto PM8r3; qdzCR: $cart_goods_list = null; goto bXksU; bXksU: $cart_goods_list = Db::name($this->c)->where($data)->page($page, PAGE_NUM)->order("\143\162\x65\x61\164\145\x5f\x74\151\x6d\145", "\x64\145\163\x63")->select(); goto rGJhE; PM8r3: } public function addCart($data) { goto MjTvF; twWiv: ml6L5: goto kKxdN; kKxdN: $rs = Db::name($this->c)->where("\x63\141\162\x74\137\151\x64", $info["\143\141\x72\x74\x5f\x69\x64"])->setInc("\x6e\165\x6d", $data["\x6e\165\155"]); goto Iaq9g; bH80O: goto XiCPk; goto twWiv; wQrRZ: return $rs; goto eeqYL; MjTvF: $info = Db::name($this->c)->where("\x73\153\x75\137\x69\x64", $data["\163\153\x75\x5f\151\144"])->where("\147\x6f\157\x64\x73\x5f\151\x64", $data["\147\x6f\x6f\144\x73\137\151\144"])->where("\x62\165\x79\x65\162\137\x69\144", $data["\142\x75\x79\145\162\x5f\x69\144"])->where("\x6d\143\150\x5f\x69\144", $data["\155\x63\x68\x5f\151\144"])->find(); goto TfsxY; Iaq9g: XiCPk: goto wQrRZ; e1LGl: $rs = Db::name($this->c)->insert($data); goto bH80O; TfsxY: if (!empty($info)) { goto ml6L5; } goto e1LGl; eeqYL: } public function cartNum($data) { $rs = Db::name($this->c)->where("\143\x61\x72\x74\x5f\151\144", $data["\143\141\x72\164\x5f\x69\x64"])->update(["\x6e\165\155" => $data["\x6e\x75\155"]]); return $rs; } public function delCart($data) { $rs = Db::name($this->c)->delete($data["\x63\x61\162\x74\x5f\x69\x64"]); return $rs; } }
