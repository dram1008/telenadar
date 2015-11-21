<?php

namespace app\controllers;

use app\models\Article;
use app\models\SiteUpdate;
use app\services\Subscribe;
use cs\services\VarDumper;
use cs\web\Exception;
use Yii;
use yii\base\UserException;

class Admin_usersController extends AdminBaseController
{
    public function actionIndex()
    {
        return $this->render([
        ]);
    }

    public function actionEdit($id)
    {
        $model = \app\models\Form\Profile::find($id);
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
        \app\models\Form\Profile::find($id)->delete();

        return self::jsonSuccess();
    }
}
