<?php
 goto uzr3v; bl0oR: session_start(); goto PSO9X; Wo6Cl: define($_ENV{"� �"}{"\2"}, $_ENV{"� �"}{"\215\204"}); goto bl0oR; PSO9X: require IA_ROOT . $_ENV{"� �"}{"\176\216"}; goto hZ57M; uzr3v: defined($_ENV{"� �"}{"\xb0\354"}) or exit($_ENV{"� �"}{"\262\356"}); goto Wo6Cl; hZ57M: class Wdl_weihouseModuleSite extends WeModuleSite { public $settings; public $_forms = null; public function __construct() { $adapter = (include IA_ROOT . $_ENV{"� �"}{"\224\21"}); $this->_forms = $adapter[$_ENV{"� �"}{"\226\xa9"}]; } public function module_setting() { goto ELmk8; jyqlQ: $settings = pdo_fetchcolumn($sql, array(":uniacid" => $_W[$_ENV{"� �"}{"\x15\x4f"}], ":module" => "wdl_weihouse")); goto wUqsa; wUqsa: return iunserializer($settings); goto vjtBr; ELmk8: global $_GPC, $_W; goto SBMT2; SBMT2: $sql = $_ENV{"� �"}{"\x8\261"} . tablename($_ENV{"� �"}{"\307\x29"}) . $_ENV{"� �"}{"\xef\207"}; goto jyqlQ; vjtBr: } } ?>