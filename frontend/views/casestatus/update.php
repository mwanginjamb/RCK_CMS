<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Casestatus */

$this->title = 'Update Casestatus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Casestatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="casestatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
