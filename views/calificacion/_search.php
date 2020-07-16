<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalificacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calificacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_calificacion') ?>

    <?= $form->field($model, '1er_parcial') ?>

    <?= $form->field($model, '2o_parcial') ?>

    <?= $form->field($model, '3er_parcial') ?>

    <?= $form->field($model, 'id_materia') ?>

    <?php // echo $form->field($model, 'id_alumno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
