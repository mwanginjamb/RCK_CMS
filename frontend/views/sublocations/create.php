<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sublocations */

$this->title = 'Create Sublocations';
$this->params['breadcrumbs'][] = ['label' => 'Sublocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sublocations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
