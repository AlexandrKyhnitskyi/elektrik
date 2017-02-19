<?php

namespace app\controllers;

use yii\easyii\modules\catalog\models\Item;
use yii\web\Controller;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\text\api\Text;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        $this->layout = 'home';

        $page = new Page();

        $categories = Catalog::cats();
        $services = Item::find(['status' => 1])->all();
        foreach ($services as $service) {
            $categories[$service->category_id]->services[] = $service;
        }

        return $this->render('index', [
            'page' => $page::get('main'),
            'categories' => $categories,
            'texts' => [
                'prices-for-all' => Text::get('prices-for-all'),
                'warranties' => Text::get('warranties'),
                'from-a-to-z' => Text::get('from-a-to-z'),
                'map-url' => Text::get('map-url'),
            ],
        ]);
    }
}