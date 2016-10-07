<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
//use kartik\grid\GridView ;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Члены СРО';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php/*
$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
    'reg_num',
    'status',
    'name',
    'inn',
    'ogrn',
    'sro_state',

    ['class' => 'yii\grid\ActionColumn'],
];

// Renders a export dropdown menu
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);

// You can choose to render your own GridView separately
*/?>

<div class="members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить члена СРО', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
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
    ]); ?>
</div>
