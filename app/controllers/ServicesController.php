<?php

namespace app\controllers;

use yii\web\Controller;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\article\api\Article;
use yii\web\HttpException;
use yii\easyii\modules\catalog\models\Category;
use yii\easyii\modules\catalog\models\Item;
use yii\easyii\modules\catalog\api\Catalog;

class ServicesController extends Controller
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
        $categories = Catalog::cats();

        return $this->render('index', [
            'page' => $page::get('services'),
            'categories' => $categories
        ]);
    }
    public function actionService($slug) {

        $page = new Page();


        $article = Article::get($slug);
        if (!$article) {
            throw new HttpException(404);
        }

        $category = Category::find()->where(['slug' => $slug])->one();
        if (!$category) {
            throw new HttpException(404);
        }

        $items = Item::find()->where(['category_id' => $category->category_id])->all();



        return $this->render('service', [
            'page' => $page::get('services'),
            'article' => $article,
            'items' => $items

        ]);
    }
}
