<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( 客服QQ:2327299920  licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin 
// +----------------------------------------------------------------------

namespace think;

// ThinkPHP 引导文件
// 加载基础文件
require __DIR__ . '/base.php';

// 执行应用
App::initCommon();
Console::init();
