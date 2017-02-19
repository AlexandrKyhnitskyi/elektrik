 <?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\easyii\modules\text\api\Text;
use yii\widgets\ActiveForm;
use app\models\Feedback;

$asset = AppAsset::register($this);
$phones = explode("\n", Text::get('phones'));
$modelFeedback = new Feedback();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>

    <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">

    <?php $this->head() ?>

    <!--[if lt IE 9]>
        <script type="text/javascript" src="<?= $asset->baseUrl ?>/js/html5shiv.js"></script>
        <script type="text/javascript" src="<?= $asset->baseUrl ?>/js/selectivizr.js"></script>
        <script type="text/javascript" src="<?= $asset->baseUrl ?>/js/respond.js"></script>
    <![endif]-->
</head>
<body class="home" id="home">
    <?php $this->beginBody() ?>

    <div class="wrapper">
        <header role="banner">

            <div id="scb-wrapper" class="scb-fixed">
                <div class="inner">
                    КРУГЛОСУТОЧНО 24 ЧАСА. ЗВОНИТЕ СЕЙЧАС БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ!
                    <ul>
                        <?php foreach ($phones as $phone) : ?>
                        <li><?= $phone ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="dark">
                <div class="inner">

                    <nav class="nav" role="navigation">
                        <ul class="headnav">
                            <li><a href="/">Главная</a></li>
                            <li><a href="#serv">Услуги</a></li>
                            <li><a href="#prise">Цены</a></li>
                            <li><a href="#cont">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="headtitle">
                        <h1 class="title">Электрик Винница</h1>
                        <h2 class="title_h2">Срочный вызов электрика на дом</h2>
                        <a href="#?w=500" rel="popup_contact" class="button poplight"><span class="submit">Вызвать специалиста<span class="submit">!</span></span></a>
                    </div>
                </div>
            </div>
        </header>

        <section role="main">
            <div class="inner">

                <?= $content ?>

            </div>
        </section>
    </div>

    <footer role="contentinfo">
        <div class="dark">
            <div class="inner">

                <div class="form form-inline">

                    <?php $form = ActiveForm::begin([
                        'action' => 'contacts/save',
                        'id' => 'form',
                    ]) ?>
                    <?= $form->field($modelFeedback, 'name', ['template' => "{input}\n{error}"])->textInput(['placeholder'=>'Ваше имя']) ?>
                    <?= $form->field($modelFeedback, 'phone', ['template' => "{input}\n{error}"])->textInput(['placeholder'=>'Номер телефона']) ?>
                    <?= Html::submitButton('Отправить заявку', ['template' => '<span class="submit"><span class="submit">Отправить заявку</span></span>']) ?>
                    <?php ActiveForm::end() ?>

                </div>

                <div id="popup_contact" class="popup_block">
                    <div class="note">
                        <img src="<?= $asset->baseUrl ?>/images/form/email.jpg" alt="Контакты" style="float:left; margin:5px 10px 5px 0;" />
                        <h1>Заказать обратный звонок</h1>
                        <p>
                            Оставьте ваши контактные данные. В ближайшее время мы с вами свяжемся.
                        </p>
                    </div>


                    <?php $form = ActiveForm::begin([
                        'action' => 'contacts/save',
                        'class' => 'popf',
                    ]) ?>
                    <fieldset>
                        <p class="first">
                    <?= $form->field($modelFeedback, 'name')->label('Имя *')->textInput(['size'=>30]) ?>
                        </p>
                        <p>
                    <?= $form->field($modelFeedback, 'phone')->label('Телефон *')->textInput(['size'=>30]) ?>
                        </p>
                    </fieldset>

                    <?= Html::submitButton('Отправить',['id' => 'btn-btn']) ?>
                    <?php ActiveForm::end() ?>

<!--                    <form class="popf" id="form" action="" method="post">-->
<!---->
<!---->
<!--                                <label for="name"></label>-->
<!--                                <input type="text" name="name" id="name" size="30" />-->
<!---->
<!---->
<!--                                <label for="email"></label>-->
<!--                                <input type="text" name="email" id="email" size="30" />-->
<!---->
<!---->
<!--                        <p class="submit"><button type="submit">Отправить</button></p>-->
<!--                    </form>-->



                </div>



            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
