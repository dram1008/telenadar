<?php

namespace app\models;

use cs\services\BitMask;
use yii\db\Query;
use app\services\Subscribe;

class Event extends \cs\base\DbRecord
{
    const TABLE = 'tel_events';

    public function getName()
    {
        return $this->getField('name');
    }

    public function getImage($isScheme = false)
    {
        $image = $this->getField('image', '');
        if ($image == '') return '';

        return \yii\helpers\Url::to($this->getField('image'), $isScheme);
    }

    public function getLink($isScheme = false)
    {
        return \yii\helpers\Url::to(['site/events_item', 'id' => $this->getId()], $isScheme);
    }

}