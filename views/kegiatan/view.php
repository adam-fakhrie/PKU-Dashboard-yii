<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kegiatan $model */

// $this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kegiatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th style="width: 110px">Tanggal</th>
                    <th>Kegiatan</th>
                    <th>Catatan</th>
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
