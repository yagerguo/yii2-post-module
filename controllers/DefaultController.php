<?php

namespace common\modules\post\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        var_dump(123);
        exit();
        return $this->render('index');
    }
}
