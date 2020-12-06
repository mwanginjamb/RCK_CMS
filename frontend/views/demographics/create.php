<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Demographics */

$this->title = 'Create Demographics';
$this->params['breadcrumbs'][] = ['label' => 'Demographics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demographics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
