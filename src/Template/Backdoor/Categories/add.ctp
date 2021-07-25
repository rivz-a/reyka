<div class="sidebar pt-3">           
            <div class="content"> 
            <h2>Меню админки</h2>
            <hr>
                <h3>Категории</h3>                            
                <p><?= $this->Html->link('Список категорий', ['controller' => 'Categories','action' => 'add']) ?></p>
                <p><?= $this->Html->link('Добавить Категорию', ['controller' => 'Categories','action' => 'add']) ?></p>                           
                <hr>
                <h3>Страницы</h3>                            
                <p><?= $this->Html->link('Список страниц', ['controller' => 'Categories','action' => 'add']) ?></p>     
                <p><?= $this->Html->link('Добавить страницу', ['controller' => 'Articles','action' => 'add']) ?></p>                 
                <hr>  
                <p><?= $this->Html->link('Выход из админки', ['controller' => 'Users','action' => 'logout']) ?></p>                
                
                
            </div>
    </div>

<div class="content backdoor-content">
<h1>Добавление категории:</h1>
<h2><?= $category->name?></h2>
<?php
    echo $this->Form->create($category, ['type' => 'file']);   
    echo $this->Form->control('parent_id', [
        'options' => $parentCategories,
        'empty' => 'Нет родительской категории',
        'label' => 'Родительская категория'       
    ]);
    echo $this->Form->control('url',[
        'label' => 'URL, заполняется автоматически основываясь на name'
    ]);
    echo $this->Form->control('name',[
          'label' => 'Название категории'
    ]);
    echo $this->Form->control('body', [
          'id' => 'editor',
          'label' => 'Описание категории',
          'type' => 'textarea'
    ]);
    echo $this->Form->control('img', [        
      'label' => 'Загрузить изображение для категории',
      'type' => 'file'
      ]);
    echo $this->Form->control('in_menu',[
        'label' => 'Отображать в меню?',
        'type' => 'checkbox'       
    ]);
    echo $this->Form->button(__('Сохранить категорию'));
    echo $this->Form->end();
?>
<script>
    CKEDITOR.replace('editor');
</script>

