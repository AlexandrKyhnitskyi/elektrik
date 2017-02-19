<?php

use yii\helpers\Html;

$asset = \app\assets\AppAsset::register($this);

$this->title = $article->title;

$this->params['breadcrumbs'][] = $page->title;
$this->params['breadcrumbs'][] = $article->title;
$this->params['menu_active_item'] = 'uslugi';


?>
<table border="1" width="100%" cellspacing="0" cellpadding="0">
    <tbody>
    <?php foreach ($items as $value) : ?>
        <tr>
            <td><?= $value['title'] ?></td>
            <td> <?= $value['data']->measure ?> </td>
            <td>
                <?= $value['data']->pricetype ?>
                <?= number_format($value['price'], 0, '.', '&nbsp;') ?>
                грн.
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



