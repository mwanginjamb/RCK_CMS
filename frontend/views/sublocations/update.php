<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sublocations */

$this->title = 'Update Sublocations: ' . $model->SubLocationID;
$this->params['breadcrumbs'][] = ['label' => 'Sublocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SubLocationID, 'url' => ['view', 'id' => $model->SubLocationID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sublocations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
