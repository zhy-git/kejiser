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

class TemplateNotFoundException extends \RuntimeException
{
    protected $template;

    public function __construct($message, $template = '')
    {
        $this->message  = $message;
        $this->template = $template;
    }

    /**
     * 获取模板文件
     * @access public
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
