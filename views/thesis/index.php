<?php

use app\models\Thesis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ThesisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Thesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thesis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Thesis', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Thesis', ['view'], ['class' => 'btn btn-primary']) ?>

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl',
            'evaluasi',
            'catatan',
            //'user',
            //'id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Thesis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
