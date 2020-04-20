<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\BillDetail;
use common\models\Lists;

/* @var $this yii\web\View */
/* @var $model backend\models\Bill */

$this->title = 'ใบเสร็จเลขที่ '.$model->billID;
$this->params['breadcrumbs'][] = ['label' => 'Bills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bill-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pk_an], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pk_an], [
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
            //'pk_an',
            'billID',
            //'operID',
            'billDate',
            //'cusID',
            //'cusType',
            'cusName',
            'carNumber',
            'billAmount',
            'billStatus',
            'carNote',
            //'datePrice',
            //'dtEdit',
            //'edFrom',
            //'memID',
        ],
    ]) ?>
    <div class="table-responsive card">
        <div class="card-header"><h2>รายละเอียดบิล</h2></div>
        <div class="card-body">
            <table class="card table table-hover border-primary" >
                <thead class="bg-blue-gradient ">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">รายการ</th>
                        <th class="text-center">จำนวนเงิน</th>
                    </tr>
                </thead>
                <?php
                    //$dummy=$model->pk_an; //dummy คือ เลขที่ใบเสร็จ
                    //$models = \app\models\Sale::find()->where(['invoice_id' => $invoice->id])->all();
                    $models = BillDetail::find()->where(['billID'=>$model->pk_an])->orderBy('billNo')->all();
                    
                    //echo $model->pk_an.'-fuckoff ';
                     
                    //<?= count($models)  นับจำนวนแถว
                foreach ($models as $modelz) {
                        $dummy = Lists::find()->where(['id'=>$modelz->listID])->all(); 
                        foreach ($dummy as $dummys) {
                    ?>
                    <tr>
                        <td  class="text-center"><?= number_format($modelz->billNo) ?></td>
                        <td><?= $dummys->name ?></td>
                        <td class="text-right"><?= $modelz->listPrice ?></td>
                    </tr>
                    <?php
                        }
                       }
                    ?>
                    <tr class="bg-blue-gradient">
                        <td colspan="3">รวมทั้งหมด <span class="size-large pull-right"><?= number_format($model->billAmount,2) ?></span></td>
                    </tr>
            </table>
        </div>
    </div>
</div>
