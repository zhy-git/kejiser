<?php
 namespace app\admin\service; use app\common\model\Images; class GoodsCate extends Base { private $goods_cate; protected $taobao_cate = false; function __construct() { parent::__construct(); $this->goods_cate = new \app\common\model\GoodsCate(); } public function getGoodsGroupList($condition = '') { goto QYjSp; Tcju0: s6zgG: goto epZSx; epZSx: return $list; goto Lqnxd; J25ia: foreach ($list as $k => $v) { goto JnLY2; bFmfV: $pic_info["\x70\151\x63\x5f\143\x6f\166\x65\x72"] = ''; goto IiTW5; YWifb: $pic_info = $img->get($v["\147\x72\157\x75\160\137\x70\151\x63"]); goto e8Ibr; kpNp2: DcBR2: goto HY7AX; IiTW5: if (empty($v["\x67\162\157\165\160\x5f\x70\151\143"])) { goto g8qqF; } goto YWifb; nklOS: $list[$k]["\160\x69\x63\164\165\x72\x65"] = $pic_info; goto kpNp2; zqMau: $pic_info = array(); goto bFmfV; JnLY2: $img = new Images(); goto zqMau; e8Ibr: g8qqF: goto nklOS; HY7AX: } goto Tcju0; QYjSp: $list = $this->goods_cate->getQuerys($condition, "\52", ''); goto J25ia; Lqnxd: } public function getFormatGoodsCategoryList($mch_id) { $one_list = $this->getCategoryTreeUseInShopIndex($mch_id); return $one_list; } public function getCategoryTreeUseInShopIndex($mch_id) { goto hlAha; IaN5H: if (!$this->taobao_cate) { goto fvkQt; } goto Fqr4c; plZxg: if (!($i < count($tao))) { goto gpQeQ; } goto Io9t3; xJ3eC: Md0s5: goto oNb3R; Pm8BX: return $goods_category_one; goto UPrSH; TDxxD: fvkQt: goto Xd53G; bfMAz: $goods_category_one = $goods_category_model->getQuerys(["\x6c\x65\166\145\x6c" => 1, "\155\143\x68\137\x69\x64" => $mch_id], "\x63\x61\164\145\x5f\151\144\x2c\x63\141\164\145\x5f\x6e\x61\x6d\x65\54\151\x73\x5f\x76\x69\x73\151\142\x6c\145\54\x73\x68\x6f\x72\x74\137\156\141\155\145\x2c\x70\x69\144\54\x63\x61\x74\x65\137\160\151\x63\x2c\163\x6f\162\x74", "\163\157\162\164"); goto IaN5H; LRGIg: gpQeQ: goto AbVcP; o4wD8: if (empty($tao)) { goto Q4Qef; } goto gNoKP; GZ16a: X9Go4: goto Pm8BX; beyqD: foreach ($goods_category_one as $k_cat_one => $v_cat_one) { goto e5c6v; FdcGo: hVcYX: goto SgrBk; jwRQs: $v_cat_one["\143\x6f\x75\156\x74"] = count($goods_category_two_list); goto b1tE6; DKAjF: ZiTvQ: goto FdcGo; SgrBk: $v_cat_one["\143\150\151\154\144\x5f\x6c\x69\x73\164"] = $goods_category_two_list; goto eNexK; b1tE6: if (empty($goods_category_two_list)) { goto hVcYX; } goto nsr3V; nsr3V: foreach ($goods_category_two_list as $k_cat_two => $v_cat_two) { goto crkED; crkED: $cat_three_list = $goods_category_model->getQuerys(["\154\x65\x76\x65\154" => 3, "\x70\x69\144" => $v_cat_two["\x63\x61\x74\x65\137\151\x64"]], "\143\x61\164\x65\x5f\151\x64\54\143\x61\x74\x65\137\x6e\141\155\145\x2c\x73\150\157\162\164\137\156\x61\x6d\x65\54\x70\151\144\x2c\x69\x73\137\x76\151\x73\151\x62\154\145\54\x63\x61\x74\x65\137\160\x69\143\x2c\163\x6f\x72\164", "\x73\157\x72\x74"); goto l7Ojk; l7Ojk: $v_cat_two["\143\x6f\165\x6e\x74"] = count($cat_three_list); goto YVpob; cpz84: pb_zf: goto IMsYV; YVpob: $v_cat_two["\143\x68\x69\x6c\144\x5f\154\x69\163\164"] = $cat_three_list; goto cpz84; IMsYV: } goto DKAjF; e5c6v: $goods_category_two_list = $goods_category_model->getQuerys(["\154\145\166\x65\x6c" => 2, "\160\x69\144" => $v_cat_one["\x63\x61\164\x65\137\151\144"]], "\x63\141\x74\145\x5f\x69\144\54\x63\x61\164\x65\x5f\x6e\141\x6d\145\54\x73\x68\x6f\x72\x74\x5f\x6e\x61\x6d\x65\x2c\160\x69\144\54\151\x73\137\166\x69\x73\x69\x62\x6c\x65\54\143\x61\x74\x65\137\160\151\x63\x2c\163\157\x72\164", "\x73\157\162\x74"); goto jwRQs; eNexK: Gh5kl: goto H0fPE; H0fPE: } goto zl9iS; gNoKP: $i = 0; goto QLQRL; Xd53G: if (empty($goods_category_one)) { goto X9Go4; } goto beyqD; oNb3R: $i++; goto Yqc5o; hlAha: $goods_category_model = new \app\common\model\GoodsCate(); goto bfMAz; QLQRL: kpljI: goto plZxg; Io9t3: array_push($goods_category_one, $tao[$i]); goto xJ3eC; Yqc5o: goto kpljI; goto LRGIg; AbVcP: Q4Qef: goto TDxxD; Fqr4c: $tao = $goods_category_model->getQuerys(["\154\145\166\145\154" => 1, "\155\143\150\137\x69\x64" => "\55\61"], "\x63\x61\164\145\137\x69\144\x2c\x63\141\x74\x65\137\x6e\141\x6d\145\x2c\x69\x73\x5f\x76\x69\x73\151\142\154\145\54\x73\150\x6f\x72\x74\137\x6e\141\155\x65\x2c\x70\x69\144\54\143\141\x74\145\x5f\x70\x69\x63\x2c\x73\157\162\164", "\163\157\162\x74"); goto o4wD8; zl9iS: z14FF: goto GZ16a; UPrSH: } public function ModifyGoodsCategoryField($category_id, $field_name, $field_value) { $res = $this->goods_cate->ModifyTableField("\x63\141\x74\145\x5f\x69\x64", $category_id, $field_name, $field_value); return $res; } public function getGoodsCategoryTree($pid, $mch_id) { goto RTXTN; RTXTN: $list = array(); goto H9viZ; pQG13: fuR6h: goto pnBcJ; H9viZ: $one_list = $this->getGoodsCategoryListByParentId($pid, $mch_id); goto ha7J2; vJIn6: return $list; goto ZUzKV; pnBcJ: $list = $one_list; goto vJIn6; ha7J2: foreach ($one_list as $k1 => $v1) { goto mB5n3; mB5n3: $two_list = array(); goto I6QRH; bL0xv: KBjb2: goto cO6qs; mjMpV: $one_list[$k1]["\143\150\x69\x6c\x64\x5f\154\151\163\x74"] = $two_list; goto bL0xv; I6QRH: $two_list = $this->getGoodsCategoryListByParentId($v1["\143\x61\164\145\137\x69\144"], $mch_id); goto mjMpV; cO6qs: } goto pQG13; ZUzKV: } public function InfiniteCate($cate_id) { goto H51E7; KQ4NX: $cate_list = $cate->where("\x63\141\x74\x65\137\x69\x64", $cate_list["\160\151\x64"])->find(); goto GbYFz; ggP6g: tKhNY: goto uyeRc; epq7P: goto tKhNY; goto lGen9; xAdIC: if ($cate_list["\160\x69\144"] == 0) { goto iwwPL; } goto KQ4NX; TfF4G: return $cate_list["\143\141\164\145\x5f\151\x64"]; goto HK1_H; SFjET: if ($cate_list["\160\151\144"] == 0) { goto z209c; } goto EHoBO; ApVoM: uubKC: goto epq7P; pEdh_: iwwPL: goto yMAJA; H51E7: $cate = new \app\common\model\GoodsCate(); goto FWCJL; oq0sx: goto uubKC; goto pEdh_; FWCJL: $cate_list = $cate->where("\x63\141\164\145\137\x69\x64", $cate_id)->find(); goto SFjET; HK1_H: WACfD: goto oq0sx; EHoBO: $cate_list = $cate->where("\x63\141\164\x65\137\151\x64", $cate_list["\x70\x69\x64"])->find(); goto xAdIC; lGen9: z209c: goto vIqk7; yMAJA: return $cate_list["\143\141\164\x65\x5f\x69\x64"]; goto ApVoM; GbYFz: if (!($cate_list["\x70\151\x64"] == 0)) { goto WACfD; } goto TfF4G; vIqk7: return $cate_list["\x63\x61\x74\x65\x5f\151\144"]; goto ggP6g; uyeRc: } public function getGoodsCategoryListByParentId($pid, $mch_id) { goto g1f3y; y3v5i: $parent_id = $list["\x64\x61\164\x61"][$i]["\x63\141\x74\x65\x5f\x69\144"]; goto AfCJa; AfCJa: $child_list = $this->getGoodsCategoryList(1, 1, "\160\151\144\75" . $parent_id, "\x70\x69\x64\x2c\x73\x6f\x72\x74"); goto ewPvh; qOoaI: $i++; goto oRCxg; oRCxg: goto YAMyN; goto s_m0t; PMP2t: if (!($i < count($list["\144\x61\x74\x61"]))) { goto sfjsZ; } goto y3v5i; W8krR: $list["\x64\x61\164\x61"][$i]["\151\x73\x5f\x70\x61\162\145\156\x74"] = 1; goto IR2rN; IR2rN: aY3ct: goto K9D8c; ewPvh: if (!empty($child_list) && $child_list["\164\157\164\141\154\x5f\x63\x6f\x75\156\x74"] > 0) { goto gPLQ6; } goto ETthW; I3lYD: $list = $this->getGoodsCategoryList(1, 0, $where, "\160\x69\x64\54\x73\x6f\x72\x74"); goto u30MQ; ewUm8: YAMyN: goto PMP2t; K9D8c: F2C0E: goto qOoaI; vnZWo: goto aY3ct; goto XpQQj; g1f3y: $where["\160\x69\x64"] = array("\x65\x71", $pid); goto xs9SU; ETthW: $list["\x64\x61\x74\141"][$i]["\151\x73\137\x70\x61\x72\x65\156\x74"] = 0; goto vnZWo; Uvyf6: P8Ror: goto noj9d; s_m0t: sfjsZ: goto Uvyf6; u8jfm: $i = 0; goto ewUm8; xs9SU: $where["\x6d\x63\150\137\151\x64"] = array("\145\x71", $mch_id); goto I3lYD; u30MQ: if (empty($list)) { goto P8Ror; } goto u8jfm; XpQQj: gPLQ6: goto W8krR; noj9d: return $list["\144\141\x74\x61"]; goto HfM7K; HfM7K: } public function getGoodsCategoryList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = "\x2a") { $list = $this->goods_cate->pageQuery($page_index, $page_size, $condition, $order, $field); return $list; } public function addOrEditGoodsCategory($cate_id, $cate_name, $short_name, $pid, $is_visible, $keywords = '', $description = '', $sort = 0, $cate_pic, $mch_id) { goto D1Suh; iE6F0: $res = $this->goods_cate->getError(); goto YNErm; GP9YR: NnCgk: goto u88vC; vWK1e: gUuFE: goto IYq0n; LYv7a: if ($res !== false) { goto NnCgk; } goto iE6F0; Kdyo3: $res = $this->goods_cate->cate_id; goto vWK1e; ws_NA: goto pjnBt; goto yPleP; qDmOx: goto gUuFE; goto M3L3j; u88vC: $this->goods_cate->save(["\x6c\x65\x76\x65\154" => $level + 1], ["\160\x69\144" => $cate_id]); goto kSzap; qlnId: return $res; goto Gzp3V; YNErm: goto TefYn; goto GP9YR; gSkuH: $res = $this->goods_cate->getError(); goto qDmOx; HMLZ2: if (empty($find)) { goto m2Ep0; } goto QGu1_; M3L3j: LnbRM: goto Kdyo3; kSzap: return $res; goto MrdNh; D1Suh: if ($pid == 0) { goto OpzI8; } goto YsBoi; QGu1_: return "\345\xb7\xb2\346\234\211\xe6\255\xa4\xe5\x88\x86\347\xb1\273\54\xe6\x97\240\xe6\xb3\225\351\207\x8d\345\xa4\x8d\345\x88\233\345\xbb\xba"; goto VA0Ch; XXWVp: if ($result) { goto LnbRM; } goto gSkuH; QaqT2: qJOX7: goto leFIt; leFIt: $data = array("\143\141\164\145\137\156\141\155\x65" => $cate_name, "\163\x68\x6f\x72\164\137\x6e\141\x6d\x65" => $short_name, "\160\x69\144" => $pid, "\154\x65\x76\145\154" => $level, "\x69\163\x5f\166\x69\x73\x69\142\154\145" => $is_visible, "\x6b\145\x79\167\157\162\x64\x73" => $keywords, "\144\x65\x73\x63\162\x69\160\x74\151\157\x6e" => $description, "\163\157\x72\164" => $sort, "\143\141\x74\145\x5f\x70\151\143" => $cate_pic, "\x63\162\x65\141\164\x65\137\x74\151\x6d\145" => time(), "\x6d\x63\150\137\151\x64" => $mch_id); goto TwqgU; yPleP: DYCn8: goto oMbbD; TwqgU: $dd = array("\143\141\x74\x65\x5f\x6e\x61\155\145" => $cate_name, "\160\151\x64" => $pid, "\x6c\145\166\x65\154" => $level, "\x6d\143\x68\137\151\x64" => $mch_id); goto L7dW4; mKV1_: goto qJOX7; goto Q7EuQ; IYq0n: pjnBt: goto qlnId; OcSN3: $res = $this->goods_cate->save($data, ["\143\x61\164\145\137\x69\144" => $cate_id]); goto LYv7a; KMJUJ: $level = 1; goto QaqT2; MrdNh: TefYn: goto ws_NA; oMbbD: $find = $this->goods_cate->where($dd)->find(); goto HMLZ2; L7dW4: if ($cate_id == 0) { goto DYCn8; } goto OcSN3; VA0Ch: m2Ep0: goto VJZpo; Q7EuQ: OpzI8: goto KMJUJ; YsBoi: $level = $this->getGoodsCategoryDetail($pid)["\154\145\166\145\x6c"] + 1; goto mKV1_; VJZpo: $result = $this->goods_cate->save($data); goto XXWVp; Gzp3V: } public function getGoodsCategoryDetail($pid) { $res = $this->goods_cate->get($pid); return $res; } public function deleteGoodsCategory($cate_id, $mch_id) { goto GdDCD; XsTrq: if (!empty($sub_list)) { goto daeX8; } goto VLWv3; X38hc: $res = SYSTEM_DELETE_FAIL; goto Uny3k; GdDCD: $sub_list = $this->getGoodsCategoryListByParentId($cate_id, $mch_id); goto XsTrq; hCM0B: goto ryxXs; goto wGiBr; OAxY2: return $res; goto nf0sa; VLWv3: $res = $this->goods_cate->destroy($cate_id); goto hCM0B; wGiBr: daeX8: goto X38hc; Uny3k: ryxXs: goto OAxY2; nf0sa: } public function getGoodsCateV1($condition = '', $field = "\52", $order = '') { $list = $this->goods_cate->getQuerys($condition, $field, $order); return $list; } }
