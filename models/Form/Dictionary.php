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
class Dictionary extends \cs\base\BaseForm
{
    const TABLE = 'tel_dictionary';

    public $id;
    public $header;
    public $content;
    public $source;
    public $date_insert;
    public $id_string;
    public $image;
    public $view_counter;
    public $description;
    public $date;

    function __construct($fields = [])
    {
        static::$fields = [
            [
                'header',
                'Название',
                1,
                'string'
            ],
            [
                'content',
                'Полный текст',
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
                'Описание',
                0,
                'string',
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
        ];
        parent::__construct($fields);
    }

    public function insert($fieldsCols = null)
    {
        return parent::insert([
            'beforeInsert' => function ($fields) {
                $fields['date_insert'] = gmdate('YmdHis');
                $fields['id_string'] = GsssHtml::getMiniText($fields['header']);

                return $fields;
            },
        ]);
    }
}
