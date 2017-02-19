
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