<?php
 namespace app\web\service; use think\Db; class UserWeb { public function checkUser($unionid) { $rs = Db::name("\171\142\x73\143\x5f\x75\x73\x65\162")->where("\167\x78\137\165\x6e\x69\157\x6e\151\144", $unionid)->value("\x75\151\x64"); return $rs; } public function checkUserByOpenid($openid) { $rs = Db::name("\x79\x62\x73\x63\137\165\163\x65\162")->where("\167\x78\137\157\x70\x65\x6e\x69\144", $openid)->value("\165\x69\144"); return $rs; } public function addUser($data) { goto UNNVT; tXFb9: return $rs; goto sp7Pv; MRiH5: $data["\160\x69\144"] = 0; goto iCQ33; UNNVT: $info = Db::name("\171\142\x73\143\137\165\163\x65\162\137\x73\150\x61\162\145\x5f\x73\x65\x74\x74\151\156\147")->where("\x6d\x63\150\137\151\144", $data["\155\x63\x68\x5f\x69\144"])->find(); goto u752w; iCQ33: z_NK2: goto B_4m9; u752w: if (!(empty($info) || $info["\154\x65\166\x65\x6c"] == 0)) { goto z_NK2; } goto MRiH5; B_4m9: $rs = Db::name("\x79\x62\163\x63\x5f\x75\x73\x65\162")->insertGetId($data); goto tXFb9; sp7Pv: } }