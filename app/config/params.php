<?php

/**
 * 一些参数配置
 */
return [
    // 管理员邮箱
    'adminEmail' => 'zhanglindeng@163.com',
    // 百度编辑器配置
    'ueditor' => [
        'name' => 'ueditor',
        'clientOptions' => [
            //编辑区域大小
            'initialFrameHeight' => '450',
            //设置语言 中文为 zh-cn
            'lang' => 'zh-cn',
            //定制菜单
            'toolbars' => [
                [
                    'fullscreen', 'undo', 'redo', '|',
                    'fontfamily', 'fontsize',
                    'bold', 'italic', 'underline', 'fontborder',
                    'strikethrough', 'superscript',
                    'removeformat', 'formatmatch', 'autotypeset',
                    'blockquote', 'pasteplain', '|',
                    'forecolor', 'backcolor', '|',
                    'lineheight', '|', 'inserttable', //插入表格
                    'indent', '|', 'justifyleft', //居左对齐
                    'justifyright', //居右对齐
                    'justifycenter', //居中对齐
                    'justifyjustify', //两端对齐
                    'insertimage', //多图上传
                ],
            ]]
    ],
    // 百度编辑器文件上传文件
    'ueditorUploadDir' => 'data/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}',
];
