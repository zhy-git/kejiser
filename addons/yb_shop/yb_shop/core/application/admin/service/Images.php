<?php
 namespace app\admin\service; use app\common\model\GoodsDeleted; use app\common\model\ImagesGroup; use think\Db; load()->func("\x66\151\x6c\x65"); class Images extends Base { public $images_group; public $images; function __construct() { goto zfqOH; SHpk2: $this->images_group = new ImagesGroup(); goto khhP2; zfqOH: parent::__construct(); goto KGy2a; KGy2a: $this->images = new \app\common\model\Images(); goto SHpk2; khhP2: } public function getAlubmPictureDetail($condition) { $res = $this->images->getInfo($condition, "\52"); return $res; } public function getGoodsAlbumUsePictureQuery($condition = '') { goto VbWD4; Jc2Sj: Bmy2E: goto rIBMx; x4PuC: return $img_array; goto GXLY3; VbWD4: $goods = new \app\common\model\Goods(); goto p5VwX; wButu: $img_array = array(); goto I1O7q; I1O7q: foreach ($goods_query as $k => $v) { goto g23bT; gBDNY: $img_array = array_merge($img_array, $tmp_array); goto j2zhl; g23bT: if (!(trim($v["\151\x6d\147\x5f\x69\x64\x5f\x61\x72\162\141\x79"]) != '')) { goto bKqq4; } goto wuM9X; SzI8R: ZL5Qh: goto FSOqo; wuM9X: $tmp_array = explode("\54", trim($v["\151\155\x67\x5f\x69\144\137\141\162\x72\x61\171"])); goto gBDNY; j2zhl: bKqq4: goto SzI8R; FSOqo: } goto Jc2Sj; rIBMx: $img_array = array_unique($img_array); goto x4PuC; p5VwX: $goods_query = $goods->getQuerys($condition, "\x69\155\x67\137\x69\144\137\141\x72\162\141\171", ''); goto wButu; GXLY3: } public function getAlbumClassAll($data = '') { goto SJo2y; IHtQU: jp9VA: goto MwwUd; A5EP3: return $res; goto Zfcfg; Ny3mP: if (empty($res)) { goto OUKHM; } goto BeXPz; BeXPz: foreach ($res as $k => $v) { goto WZW8x; WZW8x: $count = $this->getAlbumPictureCount($v["\147\162\157\165\160\x5f\x69\144"]); goto k2UWM; k2UWM: $res[$k]["\160\151\x63\x5f\143\x6f\x75\156\x74"] = $count; goto BfF3F; BfF3F: FU93Y: goto K07tF; K07tF: } goto IHtQU; SJo2y: $res = $this->images_group->getQuerys($data, "\x2a", "\x73\157\162\x74"); goto Ny3mP; MwwUd: OUKHM: goto A5EP3; Zfcfg: } public function addPicture($album_id, $pic_name, $pic_tag, $pic_cover, $pic_size, $pic_spec, $pic_cover_big, $pic_size_big, $pic_spec_big, $pic_cover_mid, $pic_size_mid, $pic_spec_mid, $pic_cover_small, $pic_size_small, $pic_spec_small, $pic_cover_micro, $pic_size_micro, $pic_spec_micro, $upload_type, $domain, $bucket) { goto l6Isp; cX63S: if ($res == 1) { goto puBkv; } goto YEnC1; BnYMn: puBkv: goto yL9dg; LFRQT: Wf3eR: goto hfsou; yL9dg: return $this->images->img_id; goto LFRQT; UckRe: goto Wf3eR; goto BnYMn; JFepx: $res = $this->images->save($data); goto cX63S; YEnC1: return $res; goto UckRe; l6Isp: $data = array("\147\x72\x6f\165\160\137\x69\144" => $album_id, "\x69\x73\x5f\167\151\144\145" => "\60", "\x69\155\x67\137\156\141\155\x65" => $pic_name, "\151\x6d\147\x5f\164\141\x67" => $pic_tag, "\151\x6d\147\137\x63\x6f\166\145\x72" => $pic_cover, "\151\155\x67\x5f\163\x69\x7a\145" => $pic_size, "\151\155\x67\137\x73\x70\x65\x63" => $pic_spec, "\x69\x6d\x67\x5f\x63\x6f\166\145\162\x5f\142\151\x67" => $pic_cover_big, "\x69\155\x67\137\163\151\172\x65\x5f\x62\x69\x67" => $pic_size_big, "\x69\x6d\147\137\163\160\145\x63\x5f\142\x69\147" => $pic_spec_big, "\x69\155\147\137\143\x6f\x76\145\x72\137\155\x69\144" => $pic_cover_mid, "\x69\155\147\137\163\151\172\145\x5f\x6d\151\x64" => $pic_size_mid, "\x69\155\147\137\163\160\x65\x63\137\x6d\151\144" => $pic_spec_mid, "\x69\155\x67\x5f\x63\157\166\x65\x72\x5f\163\x6d\x61\154\154" => $pic_cover_small, "\151\155\x67\137\x73\151\172\x65\137\163\155\141\x6c\x6c" => $pic_size_small, "\x69\x6d\147\x5f\x73\160\145\x63\137\163\155\141\154\154" => $pic_spec_small, "\x69\x6d\x67\137\143\x6f\166\x65\162\137\155\x69\143\162\157" => $pic_cover_micro, "\x69\x6d\x67\x5f\163\151\x7a\145\137\155\151\x63\x72\157" => $pic_size_micro, "\151\x6d\147\137\x73\160\145\x63\137\155\151\143\162\157" => $pic_spec_micro, "\x75\x70\154\x6f\x61\x64\137\x74\151\155\145" => time(), "\165\x70\154\157\x61\144\137\164\171\x70\145" => $upload_type, "\x64\157\155\141\x69\x6e" => $domain, "\x62\x75\143\153\145\x74" => $bucket); goto JFepx; hfsou: } public function ModifyAlbumPicture($pic_id, $pic_cover, $pic_size, $pic_spec, $pic_cover_big, $pic_size_big, $pic_spec_big, $pic_cover_mid, $pic_size_mid, $pic_spec_mid, $pic_cover_small, $pic_size_small, $pic_spec_small, $pic_cover_micro, $pic_size_micro, $pic_spec_micro, $instance_id, $upload_type, $domain, $bucket) { goto fWYbC; bqtUe: return $res; goto U1x5u; fWYbC: $data = array("\151\x6d\147\x5f\143\157\x76\145\x72" => $pic_cover, "\x69\x6d\147\x5f\x73\x69\x7a\145" => $pic_size, "\x69\155\147\137\163\160\145\x63" => $pic_spec, "\151\155\x67\137\143\x6f\x76\145\x72\137\142\x69\x67" => $pic_cover_big, "\x69\x6d\x67\137\x73\151\172\x65\x5f\142\151\147" => $pic_size_big, "\151\155\147\x5f\x73\x70\145\x63\x5f\142\151\x67" => $pic_spec_big, "\x69\155\147\137\143\157\166\x65\x72\137\x6d\151\x64" => $pic_cover_mid, "\x69\x6d\147\x5f\163\x69\172\x65\x5f\x6d\151\x64" => $pic_size_mid, "\x69\x6d\147\137\163\160\x65\143\137\x6d\x69\144" => $pic_spec_mid, "\x69\155\x67\137\143\x6f\x76\145\162\x5f\x73\x6d\141\154\x6c" => $pic_cover_small, "\x69\x6d\147\137\163\x69\x7a\145\x5f\x73\155\x61\154\x6c" => $pic_size_small, "\x69\155\x67\x5f\x73\160\x65\x63\137\163\x6d\141\x6c\154" => $pic_spec_small, "\151\x6d\x67\137\x63\x6f\166\x65\162\x5f\x6d\x69\x63\x72\x6f" => $pic_cover_micro, "\x69\x6d\x67\137\163\151\172\145\137\x6d\151\x63\x72\x6f" => $pic_size_micro, "\151\x6d\x67\x5f\x73\x70\145\x63\137\155\151\x63\162\157" => $pic_spec_micro, "\165\160\x6c\157\x61\x64\137\x74\x69\x6d\x65" => time(), "\165\x70\154\x6f\141\x64\x5f\164\x79\160\145" => $upload_type, "\x64\157\x6d\x61\x69\x6e" => $domain, "\142\x75\x63\x6b\x65\x74" => $bucket); goto D98L7; D98L7: $res = $this->images->save($data, ["\160\151\143\x5f\x69\144" => $pic_id]); goto bqtUe; U1x5u: } public function getDefaultAlbumDetail() { $res = $this->images_group->getInfo(["\151\163\x5f\x64\x65\146\141\x75\x6c\164" => 1]); return $res; } public function GetDefAll($condition) { $res = $this->images_group->getInfo($condition); return $res; } public function addAlbumClass($aclass_name, $aclass_sort, $pid = 0, $aclass_cover = '', $is_default = 0, $mch_id) { goto UoInG; UoInG: $album_class = new ImagesGroup(); goto fdA9e; W8pWU: HB6g5: goto a_fym; cwT_Q: return $retval; goto OZCn1; sb8BV: g6F59: goto CZlgF; P9Ryc: if ($retval == 1) { goto g6F59; } goto cwT_Q; bnPdp: $retval = $album_class->save($data); goto P9Ryc; OZCn1: goto HB6g5; goto sb8BV; CZlgF: return $album_class->group_id; goto W8pWU; fdA9e: $data = array("\147\x72\157\x75\160\x5f\x6e\141\155\x65" => $aclass_name, "\x73\157\x72\x74" => $aclass_sort, "\147\162\x6f\x75\x70\x5f\x63\157\x76\145\162" => $aclass_cover, "\x69\163\137\x64\145\x66\141\165\x6c\164" => $is_default, "\143\162\145\x61\x74\145\x5f\x74\151\x6d\x65" => time(), "\160\151\x64" => $pid, "\x69\x64\x65\156\164" => '', "\160\x61\x67\x65\x73\137\x75\162\154" => '', "\x69\x73\x5f\x73\171\163\164\145\155" => 0, "\151\x64\x65\156\164\x5f\x63\x6c\141\x73\x73" => '', "\x6d\x63\x68\x5f\151\144" => $mch_id); goto bnPdp; a_fym: } public function getAlbumClassList($condition = '', $search_text, $order) { goto howkQ; Ymec9: if (empty($list)) { goto eAIjk; } goto ONiYk; XhCRH: zRSiR: goto ZxbxK; ZxbxK: eAIjk: goto IdBoU; IdBoU: return $list; goto Ousla; howkQ: $album_class = new ImagesGroup(); goto a5Ebu; ONiYk: foreach ($list as $k => $v) { goto uH0K4; AkwH2: eM1zN: goto WJjkN; GTfS5: $pic_cover = ''; goto JHAkT; yRtRZ: iIu_6: goto z81_H; JHAkT: if (!$v["\147\x72\x6f\x75\x70\x5f\x63\157\x76\x65\x72"]) { goto Zgvku; } goto IxmRB; gt_qz: if (empty($pic_info)) { goto eM1zN; } goto MhN4F; IxmRB: $pic_info = $album_picture->getInfo(["\x67\162\x6f\x75\160\137\151\144" => $v["\147\x72\x6f\165\160\x5f\151\x64"], "\x69\x6d\147\x5f\x69\144" => $v["\x67\x72\157\x75\160\137\x63\157\x76\x65\x72"]], "\x69\x6d\147\137\143\x6f\x76\x65\162\x2c\165\160\x6c\x6f\141\x64\x5f\x74\171\x70\145\x2c\x64\x6f\155\141\x69\156"); goto gt_qz; PDLWJ: Zgvku: goto yRtRZ; w9wUB: $list[$k]["\x69\155\x67\137\x63\x6f\x75\156\164"] = $count; goto iJEmM; WJjkN: $list[$k]["\151\x6d\147\137\151\x6e\146\x6f"] = $pic_info; goto VZo3x; iJEmM: $album_picture = new \app\common\model\Images(); goto GTfS5; MhN4F: $pic_cover = $pic_info["\151\x6d\x67\137\x63\157\166\x65\162"]; goto AkwH2; VZo3x: $list[$k]["\151\x6d\147\137\x61\154\142\x75\155\x5f\143\157\166\x65\x72"] = $pic_cover; goto PDLWJ; uH0K4: $count = $this->getAlbumPictureCount($v["\x67\162\x6f\165\160\x5f\151\144"]); goto w9wUB; z81_H: } goto XhCRH; a5Ebu: $list = $album_class->getPageLisy($condition, $search_text, $order); goto Ymec9; Ousla: } private function getAlbumPictureCount($group_id) { goto qcbOd; MkpWJ: return $count; goto j_I7i; ssHjN: $count = $album_picture->where("\x67\162\157\x75\160\x5f\x69\144\75" . $group_id)->count(); goto MkpWJ; qcbOd: $album_picture = new \app\common\model\Images(); goto ssHjN; j_I7i: } public function getAlbumClassDetail($group_id) { $res = $this->images_group->get($group_id); return $res; } public function getPictureList($condition = '', $search_text = '', $order = '') { $list = $this->images->getPageLisy($condition, $search_text, $order); return $list; } public function getImgList($condition = '', $field = "\52", $order = '') { $list = $this->images->getQuerys($condition, $field, $order); return $list; } public function deletePicture($pic_id_array) { goto ZZXfB; qo7NF: $type_arr = ["\x31", "\x32", "\x33", "\x34"]; goto YPa7X; MBGvA: QLMyc: goto aRntz; v472B: $imgs = array(); goto B7TUt; ZZXfB: global $_W; goto PPG0w; UYHj4: nr9u4: goto LdL0J; I9REw: n4XbC: goto tK6Fu; rA9lv: foreach ($pic_array as $pic_id) { goto eY1ON; Chara: rou0n: goto KTVCo; jS0EK: Onwbf: goto XNNfv; u4QWZ: removeImageFile($pic_cover_micro); goto vj891; MJq8B: removeImageFile($pic_cover_small); goto vfWcG; RhdYN: $res = -1; goto gW7iN; cZgd2: if (!$retval) { goto R0i34; } goto m3Mwl; gMDab: foreach ($type_arr as $type) { goto KGp6l; tR9WD: file_get_contents($url); goto DEDaN; KGp6l: $url = $_W["\x73\x69\x74\x65\x72\157\157\x74"] . "\141\144\144\157\x6e\x73\x2f\x79\x62\137\x73\150\x6f\x70\x2f\143\157\162\x65\x2f" . url("\x61\160\160\57\125\155\165\x70\154\157\141\x64\57\x64\x65\154\x65\164\145\x69\x6d\147") . "\x26\146\x69\154\x65\x3d" . $imgs[$pic_id . ''] . "\x26\x74\171\x70\145\75" . $type; goto tR9WD; DEDaN: XYTBo: goto Caj5z; Caj5z: } goto Crbca; K7VOV: if (empty($imgs[$pic_id . ''])) { goto rou0n; } goto gMDab; ZRvqx: if (!(!$result > 0)) { goto N3pi1; } goto RhdYN; TJw2a: $pic_cover = $picture_obj["\151\x6d\x67\x5f\x63\x6f\x76\x65\x72"]; goto lolc5; ItBXW: removeImageFile($pic_cover_big); goto QcVHy; FJGU7: $pic_cover_small = $picture_obj["\151\x6d\147\137\x63\x6f\166\x65\x72\x5f\163\x6d\x61\x6c\154"]; goto MJq8B; lolc5: removeImageFile($pic_cover); goto yl3gA; m3Mwl: $res = -1; goto d0RZP; t6aSz: R0i34: goto ENvfv; UPqOj: $picture_obj = $this->images->get($pic_id); goto okwZC; vfWcG: $pic_cover_micro = $picture_obj["\151\155\x67\x5f\143\157\x76\145\162\137\x6d\x69\143\x72\x6f"]; goto u4QWZ; u1r0B: removeImageFile($pic_cover_mid); goto FJGU7; QcVHy: $pic_cover_mid = $picture_obj["\x69\x6d\147\x5f\143\157\166\145\x72\137\x6d\151\x64"]; goto u1r0B; yl3gA: $pic_cover_big = $picture_obj["\x69\155\147\x5f\143\x6f\166\145\x72\x5f\x62\x69\147"]; goto ItBXW; vj891: LZ5Q7: goto K7VOV; Crbca: Mu7eh: goto Chara; eY1ON: $retval = in_array($pic_id, $user_img_array); goto cZgd2; d0RZP: goto Onwbf; goto t6aSz; ENvfv: $condition = array("\x69\x6d\x67\137\151\144" => $pic_id); goto UPqOj; XNNfv: XWNwn: goto UiBRw; KTVCo: $result = $this->images->destroy($condition); goto ZRvqx; okwZC: if (empty($picture_obj)) { goto LZ5Q7; } goto TJw2a; gW7iN: N3pi1: goto jS0EK; UiBRw: } goto MBGvA; EnyP8: e__12: goto oJiTz; f4XKb: $res = -1; goto j4kzY; VpfKS: $where["\x69\155\x67\137\151\144"] = ["\151\156", $pic_id_array]; goto JqCUo; YPa7X: if (!empty($pic_array)) { goto nr9u4; } goto f4XKb; UY6JR: goto mA2hk; goto I9REw; PPG0w: $pic_array = explode("\x2c", $pic_id_array); goto VpfKS; yOcgp: return DELETE_FAIL; goto UY6JR; JqCUo: $all_imgs = $this->images->where($where)->field("\x69\155\x67\137\151\x64\x2c\x69\x6d\147\x5f\143\x6f\x76\x65\162")->select(); goto v472B; RHE1W: if ($res == 1) { goto n4XbC; } goto yOcgp; bVjBv: mA2hk: goto AeANi; B7TUt: foreach ($all_imgs as $item) { $imgs[$item["\x69\x6d\147\x5f\x69\144"] . ''] = $item["\151\155\x67\x5f\143\157\166\x65\162"]; PHFxk: } goto EnyP8; tK6Fu: return SUCCESS; goto bVjBv; LdL0J: $user_img_array = $this->getGoodsAlbumUsePictureQuery(); goto rA9lv; aRntz: CXHyk: goto RHE1W; oJiTz: $res = 1; goto qo7NF; j4kzY: goto CXHyk; goto UYHj4; AeANi: } public function deleteImgGroup($img_id) { goto j3PPj; j3PPj: $res = $this->images_group->destroy(["\147\162\x6f\x75\160\137\x69\x64" => $img_id]); goto T9U3_; T9U3_: $this->images->destroy(["\x67\162\x6f\x75\160\x5f\x69\144" => $img_id]); goto Wd17k; Wd17k: return $res; goto vwHZS; vwHZS: } public function updateImagesGroupBox($img_id) { goto elN0B; scMGd: return $res; goto dcuvQ; teZoc: $res = $this->images_group->save($data, ["\147\162\x6f\x75\160\137\x69\144" => $img["\x67\x72\x6f\x75\160\137\x69\x64"]]); goto scMGd; elN0B: $img = $this->images->getInfo(["\x69\x6d\x67\137\x69\x64" => $img_id]); goto ZU9sP; ZU9sP: $data = array("\x67\162\x6f\165\160\x5f\143\157\166\x65\162" => $img["\x69\x6d\x67\137\151\144"], "\147\x72\x6f\x75\x70\137\x69\x64" => $img["\x67\162\157\165\160\x5f\151\x64"]); goto teZoc; dcuvQ: } public function addImagesGroup($mch_id) { goto zT6_s; zT6_s: $data = array("\147\x72\157\165\160\x5f\156\x61\x6d\x65" => "\351\xbb\x98\350\xae\244\xe7\233\xb8\xe5\x86\x8c", "\151\163\x5f\144\145\x66\x61\x75\x6c\164" => 1, "\143\x72\x65\141\x74\145\137\x74\x69\155\145" => time(), "\x6d\143\150\x5f\x69\x64" => $mch_id); goto GHms0; ZdRml: return $res; goto dUo7q; GHms0: $res = $this->images_group->save($data); goto ZdRml; dUo7q: } }
