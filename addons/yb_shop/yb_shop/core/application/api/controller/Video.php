<?php
 namespace app\api\controller; use think\Request; use think\Db; use app\api\service\VideoService; class Video extends BaseController { public function VideoList() { goto SXAoe; hBQXm: $app_id = Request::instance()->param("\151"); goto cKSsH; OubYN: $rs["\x6d\x73\147"] = "\xe6\x9a\x82\346\227\xa0\350\247\206\351\xa2\221"; goto QRCNm; yKxu7: return json_encode($rs); goto OpvEM; SXAoe: $rs = array("\143\157\144\x65" => 0, "\151\156\x66\157" => array()); goto hBQXm; cKSsH: $mch_id = $this->getMchId($app_id); goto Ed2OC; QcuJf: $rs["\x69\156\146\157"] = $info; goto yKxu7; kR9bQ: $page = Request::instance()->param("\160\141\x67\145", 1); goto X8OF2; A4W_e: QR7XE: goto QcuJf; qqPGp: if (!empty($info)) { goto QR7XE; } goto OubYN; hzX_I: $info = $video->getVideoList($data, $page); goto qqPGp; Ed2OC: $title = Request::instance()->param("\x74\x69\164\154\145"); goto kR9bQ; QRCNm: return json_encode($rs); goto A4W_e; X8OF2: $data = ["\155\x63\150\x5f\x69\x64" => $mch_id, "\151\144\145\x6e\x74" => $ident, "\143\154\141\x73\x73\137\151\x64" => $class_id, "\x74\x69\164\x6c\x65" => ["\154\x69\x6b\x65", "\45" . $title . "\x25"]]; goto HdI25; jvhFO: $data = array_filter($data); goto hzX_I; HdI25: $video = new VideoService(); goto jvhFO; OpvEM: } public function VideoClass() { goto JrsN2; fNVy1: $rule = [["\155\143\150\137\151\144", "\162\x65\161\165\x69\x72\145", "\xe4\xb8\215\xe5\xad\230\xe5\234\250\xe5\x95\206\346\210\267"]]; goto HerzJ; r15cz: $page = Request::instance()->param("\160\x61\147\x65", 1); goto GMSUW; Y0HLW: $app_id = Request::instance()->param("\x69"); goto SM32z; XVMDo: return json_encode($rs); goto ugjPX; mpGWA: $info = $video->getVideoClass($data, $page); goto X2Iv0; Y8gV1: $rs["\x63\157\x64\x65"] = 1; goto Q8iLg; Q8iLg: $rs["\x6d\x73\x67"] = $result; goto CnM3u; jacsn: FF8Uq: goto Rq_Uk; vrb_V: return json_encode($rs); goto jacsn; YsdHq: OYRte: goto i3iRC; Rq_Uk: $rs["\x69\x6e\146\x6f"] = $info; goto XVMDo; FJSra: $rs["\x6d\163\147"] = "\xe6\x9a\x82\xe6\x97\xa0\345\x88\206\347\261\xbb"; goto vrb_V; HerzJ: $result = $this->checkParam($rule, $data); goto KR8Fp; JrsN2: $rs = array("\x63\157\144\x65" => 0, "\151\x6e\x66\157" => array()); goto Y0HLW; SM32z: $mch_id = $this->getMchId($app_id); goto r15cz; KR8Fp: if (empty($result)) { goto OYRte; } goto Y8gV1; GMSUW: $data = ["\x6d\143\150\x5f\x69\144" => $mch_id]; goto fNVy1; CnM3u: return json_encode($rs); goto YsdHq; i3iRC: $video = new VideoService(); goto mpGWA; X2Iv0: if (!empty($info)) { goto FF8Uq; } goto FJSra; ugjPX: } public function Video() { goto qX3Ue; M_sqm: $rs["\x6d\x73\147"] = "\xe6\x9a\202\xe6\x97\xa0\350\xa7\x86\xe9\xa2\221"; goto sOL7A; n4vw8: R25uQ: goto DTH6S; uMh_h: $class_id = Request::instance()->param("\x63\154\x61\163\163\x5f\x69\x64"); goto vbcnW; ad0co: if (!empty($info)) { goto R25uQ; } goto M_sqm; iu5q9: $info = $video->getVideo($data, $page); goto ad0co; vbcnW: $title = Request::instance()->param("\164\151\x74\154\145"); goto q1dup; q1dup: $page = Request::instance()->param("\160\x61\147\x65", 1); goto l3LYs; JrKhr: $video = new VideoService(); goto dM3Lu; nKMVS: return json_encode($rs); goto b9vjR; l3LYs: $data = ["\155\x63\x68\137\x69\x64" => $mch_id, "\151\144\145\x6e\x74" => $ident, "\x63\154\x61\163\x73\x5f\151\144" => $class_id, "\164\151\164\x6c\145" => ["\154\151\153\x65", "\45" . $title . "\x25"]]; goto JrKhr; tLKH9: $mch_id = $this->getMchId($app_id); goto uMh_h; dM3Lu: $data = array_filter($data); goto iu5q9; CngUc: $app_id = Request::instance()->param("\x69"); goto tLKH9; sOL7A: return json_encode($rs); goto n4vw8; DTH6S: $rs["\x69\156\x66\157"] = $info; goto nKMVS; qG_fH: $ident = Request::instance()->param("\151\144\145\x6e\x74"); goto CngUc; qX3Ue: $rs = array("\143\x6f\x64\145" => 0, "\x69\156\146\157" => array()); goto qG_fH; b9vjR: } public function VideoInfo() { goto DyvVX; E9CAv: $video_id = Request::instance()->param("\x76\x69\x64\x65\157\x5f\x69\144"); goto mAmuI; oL699: return json_encode($rs); goto piHxJ; JZbj2: $rs["\155\x73\147"] = $result; goto tA2P3; UXNvn: wgh2Z: goto A1f4b; ptYMF: if (empty($result)) { goto wgh2Z; } goto lVzlj; xqdnp: return json_encode($rs); goto ZA9ZK; tA2P3: return json_encode($rs); goto UXNvn; lVzlj: $rs["\143\x6f\144\x65"] = 1; goto JZbj2; J0owC: $rs["\155\163\x67"] = "\346\232\x82\xe6\x97\xa0\350\xa7\x86\xe9\242\221"; goto xqdnp; tjlev: $info = $video->getVideoInfo($data); goto voYu3; A1f4b: $video = new VideoService(); goto tjlev; mAmuI: $data = ["\x76\151\x64\145\x6f\x5f\x69\144" => $video_id]; goto g68mh; ZA9ZK: S0KB4: goto vaHsL; g68mh: $rule = [["\166\151\144\145\x6f\x5f\151\144", "\162\145\x71\165\151\x72\145"]]; goto pYIlR; voYu3: if (!empty($info)) { goto S0KB4; } goto J0owC; DyvVX: $rs = array("\143\157\144\145" => 0, "\151\x6e\146\x6f" => array()); goto E9CAv; pYIlR: $result = $this->checkParam($rule, $data); goto ptYMF; vaHsL: $rs["\151\x6e\x66\157"] = $info; goto oL699; piHxJ: } }
