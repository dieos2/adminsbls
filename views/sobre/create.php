<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sobre */

$this->title = 'Create Sobre';
$this->params['breadcrumbs'][] = ['label' => 'Sobres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sobre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
