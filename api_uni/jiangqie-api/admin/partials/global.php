<?php

/*
 * 酱茄小程序开源版
 * Author: 追格
 * Help document: https://www.zhuige.com/docs/zxfree.html
 * github: https://github.com/zhuige-com/jiangqie_kafei
 * gitee: https://gitee.com/zhuige_com/jiangqie_kafei
 * Copyright ️© 2020-2023 www.zhuige.com All rights reserved.
 */

// 基础设置
CSF::createSection($prefix, array(
    'id'    => 'basic',
    'title' => '基础设置',
    'icon'  => 'fas fa-cubes',
    'fields' => array(

        array(
            'id'          => 'title',
            'type'        => 'text',
            'title'       => '标题',
            'placeholder' => '标题'
        ),

        array(
            'id'          => 'description',
            'type'        => 'text',
            'title'       => '描述',
            'placeholder' => '描述'
        ),

        array(
            'id'          => 'keywords',
            'type'        => 'text',
            'title'       => '关键字',
            'placeholder' => '关键字，英文逗号分隔'
        ),

        array(
            'id'      => 'logo',
            'type'    => 'media',
            'title'   => 'LOGO',
            'library' => 'image',
        ),

        array(
            'id'    => 'app_id',
            'type'  => 'text',
            'title' => '微信 Appid',
        ),

        array(
            'id'    => 'app_secret',
            'type'  => 'text',
            'title' => '微信 AppSecret',
        ),

        array(
            'id'    => 'bd_app_key',
            'type'  => 'text',
            'title' => '百度 App Key',
        ),

        array(
            'id'    => 'bd_app_secret',
            'type'  => 'text',
            'title' => '百度 AppSecret',
        ),

        array(
            'id'    => 'qq_app_id',
            'type'  => 'text',
            'title' => 'QQ App ID',
        ),

        array(
            'id'    => 'qq_app_secret',
            'type'  => 'text',
            'title' => 'QQ AppSecret',
        ),

        array(
            'id'          => 'hide_cat',
            'type'        => 'select',
            'title'       => '隐藏分类',
            'placeholder' => '选择分类',
            'options'     => 'categories',
            'chosen'      => true,
            'multiple'    => true,
        ),

        array(
            'id'    => 'switch_excerpt',
            'type'  => 'switcher',
            'title' => '文章摘要',
            'subtitle' => '文章列表中是否显示摘要?',
            'default' => '1'
        ),

        // array(
        //     'id'    => 'switch_comment',
        //     'type'  => 'switcher',
        //     'title' => '评论',
        //     'subtitle' => '是否开启评论功能?',
        //     'default' => '1'
        // ),

        // array(
        //     'id'    => 'switch_comment_verify',
        //     'type'  => 'switcher',
        //     'title' => '评论审核',
        //     'subtitle' => '评论是否需要审核?',
        //     'default' => '1'
        // ),

        array(
            'id'      => 'default_thumbnail',
            'type'    => 'media',
            'title'   => '默认微缩图',
            'library' => 'image',
        ),

        array(
            'id'    => 'jiangqie_switch_stick',
            'type'  => 'switcher',
            'title' => '置顶功能',
            'subtitle' => '是否开启置顶功能?',
            'default' => '1'
        ),
        
        array(
            'id'    => 'jiangqie_switch_oss',
            'type'  => 'switcher',
            'title' => '小程序码导入媒体库',
            'subtitle' => '使用七牛/阿里/腾讯OSS的需要开启',
            'default' => ''
        ),
    )
));
