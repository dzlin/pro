<?php

namespace app\modules\main\actions;

use yii\base\Action;
use kartik\helpers\Html;
use kartik\helpers\Enum;

class Kartik extends Action
{

    public function init()
    {
//        echo __METHOD__;
        parent::init();
    }

    public function run()
    {
//        echo __METHOD__;
        $this->test();
    }

    private function test()
    {
        echo Html::icon('cloud');
//        echo Enum::properize('Chris');
        echo Enum::isEmpty($var);
    }

}
