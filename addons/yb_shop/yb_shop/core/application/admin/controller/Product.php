<?php
 namespace app\admin\controller; use think\Db; class Product extends Base { public function index() { goto gb1yh; tdyi7: if (empty($search_text)) { goto kHvG2; } goto SYRm6; iufXW: $this->assign("\x6c\x69\163\x74", $list); goto nbFJ2; KJzv7: $page = $list->render(); goto Vmjlt; SAFiK: return view(); goto uSBUJ; zLxSa: kHvG2: goto LkZ58; uymo_: $this->assign("\143\x6c\141\x73\163\137\154\x69\x73\164", $class_list); goto SAFiK; SYRm6: $where["\x70\56\164\151\x74\154\x65"] = array("\x6c\x69\153\x65", "\45{$search_text}\x25"); goto zLxSa; Vmjlt: $this->assign("\x70\x61\147\145", $page); goto iufXW; JNgT1: $where = array(); goto tdyi7; VobO4: $querys = urlQueryToArr(); goto gIEcS; LkZ58: if (empty($class_id)) { goto sgE_Q; } goto ZoD6f; Nc39h: $where["\x70\56\x6d\143\x68\137\151\x64"] = $this->bus_id; goto VobO4; gb1yh: $search_text = request()->post("\163\x65\141\162\143\x68\x5f\164\145\170\x74", ''); goto e8df2; gIEcS: $list = Db::name("\x79\x62\x73\143\x5f\160\162\157\144\x75\143\164")->alias("\160")->join("\171\x62\163\x63\137\x70\162\x6f\x64\x75\143\164\137\x63\x6c\x61\x73\x73\40\143", "\x70\56\143\154\x61\x73\163\137\151\x64\x20\75\40\x63\56\151\x64")->where($where)->field("\160\x2e\x2a\54\143\x2e\156\x61\x6d\x65\x20\x61\x73\x20\143\154\141\x73\163\x5f\156\x61\x6d\145")->order("\x70\x2e\x73\x6f\162\164\40\141\163\143")->paginate(15, false, ["\161\165\x65\162\171" => ["\163" => $querys["\163"], "\163\145\141\162\143\150\137\164\145\x78\x74" => $search_text, "\x63\x6c\141\163\x73\137\x69\x64" => $class_id]]); goto KJzv7; fFw2n: $this->assign("\163\x65\x61\162\x63\x68\137\x74\x65\170\164", $search_text); goto Dp1o0; ZoD6f: $where["\x70\56\143\154\141\x73\163\137\151\144"] = $class_id; goto BdUMX; nbFJ2: $class_list = Db::name("\171\142\163\143\x5f\x70\x72\x6f\x64\x75\x63\x74\x5f\143\154\x61\x73\x73")->where(["\x6d\x63\x68\137\151\144" => $this->bus_id])->select(); goto uymo_; e8df2: $class_id = request()->post("\143\x6c\x61\x73\x73\x5f\151\144", ''); goto fFw2n; BdUMX: sgE_Q: goto Nc39h; Dp1o0: $this->assign("\x63\154\141\163\163\x5f\151\144", $class_id); goto JNgT1; uSBUJ: } public function add_product() { goto yCuaT; fgI9V: $this->assign("\143\x6c\x61\x73\x73\x5f\154\x69\163\164", $class_list); goto WTtJY; ns2p5: GV0ZL: goto jQVH1; H5uXw: $res = Db::name("\x79\142\x73\143\x5f\160\x72\157\144\x75\143\x74")->insert($data); goto syHN6; dgz2a: OIVHS: goto YTPo9; H6yyV: juZMX: goto qmZEe; ECBSW: if (!empty($data["\x69\144"])) { goto GV0ZL; } goto NSztc; yCuaT: $data = request()->param(); goto bikv0; bikv0: if (!(request()->isAjax() && request()->isPost())) { goto OIVHS; } goto ECBSW; qmZEe: return AjaxReturn($res); goto dgz2a; VP2NP: sDICZ: goto q4N65; syHN6: goto juZMX; goto ns2p5; WZBIZ: $data["\x73\157\x72\164"] = 0; goto Qwelj; Qwelj: $data["\155\143\x68\x5f\151\144"] = $this->bus_id; goto EQDyW; EsYgk: $data["\x73\164\x61\164\165\x73"] = 1; goto H5uXw; tKXpB: $this->assign("\151\156\146\157", $info); goto VP2NP; YTPo9: if (empty($data["\x69\x64"])) { goto sDICZ; } goto qyPm3; qyPm3: $info = Db::name("\171\x62\163\143\x5f\x70\x72\x6f\144\x75\143\x74")->where(["\151\144" => $data["\x69\x64"]])->find(); goto tKXpB; S8hmT: unset($data["\151\x64"]); goto v7zyO; EQDyW: $data["\x63\x72\x65\141\x74\x65\x5f\164\151\x6d\145"] = time(); goto EsYgk; v7zyO: $res = Db::name("\x79\x62\163\x63\x5f\x70\162\157\144\x75\x63\x74")->where(["\151\x64" => $id])->update($data); goto H6yyV; q4N65: $class_list = Db::name("\x79\142\x73\x63\137\x70\x72\x6f\x64\165\x63\x74\x5f\x63\154\141\163\x73")->where(["\x6d\143\x68\137\151\144" => $this->bus_id])->select(); goto fgI9V; NSztc: unset($data["\151\144"]); goto WZBIZ; jQVH1: $id = $data["\x69\x64"]; goto S8hmT; WTtJY: return view(); goto Xd2HA; Xd2HA: } public function del_product() { goto kO8EX; SvQqi: $id = request()->post("\151\x64", ''); goto P1pvc; P1pvc: $res = Db::name("\171\x62\163\143\137\160\162\157\144\x75\x63\x74")->where(["\151\x64" => $id])->delete(); goto y7PaB; oeLm2: x7OGQ: goto zWagy; z8XCx: return AjaxReturn($res); goto oeLm2; y7PaB: $res = $res !== false ? 1 : 0; goto z8XCx; kO8EX: if (!(request()->isAjax() && request()->isPost())) { goto x7OGQ; } goto SvQqi; zWagy: } public function product_status() { goto Jj7V_; uLB6i: $info = Db::name("\x79\142\163\143\x5f\x70\162\x6f\144\165\x63\x74")->where(["\x69\x64" => $id])->find(); goto VPGoy; gaFi9: $id = request()->post("\151\x64", ''); goto uLB6i; IsES5: return AjaxReturn($res); goto O39KZ; Jj7V_: if (!(request()->isAjax() && request()->isPost())) { goto Z1UnV; } goto gaFi9; VPGoy: $status = $info["\x73\164\141\164\x75\163"] == 1 ? 2 : 1; goto sfOzA; sfOzA: $res = Db::name("\x79\142\x73\143\x5f\x70\162\x6f\144\165\143\164")->where(["\151\x64" => $id])->update(["\x73\x74\141\164\x75\x73" => $status]); goto IsES5; O39KZ: Z1UnV: goto meMLC; meMLC: } public function product_sort() { goto JzWSV; sJPFN: $id = request()->post("\x69\x64", ''); goto wtiDQ; ptsCc: $res = $res !== false ? 1 : 0; goto klOBs; klOBs: return AjaxReturn($res); goto Gww9z; wtiDQ: $sort = request()->post("\x73\157\x72\164", "\60"); goto x5r4v; JzWSV: if (!(request()->isAjax() && request()->isPost())) { goto fsXFb; } goto sJPFN; Gww9z: fsXFb: goto n7xBz; x5r4v: $res = Db::name("\171\x62\x73\143\137\160\x72\x6f\144\165\x63\164")->where(["\151\x64" => $id])->update(["\163\157\x72\164" => $sort]); goto ptsCc; n7xBz: } public function class_list() { goto o9Qrs; o9Qrs: $list = Db::name("\171\x62\x73\143\137\160\x72\157\144\x75\143\164\x5f\x63\x6c\x61\163\163")->where(["\155\143\150\137\x69\x64" => $this->bus_id])->order("\163\x6f\x72\x74\40\x61\163\x63")->select(); goto Zz6IW; HPNwW: return view(); goto U6Za0; Zz6IW: $this->assign("\x6c\151\163\x74", $list); goto HPNwW; U6Za0: } public function del_class() { goto p0N2D; jJtq3: P5Moq: goto mAdSx; w142F: if (empty($pp)) { goto P5Moq; } goto BvqNq; p0N2D: if (!(request()->isAjax() && request()->isPost())) { goto tEBbE; } goto rEf4C; hGwn5: tEBbE: goto iGihm; mAdSx: $res = Db::name("\171\142\x73\x63\137\160\162\x6f\144\x75\x63\164\137\x63\x6c\141\x73\163")->where(["\x69\x64" => $id])->delete(); goto aV7vD; Wu2hP: return AjaxReturn($res); goto hGwn5; NlsgH: $pp = Db::name("\171\142\163\x63\137\x70\162\x6f\144\x75\x63\x74")->where(["\x63\154\x61\x73\163\x5f\x69\144" => $id])->find(); goto w142F; aV7vD: $res = $res !== false ? 1 : 0; goto Wu2hP; rEf4C: $id = request()->post("\151\144", ''); goto NlsgH; BvqNq: return AjaxReturnMsg(0, "\xe6\255\xa4\xe5\x88\206\347\xb1\273\344\xb8\213\xe8\277\230\346\234\x89\344\272\xa7\xe5\x93\x81\x2c\xe6\227\240\xe6\xb3\225\xe5\210\240\351\231\244"); goto jJtq3; iGihm: } public function add_class() { goto s3Mp6; V6MKh: hfGLn: goto NlTwM; ROHKO: $data["\x70\151\144"] = 0; goto QAVtx; ggvAz: aO9jq: goto pPFyZ; zxH1L: $data["\x73\x74\141\x74\x75\163"] = 1; goto qmAUJ; QAVtx: $data["\x6c\x65\x76\x65\x6c"] = 1; goto NanSj; AQav2: A_cWN: goto wJ1vY; NanSj: $data["\155\143\150\x5f\151\x64"] = $this->bus_id; goto R75Q8; s3Mp6: $data = request()->param(); goto PKdY9; Z0f0M: $res = Db::name("\171\x62\x73\143\x5f\x70\162\x6f\x64\165\143\164\137\x63\x6c\x61\163\x73")->where(["\x69\144" => $id])->update($data); goto ggvAz; HVgts: $info = Db::name("\171\x62\163\143\137\x70\x72\x6f\x64\x75\x63\x74\137\x63\x6c\x61\163\163")->where(["\151\x64" => $data["\151\x64"]])->find(); goto dLCr0; yLT29: if (!empty($data["\x69\144"])) { goto A_cWN; } goto nvIIA; PKdY9: if (!(request()->isAjax() && request()->isPost())) { goto bXnvF; } goto yLT29; NlTwM: return view(); goto ogVTL; TO6dW: goto aO9jq; goto AQav2; cNPF6: if (empty($data["\151\144"])) { goto hfGLn; } goto HVgts; pPFyZ: return AjaxReturn($res); goto Lyk0D; Lyk0D: bXnvF: goto cNPF6; qW2y_: unset($data["\151\x64"]); goto Z0f0M; R75Q8: $data["\x63\x72\145\x61\x74\x65\x5f\164\x69\155\145"] = time(); goto zxH1L; wJ1vY: $id = $data["\151\x64"]; goto qW2y_; qmAUJ: $res = Db::name("\x79\142\163\x63\137\160\162\x6f\x64\x75\143\x74\137\143\154\141\x73\163")->insert($data); goto TO6dW; dLCr0: $this->assign($info); goto V6MKh; nvIIA: unset($data["\x69\x64"]); goto ROHKO; ogVTL: } public function class_sort() { goto XwoJN; SD1vw: $res = $res !== false ? 1 : 0; goto wiOf_; MVXmB: $sort = request()->post("\163\x6f\x72\164", "\60"); goto oDeob; XwoJN: if (!(request()->isAjax() && request()->isPost())) { goto nzotZ; } goto AEZdv; AEZdv: $id = request()->post("\151\x64", ''); goto MVXmB; yV91g: nzotZ: goto ZFe1M; oDeob: $res = Db::name("\171\x62\x73\143\137\x70\162\x6f\x64\165\x63\164\x5f\x63\x6c\x61\163\163")->where(["\x69\x64" => $id])->update(["\x73\157\x72\x74" => $sort]); goto SD1vw; wiOf_: return AjaxReturn($res); goto yV91g; ZFe1M: } }