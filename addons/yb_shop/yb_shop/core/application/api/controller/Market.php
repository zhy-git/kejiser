<?php
 namespace app\api\controller; use think\Request; use think\Db; use app\api\service\MarketService; require_once BASE_ROOT . "\143\x6f\162\145\x2f\x61\160\x70\154\151\x63\x61\x74\151\x6f\x6e\x2f\141\x70\x69\x2f\143\157\x6e\164\x72\157\154\154\x65\162\x2f\x42\141\163\145\103\x6f\x6e\164\x72\157\154\154\145\x72\x2e\x70\150\x70"; class Market extends BaseController { public function ManJian() { goto Oe3Px; HiszI: $mch_id = $this->getMchId($app_id); goto OOpLh; FBpHR: $info = $goods->ManJian($mch_id); goto uwD8n; RDiHj: $result = $this->checkParam($rule, $data); goto jzK3M; JR0_D: $rule = [["\x6d\143\x68\137\151\144", "\162\145\x71\x75\x69\162\x65", "\xe4\270\215\xe5\xad\x98\xe5\x9c\250\345\225\x86\346\x88\xb7"]]; goto RDiHj; P4MLF: return json_encode($rs); goto ajmzA; ELUYM: return json_encode($rs); goto t9a3d; E9VRv: $rs["\x6d\x73\147"] = $result; goto P4MLF; uwD8n: $rs["\151\156\146\157"] = $info; goto ELUYM; Oe3Px: $rs = array("\x63\x6f\144\145" => 0, "\x69\156\x66\x6f" => array()); goto yE9T4; ucY3e: $goods = new MarketService(); goto FBpHR; OOpLh: $data = ["\155\143\150\137\x69\x64" => $mch_id]; goto JR0_D; jzK3M: if (empty($result)) { goto ifVrt; } goto S363T; S363T: $rs["\143\x6f\144\145"] = 1; goto E9VRv; ajmzA: ifVrt: goto ucY3e; yE9T4: $app_id = Request::instance()->param("\151"); goto HiszI; t9a3d: } public function mchInfo() { goto Zptb0; FBCk5: return json_encode($rs); goto osNXc; O2qgb: $result = $this->checkParam($rule, $data); goto pUSxj; Zptb0: $rs = array("\x63\157\144\x65" => 0, "\x69\156\146\x6f" => array()); goto ZYVMB; Abg20: $info = $goods->mchInfo($mch_id); goto MKUYx; XzTtu: return json_encode($rs); goto K6ma4; LLppu: $goods = new MarketService(); goto Abg20; ge2g1: $data = ["\155\x63\150\137\151\x64" => $mch_id]; goto jDDc1; osNXc: LPc18: goto LLppu; pUSxj: if (empty($result)) { goto LPc18; } goto YcjDc; XsFlO: $mch_id = $this->getMchId($app_id); goto ge2g1; bILGt: $rs["\x6d\163\x67"] = $result; goto FBCk5; ZYVMB: $app_id = Request::instance()->param("\151"); goto XsFlO; YcjDc: $rs["\143\x6f\x64\x65"] = 1; goto bILGt; MKUYx: $rs["\x69\x6e\146\157"] = $info; goto XzTtu; jDDc1: $rule = [["\155\143\x68\x5f\151\144", "\x72\145\x71\x75\x69\162\x65", "\xe4\xb8\215\345\255\x98\345\x9c\250\345\225\x86\346\210\267"]]; goto O2qgb; K6ma4: } public function booklist() { goto XeZlf; epSXn: $info = $goods->booklist($data, $page); goto KbPR0; XeZlf: $rs = array("\x63\x6f\x64\x65" => 0, "\151\x6e\x66\157" => array()); goto E7z2F; ag98B: $rs["\x6d\163\147"] = $result; goto ogEDB; hJxbW: $rs["\x63\157\x64\145"] = 1; goto ag98B; yiQi7: $page = Request::instance()->param("\x70\141\x67\x65", 1); goto ZWxLE; VeIE4: rWDqT: goto KXQtM; E7z2F: $app_id = Request::instance()->param("\151"); goto QoCFv; gZm1L: $result = $this->checkParam($rule, $data); goto GJol7; KbPR0: $rs["\x69\x6e\x66\157"] = $info; goto N0cgw; GJol7: if (empty($result)) { goto rWDqT; } goto hJxbW; tnp0g: $rule = [["\x6d\x63\150\x5f\x69\144", "\x72\x65\161\x75\x69\x72\145", "\xe4\270\215\345\xad\230\xe5\x9c\xa8\345\x95\206\xe6\x88\xb7"]]; goto gZm1L; QoCFv: $mch_id = $this->getMchId($app_id); goto yiQi7; KXQtM: $goods = new MarketService(); goto epSXn; N0cgw: return json_encode($rs); goto Ag4mG; ogEDB: return json_encode($rs); goto VeIE4; ZWxLE: $data = ["\x6d\143\150\x5f\151\144" => $mch_id]; goto tnp0g; Ag4mG: } public function bookinfo() { goto D1C3c; Lb_d4: $rule = [["\x6d\143\150\137\151\x64", "\162\x65\x71\165\151\x72\145", "\xe4\xb8\215\345\xad\x98\xe5\x9c\xa8\345\x95\206\xe6\x88\267"], ["\x69\x64", "\162\145\x71\165\x69\162\x65"]]; goto yWvLH; hO8eo: $app_id = Request::instance()->param("\x69"); goto jatSg; qh57t: $id = Request::instance()->param("\151\144"); goto G0Rx2; r8DTO: $info = $goods->bookinfo($data); goto Wf_Ja; P7OMJ: pQqqX: goto dq3Tw; DGSDU: $rs["\x6d\x73\147"] = $result; goto K6Ugd; BJlVf: $rs["\143\x6f\144\x65"] = 1; goto DGSDU; He1CM: return json_encode($rs); goto P7OMJ; Wf_Ja: if (!empty($info)) { goto pQqqX; } goto iLyMb; D1C3c: $rs = array("\143\x6f\x64\145" => 0, "\x69\156\146\x6f" => array()); goto hO8eo; jatSg: $mch_id = $this->getMchId($app_id); goto qh57t; iLyMb: $rs["\x63\x6f\x64\145"] = 1; goto SHPQ3; QN2zR: return json_encode($rs); goto XdxcT; jLTUX: LhiYE: goto yduw8; K6Ugd: return json_encode($rs); goto jLTUX; dq3Tw: $rs["\151\156\x66\157"] = $info; goto QN2zR; ETSu3: if (empty($result)) { goto LhiYE; } goto BJlVf; yduw8: $goods = new MarketService(); goto r8DTO; yWvLH: $result = $this->checkParam($rule, $data); goto ETSu3; SHPQ3: $s["\x6d\x73\147"] = "\xe6\234\252\350\x8e\xb7\xe5\217\x96\345\x88\xb0\xe9\xa2\204\xe7\xba\xa6\344\277\xa1\346\x81\xaf"; goto He1CM; G0Rx2: $data = ["\x6d\143\150\137\151\144" => $mch_id, "\x69\x64" => $id]; goto Lb_d4; XdxcT: } public function UserBook() { goto VNUuv; w0dNh: $goods = new MarketService(); goto AlIfC; iKpvH: $page = Request::instance()->param("\160\x61\x67\x65", 1); goto JZNiQ; AlIfC: $info = $goods->UserBook($data, $page); goto zLQru; e963c: BaBeb: goto w0dNh; KmIdi: $rs["\155\x73\x67"] = $result; goto uAMp1; uAMp1: return json_encode($rs); goto e963c; y3BdE: $result = $this->checkParam($rule, $data); goto Cpj2j; wICHh: $mch_id = $this->getMchId($app_id); goto iKpvH; VNUuv: $rs = array("\x63\157\x64\145" => 0, "\151\156\x66\157" => array()); goto n0knj; cEgAJ: $rule = [["\x6d\x63\150\137\x69\x64", "\162\x65\x71\x75\151\x72\145", "\344\270\215\xe5\255\x98\xe5\234\250\345\x95\206\346\210\267"], ["\165\163\145\x72\137\x69\x64", "\162\145\161\165\151\x72\x65", "\346\234\xaa\xe8\216\xb7\xe5\x8f\x96\345\x88\xb0\347\x94\250\xe6\210\xb7\xe4\277\241\346\201\xaf"]]; goto y3BdE; zLQru: $rs["\151\156\x66\157"] = $info; goto xYT7Y; us6LF: $rs["\x63\157\144\x65"] = 1; goto KmIdi; xYT7Y: return json_encode($rs); goto uptVq; Cpj2j: if (empty($result)) { goto BaBeb; } goto us6LF; n0knj: $app_id = Request::instance()->param("\x69"); goto wICHh; JZNiQ: $data = ["\x6d\143\150\137\x69\x64" => $mch_id, "\x75\163\x65\162\x5f\151\x64" => Request::instance()->param("\x75\163\x65\162\x5f\x69\144")]; goto cEgAJ; uptVq: } public function submitbook() { goto mo9Ou; TQNaH: Dr65m: goto rbfdC; YHxRM: $rule = [["\x6d\x63\x68\137\x69\144", "\162\x65\x71\x75\x69\x72\145", "\xe8\257\xa5\345\x95\206\346\210\xb7\344\270\215\345\xad\230\xe5\234\250\54\350\xaf\xb7\xe9\207\215\xe6\226\xb0\346\xa0\xb8\xe5\xaf\271\xe5\260\x8f\xe7\250\x8b\345\272\217\xe9\205\x8d\347\xbd\256"], ["\160\x61\x72\141\155", "\x72\x65\161\x75\x69\x72\145", "\xe5\x86\x85\xe5\256\271\xe4\270\x8d\350\x83\xbd\344\270\272\xe7\xa9\xba"], ["\164\150\x69\x6e\x67\x5f\151\x64", "\162\145\x71\x75\x69\162\x65", "\xe8\241\xa8\xe5\x8d\x95\xe4\xb8\215\xe5\xad\230\345\x9c\xa8"], ["\x66\x6f\x72\155", "\162\145\161\165\x69\162\x65", "\350\241\xa8\xe5\215\x95\344\xb8\215\345\255\230\xe5\234\250"], ["\x75\163\145\x72\x5f\151\x64", "\162\x65\161\165\x69\162\145", "\xe6\234\252\xe8\x8e\xb7\345\x8f\x96\345\x88\xb0\347\224\xa8\346\x88\xb7\344\xbf\241\346\x81\257\357\xbc\x8c\xe8\xaf\xb7\xe9\x87\215\350\257\x95"]]; goto z5WkM; OKqgf: $rs["\155\x73\x67"] = "\351\242\x84\xe7\272\xa6\xe5\267\262\346\x8f\220\xe4\xba\244\357\274\x8c\350\257\267\345\213\xbf\xe9\207\x8d\xe5\244\215\346\xb7\273\xe5\212\xa0"; goto J_yeY; S3ppc: $data = ["\x6d\x63\150\x5f\151\x64" => $mch_id, "\x70\x61\x72\141\155" => $param, "\x75\x73\145\x72\x5f\x69\x64" => $user_id, "\164\x68\x69\156\147\137\151\x64" => $thing_id, "\x66\157\162\x6d" => $form]; goto YHxRM; IKVf3: $rs["\x63\157\144\x65"] = 1; goto na7b3; z5WkM: $result = $this->checkParam($rule, $data); goto ldRhP; DXrPg: $app_id = Request::instance()->param("\x69"); goto mtu7m; OfnrF: $user_id = Request::instance()->param("\x75\x73\x65\162\137\151\144"); goto ZsjHJ; OLU1r: $mch_id = $this->getMchId($app_id); goto S3ppc; bfWqD: $limit_num = Db::name("\x79\x62\163\143\137\x62\x75\x73\x5f\x66\157\162\x6d")->where("\151\144", $bus_form_id)->value("\x6c\151\155\x69\164\x5f\x6e\165\155"); goto utNDO; ldRhP: if (empty($result)) { goto ogu4S; } goto xluGC; ZsjHJ: $form = Request::instance()->param("\x66\157\162\155"); goto OLU1r; xluGC: $rs["\143\x6f\x64\145"] = 1; goto EIJjU; v3D2B: return json_encode($rs); goto TQNaH; EkWJ4: ixYpp: goto v5IrC; na7b3: $rs["\155\x73\x67"] = "\346\217\220\344\272\xa4\346\254\xa1\xe6\225\xb0\345\267\262\xe8\276\276\345\210\xb0\344\xb8\x8a\347\272\xbf"; goto jQVqg; jQVqg: return json_encode($rs); goto EkWJ4; v5IrC: $index = new MarketService(); goto CR1ru; JRGk7: if (!empty($info)) { goto Dr65m; } goto VxSb8; MOzh2: if (!($limit_num != 0 && $num > $limit_num)) { goto ixYpp; } goto IKVf3; xec6K: return json_encode($rs); goto rE2Yc; EIJjU: $rs["\155\163\x67"] = $result; goto WafR_; HJIqI: $rs["\155\x73\x67"] = "\xe6\223\x8d\xe4\xbd\234\345\244\xb1\350\264\xa5"; goto v3D2B; OiNMq: $bus_form_id = Db::name("\x79\x62\x73\143\x5f\x72\x65\163\x65\x72\166\145\137\x74\x68\151\156\147")->where(["\155\x63\x68\137\151\x64" => $mch_id, "\x69\x64" => $thing_id])->value("\x66\157\x72\155\x5f\151\144"); goto bfWqD; CR1ru: $info = $index->submit_form($data); goto JRGk7; cX7Bu: WyylJ: goto QHQMS; utNDO: $num = Db::name("\171\142\163\x63\137\x72\145\163\145\162\166\145\137\x70\x6f\x69\x6e\x74")->where(["\155\x63\150\137\151\x64" => $mch_id, "\164\150\x69\156\147\137\x69\x64" => $thing_id, "\165\163\145\162\x5f\x69\144" => $user_id])->count(); goto MOzh2; Nz9_9: ogu4S: goto OiNMq; VxSb8: $rs["\143\x6f\x64\145"] = 1; goto HJIqI; mh_qu: $thing_id = Request::instance()->param("\x74\x68\x69\156\x67\x5f\x69\144"); goto OfnrF; mo9Ou: $rs = array("\x63\x6f\x64\145" => 0, "\151\x6e\x66\x6f" => array()); goto DXrPg; MFjVh: $rs["\143\157\x64\145"] = 1; goto OKqgf; QHQMS: $rs["\x69\156\146\157"] = $info; goto xec6K; rbfdC: if (!($info == -1)) { goto WyylJ; } goto MFjVh; WafR_: return json_encode($rs); goto Nz9_9; mtu7m: $param = Request::instance()->param("\x64\141\x74\x61"); goto mh_qu; J_yeY: return json_encode($rs); goto cX7Bu; rE2Yc: } public function BusCoupon() { goto kOAtX; m6V4X: $rs["\x69\x6e\146\157"] = $info; goto B_LjI; kOAtX: $rs = array("\143\157\144\x65" => 0, "\151\x6e\x66\x6f" => array()); goto lr91z; jnQ6T: $result = $this->checkParam($rule, $data); goto chrMR; chrMR: if (empty($result)) { goto dcxCp; } goto ld8P1; ENLpW: $mch_id = $this->getMchId($app_id); goto yhZbw; gzH3a: $rule = [["\x6d\143\150\x5f\151\x64", "\162\145\x71\x75\x69\162\145", "\xe4\270\215\345\xad\230\345\x9c\xa8\345\225\206\xe6\x88\267"], ["\x75\163\145\x72\x5f\151\x64", "\x72\145\x71\x75\151\x72\x65", "\347\224\250\xe6\210\267\xe4\xbf\241\346\x81\257\344\270\215\xe8\x83\275\xe4\xb8\xba\347\xa9\272"]]; goto jnQ6T; gzVZH: $rs["\x6d\x73\147"] = $result; goto RZYxj; BZ_su: dcxCp: goto cCIe1; QSKTB: $data = ["\x6d\x63\x68\x5f\x69\144" => $mch_id, "\165\x73\x65\x72\x5f\151\x64" => Request::instance()->param("\x75\163\x65\162\x5f\151\144")]; goto gzH3a; cCIe1: $goods = new MarketService(); goto oR355; ld8P1: $rs["\x63\x6f\144\145"] = 1; goto gzVZH; RZYxj: return json_encode($rs); goto BZ_su; yhZbw: $page = Request::instance()->param("\160\141\147\x65", 1); goto QSKTB; oR355: $info = $goods->BusCoupon($data, $page); goto m6V4X; B_LjI: return json_encode($rs); goto rzCbv; lr91z: $app_id = Request::instance()->param("\151"); goto ENLpW; rzCbv: } public function GetCoupon() { goto yqnU1; lOFXv: wChxu: goto YiAOH; Ogxb7: $app_id = Request::instance()->param("\151"); goto Q13Ja; Df1q4: if ($info == "\145\x78\151\163\164") { goto T8yeV; } goto QXY_C; fv32x: $rs["\x63\x6f\x64\145"] = 1; goto Yg0DA; PmBF4: return json_encode($rs); goto OKFJ_; XgAVJ: $rs["\x63\x6f\x64\145"] = 1; goto GiHsH; w_hW3: kZvZS: goto oc6cI; yO9hx: $rs["\155\163\x67"] = "\xe9\242\x86\345\x8f\x96\xe5\244\xb1\350\264\xa5"; goto DTbD_; v0Idt: if (empty($info)) { goto kZvZS; } goto VXBTs; RZNEK: $rs["\143\157\144\x65"] = 1; goto dIBU4; eh_WP: $result = $this->checkParam($rule, $data); goto CLWWv; I5gc0: $data = ["\x6d\143\150\x5f\x69\x64" => $mch_id, "\x75\x73\x65\x72\x5f\x69\144" => Request::instance()->param("\165\x73\x65\162\137\x69\144"), "\143\x6f\165\160\157\x6e\137\x69\144" => Request::instance()->param("\x63\157\x75\160\x6f\x6e\x5f\x69\144"), "\x67\x65\164\x5f\x74\x69\155\x65" => time(), "\x73\164\x61\164\x75\163" => 0, "\153\145\171" => $this->createOutTradeNo()]; goto UepKH; oc6cI: $rs["\143\157\x64\145"] = 1; goto yO9hx; CLWWv: if (empty($result)) { goto VYZJM; } goto XgAVJ; p3qnX: return json_encode($rs); goto BOYiw; Q13Ja: $mch_id = $this->getMchId($app_id); goto I5gc0; BOYiw: VYZJM: goto QgZN7; VXBTs: $rs["\x69\x6e\146\157"] = $info; goto Qv2Hj; FSClj: return json_encode($rs); goto xcRBc; DTbD_: return json_encode($rs); goto lOFXv; QgZN7: $goods = new MarketService(); goto Gqj1w; yqnU1: $rs = array("\143\x6f\x64\145" => 0, "\151\156\146\157" => array()); goto Ogxb7; LN0pw: T8yeV: goto RZNEK; aHMjV: R5mnD: goto fv32x; kIM1d: goto wChxu; goto LN0pw; GiHsH: $rs["\155\163\147"] = $result; goto p3qnX; xcRBc: goto wChxu; goto w_hW3; UepKH: $rule = [["\x6d\x63\150\x5f\x69\x64", "\162\145\161\x75\x69\162\x65", "\xe4\xb8\215\345\255\230\345\234\xa8\xe5\x95\x86\346\x88\267"], ["\x75\163\145\162\x5f\151\144", "\x72\145\x71\165\x69\x72\x65"], ["\x63\x6f\165\160\157\156\x5f\151\144", "\162\145\x71\x75\x69\x72\x65"]]; goto eh_WP; Qv2Hj: return json_encode($rs); goto kIM1d; Gqj1w: $info = $goods->GetCoupon($data); goto Df1q4; OKFJ_: goto wChxu; goto aHMjV; QXY_C: if ($info == "\145\155\x70\164\x79") { goto R5mnD; } goto v0Idt; dIBU4: $rs["\x6d\163\x67"] = "\xe6\x82\xa8\xe5\xb7\xb2\xe7\xbb\x8f\351\242\x86\345\217\x96\xe8\xbf\207\350\xaf\245\xe4\xbc\x98\346\x83\xa0\xe5\x88\xb8\344\xba\206"; goto PmBF4; Yg0DA: $rs["\x6d\x73\x67"] = "\xe8\xaf\xa5\344\274\x98\xe6\x83\240\345\210\xb8\345\xb7\262\351\xa2\x86\345\256\214"; goto FSClj; YiAOH: } public function UserCoupon() { goto loIqF; SuRxw: $page = Request::instance()->param("\x70\x61\x67\x65", 1); goto KE_GP; n7QW7: $mch_id = $this->getMchId($app_id); goto SuRxw; aUluJ: return json_encode($rs); goto Y5XDs; sR0Te: $info = $goods->UserCoupon($data, $page); goto knTs0; tBhcl: $rule = [["\155\x63\150\x5f\x69\x64", "\x72\145\x71\165\x69\x72\x65", "\344\xb8\215\345\255\x98\345\x9c\250\xe5\x95\206\346\210\xb7"], ["\x75\163\145\x72\x5f\x69\144", "\x72\145\161\x75\151\162\145", "\xe6\x9c\252\xe8\216\xb7\xe5\x8f\x96\xe5\x88\260\xe7\224\250\xe6\210\xb7\xe4\277\241\346\x81\257"]]; goto rrAXB; RI9F4: $rs["\x6d\x73\x67"] = $result; goto E8hE1; E8hE1: return json_encode($rs); goto Y1yzQ; knTs0: $rs["\151\156\146\x6f"] = $info; goto aUluJ; loIqF: $rs = array("\x63\x6f\x64\x65" => 0, "\x69\x6e\x66\157" => array()); goto ZNQI6; KE_GP: $data = ["\155\x63\x68\x5f\151\144" => $mch_id, "\165\x73\x65\162\x5f\151\144" => Request::instance()->param("\x75\163\145\162\x5f\x69\144")]; goto tBhcl; rrAXB: $result = $this->checkParam($rule, $data); goto kkMZE; ZfR0R: $goods = new MarketService(); goto sR0Te; kkMZE: if (empty($result)) { goto nWUDv; } goto KTxQr; KTxQr: $rs["\143\x6f\x64\x65"] = 1; goto RI9F4; ZNQI6: $app_id = Request::instance()->param("\x69"); goto n7QW7; Y1yzQ: nWUDv: goto ZfR0R; Y5XDs: } public function getFormid() { goto pmxde; MfaMm: $info = $goods->getFormid($data); goto qJo5l; QBV5L: return json_encode($rs); goto o5Il5; d_Iur: return json_encode($rs); goto qdGMw; qJo5l: $rs["\151\x6e\146\x6f"] = $info; goto QBV5L; OQO1s: Q6cSc: goto tUK3O; tUK3O: $goods = new MarketService(); goto MfaMm; tD4oc: $rule = [["\155\143\150\137\151\144", "\x72\145\x71\x75\151\162\x65", "\xe4\270\x8d\xe5\255\x98\345\x9c\250\345\x95\x86\xe6\210\267"], ["\157\160\x65\x6e\x5f\151\144", "\x72\145\161\165\151\162\x65"], ["\x66\157\x72\x6d\137\151\144", "\162\x65\x71\x75\x69\162\145"]]; goto Axtv7; MiMCu: $rs["\x6d\163\147"] = $result; goto aHmWs; QQi18: if (empty($result)) { goto Q6cSc; } goto haiPo; Axtv7: $result = $this->checkParam($rule, $data); goto QQi18; Ztz0k: $data = ["\x6d\x63\150\x5f\151\x64" => $mch_id, "\x6f\x70\x65\156\x5f\151\x64" => Request::instance()->param("\x6f\160\145\156\x69\x64"), "\146\x6f\162\x6d\x5f\151\144" => Request::instance()->param("\146\x6f\x72\155\x69\144"), "\x75\163\x65\162\x5f\x6e\141\155\145" => Request::instance()->param("\165\163\145\x72\156\141\155\x65"), "\x63\x72\145\141\164\x65\x5f\x74\x69\155\x65" => time()]; goto tD4oc; NO0Ef: $mch_id = $this->getMchId($app_id); goto Ztz0k; pmxde: $rs["\143\x6f\144\145"] = 1; goto uwYHt; qdGMw: $rs = array("\143\157\144\145" => 0, "\151\156\x66\157" => array()); goto dtXdD; uwYHt: $rs["\x6d\163\x67"] = ''; goto d_Iur; dtXdD: $app_id = Request::instance()->param("\151"); goto NO0Ef; haiPo: $rs["\143\x6f\x64\145"] = 1; goto MiMCu; aHmWs: return json_encode($rs); goto OQO1s; o5Il5: } }
