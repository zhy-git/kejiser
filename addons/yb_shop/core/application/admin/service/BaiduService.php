<?php
 namespace app\admin\service; use think\Cache; use think\Db; class BaiduService extends Base { function __construct() { parent::__construct(); } public function config_save($mch_id, $param, $is_use = -1) { goto y8imd; TZZJe: return $res; goto A_TVc; peAKa: $res = Db::name("\171\142\x73\143\137\x63\x6f\156\146\x69\147")->insert($data); goto hxQR5; Nlql_: $data["\x6b\145\x79"] = "\102\104\101\120\120"; goto OOpxY; ZYFtA: goto MlQju; goto D287x; oSda6: $data["\166\x61\154\165\145"] = json_encode($param); goto nF7Uq; ZO_Xc: if (!empty($a["\x76\x61\154\165\145"])) { goto ZT6X2; } goto EpZ_p; D287x: wr0G9: goto oSda6; Gz4Yp: kv92E: goto TZZJe; hxQR5: goto kv92E; goto uLtXE; uLtXE: ZT6X2: goto Wg8Z2; y8imd: if (is_array($param)) { goto wr0G9; } goto R3rNP; R3rNP: $data["\166\141\x6c\165\145"] = $param; goto ZYFtA; nF7Uq: MlQju: goto GSw9_; GSw9_: $data["\x6d\x6f\x64\x69\146\171\137\x74\x69\155\x65"] = time(); goto enhsP; OOpxY: $data["\x69\x73\137\165\x73\x65"] = "\x31"; goto peAKa; Wg8Z2: $res = Db::name("\x79\x62\163\143\x5f\143\157\x6e\146\151\147")->where("\x6b\x65\x79", "\x42\104\x41\120\x50")->where("\155\x63\150\137\x69\x64", $mch_id)->update($data); goto Gz4Yp; EpZ_p: $data["\x6d\143\150\x5f\151\144"] = $mch_id; goto Nlql_; enhsP: $a = Db::name("\x79\142\163\x63\x5f\143\157\x6e\x66\x69\x67")->where("\x6b\145\x79", "\102\104\101\120\120")->where("\155\143\x68\137\151\x64", $mch_id)->order("\151\x64\x20\144\145\163\143")->find(); goto ZO_Xc; A_TVc: } }