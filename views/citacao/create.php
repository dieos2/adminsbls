<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\citacao */

$this->title = 'Create Citacao';
$this->params['breadcrumbs'][] = ['label' => 'Citacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
