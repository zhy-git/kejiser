<?php
 namespace app\admin\controller; use think\Db; class About extends Base { public function index() { goto hC8VB; GSj1U: $mch_id = isset($this->bus_id) ? $this->bus_id : "\60"; goto cOZYO; gkO2x: $info["\155\145\156\x74\x69\157\x6e"] = $this->mention[$info["\x69\x73\x5f\155\x65\156\164\x69\x6f\156"]]; goto vvORR; vvORR: $this->assign("\x69\x6e\x66\157", $info); goto dJp3D; wkghf: $address = isset($_POST["\x61\x64\144\162\145\x73\163"]) ? $_POST["\x61\x64\x64\162\x65\x73\x73"] : ''; goto gfWDO; AoBpL: $qq = isset($_POST["\x71\x71"]) ? $_POST["\161\161"] : 0; goto D8sop; WmBmd: DFBsy: goto w19SP; MgbZO: return $res; goto WmBmd; ck6JP: $job_time = isset($_POST["\152\157\x62\137\164\151\155\x65"]) ? $_POST["\152\157\x62\137\164\x69\155\145"] : ''; goto YgDge; gfWDO: $desc = isset($_POST["\144\x65\163\x63"]) ? $_POST["\x64\x65\x73\x63"] : ''; goto AoBpL; dJp3D: return view("\x61\x62\157\165\164\57\141\142\157\165\164\137\151\156\x66\x6f"); goto qRUoa; hC8VB: $about = new \app\admin\service\About(); goto GSj1U; Vmacq: $res = $about->AddAbout($name, $id, $tel, $address, $desc, $qq, $english_name, $logo, $mch_id, $job_time, $lat, $lng, $is_mention); goto MgbZO; D8sop: $english_name = isset($_POST["\x65\156\147\x6c\151\163\150\x5f\156\141\155\145"]) ? $_POST["\145\x6e\147\154\x69\x73\150\x5f\x6e\x61\155\145"] : ''; goto cw9QC; POd93: $lng = isset($_POST["\x6c\x6e\147"]) ? $_POST["\x6c\156\x67"] : ''; goto sFJMv; cOZYO: $condition["\155\143\150\137\x69\144"] = array("\x65\161", $mch_id); goto opMee; zWkwy: $name = isset($_POST["\x6e\x61\155\x65"]) ? $_POST["\x6e\141\x6d\145"] : ''; goto MJxBM; sFJMv: $is_mention = isset($_POST["\151\163\137\155\x65\156\164\151\x6f\156"]) ? $_POST["\151\x73\137\x6d\145\156\x74\151\x6f\156"] : ''; goto Vmacq; cw9QC: $logo = isset($_POST["\154\x6f\x67\x6f\137\160\151\143"]) ? $_POST["\154\x6f\147\157\x5f\160\x69\143"] : ''; goto ck6JP; opMee: if (!request()->isAjax()) { goto DFBsy; } goto zWkwy; YgDge: $lat = isset($_POST["\154\x61\x74"]) ? $_POST["\154\141\164"] : ''; goto POd93; GXn10: $tel = isset($_POST["\164\145\x6c"]) ? $_POST["\164\x65\x6c"] : 0; goto wkghf; MJxBM: $id = isset($_POST["\x69\144"]) ? $_POST["\x69\x64"] : 0; goto GXn10; w19SP: $info = $about->getAbout($condition); goto gkO2x; qRUoa: } }
