<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rastreamento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rastreamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rastreamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'placa',
            'nome_funcionario',
            'data_ocorrencia',
            'velocidade_maxima',
            'velocidade_registrada_ocorrência',
            'diferença_velocidade_permitida_registrada',
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>
