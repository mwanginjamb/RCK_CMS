<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lawyer */

$this->title = 'Create Lawyer';
$this->params['breadcrumbs'][] = ['label' => 'Lawyers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Add Lawyer', 'url' => ['create']];
?>
<div class="lawyer-create">


    <div class="card">
        <div class="card-header">
            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
                'lawyerType' =>  $lawyerType,
                'rating' => $rating
            ]) ?>
        </div>
    </div>




</div>
