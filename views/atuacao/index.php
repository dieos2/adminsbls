<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atuação';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?= $this->title ?></h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#"><?= $this->title ?></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Lista</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
                 <?= Html::a('Criar Atuação', ['create'], ['class' => 'btn btn-sm btn-neutral']) ?>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"><?= $this->title ?></h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'texto:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
            <!-- Card footer -->
         
          </div>
        </div>
      </div>
