<?php
 class Uploader { private $fileField; private $file; private $config; private $oriName; private $fileName; private $fullName; private $fileSize; private $fileType; private $stateInfo; private $stateMap = array("\x53\x55\103\x43\x45\x53\x53", "\346\x96\x87\344\273\266\xe5\xa4\247\xe5\xb0\217\350\xb6\x85\xe5\x87\272\40\165\x70\154\x6f\141\144\x5f\x6d\141\x78\137\146\151\x6c\x65\163\x69\172\145\x20\xe9\231\220\xe5\x88\266", "\346\x96\207\xe4\273\xb6\345\244\xa7\345\260\217\xe8\266\x85\345\207\272\40\x4d\x41\130\137\x46\111\x4c\x45\137\x53\111\x5a\x45\x20\351\231\x90\345\x88\266", "\346\226\207\344\xbb\xb6\xe6\x9c\xaa\xe8\242\253\345\256\214\346\x95\264\xe4\xb8\x8a\344\xbc\240", "\346\xb2\xa1\xe6\234\x89\xe6\226\207\xe4\273\xb6\xe8\242\253\344\270\212\xe4\274\xa0", "\344\270\x8a\344\274\xa0\346\226\207\xe4\xbb\266\344\270\xba\347\251\xba", "\120\x4f\x53\x54" => "\346\226\207\xe4\xbb\266\xe5\xa4\xa7\xe5\xb0\x8f\xe8\xb6\x85\345\207\xba\x20\160\x6f\x73\x74\x5f\155\x61\170\137\163\x69\x7a\145\x20\351\231\x90\345\x88\xb6", "\x53\x49\x5a\x45" => "\346\226\207\344\273\xb6\xe5\xa4\xa7\xe5\260\x8f\xe8\266\205\345\x87\272\347\275\x91\347\xab\x99\xe9\231\220\345\x88\xb6", "\124\x59\120\105" => "\xe4\270\x8d\xe5\205\x81\350\256\270\347\232\204\xe6\226\207\344\xbb\xb6\347\xb1\xbb\xe5\x9e\x8b", "\x44\111\x52" => "\xe7\x9b\xae\345\275\225\xe5\210\x9b\345\xbb\272\xe5\xa4\261\350\xb4\xa5", "\111\x4f" => "\350\276\x93\345\205\xa5\xe8\276\x93\xe5\207\xba\xe9\x94\x99\350\257\257", "\x55\x4e\113\116\x4f\127\x4e" => "\xe6\234\xaa\xe7\237\xa5\xe9\224\x99\xe8\xaf\xaf", "\x4d\x4f\126\105" => "\xe6\x96\x87\xe4\273\xb6\344\xbf\x9d\xe5\xad\x98\xe6\227\xb6\345\207\272\xe9\224\x99", "\104\111\x52\x5f\105\122\x52\117\x52" => "\345\210\233\xe5\273\272\347\x9b\256\345\275\225\345\xa4\xb1\xe8\264\xa5"); public function __construct($fileField, $config, $base64 = false) { goto DAGLk; t_HXM: $this->config = $config; goto woNNo; woNNo: $this->stateInfo = $this->stateMap[0]; goto ODCGV; DAGLk: $this->fileField = $fileField; goto t_HXM; ODCGV: $this->upFile($base64); goto Ta60T; Ta60T: } private function upFile($base64) { goto GWjXS; YBt9v: $this->base64ToImage($content); goto yyu8Q; NgfDr: if (is_uploaded_file($file["\164\x6d\x70\137\156\x61\155\145"])) { goto DPmm0; } goto CPrm9; JmSWK: $this->fileSize = $file["\x73\x69\172\145"]; goto rujCj; GWjXS: if (!("\142\141\163\145\x36\64" == $base64)) { goto ghX59; } goto pu5UV; fIz_G: Mh5Is: goto M7rvZ; Yrrpc: $file = $this->file = $_FILES[$this->fileField]; goto xU1wX; o6b2N: if (!$this->file["\145\x72\162\x6f\x72"]) { goto eTUwY; } goto t2dYC; yyu8Q: return; goto bt1LQ; tfdNq: $this->stateInfo = $this->getStateInfo("\x53\111\x5a\105"); goto cMEXA; cMEXA: return; goto fIz_G; Jnmgn: return; goto QVvPk; DI62h: if ($this->checkSize()) { goto Mh5Is; } goto tfdNq; KZg59: if (!($folder === false)) { goto itgHX; } goto Fs4cM; uqL6M: oYHy2: goto QWj7G; t2dYC: $this->stateInfo = $this->getStateInfo($file["\145\162\x72\157\162"]); goto Jnmgn; c21Pc: $this->stateInfo = $this->getStateInfo("\x50\x4f\123\x54"); goto LKI1o; hGyH3: itgHX: goto f7Ky_; B69Gf: $this->stateInfo = $this->getStateInfo("\x4d\x4f\126\x45"); goto z6FSx; Ougsy: if (!($this->stateInfo == $this->stateMap[0])) { goto AZPB0; } goto TEXzS; aX316: AZPB0: goto ES2dj; CPrm9: $this->stateInfo = $this->getStateInfo("\125\x4e\113\116\117\127\x4e"); goto DpiC6; QVvPk: eTUwY: goto NgfDr; TEXzS: if (move_uploaded_file($file["\164\155\160\x5f\x6e\141\x6d\x65"], $this->fullName)) { goto qYR8U; } goto B69Gf; QWj7G: $folder = $this->getFolder(); goto KZg59; M7rvZ: if ($this->checkType()) { goto oYHy2; } goto JKZM9; JKZM9: $this->stateInfo = $this->getStateInfo("\x54\131\120\x45"); goto DW1uh; Fs4cM: $this->stateInfo = $this->getStateInfo("\104\111\122\x5f\105\122\x52\117\122"); goto Jmouc; f7Ky_: $this->fullName = $folder . "\57" . $this->getName(); goto Ougsy; rujCj: $this->fileType = $this->getFileExt(); goto DI62h; bt1LQ: ghX59: goto Yrrpc; Jmouc: return; goto hGyH3; DpiC6: return; goto mw_Pi; AArZk: $this->oriName = $file["\x6e\141\155\145"]; goto JmSWK; mw_Pi: DPmm0: goto AArZk; LKI1o: return; goto uYZ6T; z6FSx: qYR8U: goto aX316; xU1wX: if ($file) { goto d0cNY; } goto c21Pc; pu5UV: $content = $_POST[$this->fileField]; goto YBt9v; DW1uh: return; goto uqL6M; uYZ6T: d0cNY: goto o6b2N; ES2dj: } private function base64ToImage($base64Data) { goto VjgC5; Hs9OG: $this->fullName = $this->getFolder() . "\x2f" . $this->fileName; goto vgJIq; VWCuU: DJ__7: goto bPMrI; wY9Z6: return; goto VWCuU; GBolg: $this->fileType = "\56\160\x6e\x67"; goto cRlUz; CIYSH: $this->fileName = time() . rand(1, 10000) . "\x2e\x70\x6e\x67"; goto Hs9OG; bPMrI: $this->oriName = ''; goto k_Bt0; VjgC5: $img = base64_decode($base64Data); goto CIYSH; k_Bt0: $this->fileSize = strlen($img); goto GBolg; cE0T1: $this->stateInfo = $this->getStateInfo("\x49\117"); goto wY9Z6; vgJIq: if (file_put_contents($this->fullName, $img)) { goto DJ__7; } goto cE0T1; cRlUz: } public function getFileInfo() { return array("\157\x72\151\147\x69\156\x61\x6c\x4e\x61\155\x65" => $this->oriName, "\x6e\x61\x6d\x65" => $this->fileName, "\x75\162\x6c" => $this->fullName, "\163\151\x7a\x65" => $this->fileSize, "\164\x79\x70\145" => $this->fileType, "\163\164\141\164\145" => $this->stateInfo); } private function getStateInfo($errCode) { return !$this->stateMap[$errCode] ? $this->stateMap["\x55\116\x4b\116\117\x57\116"] : $this->stateMap[$errCode]; } private function getName() { return $this->fileName = time() . rand(1, 10000) . $this->getFileExt(); } private function checkType() { return in_array($this->getFileExt(), $this->config["\141\x6c\154\157\167\x46\x69\x6c\145\163"]); } private function checkSize() { return $this->fileSize <= $this->config["\x6d\141\x78\x53\151\x7a\145"] * 1024; } private function getFileExt() { return strtolower(strrchr($this->file["\156\141\155\145"], "\56")); } private function getFolder() { goto zpeze; HdOMK: if (mkdir($pathStr, 0777, true)) { goto PsJXd; } goto EsAEk; nLDx4: $pathStr .= "\x2f"; goto pcwyX; EsAEk: return false; goto N9t2U; xgDHn: if (file_exists($pathStr)) { goto onSaL; } goto HdOMK; dCYK2: return $pathStr; goto LVFTH; z89Ep: $pathStr .= date("\x59\155\x64"); goto xgDHn; pcwyX: yHEmN: goto z89Ep; a8R0f: onSaL: goto dCYK2; zpeze: $pathStr = $this->config["\163\141\x76\x65\120\x61\164\150"]; goto cncK1; cncK1: if (!(strrchr($pathStr, "\57") != "\57")) { goto yHEmN; } goto nLDx4; N9t2U: PsJXd: goto a8R0f; LVFTH: } }
