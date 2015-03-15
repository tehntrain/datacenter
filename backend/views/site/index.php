<div class="row">
    
    <div class="col-sm-4">
        <?php
        $route_user = Yii::$app->urlManager->createUrl('user/index');
        ?>
        <a href="<?=$route_user?>" class="btn btn-success">
            <i class="glyphicon glyphicon-user"></i>
            จัดการผู้ใช้
        </a>        
    </div>
    
    <div class="col-sm-4">
        <a href="#" class="btn btn-danger">
            <i class="glyphicon glyphicon-refresh"></i>
            ประมวลผลรายงาน
        </a>        
    </div>
    
</div>