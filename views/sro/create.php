<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sro */

$this->title = 'Создать СРО';
$this->params['breadcrumbs'][] = ['label' => 'Саморегулирующиеся организации', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
