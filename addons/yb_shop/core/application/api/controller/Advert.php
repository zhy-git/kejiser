<?php
 namespace app\api\controller; use app\api\service\AdvertService; use Think\Request; class Advert extends BaseController { public function Advert() { goto dyaqz; sbEsP: $info = $advert->getAdvert(); goto zQRJs; dyaqz: $rs = array("\143\x6f\x64\145" => 0, "\x69\156\x66\157" => array()); goto GIqoF; zQRJs: $rs["\x69\156\146\x6f"] = $info; goto WUnzq; GIqoF: $advert = new AdvertService(); goto sbEsP; WUnzq: return json_encode($rs); goto PZPYB; PZPYB: } public function AdvertClicks() { goto KEtJz; ALTYV: $info = $advert->AdvertClicks($data); goto e3We7; B8q2Q: $rs["\155\163\147"] = "\xe7\202\xb9\xe5\207\273\346\254\241\xe6\x95\xb0\346\xb7\xbb\xe5\x8a\xa0\xe5\xa4\xb1\xe8\264\245"; goto ChUSd; e3We7: if (!empty($info)) { goto KkRcC; } goto lloZO; xS_Id: $data = ["\x61\x64\x76\137\151\144" => Request::instance()->param("\x61\x64\x76\137\151\x64")]; goto ybWYe; srI0e: $rs["\151\x6e\x66\x6f"] = $info; goto HJ8U1; gBf1I: KkRcC: goto srI0e; ChUSd: return json_encode($rs); goto gBf1I; NGjHq: return json_encode($rs); goto CTygz; syIlZ: $rs["\x63\x6f\144\x65"] = 1; goto omprq; cJ9QL: if (empty($result)) { goto NZme9; } goto syIlZ; lloZO: $rs["\x63\157\144\145"] = 1; goto B8q2Q; ybWYe: $rule = [["\x61\144\x76\x5f\x69\144", "\x72\x65\x71\165\x69\x72\145\x7c\156\165\x6d\142\145\162"]]; goto OijDi; HJ8U1: return json_encode($rs); goto WgJI0; txiLN: $advert = new AdvertService(); goto ALTYV; CTygz: NZme9: goto txiLN; omprq: $rs["\155\x73\147"] = $result; goto NGjHq; OijDi: $result = $this->checkParam($rule, $data); goto cJ9QL; KEtJz: $rs = array("\x63\x6f\x64\x65" => 0, "\x69\x6e\146\157" => array()); goto xS_Id; WgJI0: } }
