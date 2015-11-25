<?php

use yii\helpers\Url;
use app\services\GsssHtml;
use yii\helpers\Html;

$this->title = 'Пользователи';

$this->registerJs(<<<JS
$('.buttonDelete').click(function (e) {
        e.preventDefault();
        if (confirm('Подтвердите удаление')) {
            var id = $(this).data('id');
            ajaxJson({
                url: '/admin/users/' + id + '/delete',
                success: function (ret) {
                    infoWindow('Успешно', function() {
                        $('#newsItem-' + id).remove();
                    });
                }
            });
        }
    });
JS
);

$searchModel = new \app\models\Form\ProfileSearch();
$dataProvider = $searchModel->search(Yii::$app->request->get());
?>

<div class="container">
    <div class="page-header">
        <h1>Пользователи</h1>
    </div>

    <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'tableOptions' => [
            'class' => 'table tableMy table-striped table-hover',
        ],
        'columns'      => [
            'id',
            [
                'header'  => 'Аватар',
                'content' => function ($item) {
                    $image = \yii\helpers\ArrayHelper::getValue($item, 'avatar', '');
                    if ($image == '') return '';

                    return Html::img($image, ['width' => 50]);
                }
            ],
            'email:text:почта',
            'name_first:text:Имя',
            'name_last:text:Фамилия',
            [
                'header'  => 'Член академии?',
                'content' => function ($item) {
                    $is_academy = \yii\helpers\ArrayHelper::getValue($item, 'is_academy', 0);
                    if ($is_academy == 1) {
                        return Html::tag('span', 'Да', ['class' => 'label label-success']);
                    } else {
                        return Html::tag('span', 'Нет', ['class' => 'label label-default']);
                    }
                }
            ],
        ],
    ]) ?>

</div>