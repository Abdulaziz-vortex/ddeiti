<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Videos */

$this->title = Yii::t('app', 'Create Videos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Videos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
