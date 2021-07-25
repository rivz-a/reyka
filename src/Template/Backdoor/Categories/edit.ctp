
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
<h1>Редактирование категории:</h1>
<h2><?= $category->name?></h2>
<?php
      echo $this->Form->create($category,['enctype' => 'multipart/form-data']);   
      echo $this->Form->control('parent_id', [
          'options' => $parentCategories,
          'empty' => 'Нет родительской категории',
          'label' => 'Родительская категория',
          'css' => '123'
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
      echo $this->Form->file('img', [        
        'label' => 'Загрузить изображение для категории'        
        ]);

      echo "<p>".$this->Html->image("/img/logo_model/".$category->img.".png").$this->Form->control('del_img',array('label'=>'Удалить картинку','type'=>'checkbox'))."</p>";
   
      echo $this->Form->control('in_menu',[
          'label' => 'Отображать в меню?',
          'type' => 'checkbox',
          'checken' => 'checken'
      ]);
      echo $this->Form->button(__('Сохранить категорию'));
      echo $this->Form->end();
?>
</div>
<script>
    CKEDITOR.replace('editor');
</script>





