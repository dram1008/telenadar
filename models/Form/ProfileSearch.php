<?php

namespace app\models\Form;

use app\models\Form\Stock;
use app\models\User;
use cs\services\Str;
use cs\services\VarDumper;
use Yii;
use yii\base\Model;
use cs\Widget\FileUpload2\FileUpload;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\helpers\Html;

/**
 * ContactForm is the model behind the contact form.
 */
class ProfileSearch extends Profile
{
    public function rules()
    {
        return [
            [
                [
                    'name_first',
                    'email',
                ], 'default',
            ]
        ];
    }

    public function search($params)
    {
        $query = \app\models\User::query();

        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query->orderBy(['id' => SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        // load the search form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $value = $this->name_first;
        if ($value != '') {
            $query->andFilterWhere(['like', 'name_first', $this->name_first]);
        }
        $value = $this->email;
        if ($value != '') {
            $query->andFilterWhere(['like', 'email', $this->email]);
        }

        return $dataProvider;
    }
}
