<?php

use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

$this->title = $page->title;

$this->params['menu_active_item'] = 'main';

$mainCategoriesNumber = 0;
foreach ($categories as $category) {
    if ($category->parent == 0) {
        $mainCategoriesNumber++;
    }
}
?>
<article class="our_serv" id="serv">
    <h2 class="title_h2">Наши услуги</h2>
    <ul>
        <?php $n = 0; ?>
        <?php foreach ($categories as $category) : ?>
        <?php if ($category->parent > 0) : ?>
        <?php if ($n > 0 && $mainCategoriesNumber % 3 % $n === 0) : ?>
        </ul><ul>
        <?php endif; ?>
        <li><span><?= $category->title ?></span></li>
        <?php $n++; ?>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <div class="clearfix"></div>
    <a href="#?w=500" rel="popup_contact" class="button poplight"><span class="submit">Вызвать специалиста<span class="submit">!</span></span></a>

    <div class="clearfix"></div>
</article>

<article class="pref">
    <h2 class="title_h2">Ощутите все преимущества работы с профессионалами:</h2>

    <div>
        <h3 class="title_h3">Цены для всех</h3>
        <p><?= $texts['prices-for-all'] ?></p>
    </div>

    <div>
        <h3 class="title_h3">Гарантии</h3>
        <p><?= $texts['warranties'] ?></p>
    </div>

    <div>
        <h3 class="title_h3">От А до Я</h3>
        <p><?= $texts['from-a-to-z'] ?></p>
    </div>
</article>

<article class="prise" id="prise">
    <h2 class="title_h2">Цены</h2>

    <?php foreach ($categories as $category) : ?>
    <?php if (!empty($category->services)) : ?>
    <p><?= $category->title ?></p>
    <table border="1" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <?php foreach ($category->services as $service) : ?>
        <tr>
            <td><?= $service->title ?></td>
            <td><?= $service->data->measure ?></td>
            <td>
                <?= $service->data->pricetype ?>
                <?= number_format($service->price, 0, '.', '&nbsp;') ?>
                грн.
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    <?php endforeach; ?>
</article>

<article class="oll ">
    <h2 class="title_h2">Электромонтажные работы в Виннице</h2>
    <?= $page->text ?>
</article>


<article class="map" id="cont">
    <h2 class="title_h2">Мы находимся здесь</h2>
    <iframe src="<?= $texts['map-url'] ?>" width="100%" height="420" frameborder="0" style="border: 0;"></iframe>
</article>


<article class="pages pref">
    <h2 class="title_h2">Разделы сайта</h2>

    <?php foreach ($categories as $category) : ?>
    <?php if ($category->parent == 0) : ?>
    <div>
        <h4 class="title_h4"><?= $category->title ?></h4>
        <?php if (!empty($category->children)) : ?>
        <ul>
            <?php foreach ($category->children as $categoryId) : ?>
            <?php $subCategory = $categories[$categoryId]; ?>
            <li><a title="<?= $subCategory->title ?>" href="<?= 'uslugi/'.$subCategory->slug ?>"><?= $subCategory->title ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</article>