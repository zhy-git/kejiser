<?php
 namespace app\api\controller; use app\api\service\AdvertService; use Think\Request; class Advert extends BaseController { public function Advert() { goto G5jjt; cJwVx: $rs["\x69\156\x66\x6f"] = $info; goto gfUFp; I1RO9: $advert = new AdvertService(); goto VWzmA; G5jjt: $rs = array("\x63\157\x64\x65" => 0, "\151\156\x66\x6f" => array()); goto I1RO9; gfUFp: return json_encode($rs); goto WX5A3; VWzmA: $info = $advert->getAdvert(); goto cJwVx; WX5A3: } public function AdvertClicks() { goto fl24A; evNQF: $rs["\x63\157\x64\x65"] = 1; goto ZDExf; B7y4D: $result = $this->checkParam($rule, $data); goto PUNZA; gLKsU: return json_encode($rs); goto npMIl; SltD1: $data = ["\x61\x64\166\x5f\151\144" => Request::instance()->param("\x61\x64\166\137\151\x64")]; goto DbOIx; olMOH: $rs["\155\x73\x67"] = $result; goto gLKsU; fl24A: $rs = array("\143\157\x64\x65" => 0, "\151\156\x66\x6f" => array()); goto SltD1; DbOIx: $rule = [["\141\144\x76\137\151\x64", "\x72\145\161\165\151\x72\145\x7c\x6e\165\155\142\x65\x72"]]; goto B7y4D; UIhlX: return json_encode($rs); goto HUZ0a; PeIZ4: if (!empty($info)) { goto jStP0; } goto evNQF; Zwnvi: $rs["\151\x6e\146\157"] = $info; goto UMvgb; cPvPb: $info = $advert->AdvertClicks($data); goto PeIZ4; NeUIm: $advert = new AdvertService(); goto cPvPb; g_dIT: $rs["\x63\157\144\x65"] = 1; goto olMOH; ZDExf: $rs["\155\163\147"] = "\xe7\202\xb9\345\x87\xbb\xe6\254\xa1\346\x95\260\xe6\xb7\273\345\212\240\345\244\261\xe8\264\xa5"; goto UIhlX; UMvgb: return json_encode($rs); goto GJ9Bg; npMIl: EvKS4: goto NeUIm; PUNZA: if (empty($result)) { goto EvKS4; } goto g_dIT; HUZ0a: jStP0: goto Zwnvi; GJ9Bg: } }
