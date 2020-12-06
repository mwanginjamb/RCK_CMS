<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RsvpStatus */

$this->title = 'Update Rsvp Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsvp Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsvp-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
