<?php

use app\models\Tugas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var app\models\TugasSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */



$this->title = 'Tugas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tugas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tugas', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Tugas', ['view'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showOnEmpty'=> false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'materi',
            'pengampu',
            'deadline',
            'catatan',
            'classroom',
            //'id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tugas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
