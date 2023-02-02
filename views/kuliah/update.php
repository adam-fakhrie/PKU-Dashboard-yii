<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kuliah $model */

$this->title = 'Update Kuliah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kuliah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
