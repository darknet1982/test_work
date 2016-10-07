<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\sro;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Members */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="members-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php  
        $sro_list = Sro::find()->all();
        $items = ArrayHelper::map($sro_list,'id','name');
        $params = [
            'prompt' => 'Выберете СРО'
        ];
    
    ?>
    
    <?=$form->field($model, 'status')->dropDownList([
    'Исключен' => 'Исключен',
    'Является членом ' => 'Является членом ',
    ]);
    ?>
   

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrn')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'date_append')->widget(DatePicker::classname(), [
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'readonly' =>true,
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'autoclose'=>true,

            ],
        ]);?>

    <?= $form->field($model, 'sro_id')->dropDownList($items,$params); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
