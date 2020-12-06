<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrainingTarget */

$this->title = 'Create Training Target';
$this->params['breadcrumbs'][] = ['label' => 'Training Targets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-target-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
