<?php
 namespace app\admin\service; class GoodsBrand extends Base { function __construct() { parent::__construct(); $this->goods_brand = new \app\common\model\GoodsBrand(); } public function getGoodsBrandList($condition = '', $search_text = '', $order = '') { $list = $this->goods_brand->getPageLisy($condition, $search_text, $order); return $list; } public function getGoodsBrandAll($condition = '', $field = "\x2a", $order = '') { $list = $this->goods_brand->getQuerys($condition, $field, $order); return $list; } public function addOrUpdateGoodsBrand($brand_id, $brand_name, $brand_initial, $brand_pic, $brand_recommend, $mch_id) { goto Nj_pX; cREwr: return $res; goto SAuZM; Nj_pX: $data = array("\142\162\141\156\144\137\156\141\155\x65" => $brand_name, "\x62\x72\x61\x6e\144\x5f\151\x6e\151\164\151\x61\x6c" => $brand_initial, "\142\162\141\156\144\137\160\x69\143" => $brand_pic, "\x62\x72\x61\156\x64\x5f\x72\145\x63\x6f\155\x6d\145\x6e\x64" => $brand_recommend, "\163\x6f\x72\x74" => 0, "\143\x72\x65\141\164\x65\x5f\164\x69\x6d\x65" => time(), "\x6d\x63\150\137\x69\144" => $mch_id); goto Xi02f; SAuZM: goto AVg2P; goto KR_E5; KR_E5: HDAN_: goto ydftG; Xi02f: if ($brand_id == '') { goto HDAN_; } goto DcYvV; DUlv9: return $this->goods_brand->brand_id; goto imFzn; imFzn: AVg2P: goto N_56t; DcYvV: $res = $this->goods_brand->save($data, ["\x62\162\141\x6e\144\x5f\x69\x64" => $brand_id]); goto cREwr; ydftG: $res = $this->goods_brand->save($data); goto DUlv9; N_56t: } public function deleteGoodsBrand($brand_id_array) { $res = $this->goods_brand->destroy($brand_id_array); return $res; } public function getGoodsBrandInfo($brand_id, $field = "\x2a") { $info = $this->goods_brand->getInfo(array("\x62\162\141\x6e\x64\x5f\x69\144" => $brand_id), $field); return $info; } }
