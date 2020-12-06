<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Policestation */

$this->title = 'Create Police Station';
$this->params['breadcrumbs'][] = ['label' => 'Policestations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policestation-create">

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
