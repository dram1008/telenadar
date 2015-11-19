<?php

namespace app\models;

use app\services\RegistrationDispatcher;
use cs\services\Security;
use cs\services\SitePath;
use cs\services\VarDumper;
use Imagine\Image\Box;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\helpers\Url;
use cs\services\UploadFolderDispatcher;
use yii\imagine\Image;
use \Imagine\Image\ManipulatorInterface;
use app\models\User;

class UserAcademy extends \cs\base\DbRecord
{
    const TABLE = 'tel_users_academy';

    /**
     * Возвращает пользователя
     * null если не найден
     *
     * @return \app\models\User | null
     */
    public function getUser()
    {
        return User::find($this->getField('id'));
    }
}
