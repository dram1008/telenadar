<?php

/* @var $this yii\web\View */

$this->title = 'Теленадар';
$this->registerJs("$('.carousel').carousel()");
?>
<div class="site-index">
    <h1 class="page-header"><?= \yii\bootstrap\Html::encode($this->title) ?>
        <small>Летная академия вознесенных владык</small>
    </h1>

    <?php $this->registerJs("$('.carousel').carousel()"); ?>
    <div id="carousel-example-generic" class="carousel slide thumbnail" data-ride="carousel" style="
    margin-bottom: 60px;
">
       <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/controller/site/index/0.jpg" alt="...">
            </div>
            <div class="item">
                <img src="/images/controller/site/index/1.jpg" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <a href="<?= \yii\helpers\Url::to(['site/out']) ?>">
                <img src="/images/controller/site/index/s1.jpg" class="img-circle center-block" width="140"
                     height="140"/>
            </a>

            <h2 class="center-block text-center">Уход души</h2>

            <p class="center-block text-center">Ритуал «Отправление к РОДУ НЕБЕСНОМУ» - это процедура воссоединения души
                умершего человека с его Родом Небесным. Суть ее заключается в том, что тело сжигается на костре, на
                чистом воздухе на чистой Земле с направлением души к предкам и Роду Небесному.</p>
        </div>
        <div class="col-lg-4">
            <a href="<?= \yii\helpers\Url::to(['site/trasfere']) ?>">
                <img src="/images/controller/site/index/s2.jpg" class="img-circle center-block" width="140"
                     height="140"/>
            </a>

            <h2 class="center-block text-center">Странствия души</h2>

            <p class="center-block text-center">Консалтинговые услуги по действиям в промежуточном состоянии между
                уходом и приходом на Землю</p>
        </div>
        <div class="col-lg-4">
            <a href="<?= \yii\helpers\Url::to(['site/in']) ?>">
                <img src="/images/controller/site/index/s3.jpg" class="img-circle center-block" width="140"
                     height="140"/>
            </a>

            <h2 class="center-block text-center">Приход души</h2>

            <p class="center-block text-center">Призывание Великой Души. Здоровые роды на Земле по законам космоса.</p>
        </div>
    </div>

    <h2 class="page-header">О нас</h2>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <p>
                ДОРОГИЕ НАШИ БРАТЬЯ И СЁСТРЫ, ДОЧЕРИ И СЫНОВЬЯ КОСМОСА!<br />
                <br />
                МЫ РАДЫ ВАС ПРИВЕТСТВОВАТЬ В СТЕНАХ КОСМИЧЕСКОЙ ЛЁТНОЙ АКАДЕМИИ,<br />
                ВДОХНОВИТЕЛЯМИ И НАПРАВИТЕЛЯМИ КОСМИЧЕСКИХ ПОЛЁТОВ<br />
                НЕИЗМЕННО ОСТАЮТСЯ ВОЗНЕСЁННЫЕ ВЛАДЫКИ ШАМБАЛЫ НЕБЕСНОЙ.<br />
                <br />
                МЫ БУДЕМ ВАС ВОДИТЬ ПО ПРОСТОРАМ ВСЕЛЕННЫХ, ПОКАЗЫВАЯ ВСЁ ТО ПРЕКРАСНОЕ, ЧТО СОЗДАНО САМОЙ ЛЮБОВЬЮ ПЕРВОТВОРЦА.<br />
                МЫ НИСКОЛЬКО НЕ СОМНЕВАЕМСЯ В ВАШИХ ПОЗНАНИЯХ НА УРОВНЕ <br />
                СВЯТОГО «Я ХРИСТА», КАК КОСМИЧЕСКИХ СУЩЕСТВ, НО МЫ ВАС ВЕДЁМ К ТОМУ,<br />
                ЧТОБЫ ВЫ СЕБЕ НАПОМНИЛИ, НАХОДЯСЬ В ВОПЛОЩЕНИИ ЗДЕСЬ И СЕЙЧАС<br />
                НА ЗЕМЛЕ – КТО ВЫ, КАКУЮ РОЛЬ И ОТВЕТСТВЕННОСТЬ НЕСЁТЕ НА СЕБЕ,<br />
                ПРЕОБРАЖАЯСЬ САМИ И ПОМОГАЯ ЭТО СДЕЛАТЬ ДРУГИМ УЧЕНИКАМ,<br />
                СЛЕДУЮЩИМ ЗА ВАМИ.<br />
                <br />
                ХОЧЕТСЯ ОТМЕТИТЬ ВАШЕ НЕУТОМИМОЕ ЖЕЛАНИЕ ПОЗНАВАТЬ ТО ВЕЛИКОЕ,<br />
                ЧТО ЯВЛЯЕТСЯ НЕОТЪЕМЛЕМОЙ ЧАСТЬЮ ВАШЕГО КОСМИЧЕСКОГО НАСЛЕДИЯ,<br />
                КОТОРОЕ ИМЕЕТ ПРОДОЛЖЕНИЕ В БУДУЩЕМ В СВЕРХНОВЫХ ВСЕЛЕННЫХ.<br />
                <br />
                В АУДИТОРИЯХ АКАДЕМИИ, ПО МЕРЕ РАСКРЫТИЯ ВАШИХ ТАЛАНТОВ,<br />
                БУДУТ ИЗУЧАТЬСЯ ПРЕДМЕТЫ ПО РАЗНЫМ НАПРАВЛЕНИЯМ АЭРОНАВТИКИ И КОСМОНАВТИКИ.<br />
                БУДЕТ СОЗДАН ПРЕПОДАВАТЕЛЬСКИЙ СОСТАВ ИЗ УЧАСТНИКОВ КОСМИЧЕСКОЙ АКАДЕМИИ, КОТОРЫЕ БУДУТ ПРЕПОДАВАТЬ ДИСЦИПЛИНЫ, ДО СИХ ПОР НЕ ИЗУЧЕННЫЕ<br />
                НА ЗЕМНОМ ПЛАНЕ, ОПИРАЯСЬ НА ВОДИТЕЛЬСТВО ВОЗНЕСЁННЫХ ВЛАДЫК.<br />
                <br />
                ЗАДАЧЕЙ СЛУШАТЕЛЕЙ АКАДЕМИИ ЯВЛЯЕТСЯ РАСКРЫТИЕ ДУХОВНОГО СЕРДЕЧНОГО ЦЕНТРА, ЧЕРЕЗ КОТОРЫЙ ПРОЯВЛЯЮТСЯ ВСЕ СПОСОБНОСТИ СЫНА ИЛИ ДОЧЕРИ КОСМОСА, ЕЩЁ НАХОДЯСЬ В ЭТОМ ВОПЛОЩЕНИИ ВПЛОТЬ ДО ВОЗНЕСЕНИЯ В ДУХЕ, ПОЭТАПНО ПРОХОДЯ ВСЕ СТУПЕНЬКИ КОСМИЧЕСКОГО СОВЕРШЕНСТВА, НЕВЗИРАЯ<br />
                НА ТРУДНОСТИ, ВОЗНИКАЮЩИЕ НА ЖИЗНЕННОМ ПУТИ В ВОСХОДЯЩИХ МИРАХ.<br />
                <br />
                МЫ РАДЫ СООБЩИТЬ ВАМ, ЧТО НАЧАЛО К УСТРЕМЛЕНИЮ СОЗНАНИЯ ЧЛЕНОВ ВАШЕГО СООБЩЕСТВА В ГЛУБИНЫ КОСМОСА УСПЕШНО ПРОЛОЖЕНО<br />
                И ВЫЗЫВАЕТ НЕПОДДЕЛЬНЫЙ ИНТЕРЕС В ДУХОВНОМ МИРЕ!<br />
                <br />
                ВАМ БУДЕТ ПРЕДЛОЖЕНО МНОЖЕСТВО НАПРАВЛЕНИЙ ПО ИЗУЧЕНИЮ КОСМИЧЕСКИХ<br />
                ДИСЦИПЛИН.<br />
                ИЕРАРХИЯ СВЕТЛЫХ СИЛ НЕСОМНЕННО ПОДЕЛИТСЯ С ВАМИ ОПЫТОМ <br />
                В РАЗНЫХ СФЕРАХ ЖИЗНЕДЕЯТЕЛЬНОСТИ КОСМОСА.<br />
                <br />
                ВАША ПОВСЕМЕСТНАЯ ЗАИНТЕРЕСОВАННОСТЬ В ПОЛЁТАХ <br />
                ПО КОСМИЧЕСКОМУ ПРОСТРАНСТВУ ПОДСКАЗАЛО НАМ ОБЕСПЕЧИТЬ ВОЗМОЖНОСТЬ ИЗУЧЕНИЯ МИРОЗДАНИЯ КОСМОСА ПУТЁМ СОЗДАНИЯ ОБРАЗОВАТЕЛЬНОГО УЧРЕЖДЕНИЯ ПОД НАЗВАНИЕМ:<br />
                «КОСМИЧЕСКАЯ ЛЁТНАЯ АКАДЕМИЯ ВОЗНЕСЁННЫХ ВЛАДЫК».<br />
                <br />
                ПО МЕРЕ РАСКРЫТИЯ СПОСОБНОСТЕЙ ВАШЕЙ ДУШИ НА ЗЕМНОМ ПЛАНЕ,<br />
                БУДУТ ОТКРЫТЫ И ЦЕЛЫЕ РАЗНОВИДНОСТИ КОСМИЧЕСКИХ ПОЛЁТОВ,<br />
                ЯЗЫКОВЕДЕНИЕ, ОБЩЕНИЕ НЕПОСРЕДСТВЕННО С ИНОПЛАНЕТНЫМИ<br />
                ЦИВИЛИЗАЦИЯМИ ПРИ ПОМОЩИ ЯЗЫКА СВЕТА СО СВОИМИ КОСМИЧЕСКИМИ БРАТЬЯМИ И СЁСТРАМИ.<br />
                <br />
                ОТ ВСЕЙ ДУШИ ХОТИМ ПОБЛАГОДАРИТЬ СЛУШАТЕЛЕЙ КОСМИЧЕСКОЙ АКАДЕМИИ<br />
                ЗА ПРИНЯТОЕ ВАМИ РЕШЕНИЕ ПРИСТУПИТЬ К ЗАНЯТИЯМ ПО РАСКРЫТИЮ<br />
                ВАШИХ СВЕРХСПОСОБНОСТЕЙ, ПУТЁМ «ВОСПОМИНАНИЯ» САМИХ СЕБЯ<br />
                В КОСМОСЕ, ДО ПОЛНОГО ОСОЗНАНИЯ СЕБЯ СОТВОРЦАМИ <br />
                НА ПЛАНЕТАРНОМ, ГАЛАКТИЧЕСКОМ И ВСЕЛЕНСКОМ УРОВНЕ!<br />
                <br />
                С ВАМИ ВСЕГДА И ВЕЗДЕ БУДУТ НАХОДИТЬСЯ ВОЗНЕСЁННЫЕ ВЛАДЫКИ <br />
                ШАМБАЛЫ НЕБЕСНОЙ, КОТОРЫЕ БУДУТ ВАС ВОДИТЬ И НАПРАВЛЯТЬ ПО ЗВЁЗДНЫМ ДОРОГАМ, ДАВАЯ ВОЗМОЖНОСТЬ РАСШИРИТЬ КРУГОЗОР КОСМИЧЕСКИХ ПУТЕШЕСТВЕННИКОВ ВНЕ ВРЕМЕНИ И ПРОСТРАНСТВА.<br />
                АМИНЬ.<br />
                <br />
                УЧИТЕЛЯ СВЕТА, ПЛАНЕТАРНАЯ ИЕРАРХИЯ СЕМЬИ СВЕТА:<br />
                <br />
                ИИСУС ХРИСТОС, МАТЬ МАРИЯ, ЭЛЬ – МОРИЯ, КУТ ХУМИ, СЕН-ЖЕРМЕН,<br />
                САНАТ КУМАРА, АРХАНГЕЛ МИХАИЛ, АРХАНГЕЛ ГАВРИИЛ.
            </p>
        </div>
    </div>


    <?php
    $isShowForm = false;
    if (Yii::$app->user->isGuest) {
        if (!isset(Yii::$app->request->cookies['subscribeIsStarted'])) {
            $isShowForm = true;
        }
    }

    if ($isShowForm) {
        ?>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <?php
                $this->registerJs(<<<JS
// форма подписки
    {
        function setCookie (name, value, expires, path, domain, secure) {
            document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + expires : "") +
            ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
        }
        $('#formSubscribeSubmit').click(function() {
            var object;
            object = $('#formSubscribeName');
            if (object.length > 0) {
                if (object.val() == '') {
                    object.parent().addClass('has-error').find('.help-block-error').html('Это обязательное поле').show().removeClass('hide');
                    object.focus();

                    return;
                }
            }
            object = $('#formSubscribeEmail');
            if (object.val() == '') {
                object.parent().addClass('has-error').find('.help-block-error').html('Это обязательное поле').show().removeClass('hide');
                object.focus();

                return;
            }
            ajaxJson({
                url: '/subscribe/mail',
                data: {
                    email: $('#formSubscribeEmail').val(),
                    name: $('#formSubscribeName').val()
                },
                success: function(ret) {
                    var parentForm = $('#formSubscribe').parent();
                    $('#formSubscribe').remove();
                    parentForm.append(
                        $('<p>', {
                            class: 'alert alert-success'
                        }).html('Вы успешно подписались на рассылку')
                    );
                    setCookie('subscribeIsStarted', 1);
                    showInfo('Вам на почту выслано подтверждение, пройдите пожалуйста на почту');
                },
                errorScript: function(ret) {
                    object = $('#formSubscribeEmail');
                    object.parent().addClass('has-error').find('.help-block-error').html(ret.data).show().removeClass('hide');
                }
            });
        });
        $('#formSubscribeName, #formSubscribeEmail').on('input', function() {
            $(this).parent().removeClass('has-error').find('.help-block-error').hide();
        });
    }
JS
                );
                ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Подписаться на рассылку</h3>
                    </div>
                    <div class="panel-body">
                        <form id="formSubscribe">
                            <?php if (Yii::$app->user->isGuest) { ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formSubscribeName" placeholder="Имя">

                                    <p class="help-block help-block-error hide">Это поле должно быть заполнено
                                        обязательно</p>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <input type="email" class="form-control" id="formSubscribeEmail" placeholder="Email">

                                <p class="help-block help-block-error hide">Это поле должно быть заполнено
                                    обязательно</p>
                            </div>
                            <button type="button" class="btn btn-default" style="width: 100%;" id="formSubscribeSubmit">
                                Подписаться
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <p class="alert alert-success">Вы успешно подписались на рассылку</p>
            </div>
        </div>
    <?php } ?>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/0.jpg', true),
        'title'       => 'Агентство Сохранения Рода',
        'description' => 'Агентство, предоставляющее услуги сопровождения души в тонкий мир и воссоединение с Родом Небесным, консалтинговые услуги по действиям в промежуточном состоянии между уходом и приходом на Землю, и здоровые роды на Земле по законам космоса.',
    ]) ?>

</div>
