<?php
 namespace app\api\controller; use think\Request; use think\Db; use app\api\service\AlbumService; require_once BASE_ROOT . "\x63\157\x72\145\x2f\141\160\x70\x6c\151\x63\141\x74\x69\x6f\x6e\x2f\141\160\x69\x2f\x63\x6f\x6e\x74\x72\x6f\x6c\x6c\x65\162\x2f\x42\141\163\145\x43\157\x6e\164\162\x6f\x6c\x6c\x65\162\x2e\x70\x68\x70"; class Album extends BaseController { public function Album() { goto G8iQD; mBczV: $rs["\143\157\144\145"] = 1; goto QBcK6; rEZHE: $data = array_filter($data); goto fX93m; yZ5h1: LeO9i: goto u9CWO; gmXqk: $page = Request::instance()->param("\160\141\x67\x65", 1); goto AIdZR; My7ri: $rule = [["\x67\x72\x6f\x75\x70\137\151\x64", "\162\x65\x71\165\151\x72\x65"]]; goto rjhnm; u9CWO: $article = new AlbumService(); goto rEZHE; G8iQD: $rs = array("\143\157\x64\x65" => 0, "\151\x6e\x66\157" => array()); goto qT7rp; rjhnm: $result = $this->checkParam($rule, $data); goto ImcaF; tHljw: $rs["\x69\x6e\x66\157"] = $info; goto thg0O; thg0O: return json_encode($rs); goto LPuls; Vy6KU: return json_encode($rs); goto yZ5h1; ImcaF: if (empty($result)) { goto LeO9i; } goto mBczV; fX93m: $info = $article->getAlbum($data, $page); goto tHljw; qT7rp: $group_id = Request::instance()->param("\147\x72\x6f\165\160\137\151\x64"); goto gbNdx; AIdZR: $mch_id = $this->getMchId($app_id); goto Y4aIv; QBcK6: $rs["\x6d\x73\147"] = $result; goto Vy6KU; gbNdx: $app_id = Request::instance()->param("\151"); goto gmXqk; Y4aIv: $data = ["\147\x72\157\x75\x70\137\x69\x64" => $group_id]; goto My7ri; LPuls: } public function AlbumImages() { goto XqUEp; DZ6CD: $mch_id = $this->getMchId($app_id); goto aEgwS; POy5c: $rs["\x6d\163\x67"] = $result; goto n_C10; w1Iva: oqROn: goto bqdbB; JVuSt: $result = $this->checkParam($rule, $data); goto Yoa_V; sYm4z: $info = $article->getAlbumImages($data); goto jrw2C; Yoa_V: if (empty($result)) { goto oqROn; } goto hnfeo; n_C10: return json_encode($rs); goto w1Iva; hnfeo: $rs["\x63\157\x64\x65"] = 1; goto POy5c; bqdbB: $article = new AlbumService(); goto sYm4z; DcU6t: return json_encode($rs); goto u_8Kr; XqUEp: $rs = array("\143\x6f\x64\x65" => 0, "\x69\156\146\157" => array()); goto vm46q; aEgwS: $data = ["\x6d\143\150\137\151\144" => $mch_id]; goto kLxVd; kLxVd: $rule = [["\x6d\x63\150\137\151\x64", "\x72\x65\161\165\x69\162\x65", "\344\xb8\215\xe5\xad\230\xe5\x9c\xa8\345\x95\206\346\x88\267"]]; goto JVuSt; vm46q: $app_id = Request::instance()->param("\x69"); goto DZ6CD; jrw2C: $rs["\151\x6e\x66\x6f"] = $info; goto DcU6t; u_8Kr: } }
