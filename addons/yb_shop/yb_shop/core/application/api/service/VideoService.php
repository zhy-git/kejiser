<?php
 namespace app\api\service; use app\common\model\VideoClass; use app\common\model\Video; use app\common\model\BusVideo; class VideoService { public function getVideoList($data, $page) { goto rX38i; QBawK: return $rs; goto gOgA_; OS6qB: foreach ($rs as $key => $value) { goto QRQiB; AleUh: omXCW: goto IqNi0; IQPv2: goto RA1YB; goto yRYnd; DuxXU: RA1YB: goto AleUh; fps0A: $value->add_time = date("\131\55\x6d\55\x64", $value->add_time); goto IQPv2; ZZbcB: $value->add_time = date("\x6e\346\234\210\152\xe6\x97\245", $value->add_time); goto DuxXU; QRQiB: $value->img = __IMG($value->img); goto TasxM; TasxM: if (date("\x59") == date("\x59", $value->add_time)) { goto SZcJH; } goto fps0A; yRYnd: SZcJH: goto ZZbcB; IqNi0: } goto UBScb; r1IId: return $rs; goto xuDeg; u9Z67: if (!empty($rs)) { goto aWQAe; } goto QBawK; Lw2No: $rs = $video->where($data)->page($page, PAGE_NUM)->order("\141\x64\144\x5f\164\x69\155\145", "\144\x65\163\143")->select(); goto u9Z67; rX38i: $video = new BusVideo(); goto Lw2No; gOgA_: aWQAe: goto OS6qB; UBScb: uzT1Y: goto r1IId; xuDeg: } public function getVideoClass($data, $page) { goto ZCROU; zE0_a: $rs = $video_class->where($data)->page($page, PAGE_NUM)->order("\163\157\x72\164", "\x64\x65\x73\143")->order("\143\x72\x65\x61\x74\x65\x5f\164\x69\155\145", "\x64\145\x73\x63")->select(); goto qISLu; qISLu: foreach ($rs as $key => $value) { goto B3D5i; Ja7Ui: HbbAE: goto Wwqvn; nKIUS: $value->update_time = date("\156\346\234\210\x6a\xe6\x97\245", $value->update_time); goto nrXpp; jW2ud: $value->update_time = date("\x59\55\x6d\55\144", $value->update_time); goto giq_I; giq_I: goto CSrWy; goto oGmJJ; Ee5yn: $value->count = $video->where("\143\154\x61\163\163\x5f\151\144", $value->class_id)->count(); goto GLu3D; B3D5i: $video = new Video(); goto Ee5yn; GLu3D: $value->images = __IMG($value->images); goto hoVCY; oGmJJ: kahke: goto OkLIQ; hoVCY: if (date("\x59") == date("\131", $value->create_time)) { goto kahke; } goto j2Tx4; OkLIQ: $value->create_time = date("\156\xe6\x9c\x88\x6a\xe6\x97\xa5", $value->create_time); goto nKIUS; nrXpp: CSrWy: goto Ja7Ui; j2Tx4: $value->create_time = date("\x59\x2d\x6d\55\x64", $value->create_time); goto jW2ud; Wwqvn: } goto Ak7_2; ZCROU: $video_class = new VideoClass(); goto zE0_a; JiY00: return $rs; goto dC2tq; Ak7_2: mmZSL: goto JiY00; dC2tq: } public function getVideo($data, $page) { goto az8mp; rsBEp: $data["\x63\154\x61\x73\x73\137\151\x64"] = $class_id; goto OiHot; stPSy: unset($data["\x6d\143\150\137\151\x64"]); goto rsBEp; OiHot: TiyR8: goto Ss9ps; Ss9ps: $video = new Video(); goto LgO52; Gphkn: foreach ($rs as $key => $value) { goto dEi1A; bDMT3: $value->create_time = date("\x6e\346\x9c\210\152\xe6\227\xa5", $value->create_time); goto ib5lz; b0KdA: o1lqh: goto tBJSs; zll5S: if (date("\x59") == date("\x59", $value->create_time)) { goto FLSIf; } goto StTV4; ib5lz: zL2rv: goto b0KdA; dEi1A: $value->image = __IMG($value->image); goto QxJgK; CR8aO: goto zL2rv; goto W0mla; StTV4: $value->create_time = date("\x59\55\x6d\x2d\144", $value->create_time); goto CR8aO; W0mla: FLSIf: goto bDMT3; QxJgK: $value->url = __IMG($value->url); goto zll5S; tBJSs: } goto Cn01S; LgO52: $rs = $video->where($data)->page($page, PAGE_NUM)->order("\x73\x6f\x72\164", "\144\145\163\x63")->order("\x63\x72\x65\x61\164\x65\137\164\151\155\x65", "\144\145\x73\x63")->select(); goto vSG1V; A64Ln: TNVw5: goto Gphkn; rWnN0: if (!empty($class_id)) { goto xzQnE; } goto VNkVY; wmIVD: $class_id = $video_class->where($class_data)->value("\x63\154\x61\x73\x73\137\151\x64"); goto rWnN0; t3oIk: return $rs; goto A64Ln; gXDHg: $video_class = new VideoClass(); goto wmIVD; AGzHe: $class_data = ["\151\144\x65\156\164" => $data["\151\x64\145\156\164"], "\155\x63\150\137\151\x64" => $data["\x6d\x63\x68\137\151\144"]]; goto gXDHg; haYXr: xzQnE: goto HnKvx; Cn01S: cNP_9: goto wZw1f; vSG1V: if (!empty($rs)) { goto TNVw5; } goto t3oIk; VNkVY: return $class_id; goto haYXr; wZw1f: return $rs; goto bx8Sv; HnKvx: unset($data["\x69\144\145\x6e\164"]); goto stPSy; az8mp: if (!isset($data["\151\x64\x65\156\164"])) { goto TiyR8; } goto AGzHe; bx8Sv: } public function getVideoInfo($data) { goto d4JQk; m5Rfm: return $rs; goto XyO1m; D5Div: $rs["\143\162\x65\x61\164\x65\x5f\x74\x69\x6d\x65"] = date("\156\346\234\210\152\xe6\x97\245", $rs->create_time); goto EwI6X; yZFLa: $rs["\165\162\154"] = __IMG($rs->url); goto wFbYw; EwI6X: NnQin: goto m5Rfm; RYU_F: uNT1q: goto D5Div; wFbYw: if (date("\x59") == date("\131", $rs->create_time)) { goto uNT1q; } goto lCj8K; ORvpc: if (!empty($rs)) { goto peEDk; } goto n_MmT; v4Y7w: peEDk: goto hkYHc; HlUgU: $rs = $video->where($data)->order("\x73\x6f\162\164", "\144\x65\163\143")->order("\x63\162\145\141\164\x65\x5f\164\151\x6d\145", "\x64\145\x73\143")->find(); goto ORvpc; n_MmT: return $rs; goto v4Y7w; i8fn7: goto NnQin; goto RYU_F; lCj8K: $rs["\143\x72\145\141\x74\145\x5f\164\151\x6d\145"] = date("\131\55\155\x2d\x64", $rs->create_time); goto i8fn7; hkYHc: $rs["\151\155\x61\x67\x65"] = __IMG($rs->image); goto yZFLa; d4JQk: $video = new Video(); goto HlUgU; XyO1m: } }
