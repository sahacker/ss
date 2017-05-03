<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perm */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Perm',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->pid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="perm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
