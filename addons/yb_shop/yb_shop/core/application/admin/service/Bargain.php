<?php
 namespace app\admin\service; class Bargain extends Base { function __construct() { parent::__construct(); $this->bargain = new \app\common\model\Bargain(); } public function addBargain($bargain_name, $bargain_picture, $bargain_inventory, $original_price, $lowest_price, $star_time, $end_time, $consumption_time, $activity_rules, $completed_number, $mch_id, $arr_str_img, $class_id) { goto SkOZc; vD7AR: $data["\143\162\145\141\x74\145\x5f\164\x69\155\x65"] = time(); goto V1WaV; rk0rj: $data["\163\164\141\x72\x5f\164\x69\155\x65"] = strtotime($star_time); goto Ewdf3; bi3Sc: $data["\x62\141\x72\x67\141\x69\x6e\137\151\x6e\x76\145\156\164\157\162\x79"] = $bargain_inventory; goto ELhIV; V1WaV: $data["\155\143\150\137\151\x64"] = $mch_id; goto izRMa; zahlc: $data["\143\x6f\155\x70\154\145\x74\x65\x64\137\156\x75\155\x62\x65\162"] = $completed_number; goto vD7AR; uuHpC: $data["\141\x63\x74\151\x76\151\164\x79\x5f\x72\165\154\145\x73"] = $activity_rules; goto zahlc; n52Eo: $data["\154\x6f\167\145\x73\x74\x5f\x70\162\x69\x63\145"] = $lowest_price; goto rk0rj; YpkMq: return $res; goto ltvVC; SkOZc: $data = []; goto R3WFj; ELhIV: $data["\157\162\x69\147\151\156\141\154\x5f\160\x72\151\x63\145"] = $original_price; goto n52Eo; C1gQ0: $res = $this->bargain->save($data); goto YpkMq; Ewdf3: $data["\x65\156\x64\x5f\164\x69\x6d\x65"] = strtotime($end_time); goto i2uH7; R3WFj: $data["\x62\x61\x72\x67\141\x69\156\137\x6e\x61\x6d\145"] = $bargain_name; goto ikNss; ikNss: $data["\x62\141\x72\x67\141\151\156\x5f\160\x69\x63\164\x75\x72\x65"] = $bargain_picture; goto bi3Sc; i2uH7: $data["\143\157\156\163\165\155\x70\x74\x69\x6f\x6e\x5f\164\151\x6d\x65"] = strtotime($consumption_time); goto uuHpC; KHqsA: $data["\x63\x6c\x61\163\x73\137\151\x64"] = $class_id; goto C1gQ0; izRMa: $data["\151\x6d\x67\137\151\x64\137\x61\162\162\x61\x79"] = $arr_str_img; goto KHqsA; ltvVC: } public function editBargain($id, $bargain_name, $bargain_picture, $bargain_inventory, $original_price, $lowest_price, $star_time, $end_time, $consumption_time, $activity_rules, $completed_number, $mch_id, $arr_str_img, $class_id) { goto NG2mK; WtQTe: return $res; goto DXYO1; YrbHz: $data["\x6c\157\x77\x65\x73\x74\137\x70\162\x69\143\145"] = $lowest_price; goto nmgHR; VGTVC: $data["\x62\141\162\147\x61\151\x6e\137\x6e\141\155\145"] = $bargain_name; goto ZmK4L; HvpQt: $data["\157\162\151\x67\151\x6e\x61\x6c\x5f\x70\x72\151\143\x65"] = $original_price; goto YrbHz; nmgHR: $data["\x73\164\141\x72\x5f\164\x69\x6d\145"] = strtotime($star_time); goto ApZL4; ApZL4: $data["\145\156\x64\137\164\151\x6d\x65"] = strtotime($end_time); goto Oz4p4; ti9li: $res = $this->bargain->save($data, ["\151\x64" => $id]); goto WtQTe; Oz4p4: $data["\143\157\x6e\163\165\155\160\x74\151\157\156\137\x74\151\155\145"] = strtotime($consumption_time); goto ZGajF; gXUOi: $data["\x6d\143\150\x5f\x69\144"] = $mch_id; goto o91Js; NG2mK: $data = []; goto VGTVC; ZmK4L: $data["\142\141\162\x67\141\x69\x6e\x5f\160\x69\x63\x74\x75\162\x65"] = $bargain_picture; goto rJwUJ; ZGajF: $data["\x61\x63\x74\x69\x76\151\164\x79\x5f\162\x75\x6c\x65\163"] = $activity_rules; goto PI355; p3s2l: $data["\x63\154\141\163\x73\137\151\144"] = $class_id; goto ti9li; o91Js: $data["\x69\x6d\x67\137\x69\x64\x5f\141\162\162\141\171"] = $arr_str_img; goto p3s2l; rJwUJ: $data["\x62\141\x72\x67\x61\x69\x6e\137\x69\x6e\x76\145\x6e\x74\x6f\x72\171"] = $bargain_inventory; goto HvpQt; PI355: $data["\x63\157\x6d\160\154\x65\x74\x65\144\137\156\165\155\142\145\162"] = $completed_number; goto gXUOi; DXYO1: } public function getBargainInfo($id) { goto Ik0q3; ApZbX: return $res; goto OMtOF; Ik0q3: $res = $this->bargain->getInfo(["\x69\144" => $id]); goto ziocN; Z5mn4: $res["\163\164\141\x72\137\x74\x69\x6d\145"] = date("\x59\55\x6d\55\x64\x20\110\x3a\151\x3a\x73", $res["\x73\164\141\162\137\x74\151\155\x65"]); goto FC0U3; ziocN: $res["\x63\x6f\156\x73\x75\155\x70\x74\151\x6f\x6e\137\164\151\x6d\145"] = date("\x59\x2d\x6d\55\144\x20\x48\x3a\151\x3a\x73", $res["\143\x6f\156\x73\165\x6d\160\x74\151\x6f\156\137\164\151\155\145"]); goto Z5mn4; FC0U3: $res["\x65\x6e\x64\137\x74\151\155\145"] = date("\x59\x2d\155\55\x64\40\110\72\x69\x3a\x73", $res["\x65\x6e\x64\x5f\x74\151\155\x65"]); goto ApZbX; OMtOF: } }
