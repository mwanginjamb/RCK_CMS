<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CaseRegister */

$this->title = 'Create Case Register';
$this->params['breadcrumbs'][] = ['label' => 'Case Registers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="case-register-create">



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
