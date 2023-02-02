<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TugasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tugas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'materi') ?>

    <?= $form->field($model, 'pengampu') ?>

    <?= $form->field($model, 'deadline') ?>

    <?= $form->field($model, 'catatan') ?>

    <?= $form->field($model, 'classroom') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
