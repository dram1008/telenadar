<?php

/* @var $this yii\web\View */
/* @var $item \app\models\Product */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $item->getField('name');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <img src="<?= $item->getField('image') ?>" width="100%" class="thumbnail" />
        </div>
        <div class="col-lg-8">
            <?= $item->getField('content') ?>
            <hr>
            <a
                href="<?= \yii\helpers\Url::to(['shop/buy', 'id' => $item->getId()]) ?>"
                class="btn btn-success btn-lg"
                style="width: 100%"
                >
                <?= Yii::$app->formatter->asDecimal($item->getField('price'), 0) ?> руб.
            </a>
        </div>
    </div>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/3.jpg', true),
        'title'       => 'Леьная академия вознесенных владык',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>
</div>
