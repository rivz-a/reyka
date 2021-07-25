<h1>Админ панель</h1>
<p><?= $this->Html->link('Выход из админки', ['controller' => 'Users','action' => 'logout']) ?></p>
<p><?= $this->Html->link('Добавить статью', ['controller' => 'Articles','action' => 'add']) ?></p>

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
            <?= $this->Html->link($article->title, ['controller' => 'Articles','action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Удалить',
                ['controller' => 'Article','action' => 'delete', $article->id],
                ['confirm' => 'Вы уверены?'])
            ?>
            <?= $this->Html->link('Изменить', ['controller' => 'Articles','action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>