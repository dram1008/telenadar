<?php

namespace app\controllers;

use app\models\Article;
use app\models\Dictionary;
use app\models\Event;
use app\models\Form\NewPassword;
use app\models\Form\Request;
use app\models\Log;
use app\models\User;
use cs\base\BaseController;
use cs\web\Exception;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Response;

class ShopController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
