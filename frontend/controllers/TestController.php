<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        echo "Test1";
        echo "<hr>";
        $data1 = array(0,2,1,3);
        $data2= [0,2,1,3];
        
        $data3 = ['1'=>'a','2'=>'b','4'=>'0'];
        
        print_r($data1);
        echo "<hr>";
        print_r($data2);
        echo "<hr>";
        print_r($data3);
        
    }

// จบ test1

    public function actionTest2() {

        echo "Test2";
    }

// จบ test1
}

//จบ class
