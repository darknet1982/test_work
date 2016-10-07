<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Саморегулирующиеся организации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить СРО', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'reg_num',
            'name',
            'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
