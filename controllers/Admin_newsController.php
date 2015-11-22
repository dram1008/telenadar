<?php

namespace app\controllers;

use app\services\Subscribe;
use cs\services\VarDumper;
use cs\web\Exception;
use Yii;
use yii\base\UserException;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\NewsItem;
use app\models\Chenneling;
use cs\base\BaseController;
use yii\web\Response;
use yii\widgets\ActiveForm;
use app\models\SiteUpdate;

class Admin_newsController extends AdminBaseController
{
    public function actionIndex()
    {
        return $this->render([
            'items' => NewsItem::query()->orderBy(['date_insert' => SORT_DESC])->all(),
        ]);
    }

    public function actionAdd()
    {
        $model = new \app\models\Form\NewsAdd();
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render([
                'model' => $model,
            ]);
        }
    }

    public function actionEdit($id)
    {
        $model = \app\models\Form\NewsAdd::find($id);
        if ($model->load(Yii::$app->request->post()) && $model->update()) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render([
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        \app\models\Form\NewsAdd::find($id)->delete();

        return self::jsonSuccess();
    }

    /**
     * AJAX
     * Добавляет site_update
     * Делает рассылку
     *
     * @param integer $id - идентификатор новости
     *
     * @return string
     */
    public function actionSubscribe($id)
    {
        $item = NewsItem::find($id);
        if (is_null($item)) {
            return self::jsonError(101, 'Не найдена новость');
        }
        Subscribe::add($item);
        $item->update(['is_added_site_update' => 1]);

        return self::jsonSuccess();
    }
}
