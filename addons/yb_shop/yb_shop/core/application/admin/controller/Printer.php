<?php
 namespace app\admin\controller; use think\Db; use app\admin\service\PrinterService; class Printer extends Base { public function index() { goto sADnx; chEF9: return view(); goto KGdjY; sADnx: $list = Db::name("\x79\x62\x73\143\x5f\160\x72\151\x6e\164\x65\x72")->where(["\x6d\x63\150\137\151\x64" => $this->bus_id])->paginate(20); goto cH4Hm; cH4Hm: $page = $list->render(); goto svNzv; E0d5S: $type["\171\x69\154\x69\141\156\x79\x75\x6e\55\x6b\x34"] = "\346\230\223\xe8\x81\224\xe4\xba\221\xef\274\x88\x6b\x34\xef\xbc\x89"; goto rNCIk; VsIGu: $this->assign("\164\x79\x70\145", $type); goto chEF9; k3PS5: $type["\153\x64\x74\62"] = "\63\x36\x35\xe4\xba\x91\xe6\x89\223\345\x8d\260\xef\274\x88\xe7\274\x96\xe5\217\xb7\153\144\164\x32\357\274\211"; goto E0d5S; svNzv: $this->assign("\154\151\163\x74", $list); goto G27Lx; G27Lx: $this->assign("\160\141\147\145", $page); goto k3PS5; rNCIk: $type["\x66\x65\151\x65"] = "\351\xa3\x9e\xe9\271\205\xe6\x89\x93\345\215\260\346\x9c\xba"; goto VsIGu; KGdjY: } public function editprinter() { goto S3P48; nUJcZ: $res = Db::name("\171\x62\163\x63\137\x70\x72\151\156\164\145\x72")->insert($data); goto zCs7b; haGnr: $info["\160\162\151\156\x74\145\162\x5f\163\145\164\x74\x69\x6e\x67"] = json_decode($info["\160\162\151\156\164\145\x72\x5f\163\x65\164\x74\x69\156\147"], true); goto Q5P3Q; XFyVT: exit(json_encode($dd, true)); goto w3u_W; SbPuz: $data["\156\141\x6d\x65"] = request()->param("\x6e\141\155\145"); goto iBzuQ; SyFNy: BwJL2: goto jNTDS; vUQeP: $this->assign("\x70\x69\144", $pid); goto sL28c; qPZn_: $dd["\x6d\145\163\163\x61\x67\145"] = !empty($res) ? "\xe7\xbc\x96\350\276\221\xe6\210\x90\345\212\x9f\x21" : "\xe7\274\226\350\xbe\221\xe5\244\261\350\xb4\245\x21"; goto YOFtG; B10rj: fFC7O: goto vUQeP; y2vDN: if ($pid > 0) { goto BwJL2; } goto nUJcZ; zCs7b: $dd["\x6d\x65\163\163\141\147\145"] = !empty($res) ? "\346\xb7\273\345\212\xa0\346\210\x90\xe5\x8a\237\41" : "\xe6\267\xbb\xe5\x8a\xa0\xe5\xa4\261\xe8\xb4\245\x21"; goto aI2vV; S3P48: $pid = request()->param("\x70\x69\144", 0); goto qQxIW; YOFtG: uSTsx: goto g6Vl3; h2y8N: if (!($pid > 0)) { goto fFC7O; } goto w52B6; TiGOS: return view(); goto wc7pt; qQxIW: if (!(request()->isAjax() && request()->post())) { goto HUyM0; } goto SbPuz; sL28c: $this->assign("\155\157\x64\145\x6c", $info); goto TiGOS; jNTDS: unset($data["\x6d\143\x68\137\151\x64"]); goto HJQ7K; aI2vV: goto uSTsx; goto SyFNy; g6Vl3: $dd["\143\x6f\144\145"] = $res; goto XFyVT; hmQl4: $info = array(); goto h2y8N; w3u_W: HUyM0: goto hmQl4; JTHgv: $data["\x6d\143\150\137\x69\144"] = $this->bus_id; goto ApU5O; Q5P3Q: $info["\x77\150\145\156"] = json_decode($info["\x77\x68\x65\156"], true); goto B10rj; OLF4H: $data["\160\x72\x69\156\164\145\162\137\x73\145\164\164\151\x6e\x67"] = json_encode($_POST["\x70\x72\151\156\164\145\162\x5f\x73\x65\x74\x74\151\x6e\147"], true); goto JTHgv; iBzuQ: $data["\x70\x72\151\156\x74\x65\x72\137\x74\x79\x70\x65"] = request()->param("\x70\x72\151\x6e\x74\145\x72\137\x74\x79\160\145"); goto OLF4H; HJQ7K: $res = Db::name("\171\142\x73\x63\137\x70\x72\151\x6e\164\145\162")->where(["\x69\x64" => $pid])->update($data); goto qPZn_; bkcLh: $data["\167\150\145\x6e"] = json_encode($_POST["\x77\x68\x65\156"], true); goto y2vDN; w52B6: $info = Db::name("\171\142\163\x63\x5f\160\x72\x69\x6e\x74\145\x72")->where(["\x69\x64" => $pid])->find(); goto haGnr; ApU5O: $data["\x61\144\144\164\151\155\145"] = time(); goto bkcLh; wc7pt: } public function printer_del() { goto FSkaQ; OXONx: $dd["\143\x6f\x64\x65"] = $res; goto cGwWI; nzYgz: $res = Db::name("\171\x62\163\143\137\160\162\151\156\x74\x65\162")->where(["\151\144" => $pid])->delete(); goto OXONx; cGwWI: exit(json_encode($dd, true)); goto GSrco; GSrco: h1Zd5: goto bC6Zl; FSkaQ: if (!(request()->isAjax() && request()->post())) { goto h1Zd5; } goto FeZSE; FeZSE: $pid = request()->param("\160\151\144", 0); goto nzYgz; bC6Zl: } public function testprint() { goto Rdm0I; h3eNt: $order_id = request()->param("\x69\144", 0); goto SL_VS; N7BzX: exit(var_dump($res)); goto ppzOi; mnnDJ: $res = $pp->print_order(); goto N7BzX; SL_VS: $pp = new PrinterService(30, $order_id, "\157\162\144\145\x72", 0); goto mnnDJ; Rdm0I: echo 1; goto h3eNt; ppzOi: } }
