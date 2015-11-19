<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Словарь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?=
            \yii\grid\GridView::widget([
                'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => \app\models\Dictionary::query(),
                    'pagination' => [
                        'pageSize' => 20,
                    ],
                ]),
                'columns' => [
                    [
                        'header' => 'Наименование',
                        'content' => function($item) {
                            return Html::a($item['header'], ['site/dictionary_item', 'id' => $item['id']]);
                        },
                    ]
                ],
            ])
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
