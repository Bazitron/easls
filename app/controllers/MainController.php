<?php

namespace app\controllers;

use yii\easyii\modules\article\api\Article;
use yii\widgets\Menu;

class MainController extends \yii\web\Controller {

    /**
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * @return string
     */
    public function actionMedia() {
        return $this->render('media');
    }

    /**
     * @return string
     */
    public function actionContacts() {
        return $this->render('contacts');
    }

    /**
     * @return string
     */
    public function actionOther_trainings() {
        return $this->render('other_trainings');
    }

    /**
     * @return string
     */
    public function actionEasls() {
        $slug = \Yii::$app->request->get('s');
        $page = Article::get($slug);

        return $this->render('easls', ['page' => $page]);
    }
}
