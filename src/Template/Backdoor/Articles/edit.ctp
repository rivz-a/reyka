
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
<h1>Редактирование страницы:</h1>
<h2><?= $article->title?></h2>
<?php
    echo $this->Form->create($article);   
    echo $this->Form->control('category_id', [
        'options' => $parentCategories,
        'empty' => 'Нет родительской категории',
        'label' => 'Родительская категория'
    ]);
    /*echo $this->Form->control('url',[
        'label' => 'URL, заполняется автоматически основываясь на name'
    ]);*/
    echo $this->Form->control('name',[
          'label' => 'Название страницы'
    ]);
    echo $this->Form->control('menu',[
        'label' => 'Название в меню'
  ]);
    echo $this->Form->control('body', [
          'id' => 'editor',
          'label' => 'Описание страницы',
          'type' => 'textarea'
    ]);
    echo $this->Form->control('meta_title', [
        'id' => 'editor',
        'label' => 'Title страницы'        
  ]);
    echo $this->Form->control('meta_description', [
        'id' => 'editor',
        'label' => 'Описание страницы (meta description)',
        'type' => 'textarea'
  ]);
   
    echo $this->Form->button(__('Сохранить страницу'));
    echo $this->Form->end();
?>
</div>
<script>
    CKEDITOR.replace('editor');
</script>





