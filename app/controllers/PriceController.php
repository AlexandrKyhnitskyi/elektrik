<?php
/**
 * Created by PhpStorm.
 * User: SanchoSik
 * Date: 17.08.2016
 * Time: 19:43
 */

namespace app\controllers;


use yii\base\Controller;
use yii\easyii\modules\catalog\models\Item;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\text\api\Text;

class PriceController extends Controller
{

    public function actionIndex() {
        $this->layout = 'home';


        $categories = Catalog::cats();
        $services = Item::find(['status' => 1])->all();
        foreach ($services as $service) {
            $categories[$service->category_id]->services[] = $service;
        }

        return $this->render('index', [
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