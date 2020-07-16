<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calificacion */

$this->title = 'Update Calificacion: ' . $model->id_calificacion;
$this->params['breadcrumbs'][] = ['label' => 'Calificacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_calificacion, 'url' => ['view', 'id' => $model->id_calificacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calificacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
