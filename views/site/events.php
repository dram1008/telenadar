<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Расписание полетов';
$this->params['breadcrumbs'][] = $this->title;


Yii::$app->session->open();
$functionDay = function($day) {
    $id = null;
    foreach($_SESSION['$events'] as $item) {
        if ($item['day'] == $day) {
            $id = $item['id'];
            break;
        }
    }
    if (is_null($id)) {
        return $day;
    } else {
        return Html::a($day, ['site/events_item', 'id' => $id]);
    }
}

?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <img src="/images/controller/site/diller/diller.jpg" class="thumbnail" width="100%"/>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <?php
            $minm = gmdate('n');
            $miny = gmdate('Y');
            if ($minm == 12) {
                $maxm = 1;
                $maxy = $miny + 1;
            } else {
                $maxm = $minm + 1;
                $maxy = $miny;
            }
            if ($minm < 10) $minm = '0' . $minm;
            if ($maxm < 10) $maxm = '0' . $maxm;
            $min = $miny . '-' . $minm . '-' .  '01';
            $max = $maxy . '-' .  $maxm . '-' .  '01';
            $events = \app\models\Event::query(['between', 'date', $min, $max])->select(['DAY(`date`) as `day`','id'])->orderBy(['date' => SORT_ASC])->all();
            $_SESSION['$events'] = $events;


            /** @var int $dayOfWeek день недели 1-7 начало с пн */
            $dayOfWeek = 1;
            /** @var int $n кол-во недель в отображаемом месяце */
            $n = 5;
            /** @var int $d день месяца от 1 до 31 */
            $d = 1;
            /** @var int $daysInMonth дней всего в месяце */
            $daysInMonth = 31;
            $days = [];
            /** @var int $daysForDayOfWeek кол-во дней до начала недели 0-6 */
            for($daysForDayOfWeek = $dayOfWeek - 1; $daysForDayOfWeek > 0; $daysForDayOfWeek--) {
                $days[0][] = '';
            }
            for($i = 7 - ($dayOfWeek - 1); $i > 0; $i--) {
                $days[0][] = $functionDay($d);
                $d++;
            }
            $nCurrent = 1;
            do {
                for($i=1;$i<=7;$i++) {
                    $days[$nCurrent][] = $functionDay($d);
                    $d++;
                }
                $nCurrent++;
            } while ($d + 7 < $daysInMonth);
            $nCurrent++;
            $j = 7 - ($daysInMonth - $d + 1);
            for($i = $daysInMonth - $d + 1; $i > 0; $i--) {
                $days[$nCurrent][] = $functionDay($d);
                $d++;
            }
            for($i = $j; $i > 0; $i--) {
                $days[$nCurrent][] = '';
                $d++;
            }

            ?>

            <table>
                <?php foreach($days as $row) { ?>
                    <tr>
                        <?php foreach($row as $day) { ?>
                            <td width="20">
                                <?= $day ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
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

<?php
$_SESSION['$events'] = null;
?>
