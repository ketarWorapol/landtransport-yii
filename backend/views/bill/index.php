<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BillSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ใบเสร็จ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <button type="button" class="btn btn-danger pull-right">
            ค้างจ่าย <span class="badge badge-light"><i class="fa fa-thumbs-o-down"></i></span>
        </button> 
        <button type="button" class="btn btn-success pull-right">
            จ่ายแล้ว <span class="badge badge-light"><i class="fa fa-thumbs-o-up"></i></span>
        </button>
        
    </div>

  
    <p>
        <?php // Html::a('Create Bill', ['create'], ['class' => 'btn btn-success']) ?>
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
                        ['label'=>'ประกอบการ','attribute'=>'operID','value'=>function($model){
                            if($model->operID==NULL){
                                return 'บิลเก่า';
                            }else if($model->operID==1){
                                return 'เกรซ';
                            }else if($model->operID==2){
                                return 'ทรัพย์';
                            }else if($model->operID==3){
                                return 'ลักษมณ';
                            }else if($model->operID==4){
                                return 'อมรพงษ์';
                            }else if($model->operID==8){
                                return 'ประกอบการลูกค้า';
                            }
                        }],
                        ['label'=>'ชื่อลูกค้า','attribute'=>'cusName'],
                        ['label'=>'ใบเสร็จเลขที่','attribute'=>'billID'],
                        ['label'=>'วันที่ใบเสร็จ','attribute'=>'billDate'],
                        ['label'=>'เลขทะเบียน','attribute'=>'carNumber'],
                        ['label'=>'สถานะ','attribute'=>'billStatus','value'=>function($model){
                            if($model->billStatus==1 || $model->billStatus==2){
                                return 'จ่ายแล้ว';
                            }else return 'ค้างจ่าย';
                        }],
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
        'rowOptions' =>function($model){
                $flag = $model->billStatus;
                if($flag==1||$flag==2){
                    return ['class'=>'success'];
                }else if ($flag==0){
                    return ['class'=>'danger'];
                }
            },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'pk_an',
            ['label'=>'เลขที่ใบเสร็จ','attribute'=>'billID'],
            ['label'=>'ประกอบการ','attribute'=>'operID','value'=>function($model){
                if($model->operID==NULL){
                    return 'บิลเก่า';
                }else if($model->operID==1){
                    return 'เกรซ';
                }else if($model->operID==2){
                    return 'ทรัพย์';
                }else if($model->operID==3){
                    return 'ลักษมณ';
                }else if($model->operID==4){
                    return 'อมรพงษ์';
                }else if($model->operID==8){
                    return 'ประกอบการลูกค้า';
                }
            }],
            ['label'=>'วันที่ใบเสร็จ','attribute'=>'billDate'],
            //'cusID',
            //'cusType',
            ['label'=>'ชื่อลูกค้า','attribute'=>'cusName'],
            ['label'=>'เลขทะเบียน','attribute'=>'carNumber'],
            ['label'=>'จำนวนเงิน','attribute'=>'billAmount'],
            //['label'=>'สถานะ','attribute'=>'billStatus'],
            ['label'=>'หมายเหตุ','attribute'=>'carNote'],
            //'datePrice',
            //'dtEdit',
            //'edFrom',
            //'memID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
