<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rastreamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rastreamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'placa')->textInput() ?>

    <?= $form->field($model, 'nome_funcionario')->textInput() ?>

    <?= $form->field($model, 'data_ocorrencia')->textInput() ?>

    <?= $form->field($model, 'velocidade_maxima')->textInput() ?>

    <?= $form->field($model, 'velocidade_registrada_ocorrência')->textInput() ?>

    <?= $form->field($model, 'diferença_velocidade_permitida_registrada')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
