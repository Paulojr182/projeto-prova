<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rastreamento */

$this->title = 'Update Rastreamento: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rastreamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rastreamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
