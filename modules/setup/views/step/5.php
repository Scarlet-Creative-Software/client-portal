<?php

use yii\bootstrap\Html;
use kartik\form\ActiveForm;
use app\helpers\Timezone;

/** @var \yii\web\View $this */
/** @var \app\modules\setup\models\forms\UserForm $model */

$this->title = Yii::t('app', 'Create administrator account');

// Timezone array
$timezones = Timezone::all();

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <?= Yii::t('app', 'Choose language') ?> <?= Html::icon('ok', ['class' => 'text-success']) ?>
            </li>
            <li class="list-group-item">
                <?= Yii::t('app', 'Verify requirements') ?> <?= Html::icon('ok', ['class' => 'text-success']) ?>
            </li>
            <li class="list-group-item">
                <?= Yii::t('app', 'Set up database') ?> <?= Html::icon('ok', ['class' => 'text-success']) ?></li>
            <li class="list-group-item">
                <?= Yii::t('app', 'Install app') ?> <?= Html::icon('ok', ['class' => 'text-success']) ?></li>
            <li class="list-group-item list-group-item-current"><?= Yii::t('app', 'Create admin account') ?></li>
            <li class="list-group-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h4', Yii::t('app', 'Create administrator account'), ['class' => 'step-title']) ?>
        <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_VERTICAL,
        ]); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'timezone')->dropDownList($timezones, ['prompt'=>Yii::t('app', '-Select-')]) ?>
        <div class="form-action">
        <?= Html::submitButton(
            Yii::t('app', 'Create & continue'),
            [
                'class' => 'btn btn-primary',
                'name' => 'create-account',
            ]
        ) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>