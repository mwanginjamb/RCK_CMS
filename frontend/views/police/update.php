<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Police */

$this->title = 'Update Police: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Polices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="police-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
