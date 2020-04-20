<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BillSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pk_an')->label('เลขที่ใบเสร็จ') ?>

    <?php // $form->field($model, 'billID') ?>

    <?= $form->field($model, 'operID')->dropDownList(
         backend\models\Operator::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- Select Operator --'])->label('ประกอบการ') ?>

    <?php // $form->field($model, 'billDate') ?>

    <?php // $form->field($model, 'cusID') ?>

    <?php // echo $form->field($model, 'cusType') ?>

    <?php  echo $form->field($model, 'cusName')->label('ชื่อลูกค้า') ?>

    <?php  echo $form->field($model, 'carNumber')->label('เลขทะเบียน') ?>

    <?php // echo $form->field($model, 'billAmount') ?>

    <?php // echo $form->field($model, 'billStatus') ?>

    <?php // echo $form->field($model, 'carNote') ?>

    <?php // echo $form->field($model, 'datePrice') ?>

    <?php // echo $form->field($model, 'dtEdit') ?>

    <?php // echo $form->field($model, 'edFrom') ?>

    <?php // echo $form->field($model, 'memID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
