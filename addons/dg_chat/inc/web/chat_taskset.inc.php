<?php
global $_GPC, $_W;
checklogin();
load()->func('tpl');


include $this->template('chat_taskset');

?>