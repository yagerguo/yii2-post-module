<?php

namespace yagerguo\yii2post\controllers;

use yii\web\Controller;

class ManageController extends Controller
{
    public function actionIndex()
    {
        var_dump(123);
        exit();
        return $this->render('index');
    }
    
    public function actionList(){
        var_dump(222);
    }
}
