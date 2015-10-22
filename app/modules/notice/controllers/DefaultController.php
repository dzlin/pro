<?php

namespace app\modules\notice\controllers;

use app\core\yii\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
