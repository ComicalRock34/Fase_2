<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Materia_alumnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materia Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materia-alumno-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Materia Alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_materia_alumno',
            'id_materia',
            'id_alumno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
