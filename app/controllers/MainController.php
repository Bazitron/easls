<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout(){
        return $this->render('about');
    }

}