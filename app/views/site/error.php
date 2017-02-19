<?php

use yii\helpers\Html;

$this->title = $name;

?>
<div class="container">
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <p>Запрошенная Вами страница не найдена!</p>
</div>

