<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pk_an')->textInput() ?>

    <?= $form->field($model, 'billID')->textInput() ?>

    <?= $form->field($model, 'operID')->textInput() ?>

    <?= $form->field($model, 'billDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cusID')->textInput() ?>

    <?= $form->field($model, 'cusType')->textInput() ?>

    <?= $form->field($model, 'cusName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billStatus')->textInput() ?>

    <?= $form->field($model, 'carNote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datePrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtEdit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edFrom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'memID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
