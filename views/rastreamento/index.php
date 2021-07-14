<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RastreamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rastreamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rastreamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rastreamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'placa',
            'nome_funcionario',
            'data_ocorrencia',
            'velocidade_maxima',
             'velocidade_registrada_ocorrência',
             'diferença_velocidade_permitida_registrada',
             'latitude',
             'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
