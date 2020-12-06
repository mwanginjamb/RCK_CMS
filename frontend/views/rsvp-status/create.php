<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RsvpStatus */

$this->title = 'Create Rsvp Status';
$this->params['breadcrumbs'][] = ['label' => 'Rsvp Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsvp-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
