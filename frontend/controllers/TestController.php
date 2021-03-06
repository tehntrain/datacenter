<?php

namespace frontend\controllers;
use frontend\models\Member;

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
    
    public function actionTest3($name,$lname){
        return $this->render('test3',[
            'name'=>$name,
            'lname'=>$lname
        ]);
    }
    
    public function actionTest4(){
        
        return $this->render('test4',[
            
        ]);
        
    }
    
     public function actionTest5($param1=null,$param2=null){
        
        return $this->render('test5',[
            'param1'=>$param1,
            'param2'=>$param2
        ]);
        
    }
    
    public function actionMember(){
        $model = new Member;
        
        $model->name = "BBB";
        $model->lname="จาดยางโทน";
        $model->age= 35;
        $model->sex = "2";
        
        if($model->save()){
            echo "Insert Success";
        }else{
            echo "Not Insert";
        }
    }
    
    public function actionUpdatemember(){
        
        $model = Member::findOne(2);
        $model->name = "ตัวที่ 2 ถูก update";
        $model->save();
    }
    
    public function actionDelmember(){
        Member::findOne(2)->delete();
    }
    

}

//จบ class
