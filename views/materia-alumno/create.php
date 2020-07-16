<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MateriaAlumno */

$this->title = 'Create Materia Alumno';
$this->params['breadcrumbs'][] = ['label' => 'Materia Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materia-alumno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
