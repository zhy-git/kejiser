<?php
 namespace app\admin\controller; use app\admin\service\Images; use think\Controller; use think\Config; use think\Image; define("\125\120\114\x4f\101\104\137\126\x49\104\x45\x4f", Config::get("\166\151\145\167\137\x72\x65\x70\x6c\x61\x63\145\x5f\163\x74\x72\x2e\125\x50\114\x4f\101\104\137\126\111\104\x45\117")); class UploadAttr extends Controller { private $return = array(); private $file_path = ''; private $file_name = ''; private $file_size = 0; private $file_type = ''; private $upload_type = 1; public function uploadFile() { goto S3Nkn; oP7lN: @unlink($_FILES["\146\151\x6c\145\x5f\165\x70\154\157\141\x64"]); goto BXd40; rmqTS: tB3eL: goto vzz21; pXLdc: ZoC1y: goto TOPYF; mOpmG: $this->return["\x6d\145\163\163\x61\x67\145"] = "\xe8\xaf\xb7\xe6\xa3\x80\346\237\245\xe6\202\250\xe7\x9a\204\344\xb8\x8a\xe4\274\240\xe5\x8f\202\xe6\225\260\xe9\205\215\xe7\xbd\xae\346\210\x96\344\xb8\212\xe4\274\xa0\xe7\232\x84\xe6\226\207\xe4\273\xb6\346\x98\257\345\220\246\346\x9c\211\xe8\xaf\257"; goto RBbxr; vzz21: $retval = 1; goto Bn7pf; HsZXE: Xm0z5: goto C9SG3; M0TdS: $ext = "\56" . $file_name_explode[$suffix]; goto H4876; H4876: $newfile = "\x66\141\x76\x69\x63\x6f\156\56\x69\143\x6f"; goto uEOss; TCtX_: $guid = time(); goto iStXf; L1uWn: goto HneHK; goto fbJ4V; uEOss: $ok = $this->moveUploadFile($_FILES["\146\151\x6c\145\137\x75\160\154\157\141\144"]["\164\155\160\x5f\x6e\141\x6d\145"], $this->file_path . $newfile); goto TE3C7; SmylU: zNGDF: goto ZLtkW; ZLtkW: if ($this->validationFile()) { goto k4jlU; } goto Bl668; hFFpj: $this->file_type = $_FILES["\146\x69\154\145\137\x75\x70\x6c\x6f\x61\144"]["\164\x79\160\145"]; goto wQ032; fbJ4V: bI6Sb: goto YA6WI; F2Ff3: $this->file_size = $_FILES["\x66\151\154\x65\x5f\165\160\x6c\x6f\x61\x64"]["\163\151\x7a\145"]; goto hFFpj; ZmBK7: goto LvudW; goto PqoRg; KsA3o: $this->return["\x6d\145\x73\x73\141\147\145"] = "\xe4\270\x8a\344\274\240\346\x88\x90\xe5\x8a\x9f"; goto nmbuS; c6j6E: $this->return["\155\x65\163\163\x61\x67\145"] = "\xe8\257\267\346\243\200\xe6\x9f\xa5\346\x82\250\xe7\232\x84\344\xb8\x8a\344\274\xa0\345\x8f\x82\xe6\x95\260\351\x85\215\xe7\275\xae\xe6\x88\x96\344\270\212\xe4\274\xa0\xe7\x9a\204\xe6\226\207\xe4\273\xb6\xe6\x98\257\xe5\220\xa6\346\x9c\x89\350\257\xaf"; goto ZmBK7; CVaXC: $this->return["\x6d\145\x73\163\141\147\x65"] = "\346\226\207\344\xbb\266\345\244\xa7\345\xb0\217\344\270\272\60\x4d\x42"; goto Xq0_X; al9Jf: if ($this->file_path == "\x75\160\x6c\x6f\141\x64\57\147\x6f\157\x64\x73\57") { goto tB3eL; } goto nhXGh; RBbxr: goto KeXs3; goto pXLdc; C9SG3: LvudW: goto VWQ1e; O5oWh: $this->file_name = $_FILES["\x66\x69\x6c\x65\x5f\x75\160\x6c\157\141\x64"]["\156\141\155\x65"]; goto F2Ff3; S3Nkn: $this->file_path = SITE_PATH; goto O5oWh; PqoRg: ziEk8: goto al9Jf; zvL7b: k4jlU: goto TCtX_; VWQ1e: am__S: goto jOFYr; Bl668: return $this->ajaxFileReturn(); goto zvL7b; Xq0_X: return $this->ajaxFileReturn(); goto SmylU; TAhv9: $suffix = count($file_name_explode) - 1; goto M0TdS; KB2vn: if ($image_size) { goto ziEk8; } goto c6j6E; LhzAX: $this->return["\155\145\163\163\141\147\145"] = "\344\xb8\212\xe4\274\xa0\xe6\x88\220\xe5\212\x9f"; goto tSa4R; wQ032: if (!($this->file_size == 0)) { goto zNGDF; } goto CVaXC; wuHAz: $this->return["\x6d\145\163\163\x61\147\145"] = "\xe4\270\x8a\xe4\274\240\345\xa4\261\xe8\264\xa5"; goto L1uWn; BXd40: $image_size = getimagesize($ok["\x70\x61\164\x68"]); goto KB2vn; TE3C7: if ($ok["\143\x6f\x64\x65"]) { goto ZoC1y; } goto mOpmG; nhXGh: $this->return["\143\x6f\144\x65"] = 1; goto C7_TF; Bn7pf: if ($retval > 0) { goto bI6Sb; } goto wuHAz; zIEj6: HneHK: goto HsZXE; iStXf: $file_name_explode = explode("\x2e", $this->file_name); goto TAhv9; jOFYr: KeXs3: goto eHZr1; TOPYF: if (strstr(UPLOAD_VIDEO, $this->file_path)) { goto am__S; } goto oP7lN; tSa4R: goto Xm0z5; goto rmqTS; nmbuS: $this->return["\x64\141\164\x61"] = $ok["\x70\141\x74\x68"]; goto zIEj6; eHZr1: return $this->ajaxFileReturn(); goto RutHF; YA6WI: $this->return["\x63\x6f\144\145"] = $retval; goto KsA3o; C7_TF: $this->return["\x64\141\x74\x61"] = $ok["\x70\x61\x74\150"]; goto LhzAX; RutHF: } private function ajaxFileReturn() { goto k3Cvn; FVZiH: return json_encode($this->return); goto Qanu8; k3Cvn: if (!(empty($this->return["\x63\157\144\x65"]) || null == $this->return["\143\x6f\x64\x65"] || '' == $this->return["\x63\157\x64\145"])) { goto TIhQX; } goto rGmzC; t39MQ: $this->return["\x64\141\x74\x61"] = ''; goto TmY40; J_xOG: if (!(empty($this->return["\155\145\163\163\x61\147\x65"]) || null == $this->return["\155\145\163\x73\x61\147\145"] || '' == $this->return["\155\145\x73\x73\141\x67\145"])) { goto QgR0T; } goto k7H5E; rGmzC: $this->return["\143\x6f\144\145"] = 0; goto y0Xkv; k7H5E: $this->return["\155\145\x73\163\x61\x67\145"] = ''; goto CwtJs; TmY40: MiVpL: goto FVZiH; CwtJs: QgR0T: goto DQhGq; DQhGq: if (!(empty($this->return["\144\x61\x74\x61"]) || null == $this->return["\144\141\x74\x61"] || '' == $this->return["\x64\141\164\141"])) { goto MiVpL; } goto t39MQ; y0Xkv: TIhQX: goto J_xOG; Qanu8: } private function validationFile() { goto iGCwN; XwQIh: qcjvV: goto JvEHw; gSxaC: if (!($this->file_type != "\151\x6d\141\147\145\x2f\x67\x69\x66" && $this->file_type != "\151\x6d\x61\147\x65\57\x70\156\147" && $this->file_type != "\151\155\x61\147\x65\57\152\x70\145\147" && $this->file_size > 3000000)) { goto qcjvV; } goto XyzB9; JvEHw: return $flag; goto qUGlS; iGCwN: $flag = true; goto gSxaC; DlZtJ: $flag = false; goto XwQIh; XyzB9: $this->return["\155\x65\163\163\x61\x67\145"] = "\346\226\207\344\xbb\xb6\344\270\x8a\xe4\xbc\xa0\345\244\xb1\350\xb4\245\54\350\257\xb7\346\243\200\346\x9f\245\346\202\xa8\xe4\xb8\x8a\344\274\240\347\232\204\xe6\x96\x87\xe4\273\266\347\xb1\273\xe5\236\x8b\54\346\226\207\344\xbb\xb6\xe5\244\xa7\xe5\xb0\x8f\xe4\xb8\x8d\xe8\203\275\xe8\xb6\205\350\xbf\207\63\115\102"; goto DlZtJ; qUGlS: } public function moveUploadFile($file_path, $key) { goto IXDl5; bhXoT: $ok = @move_uploaded_file($file_path, $key); goto QNCXn; QNCXn: $result = ["\143\x6f\144\x65" => $ok, "\x70\x61\164\x68" => $key, "\144\157\155\x61\151\156" => '', "\142\165\143\x6b\145\x74" => '']; goto Ju_ms; VkfYq: return $result; goto XP6c4; Ju_ms: pAqy6: goto VkfYq; IXDl5: if (!($this->upload_type == 1)) { goto pAqy6; } goto bhXoT; XP6c4: } }
