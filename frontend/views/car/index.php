<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
// $this->params['breadcrumbs'][] = $this->title;
?>

<?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            
        </div>        
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'imp_date',
            //'exp_date',
            
            // ['label'=>'ประกอบการ','attribute'=>'operator.name'],
            ['label'=>'ประเภท','attribute'=>'category.name'],
            // ['label'=>'ลำดับ','attribute'=>'no'],
            ['label'=>'เลขทะเบียน','attribute'=>'number'],
            ['label'=>'จังหวัด','attribute'=>'prov'],
            [
                'attribute'=>'vat',
                'label'=>'ภาษีขาด',
                'contentOptions' => ['style'=>'font-weight:bold;color:orange'],
                'value' => function($model){
                    $x = $model->vat;
                    $year = substr($x,2);
                    if(substr($x,0)==1){
                        return "มีนาคม 25" . $year;
                    }else if(substr($x,0)==2){
                        return "มิถุนายน 25" . $year;
                    }else if(substr($x,0)==3){
                        return "กันยายน 25" . $year;
                    }else if(substr($x,0)==4){
                        return "ธันวาคม 25" . $year;
                    }else{
                        return "เกิดข้อผิดพลาด";
                    }
                }
            ],
            // ['label'=>'สถานะ','attribute'=>'status.name'],
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

            ['class' => 'yii\grid\ActionColumn', 'template' => '<center><button class="btn btn-secondary">{view} ดูรายละเอียด</button></center>'],
        ],
    ]); ?>


</div>

