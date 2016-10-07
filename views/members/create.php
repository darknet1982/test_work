<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Members */

$this->title = 'Добавить члена СРО';
$this->params['breadcrumbs'][] = ['label' => 'Члены СРО', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
