<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rastreamento */

$this->title = 'Create Rastreamento';
$this->params['breadcrumbs'][] = ['label' => 'Rastreamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rastreamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
