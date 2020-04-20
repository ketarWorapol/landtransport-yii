<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LeaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lease-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lease', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'prefix',
            'name',
            'idcard',
            'phone',
            //'address_id',
            //'ems_id',
            //'pdf',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
