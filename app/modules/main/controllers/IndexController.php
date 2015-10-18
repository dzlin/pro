<?php

namespace app\modules\main\controllers;

use app\modules\main\controllers\BaseController;
use kucha\ueditor\UEditor;
use Yii;
use Hisune\EchartsPHP\ECharts;

class IndexController extends BaseController
{

    public function actions()
    {
        return [
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                    //图片访问路径前缀
                    //"imageUrlPrefix" => "http://localhost:8005/",
                    //上传保存路径
                    "imagePathFormat" => "data/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}"
                ],
            ]
        ];
        // return array_merge(parent::actions(), $actions);
    }

    public function actionIndex()
    {

        // Yii::$app->response->sendFile('README.md');

        $sql = 'select * from user';
        var_dump(Yii::$app->db->createCommand($sql)->queryAll());
        // var_dump(Yii::$app->user->isGuest);
        // $file = __FILE__;
        // return $this->render('index', ['file' => $file]);
    }

    public function actionEditor()
    {

//        var_dump(Yii::$app);
//        die;

        $ueditor = UEditor::widget(Yii::$app->params['ueditor']);
        return $this->render('editor', [
                    'ueditor' => $ueditor
        ]);
    }

    /**
     * @todo Echart联网才可以使用
     */
    public function actionEchart()
    {
        $chart = new ECharts();
        $chart->tooltip->show = true;
        $chart->legend->data = array('销量');
        $chart->xAxis = array(
            array(
                'type' => 'category',
                'data' => array("衬衫", "羊毛衫", "雪纺衫", "裤子", "高跟鞋", "袜子")
            )
        );
        $chart->yAxis = array(
            array('type' => 'value')
        );
        $chart->series = array(
            array(
                'name' => '销量',
                'type' => 'bar',
                'data' => array(5, 20, 40, 10, 10, 20)
            )
        );
        echo $chart->render('simple-custom-id');
    }

}
