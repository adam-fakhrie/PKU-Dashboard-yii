<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kuliah $model */

$this->title = 'Create Kuliah';
$this->params['breadcrumbs'][] = ['label' => 'Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuliah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
