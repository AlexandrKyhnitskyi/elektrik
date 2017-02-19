<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\easyii\modules\text\api\Text;
use yii\widgets\ActiveForm;
use app\models\Feedback;

$asset = \app\assets\AppAsset::register($this);

$this->title = $page->title;

$modelFeedback = new Feedback();
$this->params['breadcrumbs'][] = 'Контакты';
$this->params['menu_active_item'] = 'contacts';
?>
<!-- PAGE CONTENT -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?=$page->text;?>
                <div id="cont" >
                    <div class="note">
                        <h2>
                            Оставьте ваши контактные данные. В ближайшее время мы с вами свяжемся.
                        </h2>
                    </div>


                    <?php $form = ActiveForm::begin([
                        'action' => 'contacts/save',
                        'id'=>'cont12'
                    ]) ?>
                    <fieldset>
                        <p class="first">
                            <?= $form->field($modelFeedback, 'name')->label('Имя *')->textInput(['size'=>30]) ?>
                        </p>
                        <p>
                            <?= $form->field($modelFeedback, 'phone')->label('Телефон *')->textInput(['size'=>30]) ?>
                        </p>
                        <p>
                            <?= $form->field($modelFeedback, 'email')->label('Email')->textInput(['size'=>30]) ?>
                        </p>
                        <p>
                            <?= $form->field($modelFeedback, 'text')->label('Сообщение')->textarea(['rows'=>10]) ?>
                        </p>
                        <?= Html::submitButton('Отправить',['class'=>'.btn-cont-btn']) ?>
                    </fieldset>


                    <?php ActiveForm::end() ?>
                </div>
                <br>
            </div>
            <div class="col-md-3">
                <!-- RIGHT SIDEBAR CONTENT -->
                <div class="widget" >
                    <h3 class="widget-title">Контактная информация</h3>
                    <ul class="contact-info fa-ul">
                        <li><i class="fa fa-li fa-building-o"></i>Винница, Соборна 5</li>
                        <li><i class="fa fa-li fa-phone"></i> (095) 694-19-15</li>
                        <li><i class="fa fa-li fa-phone"></i> (098) 370-63-70</li>
                        <li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:hello@yourcompany.com">hello@yourcompany.com</a></li>
                    </ul>
                </div>
                <div class="widget" style="margin-left: 35px">
                    <h3 class="widget-title">График роботы</h3>
                    <ul class="list-unstyled">
                        <li><strong>Понедельник - Пятница: </strong><br> с 8:00 до 17:00</li>
                        <li><strong>Субота:</strong><br> с 10 до 14:00</li>
                        <li><strong>Неделя:</strong><br>Выходной</li>
                    </ul>
                </div>
                <!-- END RIGHT SIDEBAR CONTENT -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT -->


