<?php
 namespace app\portal\controller; use think\Controller; use think\Db; use think\Request; class Pc extends Controller { protected $mch_id = ''; public function __construct() { goto pEJ00; Js43Y: $this->assign("\x61\x72\164\151\x63\154\x65\137\x6c\151\163\164", $article_list); goto xUSHw; TLBUH: $this->assign("\x6d\x63\x68\x73", $mchs); goto KN8oq; N4_nR: $this->assign("\x61\x72\x74\x69\x63\154\x65\137\x63\154\141\x73\x73\145\163", $article_classes); goto J9wTf; pEJ00: parent::__construct(); goto BpUps; DN8ha: $this->mch_id = Request::instance()->param("\165\156\151\141\143\x69\144"); goto xyzsJ; xyzsJ: $m = Db::name("\x79\x62\163\x63\137\x75\163\145\162\137\x74\155\160\154")->where("\155\x63\x68\x5f\x69\x64\75" . $this->mch_id)->find(); goto sJsPa; BpUps: global $_W; goto DN8ha; J8H_w: $article_classes = Db::name("\171\x62\x73\x63\137\x61\x72\x74\151\143\154\145\x5f\143\x6c\141\x73\x73")->where(["\x6d\x63\x68\x5f\x69\x64" => $this->mch_id, "\151\x73\137\144\145\154" => 1, "\154\145\166\x65\154" => 1])->order("\163\157\162\x74\40\x61\x73\143")->limit(4)->select(); goto N4_nR; zmOBZ: $mchs = Db::name("\x79\x62\163\x63\x5f\142\x75\163\x69\156\x65\163\x73\137\141\x62\157\165\164")->where(["\x6d\x63\x68\137\151\144" => $this->mch_id])->find(); goto mKSsa; mBVVJ: $this->assign("\x6c\151\163\x74", $rs); goto zmOBZ; KN8oq: $article_list = Db::name("\x79\x62\163\143\x5f\141\162\x74\x69\x63\154\x65")->where(["\x6d\x63\x68\x5f\x69\144" => $this->mch_id, "\x74\x79\160\x65" => "\x31", "\x73\164\141\164\x75\x73" => 2])->order("\151\x73\137\162\145\x63\x6f\x6d\155\x65\156\x64\40\x64\145\163\x63\54\x61\162\x74\151\x63\154\x65\137\x69\144\40\144\x65\163\143")->limit(6)->select(); goto Js43Y; xUSHw: $this->assign("\163\151\164\145\x5f\x75\x72\154", $_W["\163\151\x74\x65\162\x6f\x6f\164"]); goto J8H_w; mKSsa: $mchs["\163\151\x74\x65\x5f\x6e\141\x6d\145"] = $_W["\x75\156\x69\141\x63\143\157\x75\x6e\164"]["\x6e\141\x6d\x65"]; goto TLBUH; sJsPa: $rs = json_decode($m["\151\x6e\144\x65\170\137\166\141\154\165\x65\x73"], true); goto mBVVJ; J9wTf: } public function index() { goto KIsT_; S3MvS: $product_list = Db::name("\x79\x62\163\x63\x5f\147\157\x6f\x64\x73")->alias("\x67")->join("\x79\142\x73\143\x5f\151\155\141\x67\145\x73\40\x69", "\x67\56\x69\x6d\x61\147\x65\163\40\75\x20\x69\56\x69\x6d\x67\x5f\x69\144", "\114\105\x46\x54")->where(["\147\56\x6d\143\150\x5f\151\x64" => $this->mch_id, "\x67\56\151\x73\x5f\144\145\154" => 0])->order("\163\157\x72\164\40\x61\163\143")->field("\x67\x2e\x67\157\157\144\x73\x5f\151\144\x20\141\163\40\151\x64\54\147\56\147\x6f\x6f\144\x73\137\156\141\x6d\145\x20\141\163\40\164\x69\164\x6c\x65\x2c\147\56\143\x61\x74\145\x5f\x69\144\x20\141\163\x20\143\x6c\x61\163\x73\137\x69\x64\x2c\147\56\x64\145\163\x63\162\x69\x70\164\x69\x6f\x6e\40\x61\x73\40\143\x6f\156\164\x65\156\x74\54\x69\x2e\151\x6d\x67\x5f\x63\157\x76\145\x72\x20\x61\163\x20\151\155\x61\x67\x65")->limit(6)->select(); goto oPT7b; oPT7b: $this->assign("\x70\x72\157\144\165\x63\x74\137\x6c\151\163\164", $product_list); goto YvfiJ; aVn_r: $this->assign("\141\162\164\151\143\154\145\x5f\143\154\x61\x73\x73", $article_class); goto ILP_W; edH2O: foreach ($article_class as &$item) { goto yw3og; SrEhZ: $item["\154\151\x73\x74"] = $list; goto BBgaM; BBgaM: Nnm0r: goto lYSaF; yw3og: $list = Db::name("\x79\142\x73\x63\137\141\x72\164\x69\x63\154\145")->where(["\155\143\150\x5f\151\144" => $this->mch_id, "\164\x79\160\x65" => "\x31", "\x73\x74\141\164\x75\163" => 2, "\x63\x6c\x61\x73\x73\x5f\151\144" => $item["\143\x6c\x61\163\163\x5f\151\144"]])->order("\151\x73\x5f\x72\145\143\x6f\x6d\x6d\145\156\144\40\144\x65\163\143\54\141\x72\164\x69\x63\154\x65\x5f\151\144\x20\x64\x65\x73\x63")->limit(6)->select(); goto SrEhZ; lYSaF: } goto ABw5G; ILP_W: return $this->fetch("\x6d\x69\x70\x5f\x70\143\x2f\x69\156\144\145\x78"); goto UHaUD; ABw5G: vYOJ5: goto aVn_r; YvfiJ: $article_class = Db::name("\x79\142\163\x63\x5f\141\x72\x74\151\143\x6c\x65\137\143\x6c\x61\x73\x73")->where(["\x6d\x63\150\137\151\144" => $this->mch_id, "\x69\163\x5f\144\x65\154" => 1, "\154\x65\x76\x65\154" => 1])->order("\x73\157\x72\164\x20\141\163\143")->limit(3)->select(); goto edH2O; IXJSo: $this->assign("\x70\162\157\x64\165\x63\x74\x5f\x63\154\x61\x73\x73", $product_class); goto S3MvS; KIsT_: $product_class = Db::name("\171\x62\163\x63\x5f\147\x6f\157\144\163\137\143\141\x74\x65")->where(["\x6d\x63\x68\x5f\151\x64" => $this->mch_id, "\151\x73\137\166\x69\163\x69\x62\154\145" => 1, "\x6c\x65\x76\x65\x6c" => 1])->order("\x73\x6f\x72\164\x20\x61\163\x63")->field("\143\141\x74\x65\137\151\x64\40\x61\163\40\151\x64\x2c\143\x61\164\x65\x5f\156\141\x6d\145\x20\141\163\x20\x6e\x61\x6d\x65")->limit(4)->select(); goto IXJSo; UHaUD: } public function about() { goto m5xX6; vc7Xl: preg_match_all("\x2f\x28\x3c\x69\x6d\x67\x20\51\50\133\134\x73\x5c\x53\x5d\x2a\x3f\x29\x28\40\134\x2f\x3e\x29\57", $desc, $matche); goto UsBWk; Irf6A: $this->assign("\144\x65\x73\143", $desc); goto jxQFy; ve_2c: $desc = $mchs["\144\145\x73\143"]; goto jgopY; cJgvN: return $this->fetch("\x6d\x69\x70\137\160\143\x2f\x61\142\157\x75\x74"); goto uzXsC; N8Nj_: $desc = str_replace($all_img, $mip_img, $desc); goto Irf6A; TCtbM: mRLp8: goto N8Nj_; m5xX6: $mchs = Db::name("\x79\x62\x73\143\x5f\142\x75\163\x69\x6e\x65\163\x73\x5f\x61\142\x6f\x75\x74")->where(["\x6d\143\x68\x5f\x69\144" => $this->mch_id])->find(); goto ve_2c; Zq5fv: $mip_img = array(); goto CKudH; jxQFy: $this->assign("\141\143\x74", "\x61\142\157\165\x74"); goto cJgvN; jgopY: $desc = preg_replace("\x2f\163\164\171\154\x65\75\42\56\52\77\42\x2f\x69", '', $desc); goto vc7Xl; UsBWk: $all_img = $matche[0]; goto Zq5fv; CKudH: foreach ($all_img as $img) { goto Qt3hu; mUygt: $mip_img[] = "\74\x6d\x69\160\55\x69\x6d\147\40\143\154\141\163\163\75\x22\143\157\156\164\145\x6e\x74\137\x69\155\x67\42\x20\163\162\x63\75\x22{$src}\x22\x3e\x3c\x2f\155\x69\x70\x2d\x69\x6d\147\x3e"; goto utEm8; utEm8: nVuok: goto fEorD; Qt3hu: $matche = array(); goto ykS75; C4l0C: $src = $matche[2][0]; goto mUygt; ykS75: preg_match_all("\57\50\163\x72\x63\x3d\42\51\50\x5b\x5c\x73\134\123\135\x2a\x3f\x29\50\x22\x29\x2f", $img, $matche); goto C4l0C; fEorD: } goto TCtbM; uzXsC: } public function contact() { goto GrhU3; MD0OI: $this->assign("\x61\x63\x74", "\x63\157\156\164\141\x63\x74"); goto OXq8J; LmKsJ: $desc = $mchs["\144\x65\x73\143"]; goto SWbjd; cZO9l: $all_img = $matche[0]; goto etKun; ybkVJ: $this->assign("\x64\x65\163\x63", $desc); goto MD0OI; sD7vf: preg_match_all("\x2f\x28\74\151\x6d\x67\40\51\x28\x5b\x5c\163\134\123\x5d\x2a\77\x29\50\x20\134\57\x3e\x29\57", $desc, $matche); goto cZO9l; SWbjd: $desc = preg_replace("\57\163\x74\x79\154\x65\x3d\42\x2e\x2a\77\42\57\x69", '', $desc); goto sD7vf; GrhU3: $mchs = Db::name("\x79\x62\x73\143\x5f\x62\165\x73\151\x6e\145\x73\163\x5f\141\142\157\x75\x74")->where(["\155\143\x68\x5f\x69\x64" => $this->mch_id])->find(); goto LmKsJ; WTrsb: foreach ($all_img as $img) { goto EVx5s; DMkvV: $src = $matche[2][0]; goto Om6qE; B1Mry: LQY5t: goto mnN4I; EVx5s: $matche = array(); goto Rd1Pv; Om6qE: $mip_img[] = "\x3c\155\x69\160\x2d\151\155\147\40\143\x6c\141\x73\163\x3d\x22\x63\157\x6e\164\145\156\x74\137\151\155\x67\42\x20\x73\162\143\x3d\42{$src}\x22\x3e\x3c\57\155\151\x70\x2d\x69\155\x67\76"; goto B1Mry; Rd1Pv: preg_match_all("\x2f\x28\x73\162\143\x3d\x22\x29\x28\133\x5c\163\134\x53\135\52\77\51\50\42\51\x2f", $img, $matche); goto DMkvV; mnN4I: } goto m9xov; m9xov: H2UJ0: goto fyOGD; OXq8J: return $this->fetch("\155\151\160\x5f\x70\x63\57\x63\157\x6e\164\x61\143\x74"); goto ywE9W; etKun: $mip_img = array(); goto WTrsb; fyOGD: $desc = str_replace($all_img, $mip_img, $desc); goto ybkVJ; ywE9W: } public function product() { goto PnTV4; rv6kU: $this->assign("\x70\x72\x6f\x64\165\x63\164\x5f\154\151\x73\164", $product_list); goto FVtiB; RT809: preg_match_all("\57\x28\150\162\145\146\x3d\x22\134\57\141\144\x64\x6f\156\163\134\57\x79\x62\x5f\163\x68\x6f\x70\134\x2f\143\157\x72\145\134\57\151\x6e\144\145\170\x2e\x70\x68\x70\x5c\77\160\x61\147\145\x3d\51\50\133\134\x73\x5c\123\x5d\x2a\x3f\x29\50\x22\x3e\51\57", $page, $matche); goto yZKko; pMj1B: return $this->fetch("\x6d\x69\x70\x5f\x70\143\57\x70\x72\x6f\x64\165\x63\x74"); goto uTTg9; M2X0C: $product_list = Db::name("\171\142\x73\x63\137\147\157\x6f\144\163")->alias("\x67")->join("\x79\x62\x73\x63\137\151\155\141\x67\x65\x73\40\x69", "\147\56\151\x6d\x61\x67\x65\x73\x20\x3d\x20\151\x2e\151\x6d\147\x5f\151\144", "\114\105\x46\x54")->where($where)->order("\x67\56\x73\157\x72\164\x20\144\145\x73\143\54\147\56\x67\157\x6f\144\x73\x5f\151\x64\40\x64\145\x73\143")->field("\x67\x2e\147\157\157\144\x73\x5f\151\x64\x20\x61\x73\x20\151\x64\54\147\x2e\x67\x6f\157\x64\163\137\156\141\155\x65\x20\141\163\x20\164\x69\164\154\x65\54\x67\56\x63\x61\x74\x65\137\151\x64\x20\141\x73\x20\x63\x6c\x61\163\163\137\x69\144\x2c\x67\x2e\x64\x65\x73\143\162\151\160\x74\151\x6f\156\40\x61\163\x20\143\157\156\164\x65\156\x74\54\x69\56\151\155\147\137\143\x6f\166\x65\x72\40\141\x73\x20\151\x6d\141\147\x65")->paginate(12); goto rv6kU; zSGFA: $this->assign("\160\x61\147\145", $page); goto YZ56N; HwEUB: m6ByM: goto glT23; glT23: $page = str_replace($all_link, $new_link, $page); goto zSGFA; PnTV4: $pid = Request::instance()->param("\160\151\144", 0); goto HZ7Qd; qQCQp: foreach ($all_page as $p) { $new_link[] = "\150\x72\145\x66\x3d\42\57\160\162\157\144\x75\x63\x74\x2f{$pid}\x5f{$p}\x2e\150\164\155\x6c\42\76"; fyLcb: } goto HwEUB; KcCAD: $where["\x67\56\151\x73\x5f\144\145\x6c"] = 0; goto ZeTZz; wi3mD: $page = preg_replace("\x2f\x73\x74\x79\x6c\145\75\x22\x2e\x2a\x3f\42\57\x69", '', $page); goto Tiryf; EtWhf: $where["\x67\56\155\143\x68\137\151\x64"] = $this->mch_id; goto KcCAD; CxqBH: $this->assign("\x70\x72\157\x64\165\x63\x74\x5f\143\154\x61\x73\163", $product_class); goto EtWhf; FVtiB: $page = $product_list->render(); goto wi3mD; yZKko: $all_link = $matche[0]; goto D1d2O; Tiryf: $page = str_replace("\x6a\x61\x76\x61\x73\143\x72\151\160\164\72\73", '', $page); goto RT809; ZeTZz: if (empty($pid)) { goto y_K5B; } goto wNteW; D1d2O: $all_page = $matche[2]; goto vFWDB; HZ7Qd: $product_class = Db::name("\x79\142\x73\143\x5f\147\x6f\x6f\144\x73\x5f\x63\x61\x74\x65")->where(["\155\143\150\x5f\151\x64" => $this->mch_id, "\151\x73\137\166\151\163\151\x62\154\145" => 1, "\154\145\166\145\154" => 1])->field("\143\x61\164\145\137\151\x64\x20\x61\163\40\151\x64\54\x63\x61\x74\x65\x5f\x6e\x61\x6d\145\40\141\163\x20\x6e\141\155\x65")->order("\163\157\x72\164\x20\141\163\143")->select(); goto CxqBH; vFWDB: $new_link = array(); goto qQCQp; YZ56N: $this->assign("\x61\x63\x74", "\160\x72\x6f\x64\x75\x63\164"); goto pMj1B; T5Cyv: y_K5B: goto M2X0C; wNteW: $where["\147\56\143\x61\164\x65\137\x69\x64"] = ["\x69\x6e", self::Infiniteproduct($pid, $this->mch_id)]; goto T5Cyv; uTTg9: } public function article() { goto coyui; MrBMG: $article_class = Db::name("\171\142\x73\x63\x5f\141\162\x74\x69\143\x6c\145\137\143\154\x61\163\x73")->where(["\x6d\143\x68\x5f\x69\x64" => $this->mch_id, "\x69\x73\x5f\x64\145\154" => 1, "\154\145\166\145\154" => 1])->order("\x73\157\x72\164\40\141\x73\143")->select(); goto C6KwJ; acqVQ: $where["\x63\x6c\x61\163\163\137\x69\x64"] = $class_id; goto GShPn; SOA1F: return $this->fetch("\155\x69\x70\137\x70\x63\x2f\141\162\x74\x69\143\154\145"); goto JUqkg; U5dTw: $all_link = $matche[0]; goto GgkQ7; GgkQ7: $all_page = $matche[2]; goto RfT1g; C6KwJ: $this->assign("\141\162\x74\151\x63\x6c\145\137\143\154\141\x73\x73", $article_class); goto qIKNA; Y7q33: $this->assign("\x61\143\164", "\x61\x72\164\x69\x63\x6c\x65"); goto SOA1F; RT8Fd: $article_list = Db::name("\x79\142\x73\x63\137\141\162\164\151\143\x6c\x65")->where($where)->order("\x73\x6f\162\164\40\x61\x73\x63")->paginate(12); goto AhRWb; GShPn: $where["\x73\x74\141\164\x75\x73"] = 2; goto RT8Fd; qIKNA: $where["\155\x63\x68\137\x69\x64"] = $this->mch_id; goto wpRXl; s3Yll: $page = preg_replace("\x2f\x73\164\x79\154\x65\75\42\x2e\x2a\77\x22\x2f\151", '', $page); goto f8F0E; GDHGP: preg_match_all("\x2f\x28\150\x72\x65\146\x3d\x22\134\57\x61\144\144\x6f\x6e\x73\134\x2f\171\142\x5f\163\150\x6f\x70\134\x2f\x63\157\162\145\134\x2f\151\x6e\x64\145\x78\56\160\x68\x70\134\77\x70\141\x67\145\x3d\51\x28\x5b\x5c\x73\134\x53\x5d\52\x3f\51\x28\x22\76\x29\x2f", $page, $matche); goto U5dTw; Uvm27: $this->assign("\160\141\x67\145", $page); goto Y7q33; FiyIu: $this->assign("\x61\162\164\x69\x63\154\145\x5f\143\x6c\x61\163\163\137\x69\x64", $class_id); goto MrBMG; wpRXl: $where["\164\171\x70\x65"] = 1; goto acqVQ; coyui: $class_id = Request::instance()->param("\143\154\x61\163\163\137\151\144", 0); goto FiyIu; AhRWb: $this->assign("\x6c\151\163\164\x73", $article_list); goto dadBE; KL8Rm: $page = str_replace($all_link, $new_link, $page); goto Uvm27; Y3K2J: xarLh: goto KL8Rm; f8F0E: $page = str_replace("\152\141\166\x61\163\x63\162\x69\x70\164\72\x3b", '', $page); goto GDHGP; u3Xgw: foreach ($all_page as $p) { $new_link[] = "\x68\x72\x65\x66\75\x22\x2f\x61\162\x74\x69\143\154\145\x2f{$class_id}\x5f{$p}\x2e\x68\164\155\x6c\x22\76"; qhD77: } goto Y3K2J; dadBE: $page = $article_list->render(); goto s3Yll; RfT1g: $new_link = array(); goto u3Xgw; JUqkg: } public function product_info() { goto e9dQ2; rnGTH: $all_img = $matche[0]; goto Ifiw_; Jjr1q: $where["\147\x2e\x6d\143\150\x5f\151\x64"] = $this->mch_id; goto pGceC; oETXd: $info = Db::name("\x79\x62\x73\143\137\x67\157\x6f\x64\x73")->alias("\147")->join("\171\x62\163\143\x5f\151\x6d\141\x67\145\163\40\x69", "\147\56\x69\x6d\141\147\x65\x73\x20\x3d\40\x69\x2e\151\x6d\147\x5f\151\x64", "\x4c\x45\x46\124")->where($where)->field("\147\56\x67\x6f\x6f\x64\163\137\x69\x64\40\x61\163\40\x69\144\x2c\x67\x2e\147\x6f\x6f\x64\x73\x5f\156\141\155\145\40\141\x73\40\164\151\x74\154\145\54\147\x2e\143\141\x74\x65\137\151\x64\40\x61\163\x20\143\x6c\x61\x73\163\x5f\x69\144\54\147\x2e\144\145\x73\x63\162\x69\x70\x74\151\157\156\40\141\163\40\143\x6f\156\164\x65\156\164\x2c\151\56\151\155\147\x5f\143\157\x76\145\x72\40\141\163\x20\151\x6d\x61\147\145")->find(); goto fiB6i; T67P0: AZXD6: goto Rrqw0; PzOYH: $this->assign("\151\156\x66\157", $info); goto H2Nfm; pGceC: $where["\x67\56\147\x6f\157\x64\163\x5f\151\144"] = $id; goto Us7E7; eTud3: foreach ($all_img as $img) { goto r1JLB; en6uH: $src = $matche[2][0]; goto HEt9z; L1h_H: preg_match_all("\x2f\50\163\162\x63\75\x22\x29\x28\133\134\163\x5c\123\135\x2a\x3f\51\x28\42\51\x2f", $img, $matche); goto en6uH; HEt9z: $mip_img[] = "\x3c\155\151\x70\55\x69\x6d\x67\40\143\x6c\141\163\163\x3d\42\x63\x6f\x6e\x74\x65\x6e\164\x5f\151\155\x67\42\x20\x73\162\x63\x3d\x22{$src}\42\76\74\x2f\155\151\x70\x2d\x69\x6d\147\76"; goto PUvIO; PUvIO: Zyu8D: goto GdaYE; r1JLB: $matche = array(); goto L1h_H; GdaYE: } goto T67P0; H2Nfm: return $this->fetch("\155\151\x70\137\160\x63\x2f\160\162\157\x64\x75\143\164\x5f\x69\x6e\146\157"); goto ZmgPV; Us7E7: $where["\x67\56\x69\163\137\144\x65\154"] = 0; goto oETXd; MoNkZ: preg_match_all("\57\x28\x3c\151\x6d\147\x20\51\50\x5b\x5c\163\134\123\x5d\x2a\77\51\x28\40\134\57\x3e\x29\57", $desc, $matche); goto rnGTH; e9dQ2: $id = Request::instance()->param("\151\144", 0); goto WsWNT; fiB6i: $desc = preg_replace("\57\163\164\x79\154\145\75\42\x2e\x2a\x3f\42\57\151", '', $info["\x63\157\156\x74\x65\156\164"]); goto MoNkZ; WsWNT: $product_class = Db::name("\x79\x62\163\143\137\x67\x6f\157\144\163\137\143\x61\x74\145")->where(["\x6d\143\x68\137\151\144" => $this->mch_id, "\151\163\x5f\x76\x69\163\151\142\x6c\145" => 1, "\154\x65\x76\x65\x6c" => 1])->order("\163\x6f\x72\x74\40\141\163\143")->field("\x63\x61\x74\145\137\x69\x64\x20\141\163\40\151\144\54\x63\141\x74\x65\137\156\x61\155\x65\40\141\x73\40\156\141\155\145")->select(); goto dZPma; Ifiw_: $mip_img = array(); goto eTud3; nwPXV: $info["\x63\157\156\x74\x65\x6e\164"] = $desc; goto PzOYH; Rrqw0: $desc = str_replace($all_img, $mip_img, $desc); goto nwPXV; dZPma: $this->assign("\x70\162\157\144\165\143\164\137\143\154\x61\x73\x73", $product_class); goto Jjr1q; ZmgPV: } public function article_info() { goto hpNbl; lydhv: $class_info = Db::name("\x79\142\163\x63\137\141\x72\164\151\x63\154\145\137\x63\154\141\x73\163")->where(["\x63\154\141\163\x73\x5f\151\144" => $info["\x63\x6c\141\x73\x73\x5f\x69\x64"]])->find(); goto p6Adq; kN1sx: $where["\141\162\164\151\x63\154\x65\x5f\151\144"] = $id; goto Dsupv; UYy1U: $info["\x63\157\156\164\145\156\164"] = $desc; goto uAhrr; AN3Fh: $mip_img = array(); goto le4l5; HZOYy: $all_img = $matche[0]; goto AN3Fh; le4l5: foreach ($all_img as $img) { goto T7jgm; Pg8h3: $src = $matche[2][0]; goto fHsqc; T7jgm: $matche = array(); goto n9FlQ; fHsqc: $mip_img[] = "\x3c\155\151\x70\55\x69\x6d\x67\x20\x63\x6c\141\x73\x73\75\42\143\157\156\164\x65\156\x74\137\x69\x6d\x67\42\x20\x73\162\143\75\x22{$src}\x22\x3e\x3c\x2f\x6d\x69\x70\55\151\x6d\x67\x3e"; goto OSRbj; OSRbj: IV1zz: goto Ie2la; n9FlQ: preg_match_all("\x2f\x28\163\162\143\75\42\x29\x28\133\134\x73\x5c\123\x5d\52\x3f\51\x28\42\51\57", $img, $matche); goto Pg8h3; Ie2la: } goto MjpZn; Ma2z3: $desc = str_replace($all_img, $mip_img, $desc); goto UYy1U; T3BUk: $info = Db::name("\171\142\163\143\x5f\x61\162\164\x69\x63\x6c\145")->where($where)->find(); goto lydhv; wl3Vw: return $this->fetch("\x6d\x69\160\x5f\x70\143\x2f\141\x72\164\x69\x63\154\x65\x5f\x69\156\146\x6f"); goto piUWV; WNLu0: $article_class = Db::name("\171\x62\163\x63\x5f\x61\162\x74\x69\x63\154\145\137\143\x6c\x61\x73\163")->where(["\x6d\x63\x68\x5f\151\x64" => $this->mch_id, "\151\163\137\x64\x65\x6c" => 1, "\154\145\x76\x65\154" => 1])->order("\163\157\162\164\x20\141\163\143")->select(); goto fOkV3; uAhrr: $this->assign("\x69\x6e\146\x6f", $info); goto wl3Vw; P0Yxv: preg_match_all("\x2f\x28\74\x69\155\147\x20\51\50\x5b\x5c\163\134\x53\135\52\77\51\x28\x20\134\x2f\x3e\51\57", $desc, $matche); goto HZOYy; Dsupv: $where["\x73\164\141\x74\x75\163"] = 2; goto hzDRI; rgww1: $desc = preg_replace("\x2f\x73\164\x79\x6c\145\x3d\42\56\52\x3f\x22\57\151", '', $info["\x63\157\156\164\145\156\x74"]); goto P0Yxv; fOkV3: $this->assign("\141\x72\x74\x69\143\x6c\x65\x5f\143\x6c\x61\163\163", $article_class); goto RMOwg; MjpZn: bJkGG: goto Ma2z3; RMOwg: $where["\x6d\143\150\137\151\144"] = $this->mch_id; goto kN1sx; p6Adq: $info["\x63\154\141\x73\163\137\x6e\141\155\145"] = $class_info["\x6e\141\x6d\x65"]; goto rgww1; hzDRI: $where["\x74\x79\x70\145"] = 1; goto T3BUk; hpNbl: $id = Request::instance()->param("\x69\x64", 0); goto WNLu0; piUWV: } public static function Infiniteproduct($class_id, $mch_id) { goto sqHpc; JJfeM: $rs[] = $class_id; goto WZMgT; sqHpc: $rs = array(); goto JJfeM; zYftN: Szf4q: goto xY7sd; xY7sd: return $rs; goto M2cW4; DDsPr: foreach ($cate_list as $key => $value) { $rs = array_merge($rs, self::Infiniteproduct($value["\x63\141\x74\x65\x5f\x69\144"], $mch_id)); iQVd4: } goto zYftN; WZMgT: $cate_list = Db::name("\x79\142\163\143\137\147\x6f\157\x64\163\x5f\x63\141\x74\x65")->where("\160\151\144", $class_id)->where("\155\143\150\137\151\x64", $mch_id)->where("\151\163\x5f\x76\x69\x73\x69\142\154\x65", 1)->field("\143\x61\x74\x65\137\151\x64")->select(); goto DDsPr; M2cW4: } }