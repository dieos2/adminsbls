<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\citacao */

$this->title = 'Update Citacao: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Citacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="citacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
