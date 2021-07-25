<h1>Статьи блога</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Заголовок</th>
        <th>Дата создания</th>
    </tr>

    <!-- Здесь мы проходимся в цикле по объекту запроса $pages, выводя данные статьи -->

    <?php foreach ($pages as $page): ?>
    <tr>
        <td><?= $page->id ?></td>
        <td>
            <?= $this->Html->link($page->title, ['action' => 'view', $page->id]) ?>
        </td>
        <td>
            <?= $page->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->Html->link('Добавить статью', ['action' => 'add']) ?>

