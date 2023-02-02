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
        <?= Html::a('Create Kegiatan', ['create'], ['class' => 'btn btn-success']) ?> <a href="/index-copy">view</a>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Materi</th>
                    <th>Pengampu</th>
                    <th style="width: 40px">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <td><?= $i ?>.</td>
                        <td><?= $d->tgl ?></td>
                        <td><?= $d->kegiatan ?></td>
                        <td><?= $d->catatan ?></td>
                    </tr>
                <?php
                $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>


</div>