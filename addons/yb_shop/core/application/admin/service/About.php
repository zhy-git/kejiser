<?php
 namespace app\admin\service; class About extends Base { function __construct() { parent::__construct(); $this->about = new \app\common\model\About(); } public function getAbout($condition = '', $field = "\x2a") { $info = $this->about->getInfo($condition, $field); return $info; } public function AddAbout($name, $id, $tel, $address, $desc, $qq, $english_name, $logo, $mch_id, $job_time, $lat, $lng, $is_mention) { goto a8oMm; Vhnis: if ($id == 0) { goto totRm; } goto gBX81; VOn09: return $info; goto wgTaq; a8oMm: $data = array("\x6e\141\155\x65" => $name, "\160\x68\157\x6e\145" => $tel, "\x61\x64\144\162\x65\163\x73" => $address, "\144\x65\163\143" => $desc, "\161\x71" => $qq, "\x65\x6e\x67\154\x69\x73\x68\x5f\156\x61\155\145" => $english_name, "\154\x6f\147\157" => $logo, "\x6d\x63\150\x5f\x69\x64" => $mch_id, "\152\x6f\142\x5f\x74\x69\155\x65" => $job_time, "\x6c\141\164" => $lat, "\x6c\x6e\147" => $lng, "\151\163\137\x6d\145\x6e\x74\x69\x6f\156" => $is_mention); goto Vhnis; jfAAq: totRm: goto IH39w; pA8re: goto rGW3F; goto jfAAq; ThKKr: rGW3F: goto VOn09; IH39w: $info = $this->about->save($data); goto ThKKr; gBX81: $info = $this->about->save($data, ["\x69\144" => $id, "\155\143\x68\x5f\x69\x64" => $mch_id]); goto pA8re; wgTaq: } }