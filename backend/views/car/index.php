<?php

use yii\helpers\Html;
//use yii\grid\GridView;

use yii\bootstrap\Modal;
use prawee\widgets\ButtonAjax;
use kartik\export\ExportMenu;
use kartik\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //<?= Html::a('<i class="fa fa-plus"></i> Create Product', ['create'], ['class' => 'btn btn-success']) 
    ?>
    <p>
        
        <?php
             echo ButtonAjax::widget([
                'name'=>'<i class="fa fa-plus"> Create</i>',
                'route'=>['create'],
                'modalId'=>'#main-modal',
                'modalContent'=>'#main-content-modal',
                'options'=>[
                    'class'=>'btn btn-success',
                    'title'=>'Button for create application',                    
                ]
            ]);

            Modal::begin(['id'=>'main-modal','size'=>'modal-lg','header'=>'<h2>เพิ่มข้อมูล</h2>']);
            echo '<div id="main-content-modal"></div>';
            Modal::end();
            
            
            
        ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <?php
                    echo ExportMenu::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        ['label'=>'ประกอบการ','attribute'=>'operator.name'],
                        ['label'=>'ประเภท','attribute'=>'category.name'],
                        ['label'=>'ลำดับ','attribute'=>'no'],
                        ['label'=>'เลขทะเบียน','attribute'=>'number'],
                        ['label'=>'จว.','attribute'=>'prov'],
                        ['label'=>'งวด','attribute'=>'vat'],
                        ['label'=>'สถานะ','attribute'=>'status.name'],
                        ['label'=>'ตัวแทน','attribute'=>'agent.name'],
                        ['label'=>'ผู้ถือกรรมสิทธิ์','attribute'=>'ownership.name'],
                        ['label'=>'ผู้เช่าซื้อ','attribute'=>'lease.name'],
                        ['class' => 'yii\grid\ActionColumn']],
                    'dropdownOptions' => [
                        'label' => 'Export All',
                        'class' => 'btn btn-warning pull-right'
                    ],
                    'exportConfig'=>[
                        ExportMenu::FORMAT_EXCEL=>false,
                    ]
                ]);            
            ?>
        </div>        
    </div>
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'rowOptions'=>function($model){
                $flag = $model->status_id;
                if($flag==3 || $flag==2 || $flag==19 || $flag==18){
                    return ['class'=>'danger'];
                }else if($flag==14){
                    return ['class'=>'warning'];
                }else if($flag==12 || $flag==13){
                    return ['class'=>'success'];
                }
            },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            

            //'id',
            //'imp_date',
            //'exp_date',
            
            ['label'=>'ประกอบการ','attribute'=>'operator.name'],
            ['label'=>'ประเภท','attribute'=>'category.name'],
            ['label'=>'ลำดับ','attribute'=>'no'],
            ['label'=>'เลขทะเบียน','attribute'=>'number'],
            ['label'=>'จว.','attribute'=>'prov'],
            ['label'=>'งวด','attribute'=>'vat'],
            ['label'=>'สถานะ','attribute'=>'status.name'],
            //'brand_id',
            ['label'=>'ตัวแทน','attribute'=>'agent.name'],
            ['label'=>'ผู้ถือกรรมสิทธิ์','attribute'=>'ownership.name'],
            //'lease_id',
            //'cassis',
            //'engine',
            //'weight',
            //'total_weight',
            //'rate',
            //'conclusion',
            //'conclusion_detail',
            //'created_at',
            //'created_by',
            //'updated_at',
            //'updated_by',
            //'carPDF',
            //'carLastUpdate',

            ['class' => 'yii\grid\ActionColumn']],
    ]) ?>


</div>
<?php Modal::begin([
        'id' => 'activity-modal',
        'header' => '<h4 class="modal-title">สมาชิก</h4>',
        'size'=>'modal-lg',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        Modal::end();
        ?>
<?php $this->registerJs('
        function init_click_handlers(){
            $("#activity-create-link").click(function(e) {
                    $.get(
                        "create",
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("เพิ่มข้อมูลสมาชิก");
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            $(".activity-view-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    $.get(
                        "view",
                        {
                            id: fID
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("เปิดดูข้อมูลสมาชิก");
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            $(".activity-update-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    $.get(
                        "update",
                        {
                            id: fID
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("แก้ไขข้อมูลสมาชิก");
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            
        }
        init_click_handlers(); //first run
        $("#customer_pjax_id").on("pjax:success", function() {
          init_click_handlers(); //reactivate links in grid after pjax update
        });');?>
