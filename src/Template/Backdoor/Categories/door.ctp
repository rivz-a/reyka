

    <div class="sidebar pt-3">           
            <div class="content"> 
            <h2>Меню админки</h2>
            <hr>
                <h3>Категории</h3>                            
                <p><?= $this->Html->link('Список категорий', ['controller' => 'Categories','action' => 'door']) ?></p>
                <p><?= $this->Html->link('Добавить Категорию', ['controller' => 'Categories','action' => 'add']) ?></p>                           
                <hr>
                <h3>Страницы</h3>                            
                <p><?= $this->Html->link('Список страниц', ['controller' => 'Articles','action' => 'door']) ?></p>     
                <p><?= $this->Html->link('Добавить страницу', ['controller' => 'Articles','action' => 'add']) ?></p>                 
                <hr>  
                <p><?= $this->Html->link('Выход из админки', ['controller' => 'Users','action' => 'logout']) ?></p>                
                
                
            </div>
    </div>

<div class="content backdoor-content">
    <h1>Админка</h1>


    <div class="actions large-2 medium-3 columns">
        <h3><?= __('Действия') ?></h3>
        <ul class="side-nav">
            <li><?= $this->Html->link(__('Новая Категория'), ['action' => 'add']) ?></li>
        </ul>
    </div>
    <div class="categories index large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Родителя</th>   
                <th>URL</th>         
                <th>Имя</th>
                <th>Описание</th>
                <th>Создано</th>
                <th class="actions"><?= __('Действия') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category->id ?></td>
                <td><?= $category->parent_id ?></td>      
                <td><?= $category->url ?></td>        
                <td><?= h($category->name) ?></td>
                <td><?= h($category->description) ?></td>                
                <td class="actions">                   
                    <?= $this->Html->link(__('Изменить'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Удалить'), ['action' => 'delete', $category->id], ['confirm' => __('Вы уверены, что хотите удалить # {0}?', $category->id)]) ?>
                    <?= $this->Form->postLink(__('Сместить вниз'), ['action' => 'moveDown', $category->id], ['confirm' => __('Вы уверены, что хотите сдвинуть категорию вниз # {0}?', $category->id)]) ?>
                    <?= $this->Form->postLink(__('Сместить вверх'), ['action' => 'moveUp', $category->id], ['confirm' => __('Вы уверены, что хотите сдвинуть категорию вверх # {0}?', $category->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>







</div>
