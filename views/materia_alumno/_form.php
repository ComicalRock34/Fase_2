<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriaAlumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materia-alumno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_materia')->textInput() ?>

    <?= $form->field($model, 'id_alumno')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
