<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */

$this->title = $model->number . " " . $model->prov;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="car-view">

    <h1><?= $model->number . " " . $model->prov ?></h1>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['attribute'=>'imp_date','label'=>'วันที่บรรจุ'],
            // ['attribute'=>'exp_date','label'=>'วันที่ถอน'],
            // ['attribute'=>'no','label'=>'ลำดับที่'],
            ['attribute'=>'operator.name','label'=>'ประกอบการ'],
            ['attribute'=>'category.name','label'=>'ประเภท'],
            ['attribute'=>'number','label'=>'เลขทะเบียน'],
            ['attribute'=>'prov','label'=>'จังหวัด'],
            [
                'attribute'=>'vat',
                'label'=>'ภาษี',
                'contentOptions' => ['style'=>'font-weight:bold;color:orange'],
                'value' => function($model){
                    $x = $model->vat;
                    $year = substr($x,2);
                    if(substr($x,0)==1){
                        return "ภาษีขาดเดือน มีนาคม ปี 25" . $year;
                    }else if(substr($x,0)==2){
                        return "ภาษีขาดเดือน มิถุนายน ปี 25" . $year;
                    }else if(substr($x,0)==3){
                        return "ภาษีขาดเดือน กันยายน ปี 25" . $year;
                    }else if(substr($x,0)==4){
                        return "ภาษีขาดเดือน ธันวาคม ปี 25" . $year;
                    }else{
                        return "เกิดข้อผิดพลาด";
                    }
                }
            ],
            // ['attribute'=>'status.name','label'=>'สถานะ'],
            ['attribute'=>'brand.name','label'=>'ยี่ห้อ'],
            // ['attribute'=>'agent.name','label'=>'ตัวแทน'],
            ['attribute'=>'ownership.name','label'=>'ผู้ถือกรรมสิทธิ์'],
            ['attribute'=>'lease.name','label'=>'ผู้เช่าซื้อ'],
            ['attribute'=>'cassis','label'=>'เลขคัสซี'],
            ['attribute'=>'engine','label'=>'เลขเครื่อง'],
            ['attribute'=>'weight','label'=>'น้ำหนัก'],
            ['attribute'=>'total_weight','label'=>'น้ำหนักรวม'],
            //'rate',
            //'conclusion',
            
            // ['attribute'=>'conclusion_detail','label'=>'รายละเอียด'],
            // 'created_at:datetime',
            //['attribute'=>'created_by','format'=>'raw','options'=>created_by==NULL? ],
            'updated_at:datetime'
            //'updated_by',
            // 'creator.username',
            // 'updator.username'
            ////'carPDF',
            //'carLastUpdate',
        ],
    ]) ?>


</div>
