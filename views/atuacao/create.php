<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atuacao */

$this->title = 'Create Atuacao';
$this->params['breadcrumbs'][] = ['label' => 'Atuacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atuacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
