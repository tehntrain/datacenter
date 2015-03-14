<?php

namespace frontend\controllers;
use yii;

class ReportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionReport1(){
        
        $sql = "select * from member";
        $rawData = yii::$app->db->createCommand($sql)->queryAll();
        
        //print_r($rawData);        
        //return;
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE,
        ]);
        
        
        return $this->render('report1',[
            // เตรียมส่งค่า
            'dataProvider'=>$dataProvider
        ]);
    }

}
