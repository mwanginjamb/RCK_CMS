<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Casestatus */

$this->title = 'Create Case Status';
$this->params['breadcrumbs'][] = ['label' => 'Case status', 'url' => ['index']];

?>
<div class="casestatus-create">



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
