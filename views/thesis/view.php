<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Thesis $model */

$this->params['breadcrumbs'][] = ['label' => 'Theses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="thesis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    
    </p>

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Tanggal</strong></th>
                    <th><strong>Evaluasi</strong></th>
                    <th><strong>Catatan</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $d->tgl ?></td>
                        <td><?= $d->evaluasi ?></td>
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
