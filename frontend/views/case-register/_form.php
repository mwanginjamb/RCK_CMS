<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CaseRegister */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="case-register-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'case_type')->dropDownList($casetypes) ?>

    <?= $form->field($model, 'accused_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accussed_idno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complainant_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'court')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'representing_lawyer')->dropDownList($lawyers, ['prompt' => 'lawyer']) ?>

    <?php $form->field($model, 'created_at')->textInput() ?>

    <?php $form->field($model, 'updated_at')->textInput() ?>

    <?php $form->field($model, 'created_by')->textInput() ?>

    <?php $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
