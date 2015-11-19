<?php

/* @var $this yii\web\View */
/* @var $item \app\models\Dictionary */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $item->getField('header');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <?php if ($item->getField('image', '') != '') { ?>
                <img src="<?= $item->getImage() ?>" class="thumbnail" width="100%">
            <?php } ?>
        </div>
        <div class="col-lg-8">
            <?=
            $item->getField('content')
            ?>
        </div>
    </div>

    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/3.jpg', true),
        'title'       => 'Купить генератор Теслы',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>
</div>
