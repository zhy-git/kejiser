<?php
return array(
    'index0'=> array(
        'title'=>'房价统计下方广告',        
        'position'=>'首页',
        'fieldkey'=>'index_ad_0',/*这个是配置内容的存储KEY ，不能重复*/
        'place'=> array(
            'barname'=>'设置广告标题',
            'isshow'=>0, /*是否显示*/
        ),
        'setfield'=> array(
            'barname'=> array('type'=> 'text','label'=>'标题', 'default'=>'幻灯广告'),
            'isshow'=> array('type'=> 'radio','label'=>'显示', 'options'=>'不显示|0,显示|1', 'default'=>0)
        ),
        'formfield'=> array(
            'image'=> array('type'=> 'thumb','label'=>'图片' ),
            'url'=> array('type'=> 'text','label'=>'链接' ),
            'appid'=> array('type'=> 'text','label'=>'外联小程序APPID','placeholder'=>'本小程序链接不需要填写' ),
        )
    ),
     'indexlink'=> array(
        'title'=>'首页文字链接',        
        'position'=>'首页',
        'fieldkey'=>'indexlink0',/*这个是配置内容的存储KEY ，不能重复*/
        'place'=> array(
            'barname'=>'快速找房',
            'isshow'=>0, /*是否显示*/
        ),
        'setfield'=> array(
            'barname'=> array('type'=> 'text','label'=>'标题', 'default'=>'快速找房'),
            'isshow'=> array('type'=> 'radio','label'=>'显示', 'options'=>'不显示|0,显示|1', 'default'=>0)
        ),
        'formfield'=> array(
            'txtname'=> array('type'=> 'text','label'=>'文字' ),
            'url'=> array('type'=> 'text','label'=>'链接' ),
            'appid'=> array('type'=> 'text','label'=>'外联小程序APPID','placeholder'=>'本小程序链接不需要填写' ),
        )
    )
);

