<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tugas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengampu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deadline')->input('date') ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classroom')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
