<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lawyer */

$this->title = 'Update Lawyer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lawyers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lawyer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'lawyerType' =>  $lawyerType,
        'rating' => $rating
    ]) ?>

</div>
