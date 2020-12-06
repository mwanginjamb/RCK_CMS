<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Conflict */

$this->title = 'Register Conflict';
$this->params['breadcrumbs'][] = ['label' => 'Conflicts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Register Conflict', 'url' => ['create']];
?>
<div class="conflict-create">


    <div class="card">
        <div class="card-header">
            <h1 class="card-title"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>




</div>
