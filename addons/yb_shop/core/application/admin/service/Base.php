<?php
 namespace app\admin\service; use think\Session as Session; use think\Cache; class Base { protected $bus_id; public function __construct() { $this->init(); } private function init() { goto O8LPX; wieC6: $this->bus_id = $_SESSION["\142\x75\x73\x5f\151\144"]; goto L9GRO; O8LPX: $this->bus_id = Session::get("\x62\165\163\137\151\144"); goto a9FJQ; a9FJQ: if (!empty($this->bus_id)) { goto uIA0C; } goto wieC6; L9GRO: uIA0C: goto cKlAX; cKlAX: } function listToTree($list, $pk = "\151\x64", $pid = "\x70\151\144", $child = "\x5f\x63\150\151\154\x64", $root = 0) { goto BHFBb; DAPjR: $k++; goto IcGby; p77i2: goto YR310; goto ROdFM; hd6Jy: $list[$j][$child] = array_push($list[$j][$child], $list[$i]); goto fRer_; NOMAJ: goto nLycd; goto KHK7T; fRer_: goto cie3d; goto Vc678; TAv5g: if (!($j < count($list))) { goto Cz2cw; } goto OJWK2; gGZrB: $j = 0; goto BQuue; ROdFM: Cz2cw: goto JXdxz; KHK7T: THBCO: goto ELkCD; uUhIo: hrAqm: goto Xch7l; RkBbw: cie3d: goto CFry5; hRqA_: $list[$k][$child] = array(); goto kySoj; meueJ: $list[$j][$child][0] = $list[$i]; goto RkBbw; Xch7l: $i = count($list) - 1; goto HEce2; d135p: $i--; goto NOMAJ; IcGby: goto WHvte; goto uUhIo; kySoj: l6SDn: goto DAPjR; BHFBb: $k = 0; goto h5fFT; JXdxz: adkv_: goto d135p; ELkCD: return $list; goto LsVAG; CFry5: i2IMV: goto iup_i; Vc678: oEN1g: goto meueJ; h5fFT: WHvte: goto IAs3m; QnfVp: if (!($i >= 0)) { goto THBCO; } goto gGZrB; UwpmF: if (empty($list[$j][$child])) { goto oEN1g; } goto hd6Jy; HEce2: nLycd: goto QnfVp; BQuue: YR310: goto TAv5g; IAs3m: if (!($k < count($list))) { goto hrAqm; } goto hRqA_; id97H: $j++; goto p77i2; iup_i: x7a1D: goto id97H; OJWK2: if (!($list[$j][$pk] == $list[$i][$pid])) { goto i2IMV; } goto UwpmF; LsVAG: } public function addCacheKeyTag($key, $tag) { goto rbMb2; NJExh: if (!empty($key_list)) { goto T3y72; } goto pUBfA; knErp: $key_list[] = $tag; goto f45Ni; kfKUW: ODfjj: goto VoktF; n54ij: T3y72: goto jGxWz; f45Ni: Cache::set($key, $key_list); goto kfKUW; rbMb2: $key_list = Cache::get($key); goto NJExh; jGxWz: if (in_array($tag, $key_list)) { goto ODfjj; } goto knErp; pUBfA: $key_list = array(); goto n54ij; VoktF: } public function clearKeyCache($key) { goto jfuBJ; ZL8il: DPiZ0: goto me1gX; jfuBJ: $key_list = Cache::get($key); goto W1iEs; KtfkN: foreach ($key_list as $k => $v) { Cache::set($v, ''); kg3Pk: } goto ZL8il; W1iEs: if (empty($key_list)) { goto Pr_94; } goto KtfkN; me1gX: Pr_94: goto jd0uj; jd0uj: } }
