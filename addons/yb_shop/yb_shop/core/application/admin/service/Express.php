<?php
 namespace app\admin\service; use app\common\model\Area; use app\common\model\ExpressCompany; use app\common\model\ExpressShipping; use think\Db; class Express extends Base { function __construct() { parent::__construct(); $this->express = new ExpressCompany(); } public function addExpressCompany($company_name, $express_logo, $express_no, $is_enabled, $phone, $is_default, $mch_id) { goto UzlE0; OZZxJ: $ns_express_company->startTrans(); goto KtjdL; UzlE0: $ns_express_company = new ExpressCompany(); goto OZZxJ; KtjdL: try { goto Hf3XL; Hf3XL: if (!($is_default == 1)) { goto ilYiY; } goto K5MRh; u6PVy: return $ns_express_company->co_id; goto MbhPs; XEoxb: ilYiY: goto BtD3U; Z7ayl: $ns_express_company->commit(); goto u6PVy; BtD3U: $data = array("\x63\x6f\x6d\x70\x61\156\171\137\156\141\x6d\x65" => $company_name, "\145\170\160\162\145\x73\163\137\154\x6f\x67\157" => $express_logo, "\145\x78\160\x72\145\163\163\x5f\156\x6f" => $express_no, "\151\163\137\x65\x6e\x61\142\x6c\x65\x64" => $is_enabled, "\160\x68\x6f\x6e\145" => $phone, "\151\x73\x5f\x64\145\x66\x61\165\154\164" => $is_default, "\143\162\145\x61\164\145\x5f\164\x69\155\145" => time(), "\155\x63\150\137\x69\144" => $mch_id); goto xY_ka; K5MRh: $this->defaultExpressCompany($mch_id); goto XEoxb; xY_ka: $ns_express_company->save($data); goto Z7ayl; MbhPs: } catch (\Exception $e) { $ns_express_company->rollback(); return $e->getCode(); } goto DmUkD; DmUkD: } public function updateExpressCompany($co_id, $company_name, $express_logo, $express_no, $is_enabled, $phone, $is_default, $mch_id) { goto LAJJh; UAnlx: return $res; goto ZuyTb; LAJJh: $ns_express_company = new ExpressCompany(); goto qTHZE; lJEZW: $res = $ns_express_company->save($data, ["\143\157\137\151\144" => $co_id, "\155\143\x68\137\x69\144" => $mch_id]); goto UAnlx; v7SFu: DK8Rr: goto ooOJR; JQEIk: $this->defaultExpressCompany($co_id); goto v7SFu; qTHZE: if (!($is_default == 1)) { goto DK8Rr; } goto JQEIk; ooOJR: $data = array("\143\x6f\x6d\160\141\x6e\171\x5f\x6e\x61\x6d\145" => $company_name, "\x65\x78\160\162\x65\x73\x73\137\154\157\x67\x6f" => $express_logo, "\145\x78\160\x72\x65\x73\x73\137\156\x6f" => $express_no, "\x69\x73\137\145\x6e\x61\x62\x6c\145\144" => $is_enabled, "\160\150\x6f\156\x65" => $phone, "\151\163\x5f\144\145\x66\x61\x75\154\164" => $is_default, "\155\143\x68\137\x69\144" => $mch_id); goto lJEZW; ZuyTb: } public function expressCompanyQuery($where = '', $field = "\52") { $ns_express_company = new ExpressCompany(); return $ns_express_company->where($where)->field($field)->select(); } public function expressCompanyDetail($co_id) { $ns_express_company = new ExpressCompany(); return $ns_express_company->get($co_id); } public function defaultExpressCompany($co_id) { Db::name("\171\142\163\143\137\x65\x78\x70\x72\x65\163\163\137\143\157\155\160\141\156\x79")->whereNotIn("\143\157\x5f\x69\x64", $co_id)->update(["\x69\x73\137\144\x65\x66\x61\165\x6c\x74" => 0]); } public function getShippingFeeList($condition = '', $field = "\x2a", $order = '') { goto Oj0Y8; CBclG: $list = $ns_order_shipping_fee->getQuerys($condition, $field, $order); goto qsc_9; qsc_9: foreach ($list as $k => $v) { goto QAqJn; QAqJn: $address = new \app\admin\service\Area(); goto xaa3p; xaa3p: $list[$k]["\141\144\144\x72\x65\x73\163\137\x6c\x69\x73\164"] = $address->getAddressListById($v["\x70\162\x6f\166\151\x6e\143\145\x5f\x69\144\137\141\x72\162\141\x79"], $v["\143\x69\164\171\x5f\151\x64\x5f\141\162\162\141\x79"]); goto ALlDX; ALlDX: EwrRO: goto t_pkp; t_pkp: } goto X3f8h; X3f8h: iDDI6: goto TjKUK; TjKUK: return $list; goto VXdXn; Oj0Y8: $ns_order_shipping_fee = new ExpressShipping(); goto CBclG; VXdXn: } public function getExpressCompanyList($condition, $search_text, $order = '') { goto tmjo6; ifYqr: return $list; goto FRpox; wZB7i: $list = $ns_express_company->getPageLisy($condition, $search_text, $order); goto ifYqr; tmjo6: $ns_express_company = new ExpressCompany(); goto wZB7i; FRpox: } public function getExpressCompany($condition, $field = "\52", $order) { goto PzyTk; PMKLn: return $list; goto r93_j; PzyTk: $ns_express_company = new ExpressCompany(); goto ccc1u; ccc1u: $list = $ns_express_company->getQuerys($condition, $field, $order); goto PMKLn; r93_j: } public function expressCompanyDelete($co_id) { goto vSiVV; CoAcg: if ($ns_express_company_return > 0) { goto wCoFs; } goto VVBMo; cEayA: $ns_express_company_return = $ns_express_company->destroy($conditon); goto CoAcg; Hb_1P: HH1aI: goto q_YQ5; FuaQ8: $conditon = array("\x63\x6f\x5f\151\x64" => array("\x69\x6e", $co_id)); goto cEayA; UV5HK: return 1; goto Hb_1P; vSiVV: $ns_express_company = new ExpressCompany(); goto FuaQ8; WF3QI: goto HH1aI; goto CGgdc; CGgdc: wCoFs: goto UV5HK; VVBMo: return -1; goto WF3QI; q_YQ5: } public function addShippingFee($co_id, $is_default, $shipping_fee_name, $province_id_array, $city_id_array, $district_id_array, $weight_is_use, $weight_snum, $weight_sprice, $weight_xnum, $weight_xprice, $volume_is_use, $volume_snum, $volume_sprice, $volume_xnum, $volume_xprice, $bynum_is_use, $bynum_snum, $bynum_sprice, $bynum_xnum, $bynum_xprice) { goto u2bJk; u2bJk: $order_shipping_fee = new ExpressShipping(); goto bo7sj; bo7sj: $order_shipping_fee->startTrans(); goto ji2lT; ji2lT: try { goto o6eM4; uj043: $order_shipping_fee->commit(); goto MmZBN; apt62: $order_shipping_fee->save($data); goto uj043; o6eM4: $data = array("\163\150\151\x70\160\151\156\x67\137\x66\145\x65\x5f\156\x61\155\145" => $shipping_fee_name, "\x63\x6f\x5f\x69\144" => $co_id, "\151\163\x5f\x64\145\146\x61\165\x6c\164" => $is_default, "\x70\162\157\166\x69\x6e\143\x65\137\151\x64\137\x61\162\162\141\x79" => $province_id_array, "\143\151\x74\171\137\x69\144\x5f\x61\x72\162\x61\x79" => $city_id_array, "\x64\x69\163\164\x72\151\x63\x74\137\x69\144\x5f\x61\x72\162\x61\171" => $district_id_array, "\167\145\x69\x67\150\x74\x5f\x69\x73\x5f\x75\163\x65" => $weight_is_use, "\167\145\x69\147\150\164\x5f\163\x6e\x75\x6d" => $weight_snum, "\167\x65\x69\x67\x68\x74\x5f\x78\156\165\x6d" => $weight_xnum, "\167\145\151\147\150\x74\x5f\x73\160\162\151\143\145" => $weight_sprice, "\x77\x65\151\147\x68\164\137\x78\x70\x72\x69\143\x65" => $weight_xprice, "\x76\157\x6c\x75\x6d\145\137\x69\163\x5f\165\163\145" => $volume_is_use, "\x76\157\154\165\155\x65\x5f\163\156\x75\x6d" => $volume_snum, "\166\x6f\154\x75\x6d\x65\x5f\x73\160\162\151\x63\x65" => $volume_sprice, "\x76\157\154\165\x6d\145\x5f\x78\x6e\165\155" => $volume_xnum, "\x76\157\154\x75\155\x65\137\170\160\x72\x69\143\145" => $volume_xprice, "\x62\x79\156\165\x6d\137\x69\163\137\x75\x73\145" => $bynum_is_use, "\142\x79\156\x75\x6d\137\x73\156\165\155" => $bynum_snum, "\142\x79\x6e\x75\155\137\163\x70\x72\x69\143\145" => $bynum_sprice, "\142\x79\x6e\165\x6d\137\170\x6e\x75\x6d" => $bynum_xnum, "\x62\171\x6e\165\x6d\137\170\160\162\x69\143\x65" => $bynum_xprice, "\x63\x72\145\x61\x74\x65\x5f\x74\x69\155\145" => time()); goto apt62; MmZBN: return 1; goto y0jfH; y0jfH: } catch (\Exception $e) { $order_shipping_fee->rollback(); return $e->getMessage(); } goto sq75z; sq75z: return -1; goto cfWf_; cfWf_: } public function updateShippingFee($shipping_fee_id, $is_default, $shipping_fee_name, $province_id_array, $city_id_array, $district_id_array, $weight_is_use, $weight_snum, $weight_sprice, $weight_xnum, $weight_xprice, $volume_is_use, $volume_snum, $volume_sprice, $volume_xnum, $volume_xprice, $bynum_is_use, $bynum_snum, $bynum_sprice, $bynum_xnum, $bynum_xprice) { goto liO2I; UzjFT: return -1; goto nvKog; uw2H_: $order_shipping_fee->startTrans(); goto RWRGo; liO2I: $order_shipping_fee = new ExpressShipping(); goto uw2H_; RWRGo: try { goto M8WX2; OuV4p: $order_shipping_fee->commit(); goto QqsDW; M8WX2: $data = array("\163\x68\151\x70\x70\151\156\x67\137\146\145\x65\x5f\x6e\x61\x6d\145" => $shipping_fee_name, "\151\163\x5f\144\145\146\141\x75\x6c\164" => $is_default, "\160\162\157\166\151\156\143\145\137\x69\144\x5f\x61\162\x72\141\171" => $province_id_array, "\x63\151\164\x79\x5f\151\144\137\141\x72\162\x61\x79" => $city_id_array, "\x64\x69\163\164\x72\x69\x63\164\137\x69\144\x5f\x61\162\x72\x61\171" => $district_id_array, "\167\x65\x69\x67\150\164\x5f\151\x73\137\x75\x73\x65" => $weight_is_use, "\x77\145\x69\x67\x68\164\137\x73\156\165\x6d" => $weight_snum, "\x77\145\x69\x67\x68\x74\x5f\170\x6e\165\x6d" => $weight_xnum, "\x77\145\x69\147\x68\164\x5f\163\160\162\x69\x63\x65" => $weight_sprice, "\x77\145\151\147\150\x74\137\170\160\162\151\143\145" => $weight_xprice, "\166\157\154\165\x6d\145\x5f\x69\x73\137\x75\163\x65" => $volume_is_use, "\x76\x6f\154\165\x6d\x65\x5f\163\156\165\155" => $volume_snum, "\166\157\x6c\x75\155\145\137\163\160\x72\151\x63\x65" => $volume_sprice, "\x76\x6f\154\x75\155\x65\x5f\170\x6e\165\x6d" => $volume_xnum, "\x76\x6f\x6c\x75\155\x65\137\170\x70\x72\151\143\145" => $volume_xprice, "\x62\x79\156\165\155\137\x69\x73\137\x75\x73\145" => $bynum_is_use, "\x62\x79\x6e\165\155\x5f\x73\156\x75\155" => $bynum_snum, "\x62\171\156\165\155\x5f\x73\x70\162\151\x63\145" => $bynum_sprice, "\142\x79\x6e\165\x6d\137\x78\156\165\x6d" => $bynum_xnum, "\142\x79\x6e\x75\x6d\137\170\x70\x72\x69\143\145" => $bynum_xprice, "\165\160\144\x61\164\145\x5f\x74\x69\155\145" => time()); goto eveFU; eveFU: $order_shipping_fee->save($data, ["\x73\x68\151\x70\160\151\x6e\x67\137\x66\x65\x65\137\x69\144" => $shipping_fee_id]); goto OuV4p; QqsDW: return 1; goto L6Efx; L6Efx: } catch (\Exception $e) { $order_shipping_fee->rollback(); return $e->getMessage(); } goto UzjFT; nvKog: } public function isHasExpressCompanyDefaultTemplate($co_id) { goto ZwRKX; cQdYw: $is_default = 1; goto X9pbJ; BBO3I: LE4vC: goto vbTWq; vbTWq: return $is_default; goto Ua0SP; xG5e1: $list = $ns_order_shipping_fee->getQuerys(["\143\157\137\151\x64" => $co_id], "\x69\163\x5f\144\x65\146\141\x75\x6c\164", ''); goto cQdYw; ZwRKX: $ns_order_shipping_fee = new ExpressShipping(); goto xG5e1; X9pbJ: foreach ($list as $v) { goto o1Z36; WOr34: rNo12: goto JX1XV; lUiLE: $is_default = 0; goto jd0la; jd0la: goto LE4vC; goto OKTcE; OKTcE: SxzAI: goto WOr34; o1Z36: if (!$v["\x69\x73\x5f\x64\x65\146\141\165\154\164"]) { goto SxzAI; } goto lUiLE; JX1XV: } goto BBO3I; Ua0SP: } public function shippingFeeDetail($shipping_fee_id) { goto dEY8P; S1p2S: $address = new \app\admin\service\Area(); goto bNmUm; IDVsl: $order_shipping_fee_info["\141\144\144\162\145\x73\163\x5f\x6e\x61\155\145"] = $address_name; goto MDiCt; dEY8P: $order_shipping_fee = new ExpressShipping(); goto Nr3pD; MDiCt: return $order_shipping_fee_info; goto aDy2n; Q_HQn: $address_name = ''; goto trQCb; MUabS: $address_name = substr($address_name, 0, strlen($address_name) - 1); goto IDVsl; trQCb: $province_array = explode("\x2c", $order_shipping_fee_info["\x70\162\157\166\x69\x6e\143\145\x5f\151\x64\137\x61\162\162\141\171"]); goto iHZTH; bNmUm: $area = $address->getAreaList(); goto Q_HQn; MOXVP: WCMVs: goto MUabS; Nr3pD: $order_shipping_fee_info = $order_shipping_fee->get($shipping_fee_id); goto S1p2S; iHZTH: foreach ($province_array as $e) { goto AWqpU; AWqpU: foreach ($area as $p) { goto PorFH; PorFH: if (!($e == $p["\151\144"])) { goto cPimx; } goto Wnl4_; evtUC: cPimx: goto xMoUz; Wnl4_: $address_name = $address_name . $p["\x6e\x61\155\x65"] . "\x2c"; goto evtUC; xMoUz: AQ4LD: goto lyrRP; lyrRP: } goto e2oXw; e2oXw: gculY: goto pkENV; pkENV: UKzrP: goto BXBli; BXBli: } goto MOXVP; aDy2n: } public function getExpressCompanyProvincesAndCitiesById($co_id, $current_province_id_array) { goto pecbK; s1gvJ: $province_id_array = []; goto x0OEP; L1Mjy: foreach ($list as $k => $v) { goto LLHZ4; VJ3wa: oPYwE: goto fBiHk; fildR: foreach ($temp_province_array as $temp_province_id) { array_push($province_id_array, $temp_province_id); UVJHO: } goto schKq; NMZ3c: $temp_province_array = explode("\x2c", $v["\160\162\157\x76\151\x6e\143\x65\137\151\144\137\x61\162\162\141\171"]); goto fildR; fBiHk: array_push($province_id_array, $v["\160\162\157\166\x69\156\x63\145\137\151\144\137\x61\x72\x72\141\x79"]); goto FwjGZ; schKq: K4ixh: goto kNg1j; YVMuz: kL9CF: goto whPSj; LLHZ4: if (!strstr($v["\160\162\x6f\x76\x69\x6e\143\x65\137\151\x64\x5f\141\162\162\x61\x79"], "\x2c")) { goto oPYwE; } goto NMZ3c; FwjGZ: gFU1k: goto YVMuz; kNg1j: goto gFU1k; goto VJ3wa; whPSj: } goto ZoW2y; kAav8: SXMOY: goto DhIPa; L_cQp: return $res_list; goto H43tM; UgD21: $list = $ns_order_shipping_fee->getQuerys(["\143\157\137\151\x64" => $co_id, "\x69\163\137\144\x65\x66\141\x75\154\x74" => 0], "\160\x72\x6f\166\x69\x6e\143\x65\137\x69\x64\137\141\162\162\x61\x79\54\143\151\x74\171\x5f\x69\144\137\141\x72\x72\x61\171\x2c\x64\x69\x73\x74\x72\151\x63\164\137\151\144\137\141\162\162\x61\x79", ''); goto s1gvJ; Ew52r: aahVn: goto jeXKl; rynB3: if (empty($current_province_id_array)) { goto YCRk6; } goto euiaW; B5S7H: VTXv4: goto uBJkq; RdB5G: foreach ($province_id_array as $province_id) { goto tO4Ko; hL0Ip: array_push($res_list["\x70\162\x6f\166\x69\156\x63\145\137\x69\144\137\141\x72\162\x61\x79"], $province_id); goto BSUvR; BSUvR: sZMaI: goto qGtj7; qGtj7: R96R4: goto ReU_L; tO4Ko: $flag = true; goto zBBas; ax3Pf: km8MP: goto JaLvD; JaLvD: if (!$flag) { goto sZMaI; } goto hL0Ip; zBBas: foreach ($curr_province_id_array as $temp_province_id) { goto srxkL; CE73G: $flag = false; goto JvF3n; srxkL: if (!($province_id == $temp_province_id)) { goto Cu0Jj; } goto CE73G; Fux7I: LhqQk: goto WDcXf; JvF3n: Cu0Jj: goto Fux7I; WDcXf: } goto ax3Pf; ReU_L: } goto B5S7H; ZoW2y: m92GY: goto uKO0f; nMnPH: $ns_order_shipping_fee = new ExpressShipping(); goto UgD21; jeXKl: array_push($curr_province_id_array, $current_province_id_array); goto kAav8; x0OEP: $res_list["\x70\162\x6f\x76\x69\156\x63\x65\x5f\x69\x64\x5f\141\x72\x72\141\x79"] = []; goto L1Mjy; uKO0f: if (!count($province_id_array)) { goto tNJ41; } goto RdB5G; uBJkq: tNJ41: goto L_cQp; DbdV_: goto SXMOY; goto Ew52r; pecbK: $curr_province_id_array = []; goto rynB3; qqynt: $curr_province_id_array = explode("\54", $current_province_id_array); goto DbdV_; euiaW: if (!strstr($current_province_id_array, "\x2c")) { goto aahVn; } goto qqynt; DhIPa: YCRk6: goto nMnPH; H43tM: } public function shippingFeeDelete($shipping_fee_id) { goto gume1; gL7o0: return -1; goto GBTjm; gume1: $order_shipping_fee = new ExpressShipping(); goto evLSI; GBTjm: goto GpD3X; goto TYCz5; vwlqf: $order_shipping_return = $order_shipping_fee->destroy($condition); goto Deo1Q; gfpvO: return 1; goto slc1v; TYCz5: mnxd6: goto gfpvO; slc1v: GpD3X: goto DRrQA; Deo1Q: if ($order_shipping_return > 0) { goto mnxd6; } goto gL7o0; evLSI: $condition = array("\x73\x68\x69\x70\x70\151\x6e\147\137\146\145\145\x5f\x69\144" => array(array("\x69\x6e", $shipping_fee_id))); goto vwlqf; DRrQA: } }