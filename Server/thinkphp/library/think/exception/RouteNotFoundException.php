<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( 客服QQ:2327299920 licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin 
// +----------------------------------------------------------------------

namespace think\exception;

class RouteNotFoundException extends HttpException
{

    public function __construct()
    {
        parent::__construct(404);
    }

}
