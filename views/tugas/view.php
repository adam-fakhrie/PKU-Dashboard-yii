<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tugas $model */

$this->title = 'Data Tugas';
$this->params['breadcrumbs'][] = ['label' => 'Tugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tugas-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Materi</strong></th>
                    <th><strong>Pengampu</strong></th>
                    <th><strong>Deadline</strong></th>
                    <th><strong>Catatan</strong></th>
                    <th><strong>Classroom</strong></th>
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
                        <td><?= $d->deadline ?></td>
                        <td><?= $d->catatan ?></td>
                        <td><?= $d->classroom ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>