<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProfileSkills */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Profile Skills',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profile Skills'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="profile-skills-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
