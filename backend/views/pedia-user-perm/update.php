<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaUserPerm */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */

$this->title = 'Update Pedia User Perm: ' . $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia User Perms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pid, 'url' => ['view', 'id' => $model->pid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-user-perm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
