<?php
 namespace app\admin\service; use app\common\model\Advert; use app\common\model\AdvertPosition; class AdvertService extends Base { function __construct() { parent::__construct(); } public function getAdvertPosition($condition = '', $search_text, $order) { goto bummb; bummb: $advert_position = new AdvertPosition(); goto ZALUp; ZALUp: $rs = $advert_position->getPageLisy($condition, $search_text, $order); goto Li8oY; Li8oY: return $rs; goto Vbhff; Vbhff: } public function addHeight($adv_id, $info) { goto CwI0K; W7rfz: $res = $advert->save($data, ["\141\144\x76\137\x69\x64" => $adv_id]); goto DE6os; DE6os: return $res; goto WKDL4; j0w6m: $data = array("\x61\x64\166\137\150\145\151\147\150\x74" => $info); goto W7rfz; CwI0K: $advert = new Advert(); goto j0w6m; WKDL4: } public function addAdvertPosition($mch_id, $ap_intro, $ap_name, $sort, $height, $width) { goto dLh3a; dLh3a: $advert_position = new AdvertPosition(); goto uQVB7; QCYaX: $res = $advert_position->save($data); goto nIE0Z; nIE0Z: return $res; goto RBk9n; uQVB7: $data = array("\141\x70\x5f\156\x61\155\x65" => $ap_name, "\141\x70\x5f\151\156\x74\162\x6f" => $ap_intro, "\x63\x72\145\141\x74\x65\137\x74\151\x6d\x65" => time(), "\163\157\162\164" => $sort, "\155\143\x68\137\x69\x64" => $mch_id, "\150\145\151\147\150\164" => $height, "\x77\x69\x64\164\150" => $width); goto QCYaX; RBk9n: } public function setAdvertPositionUse($ap_id, $is_use) { goto zCe54; khjTC: $data = array("\x69\x73\x5f\165\x73\x65" => $is_use); goto KDJK9; KDJK9: $res = $advert_position->save($data, ["\x61\160\137\151\x64" => $ap_id]); goto vSoZF; zCe54: $advert_position = new AdvertPosition(); goto khjTC; vSoZF: return $res; goto l773Y; l773Y: } public function getAdvertPositionDetail($ap_id) { goto bPxTk; bPxTk: $advert_position = new AdvertPosition(); goto qkRVR; QmAdy: return $info; goto lSDWv; qkRVR: $info = $advert_position->getInfo(["\x61\x70\137\151\144" => $ap_id]); goto QmAdy; lSDWv: } public function updateAdvertPositionDetail($mch_id, $ap_id, $ap_name, $ap_intro, $sort, $height, $width) { goto GPJKx; GPJKx: $advert_position = new AdvertPosition(); goto vbA8e; cM0dY: $res = $advert_position->save($data, ["\141\x70\x5f\x69\x64" => $ap_id]); goto iSMM4; iSMM4: return $res; goto EJ6MB; vbA8e: $data = array("\141\x70\137\x6e\x61\x6d\145" => $ap_name, "\x61\160\137\151\x6e\164\x72\157" => $ap_intro, "\x6d\x63\150\x5f\x69\x64" => $mch_id, "\163\157\x72\x74" => $sort, "\150\145\151\x67\x68\x74" => $height, "\x77\151\144\164\x68" => $width); goto cM0dY; EJ6MB: } public function delAdvertPosition($ap_id) { goto hUS5g; hUS5g: $advert = new Advert(); goto QLAnt; FxP1C: $advert_position->startTrans(); goto EZ9Dc; eXM_P: return $res; goto RjhDO; EZ9Dc: try { goto CAl8s; jGlhW: $advert_position->commit(); goto kM3Xp; BQ0JR: $res = $advert_position->destroy($ap_id); goto jGlhW; CAl8s: $advert->destroy(["\x61\x70\x5f\x69\x64" => $ap_id]); goto BQ0JR; kM3Xp: } catch (\Exception $e) { $advert_position->rollback(); return $e->getMessage(); } goto eXM_P; QLAnt: $advert_position = new AdvertPosition(); goto FxP1C; RjhDO: } public function getAdvert($condition = '', $search_text, $order) { goto Qb6ZF; R480y: return $rs; goto PalRL; Qb6ZF: $advert = new Advert(); goto X2aU9; X2aU9: $rs = $advert->getPageLisy($condition, $search_text, $order); goto R480y; PalRL: } public function addAdvert($cate_id, $mod_id, $ap_id, $adv_title, $adv_url, $adv_image, $sort, $background, $mch_id) { goto piDqn; piDqn: $advert = new Advert(); goto QkMDO; wC5nT: $data["\141\144\x76\x5f\150\145\151\147\150\x74"] = 188; goto equ_7; Ctw5L: if (!($mod_id == 1)) { goto cCKgm; } goto wC5nT; QuFx6: $res = $advert->save($data); goto SkHiG; equ_7: cCKgm: goto QuFx6; SkHiG: return $res; goto T8r0N; QkMDO: $data = array("\141\x70\137\151\x64" => $ap_id, "\x61\x64\166\x5f\164\x69\164\154\x65" => $adv_title, "\x61\x64\166\x5f\x75\x72\x6c" => $adv_url, "\141\144\x76\137\151\155\x61\x67\x65" => $adv_image, "\x73\157\x72\x74" => $sort, "\142\x61\143\153\x67\x72\157\165\156\x64" => $background, "\143\162\x65\x61\164\145\137\x74\151\155\x65" => time(), "\155\143\150\x5f\151\144" => $mch_id, "\x6d\x6f\x64\137\151\x64" => $mod_id, "\x63\x61\164\x65\137\x69\144" => $cate_id); goto Ctw5L; T8r0N: } public function setAdvertUse($adv_id, $is_use) { goto fehCM; T3vVO: return $res; goto mbdLj; fehCM: $advert = new Advert(); goto Kvv_8; nqKZo: $res = $advert->save($data, ["\141\144\166\137\x69\x64" => $adv_id]); goto T3vVO; Kvv_8: $data = array("\151\x73\137\165\x73\145" => $is_use); goto nqKZo; mbdLj: } public function getAdvertDetail($adv_id) { goto nr1Z7; sZDoo: $info = $advert->getInfo(["\141\144\x76\x5f\151\144" => $adv_id]); goto PUe6a; PUe6a: return $info; goto TmDe3; nr1Z7: $advert = new Advert(); goto sZDoo; TmDe3: } public function updateAdvert($adv_id, $adv_title, $adv_url, $adv_image, $sort, $background, $mch_id) { goto MN2ET; MN2ET: $advert = new Advert(); goto ydsu8; x8geO: $res = $advert->save($data, ["\x61\144\x76\137\x69\144" => $adv_id, "\x6d\143\x68\x5f\x69\144" => $mch_id]); goto HxKiD; HxKiD: return $res; goto PB0BZ; ydsu8: $data = array("\141\x64\166\x5f\x74\x69\164\154\x65" => $adv_title, "\141\x64\x76\x5f\x75\162\154" => $adv_url, "\141\144\166\137\x69\x6d\x61\147\x65" => $adv_image, "\x73\x6f\162\x74" => $sort, "\x62\141\143\x6b\147\x72\x6f\x75\156\x64" => $background, "\x6d\143\x68\x5f\x69\144" => $mch_id); goto x8geO; PB0BZ: } public function delAdvert($adv_id) { goto Lh8mW; Lh8mW: $advert = new Advert(); goto F14PK; NaAq7: return $res; goto O9BT1; F14PK: $res = $advert->destroy($adv_id); goto NaAq7; O9BT1: } public function AdvertPositionSort($ap_id, $sort) { goto Zs8lE; c5ZCR: $data = array("\163\x6f\162\x74" => $sort); goto HAqNq; HAqNq: $res = $advert->save($data, ["\x61\x64\166\137\x69\x64" => $ap_id]); goto i4vF9; i4vF9: return $res; goto Hsgfv; Zs8lE: $advert = new Advert(); goto c5ZCR; Hsgfv: } public function AdvertSort($ap_id, $sort) { goto mL56M; AtgoH: $data = array("\x73\x6f\162\164" => $sort); goto IvE3s; IvE3s: $res = $advert->save($data, ["\141\x70\137\151\144" => $ap_id]); goto P8oo2; mL56M: $advert = new AdvertPosition(); goto AtgoH; P8oo2: return $res; goto wG_K0; wG_K0: } public function getAdvertPosImg($condition = '', $field = "\x2a", $order = '') { goto n6wVj; E2L21: return $list; goto LQDxB; FTStZ: $list = $advert->getQuerys($condition, $field, $order); goto E2L21; n6wVj: $advert = new Advert(); goto FTStZ; LQDxB: } public function UpdateAdvertImg($adv_title, $adv_id, $key) { goto vHBa9; Uqn39: P9dt0: goto gxK9Q; NQrUF: $data = ["\141\144\166\x5f\164\x69\x74\x6c\145" => $adv_title]; goto Ko2ub; vHBa9: $advert = new Advert(); goto CtGK1; t2kuL: if ($key == "\x75\162\154") { goto WBisw; } goto sbThg; Ko2ub: BCuma: goto efQcB; y3Av9: $data = ["\x61\x64\166\x5f\x77\x69\x64\x74\150" => $adv_title]; goto zgLpm; efQcB: $res = $advert->save($data, ["\x61\x64\166\137\151\144" => $adv_id]); goto wc4rd; gxK9Q: goto BCuma; goto K7gVI; K7gVI: uwJIu: goto NQrUF; cM7JC: WBisw: goto TSFZj; sbThg: if (!($key == "\x77\151\x64\x74\x68")) { goto xdcb6; } goto y3Av9; CtGK1: if ($key == "\x74\x69\164\x6c\145") { goto uwJIu; } goto t2kuL; orfKZ: goto P9dt0; goto cM7JC; zgLpm: xdcb6: goto orfKZ; TSFZj: $data = ["\141\x64\166\137\165\162\154" => $adv_title]; goto Uqn39; wc4rd: return $res; goto oJVh5; oJVh5: } public function UpdateAdvertProportion($info, $ap_id, $key) { goto USuq6; gOTPB: if ($key == "\x77\151\x64\x74\x68") { goto gTUmI; } goto TmA8J; zvPfX: goto C9l2m; goto ERmvt; USuq6: $advert_position = new AdvertPosition(); goto gOTPB; Gp3ph: $res = $advert_position->save($data, ["\x61\x70\x5f\151\144" => $ap_id]); goto kypgk; ixGo6: kaP7h: goto zvPfX; CGMaS: C9l2m: goto Gp3ph; ERmvt: gTUmI: goto nKP_V; nKP_V: $data = ["\167\151\144\x74\150" => $info]; goto CGMaS; TmA8J: if (!($key == "\150\x65\x69\x67\x68\164")) { goto kaP7h; } goto RAf1S; RAf1S: $data = ["\x68\x65\x69\147\150\x74" => $info]; goto ixGo6; kypgk: return $res; goto Bx1mH; Bx1mH: } public function editNavigation($adv_id, $cate_id, $adv_title, $sort, $background, $adv_url, $adv_image) { goto nGpKt; nGpKt: $advert = new Advert(); goto lgr1O; lgr1O: $data = array("\x61\144\166\x5f\164\x69\x74\154\x65" => $adv_title, "\141\x64\x76\x5f\x75\x72\x6c" => $adv_url, "\141\144\166\x5f\151\155\x61\x67\145" => $adv_image, "\163\157\x72\x74" => $sort, "\142\141\x63\x6b\x67\162\157\x75\156\x64" => $background, "\x63\x61\164\145\137\151\x64" => $cate_id); goto ez0Yq; fSR9S: return $res; goto Z5LdV; ez0Yq: $res = $advert->save($data, ["\141\144\x76\x5f\x69\x64" => $adv_id]); goto fSR9S; Z5LdV: } }