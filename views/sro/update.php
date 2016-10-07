<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sro */

$this->title = 'Изменить СРО: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Саморегулирующиеся организации', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="sro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
