<?php
use yii\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'หน้ารายงานหลัก', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานตัวชี้วัดที่ 1';
?>

<div class="well">
    รายงานตัวชี้วัดที่ 1
</div>
<?php
echo GridView::widget([
    'dataProvider'=>$dataProvider
]);


