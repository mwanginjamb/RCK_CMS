<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Refugee */

$this->title = 'Update Refugee: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refugee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'IdTypes' =>  $IdTypes,
        'camps' => $camps ,
        'conflicts' => $conflicts,
        'countries' => $countries,
        'demographics' => $demographics,
        'gender' => $gender
    ]) ?>

</div>
