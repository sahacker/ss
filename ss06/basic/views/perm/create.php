<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perm */

$this->title = Yii::t('app', 'Create Perm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
