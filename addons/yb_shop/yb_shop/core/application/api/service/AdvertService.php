<?php
 namespace app\api\service; use app\common\model\Advert; use app\common\model\AdvertPosition; class AdvertService { public function getAdvert() { goto Zh3pp; kLhh0: $advert = new Advert(); goto SPxxI; Tusx1: $advert_position_list = $advert_position->where("\151\163\137\x75\x73\x65", 1)->select(); goto kLhh0; SPxxI: foreach ($advert_position_list as $value) { goto XDGaz; qcT7z: OnOzn: goto YiIqR; XDGaz: $value["\x61\144\166\145\x72\164"] = $advert->where("\x69\163\x5f\165\x73\x65", 1)->where("\141\160\x5f\x69\144", $value->ap_id)->select(); goto sAhP7; YiIqR: wH9xx: goto JOaZJ; sAhP7: foreach ($value["\x61\x64\x76\x65\162\x74"] as $v) { $v->adv_image = __IMG($v->adv_image); ZdgHH: } goto qcT7z; JOaZJ: } goto x0jtg; Zh3pp: $advert_position = new AdvertPosition(); goto w6pX2; w6pX2: $advert_position_list = null; goto Tusx1; ZOsXb: return $advert_position_list; goto fLQYf; x0jtg: XRM3D: goto ZOsXb; fLQYf: } public function AdvertClicks($data) { goto oWG8s; EJx5O: return $rs; goto sO63l; oHFO9: $rs = $advert->where($data)->setInc("\143\154\x69\x63\x6b\137\x6e\165\155"); goto EJx5O; oWG8s: $advert = new Advert(); goto oHFO9; sO63l: } }