<?php
 namespace app\admin\service; class YbModule extends Base { function __construct() { parent::__construct(); $this->yb_module = new \app\common\model\YbModule(); } public function getAllModule($condition = '', $field = "\52", $order = '') { $list = $this->yb_module->getQuerys($condition, $field, $order); return $list; } public function indexModuleOff($id) { goto GFhpF; vFTQ_: return $res; goto hlHip; j76Hk: $res = $this->yb_module->save($data, ["\151\144" => $id]); goto vFTQ_; GFhpF: $data = ["\x69\163\x5f\165\163\x65" => 0]; goto j76Hk; hlHip: } public function indexModuleOn($id) { goto h4kJa; h4kJa: $data = ["\151\x73\137\165\x73\x65" => 1]; goto DzjWp; DzjWp: $res = $this->yb_module->save($data, ["\151\144" => $id]); goto Rwg5Q; Rwg5Q: return $res; goto PN909; PN909: } public function indexModuleSort($val, $id) { goto mCy1a; VXgHH: $res = $this->yb_module->save($data, ["\x69\x64" => $id]); goto Gw9nO; mCy1a: $data = ["\163\157\x72\164" => $val]; goto VXgHH; Gw9nO: return $res; goto glJ0q; glJ0q: } }