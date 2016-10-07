<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\export\ExportMenu;
use kartik\grid\GridView ;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Члены СРО';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
    [
                'attribute' => 'reg_num',
                'value' => 'sro.reg_num',
            ],
            'status',
            'name',
            'inn',
            'ogrn',
            [
                'attribute' => 'sro_state',
                'value' => 'sro.state',
            ],

    ['class' => 'yii\grid\ActionColumn'],
];

// Renders a export dropdown menu
/*echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);*/


?>

<div class="members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить члена СРО', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php /*GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'reg_num',
                'value' => 'sro.reg_num',
            ],
            'status',
            'name',
            'inn',
            'ogrn',
            [
                'attribute' => 'sro_state',
                'value' => 'sro.state',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    Yii::t('kvgrid', 'Add Book')*/ 
    ?>

    <?php 
    echo GridView::widget([
    'id' => 'kv-grid',
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'columns'=>$gridColumns,
    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    'pjax'=>true, // pjax is set to always true for this demo
    // set your toolbar
    'toolbar'=> [
        ['content'=>
            Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>'Добавить члена СРО', 'class'=>'btn btn-success', 'onclick'=>'  window.location.href = "'.Yii::getAlias('@web').'/index.php?r=members%2Fcreate"']) . ' '.
            Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax'=>0, 'class'=>'btn btn-default', 'title'=>'Обновить'])
        ],
        '{export}',
        '{toggleData}',
    ],
    // set export properties
    'export'=> [
        'fontAwesome'=>false,
    ],
    // parameters from the demo form
    'bordered'=>true,
    'striped'=>false,
    'condensed'=>true,
    'responsive'=>false,
    'hover'=>true,
    'showPageSummary'=>false,
    'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'<i class="glyphicon glyphicon-book"></i>  Члены СРО',
    ],
    'persistResize'=>false,
    'exportConfig'=>$exportConfig,
]);
    ?>
</div>
