<?php

use app\models\Kegiatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KegiatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kegiatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kegiatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kegiatan', ['create'], ['class' => 'btn btn-success']) ?> 
        <?= Html::a('View Kegiatan', ['view'], ['class' => 'btn btn-primary']) ?> 

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="card-body p-0">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'tgl',
                'kegiatan',
                'catatan',
                'id',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Kegiatan $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>


</div>