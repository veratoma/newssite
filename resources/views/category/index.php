<?php
foreach ($category as $n): ?>

    <div style="border: 1px solid black">
        <h2>
            <?= $n['title'] ?>
        </h2>

        <a href="<?= route('category.show', ['categoryid' => $n['id']]) ?>">Далее</a>
    </div>

<?php endforeach ?>