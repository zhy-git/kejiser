<?php
 namespace app\admin\service; use app\common\model\ExpressCompany; use app\common\model\Order; use app\common\model\OrderGoods; use app\common\model\Images; use app\common\model\Area; use think\Db; class OrderService extends Base { function __construct() { parent::__construct(); $this->order = new Order(); } public function orderDelivery($order_id, $express_name, $shipping_type, $express_company_id, $express_no) { goto AHGsZ; Yig3L: $retval = $order_express->delivey($order_id, $express_name, $shipping_type, $express_company_id, $express_no); goto vlJ25; cjBWi: return $retval; goto DYYQk; AuT2U: YeSCs: goto cjBWi; mE8cL: $params = ["\157\162\x64\145\x72\137\151\144" => $order_id, "\157\x72\144\x65\162\x5f\147\x6f\x6f\x64\163\137\x69\144\x5f\141\x72\x72\x61\x79" => '', "\x65\170\160\x72\145\x73\163\137\156\x61\x6d\x65" => $express_name, "\163\x68\151\160\x70\151\156\x67\x5f\164\171\x70\145" => $shipping_type, "\x65\x78\160\x72\145\163\x73\137\x63\157\155\160\x61\x6e\x79\137\151\x64" => $express_company_id, "\x65\x78\x70\162\145\163\x73\137\156\x6f" => $express_no]; goto AuT2U; AHGsZ: $order_express = new OrderExpress(); goto Yig3L; vlJ25: if (!$retval) { goto YeSCs; } goto mE8cL; DYYQk: } public function updateOrderReceiveDetail($order_id, $receiver_mobile, $receiver_province, $receiver_city, $receiver_district, $receiver_address, $receiver_zip, $receiver_name) { goto sBIBO; Y8Zwu: $retval = $order->save($data, ["\x6f\x72\144\145\162\x5f\x69\x64" => $order_id]); goto zFoTn; Vfntd: $data = array("\162\x65\143\145\151\166\x65\x72\x5f\155\157\x62\151\154\x65" => $receiver_mobile, "\162\145\143\x65\151\166\145\x72\x5f\x61\x72\x65\x61" => $receiver_district, "\162\145\143\x65\x69\166\145\162\137\x61\x64\144\162\x65\x73\163" => $receiver_address, "\x72\145\143\x65\151\166\x65\x72\137\172\x69\x70" => $receiver_zip, "\162\x65\x63\x65\x69\x76\145\x72\137\156\x61\155\x65" => $receiver_name); goto Y8Zwu; zFoTn: return $retval; goto uKhTN; qM7SS: $receiver_district = $receiver_city; goto IIWSb; TP71b: if (!($receiver_district == "\55\x31")) { goto xPxnY; } goto qM7SS; sBIBO: $order = new Order(); goto TP71b; IIWSb: xPxnY: goto Vfntd; uKhTN: } public function getOrderList($condition = '', $search_text = '', $order = '') { goto oYxn9; L7poM: l3O15: goto sbC7b; pQL_h: foreach ($order_list as $k => $v) { goto Yz50F; h3pFE: $county_info = $area->getInfo(array("\x69\144" => $v["\162\145\x63\x65\x69\166\145\162\137\x61\162\145\141"]), "\x2a"); goto XS9nt; x5XOe: ONwLw: goto bjq2I; Y2ytw: $county_name = ''; goto mXelb; WpnMl: $order_list[$k]["\145\170\160\x72\145\163\x73\x5f\143\157\155\x70\141\156\x79"] = $a["\x65\x78\160\162\x65\163\x73\x5f\x63\157\155\x70\141\x6e\171"]; goto V0TRD; EzmGx: $order_list[$k]["\x6f\160\145\162\x61\x74\151\x6f\156"] = ''; goto PIwIV; WKiy3: $order_list[$k]["\162\145\x63\145\x69\x76\145\x72\x5f\x63\151\x74\171\137\156\x61\x6d\x65"] = $city_name; goto vTJsK; vBDKm: $city_name = $city_info["\x6e\141\155\x65"]; goto YW7Gm; GX0E3: $order_item_list = $order_item->where(["\157\x72\144\145\162\137\x69\144" => $v["\x6f\x72\144\x65\162\x5f\151\x64"]])->select(); goto Y2ytw; Yz50F: $order_item = new OrderGoods(); goto GX0E3; e4k12: $county_name = $county_info["\x6e\141\155\x65"]; goto vBDKm; i3clF: $province_name = ''; goto qvMOL; mXelb: $city_name = ''; goto i3clF; u8XsM: foreach ($order_status as $k_status => $v_status) { goto D8HNy; plmCl: toVnb: goto PwDoZ; m7dNR: $order_list[$k]["\x73\x74\141\x74\x75\x73\137\156\x61\x6d\x65"] = $v_status["\x73\164\141\164\165\x73\137\156\x61\155\x65"]; goto plmCl; D8HNy: if (!($v_status["\x73\164\141\164\165\163\137\x69\144"] == $v["\157\x72\144\145\x72\x5f\163\x74\141\164\165\x73"])) { goto toVnb; } goto m7dNR; PwDoZ: k2DF0: goto PEnTq; PEnTq: } goto q2eEJ; qvMOL: $area = new Area(); goto h3pFE; tgOnM: if (!(count($county_info) > 0)) { goto YAOr7; } goto e4k12; YW7Gm: $province_name = $province_info["\x6e\x61\155\145"]; goto Yfet5; bjq2I: $order_list[$k]["\x6f\x72\x64\x65\162\x5f\x69\x74\x65\155\x5f\x6c\x69\x73\164"] = $order_item_list; goto EzmGx; CcR45: foreach ($order_item_list as $key_item => $v_item) { goto kqjgR; zoIla: $order_item_list[$key_item]["\x70\x69\143\x74\x75\x72\145"] = $goods_picture; goto f1XPh; rqDlf: FVokO: goto zoIla; pNbm8: if (!empty($goods_picture)) { goto FVokO; } goto N3e7B; kqjgR: $picture = new Images(); goto x3X3R; f1XPh: Uguc1: goto WEq2i; N3e7B: $goods_picture = array("\151\x6d\147\x5f\x63\157\x76\145\x72" => '', "\x69\155\x67\x5f\x63\157\x76\145\x72\x5f\142\x69\147" => '', "\151\155\x67\x5f\x63\x6f\166\145\162\x5f\x6d\151\x64" => '', "\x69\x6d\147\x5f\x63\157\x76\145\x72\137\163\155\141\x6c\x6c" => '', "\x69\155\x67\x5f\143\x6f\x76\x65\162\137\x6d\x69\x63\162\157" => '', "\165\160\154\157\141\x64\x5f\164\x79\x70\x65" => 1, "\x64\x6f\155\x61\x69\156" => ''); goto rqDlf; x3X3R: $goods_picture = $picture->get($v_item["\147\157\x6f\x64\x73\137\151\x6d\x61\x67\145\163"]); goto pNbm8; WEq2i: } goto x5XOe; Yfet5: YAOr7: goto RczgE; vTJsK: $order_list[$k]["\x72\145\143\145\151\x76\x65\162\137\143\x6f\x75\156\x74\171\x5f\156\141\155\145"] = $county_name; goto CcR45; KqSUJ: QnBcK: goto Q09Oo; wtEtc: $a = Db::name("\171\142\163\143\x5f\x6f\162\x64\145\x72\x5f\145\170\x70\162\x65\x73\163")->where("\157\x72\x64\x65\x72\x5f\x69\144", $v["\157\x72\144\x65\162\137\151\x64"])->field("\145\170\160\x72\145\163\163\137\156\x6f\x2c\x65\x78\160\162\x65\x73\x73\x5f\143\x6f\155\x70\141\156\171")->find(); goto tQw7O; q2eEJ: qsjcU: goto KqSUJ; tQw7O: $order_list[$k]["\x65\170\x70\x72\145\x73\x73\x5f\156\x6f"] = $a["\145\x78\x70\x72\145\163\163\137\156\x6f"]; goto WpnMl; HbACh: $province_info = $area->getInfo(array("\151\144" => $city_info["\160\151\144"]), "\52"); goto tgOnM; RczgE: if (!($v["\163\x68\151\x70\160\151\156\147\137\x73\164\x61\x74\165\163"] == 1)) { goto pNOZJ; } goto wtEtc; tVOWt: $order_list[$k]["\x72\145\x63\x65\151\x76\145\x72\x5f\160\162\157\x76\151\x6e\143\145\137\x6e\141\x6d\145"] = $province_name; goto WKiy3; XS9nt: $city_info = $area->getInfo(array("\x69\144" => $county_info["\x70\x69\x64"]), "\52"); goto HbACh; V0TRD: pNOZJ: goto tVOWt; PIwIV: $order_status = OrderService::getOrderStatus(); goto u8XsM; Q09Oo: } goto vGrN_; oYxn9: $order_model = new Order(); goto zL_ij; HpF7r: return $order_list; goto L7poM; FP374: if (empty($order_list)) { goto l3O15; } goto pQL_h; zL_ij: $order_list = $order_model->getPageLisy($condition, $search_text, $order); goto FP374; vGrN_: b3eaJ: goto HpF7r; sbC7b: } public function getOrderListRefund($condition = '', $search_text = '', $order = '') { goto Ugrax; xXpZL: foreach ($order_list as $k => $v) { goto hBSYy; woDEK: $order_list[$k]["\x72\x65\x63\145\x69\x76\x65\162\x5f\160\x72\157\x76\151\x6e\143\x65\x5f\156\x61\155\145"] = $province_name; goto xUD0S; hBSYy: $order_item = new OrderGoods(); goto T5Dib; ugO4Y: if (!(count($county_info) > 0)) { goto XAQ1S; } goto T0uF4; wog6P: $order_list[$k]["\x6f\x72\144\145\162\x5f\x69\164\145\155\x5f\x6c\151\x73\x74"] = $order_item_list; goto NfV50; UfiK1: $province_name = $province_info["\156\x61\x6d\145"]; goto x6yAI; nS9ca: $city_name = ''; goto otvzQ; Q03CE: $city_name = $city_info["\x6e\141\x6d\x65"]; goto UfiK1; Z9HUV: $city_info = $area->getInfo(array("\151\144" => $county_info["\x70\151\144"]), "\x2a"); goto hhhGE; hhhGE: $province_info = $area->getInfo(array("\151\x64" => $city_info["\160\151\x64"]), "\x2a"); goto ugO4Y; yhabq: $county_info = $area->getInfo(array("\151\144" => $v["\162\145\x63\x65\151\166\x65\x72\137\141\x72\x65\x61"]), "\52"); goto Z9HUV; n0bwR: S7NFa: goto wog6P; SKQCC: $area = new Area(); goto yhabq; YCC1J: foreach ($order_item_list as $key_item => $v_item) { goto vyXk2; eB01o: $goods_picture = array("\151\x6d\147\x5f\x63\x6f\166\x65\162" => '', "\151\x6d\147\137\143\157\x76\x65\x72\x5f\142\151\x67" => '', "\x69\155\x67\x5f\x63\x6f\166\x65\162\x5f\155\151\144" => '', "\x69\x6d\147\x5f\x63\x6f\x76\x65\x72\137\163\155\141\x6c\154" => '', "\x69\x6d\x67\x5f\143\157\166\145\162\x5f\155\151\x63\x72\x6f" => '', "\x75\x70\x6c\157\141\144\137\164\x79\160\x65" => 1, "\144\157\155\141\x69\156" => ''); goto q3H6m; GaDk1: if (!empty($goods_picture)) { goto t_Y2r; } goto eB01o; q3H6m: t_Y2r: goto pSoZp; vyXk2: $picture = new Images(); goto mR50e; r02Oa: ugP3w: goto Uxg13; pSoZp: $order_item_list[$key_item]["\160\151\x63\x74\165\162\x65"] = $goods_picture; goto r02Oa; mR50e: $goods_picture = $picture->get($v_item["\147\157\157\x64\163\x5f\x69\155\141\147\x65\163"]); goto GaDk1; Uxg13: } goto n0bwR; oA91r: $county_name = ''; goto nS9ca; Va9se: $order_list[$k]["\162\x65\143\x65\151\x76\x65\x72\137\143\157\165\156\164\x79\137\x6e\141\x6d\x65"] = $county_name; goto YCC1J; otvzQ: $province_name = ''; goto SKQCC; T5Dib: $order_item_list = $order_item->where(["\157\162\144\145\x72\137\151\x64" => $v["\x6f\162\x64\x65\x72\137\151\144"]])->select(); goto oA91r; rExzb: Ao3P6: goto JVkZW; NfV50: $order_list[$k]["\x6f\x70\x65\x72\x61\x74\151\x6f\156"] = ''; goto P5Cb3; UTYnR: foreach ($order_status as $k_status => $v_status) { goto ZjE9S; n4jBd: wo5e8: goto t_nRE; Z3iV2: Xp3Zq: goto n4jBd; ZjE9S: if (!($v_status["\x73\x74\x61\164\165\x73\137\x69\x64"] == $v["\x6f\162\x64\145\x72\137\163\164\x61\x74\165\163"])) { goto Xp3Zq; } goto YllfC; YllfC: $order_list[$k]["\163\164\x61\164\165\163\137\x6e\x61\155\x65"] = $v_status["\163\x74\x61\164\165\x73\137\x6e\141\x6d\x65"]; goto Z3iV2; t_nRE: } goto kaus9; T0uF4: $county_name = $county_info["\x6e\x61\155\x65"]; goto Q03CE; P5Cb3: $order_status = OrderService::getOrderRefund(); goto UTYnR; kaus9: nTH16: goto rExzb; xUD0S: $order_list[$k]["\162\145\143\145\x69\166\145\x72\x5f\x63\x69\164\171\x5f\x6e\141\155\x65"] = $city_name; goto Va9se; x6yAI: XAQ1S: goto woDEK; JVkZW: } goto H5aTP; LdAxn: $order_list = $order_model->getPageLisy($condition, $search_text, $order); goto m2keH; m2keH: if (empty($order_list)) { goto H5bfW; } goto xXpZL; XWWVC: return $order_list; goto vhJZQ; vhJZQ: H5bfW: goto IIHNX; Ugrax: $order_model = new Order(); goto LdAxn; H5aTP: Deyql: goto XWWVC; IIHNX: } public function addOrderSellerMemo($order_id, $memo) { goto viVDM; NZVnc: $retval = $order->save($data, ["\157\162\x64\x65\x72\137\x69\144" => $order_id]); goto WwxMy; Otvxh: $data = array("\x73\145\154\x6c\145\x72\137\155\x65\x6d\157" => $memo); goto NZVnc; WwxMy: return $retval; goto st5DW; viVDM: $order = new Order(); goto Otvxh; st5DW: } public function deleteOrder($order_id, $operator_type) { goto m1Gm3; bx2v3: return $res; goto LqyS3; X31re: $res = $order_model->save($data, ["\x6f\162\144\x65\162\x5f\163\164\x61\164\x75\163" => -1, "\x6f\x72\x64\145\x72\x5f\151\144" => ["\x69\x6e", $order_id_array]]); goto cNvvT; L1l0Z: $data = array("\151\x73\137\x64\x65\x6c\x65\164\145\x64" => 1); goto sscNa; sscNa: $order_id_array = explode("\x2c", $order_id); goto rlr5K; m1Gm3: $order_model = new Order(); goto L1l0Z; cNvvT: g3UL7: goto bx2v3; rlr5K: if (!($operator_type == 1)) { goto g3UL7; } goto X31re; LqyS3: } public function OrderTakeDelivery($orderid) { $this->order->startTrans(); try { goto wJ6ff; WgVKb: return 1; goto yhoso; wJ6ff: $data_take_delivery = array("\163\150\151\x70\x70\151\x6e\147\x5f\x73\164\x61\164\x75\x73" => 2, "\157\x72\144\145\162\x5f\x73\164\x61\x74\165\163" => 3, "\x73\x69\x67\x6e\137\x74\151\x6d\145" => time()); goto JdmUo; bPnFu: $this->order->commit(); goto WgVKb; JdmUo: $order_model = new Order(); goto fzQCN; fzQCN: $order_model->save($data_take_delivery, ["\157\x72\144\145\x72\137\151\144" => $orderid]); goto bPnFu; yhoso: } catch (\Exception $e) { $this->order->rollback(); return $e->getMessage(); } } public function orderTakeRefund($orderid) { $this->order->startTrans(); try { goto lHs_S; lHs_S: $data_take_delivery = array("\x6f\x72\144\145\162\137\x73\x74\x61\x74\x75\x73" => 5, "\146\x69\x6e\x69\163\150\x5f\164\x69\155\x65" => time()); goto WYe5E; WYe5E: $order_model = new Order(); goto Et89H; pzs8U: $this->order->commit(); goto fVQQr; Et89H: $order_model->save($data_take_delivery, ["\157\162\x64\x65\162\x5f\151\x64" => $orderid]); goto pzs8U; fVQQr: return 1; goto MHtWn; MHtWn: } catch (\Exception $e) { $this->order->rollback(); return $e->getMessage(); } } public function orderGoodsDelivery($order_id) { goto KB3e4; GSdqO: $retval = $order_goods->orderGoodsDelivery($order_id, ''); goto gFhoW; KB3e4: $order_goods = new \app\admin\service\OrderGoods(); goto GSdqO; gFhoW: return $retval; goto TUhDA; TUhDA: } public function getOrderDetail($order_id) { goto lvtJv; GF5LF: sqTko: goto EGGQk; EGGQk: $detail["\x6f\162\144\145\162\x5f\x67\x6f\x6f\x64\x73\137\x6e\157\137\144\145\154\x69\166\145"] = $order_goods_list; goto eWwh0; h_APp: $order_goods_list = array(); goto YFqET; LJsKg: PENiI: goto Jh0JF; cMzuc: $packet_obj = array("\x70\x61\143\x6b\x65\x74\137\x6e\x61\x6d\145" => "\xe6\227\xa0\351\x9c\200\xe7\x89\xa9\346\265\201", "\x65\170\160\162\145\x73\x73\137\156\141\155\145" => '', "\x65\x78\160\x72\145\163\163\137\143\157\x64\145" => '', "\x65\x78\160\162\x65\163\x73\x5f\x69\144" => 0, "\x69\x73\137\x65\170\160\162\145\163\163" => 0, "\x6f\x72\144\x65\162\137\147\157\x6f\x64\x73\137\154\x69\x73\164" => $order_goods_exprss); goto s9tXq; D5WQx: cVIY4: goto vOOlL; NTSkk: foreach ($express_list as $express_obj) { goto m6GeA; M9L3A: $packet_obj = array("\160\141\x63\x6b\x65\164\137\156\141\155\x65" => "\xe5\214\205\350\243\271\40\40\53\x20" . $packet_num, "\145\x78\x70\162\145\163\163\x5f\x6e\141\155\145" => $express_obj["\x65\x78\x70\x72\145\163\x73\x5f\156\x61\x6d\145"], "\x65\170\x70\x72\145\x73\x73\137\143\157\x64\x65" => $express_obj["\x65\x78\160\x72\x65\163\x73\x5f\156\x6f"], "\145\x78\160\x72\145\163\163\137\151\144" => $express_obj["\x69\x64"], "\151\163\x5f\145\170\x70\x72\x65\163\163" => 1, "\157\x72\x64\145\x72\x5f\x67\x6f\x6f\x64\163\x5f\x6c\151\163\164" => $packet_goods_list); goto PYyhw; UtcGC: $order_goods_id_array = $express_obj["\157\162\x64\x65\162\x5f\x67\157\157\x64\163\137\x69\x64\x5f\141\x72\162\141\x79"]; goto Jxuan; PYyhw: $packet_num = $packet_num + 1; goto qrdCg; tK1p4: R_oCf: goto ltAl4; rpuOp: NhMur: goto M9L3A; qrdCg: $goods_packet_list[] = $packet_obj; goto tK1p4; YjWfG: foreach ($order_goods_delive as $delive_obj) { goto QJkAk; io6T_: if (!in_array($order_goods_id, $goods_id_str)) { goto bDSIh; } goto gVQhO; gVQhO: $packet_goods_list[] = $delive_obj; goto W2bm0; FkMRo: pkAqk: goto Qqju6; QJkAk: $order_goods_id = $delive_obj["\157\162\144\x65\x72\x5f\x67\x6f\x6f\x64\163\x5f\x69\x64"]; goto io6T_; W2bm0: bDSIh: goto FkMRo; Qqju6: } goto rpuOp; m6GeA: $packet_goods_list = array(); goto UtcGC; Jxuan: $goods_id_str = explode("\x2c", $order_goods_id_array); goto YjWfG; ltAl4: } goto D5WQx; nX_zh: ce_kT: goto wl3Ba; wl3Ba: $detail["\163\150\151\x70\160\151\156\147\x5f\163\164\x61\164\165\163\137\x6e\141\155\x65"] = $this->getShippingInfo($detail["\x73\150\x69\160\160\x69\x6e\x67\x5f\x73\164\x61\x74\x75\163"])["\163\164\x61\x74\x75\x73\x5f\156\x61\x6d\145"]; goto h_APp; nrCY6: foreach ($order_goods_delive as $goods_obj) { goto bI9vk; bI9vk: $is_have = false; goto wytLy; wytLy: $order_goods_id = $goods_obj["\157\x72\x64\145\162\x5f\x67\x6f\157\x64\163\137\151\x64"]; goto ZI_B8; bweBb: ivjYM: goto ABeC7; ixQx0: $order_goods_exprss[] = $goods_obj; goto bweBb; ABeC7: V50XI: goto y4rPY; ZI_B8: if ($is_have) { goto ivjYM; } goto ixQx0; y4rPY: } goto JCcZ5; Iwcc2: $packet_num = 1; goto NTSkk; Jh0JF: if (!(!empty($express_list) && count($express_list) > 0 && count($order_goods_delive) > 0)) { goto saXTa; } goto Iwcc2; dHmUe: $order_goods_exprss = array(); goto llQw4; gTow1: if (!empty($detail)) { goto ce_kT; } goto WHDla; YFqET: $order_goods_delive = array(); goto dHmUe; eWwh0: if (!(!empty($order_goods_delive) && count($order_goods_delive) > 0)) { goto n3_Eb; } goto nrCY6; JCcZ5: HhZAX: goto bgzR3; og3SV: $goods_packet_list = array(); goto rdmdO; WHDla: return array(); goto nX_zh; rdmdO: if (!(count($order_goods_exprss) > 0)) { goto PENiI; } goto cMzuc; lvtJv: $detail = $this->getDetail($order_id); goto gTow1; llQw4: foreach ($detail["\x6f\x72\x64\x65\162\x5f\x67\x6f\x6f\144\163"] as $order_goods_obj) { goto AOyuo; WG4Lx: $order_goods_list[] = $order_goods_obj; goto hGVOQ; ewVTn: EGgsb: goto ed19L; BM_bb: if ($shipping_status == 0) { goto FAGLX; } goto w83WD; BxjNU: goto HHooI; goto tSdtE; tSdtE: FAGLX: goto WG4Lx; hGVOQ: HHooI: goto ewVTn; w83WD: $order_goods_delive[] = $order_goods_obj; goto BxjNU; AOyuo: $shipping_status = $order_goods_obj["\x73\x68\x69\160\x70\x69\x6e\147\137\163\164\141\x74\165\163"]; goto BM_bb; ed19L: } goto GF5LF; bgzR3: n3_Eb: goto og3SV; mrXuB: $detail["\147\157\157\x64\x73\x5f\x70\x61\143\153\145\164\x5f\x6c\x69\x73\164"] = $goods_packet_list; goto ueJJT; vOOlL: saXTa: goto mrXuB; s9tXq: $goods_packet_list[] = $packet_obj; goto LJsKg; ueJJT: return $detail; goto yXa49; yXa49: } public function orderDoDelivery($orderid) { $this->order->startTrans(); try { goto UhR8r; GFcbe: $order_model->save($data_delivery, ["\x6f\162\x64\x65\162\137\151\144" => $orderid]); goto VUm8W; VUm8W: $this->order->commit(); goto Y0g5r; UhR8r: $data_delivery = array("\163\150\x69\x70\160\x69\x6e\x67\137\163\164\x61\x74\x75\x73" => 1, "\x6f\162\x64\145\x72\137\x73\164\141\164\165\x73" => 2, "\x63\157\x6e\x73\151\x67\156\137\x74\151\155\x65" => time()); goto MyrSo; Y0g5r: return 1; goto xS0Kn; MyrSo: $order_model = new Order(); goto GFcbe; xS0Kn: } catch (\Exception $e) { $this->order->rollback(); return $e->getMessage(); } } public function getDetail($order_id) { goto lVfMM; X511c: $order_detail["\x6f\x72\144\145\162\137\147\x6f\157\x64\x73"] = $this->getOrderGoods($order_id); goto OvbDu; NXIC6: goto JvuAy; goto wVsgZ; TBsMh: if (!empty($order_detail)) { goto LpxIr; } goto aQRnF; dWHaf: $order_detail["\163\x68\151\160\x70\151\x6e\147\137\x74\x79\x70\x65\137\x6e\141\x6d\x65"] = "\xe5\x95\x86\xe5\256\xb6\xe9\x85\215\xe9\x80\x81"; goto fHv2Z; RjUpP: if (empty($express_obj["\143\x6f\x6d\160\141\156\x79\137\x6e\141\x6d\x65"])) { goto cqjYz; } goto D3gRh; G79Wd: goto JvuAy; goto WKz1a; wVsgZ: Ffbhm: goto dWHaf; fHv2Z: $express_company = new ExpressCompany(); goto sK6wU; CZDBg: LpxIr: goto dcd_5; Q2pOw: return $order_detail; goto zxLmv; shGMn: x0ZUa: goto Tl1MD; XgukL: cqjYz: goto G79Wd; OvbDu: $order_status = OrderService::getOrderStatus(); goto Qibbz; p0Oq0: $order_detail["\x73\x68\151\160\x70\x69\x6e\147\137\x74\171\x70\145\x5f\x6e\141\155\x65"] = "\xe9\x97\250\xe5\272\227\350\207\xaa\346\x8f\220"; goto Cy6fN; Qibbz: $order_detail["\x6f\x72\x64\x65\x72\137\x70\x69\143\153\x75\x70"] = ''; goto BLRxQ; RyAYZ: $province_info = $area->getInfo(array("\151\144" => $city_info["\160\151\144"]), "\52"); goto MsVwa; lVfMM: $order_detail = $this->order->getInfo(["\x6f\162\144\145\x72\x5f\151\x64" => $order_id, "\x69\x73\137\144\145\x6c\145\x74\x65\144" => 0]); goto TBsMh; W6vZQ: if ($order_detail["\x73\150\x69\160\160\x69\156\147\x5f\x74\x79\x70\x65"] == 2) { goto CtbiY; } goto suAIA; MM17l: if ($order_detail["\163\x68\x69\160\160\151\x6e\x67\x5f\164\x79\x70\x65"] == 1) { goto Ffbhm; } goto W6vZQ; MsVwa: $order_detail["\x61\x64\x64\162\x65\163\163"] = $province_info["\156\x61\x6d\145"] . $city_info["\x6e\141\155\x65"] . $county_info["\x6e\x61\x6d\x65"]; goto Q2pOw; sK6wU: $express_obj = $express_company->getInfo(["\x63\157\137\151\144" => $order_detail["\163\x68\x69\x70\x70\x69\x6e\x67\x5f\x63\157\x6d\160\x61\156\171\x5f\x69\x64"]], "\143\x6f\155\x70\141\x6e\x79\137\156\x61\155\145"); goto RjUpP; Cy6fN: JvuAy: goto VijHW; WKz1a: CtbiY: goto p0Oq0; Tl1MD: $area = new Area(); goto LxJzW; aQRnF: return array(); goto CZDBg; LxJzW: $county_info = $area->getInfo(array("\x69\x64" => $order_detail["\162\145\x63\x65\x69\166\x65\x72\x5f\x61\162\x65\x61"]), "\x2a"); goto xumtT; xumtT: $city_info = $area->getInfo(array("\151\x64" => $county_info["\160\151\x64"]), "\x2a"); goto RyAYZ; D3gRh: $express_company_name = $express_obj["\x63\157\x6d\x70\x61\x6e\171\137\156\141\155\145"]; goto XgukL; BLRxQ: foreach ($order_status as $k_status => $v_status) { goto Ml629; XqWif: $order_detail["\163\x74\141\164\165\163\x5f\x6e\141\155\145"] = $v_status["\x73\164\x61\164\x75\x73\x5f\x6e\x61\x6d\x65"]; goto xJbHy; AtAZ1: y1SCl: goto pRdKJ; xJbHy: JYJWr: goto AtAZ1; Ml629: if (!($v_status["\x73\164\141\164\165\x73\x5f\151\x64"] == $order_detail["\x6f\x72\x64\145\162\x5f\163\x74\141\x74\165\163"])) { goto JYJWr; } goto XqWif; pRdKJ: } goto shGMn; dcd_5: $express_company_name = ''; goto MM17l; suAIA: $order_detail["\x73\x68\151\160\160\x69\156\147\x5f\164\x79\x70\x65\137\x6e\x61\155\145"] = ''; goto NXIC6; VijHW: $order_detail["\163\150\x69\160\160\x69\x6e\147\x5f\143\157\x6d\160\x61\156\x79\137\x6e\x61\155\x65"] = $express_company_name; goto X511c; zxLmv: } public function getOrderGoods($order_id) { goto Qg7_R; Qg7_R: $order_goods = new OrderGoods(); goto HaUXa; HaUXa: $order_goods_list = $order_goods->all(["\157\162\144\145\162\137\x69\x64" => $order_id]); goto UMPS5; UMPS5: foreach ($order_goods_list as $k => $v) { goto gefHN; Q3HKU: $order_goods_list[$k]["\x73\164\x61\164\x75\x73\137\156\x61\155\x65"] = ''; goto JRsGk; wVtw_: $order_goods_list[$k]["\160\x69\x63\x74\165\162\145\137\x69\156\x66\x6f"] = $picture_info; goto ipQkf; Qce5U: $picture_info = $picture->get($v["\147\157\x6f\144\x73\x5f\x69\155\141\147\145\x73"]); goto wVtw_; gefHN: $picture = new Images(); goto Qce5U; ipQkf: $order_goods_list[$k]["\x72\x65\146\165\156\x64\137\157\x70\x65\162\x61\164\x69\x6f\x6e"] = ''; goto Q3HKU; JRsGk: XdqvV: goto BDK7L; BDK7L: } goto knmIM; knmIM: zIRQa: goto GjnDD; GjnDD: return $order_goods_list; goto Cw2yz; Cw2yz: } public function OrderDeliver($order_id) { goto dtXvZ; dtXvZ: $order = new Order(); goto KnTzK; fYg48: $res = $order->save($data, ["\x6f\x72\144\x65\x72\x5f\x69\x64" => $order_id]); goto TMiBq; TMiBq: return $res; goto v7AC8; KnTzK: $data = array("\157\162\144\145\x72\137\163\164\141\164\x75\x73" => 2, "\x63\x6f\x6e\163\151\147\x6e\x5f\x74\x69\x6d\x65" => time()); goto fYg48; v7AC8: } public static function getShippingInfo($shipping_status_id) { goto GVrW6; GVrW6: $shipping_status = OrderService::getShippingStatus(); goto raWF1; Jr331: HV70t: goto ea9KS; WAVFj: foreach ($shipping_status as $shipping_info) { goto GlnFw; aus_5: tbR_p: goto nVczG; gbTSQ: $info = $shipping_info; goto mqTUm; mqTUm: goto HV70t; goto aus_5; GlnFw: if (!($shipping_status_id == $shipping_info["\163\x68\x69\x70\x70\151\x6e\147\137\163\164\x61\x74\x75\163"])) { goto tbR_p; } goto gbTSQ; nVczG: XB3pm: goto o_jna; o_jna: } goto Jr331; raWF1: $info = null; goto WAVFj; ea9KS: return $info; goto dDOZn; dDOZn: } public static function getShippingStatus() { $shipping_status = array(array("\163\150\x69\x70\x70\x69\156\147\x5f\163\164\x61\164\165\163" => "\x30", "\163\x74\141\x74\x75\163\137\x6e\x61\x6d\x65" => "\345\xbe\x85\xe5\x8f\221\xe8\264\247"), array("\x73\150\151\x70\160\x69\x6e\x67\x5f\163\x74\141\x74\x75\163" => "\x31", "\163\164\x61\164\x75\x73\x5f\x6e\x61\155\145" => "\xe5\267\262\xe5\x8f\221\350\264\247"), array("\163\x68\x69\160\x70\151\x6e\147\x5f\x73\164\141\164\x75\163" => "\62", "\163\164\141\x74\165\x73\x5f\x6e\141\155\145" => "\345\267\262\346\224\266\350\264\xa7"), array("\x73\x68\151\160\160\x69\x6e\147\x5f\x73\164\x61\164\165\x73" => "\x33", "\163\x74\x61\164\165\x73\x5f\x6e\x61\x6d\145" => "\xe5\xa4\207\350\xb4\247\xe4\270\xad")); return $shipping_status; } public static function getOrderRefund() { $status = array(array("\163\x74\x61\164\165\163\137\x69\144" => "\x34", "\x73\164\x61\x74\x75\x73\x5f\156\x61\x6d\x65" => "\345\xbe\205\xe9\x80\x80\346\254\276", "\x69\x73\137\x72\x65\x66\165\x6e\x64" => 0, "\x6f\160\145\x72\141\164\x69\157\156" => array("\60" => array("\156\157" => "\x73\x65\154\x6c\x65\x72\x5f\x6d\145\155\x6f", "\x63\x6f\x6c\x6f\x72" => "\43\70\x65\70\x63\70\143", "\x6e\141\155\x65" => "\xe6\267\xbb\345\x8a\240\xe5\244\x87\346\xb3\xa8")), "\155\x65\x6d\142\x65\162\x5f\x6f\160\145\162\141\x74\x69\157\156" => array()), array("\x73\164\141\164\x75\x73\x5f\x69\x64" => "\x35", "\x73\x74\x61\164\165\163\x5f\x6e\141\x6d\x65" => "\345\xb7\xb2\xe9\x80\200\xe6\xac\xbe", "\x69\x73\x5f\162\x65\x66\165\x6e\144" => 0, "\157\160\x65\162\x61\164\151\157\x6e" => array("\x30" => array("\156\157" => "\163\x65\154\154\x65\x72\137\x6d\145\155\x6f", "\143\x6f\154\x6f\x72" => "\x23\70\145\x38\143\x38\143", "\156\x61\x6d\145" => "\346\xb7\xbb\xe5\x8a\xa0\xe5\244\207\346\263\250")), "\x6d\x65\155\x62\x65\162\137\x6f\x70\x65\162\141\164\x69\x6f\156" => array())); return $status; } public static function getOrderStatus() { $status = array(array("\163\x74\x61\x74\x75\x73\x5f\151\x64" => "\x30", "\x73\164\141\x74\165\163\137\156\x61\x6d\x65" => "\xe5\276\205\346\224\257\344\273\230", "\151\x73\x5f\x72\145\x66\165\156\144" => 0, "\157\160\145\162\141\164\151\x6f\x6e" => array("\60" => array("\156\x6f" => "\x70\x61\171", "\156\x61\155\x65" => "\xe7\272\277\344\270\x8b\xe6\224\xaf\xe4\xbb\x98", "\143\157\154\x6f\x72" => "\x23\x46\106\x39\70\60\60"), "\x31" => array("\x6e\x6f" => "\143\154\157\163\x65", "\143\x6f\x6c\x6f\x72" => "\x23\105\x36\61\x44\61\104", "\156\141\155\145" => "\344\272\xa4\xe6\230\x93\345\205\263\xe9\227\xad"), "\x32" => array("\156\157" => "\141\144\152\165\x73\164\137\160\162\x69\x63\145", "\x63\x6f\x6c\157\x72" => "\x23\64\x43\101\x46\65\x30", "\156\141\155\x65" => "\344\277\256\xe6\224\xb9\344\xbb\267\xe6\xa0\xbc"), "\63" => array("\156\157" => "\163\145\x6c\x6c\x65\162\x5f\x6d\145\x6d\x6f", "\x63\157\x6c\157\162" => "\43\x38\x65\70\143\70\143", "\156\x61\x6d\145" => "\xe6\267\xbb\345\x8a\240\345\244\207\346\263\250")), "\155\x65\155\142\x65\162\x5f\x6f\160\145\x72\141\x74\x69\157\156" => array("\x30" => array("\156\157" => "\x70\141\x79", "\x6e\141\x6d\x65" => "\xe5\x8e\273\xe6\x94\257\344\xbb\x98", "\143\x6f\154\157\x72" => "\x23\x46\x31\x35\x30\x35\60"), "\x31" => array("\x6e\157" => "\x63\154\x6f\x73\145", "\156\141\x6d\x65" => "\345\x85\263\xe9\227\xad\xe8\256\242\345\x8d\x95", "\143\157\154\157\162" => "\43\71\x39\x39\71\71\x39"))), array("\x73\x74\x61\x74\x75\163\137\151\144" => "\61", "\163\164\x61\164\x75\163\137\156\x61\x6d\x65" => "\xe5\xbe\x85\345\217\221\xe8\xb4\xa7", "\x69\163\137\x72\x65\146\165\156\x64" => 1, "\x6f\160\145\x72\x61\x74\x69\x6f\x6e" => array("\x30" => array("\156\157" => "\144\x65\x6c\x69\166\x65\162\x79", "\x63\157\x6c\x6f\x72" => "\x67\162\x65\145\x6e", "\x6e\x61\155\x65" => "\xe5\217\221\350\xb4\xa7"), "\x31" => array("\156\x6f" => "\163\x65\x6c\x6c\145\162\x5f\155\145\155\x6f", "\x63\157\154\157\162" => "\x23\70\145\70\143\70\x63", "\x6e\141\155\145" => "\346\xb7\273\345\212\xa0\345\244\207\xe6\xb3\xa8"), "\62" => array("\x6e\x6f" => "\x75\160\144\x61\x74\x65\137\141\x64\x64\x72\x65\x73\x73", "\x63\157\x6c\x6f\x72" => "\x23\x35\x31\x41\x33\x35\61", "\156\141\x6d\145" => "\xe4\277\256\xe6\x94\271\xe5\x9c\260\345\235\200")), "\155\x65\155\x62\x65\162\x5f\157\x70\145\162\x61\x74\151\x6f\x6e" => array()), array("\163\164\x61\164\165\163\137\151\x64" => "\62", "\163\164\141\164\165\163\x5f\x6e\x61\155\145" => "\xe5\267\xb2\xe5\217\x91\xe8\264\247", "\151\163\137\x72\x65\146\x75\x6e\144" => 1, "\157\160\x65\162\141\x74\x69\157\x6e" => array("\x30" => array("\156\157" => "\x73\x65\154\154\145\162\x5f\x6d\145\155\x6f", "\143\x6f\154\x6f\x72" => "\43\x38\x65\70\x63\70\x63", "\156\141\155\145" => "\346\267\273\xe5\212\240\xe5\xa4\207\xe6\263\xa8"), "\x31" => array("\x6e\x6f" => "\154\157\147\x69\x73\x74\151\143\163", "\143\x6f\154\157\162" => "\x23\65\x31\x41\63\65\x31", "\156\x61\155\145" => "\346\237\xa5\xe7\234\x8b\xe7\x89\251\346\xb5\x81")), "\155\x65\155\x62\145\162\137\x6f\x70\x65\x72\x61\164\x69\x6f\156" => array("\x30" => array("\x6e\x6f" => "\x67\145\164\x64\x65\x6c\151\x76\x65\162\x79", "\156\141\155\x65" => "\347\241\256\350\xae\244\xe6\224\266\350\xb4\247", "\x63\x6f\154\157\x72" => "\43\106\x46\x36\66\60\60"))), array("\163\x74\141\x74\x75\x73\x5f\151\x64" => "\63", "\163\x74\x61\x74\165\x73\x5f\156\x61\x6d\145" => "\xe5\267\xb2\xe7\255\276\346\x94\xb6", "\151\163\137\162\145\146\x75\156\x64" => 0, "\x6f\x70\145\x72\141\x74\151\157\x6e" => array("\60" => array("\156\x6f" => "\x73\x65\x6c\x6c\x65\x72\x5f\x6d\145\x6d\x6f", "\x63\157\154\x6f\162" => "\43\x38\145\70\x63\x38\143", "\156\141\x6d\x65" => "\346\xb7\xbb\xe5\x8a\240\345\xa4\207\346\263\250"), "\61" => array("\x6e\x6f" => "\x6c\157\x67\151\x73\164\151\143\x73", "\143\157\x6c\x6f\162" => "\43\x35\x31\x41\x33\65\x31", "\x6e\141\155\x65" => "\xe6\x9f\245\xe7\x9c\x8b\xe7\x89\xa9\346\265\x81")), "\155\145\155\x62\145\162\137\157\x70\x65\162\x61\x74\x69\x6f\156" => array()), array("\163\x74\x61\x74\165\x73\137\151\144" => "\64", "\x73\x74\x61\x74\x75\163\x5f\x6e\x61\155\x65" => "\345\276\205\351\x80\200\xe6\254\276", "\x69\163\x5f\x72\x65\x66\165\x6e\144" => 0, "\157\160\x65\x72\141\x74\x69\157\x6e" => array("\60" => array("\156\x6f" => "\x73\x65\x6c\154\145\162\x5f\155\145\155\157", "\143\x6f\x6c\157\x72" => "\43\70\145\x38\143\70\x63", "\156\141\155\145" => "\xe6\267\xbb\xe5\x8a\xa0\345\244\207\xe6\xb3\250")), "\155\145\x6d\x62\x65\x72\x5f\x6f\x70\145\162\141\x74\151\x6f\156" => array()), array("\x73\x74\x61\164\x75\x73\x5f\151\144" => "\x35", "\163\164\141\x74\165\163\x5f\x6e\141\155\145" => "\xe5\xb7\xb2\xe9\x80\x80\346\254\276", "\151\x73\x5f\x72\145\146\165\x6e\x64" => 0, "\157\160\x65\162\x61\164\x69\157\156" => array("\x30" => array("\156\x6f" => "\163\x65\154\154\145\162\x5f\x6d\x65\x6d\x6f", "\x63\157\x6c\157\162" => "\x23\70\145\x38\x63\70\143", "\156\x61\x6d\x65" => "\346\xb7\xbb\345\x8a\xa0\xe5\244\207\346\263\250")), "\155\145\155\x62\x65\162\x5f\x6f\x70\x65\x72\141\164\x69\157\x6e" => array()), array("\163\164\141\x74\x75\163\x5f\151\x64" => "\55\61", "\163\164\141\x74\x75\163\x5f\x6e\x61\155\x65" => "\345\267\xb2\xe5\x8f\226\346\xb6\210", "\151\163\x5f\162\145\146\x75\156\x64" => 0, "\157\x70\x65\162\141\164\151\x6f\x6e" => array("\x30" => array("\x6e\x6f" => "\x73\x65\154\154\145\162\x5f\x6d\x65\155\157", "\143\x6f\x6c\157\x72" => "\43\x38\145\70\143\70\x63", "\x6e\141\155\x65" => "\346\xb7\273\xe5\212\xa0\xe5\244\207\xe6\xb3\250")), "\x6d\145\x6d\x62\145\162\137\x6f\160\145\162\141\164\x69\157\x6e" => array())); return $status; } public static function getOrderStatus2() { $status = array(array("\x73\x74\141\164\x75\x73\x5f\x69\144" => "\60", "\163\x74\x61\x74\165\x73\x5f\x6e\x61\155\x65" => "\345\276\205\346\x94\257\344\xbb\x98", "\151\x73\137\x72\145\146\x75\x6e\144" => 0, "\x6f\x70\145\162\141\x74\151\157\x6e" => array("\x30" => array("\x6e\x6f" => "\160\x61\171", "\156\141\155\x65" => "\xe7\xba\277\xe4\xb8\x8b\346\x94\257\xe4\273\x98", "\143\x6f\x6c\157\x72" => "\43\x46\106\71\70\60\x30"), "\61" => array("\156\x6f" => "\143\154\157\163\x65", "\x63\x6f\x6c\x6f\x72" => "\43\105\x36\61\104\61\x44", "\156\141\x6d\145" => "\xe4\272\xa4\346\230\223\xe5\x85\263\xe9\x97\255"), "\62" => array("\156\157" => "\x61\x64\x6a\x75\x73\x74\x5f\x70\162\x69\x63\145", "\143\157\x6c\157\x72" => "\x23\x34\103\x41\106\x35\x30", "\x6e\141\155\145" => "\xe4\277\xae\xe6\x94\271\344\273\xb7\xe6\xa0\xbc"), "\x33" => array("\x6e\157" => "\x73\x65\154\154\145\162\x5f\x6d\145\155\157", "\143\x6f\x6c\157\x72" => "\43\70\x65\70\x63\70\x63", "\156\141\x6d\145" => "\xe6\xb7\xbb\xe5\x8a\240\xe5\xa4\207\346\263\xa8")), "\x6d\x65\155\x62\x65\x72\137\x6f\160\145\x72\141\164\x69\157\x6e" => array("\x30" => array("\x6e\157" => "\x70\141\171", "\x6e\x61\155\145" => "\xe5\216\273\xe6\224\257\344\xbb\x98", "\143\157\x6c\157\162" => "\43\106\61\65\60\65\60"), "\x31" => array("\156\157" => "\x63\x6c\x6f\163\x65", "\156\x61\x6d\145" => "\345\x85\xb3\351\x97\255\xe8\xae\xa2\345\215\x95", "\x63\x6f\154\x6f\162" => "\43\x39\71\71\71\x39\71"))), array("\x73\x74\141\164\165\x73\137\151\144" => "\61", "\x73\x74\x61\164\x75\x73\x5f\156\x61\x6d\145" => "\345\xbe\x85\346\217\220\350\xb4\247", "\x69\x73\x5f\x72\145\146\165\156\x64" => 1, "\x6f\x70\x65\162\x61\x74\x69\x6f\x6e" => array("\60" => array("\156\157" => "\x64\x65\x6c\x69\166\x65\x72\171", "\x63\157\x6c\x6f\162" => "\x67\162\x65\145\156", "\156\x61\x6d\x65" => "\345\x8f\221\350\xb4\247"), "\61" => array("\156\157" => "\x73\x65\x6c\154\145\162\137\155\145\155\157", "\143\157\x6c\157\x72" => "\x23\x38\145\x38\x63\70\x63", "\x6e\x61\155\145" => "\346\xb7\xbb\xe5\212\xa0\xe5\244\207\346\263\250"), "\62" => array("\156\157" => "\x75\x70\144\x61\x74\145\137\141\x64\144\162\145\x73\163", "\x63\x6f\154\x6f\162" => "\43\65\x31\x41\63\65\x31", "\x6e\x61\x6d\145" => "\xe4\xbf\256\xe6\224\xb9\345\234\xb0\345\235\200")), "\155\x65\155\142\x65\162\137\x6f\x70\145\162\141\164\x69\x6f\x6e" => array()), array("\x73\164\x61\x74\x75\x73\137\151\x64" => "\63", "\x73\x74\x61\164\165\x73\137\156\141\155\x65" => "\xe5\xb7\262\346\217\220\350\xb4\xa7", "\x69\163\137\162\x65\146\165\x6e\x64" => 0, "\157\160\145\162\x61\x74\151\x6f\156" => array("\x30" => array("\x6e\x6f" => "\x73\145\154\x6c\145\162\x5f\155\x65\155\157", "\143\157\x6c\x6f\162" => "\43\x38\145\x38\143\x38\143", "\x6e\141\155\x65" => "\xe6\xb7\273\xe5\212\240\345\244\207\xe6\263\250"), "\x31" => array("\156\157" => "\x6c\x6f\147\151\x73\x74\151\x63\163", "\143\x6f\x6c\x6f\162" => "\x23\x35\x31\x41\63\x35\x31", "\x6e\141\155\145" => "\346\237\xa5\xe7\234\x8b\347\x89\xa9\xe6\265\201")), "\155\x65\155\x62\145\162\x5f\x6f\160\x65\x72\x61\x74\151\x6f\x6e" => array()), array("\x73\x74\x61\164\x75\x73\x5f\151\x64" => "\x34", "\163\164\141\164\165\x73\x5f\x6e\141\x6d\x65" => "\345\276\205\351\200\200\xe6\254\xbe", "\151\x73\137\162\x65\x66\165\156\x64" => 0, "\157\x70\145\x72\x61\164\x69\x6f\156" => array("\x30" => array("\156\x6f" => "\x73\145\x6c\154\145\162\x5f\x6d\145\x6d\157", "\x63\x6f\x6c\157\x72" => "\x23\x38\145\70\x63\70\x63", "\x6e\141\155\x65" => "\xe6\267\xbb\xe5\x8a\xa0\xe5\xa4\x87\346\263\xa8")), "\x6d\x65\155\142\x65\162\137\x6f\x70\145\x72\141\164\x69\157\x6e" => array()), array("\163\x74\141\164\165\163\x5f\151\144" => "\65", "\163\x74\x61\x74\x75\x73\x5f\x6e\141\155\x65" => "\xe5\xb7\262\351\x80\x80\346\xac\xbe", "\x69\163\x5f\162\x65\146\165\156\x64" => 0, "\x6f\x70\x65\162\x61\x74\151\157\156" => array("\x30" => array("\x6e\157" => "\x73\x65\154\154\145\162\137\155\x65\x6d\157", "\x63\x6f\x6c\157\162" => "\43\70\x65\70\143\x38\143", "\156\x61\155\145" => "\346\xb7\xbb\345\212\xa0\345\244\207\346\263\xa8")), "\x6d\145\155\142\x65\162\x5f\157\x70\145\162\141\164\151\x6f\x6e" => array()), array("\163\x74\x61\x74\x75\163\x5f\151\144" => "\55\61", "\x73\164\x61\x74\x75\163\137\x6e\x61\x6d\145" => "\xe5\267\xb2\345\217\226\xe6\266\210", "\x69\163\137\x72\x65\x66\x75\156\x64" => 0, "\157\160\x65\x72\141\164\151\157\x6e" => array("\60" => array("\156\x6f" => "\x73\x65\154\154\145\162\x5f\x6d\145\x6d\157", "\x63\157\154\x6f\x72" => "\x23\70\x65\x38\x63\70\x63", "\x6e\141\155\145" => "\346\xb7\xbb\xe5\212\240\xe5\244\x87\xe6\263\xa8")), "\155\x65\x6d\x62\x65\x72\x5f\x6f\160\x65\162\141\x74\151\x6f\156" => array())); return $status; } public function getCity($area_id) { goto TRX8V; Emv_Q: $city = Area::get($res["\x70\x69\x64"]); goto HMFaN; p7zNs: return $rs; goto Pd3LI; heLc3: $rs["\x70\x72\157\x76\151\156\x63\x65\x5f\x6e\x61\155\145"] = $pro["\x6e\x61\x6d\x65"]; goto D9eoS; bNYcI: $rs["\x64\x69\163\164\162\x69\x63\164\x5f\x6e\x61\x6d\145"] = $res["\156\141\x6d\x65"]; goto p7zNs; TRX8V: $rs = array(); goto HXw_L; HMFaN: $pro = Area::get($city["\160\151\x64"]); goto Hmdfk; Hmdfk: $rs["\x70\162\157\166\151\156\x63\145\x5f\x69\x64"] = $pro["\x69\x64"]; goto rO2qV; rO2qV: $rs["\x63\x69\164\171\137\151\144"] = $city["\151\144"]; goto z0z_l; z0z_l: $rs["\144\x69\163\164\162\151\x63\x74\137\151\144"] = $res["\151\x64"]; goto heLc3; D9eoS: $rs["\143\x69\x74\x79\x5f\156\141\x6d\x65"] = $city["\x6e\x61\155\145"]; goto bNYcI; HXw_L: $res = Area::get($area_id); goto Emv_Q; Pd3LI: } public function getOrderSellerMemo($order_id) { goto Ay1Gw; v2Ojn: return $res["\163\x65\154\154\145\x72\x5f\x6d\x65\155\157"]; goto NIcGL; ZXmTy: $res = $order->getInfo(["\x6f\162\x64\145\162\137\x69\x64" => $order_id], "\52"); goto v2Ojn; Ay1Gw: $order = new Order(); goto ZXmTy; NIcGL: } public function getOrderReceiveDetail($order_id) { goto T0PBh; T0PBh: $order = new Order(); goto mQgIV; VyYar: return $res; goto U2Wq9; mQgIV: $res = $order->getInfo(["\x6f\162\x64\x65\162\137\151\144" => $order_id], "\x6f\162\x64\145\162\137\151\144\54\162\145\143\145\151\x76\145\x72\137\155\157\x62\151\x6c\x65\x2c\x72\145\143\145\151\166\x65\162\x5f\x61\x72\145\x61\54\x72\x65\x63\145\151\166\145\162\x5f\x61\x64\x64\x72\145\x73\x73\54\162\x65\143\x65\151\166\145\x72\137\x7a\151\160\x2c\x72\145\x63\145\x69\166\145\162\137\x6e\141\x6d\x65"); goto VyYar; U2Wq9: } }