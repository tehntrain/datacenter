<?php
use miloschuman\highcharts\Highcharts;

?>

<?php
Highcharts::widget([
    'scripts' => [
        'highcharts-more',
       'themes/grid'
    //'modules/exporting',
    ]
]);
$this->registerJsFile('./js/chart_dial.js');
?>

<div class="well well-material">
    
    <h2>Dash Board</h2>
    
</div>
<div class="alert alert-danger">
    AAAA
</div>

<div class="row">
    <div class="col-sm-4" style="text-align: center;">
        <?php        
        $target = 503;
        $result = 102;
        $persent = 0.00;
        if ($target > 0) {
            $persent = $result / $target * 100;
            $persent= number_format($persent, 2);
        }
        $base = 90;
        $this->registerJs("
                        var obj_div=$('#ch1');
                        gen_dial(obj_div,$base,$persent);
                    ");
        ?>
       <h4>หญิงมีครรภ์ได้รับการฝากครรภ์ครั้งแรก<br>ก่อน 12 สัปดาห์</h4>
        <div id="ch1"></div>
    </div>
     <div class="col-sm-4" style="text-align: center;">
        <?php        
        $target = 503;
        $result = 102;
        $persent = 0.00;
        if ($target > 0) {
            $persent = $result / $target * 100;
            $persent= number_format($persent, 2);
        }
        $base = 90;
        $this->registerJs("
                        var obj_div=$('#ch2');
                        gen_dial(obj_div,$base,$persent);
                    ");
        ?>
         <h4>หญิงมีครรภ์ได้รับการตรวจสุขภาพช่องปาก<br> สำนักทันตะ</h4>
        <div id="ch2"></div>
        
    </div>
    
     <div class="col-sm-4" style="text-align: center;">
        <?php        
        $target = 503;
        $result = 102;
        $persent = 0.00;
        if ($target > 0) {
            $persent = $result / $target * 100;
            $persent= number_format($persent, 2);
        }
        $base = 90;
        $this->registerJs("
                        var obj_div=$('#ch3');
                        gen_dial(obj_div,$base,$persent);
                    ");
        ?>
       <h4>หญิงตั้งค์ครรภ์ได้รับการฝากครรภ์<br>5 ครั้ง</h4>
        <div id="ch3"></div>
    </div>
</div>
