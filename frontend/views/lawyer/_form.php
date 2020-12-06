<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lawyer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lawyer-form">

    <?php $form = ActiveForm::begin(); ?>



    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'full_names')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lskId')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'cellNumber')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type')->dropDownList($lawyerType, ['prompt' => 'Select ..']) ?>
        </div>


        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lawfirmName')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'rating')->dropDownList($rating, ['prompt' =>'Select Rating..']) ?>
        </div>
    </div>


    <?php $form->field($model, 'created_at')->textInput() ?>

    <?php $form->field($model, 'updated_at')->textInput() ?>

    <?php $form->field($model, 'created_by')->textInput() ?>

    <?php $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
