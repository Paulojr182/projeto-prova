<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RastreamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rastreamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'placa') ?>

    <?= $form->field($model, 'nome_funcionario') ?>

    <?= $form->field($model, 'data_ocorrencia') ?>

    <?= $form->field($model, 'velocidade_maxima') ?>

    <?php // echo $form->field($model, 'velocidade_registrada_ocorrência') ?>

    <?php // echo $form->field($model, 'diferença_velocidade_permitida_registrada') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
