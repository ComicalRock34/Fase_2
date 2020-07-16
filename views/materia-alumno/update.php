<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MateriaAlumno */

$this->title = 'Update Materia Alumno: ' . $model->id_materia_alumno;
$this->params['breadcrumbs'][] = ['label' => 'Materia Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_materia_alumno, 'url' => ['view', 'id' => $model->id_materia_alumno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materia-alumno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
