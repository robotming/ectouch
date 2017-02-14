<?php

namespace app\http\controllers;

use Yii;

class FlowController extends FoundationController
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
