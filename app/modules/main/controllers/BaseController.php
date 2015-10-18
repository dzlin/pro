<?php

namespace app\modules\main\controllers;

use app\core\yii\Controller;

class BaseController extends Controller
{

    /**
     * 设置错误action
     * 
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

}
