<?php
 namespace app\admin\controller; use app\admin\service\VideoService; use think\Db; class Video extends Base { public function index() { goto VN9no; VN9no: $list = Db::name("\x79\142\163\143\x5f\x62\165\163\x5f\x76\151\x64\145\x6f")->where("\x6d\143\150\x5f\151\144", $this->bus_id)->paginate(20); goto mLPov; mLPov: $this->assign("\154\151\x73\x74", $list); goto bVmNs; bVmNs: return view(); goto JGgvF; JGgvF: } public function video_add() { goto FoCkd; aZ4LJ: AH6gv: goto BinAW; VmQ_7: return AjaxReturn($res); goto aZ4LJ; rRcpu: $data["\164\151\164\x6c\x65"] = input("\x70\x61\162\x61\x6d\56\164\x69\x74\x6c\x65"); goto lBT9p; c817K: $data["\x69\x6d\147"] = input("\160\x61\162\141\x6d\x2e\x62\162\x61\x6e\144\137\x70\x69\x63"); goto PE5U6; BinAW: return view(); goto WD6ii; Nnzs6: $data["\x61\x64\144\x5f\x74\151\155\x65"] = time(); goto H2H5I; lBT9p: $data["\x75\162\x6c"] = input("\160\141\162\x61\x6d\56\x76\x69\x64\145\157\x5f\x75\x72\154"); goto c817K; FoCkd: if (!request()->isAjax()) { goto AH6gv; } goto rRcpu; PE5U6: $data["\x6d\x63\150\137\151\144"] = $this->bus_id; goto Nnzs6; H2H5I: $res = Db::name("\171\x62\x73\143\137\x62\x75\163\137\x76\151\x64\145\x6f")->insert($data); goto VmQ_7; WD6ii: } public function video_edit() { goto lLyAm; KR8rl: $this->assign("\151\156\146\157", $info); goto N5Szo; Yr2SC: $info = Db::name("\171\x62\163\143\x5f\142\165\163\x5f\x76\x69\144\x65\x6f")->where("\x69\x64", $id)->find(); goto KR8rl; nhlbK: jCgoN: goto cKvqx; AYSdg: $data["\x6d\x63\150\x5f\x69\144"] = $this->bus_id; goto xaepo; N5Szo: return view(); goto M_UNJ; ueoIt: $data["\151\x6d\x67"] = input("\160\141\162\141\155\56\142\x72\141\x6e\x64\137\160\151\x63"); goto AYSdg; iHhqU: $data["\165\162\x6c"] = input("\x70\x61\162\141\155\56\x76\151\144\x65\157\x5f\165\x72\154"); goto ueoIt; cKvqx: $id = input("\x70\141\x72\141\x6d\x2e\x69\144"); goto Yr2SC; lLyAm: if (!request()->isAjax()) { goto jCgoN; } goto mAc3Y; xaepo: $res = Db::name("\x79\x62\x73\x63\137\x62\165\163\137\166\x69\144\x65\157")->where("\151\x64", $id)->update($data); goto HpD5j; QkF5c: $data["\164\x69\164\154\x65"] = input("\x70\141\x72\x61\155\56\164\151\164\x6c\x65"); goto iHhqU; mAc3Y: $id = input("\x70\141\x72\x61\155\x2e\151\144"); goto QkF5c; HpD5j: return AjaxReturn($res); goto nhlbK; M_UNJ: } public function video_del() { goto RG794; O34SN: return AjaxReturn($res); goto jA2Jz; ULedQ: $res = Db::name("\x79\x62\163\143\x5f\142\x75\163\137\166\151\x64\145\157")->where("\x69\144", $id)->delete(); goto O34SN; RG794: $id = input("\160\x61\x72\x61\x6d\56\151\x64"); goto ULedQ; jA2Jz: } public function VideoClass() { goto AW2di; SGqI5: return view("\x76\151\144\145\x6f\57\x76\151\144\145\x6f\137\x63\154\x61\163\x73\x5f\x6c\151\163\x74"); goto ZWnHm; qyqhy: $data["\x6e\141\155\145"] = ["\154\151\x6b\x65", "\x25" . $search_text . "\x25"]; goto pDOQb; a3Lq3: $search_text = request()->post("\x73\x65\141\x72\143\x68\x5f\x74\145\170\x74"); goto qyqhy; lVs7E: $page = $class->render(); goto T1efB; Lqcqq: $class = $video_class->getVideoClass($data); goto lVs7E; Nf3z1: $this->assign("\x70\x61\147\145", $page); goto SGqI5; TtE9X: $video_class = new VideoService(); goto Lqcqq; pDOQb: $data["\x6d\143\x68\137\x69\144"] = $this->bus_id; goto TtE9X; T1efB: $this->assign("\x63\154\x61\163\163", $class); goto Nf3z1; AW2di: $data = array(); goto a3Lq3; ZWnHm: } public function AddVideoClass() { goto R_G5Z; AioZ7: $data["\x73\157\x72\x74"] = request()->post("\x63\x6c\141\163\163\x5f\x73\x6f\x72\x74", 0); goto QsbwW; R_G5Z: $article_class = new VideoService(); goto uP16x; NzpLc: $data["\160\x69\x64"] = 0; goto tlnlb; uP16x: if (!request()->post()) { goto uMqQo; } goto AfpaJ; ycJBf: uMqQo: goto YN15w; YN15w: return view("\166\x69\144\x65\x6f\x2f\166\x69\x64\145\x6f\x5f\143\154\x61\x73\x73\137\x61\x64\x64"); goto ichWh; kdVLE: return AjaxReturn($res); goto ycJBf; tlnlb: $res = $article_class->addVideoClass($data); goto kdVLE; TRMAo: $data["\155\143\150\137\x69\x64"] = $this->bus_id; goto AioZ7; Uz2T1: $data["\x63\x72\145\x61\x74\145\137\164\x69\x6d\x65"] = time(); goto NzpLc; AfpaJ: $data["\156\x61\x6d\x65"] = request()->post("\x63\x6c\141\x73\163\x5f\156\x61\155\145"); goto TRMAo; QsbwW: $data["\x69\x6d\x61\x67\145\x73"] = input("\160\x61\x72\x61\x6d\56\x69\x6d\x61\x67\x65\163", ''); goto Uz2T1; ichWh: } public function DelVideoClass() { goto LtF_f; K6yth: $video = new VideoService(); goto eiKLE; hev8Z: return AjaxReturn($res); goto CfHaK; LtF_f: $class_id = input("\160\141\162\x61\155\56\143\154\x61\163\x73\137\151\144", ''); goto K6yth; eiKLE: $res = $video->delVideoClass($class_id); goto hev8Z; CfHaK: } public function EditVideoClass() { goto HbaHv; API3P: if (!request()->post()) { goto jEpZ2; } goto OjoIY; GddY2: $this->assign("\143\x6c\x61\x73\163", $list); goto eNL6z; UX0qh: $data["\x69\x6d\x61\147\x65\x73"] = input("\160\141\162\x61\155\56\x69\x6d\141\147\x65\x73", ''); goto BK7eV; eNL6z: return view("\166\151\x64\x65\157\x2f\166\x69\144\145\157\x5f\143\154\141\163\x73\137\145\144\x69\164"); goto Omstf; BK7eV: $data["\x70\151\144"] = 0; goto B80Ei; XkXrR: $data["\156\x61\155\145"] = input("\x70\x61\x72\141\155\56\143\x6c\x61\x73\x73\137\x6e\x61\x6d\x65", ''); goto rumWw; OjoIY: $data["\x63\154\x61\x73\163\x5f\x69\x64"] = input("\160\141\x72\x61\x6d\56\143\x6c\x61\x73\163\137\151\144", "\60"); goto XkXrR; fMSI9: return AjaxReturn($res); goto Ql7eJ; Ql7eJ: jEpZ2: goto Y0gx8; Y0gx8: $class_id = input("\x70\x61\162\x61\155\56\x63\x6c\x61\x73\163\x5f\x69\144"); goto TR9zN; B80Ei: $res = $article_class->updateVideoClass($data); goto fMSI9; HbaHv: $article_class = new VideoService(); goto API3P; rumWw: $data["\x73\157\x72\164"] = input("\160\x61\x72\141\x6d\x2e\x63\x6c\x61\x73\163\137\x73\157\x72\x74", ''); goto UX0qh; TR9zN: $list = $article_class->getVideoClassById($class_id); goto GddY2; Omstf: } public function Video() { goto v46ks; v46ks: $data = array(); goto gIyKi; gIyKi: $search_text = request()->post("\163\145\x61\162\143\x68\137\x74\x65\x78\164"); goto XGpML; QvA_j: $data["\x74\151\x74\x6c\145"] = ["\154\x69\153\145", "\x25" . $search_text . "\45"]; goto plMbG; XGpML: $class_id = request()->post("\x63\x6c\141\163\x73\x5f\151\144"); goto QvA_j; rmlIp: $data["\155\143\150\137\151\x64"] = $this->bus_id; goto FSzyg; PYXPr: $this->assign("\160\x61\x67\x65", $page); goto viieR; FSzyg: $class = $video_class->getVideo($data); goto S6vg7; N7vp1: $video_class = new VideoService(); goto rmlIp; viieR: return view("\x76\x69\144\145\x6f\57\166\x69\x64\145\x6f\137\154\x69\163\164"); goto BQ69K; S6vg7: $page = $class->render(); goto zXOy2; zXOy2: $this->assign("\143\x6c\141\x73\163", $class); goto PYXPr; ZOfsb: $data = array_filter($data); goto N7vp1; plMbG: $data["\143\154\x61\x73\163\137\x69\x64"] = $class_id; goto ZOfsb; BQ69K: } public function AddVideo() { goto r249z; E8JqD: return view("\x76\x69\144\145\157\x2f\166\x69\144\x65\x6f\x5f\x61\144\144"); goto mtc5V; vnvcm: $res = $video_class->addVideo($data); goto ERDEh; ERDEh: return AjaxReturn($res); goto WSHzn; jEfI2: $data["\x63\162\145\141\x74\x65\x5f\164\151\x6d\145"] = time(); goto vnvcm; usLid: $data["\163\164\141\164\165\x73"] = 2; goto jEfI2; B65Zu: $data["\x69\x6d\x61\x67\145"] = input("\x70\141\x72\x61\155\56\x69\x6d\141\147\145\x73", ''); goto NHsjn; JmC3X: $data["\x69\x73\x5f\162\x65\x63\157\x6d\155\x65\156\x64"] = input("\160\x61\x72\x61\155\x2e\151\x73\137\x72\145\x63\x6f\155\x6d\145\x6e\144", ''); goto usLid; WSHzn: brmKc: goto BX6TS; cqqul: $data["\x73\x68\157\x72\164\x5f\x74\x69\164\154\145"] = input("\160\141\162\x61\x6d\56\x73\x68\157\162\x74\x5f\164\151\164\154\145", ''); goto R3EIJ; YQdoJ: $data["\153\x65\171\167\x6f\x72\x64"] = input("\160\141\x72\x61\x6d\56\x6b\145\x79\167\x6f\x72\144", ''); goto JmC3X; jygzF: $data["\x74\x69\164\x6c\145"] = input("\160\x61\162\x61\x6d\56\164\x69\x74\154\145", ''); goto t_CUW; r249z: $video_class = new VideoService(); goto ZAH8z; ZAH8z: if (!request()->post()) { goto brmKc; } goto JWOQK; JWOQK: $data["\x6d\x63\x68\137\151\x64"] = $this->bus_id; goto jygzF; R3EIJ: $data["\141\165\164\150\x6f\x72"] = input("\x70\x61\x72\141\x6d\56\141\x75\164\x68\x6f\162", ''); goto cJM2v; BX6TS: $class = $video_class->getClass($this->bus_id); goto kydeG; cJM2v: $data["\143\x6f\156\x74\x65\156\164"] = input("\x70\x61\x72\141\155\x2e\x63\x6f\x6e\164\145\156\x74", ''); goto B65Zu; t_CUW: $data["\x63\x6c\141\163\x73\x5f\151\144"] = input("\160\141\162\x61\155\x2e\x63\154\141\163\x73\137\151\x64", ''); goto cqqul; kydeG: $this->assign("\x63\154\x61\163\x73", $class); goto E8JqD; NHsjn: $data["\165\162\154"] = input("\x70\x61\x72\141\x6d\x2e\166\x69\144\145\x6f", ''); goto YQdoJ; mtc5V: } public function EditVideo() { goto eSXdI; q1Xzq: return view("\166\151\144\x65\157\x2f\166\x69\x64\x65\157\137\x65\x64\x69\x74"); goto pPfGb; TMo1B: $data["\163\x68\157\162\164\137\164\151\x74\x6c\145"] = input("\160\141\x72\141\155\x2e\x73\x68\x6f\x72\164\x5f\164\151\x74\x6c\x65", ''); goto nuMc9; neHQw: $data["\165\x72\154"] = input("\x70\141\162\x61\155\x2e\x76\151\144\x65\157", ''); goto ilHNX; eSXdI: $video = new VideoService(); goto axYHi; xxRI5: $data["\x63\154\141\163\163\x5f\151\x64"] = input("\x70\141\x72\x61\155\x2e\x63\154\141\x73\163\x5f\x69\x64", ''); goto TMo1B; QvLzN: $this->assign("\x69\156\x66\x6f", $list); goto q1Xzq; TpZNL: $data["\x74\151\x74\x6c\x65"] = input("\x70\141\162\141\x6d\x2e\164\151\164\x6c\x65", ''); goto xxRI5; yXK01: $data["\x69\x73\x5f\162\145\143\157\x6d\155\145\x6e\144"] = input("\x70\141\x72\141\x6d\x2e\151\x73\137\162\x65\143\x6f\x6d\x6d\145\x6e\144", ''); goto lvBXc; sOspD: return AjaxReturn($res); goto lumIv; SMnEw: $data["\x69\x6d\141\147\x65"] = input("\160\141\x72\141\x6d\x2e\x69\155\141\147\x65\x73", ''); goto neHQw; axYHi: if (!request()->post()) { goto E4EP1; } goto u2fRH; jyJde: $video_id = input("\160\141\162\x61\155\x2e\166\x69\x64\145\157\x5f\151\x64"); goto be03h; u2fRH: $data["\x76\x69\144\145\157\137\x69\x64"] = input("\160\x61\x72\x61\155\56\x76\x69\144\x65\157\137\151\x64", ''); goto TpZNL; lvBXc: $data["\x73\164\x61\x74\x75\x73"] = 2; goto rD3fW; F6bhk: $list = $video->getVideoById($video_id); goto QvLzN; nuMc9: $data["\x61\165\x74\x68\157\162"] = input("\x70\141\x72\x61\155\56\x61\x75\164\x68\x6f\x72", ''); goto AVt1F; ilHNX: $data["\x6b\145\171\x77\157\x72\x64"] = input("\x70\x61\162\x61\155\56\x6b\145\x79\167\157\162\144", ''); goto yXK01; rD3fW: $res = $video->updateVideo($data); goto sOspD; lumIv: E4EP1: goto jyJde; OS0Eo: $this->assign("\x63\154\x61\x73\163", $class); goto F6bhk; AVt1F: $data["\143\x6f\x6e\164\x65\156\164"] = input("\160\x61\162\x61\155\56\143\157\x6e\164\x65\156\164", ''); goto SMnEw; be03h: $class = $video->getClass($this->bus_id); goto OS0Eo; pPfGb: } public function VideoDel() { goto MhXwJ; MhXwJ: $video_id = input("\x70\x61\x72\x61\x6d\x2e\166\x69\144\x65\157\x5f\x69\144", ''); goto bXpXK; e2eUD: return AjaxReturn($res); goto NZv3G; lA8Cb: $res = $video->VideoDel($video_id); goto e2eUD; bXpXK: $video = new VideoService(); goto lA8Cb; NZv3G: } }
