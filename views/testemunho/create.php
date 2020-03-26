<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testemunho */

$this->title = 'Create Testemunho';
$this->params['breadcrumbs'][] = ['label' => 'Testemunhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testemunho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
