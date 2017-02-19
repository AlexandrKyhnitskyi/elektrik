<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\easyii\modules\page\api\Page;
use app\models\Feedback;

class ContactsController extends Controller
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
            'page' => $page::get('contacts')
        ]);
    }

    public function actionTel()
    {

        $model = new Feedback();
        if ($model->load(Yii::$app->request->post())) {

        }
        return $this->render('tel',compact($model));
    }
        public function actionSave()
        {
            $model = new Feedback();

            $request = Yii::$app->request;

            if ($model->load($request->post())) {
                $model->text = 'Запрос обратного звонка: ' . $model->phone;
                $returnUrl = $model->save() ? '/?successUrl' : '/?errorUrl';

                return 1;
            }
            else {
               return 0;
            }
        }







}
