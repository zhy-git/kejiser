<?php
 namespace app\api\service; use think\Db; class AlbumService { private $i = "\171\142\x73\143\x5f\x69\x6d\141\x67\145\x73"; private $ig = "\171\x62\163\x63\x5f\151\x6d\141\x67\145\x73\x5f\147\x72\157\165\160"; public function getAlbum($data, $page) { goto toj49; Sk8_k: $info = Db::name($this->i)->where("\147\162\157\165\160\137\x69\x64", $group_id["\147\162\157\165\x70\137\151\x64"])->page($page, PAGE_NUM)->select(); goto Yb31w; toj49: $group_id = Db::name($this->i)->where($data)->find(); goto ahSX1; Yj6dQ: return $rs; goto X0vOJ; ysmoJ: return $group_id; goto ByY3M; Yb31w: if (!empty($info)) { goto n6nEt; } goto Yj6dQ; ByY3M: xLsMD: goto Pb6Po; X0vOJ: n6nEt: goto VtJNh; ahSX1: if (!empty($group_id)) { goto xLsMD; } goto ysmoJ; VtJNh: $rs["\x69\156\x66\157"] = $info; goto Z2ZTQ; Z2ZTQ: return $rs; goto pN_Su; Pb6Po: $rs["\x67\162\x6f\165\x70\137\x6e\141\x6d\145"] = $group_id["\147\x72\x6f\x75\x70\x5f\156\141\155\145"]; goto Sk8_k; pN_Su: } public function getAlbumImages($data) { goto qqIal; qqIal: $rs = Db::name($this->ig)->where($data)->where("\151\x73\137\x64\145\x66\141\x75\x6c\164", "\60")->order("\163\x6f\x72\164", "\x64\x65\x73\143")->order("\143\x72\145\x61\x74\x65\137\164\151\x6d\145", "\144\x65\163\143")->select(); goto HUUFY; nnT3C: YGgLi: goto wKXU3; vwfd7: foreach ($rs as $k1 => $value) { goto erhin; erhin: $pic = Db::name($this->i)->where("\x69\155\147\x5f\151\144", $value["\x67\162\157\165\x70\x5f\x63\x6f\x76\145\x72"])->field("\151\155\x67\x5f\x63\x6f\166\x65\x72\x2c\x69\x6d\x67\137\143\x6f\166\145\x72\x5f\142\151\147\54\x69\x6d\147\x5f\143\157\x76\145\x72\137\155\x69\x64\54\x69\155\147\x5f\x63\x6f\x76\x65\x72\x5f\x73\x6d\141\154\154")->find(); goto GIsWT; GIsWT: if (!$pic) { goto CYgmy; } goto e7e78; bJEGP: bTUHA: goto W1TPG; e7e78: $rs[$k1]["\160\x69\x63"] = $pic; goto UE4c8; UE4c8: CYgmy: goto bJEGP; W1TPG: } goto s6Dr5; wKXU3: return $rs; goto LpBuc; HUUFY: if (empty($rs)) { goto YGgLi; } goto vwfd7; s6Dr5: ZgHKh: goto nnT3C; LpBuc: } }