<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        echo "Test1";
        echo "<hr>";
        $data1 = array(0, 2, 1, 3);
        $data2 = [0, 2, 1, 3];

        $data3 = ['1' => 'a', '2' => 'b', '4' => '0'];

        print_r($data1);
        echo "<hr>";
        print_r($data2);
        echo "<hr>";
        print_r($data3);
    }

// จบ test1

    public function actionTest2() {
        
        $cid = '3651000030203';
        
        return $this->render('test2', [
                    'name' => 'อุเทน',
                    'lname' => 'จาดยางโทน',
                    'sex' => 'ชาย',
                    'bdate'=>date('Y-m-d'),
                    'cid'=>$cid
        ]);
    }
    
    public function actionTest3($name){
        return $this->render('test3',[
            'name'=>$name
        ]);
    }

}

//จบ class
