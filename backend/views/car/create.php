<?php

use yii\helpers\Html;
use backend\models\Agent;
use backend\models\Brand;
use backend\models\Lease;
use backend\models\Status;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use backend\models\Category;
use backend\models\Operator;
use backend\models\Ownership;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */

$this->title = 'Create Car';
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-create">

    <?php $form = ActiveForm::begin();?>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-2"><?= $form->field($model, 'imp_date')->textInput()->label('วันที่บรรจุ') ?></div>
        <div class="col-md-2"><?= $form->field($model, 'exp_date')->textInput()->label('วันที่ถอน') ?></div>
    </div>
    
    <div class="row">
        <div class="col-md-3"><?= $form->field($model, 'operator_id')->dropDownList(Operator::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- กรุณาเลือก ประกอบการ --'])->label('ประกอบการ') ?></div>
        <div class="col-md-3"><?= $form->field($model, 'category_id')->dropDownList(Category::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- กรุณาเลือก ประเภทรถ --'])->label('ประเภทรถ') ?>  </div>
        <div class="col-md-2"><?= $form->field($model, 'no')->textInput()->label('ลำดับ') ?></div>
        <div class="col-md-2"><?= $form->field($model, 'number')->textInput()->label('เลขทะเบียน') ?></div>
        <div class="col-md-2"><?= $form->field($model, 'prov')->textInput()->label('จังหวัด') ?></div>
    </div>    
    
    <div class="row">
        <div class="col-md-2"><?= $form->field($model, 'vat')->textInput()->label('งวดภาษี') ?></div>
        <div class="col-md-2"><?= $form->field($model, 'status_id')->dropDownList(Status::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- กรุณาเลือก สถานะ --'])->label('สถานะ') ?> </div>
        <div class="col-md-2"><?= $form->field($model, 'brand_id')->dropDownList(Brand::find()->select(['name'])->indexBy('id')->column(),['prompt'=>'-- กรุณาเลือก ยี่ห้อ --'])->label('ยี่ห้อ') ?></div>
        <div class="col-md-3">
            <?php 
                echo "<label style='margin:3 0 3 0;'>ตัวแทน</label></br>". Select2::widget([
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
        <div class="col-md-3">
            <?php
                echo "<label style='margin:10 0 3 0;'>ผู้ถือกกรมสิทธิ์</label></br>". Select2::widget([
                'model' => $model,
                'attribute' => 'ownership_id',
                'data' => Ownership::find()->select(['name'])->indexBy('id')->column(),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ]
            ]);
            ?>
        </div>    
    </div>
    
    <div class="row">
        <div class="col-md-3">
            <?php
                echo "<label style='margin:3 0 3 0;'>ผู้เช่าซื้อ</label></br>". Select2::widget([
                'model' => $model,
                'attribute' => 'lease_id',
                'data' => Lease::find()->select(['name'])->indexBy('id')->column(),
                'options' => ['placeholder' => 'Select a state ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ]
            ]);        
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cassis')->textInput()->label('เลขคัสซี') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'engine')->textInput()->label('เลขเครื่อง') ?>
        </div>
        <div class="col-md-1">
            <?= $form->field($model, 'weight')->textInput()->label('นน.') ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'total_weight')->textInput()->label('น้ำหนักรวม') ?>
        </div>
    </div>
    
    <div class="form-group">
        
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>
<?php ActiveForm::end(); ?>
</div>
