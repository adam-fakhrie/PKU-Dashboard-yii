<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kuliah $model */

// $this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kuliah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       
    </p>


    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Materi</strong></th>
                    <th><strong>Pengampu</strong></th>
                    <th><strong>Tanggal</strong></th>
                    <th><strong>Keterangan</strong></th>
                </tr>
            </thead>
            <tbody> 
                <?php
                $i = 1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $d->materi ?></td>
                        <td><?= $d->pengampu ?></td>
                        <td><?= $d->tgl ?></td>
                        <td><?= $d->keterangan ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</div>
