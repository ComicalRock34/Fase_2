<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campus */

$this->title = 'Update Campus: ' . $model->id_campus;
$this->params['breadcrumbs'][] = ['label' => 'Campuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_campus, 'url' => ['view', 'id' => $model->id_campus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
