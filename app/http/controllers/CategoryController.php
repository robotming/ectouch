<?php

namespace app\http\controllers;

use Yii;
use app\models\Category;
use app\models\Brand;

class CategoryController extends FoundationController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $cache = Yii::$app->cache;
        $key = 'category_all';

        $category = $cache->get($key);

        if ($category === false) {
            $category = Category::getAll(['id' => 0]);
            $cache->set($key, $category);
        }

        return $this->render('index', ['category' => $category]);
    }

    /**
     * Displays detailpage.
     *
     * @return string
     */
    public function actionDetail()
    {
        $id = Yii::$app->request->get('id', 0);
        $category = Category::find()->where(['cat_id' => $id])->asArray()->one();


        return $this->render('detail', ['category' => $category]);
    }

}
