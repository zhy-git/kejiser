<?php
 namespace app\api\controller; use think\Request; use think\Db; use think\Cache; require_once BASE_ROOT . "\143\157\162\x65\57\x61\160\160\x6c\151\x63\x61\x74\x69\x6f\x6e\57\141\160\x69\57\x63\157\156\164\x72\157\x6c\154\x65\162\57\102\x61\163\145\x43\x6f\x6e\164\162\x6f\154\x6c\x65\162\x2e\x70\150\160"; class Product extends BaseController { public function productClass() { goto lM_yG; g7IrC: Cache::set($mch_id . "\137\160\162\157\144\165\x63\164\x5f\x63\154\141\x73\x73", $rs, CACHE_TIME); goto gxrA4; PJnpA: $rule = [["\155\x63\150\137\x69\x64", "\x72\x65\x71\165\151\162\x65", "\xe4\270\x8d\345\xad\230\xe5\x9c\xa8\xe5\225\206\346\210\xb7"]]; goto LXvNE; uU0r9: $rs["\x69\156\x66\x6f"] = $info; goto iIPnm; lM_yG: $rs = array("\x63\157\144\x65" => 0, "\x69\x6e\146\x6f" => array()); goto nijQ5; i0UeG: $mch_id = $this->getMchId($app_id); goto HoknU; A4E17: return json_encode($rs); goto Qwws5; R__Le: if (empty($result)) { goto P4Ier; } goto XEczL; GPZTJ: foreach ($cate_list as $value) { $info[] = $value; Iq5In: } goto jfHqd; nijQ5: $app_id = Request::instance()->param("\x69"); goto i0UeG; LXvNE: $result = $this->checkParam($rule, $data); goto R__Le; ecQ9m: P4Ier: goto Xi1kL; j71pq: return json_encode($rs); goto ecQ9m; VaDlw: if (!($info != false)) { goto ECjNO; } goto uU0r9; HoknU: $data = ["\x6d\143\150\x5f\x69\144" => $mch_id]; goto PJnpA; eKBkv: ECjNO: goto Qb2r_; XEczL: $rs["\x63\157\144\145"] = 1; goto vMHpp; iIPnm: json_encode($rs); goto eKBkv; jfHqd: SLcI0: goto g7IrC; vMHpp: $rs["\155\x73\x67"] = $result; goto j71pq; gxrA4: $rs["\x69\x6e\146\x6f"] = $info; goto A4E17; Xi1kL: $info = Cache::get($mch_id . "\137\160\x72\157\x64\165\143\x74\x5f\143\154\141\163\163"); goto VaDlw; bD6_F: $cate_list = Db::name("\171\142\x73\143\137\x70\162\157\144\x75\143\164\x5f\143\154\141\x73\x73")->where("\155\x63\x68\x5f\151\144", $mch_id)->order("\163\157\x72\x74\x20\141\x73\x63")->select(); goto GPZTJ; Qb2r_: $info = array(); goto bD6_F; Qwws5: } public function product_list() { goto j6PLX; GzrD8: ssB_L: goto mOgJf; tRro2: return json_encode($rs); goto e86N8; M84fE: $app_id = Request::instance()->param("\151"); goto CpK_x; RBmX9: $data = ["\x6d\143\x68\137\x69\144" => $mch_id, "\143\x6c\141\x73\x73\137\151\144" => $class_id]; goto D0hzu; svbyk: $mch_id = $this->getMchId($app_id); goto RBmX9; D0hzu: $data = array_filter($data); goto RzBcX; enTdZ: if (!empty($info)) { goto ssB_L; } goto kwFx0; YHcSA: $result = $this->checkParam($rule, $data); goto myQ5S; TGom0: return json_encode($rs); goto u849_; RzBcX: $rule = [["\155\143\150\x5f\151\x64", "\x72\145\161\x75\x69\162\145", "\344\xb8\215\345\xad\230\xe5\234\xa8\345\x95\x86\346\210\267"]]; goto YHcSA; TMgC6: $class_id = Request::instance()->param("\x63\x6c\141\x73\x73\x5f\x69\x64", 0); goto M84fE; j6PLX: $rs = array("\x63\x6f\x64\145" => 0, "\151\x6e\146\157" => array()); goto TMgC6; s3QrX: $info = Db::name("\171\142\x73\x63\x5f\x70\x72\157\144\x75\x63\164")->where($where)->order("\163\157\x72\164\40\x61\163\x63")->field("\151\144\54\x74\151\164\x6c\x65\54\143\x6c\x61\163\x73\x5f\x69\144\x2c\151\x6d\141\147\145")->order("\x73\x6f\x72\x74\40\x61\163\x63")->page($page, 20)->select(); goto enTdZ; gGRdA: $where["\x6d\x63\150\137\x69\144"] = $mch_id; goto h5f2p; ni8L_: $rs["\x63\x6f\x64\145"] = 1; goto g7uFK; d06ri: pvAE3: goto s3QrX; gdsK3: if (!($class_id > 0)) { goto pvAE3; } goto SZzO2; kwFx0: return json_encode($rs); goto GzrD8; myQ5S: if (empty($result)) { goto t5XXk; } goto ni8L_; CpK_x: $page = Request::instance()->param("\160\x61\147\x65", 1); goto svbyk; g7uFK: $rs["\x6d\x73\147"] = $result; goto tRro2; e86N8: t5XXk: goto gGRdA; mOgJf: $rs["\x69\156\x66\157"] = $info; goto TGom0; SZzO2: $where["\143\x6c\141\x73\x73\137\x69\144"] = $class_id; goto d06ri; h5f2p: $where["\163\x74\141\164\165\x73"] = 1; goto gdsK3; u849_: } public function product_info() { goto CXakj; iIzaV: Hf59A: goto TI0qp; iMPYG: $id = Request::instance()->param("\151\x64"); goto KlT9H; A7gJ8: $rs["\155\x73\147"] = "\xe6\x9a\202\346\x97\240\346\226\x87\347\253\xa0"; goto RyzO9; RgQ78: $app_id = Request::instance()->param("\x69"); goto pjRoe; MvA7M: return json_encode($rs); goto rbo1d; pjRoe: $mch_id = $this->getMchId($app_id); goto iMPYG; RyzO9: return json_encode($rs); goto iIzaV; CXakj: $rs = array("\143\157\x64\x65" => 0, "\151\x6e\146\157" => array()); goto RgQ78; KlT9H: $info = Db::name("\171\x62\x73\143\137\160\162\157\144\x75\143\164")->where(["\x69\x64" => $id, "\155\143\150\137\x69\144" => $mch_id])->find(); goto MWsKQ; TI0qp: $rs["\151\x6e\x66\x6f"] = $info; goto MvA7M; MWsKQ: if (!empty($info)) { goto Hf59A; } goto A7gJ8; rbo1d: } }
