<h1><?= $page->first()->name ?></h1>


<?= "URL: ".$page_url;?>


<p><?= $this->Html->link('Add Article', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>URL</th>
        <th>Заголовок</th>
        <th>Дата создания</th>
        <th>Действия</th>
    </tr>

<!-- Здесь мы проходимся в цикле по объекту запроса $articles, выводя данные статьи -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->url ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Удалить',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Вы уверены?'])
            ?>
            <?= $this->Html->link('Изменить', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?= debug($page); ?>