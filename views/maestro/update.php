<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maestro */

$this->title = 'Update Maestro: ' . $model->id_maestro;
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_maestro, 'url' => ['view', 'id' => $model->id_maestro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maestro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
