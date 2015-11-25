<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\Dictionary;
use app\models\Event;
use app\models\Form\NewPassword;
use app\models\Form\Request;
use app\models\Log;
use app\models\Product;
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
use yii\db\Query;

class ShopController extends BaseController
{

    public function actionIndex()
    {
        return $this->render([
            'rows' => $this->getRows(null),
        ]);
    }

    public function actionCategory($id)
    {
        return $this->render([
            'item'  => Category::find($id),
            'items' => Product::query(['tree_node_id' => $id])->all(),
        ]);
    }

    public function actionProduct($id)
    {
        return $this->render([
            'item'  => Product::find($id),
        ]);
    }

    /**
     * Возвращает элементы списка
     * @return array
     * [[
     *  'id' =>
     *  'name' =>
     *  'nodes' => array
     * ], ... ]
     */
    public function getRows($parentId)
    {
        $rows = (new Query())
            ->select('id,name')
            ->from('tel_product_tree')
            ->where(['parent_id' => $parentId])
            ->orderBy(['sort_index' => SORT_ASC])
            ->all();
        for ($i = 0; $i < count($rows); $i++) {
            $item = &$rows[ $i ];
            $rows2 = $this->getRows($item['id']);
            if (count($rows2) > 0) {
                $item['nodes'] = $rows2;
            }
        }

        return $rows;
    }

}
