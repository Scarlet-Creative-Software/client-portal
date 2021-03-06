<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\google_analytics\models\Account */
/* @var $forms array [id => name] of Form models */

$this->title = Yii::t('app', 'Update Form Tracking');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Add-ons'), 'url' => ['/addons']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Google Analytics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Form Tracking') .' '.
    $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="google-analytics-update box box-big box-light">

    <div class="box-header">
        <h3 class="box-title"><?= $this->title ?>
            <span class="box-subtitle"><?= Html::encode($model->id) ?></span>
        </h3>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'forms' => $forms,
    ]) ?>

</div>