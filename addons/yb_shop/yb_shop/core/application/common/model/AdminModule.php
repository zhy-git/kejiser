<?php
 namespace app\common\model; class AdminModule extends Base { protected $name = "\171\142\x73\143\137\142\165\163\137\155\157\144\x75\x6c\145"; public function getAuthList($pid) { goto Zop46; h1_5z: return $list; goto gpwHI; Mo6Sv: $list = $this->where($contdition)->order("\163\x6f\x72\164")->column("\155\x6f\x64\x75\154\x65\137\151\x64\54\x6d\x6f\x64\165\x6c\x65\x5f\156\141\x6d\x65\x2c\143\x6f\156\x74\162\x6f\x6c\x6c\x65\x72\54\x6d\145\164\x68\157\144\x2c\x70\151\144\54\165\162\154\54\151\x73\x5f\x6d\145\156\x75\x2c\151\163\x5f\x63\x6f\156\x74\x72\157\154\x5f\x61\165\x74\x68\x2c\154\x6f\147\x6f"); goto h1_5z; Zop46: $contdition = array("\x70\x69\x64" => $pid, "\x69\x73\137\x6d\x65\x6e\165" => 1); goto Mo6Sv; gpwHI: } public function getAuthListLevel($level) { goto xAGK_; cJitW: $list = $this->where($contdition)->order("\163\157\x72\164")->column("\155\157\x64\165\154\145\x5f\151\x64\54\155\157\x64\165\154\x65\x5f\156\141\155\145\54\143\157\156\x74\x72\157\x6c\154\145\162\54\x6d\145\164\x68\x6f\x64\x2c\x70\151\144\54\x75\162\154\54\151\163\x5f\x6d\145\156\x75\54\151\163\x5f\143\x6f\x6e\x74\x72\x6f\154\137\x61\x75\x74\x68"); goto rmZXm; rmZXm: return $list; goto yRrUC; xAGK_: $contdition = array("\154\x65\166\145\154" => $level, "\x69\163\x5f\x6d\145\x6e\165" => 1); goto cJitW; yRrUC: } public function getModuleIdByModule($controller, $action) { goto lf9tz; lf9tz: $condition = array("\143\x6f\x6e\164\x72\157\x6c\154\145\x72" => $controller, "\x6d\145\x74\150\x6f\144" => $action); goto IxVJv; tb1Qz: if (!($count > 1)) { goto Zow2s; } goto vpsaQ; YvUUI: return $res; goto HSPyr; z1MQk: Zow2s: goto yOV07; IxVJv: $count = $this->where($condition)->count("\155\157\144\x75\154\145\137\x69\144"); goto tb1Qz; vpsaQ: $condition = array("\x63\x6f\x6e\x74\x72\x6f\154\154\145\x72" => $controller, "\x6d\145\164\x68\157\x64" => $action, "\x70\151\144" => array("\x3c\x3e", 0), "\151\163\x5f\x6d\145\x6e\165" => 1); goto z1MQk; yOV07: $res = $this->where($condition)->find(); goto YvUUI; HSPyr: } }