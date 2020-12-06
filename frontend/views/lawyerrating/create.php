<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lawyerrating */

$this->title = 'Create Lawyer Rating';
$this->params['breadcrumbs'][] = ['label' => 'Lawyerratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Add Rating', 'url' => ['create']];
?>
<div class="lawyerrating-create">



    <div class="card">
        <div class="card-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>





</div>
