<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\page\api\Page;

class AboutController extends Controller
{
    public function actions() {

        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {

        $page = new Page();

        return $this->render('index', [
            'page' => $page::get('about')
        ]);
    }
}
