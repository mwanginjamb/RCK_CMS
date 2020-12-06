<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WorkStation */

$this->title = 'Create Work Station';
$this->params['breadcrumbs'][] = ['label' => 'Work Stations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-station-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
