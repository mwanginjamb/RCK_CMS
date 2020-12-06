<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RefugeeCamp */

$this->title = 'Create Refugee Camp';
$this->params['breadcrumbs'][] = ['label' => 'Refugee Camps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refugee-camp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'counties' => $counties,
        'subCounties' => $subCounties
    ]) ?>

</div>
