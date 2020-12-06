<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Police */

$this->title = 'Create Police';
$this->params['breadcrumbs'][] = ['label' => 'Polices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="police-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'policeStations' => $policeStations
    ]) ?>

</div>
