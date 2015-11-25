<?php

/**
 * params:
 * [
 *      'rows'     => [
 *                       [
 *                            'id'                 => '524'
 *                            'name'               => '123456'
 *                            ...
 *                            'selected'           => bool
 *                        ], ...
 *                    ]
 *     'formName'          => $this->model->formName(), // string
 *     'model'             => $this->model,             // \yii\base\Model
 *     'attrId'            => $this->attrId,            // attribute id
 *     'attrName'          => $this->attrName,          // attribute name
 *     'templateVariables' => []
 * ]
 */

/** @var $rows array */

?>



<ul>
    <?php
    foreach ($rows as $item) { ?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['shop/category', 'id' => $item['id']])?>"><?= $item['name'] ?></a>
        </li>

        <?php
            if (isset($item['nodes'])) {
                echo $this->render('_template', [
                    'rows' => $item['nodes'],
                ]);
            }
        ?>

    <?php } ?>
</ul>
