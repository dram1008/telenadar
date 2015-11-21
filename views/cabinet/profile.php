<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\models\UnionCategory;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\Form\Profile */

$this->title = 'Редактирование профиля';


?>
<div class="container">
    <div class="col-lg-12">
        <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Успешно обновлено.
            </div>

        <?php else: ?>

            <?php $form = ActiveForm::begin([
                'id'      => 'contact-form',
                'options' => ['enctype' => 'multipart/form-data'],
                'layout'  => 'horizontal',
            ]); ?>
            <?= $form->field($model, 'name_first')->label('Имя') ?>
            <?= $form->field($model, 'name_last')->label('Фамилия') ?>
            <?= $model->field($form, 'avatar') ?>


            <hr class="featurette-divider">
            <div class="form-group">
                <?= Html::submitButton('Обновить', [
                    'class' => 'btn btn-default',
                    'name'  => 'contact-button',
                    'style' => 'width: 100%;',
                ]) ?>
            </div>
            <?php ActiveForm::end(); ?>

        <?php endif; ?>
    </div>
</div>



