<?php

namespace app\models\Form;

use app\models\NewsItem;
use app\models\User;
use app\services\GsssHtml;
use cs\services\Str;
use cs\services\VarDumper;
use Yii;
use yii\base\Model;
use cs\Widget\FileUpload2\FileUpload;
use yii\db\Query;
use yii\helpers\Html;

/**
 * ContactForm is the model behind the contact form.
 */
class Product extends \cs\base\BaseForm
{
    const TABLE = 'tel_product';

    public $id;
    public $name;
    public $content;
    public $date_insert;
    public $image;
    public $view_counter;
    public $tree_node_id;
    public $description;
    public $price;

    function __construct($fields = [])
    {
        static::$fields = [
            [
                'name',
                'Название',
                1,
                'string'
            ],
            [
                'price',
                'Стоимость',
                1,
                'integer'
            ],
            [
                'content',
                'Описание',
                0,
                'string',
                'widget' => [
                    'cs\Widget\HtmlContent\HtmlContent',
                    [
                    ]
                ]
            ],
            [
                'description',
                'Описание краткое',
                0,
                'string'
            ],
            [
                'image',
                'Картинка',
                0,
                'string',
                'widget' => [
                    FileUpload::className(),
                    [
                        'options' => [
                            'small' => \app\services\GsssHtml::$formatIcon
                        ]
                    ]
                ]
            ],
            [
                'tree_node_id',
                'Категория',
                0,
                'default',
                'widget' => [
                    'app\modules\Shop\services\CheckBoxTreeMask\CheckBoxTreeMask',
                    [
                        'rows' => (new Query())->select([
                            'id',
                            'name'
                        ])->from('tel_product_tree')->all(),
                        'tableName' => 'tel_product_tree'
                    ]
                ]
            ],
        ];
        parent::__construct($fields);
    }

    public function insert($fieldsCols = null)
    {
        $row = parent::insert([
            'beforeInsert' => function ($fields) {
                $fields['date_insert'] = time();

                return $fields;
            },
        ]);

        return $row;
    }
}
