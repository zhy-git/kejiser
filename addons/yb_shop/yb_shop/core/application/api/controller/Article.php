<?php
 namespace app\api\controller; use think\Request; use think\Db; use app\api\service\ArticleService; require_once BASE_ROOT . "\143\x6f\162\x65\x2f\x61\x70\x70\154\x69\x63\x61\164\x69\x6f\156\57\x61\x70\151\57\x63\157\x6e\x74\x72\x6f\x6c\x6c\x65\162\57\x42\141\163\x65\x43\x6f\x6e\164\x72\x6f\154\154\145\x72\x2e\x70\x68\160"; class Article extends BaseController { public function ArticleClass() { goto XeZlp; LDtOR: $mch_id = $this->getMchId($app_id); goto X2bUO; tg0_e: return json_encode($rs); goto ZJR56; yb6rp: if (empty($result)) { goto ZSW6K; } goto DcpT6; X2bUO: $data = ["\155\143\150\137\x69\x64" => $mch_id]; goto R6WHG; DcpT6: $rs["\143\157\144\145"] = 1; goto qDPRU; UZwU5: $info = $article::InfiniteCate(0, $mch_id); goto Q8ULQ; ZBeNF: ZSW6K: goto DCR8j; R6WHG: $rule = [["\x6d\x63\x68\137\151\144", "\x72\x65\x71\165\151\162\145", "\xe4\xb8\x8d\xe5\xad\x98\345\234\xa8\345\x95\x86\346\x88\267"]]; goto AE1mS; qDPRU: $rs["\155\x73\x67"] = $result; goto ScMJv; DCR8j: $article = new ArticleService(); goto UZwU5; xBWqI: $app_id = Request::instance()->param("\x69"); goto LDtOR; XeZlp: $rs = array("\143\157\144\x65" => 0, "\x69\x6e\146\x6f" => array()); goto xBWqI; AE1mS: $result = $this->checkParam($rule, $data); goto yb6rp; ScMJv: return json_encode($rs); goto ZBeNF; Q8ULQ: $rs["\151\156\x66\x6f"] = $info; goto tg0_e; ZJR56: } public function Article() { goto kThXV; C1n2E: return json_encode($rs); goto FMkoO; y4fL0: if (empty($result)) { goto TRBen; } goto Vm6dc; eGT65: return json_encode($rs); goto TpsXt; PVafR: $info = $article->getArticle($data, $page); goto zteBY; EDLIB: $result = $this->checkParam($rule, $data); goto y4fL0; TpsXt: Og_hQ: goto nH6Mz; RhIZ2: $mch_id = $this->getMchId($app_id); goto fQO7j; kThXV: $rs = array("\x63\157\x64\145" => 0, "\151\156\146\157" => array()); goto htEkm; Vm6dc: $rs["\143\157\x64\x65"] = 1; goto KqSS1; fQO7j: $data = ["\x6d\143\x68\137\x69\144" => $mch_id, "\151\x64\145\x6e\164" => $ident, "\x63\154\x61\163\163\x5f\x69\x64" => $class_id]; goto qb5gT; KqSS1: $rs["\155\163\x67"] = $result; goto g5rMo; zteBY: if (!empty($info)) { goto Og_hQ; } goto eGT65; RJ7pO: $ident = Request::instance()->param("\x69\144\x65\156\164"); goto fgY6b; qb5gT: $data = array_filter($data); goto vZr1w; a_KCQ: TRBen: goto SN1CG; SN1CG: $article = new ArticleService(); goto PVafR; g5rMo: return json_encode($rs); goto a_KCQ; nH6Mz: $rs["\x69\x6e\146\x6f"] = $info; goto C1n2E; fgY6b: $app_id = Request::instance()->param("\x69"); goto vTify; htEkm: $class_id = Request::instance()->param("\143\154\141\163\x73\x5f\151\144"); goto RJ7pO; vZr1w: $rule = [["\155\x63\x68\137\x69\x64", "\x72\145\161\165\151\162\x65", "\xe4\270\215\345\255\x98\xe5\234\250\xe5\x95\x86\xe6\210\xb7"]]; goto EDLIB; vTify: $page = Request::instance()->param("\x70\x61\x67\x65", 1); goto RhIZ2; FMkoO: } public function ArticleInfo() { goto xai1H; JS52E: $info = $article->getArticleInfo($data); goto MFHiL; lWouN: return json_encode($rs); goto RRinq; XO2cy: $data = ["\141\x72\164\151\143\154\x65\x5f\151\144" => Request::instance()->param("\x61\x72\164\151\143\154\145\137\151\x64"), "\155\143\x68\x5f\x69\144" => $mch_id, "\151\x64\x65\156\164" => $ident]; goto Tcts1; fQ_oA: $ident = Request::instance()->param("\151\x64\145\x6e\x74"); goto uH8SC; MFHiL: if (!empty($info)) { goto v9jj0; } goto ewC3g; uH8SC: $app_id = Request::instance()->param("\x69"); goto V4Edy; uDCAp: $rs["\x69\156\146\x6f"] = $info; goto lWouN; V4Edy: $mch_id = $this->getMchId($app_id); goto XO2cy; oNkaV: v9jj0: goto uDCAp; Tcts1: $article = new ArticleService(); goto ua1YP; JP9Z0: return json_encode($rs); goto oNkaV; ua1YP: $data = array_filter($data); goto JS52E; xai1H: $rs = array("\x63\x6f\144\x65" => 0, "\151\x6e\146\157" => array()); goto fQ_oA; ewC3g: $rs["\155\x73\147"] = "\346\x9a\x82\xe6\x97\240\346\x96\207\347\253\xa0"; goto JP9Z0; RRinq: } }