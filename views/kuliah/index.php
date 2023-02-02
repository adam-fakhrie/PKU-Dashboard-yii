<?php

use app\models\Kuliah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var app\models\KuliahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kuliahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuliah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kuliah', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Kuliah', ['view'], ['class' => 'btn btn-primary']) ?>

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'materi',
            'pengampu',
            'tgl',
            'keterangan',
            'id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kuliah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
