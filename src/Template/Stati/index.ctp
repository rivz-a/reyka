<div class="container clearfix">


    <div class="breadcrumb">
        <a rel="nofollow" href="<?=$this->Url->build('/', true);?>">Главная</a>&nbsp;/&nbsp;
            <? if (!is_null($page->first()->parent_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            <? if (!is_null($page->first()->category_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            <?= $page->first()->name;?>
    </div>

    <div class="content">
        <?= $this->Flash->render() ?>       
        <h1 data-animated="fadeInUp"><?= $page->first()->name ?></h1>    

        <? if (!is_null($children)){ ?>
           
            <div class="row stati" data-animated="fadeInUp">           
                    <? foreach ($children as $child) : ?>   

                    <figure class="pt-5 figure lh" data-animated="fadeInUp">
                        <div class="row row-center">
                            <div class="col-md-6 col-12 pb-3" data-animated="fadeInUp">
                                <a data-animated="fadeInUp" href="/stati/<?= $child->url ?>" alt="<?= $child->menu ?>" title="<?= $child->menu ?>">
                                    <img src="/img/<?= $child->img ?>.jpg">
                                </a>
                            </div>
                            <div class="col-md-6 col-12" data-animated="fadeInUp">
                                <h2><?= $child->name ?></h2>
                                <div><?= substr($child->body, 0, 800);  ?></div>
                                <div>
                                    <a class="btn btn-primary" href="/stati/<?= $child->url ?>" alt="<?= $child->menu ?>" title="<?= $child->menu ?>">
                                        подробнее...
                                    </a>
                                </div>                                
                            </div>
                        </div>
                    </figure>
                       
                    <? endforeach ?>
            
            </div>
            
        <?}?>

        </div>
       
    </div>

</div>  

 

<?= $this->element('map'); ?> 

    






    