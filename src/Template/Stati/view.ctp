<div class="container clearfix">


    <div class="breadcrumb">
        <a rel="nofollow" href="<?=$this->Url->build('/', true);?>">Главная</a>&nbsp;/&nbsp;
            <? if (!is_null($page->first()->parent_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            <? if (!is_null($page->first()->category_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            <?= $page->first()->name;?>
    </div>

    <div class="content">
        <?= $this->Flash->render() ?>       
        <h1><?= $page->first()->name ?></h1>    
        
        <div class="img-staty">
            <img src="/img/<?= $page->first()->img ?>.jpg">
        </div>

        <?= $page->first()->body;?>
        


        <? if (!is_null($brothers)){ ?>
            <div class="h1 pt-5">Также очень интересно:</div>   
            <div class="row stati vopr">       
                 
                    <? foreach ($brothers as $child) : ?>  
                        
                        <div class="card" style="width: 20rem;margin: 20px;">
                            <img src="/img/<?= $child->img ?>.jpg">
                            <div class="card-body">
                                <h5 class="card-title"><?= $child->name ?></h5>
                                <p class="card-text"><?= substr($child->body, 0, 200);  ?></p>
                                <a href="/stati/<?= $child->url ?>" class="btn btn-primary">подробнее...</a>
                            </div>
                        </div>
                       
                    <? endforeach ?>
            
            </div>
            
        <?}?>

        </div>
       
    </div>

</div>  

 

<?= $this->element('map'); ?> 

    






    