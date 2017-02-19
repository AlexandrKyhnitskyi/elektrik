<?php

use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

$this->title = $page->title;

$this->params['breadcrumbs'][] = $page->title;
$this->params['menu_active_item'] = 'uslugi';

?>

<?= $page->text ?>

<article class="pages pref">

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