<?php

/**
 * 模块配置
 */
return [
    'main' => [
        'class' => 'app\modules\main\Main',
    ],
    'user' => [
        'class' => 'app\modules\user\User',
    ],
    'notice' => [
        'class' => 'app\modules\notice\Notice',
    ],
    'gridview' => [
        'class' => '\kartik\grid\Module'
    // enter optional module parameters below - only if you need to  
    // use your own export download action or custom translation 
    // message source
    // 'downloadAction' => 'gridview/export/download',
    // 'i18n' => []
    ],
];
