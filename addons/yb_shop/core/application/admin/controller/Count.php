<?php
 namespace app\admin\controller; use think\Db; class Count extends Base { public function OrderCount() { goto JfR6p; bLDip: $data[1][] = Db::name("\x79\x62\x73\x63\x5f\x6f\x72\144\x65\162")->where("\x6d\x63\x68\137\x69\144", $this->bus_id)->whereTime("\x63\x72\145\x61\164\x65\x5f\164\x69\x6d\x65", "\142\x65\164\167\x65\x65\156", [$firstday . "\x2d" . $i, $firstday . "\x2d" . $i . "\40\62\63\x3a\65\71\72\65\71"])->count(); goto Akeof; kEvV0: hB2PJ: goto xWgJS; nTbxp: goto mrDxH; goto IFT2D; m3rIW: $firstday = $star_time; goto v6n30; tKlTY: goto wRdMT; goto kEvV0; wXvon: $data[3] = sprintf("\45\x2e\x32\x66", $order_pay); goto YYe3t; q30l3: return $data; goto hTTQc; IFT2D: C1xtv: goto q30l3; F5Y4d: $data[2] = $order_month; goto wXvon; DZFjg: return view("\x63\157\165\x6e\164\x2f\157\x72\144\x65\162\x5f\x63\x6f\165\x6e\x74"); goto tKlTY; ZB6t6: $data[0][] = $i . "\xe6\227\xa5"; goto bLDip; q0qLR: mrDxH: goto jt3gZ; vf852: if ($star_time == 0) { goto LnwVL; } goto EDqcg; jt3gZ: if (!($i <= $days)) { goto C1xtv; } goto ZB6t6; YYe3t: goto tdcQY; goto zdmdK; zdmdK: LnwVL: goto yppNK; djuae: $star_time = request()->param("\163\164\x61\x72\137\x74\151\x6d\x65", ''); goto Y4xMl; JfR6p: if (request()->isAjax()) { goto hB2PJ; } goto djuae; hTTQc: wRdMT: goto VfhbU; Y4xMl: $this->assign("\163\x74\x61\162\137\x74\x69\x6d\x65", $star_time); goto DZFjg; yAgDp: $order_pay = Db::name("\x79\x62\x73\x63\x5f\x6f\x72\x64\145\x72")->where("\x6d\143\150\137\x69\x64", $this->bus_id)->whereTime("\x63\x72\145\x61\x74\x65\137\164\x69\155\x65", "\142\x65\x74\x77\145\x65\x6e", [$firstday, $firstday . "\55" . $days . "\x20\x32\x33\x3a\x35\71\x3a\x35\x39"])->sum("\157\x72\x64\145\x72\x5f\x6d\157\x6e\x65\171"); goto F5Y4d; w1R1Y: $order_pay = Db::name("\x79\142\163\143\x5f\x6f\x72\144\145\x72")->where("\x6d\x63\x68\x5f\x69\x64", $this->bus_id)->whereNotIn("\157\162\x64\145\x72\x5f\163\164\x61\x74\165\x73", 5)->whereTime("\143\x72\145\x61\164\x65\x5f\164\151\x6d\x65", "\x6d\x6f\x6e\x74\150")->sum("\x6f\x72\x64\x65\162\x5f\x6d\x6f\156\x65\171"); goto majB4; EDqcg: $days = date("\164", strtotime($star_time)); goto m3rIW; xWgJS: $star_time = request()->post("\x73\164\x61\162\x5f\x74\151\x6d\x65", 0); goto a_Lg7; Akeof: t9lh0: goto CkvOD; vdS6W: $data[3] = sprintf("\x25\56\x32\146", $order_pay); goto RHwTG; a_Lg7: $data = []; goto vf852; X45ND: $order_month = Db::name("\171\142\163\143\x5f\x6f\x72\144\x65\162")->where("\x6d\x63\x68\137\151\x64", $this->bus_id)->whereTime("\x63\162\145\141\x74\x65\x5f\x74\151\x6d\x65", "\155\157\156\164\x68")->count(); goto w1R1Y; CkvOD: $i++; goto nTbxp; yppNK: $days = date("\x74"); goto OIiwT; v6n30: $order_month = Db::name("\171\142\163\143\x5f\x6f\162\144\x65\162")->where("\155\x63\x68\x5f\151\144", $this->bus_id)->whereTime("\x63\x72\145\x61\x74\x65\x5f\x74\x69\155\145", "\x62\145\x74\167\145\x65\x6e", [$firstday, $firstday . "\x2d" . $days . "\x20\x32\63\72\65\71\x3a\65\71"])->count(); goto yAgDp; OIiwT: $firstday = date("\x59\55\155", time()); goto X45ND; majB4: $data[2] = $order_month; goto vdS6W; RHwTG: tdcQY: goto TcE_b; TcE_b: $i = 1; goto q0qLR; VfhbU: } public function UserCount() { goto dzejm; dzejm: if (request()->isAjax()) { goto F0lvh; } goto QlCri; PWyck: FzSbR: goto ezCDr; HsI0q: goto SYmdN; goto PWyck; pfzGn: $star_time = request()->post("\x73\x74\141\x72\x5f\x74\x69\x6d\x65", 0); goto QirXK; t4N3h: SYmdN: goto JI66B; X9FSp: $this->assign("\163\164\x61\162\137\164\x69\155\x65", $star_time); goto gmMRh; P40nN: $days = date("\x74"); goto eXrrJ; JI66B: if (!($i <= $days)) { goto FzSbR; } goto BybHj; IdHy8: vgGWJ: goto P40nN; JpnYD: $i++; goto HsI0q; ZNqkW: $days = date("\x74", strtotime($star_time)); goto Q68HI; Tk4t6: Rrc0I: goto Wnphf; QlCri: $star_time = request()->param("\x73\x74\141\x72\137\164\151\x6d\145", ''); goto X9FSp; qUlje: F0lvh: goto pfzGn; W2mCq: EbHSC: goto JpnYD; Q68HI: $firstday = $star_time; goto O5jPu; eXrrJ: $firstday = date("\x59\55\x6d", time()); goto Lw0co; OxQIb: $data[1][] = Db::name("\x79\142\163\143\x5f\x75\163\145\x72")->where("\155\143\150\x5f\x69\x64", $this->bus_id)->whereTime("\162\x65\147\137\x74\151\155\145", "\142\145\164\x77\145\x65\x6e", [$firstday . "\55" . $i, $firstday . "\x2d" . $i . "\40\x32\x33\x3a\65\x39\72\65\71"])->count(); goto W2mCq; BybHj: $data[0][] = $i . "\346\227\xa5"; goto OxQIb; OVvpc: if ($star_time == 0) { goto vgGWJ; } goto ZNqkW; QirXK: $data = []; goto OVvpc; ezCDr: return $data; goto Tk4t6; Lw0co: Kgnar: goto rvnRc; rvnRc: $i = 1; goto t4N3h; O5jPu: goto Kgnar; goto IdHy8; EzH1u: goto Rrc0I; goto qUlje; gmMRh: return view("\x63\157\165\156\x74\x2f\x75\163\145\x72\137\143\x6f\165\156\164"); goto EzH1u; Wnphf: } }
