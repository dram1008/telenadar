<?php

namespace app\models;

use app\services\Subscribe;
use cs\services\BitMask;
use yii\db\Query;

class Category extends \cs\base\DbRecord
{
    const TABLE = 'tel_product_tree';
}