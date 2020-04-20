<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bill */

$this->title = 'Update Bill: ' . $model->pk_an;
$this->params['breadcrumbs'][] = ['label' => 'Bills', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_an, 'url' => ['view', 'id' => $model->pk_an]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bill-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
