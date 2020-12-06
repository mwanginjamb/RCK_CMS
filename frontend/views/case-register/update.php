<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CaseRegister */

$this->title = 'Update Case Register: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Case Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="case-register-update">

    <div class="card">
        <div class="card-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
                'lawyers' => $lawyers,
                'casetypes' => $casetypes
            ]) ?>
        </div>
    </div>

</div>
