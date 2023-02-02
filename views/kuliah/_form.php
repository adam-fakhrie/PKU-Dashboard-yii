<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Kuliah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kuliah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengampu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl')->input('date') ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
