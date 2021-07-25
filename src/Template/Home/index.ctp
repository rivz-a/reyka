<!-- Здесь мы проходимся в цикле по объекту запроса $articles, выводя данные статьи -->

<?php foreach ($menu as $page): ?>
    <tr>
        <td><?= $page->id ?></td>
        <td>
            <?= $this->Html->link($page->title, ['action' => 'view', $page->id]) ?>
        </td>
        
    </tr>
<?php endforeach; ?>


<?= $this->Html->link('Добавить статью', ['controller' => 'Pages','action' => 'add']) ?>