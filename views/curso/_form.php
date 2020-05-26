<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitulo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'foto')->fileInput() ?>
    <?= $form->field($model, 'objetivo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publicoAlvo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargahoraria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>
      
            <?= $form->field($model, 'online')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
