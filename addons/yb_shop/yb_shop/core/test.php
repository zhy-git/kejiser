<?php
 define("\111\x4e\x5f\x49\x41", ''); define("\x49\x41\x5f\122\x4f\x4f\124", ''); date_default_timezone_set("\101\163\x69\x61\x2f\x63\x68\x6f\x6e\147\161\151\x6e\x67"); define("\x41\120\120\x5f\x50\101\124\x48", __DIR__ . "\57\141\160\x70\x6c\x69\x63\x61\x74\x69\x6f\156\57"); define("\103\117\116\106\137\x50\101\124\110", APP_PATH); define("\x45\x58\124\105\x4e\x44\x5f\120\101\x54\110", __DIR__ . "\57\x65\170\164\145\156\x64\57"); require __DIR__ . "\57\x74\150\151\156\153\160\x68\160\x2f\142\x61\x73\x65\56\160\x68\160"; require EXTEND_PATH . "\x57\170\160\141\171\57\x57\x78\120\141\x79\x2e\x41\160\151\x2e\x70\150\x70"; require __DIR__ . "\57\141\160\160\154\x69\x63\x61\x74\151\157\x6e\x2f\141\x64\x6d\151\156\57\163\145\x72\x76\151\x63\145\57\x41\x6c\x69\x79\x75\156\123\x65\162\166\151\x63\x65\56\160\x68\160"; require __DIR__ . "\57\141\x70\x70\154\x69\143\x61\x74\x69\157\156\x2f\x61\144\155\151\x6e\x2f\x73\145\162\166\x69\x63\145\x2f\x50\x72\151\156\x74\x65\x72\123\145\x72\166\151\143\x65\x2e\160\150\x70"; use app\admin\service\PrinterService; use think\config; use think\Db; use think\Log; goto iGb3c; PNs96: $pp = new PrinterService(30, 76, "\x6f\x72\144\145\x72", 0); goto nuizr; QWDgv: Config::load($filename, "\x64\141\x74\x61\x62\141\x73\145"); goto PNs96; iGb3c: $filename = APP_PATH . "\x64\x61\164\141\x62\141\163\x65\x2e\x70\150\160"; goto QWDgv; nuizr: $pp->print_order();