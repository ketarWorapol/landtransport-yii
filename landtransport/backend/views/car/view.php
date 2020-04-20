<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\models\Car;


/* @var $this yii\web\View */
/* @var $model backend\models\Car */

$this->title = $model->number . " " .  $model->prov;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="car-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['attribute'=>'imp_date','label'=>'วันที่บรรจุ'],
            ['attribute'=>'exp_date','label'=>'วันที่ถอน'],
            ['attribute'=>'no','label'=>'ลำดับที่'],
            ['attribute'=>'operator.name','label'=>'ประกอบการ'],
            ['attribute'=>'category.name','label'=>'ประเภท'],
            ['attribute'=>'number','label'=>'เลขทะเบียน'],
            ['attribute'=>'prov','label'=>'จังหวัด'],
            ['attribute'=>'vat','label'=>'ภาษี'],
            ['attribute'=>'status.name','label'=>'สถานะ'],
            ['attribute'=>'brand.name','label'=>'ยี่ห้อ'],
            ['attribute'=>'agent.name','label'=>'ตัวแทน'],
            ['attribute'=>'ownership.name','label'=>'ผู้ถือกรรมสิทธิ์'],
            ['attribute'=>'lease.name','label'=>'ผู้เช่าซื้อ'],
            ['attribute'=>'cassis','label'=>'เลขคัสซี'],
            ['attribute'=>'engine','label'=>'เลขเครื่อง'],
            ['attribute'=>'weight','label'=>'น้ำหนัก'],
            ['attribute'=>'total_weight','label'=>'น้ำหนักรวม'],
            //'rate',
            //'conclusion',
            
            ['attribute'=>'conclusion_detail','label'=>'รายละเอียด'],
            'created_at:datetime',
            //['attribute'=>'created_by','format'=>'raw','options'=>created_by==NULL? ],
            'updated_at:datetime',
            //'updated_by',
            'creator.username',
            'updator.username'
            ////'carPDF',
            //'carLastUpdate',
        ],
    ]) ?>

</div>
