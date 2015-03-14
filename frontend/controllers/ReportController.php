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
        
        $sql = "SELECT p.HOSPCODE,chospital_amp.hosname,
count(DISTINCT p.pid,p.HOSPCODE) as 'จำนวนประชากรที่ได้รับ dTc ทั้งหมด' ,
sum(CASE WHEN p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and epi.HOSPCODE=epi.VACCINEPLACE THEN '1' ELSE '0' END) AS 'รับที่หน่วยบริการนี้(ในกลุ่ม)',
sum(CASE WHEN p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and epi.HOSPCODE=epi.VACCINEPLACE THEN '1' ELSE '0' END) AS 'รับที่หน่วยบริการนี้(นอกกลุ่ม)',
sum(CASE WHEN p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and epi.HOSPCODE!=epi.VACCINEPLACE THEN '1' ELSE '0' END) AS 'รับที่หน่วยบริการแห่งอื่น(ในกลุ่ม)',
sum(CASE WHEN p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and epi.HOSPCODE!=epi.VACCINEPLACE THEN '1' ELSE '0' END) AS 'รับที่หน่วยบริการแห่งอื่น(นอกกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' THEN '1' ELSE '0' END) AS 'คนไทย(ในกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' THEN '1' ELSE '0' END) AS 'คนไทย(นอกกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31'THEN '1' ELSE '0' END) AS 'ต่างด้าว(ในกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31'THEN '1' ELSE '0' END) AS 'ต่างด้าว(นอกกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and p.typearea in (1,3) THEN '1' ELSE '0' END) AS 'คนไทยในพื้นที่(ในกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and p.typearea in (1,3) THEN '1' ELSE '0' END) AS 'คนไทยในพื้นที่(นอกกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and p.typearea not in (1,3) THEN '1' ELSE '0' END) AS 'คนไทยนอกพื้นที่(ในกลุ่ม)',
sum(CASE WHEN p.NATION='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and p.typearea not in (1,3) THEN '1' ELSE '0' END) AS 'คนไทยนอกพื้นที่(นอกกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and p.typearea in (1,3) THEN '1' ELSE '0' END) AS 'ต่างด้าวในพื้นที่(ในกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and p.typearea in (1,3) THEN '1' ELSE '0' END) AS 'ต่างด้าวในพื้นที่(นอกกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH BETWEEN '1965-01-01' and '1995-12-31' and p.typearea not in (1,3) THEN '1' ELSE '0' END) AS 'ต่างด้าวนอกพื้นที่(นอกกลุ่ม)',
sum(CASE WHEN p.NATION!='099' AND p.BIRTH not BETWEEN '1965-01-01' and '1995-12-31' and p.typearea not in (1,3) THEN '1' ELSE '0' END) AS 'ต่างด้าวนอกพื้นที่(นอกกลุ่ม)'
FROM
person p
LEFT JOIN chospital_amp ON p.HOSPCODE = chospital_amp.hoscode
INNER JOIN epi ON p.HOSPCODE=epi.HOSPCODE and p.pid=epi.PID
where epi.DATE_SERV between '2014-10-01' and '2015-09-30' and epi.VACCINETYPE='901'
AND p.DISCHARGE = '9' 
group by p.HOSPCODE";
        
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
