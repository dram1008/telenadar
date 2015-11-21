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
?>

<div class="container">
    <div class="page-header">
        <h1>Пользователи</h1>
    </div>

    <?= \yii\grid\GridView::widget([
      'dataProvider' => new \yii\data\ActiveDataProvider([
          'query' => \app\models\User::query()->orderBy(['id' => SORT_DESC]),
          'pagination' => [
              'pageSize' => 20,
          ],
      ]),
      'columns' => [
          'id',
          [
              'header' => 'Аватар',
              'content' => function($item) {
                  $image = \yii\helpers\ArrayHelper::getValue($item, 'avatar', '');
                  if ($image == '') return '';
                  return Html::img($image, ['width' => 50]);
              }
          ],
          'email:text:почта',
          'name_first:text:Имя',
          'name_last:text:Фамилия',
          [
              'header' => 'Член академии?',
              'content' => function($item) {
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