<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ownership */

$this->title = 'Update Ownership: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ownerships', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ownership-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
