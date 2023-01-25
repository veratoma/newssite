<?php
foreach ($news as $n): ?>

    <div style="border: 1px solid black">
        <h2>
            <?= $n['title'] ?>
        </h2>
        <p>
            <?= $n['description'] ?>
        </p>
        <div><strong>
                <?= $n['autor'] ?><br>(
                <?= $n['created_at'] ?>)
            </strong></div>
        <a href="<?= route('news.show', ['id' => $n['id']]) ?>">Далее</a>
    </div>

<?php endforeach ?>