<?php

/* @var $this yii\web\View */
/* @var $item \app\models\Category */
/* @var $items array tel_product.* */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $item->getField('name');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?php foreach($items as $i) { ?>
        <?php $url = \yii\helpers\Url::to(['shop/product', 'id' => $i['id'] ]) ?>
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $url ?>"><img src="<?= $i['image'] ?>" width="100%" class="thumbnail" /></a>
            </div>
            <div class="col-lg-8">
                <a href="<?= $url ?>"><?= $i['name'] ?></a>
            </div>
        </div>
    <?php } ?>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/3.jpg', true),
        'title'       => 'Леьная академия вознесенных владык',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>
</div>
