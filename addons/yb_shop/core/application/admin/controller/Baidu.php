<?php
 namespace app\admin\controller; use app\admin\service\BaiduService; use think\Db; class Baidu extends Base { public function config() { goto Z1ObE; FvRvp: m4IUV: goto HvAXE; Oz01h: return AjaxReturn($res); goto t0pFE; t0pFE: MRwH3: goto zQy53; Z1ObE: if (request()->isPost() && request()->isAjax()) { goto m4IUV; } goto LCsUd; DOO_A: unset($param["\x41\120\120\x5f\125\x52\114\137\120\x54"]); goto bZf4C; mHZIl: unset($param["\x41\120\120\x5f\x55\x52\x4c\137\x42\107"]); goto DOO_A; LCsUd: $info = Db::name("\171\x62\163\143\x5f\143\x6f\156\x66\151\147")->where("\x6d\143\150\x5f\151\x64", $this->bus_id)->where("\153\145\171", "\x42\x44\101\120\120")->order("\x69\144\40\144\x65\163\x63")->find(); goto D9Uy4; YvhTj: return view(); goto QbzZQ; bZf4C: $ser = new BaiduService(); goto MV39P; QbzZQ: goto MRwH3; goto FvRvp; MV39P: $res = $ser->config_save($this->bus_id, $param); goto Oz01h; D9Uy4: $this->assign("\x69\x6e\146\157", json_decode($info["\x76\x61\x6c\x75\145"], true)); goto YvhTj; QcY51: unset($param["\x41\120\x50\x5f\x55\x52\x4c"]); goto mHZIl; HvAXE: $param = $_POST; goto QcY51; zQy53: } public function mip_pc() { goto EHWJV; XCRiD: return view(); goto iQSKv; FF5F8: $url = $http . $host; goto FgWeF; x_10p: $this->assign("\160\x61\x63\153\141\147\x65\x64", file_exists($BASE_PATH)); goto XCRiD; FgWeF: $this->assign("\165\x72\x6c", $url); goto v5s5y; DPKQm: if (count($host) > 2) { goto hKzb3; } goto hiqC3; fxLCD: $pre = "\160\x63" . $this->alphaID($this->bus_id); goto DPKQm; hiqC3: $host = $pre . implode("\x2e", $host); goto uYcxH; pmVsD: $http = count($host) > 1 ? "\150\x74\x74\x70\163\x3a\57\x2f" : "\x68\164\x74\160\72\57\x2f"; goto F4hz2; DA6Nj: hKzb3: goto n1QMd; v5s5y: $BASE_PATH = SITE_PATH . "\x70\165\142\x6c\x69\143\57\x75\x70\154\x6f\x61\x64\57\155\x69\x70\137\160\x63\x2f\115\111\x50\x5f\x50\103\x5f{$this->bus_id}\56\x7a\151\x70"; goto x_10p; O0nXf: $host = explode("\56", $host); goto fxLCD; EHWJV: $host = explode("\x3a", $_SERVER["\110\x54\124\120\x5f\110\117\123\124"]); goto pmVsD; n1QMd: $host[0] = $pre; goto hn1X5; Ebq7i: VAuc2: goto FF5F8; hn1X5: $host = implode("\x2e", $host); goto Ebq7i; uYcxH: goto VAuc2; goto DA6Nj; F4hz2: $host = $host[0]; goto O0nXf; iQSKv: } public function mip_pc_seo() { goto dAw8l; eh3Nb: $this->assign("\151\x6e\x66\157", $info); goto kwotZ; lvyed: zwxKh: goto eh3Nb; lVEut: $info = Db::name("\171\x62\163\143\137\x73\145\x6f")->where(["\x6d\143\150\137\x69\x64" => $this->bus_id, "\x74\171\160\x65" => 0])->find(); goto lpn5s; lpn5s: if (!empty($info)) { goto zwxKh; } goto eg7lB; M0Xk7: return AjaxReturn($res); goto yqw0p; eg7lB: Db::name("\x79\142\x73\143\137\x73\145\x6f")->insert(["\155\143\150\x5f\x69\x64" => $this->bus_id, "\x74\171\160\145" => 0]); goto lvyed; jFcZY: $res = $res === false ? 1 : $res; goto M0Xk7; dAw8l: if (!(request()->isPost() && request()->isAjax())) { goto FLIY3; } goto AeE3R; yqw0p: FLIY3: goto lVEut; kwotZ: return view(); goto kCDC8; AeE3R: $res = Db::name("\171\x62\x73\x63\x5f\x73\x65\x6f")->where(["\x6d\143\150\x5f\151\x64" => $this->bus_id, "\164\x79\160\145" => 0])->update($_POST); goto jFcZY; kCDC8: } public function mip_h5_seo() { goto QwVhQ; utEy3: return view(); goto GLLuj; MSqWr: $this->assign("\151\156\146\157", $info); goto utEy3; x9rLG: $res = Db::name("\x79\142\163\143\x5f\x73\145\157")->where(["\155\x63\150\137\151\x64" => $this->bus_id, "\x74\171\160\145" => 1])->update($_POST); goto P4WzM; vPIp2: kIs3p: goto MSqWr; O2mdV: Db::name("\171\x62\x73\143\x5f\163\x65\x6f")->insert(["\x6d\143\x68\137\x69\x64" => $this->bus_id, "\x74\171\160\x65" => 1]); goto vPIp2; QwVhQ: if (!(request()->isPost() && request()->isAjax())) { goto zLnsl; } goto x9rLG; P2VOn: zLnsl: goto rehT3; BCqIQ: return AjaxReturn($res); goto P2VOn; Sg9Ha: if (!empty($info)) { goto kIs3p; } goto O2mdV; rehT3: $info = Db::name("\x79\142\163\x63\x5f\x73\145\157")->where(["\155\x63\x68\137\151\144" => $this->bus_id, "\x74\x79\x70\145" => 1])->find(); goto Sg9Ha; P4WzM: $res = $res === false ? 1 : $res; goto BCqIQ; GLLuj: } public function mip_vhost() { goto hwe1U; mLKSh: return view(); goto b73dL; hwe1U: $type = request()->param("\x74\171\160\145"); goto ZWGxw; s8XbR: $this->assign("\x6c\x69\163\x74", $list); goto mLKSh; virmU: $list = Db::name("\171\142\163\143\x5f\x76\150\x6f\x73\164")->where(["\155\143\x68\x5f\x69\x64" => $this->bus_id, "\164\x79\x70\x65" => $type])->select(); goto s8XbR; ZWGxw: $this->assign("\x74\x79\x70\x65", $type); goto virmU; b73dL: } public function mip_bind_vhost() { goto S552r; PMlNZ: $this->assign($param); goto hecut; n25q3: $info = Db::name("\x79\142\163\x63\137\x76\150\x6f\x73\x74")->where(["\150\x6f\163\x74" => trim($_POST["\150\x6f\x73\x74"])])->find(); goto imTwK; loOzf: file_get_contents($url); goto L16X6; AvpTG: $res = $res === false ? 1 : $res; goto DWqIF; Jcy_9: $_POST["\x6d\143\150\137\x69\x64"] = $this->bus_id; goto n25q3; drwrq: mi3FP: goto OfRX3; imTwK: if (empty($info)) { goto W8NtX; } goto zER5l; OfRX3: $param = request()->param(); goto PMlNZ; S552r: if (!(request()->isPost() && request()->isAjax())) { goto mi3FP; } goto Jcy_9; zER5l: return AjaxReturnMsg(0, "\346\xad\xa4\xe5\x9f\237\345\x90\x8d\xe5\xb7\xb2\xe7\xbb\x91\345\256\232\x2c\xe6\x97\xa0\xe6\xb3\x95\xe5\x86\x8d\xe6\254\xa1\xe7\xbb\221\xe5\xae\232"); goto UByAx; g9TZe: $res = Db::name("\x79\142\x73\x63\137\166\x68\x6f\163\x74")->insert($_POST); goto AvpTG; UByAx: W8NtX: goto g9TZe; hecut: return view(); goto NObIb; L16X6: return AjaxReturnMsg($res, $res === 1 ? "\xe7\273\221\345\xae\x9a\xe6\210\x90\xe5\x8a\237\41" : "\xe7\273\221\xe5\xae\232\345\244\261\350\264\245\x21"); goto drwrq; DWqIF: $url = "\x68\164\x74\x70\x3a\x2f\x2f\x31\62\67\x2e\60\x2e\60\x2e\x31\x3a\63\71\x35\65\65\x2f\x61\144\x64\x3f\x68\157\163\x74\75{$_POST["\150\157\163\x74"]}\x26\x75\x6e\151\x64\75{$this->bus_id}\x26\x74\x79\160\145\75{$_POST["\x74\x79\160\145"]}\46\x70\x6f\162\x74\75{$_POST["\x70\157\162\x74"]}"; goto loOzf; NObIb: } public function mip_del_vhost() { goto rNTOO; rNTOO: if (!(request()->isPost() && request()->isAjax())) { goto M7gbF; } goto zMgPl; jGT94: $res = Db::name("\x79\x62\x73\143\x5f\x76\x68\157\163\x74")->where(["\151\x64" => $id])->delete(); goto aXliy; zMgPl: $id = request()->param("\x69\x64"); goto vthJ1; vthJ1: $info = Db::name("\171\x62\x73\x63\x5f\x76\150\x6f\163\164")->where(["\151\x64" => $id])->find(); goto mQBA7; eAnJE: file_get_contents($url); goto jGT94; Xjtl1: M7gbF: goto ijsok; mQBA7: $url = "\x68\164\x74\160\x3a\57\x2f\61\x32\67\56\60\x2e\x30\56\61\x3a\63\71\x35\x35\x35\57\144\145\154\x3f\150\x6f\x73\x74\x3d{$info["\150\157\163\164"]}\46\x75\156\151\144\x3d{$this->bus_id}\x26\164\171\x70\x65\x3d{$info["\x74\x79\x70\x65"]}\x26\x70\x6f\162\x74\x3d{$info["\x70\x6f\x72\x74"]}"; goto eAnJE; aXliy: return AjaxReturn($res); goto Xjtl1; ijsok: } public function mip_pc_build() { goto ZNYD9; MG1Vp: $where["\151\x73\x5f\x64\145\154"] = 0; goto hQiY2; btl8J: foreach ($arrs as $pps) { goto N4ugu; N4ugu: if (is_dir($pps)) { goto nBeLC; } goto hdBn3; sebPq: vzTqy: goto i3cSN; hdBn3: mkdir($pps, 0755, true); goto IKszm; IKszm: nBeLC: goto sebPq; i3cSN: } goto Vc3qG; Ubx72: $arrs = [$BASE_PATH . "\x70\x72\x6f\x64\165\x63\164", $BASE_PATH . "\x61\x72\164\x69\x63\x6c\x65"]; goto btl8J; niSQz: $pages = ceil($pcount / 12); goto R9Ea6; nlXUt: $info = Db::name("\171\142\x73\x63\x5f\163\x65\x6f")->where(["\x6d\143\150\x5f\151\x64" => $this->bus_id, "\x74\171\x70\145" => 0])->find(); goto yXfY3; Hguy3: $where["\x6d\x63\150\x5f\151\144"] = $this->bus_id; goto MG1Vp; pt3uw: foreach ($article_infos as $item) { $all_file["\x61\162\x74\x69\x63\154\x65\57{$item["\141\162\x74\151\143\x6c\145\137\x69\x64"]}\x2e\150\164\x6d\154"] = url("\160\157\162\164\141\154\x2f\160\x63\x2f\141\162\x74\151\x63\x6c\145\137\x69\156\146\157", ["\x75\156\151\141\143\x69\x64" => $this->bus_id, "\151\144" => $item["\x61\162\164\x69\x63\x6c\x65\x5f\x69\144"]]); qpiZQ: } goto tyaNF; M2aZQ: FQGId: goto VLkuR; EHhfg: KzAe2: goto cheKA; JnHHg: $host = rtrim($_POST["\x68\157\163\x74"], "\57"); goto nlXUt; hs6lG: $where["\155\x63\150\x5f\151\144"] = $this->bus_id; goto otxXZ; Vwo7P: if (!is_dir($BASE_PATH)) { goto ZXpOA; } goto ysFr9; trPga: $article_class = Db::name("\171\142\163\x63\137\x61\x72\x74\x69\x63\154\x65\137\143\154\x61\x73\163")->where(["\x6d\x63\x68\137\151\144" => $this->bus_id, "\x69\x73\x5f\x64\x65\154" => 1, "\x6c\x65\x76\145\x6c" => 1])->order("\163\157\x72\x74\40\x61\x73\x63")->select(); goto XFjKR; TKJ0H: $i = 1; goto wA7NL; Iw5Hu: return AjaxReturn(0); goto Y98O6; gLDDP: $i = 1; goto TKJ0H; rJfu3: $product_infos = Db::name("\171\x62\163\x63\x5f\147\157\x6f\x64\x73")->where($where)->select(); goto QPZo0; AoRuN: $keywords = empty($info["\x6b\x65\x79\x77\157\x72\x64\x73"]) ? '' : $info["\x6b\145\x79\167\157\x72\x64\163"]; goto i5p_S; GtV9W: global $_W; goto Dzuzn; hQiY2: $pcount = Db::name("\x79\142\163\x63\137\147\x6f\157\144\163")->where($where)->count(); goto niSQz; CSL3s: if (!($res !== true)) { goto Pz5oU; } goto Iw5Hu; aTbYk: quE9f: goto trPga; yXfY3: $title = empty($info["\164\151\164\x6c\145"]) ? '' : $info["\164\x69\164\154\x65"]; goto AoRuN; DYOr6: Z2CAe: goto Q3zDL; RUt_S: WVfii: goto W22R1; MXtiS: mkdir($BASE_PATH, 0755, true); goto MzPxs; tyaNF: WjQ1_: goto DjIC5; rKaJD: $res = $zip->open($ZIP_PATH, \ZIPARCHIVE::CREATE); goto CSL3s; YLPRG: unlink($ZIP_PATH); goto DGeu8; MzPxs: aMEau: goto Ubx72; U1IDx: if (!file_exists($ZIP_PATH)) { goto i9hgB; } goto YLPRG; mXfTX: KjKuw: goto NEV1F; Fsnfy: $where = array(); goto Hguy3; Y98O6: Pz5oU: goto bEZgL; cheKA: $i++; goto hY7G9; hY7G9: goto eQNTK; goto aTbYk; ukPdh: $replaces = [["\133\x23\124\151\x74\154\145\x23\135", "\133\43\113\145\x79\x77\157\x72\144\x73\43\135", "\x5b\x23\104\145\x73\x63\x72\x69\x70\x74\x69\157\x6e\x23\x5d"], [$title, $keywords, $description]]; goto GtV9W; Dzuzn: $BASE_URL = $_W["\163\151\x74\x65\162\157\157\x74"] . "\141\144\144\157\156\163\x2f\171\142\137\x73\150\157\160\x2f\x63\x6f\x72\145\57"; goto u4jet; NEV1F: $zip->close(); goto aPTkx; aPTkx: return AjaxReturn(1); goto M2aZQ; DuvUU: $product_class = Db::name("\171\142\x73\x63\137\147\157\x6f\x64\163\137\x63\x61\164\x65")->where(["\155\x63\150\137\x69\x64" => $this->bus_id, "\x69\x73\137\x76\151\163\x69\142\154\x65" => 1])->order("\x73\x6f\x72\164\40\x61\163\x63")->select(); goto U6dK0; XFjKR: foreach ($article_class as $item) { goto cC2xR; vlHxi: I7SNe: goto pqdXm; rwHcZ: if (!($i <= $pages)) { goto DEPik; } goto jtMZo; P43va: jKZ0W: goto rwHcZ; Kc1jy: $pages = ceil($pcount / 12); goto maiaX; Vu0qV: DEPik: goto vlHxi; AYTKG: $where["\163\164\x61\164\165\163"] = 2; goto mEABA; IVWdV: $pcount = Db::name("\171\142\x73\x63\137\x61\x72\x74\x69\143\x6c\145")->where($where)->count(); goto Kc1jy; cC2xR: $where = array(); goto qeL5s; jtMZo: $all_file["\x61\x72\164\151\x63\x6c\x65\57{$item["\x63\x6c\141\163\163\x5f\x69\144"]}\137{$i}\56\150\164\x6d\x6c"] = url("\x70\157\x72\164\141\154\x2f\x70\x63\x2f\141\162\164\x69\143\154\145", ["\x75\x6e\151\x61\143\x69\x64" => $this->bus_id, "\x63\x6c\x61\163\163\137\151\144" => $item["\143\x6c\x61\x73\163\137\x69\144"], "\160\141\x67\x65" => $i]); goto A3S5E; qeL5s: $where["\155\143\150\137\151\144"] = $this->bus_id; goto bwNfb; A3S5E: axdXV: goto zOKwF; mEABA: $where["\x74\x79\160\x65"] = 1; goto IVWdV; zOKwF: $i++; goto hwQ2N; hwQ2N: goto jKZ0W; goto Vu0qV; bwtg1: $i = 1; goto hOr2_; maiaX: $pages = max(1, $pages); goto bwtg1; hOr2_: $i = 1; goto P43va; bwNfb: $where["\143\154\x61\163\163\x5f\x69\144"] = $item["\x63\x6c\141\163\x73\x5f\x69\144"]; goto AYTKG; pqdXm: } goto DYOr6; u4jet: $BASE_PATH = SITE_PATH . "\x70\x75\x62\154\x69\143\57\x75\x70\x6c\x6f\141\x64\x2f\x6d\x69\160\137\x70\143\57{$this->bus_id}\x2f"; goto Vwo7P; oGNQF: $all_file["\x70\x72\x6f\x64\165\x63\x74\57\x30\137{$i}\x2e\x68\164\x6d\154"] = url("\x70\157\162\x74\x61\x6c\x2f\x70\x63\57\160\162\x6f\144\x75\143\x74", ["\x75\x6e\151\x61\x63\151\144" => $this->bus_id, "\160\141\x67\145" => $i]); goto EHhfg; QPZo0: foreach ($product_infos as $item) { $all_file["\160\162\157\144\x75\x63\164\57{$item["\x67\x6f\157\144\163\137\x69\x64"]}\56\x68\x74\x6d\154"] = url("\x70\x6f\x72\164\x61\154\57\x70\143\x2f\160\162\x6f\x64\x75\x63\x74\x5f\x69\x6e\x66\x6f", ["\x75\156\x69\141\x63\x69\144" => $this->bus_id, "\x69\144" => $item["\x67\x6f\x6f\x64\x73\137\151\x64"]]); tUdqc: } goto RUt_S; MdK8r: if (is_dir($BASE_PATH)) { goto aMEau; } goto MXtiS; f2HIN: hoUWq: goto Fsnfy; g3VFZ: $where["\155\143\x68\137\151\144"] = $this->bus_id; goto ILjV6; Q3zDL: $where = array(); goto g3VFZ; ZNYD9: if (!(request()->isPost() && request()->isAjax())) { goto FQGId; } goto JnHHg; SfnUw: $all_file = array("\x69\156\144\x65\170\56\150\x74\x6d\154" => url("\160\157\162\x74\141\154\57\160\143\57\151\156\144\x65\170", ["\165\x6e\151\x61\143\x69\x64" => $this->bus_id]), "\x61\x62\x6f\x75\164\56\x68\164\x6d\154" => url("\x70\x6f\x72\x74\141\x6c\x2f\x70\143\x2f\141\x62\157\165\x74", ["\x75\x6e\151\x61\143\x69\x64" => $this->bus_id]), "\x63\157\x6e\164\x61\x63\164\56\150\164\x6d\x6c" => url("\160\157\162\164\141\x6c\57\160\143\57\x63\157\156\164\x61\143\x74", ["\165\156\151\141\143\151\x64" => $this->bus_id])); goto DuvUU; DjIC5: $ZIP_PATH = SITE_PATH . "\160\165\x62\x6c\151\x63\x2f\x75\160\x6c\157\141\x64\57\x6d\x69\x70\137\x70\143\57\x4d\111\x50\137\x50\103\x5f{$this->bus_id}\x2e\x7a\151\160"; goto U1IDx; R9Ea6: $pages = max(1, $pages); goto gLDDP; DGeu8: i9hgB: goto ANtMl; ILjV6: $where["\x69\x73\137\x64\145\x6c"] = 0; goto rJfu3; bEZgL: foreach ($all_file as $k => $v) { goto urhR2; U85C1: file_put_contents($file, $content); goto w21M8; V8hCq: $content = get_url_content($url); goto JK1uJ; JK1uJ: $file = $BASE_PATH . $k; goto YRRDn; YRRDn: $page_url = $host . "\57" . $k; goto GtFfx; urhR2: $url = $BASE_URL . $v; goto V8hCq; Sfsfi: $content = str_replace($replaces[0], $replaces[1], $content); goto U85C1; GtFfx: $content = str_replace("\x5b\43\x50\x41\107\x45\137\125\122\x4c\x23\135", $page_url, $content); goto Sfsfi; w21M8: $zip->addFile($file, $k); goto Mdu0W; Mdu0W: zjJeq: goto sH8cS; sH8cS: } goto mXfTX; rTlYN: $where["\x74\x79\160\145"] = 1; goto MuQ5c; wA7NL: eQNTK: goto AnP0x; Vc3qG: iQboJ: goto SfnUw; ysFr9: delDirAndFile($BASE_PATH); goto gKZ98; i5p_S: $description = empty($info["\144\x65\x73\x63\162\151\160\x74\x69\x6f\156"]) ? '' : $info["\x64\145\163\x63\162\x69\160\164\x69\157\x6e"]; goto ukPdh; AnP0x: if (!($i <= $pages)) { goto quE9f; } goto oGNQF; MuQ5c: $article_infos = Db::name("\171\142\163\x63\137\x61\x72\x74\x69\143\154\145")->where($where)->select(); goto pt3uw; W22R1: $where = array(); goto hs6lG; ANtMl: $zip = new \ZipArchive(); goto rKaJD; U6dK0: foreach ($product_class as $item) { goto y9Aqo; HtedC: $pages = max(1, $pages); goto L0jO0; I9VHY: LFl2q: goto Wglsl; Qad0R: $where["\x69\163\x5f\x64\x65\x6c"] = 0; goto DSLC2; l7rlb: LWljm: goto gcRk1; SfvIK: sXrm_: goto l7rlb; Wglsl: if (!($i <= $pages)) { goto sXrm_; } goto alb6r; A7eo8: goto LFl2q; goto SfvIK; y9Aqo: $where = array(); goto IT_ix; IT_ix: $where["\x6d\143\x68\x5f\151\x64"] = $this->bus_id; goto DUpAS; c2HAN: YvzNw: goto DLSxD; L0jO0: $i = 1; goto fN1t4; alb6r: $all_file["\160\162\x6f\144\x75\143\x74\x2f{$item["\x63\x61\164\145\x5f\x69\x64"]}\x5f{$i}\56\x68\x74\x6d\x6c"] = url("\160\157\x72\x74\141\x6c\57\x70\x63\x2f\160\x72\x6f\x64\165\x63\x74", ["\x75\x6e\x69\141\143\x69\144" => $this->bus_id, "\160\151\144" => $item["\x63\141\x74\145\x5f\151\144"], "\160\x61\x67\145" => $i]); goto c2HAN; DUpAS: $where["\x63\141\x74\145\137\x69\144"] = $item["\143\x61\164\x65\x5f\x69\x64"]; goto Qad0R; DLSxD: $i++; goto A7eo8; DSLC2: $pcount = Db::name("\171\x62\163\143\137\147\x6f\157\x64\x73")->where($where)->count(); goto nzeyI; fN1t4: $i = 1; goto I9VHY; nzeyI: $pages = ceil($pcount / 12); goto HtedC; gcRk1: } goto f2HIN; otxXZ: $where["\x73\164\x61\164\165\163"] = 2; goto rTlYN; gKZ98: ZXpOA: goto MdK8r; VLkuR: } public function mip_h5() { goto GxpPw; vHb9Q: $host = $host[0]; goto d7swg; de6EQ: if (count($host) > 2) { goto kvMKC; } goto NrVkx; BK0Q3: $this->assign("\x75\x72\x6c", $url); goto y_fyV; Iotfh: $url = $http . $host; goto BK0Q3; dccI6: iEltL: goto Iotfh; NrVkx: $host = $pre . implode("\56", $host); goto U1HqG; qpU0B: $host = implode("\x2e", $host); goto dccI6; dvAWJ: $host[0] = $pre; goto qpU0B; GxpPw: $host = explode("\x3a", $_SERVER["\110\x54\124\120\x5f\110\117\x53\x54"]); goto jzWRI; d7swg: $host = explode("\x2e", $host); goto BPtbX; U1HqG: goto iEltL; goto trZ0c; BPtbX: $pre = "\155\x69\160" . $this->alphaID($this->bus_id); goto de6EQ; m6STg: return view(); goto zBuPh; trZ0c: kvMKC: goto dvAWJ; y_fyV: $BASE_PATH = SITE_PATH . "\160\x75\x62\154\x69\x63\57\x75\x70\x6c\157\x61\x64\x2f\155\151\x70\137\150\x35\x2f\115\x49\x50\137\x48\65\x5f{$this->bus_id}\56\172\151\x70"; goto RxHPY; jzWRI: $http = count($host) > 1 ? "\150\x74\164\160\163\72\x2f\57" : "\x68\164\164\160\x3a\57\x2f"; goto vHb9Q; RxHPY: $this->assign("\160\141\x63\x6b\141\x67\x65\x64", file_exists($BASE_PATH)); goto m6STg; zBuPh: } public function mip_h5_build() { goto k0XCP; oXzQ2: $title = empty($info["\164\151\164\154\x65"]) ? '' : $info["\x74\151\164\154\145"]; goto tEgmP; zyQcl: $pages = max(1, $pages); goto Ufbxh; TF1rv: $where["\155\x63\x68\x5f\151\144"] = $this->bus_id; goto KckTB; cDk9t: gE1AF: goto iHU4V; zc2uw: if (!($i <= $pages)) { goto gE1AF; } goto GguG8; Eyfws: $product_class = Db::name("\x79\142\x73\143\137\147\157\157\144\x73\137\x63\x61\x74\145")->where(["\x6d\x63\x68\137\x69\144" => $this->bus_id, "\x69\163\137\166\151\163\151\142\154\145" => 1])->order("\x73\157\162\x74\x20\141\x73\143")->select(); goto SbfiM; xxfl7: $where = array(); goto QLjw2; SbfiM: foreach ($product_class as $item) { goto pf1VC; YSuvW: $where["\151\x73\x5f\144\145\154"] = 0; goto j73Qy; j73Qy: $pcount = Db::name("\171\142\x73\143\137\x67\x6f\157\144\163")->where($where)->count(); goto pD4WR; zdNDG: K0FCD: goto TlY7v; dlLV7: $where["\x63\x61\164\145\x5f\151\144"] = $item["\143\x61\164\145\x5f\x69\144"]; goto YSuvW; DBdp9: $all_file["\160\162\x6f\x64\165\x63\x74\x2f{$item["\x63\141\x74\145\137\151\x64"]}\x5f{$i}\56\x68\x74\155\x6c"] = url("\x70\x6f\162\164\141\x6c\x2f\x69\x6e\144\x65\x78\x2f\x70\x72\x6f\x64\x75\143\164", ["\165\156\151\141\143\x69\144" => $this->bus_id, "\x63\154\x61\x73\163\x5f\x69\144" => $item["\x63\141\x74\145\137\x69\144"], "\160\141\x67\x65" => $i]); goto imjoW; w4w3M: $i = 1; goto F88ib; i8qrR: $where["\155\143\150\137\x69\144"] = $this->bus_id; goto dlLV7; lNoSQ: goto K0FCD; goto L6hlL; imjoW: biYka: goto sXBKA; pD4WR: $pages = ceil($pcount / 20); goto U9Bln; U9Bln: $pages = max(1, $pages); goto w4w3M; dsysf: JYyUw: goto NMPxb; L6hlL: f_oEs: goto dsysf; sXBKA: $i++; goto lNoSQ; F88ib: $i = 1; goto zdNDG; TlY7v: if (!($i <= $pages)) { goto f_oEs; } goto DBdp9; pf1VC: $where = array(); goto i8qrR; NMPxb: } goto ZTpiE; kZ06a: CAZwo: goto zc2uw; HdeKd: goto CAZwo; goto cDk9t; Ufbxh: $i = 1; goto OOBpz; HNlAK: $where["\x69\163\137\x64\x65\x6c"] = 0; goto MBf0E; LpYEh: global $_W; goto Wye1l; xltTc: foreach ($product_infos as $item) { $all_file["\x70\x72\157\144\165\x63\x74\x2f{$item["\147\157\x6f\x64\x73\x5f\x69\x64"]}\56\x68\x74\x6d\x6c"] = url("\160\x6f\x72\164\x61\x6c\x2f\151\156\x64\x65\x78\x2f\160\x72\157\x64\x75\143\164\x5f\x69\156\146\x6f", ["\165\x6e\151\x61\x63\151\x64" => $this->bus_id, "\x69\x64" => $item["\x67\157\157\x64\x73\x5f\x69\144"]]); SlK8t: } goto ocGA8; GguG8: $all_file["\x70\x72\x6f\x64\165\143\x74\57\x30\137{$i}\x2e\150\x74\x6d\154"] = url("\x70\x6f\x72\x74\x61\x6c\x2f\151\156\144\145\x78\57\160\x72\157\x64\x75\143\x74", ["\165\x6e\x69\141\143\x69\144" => $this->bus_id, "\x70\x61\147\x65" => $i]); goto VQr9J; Ew4zZ: $pages = max(1, $pages); goto mxlmY; sVMk3: $description = empty($info["\144\145\163\143\x72\x69\x70\164\151\157\156"]) ? '' : $info["\144\145\x73\x63\162\151\x70\164\x69\x6f\x6e"]; goto fUn84; NNYvg: $i = 1; goto mDvpQ; bANqo: if (!($res !== true)) { goto mntwV; } goto Kx79p; E2gKg: $arrs = [$BASE_PATH . "\160\x72\157\x64\165\x63\x74", $BASE_PATH . "\141\x72\x74\x69\x63\154\145", $BASE_PATH . "\160\150\157\164\157"]; goto KdFtx; ze3dV: $BASE_PATH = SITE_PATH . "\160\x75\142\x6c\151\143\x2f\165\160\154\x6f\x61\144\57\155\151\x70\137\x68\65\57{$this->bus_id}\57"; goto ASBv0; ZQmQX: unlink($ZIP_PATH); goto R9efl; tEgmP: $keywords = empty($info["\153\145\171\167\157\x72\x64\163"]) ? '' : $info["\153\x65\x79\x77\157\x72\144\163"]; goto sVMk3; R9efl: zUqmE: goto U67IF; LnDks: if (!($i <= $pages)) { goto CSpx_; } goto cVIum; jlLqv: $where["\155\x63\x68\137\151\x64"] = $this->bus_id; goto qR2gw; KckTB: $pcount = Db::name("\x79\142\163\143\x5f\151\x6d\x61\147\145\163\137\147\162\x6f\165\x70")->where($where)->count(); goto sP4sj; PCErK: $i = 1; goto ebA85; n0Hbg: $where = array(); goto bEhgQ; U67IF: $zip = new \ZipArchive(); goto ajmZx; hIeZu: $zip->close(); goto Dna7p; tGWVl: goto blLBp; goto GL0dy; smjgd: mkdir($BASE_PATH, 0755, true); goto uwj0F; mxlmY: $i = 1; goto NNYvg; Dna7p: return AjaxReturn(1); goto En0y2; KekVK: $where["\164\171\x70\x65"] = 1; goto XBese; fK1IV: HqvGX: goto W4PUI; ebA85: $i = 1; goto kZ06a; w07mu: w__m6: goto Dcuhj; IaWLr: if (is_dir($BASE_PATH)) { goto OL3mx; } goto smjgd; oGjc3: $ZIP_PATH = SITE_PATH . "\x70\x75\x62\154\151\143\x2f\x75\x70\154\157\x61\x64\57\x6d\x69\160\137\150\x35\x2f\x4d\x49\x50\137\x48\x35\x5f{$this->bus_id}\56\x7a\151\x70"; goto PcILK; EUk1i: UWnUH: goto OeMiV; ZWsCE: btt8U: goto gabkr; zKMBG: F5ArM: goto cMS2r; srwt2: $where = array(); goto dTFzu; OeMiV: $i++; goto RTjOc; IV0Uj: blLBp: goto LnDks; k4CYB: foreach ($image_class as $item) { goto Ifc0j; Ifc0j: $where = array(); goto Ns_Y1; sP1BC: $all_file["\x70\150\x6f\x74\157\x2f{$item["\x67\x72\x6f\x75\160\137\151\x64"]}\137{$i}\x2e\150\164\x6d\154"] = url("\x70\x6f\162\x74\141\x6c\x2f\x69\156\x64\145\x78\x2f\x69\155\141\x67\145", ["\x75\x6e\151\141\x63\x69\x64" => $this->bus_id, "\x69\144" => $item["\x67\162\x6f\x75\x70\137\151\144"], "\x70\141\147\145" => $i]); goto iAL8P; s5xS9: B8w09: goto zKlRR; gDmf8: goto B8w09; goto Bq5Nx; zKlRR: if (!($i <= $pages)) { goto oN7VV; } goto sP1BC; p7PuU: $pcount = Db::name("\171\142\163\143\x5f\151\155\x61\147\x65\163")->where($where)->count(); goto ZznQe; byiCT: pHUCQ: goto xfFyJ; ZznQe: $pages = ceil($pcount / 20); goto qViDX; anbIq: $i = 1; goto s5xS9; Ns_Y1: $where["\147\x72\157\x75\x70\x5f\151\144"] = $item["\x67\x72\157\x75\160\x5f\151\x64"]; goto p7PuU; iAL8P: G9x8D: goto Nlp5t; Bq5Nx: oN7VV: goto byiCT; Nlp5t: $i++; goto gDmf8; e0liK: $i = 1; goto anbIq; qViDX: $pages = max(1, $pages); goto e0liK; xfFyJ: } goto z75G4; ASBv0: if (!is_dir($BASE_PATH)) { goto octlz; } goto RjjQo; SFcNi: $product_infos = Db::name("\171\142\x73\x63\137\147\x6f\157\144\163")->where($where)->select(); goto xltTc; Px6q3: $host = rtrim($_POST["\150\x6f\x73\x74"], "\57"); goto Dx1y3; VltKv: foreach ($article_class as $item) { goto wGXyj; UXMgT: $pages = max(1, $pages); goto B0kg4; gBDcd: $where["\164\171\160\145"] = 1; goto iuhIS; nN8CQ: FfcIj: goto ZchXm; GoqPn: goto OpuAD; goto HR0IV; wGXyj: $where = array(); goto e0pGj; V1s7p: if (!($i <= $pages)) { goto APFKG; } goto Y_YHC; iuhIS: $pcount = Db::name("\171\142\163\x63\137\141\x72\x74\x69\x63\x6c\145")->where($where)->count(); goto n0Ora; e0pGj: $where["\x6d\x63\x68\x5f\x69\x64"] = $this->bus_id; goto Jj8lD; vI2hx: PgCYT: goto tYnVH; n0Ora: $pages = ceil($pcount / 20); goto UXMgT; tYnVH: $i++; goto GoqPn; wOiRx: OpuAD: goto V1s7p; Y_YHC: $all_file["\141\162\x74\x69\143\x6c\x65\57{$item["\x63\154\x61\163\x73\x5f\x69\x64"]}\137{$i}\x2e\x68\164\155\x6c"] = url("\x70\157\x72\164\141\154\x2f\151\156\144\145\170\57\141\162\164\x69\143\154\145\x5f\x6c\x69\163\164", ["\165\x6e\x69\x61\x63\151\144" => $this->bus_id, "\x63\154\x61\163\x73\137\x69\144" => $item["\x63\154\141\163\163\137\x69\x64"], "\160\141\x67\x65" => $i]); goto vI2hx; HR0IV: APFKG: goto nN8CQ; C79PS: $i = 1; goto wOiRx; B0kg4: $i = 1; goto C79PS; Jj8lD: $where["\x63\154\x61\163\x73\137\x69\x64"] = $item["\143\x6c\x61\163\x73\x5f\151\x64"]; goto DdJkM; DdJkM: $where["\x73\164\x61\x74\x75\163"] = 2; goto gBDcd; ZchXm: } goto xDmgf; Kx79p: return AjaxReturn(0); goto leyzO; fUn84: $replaces = [["\133\43\124\151\x74\154\x65\x23\135", "\x5b\43\113\x65\x79\x77\x6f\162\x64\163\43\x5d", "\x5b\43\x44\x65\163\x63\162\x69\160\x74\151\157\x6e\43\135"], [$title, $keywords, $description]]; goto LpYEh; VYaWn: foreach ($article_infos as $item) { $all_file["\141\x72\x74\x69\x63\154\x65\x2f{$item["\141\x72\164\x69\143\x6c\145\x5f\151\x64"]}\x2e\150\164\x6d\154"] = url("\160\157\162\164\x61\x6c\x2f\151\x6e\144\145\x78\57\x61\162\x74\x69\x63\x6c\x65\x5f\151\x6e\146\157", ["\165\x6e\x69\x61\143\151\x64" => $this->bus_id, "\x69\144" => $item["\141\x72\164\151\143\154\145\x5f\x69\144"]]); RasQ7: } goto ZWsCE; yTSNb: if (!($i <= $pages)) { goto HqvGX; } goto hJtzl; qR2gw: $where["\163\x74\x61\x74\165\163"] = 2; goto cMwHy; cMS2r: $i++; goto tGWVl; k0XCP: if (!(request()->isPost() && request()->isAjax())) { goto fsn78; } goto Px6q3; MBf0E: $pcount = Db::name("\x79\142\163\143\137\147\157\x6f\x64\163")->where($where)->count(); goto eumTo; cVIum: $all_file["\x61\162\164\x69\143\154\x65\x2f\x30\137{$i}\56\150\164\x6d\154"] = url("\x70\157\162\x74\141\x6c\x2f\151\156\x64\x65\170\57\141\x72\164\x69\143\154\145\137\154\x69\163\164", ["\165\156\151\x61\x63\x69\144" => $this->bus_id, "\160\141\147\145" => $i]); goto zKMBG; Dcuhj: $all_file = array("\151\156\x64\145\x78\56\150\164\155\154" => url("\160\157\162\164\141\154\x2f\x69\x6e\x64\145\x78\57\x69\156\144\145\170", ["\x75\x6e\151\x61\x63\151\144" => $this->bus_id])); goto Eyfws; RjjQo: delDirAndFile($BASE_PATH); goto MBnOM; uwj0F: OL3mx: goto E2gKg; z75G4: fQ1hy: goto oGjc3; ZTpiE: zVINA: goto n0Hbg; sP4sj: $pages = ceil($pcount / 20); goto Ew4zZ; iHU4V: $article_class = Db::name("\x79\142\x73\x63\x5f\141\x72\x74\151\143\x6c\145\137\143\x6c\x61\x73\x73")->where(["\155\143\x68\x5f\x69\144" => $this->bus_id, "\x69\x73\137\144\145\154" => 1, "\x6c\145\x76\x65\154" => 1])->order("\163\x6f\x72\x74\40\x61\x73\143")->select(); goto VltKv; xDmgf: LaAq_: goto ASEsZ; hJtzl: $all_file["\160\150\x6f\x74\x6f\x2f{$i}\x2e\x68\x74\155\154"] = url("\x70\x6f\x72\164\141\154\x2f\x69\x6e\144\x65\170\x2f\x63\154\141\x73\163\137\x69\x6d\141\x67\x65", ["\x75\156\151\141\x63\x69\x64" => $this->bus_id, "\x70\141\147\x65" => $i]); goto EUk1i; KdFtx: foreach ($arrs as $pps) { goto w6OJJ; b8JNW: mkdir($pps, 0755, true); goto KAGJ0; KAGJ0: gRSk1: goto G2aHu; w6OJJ: if (is_dir($pps)) { goto gRSk1; } goto b8JNW; G2aHu: THcR0: goto J7TZl; J7TZl: } goto w07mu; XBese: $article_infos = Db::name("\x79\x62\163\x63\137\x61\x72\x74\151\143\154\x65")->where($where)->select(); goto VYaWn; AG7M4: $pages = max(1, $pages); goto PCErK; mDvpQ: ggSbI: goto yTSNb; GL0dy: CSpx_: goto xxfl7; RTjOc: goto ggSbI; goto fK1IV; JQEYV: $i++; goto HdeKd; MBnOM: octlz: goto IaWLr; gabkr: $where = array(); goto TF1rv; dsk2j: $pcount = Db::name("\171\142\163\143\137\141\x72\164\151\143\154\145")->where($where)->count(); goto qr361; ajmZx: $res = $zip->open($ZIP_PATH, \ZIPARCHIVE::CREATE); goto bANqo; p0V01: $where["\x69\x73\137\144\145\x6c"] = 0; goto SFcNi; VQr9J: yL0Rr: goto JQEYV; TuVTf: $where["\163\164\141\x74\x75\x73"] = 2; goto KekVK; ocGA8: acgSf: goto srwt2; EKdIe: foreach ($all_file as $k => $v) { goto lCkyE; lCkyE: $url = $BASE_URL . $v; goto jC65S; lSnjE: file_put_contents($file, $content); goto NVj24; fWz70: SuC9k: goto IubMF; harHt: $content = str_replace("\133\x23\120\101\x47\105\x5f\125\122\114\x23\x5d", $page_url, $content); goto Ix9Z0; NVj24: $zip->addFile($file, $k); goto fWz70; Ix9Z0: $content = str_replace($replaces[0], $replaces[1], $content); goto lSnjE; l2SwP: $page_url = $host . "\x2f" . $k; goto harHt; jC65S: $content = get_url_content($url); goto jJqJv; jJqJv: $file = $BASE_PATH . $k; goto l2SwP; IubMF: } goto UaFIw; UaFIw: Vw47G: goto hIeZu; QLjw2: $where["\155\x63\x68\x5f\x69\144"] = $this->bus_id; goto p0V01; cMwHy: $where["\x74\171\x70\145"] = 1; goto dsk2j; PcILK: if (!file_exists($ZIP_PATH)) { goto zUqmE; } goto ZQmQX; qr361: $pages = ceil($pcount / 20); goto zyQcl; En0y2: fsn78: goto P5f19; Dx1y3: $info = Db::name("\x79\142\163\143\137\163\145\x6f")->where(["\x6d\143\x68\137\x69\144" => $this->bus_id, "\164\171\x70\x65" => 1])->find(); goto oXzQ2; Wye1l: $BASE_URL = $_W["\x73\x69\x74\x65\x72\x6f\157\164"] . "\x61\x64\x64\x6f\156\x73\57\x79\142\137\x73\x68\157\160\57\x63\x6f\x72\x65\x2f"; goto ze3dV; OOBpz: $i = 1; goto IV0Uj; W4PUI: $image_class = Db::name("\171\142\163\x63\137\x69\x6d\141\x67\145\163\x5f\147\162\x6f\165\160")->where(["\x6d\143\150\x5f\151\144" => $this->bus_id])->order("\147\x72\x6f\165\x70\137\151\x64\40\144\145\163\143")->select(); goto k4CYB; ASEsZ: $where = array(); goto jlLqv; dTFzu: $where["\x6d\143\150\x5f\x69\x64"] = $this->bus_id; goto TuVTf; eumTo: $pages = ceil($pcount / 20); goto AG7M4; leyzO: mntwV: goto EKdIe; bEhgQ: $where["\155\143\150\x5f\x69\144"] = $this->bus_id; goto HNlAK; P5f19: } public function alphaID($in, $to_num = false, $pad_up = false, $passKey = null) { goto OkPG8; oWcTk: goto GJUgX; goto NNXC7; dRhnO: $passhash = hash("\163\150\x61\x32\x35\x36", $passKey); goto VOjdn; FvdtD: $a = floor($in / $bcp) % $base; goto orkQM; cU7_f: iJFsK: goto mOtzX; ALcOP: goto lWpIe; goto Rzprl; hWyY9: $out = sprintf("\45\106", $out); goto lzx5O; NNXC7: UT42U: goto IxCDu; deWDE: lkPUy: goto EeqUE; R_k3_: return $out; goto uZ5Qy; lc3wE: $bcp = bcpow($base, $t); goto FvdtD; mOtzX: ALP5w: goto hWyY9; aXohB: bqYe6: goto NZZk9; TYm9j: if (!($pad_up > 0)) { goto iJFsK; } goto Twulx; WB2NO: $n++; goto oWcTk; VOjdn: $passhash = strlen($passhash) < strlen($index) ? hash("\163\150\x61\65\x31\x32", $passKey) : $passhash; goto mLGxB; Rzprl: LkM1Y: goto fMW0a; jbCfc: VOw9W: goto MwJkZ; miWYq: $n = 0; goto hD7HK; EeqUE: $t++; goto xIsBC; VR5_F: $p[] = substr($passhash, $n, 1); goto A3Oip; xIsBC: goto DoD8m; goto aXohB; lzx5O: $out = substr($out, 0, strpos($out, "\56")); goto H8TLC; W_EtK: GfHW1: goto n7CPP; IxCDu: array_multisort($p, SORT_DESC, $i); goto UmlJ4; mAXyD: if (!($t >= 0)) { goto LkM1Y; } goto lc3wE; oQcAF: if (!($passKey !== null)) { goto xky06; } goto miWYq; dHvEB: ULwYm: goto dRhnO; aV8MO: if (!($n < strlen($index))) { goto UT42U; } goto VR5_F; A2DJY: $out = 0; goto bLpyb; nfPHL: $pad_up--; goto TYm9j; Bumeb: MXjEk: goto y5ido; orkQM: $out = $out . substr($index, $a, 1); goto CzPXE; A3Oip: CC0bq: goto WB2NO; yLtBE: xky06: goto FCF1B; SH9V2: $i[] = substr($index, $n, 1); goto Bumeb; UmlJ4: $index = implode($i); goto yLtBE; m_CE2: if (!($pad_up > 0)) { goto MSV13; } goto YgOV4; MwJkZ: $t--; goto ALcOP; beuNp: $pad_up--; goto m_CE2; BDdCn: DoD8m: goto sbTBh; NZZk9: if (!is_numeric($pad_up)) { goto ALP5w; } goto nfPHL; daHv6: $out = $out + strpos($index, substr($in, $t, 1)) * $bcpow; goto deWDE; hzvLn: $t = 0; goto BDdCn; OkPG8: $index = "\141\142\143\144\x65\146\147\x68\151\x6a\x6b\x6c\155\x6e\157\x70\x71\x72\x73\164\x75\166\167\170\171\x7a"; goto oQcAF; bG1Dl: if (!($n < strlen($index))) { goto ULwYm; } goto SH9V2; hD7HK: oaceV: goto bG1Dl; fMW0a: $out = strrev($out); goto cHj3Q; byyMh: GJUgX: goto aV8MO; n7CPP: $in = strrev($in); goto A2DJY; cHj3Q: goto JaOvM; goto W_EtK; H8TLC: JaOvM: goto R_k3_; UKmNm: lWpIe: goto mAXyD; y5ido: $n++; goto do6U4; mLGxB: $n = 0; goto byyMh; Twulx: $out -= pow($base, $pad_up); goto cU7_f; ewNhM: MSV13: goto pirBO; BZIT3: if ($to_num) { goto GfHW1; } goto tuXBZ; vz9lT: $bcpow = bcpow($base, $len - $t); goto daHv6; tuXBZ: if (!is_numeric($pad_up)) { goto nwknk; } goto beuNp; pirBO: nwknk: goto S9eJP; sbTBh: if (!($t <= $len)) { goto bqYe6; } goto vz9lT; S9eJP: $out = ''; goto C8hup; CzPXE: $in = $in - $a * $bcp; goto jbCfc; C8hup: $t = floor(log($in, $base)); goto UKmNm; do6U4: goto oaceV; goto dHvEB; FCF1B: $base = strlen($index); goto BZIT3; bLpyb: $len = strlen($in) - 1; goto hzvLn; YgOV4: $in += pow($base, $pad_up); goto ewNhM; uZ5Qy: } }
