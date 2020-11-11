<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( 客服QQ:2327299920 licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 盒子云 创始人李俊明 
// +----------------------------------------------------------------------

namespace think\config\driver;

class Json
{
    public function parse($config)
    {
        if (is_file($config)) {
            $config = file_get_contents($config);
        }
        $result = json_decode($config, true);
        return $result;
    }
}
