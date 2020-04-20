<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\Agent;
use backend\models\Status;
use kartik\select2\Select2;
use backend\models\Category;
use backend\models\Operator;
use backend\models\Ownership;




/* @var $this yii\web\View */
/* @var $model backend\models\CarSearch */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="car-search">
    <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'operator_id')->dropDownList(Operator::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- Select Category --'])->label('ประกอบการ') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'category_id')->dropDownList(Category::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- Select Category --'])->label('ประเภท') ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'status_id')->dropDownList(Status::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- Select Category --'])->label('สถานะ') ?>
        </div>
        <div class="col-sm-3">
            <?=  $form->field($model, 'vat')->label('งวดภาษี') ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3"><?=  $form->field($model, 'number')->label('เลขทะเบียน') ?></div>
        <div class="col-sm-3">
            <label>ตัวแทน</label>
            <?php
                echo Select2::widget([
                    'model' => $model,
                    'attribute' => 'agent_id',
                    'data' => Agent::find()->select(['name'])->indexBy('id')->column(),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ]
                ]);
            ?>
        </div>
        <div class="col-sm-6">
            <?php    
                echo "<label>ผู้ถือกรรมสิทธิ์</label>";
                echo Select2::widget([
                    'model'=>$model,
                    'attribute'=>'ownership_id',
                    'data' => Ownership::find()->select(['name'])->indexBy('id')->column(),
                    'options' => ['placeholder' => 'Select a state ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ]
                ]);
                
                // Using a select2 widget inside a modal dialog
               
            ?>
        </div>
    </div>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'imp_date') ?>

    <?php // echo $form->field($model, 'exp_date') ?>

    <?php // echo $form->field($model, 'no') ?>

    

    
    
    
    
    
    
    
    
    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'prov') ?>

    

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'agent_id') ?>

    <?php // echo $form->field($model, 'ownership_id') ?>

    <?php // echo $form->field($model, 'lease_id') ?>

    <?php // echo $form->field($model, 'cassis') ?>

    <?php // echo $form->field($model, 'engine') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'total_weight') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'conclusion') ?>

    <?php // echo $form->field($model, 'conclusion_detail') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'carPDF') ?>

    <?php // echo $form->field($model, 'carLastUpdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
