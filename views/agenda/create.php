<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agenda */

$this->title = 'Criar Agenda';
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0"><?= $this->title ?></h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive p-4">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div></div></div></div>
