<?php

namespace app\http\controllers;

use Yii;

class GoodsController extends FoundationController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
