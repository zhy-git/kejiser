<?php
 namespace app\api\controller; use think\Request; use think\Log; use think\db; require_once BASE_ROOT . "\x63\x6f\x72\145\57\x61\x70\x70\x6c\x69\143\141\164\151\157\156\57\x61\160\151\x2f\x63\x6f\x6e\164\x72\157\154\154\145\x72\x2f\x42\141\x73\145\x43\157\156\164\x72\x6f\x6c\154\145\x72\56\x70\x68\x70"; require_once BASE_ROOT . "\x63\157\x72\145\57\141\x70\160\x6c\151\x63\141\164\151\x6f\156\57\x61\160\x69\x2f\163\145\x72\x76\x69\x63\x65\57\x41\x72\154\151\153\x69\123\x65\162\166\151\x63\145\x2e\x70\x68\160"; use app\api\service\OrderService; use app\api\service\ArlikiService; class Order extends BaseController { public function CreateOrder() { goto FRmxR; FRmxR: $rs = array("\143\157\x64\145" => 0, "\x69\156\146\x6f" => array()); goto BXIi8; NpiYN: $data = ["\157\162\x64\145\x72\137\156\x6f" => $this->createOrderNo(), "\x6f\x75\x74\x5f\x74\162\x61\x64\x65\x5f\156\157" => $this->createOutTradeNo(), "\160\x61\171\137\164\x79\x70\145" => Request::instance()->param("\160\x61\x79\137\x74\x79\x70\x65", "\61"), "\163\150\151\160\160\151\156\x67\137\x74\x79\160\x65" => Request::instance()->param("\163\x68\x69\160\160\151\156\x67\137\164\171\x70\x65", "\61"), "\163\150\x69\160\160\x69\156\147\x5f\155\x6f\x6e\x65\171" => Request::instance()->param("\x73\x68\151\160\x70\x69\x6e\x67\x5f\x6d\x6f\156\x65\171", 0), "\x73\x68\151\160\160\151\156\147\x5f\x63\x6f\155\160\x61\x6e\x79\x5f\x69\x64" => Request::instance()->param("\x73\150\x69\x70\x70\151\156\147\x5f\x63\157\x6d\160\x61\x6e\171\x5f\151\144", 0), "\x62\165\x79\x65\x72\137\x6d\145\x73\163\x61\x67\x65" => Request::instance()->param("\x62\x75\x79\145\162\137\x6d\145\x73\163\x61\x67\145", ''), "\x72\145\x63\x65\151\166\x65\x72\137\172\151\x70" => Request::instance()->param("\162\145\143\x65\x69\166\145\x72\137\x7a\x69\x70"), "\144\x69\x73\143\x6f\165\x6e\x74\x5f\x6d\157\156\145\x79" => Request::instance()->param("\144\x69\x73\x63\x6f\x75\156\164\137\155\x6f\156\x65\171", "\x30\x2e\x30\x30"), "\x63\x6f\165\x70\x6f\x6e\x5f\x69\x64" => Request::instance()->param("\143\x6f\165\160\157\156\137\151\144", 0), "\x63\x6f\x75\x70\157\x6e\x5f\155\157\156\x65\171" => Request::instance()->param("\143\x6f\x75\160\157\156\137\155\x6f\x6e\145\171", "\x30\x2e\x30\x30"), "\162\145\x62\x61\164\145\x5f\x6d\157\156\145\x79" => Request::instance()->param("\162\x65\142\x61\x74\x65\x5f\155\157\x6e\x65\x79", "\x30\56\x30\x30"), "\x61\x63\164\151\x76\151\x74\x79\137\157\x72\x64\145\162\x5f\x74\171\x70\145" => Request::instance()->param("\141\143\164\x69\x76\x69\x74\171\137\x6f\x72\144\x65\x72\137\x74\171\x70\x65", 0), "\x63\x72\x65\141\164\x65\x5f\164\151\x6d\145" => time(), "\x62\165\x79\x65\162\x5f\151\x64" => Request::instance()->param("\x62\x75\171\145\x72\137\151\x64"), "\165\x73\x65\x72\x5f\156\x61\x6d\145" => Request::instance()->param("\x75\x73\x65\x72\x5f\156\x61\155\145"), "\x72\x65\143\x65\x69\x76\145\162\137\x6d\x6f\142\x69\x6c\x65" => Request::instance()->param("\160\150\157\156\145"), "\162\145\x63\145\x69\166\x65\162\x5f\141\x72\x65\141" => Request::instance()->param("\141\162\145\x61", 0), "\162\x65\x63\145\x69\166\145\162\x5f\x61\144\144\162\145\163\x73" => Request::instance()->param("\x61\144\144\162\x65\x73\x73", 0), "\x72\x65\x63\145\151\x76\145\x72\x5f\156\141\155\x65" => Request::instance()->param("\143\x6f\x6e\x73\151\147\156\145\162"), "\x6f\162\144\145\162\x5f\155\x6f\156\145\x79" => Request::instance()->param("\x6f\x72\144\145\162\x5f\155\x6f\x6e\x65\x79"), "\x73\x6b\165\137\151\x64" => Request::instance()->param("\x73\x6b\x75\x5f\x69\144"), "\x6d\x63\150\x5f\151\144" => $mch_id, "\x6d\141\x69\x6c\151\x6e\x67\x5f\x74\x79\160\145" => Request::instance()->param("\x6d\141\151\x6c\151\x6e\x67\137\164\x79\160\145", 1), "\x6d\x65\x6e\x74\151\157\x6e\x5f\x74\x69\155\x65" => Request::instance()->param("\155\145\156\x74\151\x6f\156\137\164\x69\155\145")]; goto NsJcv; CwULx: $result = $this->checkParam($rule, $data); goto rBUxb; wmPbj: rUJg0: goto M6KE9; ScMXV: YkfTl: goto tE9Aw; viPdY: $rule = [["\142\x75\x79\x65\162\x5f\151\x64", "\x72\145\x71\165\151\162\x65\174\156\x75\155\142\145\162"], ["\x75\163\x65\162\137\x6e\141\155\145", "\x72\x65\x71\x75\x69\162\145"], ["\155\141\x69\154\x69\156\147\x5f\x74\x79\x70\145", "\162\x65\161\165\x69\x72\x65"], ["\162\x65\x63\x65\151\x76\145\x72\x5f\x6d\x6f\142\x69\154\145", "\162\145\161\x75\x69\162\x65\x7c\x6e\165\x6d\x62\145\x72\174\154\145\156\147\x74\x68\x3a\x31\x31"], ["\162\145\143\x65\x69\x76\145\162\x5f\x6e\x61\155\145", "\162\145\161\x75\x69\162\x65"], ["\x6f\162\x64\x65\162\x5f\x6d\x6f\x6e\x65\171", "\x72\x65\161\165\151\x72\x65\x7c\x6e\x75\155\142\145\162"], ["\160\141\171\137\x6d\157\x6e\x65\x79", "\162\145\x71\165\x69\x72\x65\174\x6e\x75\155\x62\x65\x72"], ["\163\153\165\137\x69\144", "\x72\x65\x71\165\x69\x72\x65"], ["\x6d\x63\150\x5f\x69\144", "\162\x65\161\165\151\162\145", "\xe4\270\215\345\255\230\xe5\234\250\345\225\x86\xe6\x88\267"]]; goto CwULx; VI0Ng: if (!($data["\144\x69\163\143\x6f\x75\156\x74\137\x6d\157\x6e\x65\x79"] != "\60\x2e\60\x30" && $data["\143\x6f\165\160\157\156\137\x6d\x6f\x6e\x65\171"] != "\x30\56\60\60")) { goto uwv2j; } goto mKWVW; tE9Aw: $order = new OrderService(); goto DzzOS; BXIi8: $app_id = Request::instance()->param("\151"); goto RYiW3; va9Z_: BEUXd: goto XIRYz; qLr3K: uwv2j: goto viPdY; RYiW3: $mch_id = $this->getMchId($app_id); goto NpiYN; hCnAQ: $rs["\155\163\x67"] = $result; goto pMy_A; W2N6r: $ser->send_sms($data["\x6f\x72\144\145\x72\x5f\156\x6f"]); goto jgUmB; XIRYz: $ser = new ArlikiService($mch_id); goto W2N6r; PZ7W4: $rs["\155\163\x67"] = $info["\155\163\147"]; goto m1MhS; m1MhS: return json_encode($rs); goto IWAa9; sERKJ: return json_encode($rs); goto wmPbj; eQ55J: if ($info["\145\x72\162\x5f\143\x6f\x64\145"] == 0) { goto BEUXd; } goto XLlC_; cYPcN: $data["\x70\x61\x79\137\x6d\157\156\x65\171"] = 0; goto Qa49h; IWAa9: goto rUJg0; goto va9Z_; UKFUN: if (!(floatval($data["\160\x61\x79\137\155\x6f\156\145\171"]) < 0)) { goto PYORt; } goto cYPcN; Qa49h: PYORt: goto VI0Ng; DzzOS: $info = $order->createOrder($data); goto eQ55J; jgUmB: $rs["\x69\156\146\x6f"] = $info["\151\156\x66\157"]; goto sERKJ; XLlC_: $rs["\x63\157\144\x65"] = 1; goto PZ7W4; pMy_A: return json_encode($rs); goto ScMXV; ooxJK: $rs["\x63\157\x64\x65"] = 1; goto hCnAQ; rBUxb: if (empty($result)) { goto YkfTl; } goto ooxJK; NsJcv: $data["\x70\141\171\x5f\155\157\156\145\171"] = round(floatval($data["\x6f\x72\x64\145\x72\x5f\x6d\x6f\x6e\x65\171"]) - floatval($data["\x72\145\x62\x61\x74\x65\137\x6d\x6f\156\145\x79"]) + floatval($data["\163\x68\151\160\160\151\x6e\x67\137\155\157\156\145\x79"]) - floatval($data["\x63\157\165\160\x6f\156\x5f\x6d\157\x6e\x65\x79"]) - floatval($data["\x64\151\x73\x63\157\x75\156\164\x5f\x6d\x6f\x6e\x65\x79"]), 2); goto UKFUN; mKWVW: $data["\141\143\x74\151\x76\x69\164\171\137\157\x72\x64\145\162\137\x74\x79\160\145"] = 4; goto qLr3K; M6KE9: } public function OrderList() { goto klkBN; kxKvl: Jhzu0: goto x7kIx; qMITI: $data = ["\142\x75\x79\145\x72\x5f\x69\x64" => $uid, "\x6d\143\x68\137\x69\x64" => $mch_id]; goto SOL6k; cn7LP: iABMm: goto RBdnY; J0Kxf: $info = $order->orderList($data, $page); goto JI0UA; uRgIJ: QA66C: goto Y6ETl; s6mFw: qW_wc: goto WqZxl; jlTZq: goto JyEaE; goto kxKvl; mCgaY: if (empty($result)) { goto QA66C; } goto RymN0; MT_q2: $uid = Request::instance()->param("\x75\151\x64"); goto zmxR4; NVyWM: $result = $this->checkParam($rule, $data); goto mCgaY; JI0UA: $rs["\x69\156\x66\157"] = $info; goto oJQJs; zmxR4: $status = Request::instance()->param("\x73\164\x61\164\165\163", null); goto MSgNe; iVosh: $rs["\x6d\163\147"] = $result; goto I8_bX; kYedY: $data["\157\162\144\145\x72\x5f\x73\164\x61\164\x75\x73"] = ["\74\x3e", "\55\61"]; goto jlTZq; Y6ETl: $order = new OrderService(); goto J0Kxf; MSgNe: $page = Request::instance()->param("\160\141\147\x65", 1); goto mbW25; x7kIx: if ($status == 4) { goto qW_wc; } goto PzUtc; SOL6k: if ($status != null) { goto Jhzu0; } goto kYedY; I8_bX: return json_encode($rs); goto uRgIJ; oJQJs: return json_encode($rs); goto Kjj_n; WqZxl: $data["\157\162\x64\x65\x72\x5f\163\164\141\x74\x75\x73"] = ["\x69\x6e", [4, 5]]; goto cn7LP; r9TIP: $mch_id = $this->getMchId($app_id); goto Wtix9; Wtix9: $rule = [["\x62\165\171\x65\162\137\x69\x64", "\162\x65\161\165\151\162\145", "\165\151\144\344\xb8\215\xe8\x83\275\344\270\xba\xe7\251\272"], ["\x6d\143\x68\137\151\x64", "\x72\x65\x71\x75\x69\x72\145", "\xe4\270\215\345\255\x98\345\234\250\345\x95\206\xe6\210\xb7"]]; goto qMITI; mbW25: $app_id = Request::instance()->param("\x69"); goto r9TIP; RBdnY: JyEaE: goto NVyWM; RymN0: $rs["\x63\157\x64\145"] = 1; goto iVosh; klkBN: $rs = array("\x63\x6f\144\x65" => 0, "\x69\x6e\146\157" => array()); goto MT_q2; BSrYm: goto iABMm; goto s6mFw; PzUtc: $data["\x6f\x72\x64\x65\x72\137\163\x74\141\x74\165\163"] = $status; goto BSrYm; Kjj_n: } public function GetOrder() { goto WNwhd; LoCOd: $app_id = Request::instance()->param("\151"); goto IIurX; IyJxl: $data = ["\142\165\171\x65\x72\137\151\144" => Request::instance()->param("\x62\165\171\x65\x72\137\x69\x64"), "\x6f\162\x64\x65\162\x5f\151\144" => Request::instance()->param("\157\x72\x64\x65\x72\137\x69\144"), "\155\143\x68\137\151\x64" => $mch_id]; goto SPizd; ec5FV: $order = new OrderService(); goto dOopO; MX8Jy: return json_encode($rs); goto VZRz7; h5egI: $rs["\155\x73\147"] = $result; goto cJkmc; tlWBW: KsZBe: goto ec5FV; wLpE4: if (empty($result)) { goto KsZBe; } goto kE1Yj; dOopO: $info = $order->getOrder($data); goto QvTid; WNwhd: $rs = array("\143\x6f\x64\145" => 0, "\x69\156\146\157" => array()); goto LoCOd; Ceu73: $rule = [["\x62\165\171\x65\162\137\x69\x64", "\x72\x65\x71\x75\x69\162\145", "\x75\151\144\xe4\xb8\215\xe8\203\275\344\xb8\272\xe7\251\272"]]; goto IyJxl; SPizd: $result = $this->checkParam($rule, $data); goto wLpE4; QvTid: $rs["\x69\156\x66\x6f"] = $info; goto MX8Jy; kE1Yj: $rs["\143\157\144\x65"] = 1; goto h5egI; cJkmc: return json_encode($rs); goto tlWBW; IIurX: $mch_id = $this->getMchId($app_id); goto Ceu73; VZRz7: } public function SignOrder() { goto my89_; QCmDw: $data = ["\142\x75\x79\x65\162\137\151\144" => Request::instance()->param("\142\x75\x79\145\162\137\151\144"), "\157\x72\144\x65\162\x5f\x69\x64" => Request::instance()->param("\x6f\x72\x64\x65\x72\137\151\x64"), "\157\162\x64\x65\162\x5f\163\x74\141\164\x75\x73" => 2, "\155\x63\150\137\151\x64" => $mch_id]; goto R9pkV; F4mQV: return json_encode($rs); goto YtgCy; G6qNt: $rs["\x6d\163\x67"] = $result; goto F4mQV; bNc0g: return $info; goto dMwwe; R9pkV: $result = $this->checkParam($rule, $data); goto LJDN0; Ja1bu: $rs["\x63\x6f\144\x65"] = 1; goto G6qNt; LJDN0: if (empty($result)) { goto NMKpJ; } goto Ja1bu; GPl9v: $rule = [["\x62\x75\171\145\x72\137\x69\x64", "\x72\x65\161\x75\151\x72\x65"], ["\x6f\162\x64\x65\x72\x5f\x69\x64", "\162\x65\x71\165\x69\x72\145"], ["\x6d\143\150\x5f\151\144", "\162\145\x71\165\x69\162\145"]]; goto QCmDw; qejOA: $info = $order->signOrder($data); goto bNc0g; RDyQ1: $order = new OrderService(); goto qejOA; xfrIV: $mch_id = $this->getMchId($app_id); goto GPl9v; my89_: $app_id = Request::instance()->param("\x69"); goto xfrIV; YtgCy: NMKpJ: goto RDyQ1; dMwwe: } public function CancelOrder() { goto fo0MJ; u5Ln_: if (empty($result)) { goto VapJU; } goto hRQFn; eUrrG: $rule = [["\x62\165\171\145\x72\137\x69\144", "\162\x65\x71\165\151\162\145"], ["\x6f\x72\144\x65\162\x5f\151\x64", "\x72\x65\x71\165\x69\162\x65"]]; goto xBKOW; kpHEJ: $rs["\x6d\163\147"] = $result; goto ud5XP; x0E1P: $info = $order->cancelOrder($data); goto Fa1LS; KqrYb: $rs["\151\156\146\x6f"] = $info; goto h1SbP; ab027: $rs["\143\x6f\144\x65"] = 1; goto vCw31; fo0MJ: $rs = array("\143\157\144\145" => 0, "\151\156\146\x6f" => array()); goto eUrrG; Xy5cS: NPrMV: goto KqrYb; Fa1LS: if (!empty($info)) { goto NPrMV; } goto ab027; vv09F: return json_encode($rs); goto Xy5cS; h1SbP: return json_encode($rs); goto Nqbex; ud5XP: return json_encode($rs); goto Xb08p; jEigk: $result = $this->checkParam($rule, $data); goto u5Ln_; Xb08p: VapJU: goto P3GJv; P3GJv: $order = new OrderService(); goto x0E1P; xBKOW: $data = ["\142\165\171\x65\162\137\151\x64" => Request::instance()->param("\x62\x75\171\145\162\137\151\x64"), "\x6f\162\x64\x65\x72\x5f\x69\x64" => Request::instance()->param("\157\162\x64\145\x72\137\x69\x64"), "\157\x72\x64\145\162\x5f\x73\x74\x61\164\x75\x73" => 0]; goto jEigk; vCw31: $rs["\x6d\x73\147"] = "\xe8\256\242\xe5\x8d\x95\xe5\x8f\x96\346\xb6\210\345\xa4\xb1\350\xb4\xa5"; goto vv09F; hRQFn: $rs["\143\157\144\145"] = 1; goto kpHEJ; Nqbex: } public function DelOrder() { goto dYyST; Akyhm: CBaXZ: goto UigyL; iBKhx: if (!empty($info)) { goto bqHwG; } goto I0mMH; KdW1P: $rs["\151\x6e\146\157"] = $info; goto n6hNR; rufzF: $rs["\x63\157\144\145"] = 1; goto WiFLh; lE4EX: $rs["\x6d\x73\x67"] = "\xe8\256\xa2\345\215\225\xe5\210\xa0\xe9\231\244\xe5\244\261\350\264\245"; goto zT7zN; pZolT: if (empty($result)) { goto CBaXZ; } goto rufzF; FAT24: bqHwG: goto KdW1P; SM37V: return json_encode($rs); goto Akyhm; EXYrF: $result = $this->checkParam($rule, $data); goto pZolT; r5JtB: $info = $order->delOrder($data); goto iBKhx; UigyL: $order = new OrderService(); goto r5JtB; C_OKa: $rule = [["\142\165\171\145\x72\x5f\x69\x64", "\x72\145\x71\x75\x69\x72\x65"], ["\x6f\162\144\x65\162\137\151\144", "\x72\145\161\165\151\162\145"]]; goto vYtzh; WiFLh: $rs["\x6d\x73\147"] = $result; goto SM37V; vYtzh: $data = ["\142\165\171\145\162\137\151\x64" => Request::instance()->param("\x62\x75\171\145\162\x5f\151\144"), "\157\x72\x64\145\x72\137\x69\144" => Request::instance()->param("\x6f\162\144\x65\x72\137\151\144"), "\x6f\162\144\x65\162\137\x73\x74\141\164\x75\163" => ["\x69\156", [0, -1, 3, 5]]]; goto EXYrF; zT7zN: return json_encode($rs); goto FAT24; n6hNR: return json_encode($rs); goto USrZG; dYyST: $rs = array("\x63\157\144\x65" => 0, "\x69\x6e\x66\x6f" => array()); goto C_OKa; I0mMH: $rs["\x63\157\x64\x65"] = 1; goto lE4EX; USrZG: } public function RefundOrder() { goto P2BJA; egr2l: $rs["\x6d\x73\147"] = $result; goto Z6lTf; aGAkw: $rs["\x63\157\144\145"] = 1; goto xpfkC; xpfkC: $rs["\155\x73\x67"] = "\350\xae\242\345\215\x95\351\x80\x80\xe6\xac\xbe\xe5\xa4\xb1\xe8\264\245"; goto erzXD; Qqy3Q: $rs["\151\x6e\x66\x6f"] = $info; goto YEh4a; rxYs0: $result = $this->checkParam($rule, $data); goto q_Ik_; erzXD: return json_encode($rs); goto wgQ3g; jaxu_: $rs["\143\157\144\145"] = 1; goto egr2l; S3Us7: if (!empty($info)) { goto WfW2G; } goto aGAkw; KNK7d: $order = new OrderService(); goto EJdWu; YEh4a: return json_encode($rs); goto d26kF; YSUl7: $data = ["\142\165\171\145\162\137\x69\144" => Request::instance()->param("\142\165\x79\145\x72\x5f\x69\144"), "\157\162\x64\145\162\137\151\x64" => Request::instance()->param("\x6f\162\x64\145\162\x5f\x69\x64"), "\x6f\162\144\145\x72\x5f\x73\x74\141\164\165\x73" => ["\x69\x6e", [1, 2, 3]]]; goto rxYs0; EJdWu: $info = $order->refundOrder($data); goto S3Us7; dadI7: A38rk: goto KNK7d; P2BJA: $rs = array("\143\157\x64\145" => 0, "\151\156\146\157" => array()); goto WC57P; WC57P: $rule = [["\x62\165\x79\x65\162\x5f\151\144", "\x72\145\161\x75\x69\162\x65"], ["\157\x72\x64\x65\162\x5f\x69\x64", "\162\145\x71\x75\151\x72\x65"]]; goto YSUl7; q_Ik_: if (empty($result)) { goto A38rk; } goto jaxu_; Z6lTf: return json_encode($rs); goto dadI7; wgQ3g: WfW2G: goto Qqy3Q; d26kF: } }