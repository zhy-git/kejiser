<?php
 namespace app\admin\controller; class Poster extends Base { public function index() { goto Ox6V3; yo2xD: $this->assign("\156\x61\155\x65", $search_text); goto Fuj3F; Ox6V3: $search_text = request()->param("\x6e\x61\x6d\x65", ''); goto yo2xD; Fuj3F: return view(); goto lq1MG; lq1MG: } public function poster_add() { return view(); } public function poster_add1() { return view("\x70\x6f\x73\x74\145\162\x2f\x61\144\144"); } }