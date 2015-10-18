<?php

namespace app\modules\main\controllers;

use Yii;
use app\modules\main\controllers\BaseController;

class IndexController extends BaseController
{

    public function actionIndex()
    {

        // Yii::$app->response->sendFile('README.md');

        $sql = 'select * from user';
        var_dump(Yii::$app->db->createCommand($sql)->queryAll());
        // var_dump(Yii::$app->user->isGuest);
        // $file = __FILE__;
        // return $this->render('index', ['file' => $file]);
    }

}
