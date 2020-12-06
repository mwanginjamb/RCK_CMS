<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Refugee */

$this->title = 'Add Refugee';
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Refugee Bio Data', 'url' => ['create']];
?>
<div class="refugee-create">

    <div class="card">
        <div class="card-header">
            <h1 class="header-title"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
                'IdTypes' =>  $IdTypes,
                'camps' => $camps ,
                'conflicts' => $conflicts,
                'countries' => $countries,
                'demographics' => $demographics,
                'gender' => $gender
            ]) ?>
        </div>
    </div>





</div>
