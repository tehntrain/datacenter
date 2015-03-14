<?php

use yii\helpers\Html;
?>
<div class="well">
    <h1>หน้าส่งค่าตัวแปร</h1>    
</div>
<p>
    <?php
       
       $route1 = yii::$app->urlManager->createUrl(['test/test3','name'=>'aaa','lname'=>'bbb']);
     
    ?>
    <a href="<?=$route1?>">ไปที่ test/test3</a>
</p>
<p>
    <?=Html::a('ไปที่ test/test5', ['test/test5','param1'=>'aaa','param2'=>'ssss']);
    ?>
</p>
