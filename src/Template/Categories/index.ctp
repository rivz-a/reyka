<div class="container clearfix">


    <div class="breadcrumb">
        <a rel="nofollow" href="<?=$this->Url->build('/', true);?>">Главная</a>&nbsp;/&nbsp;
            <? if (!is_null($old_parent)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$old_parent->url.'">'.$old_parent->name.'</a>&nbsp;/&nbsp;';?>        
            <? if (!is_null($page->first()->parent_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            <? if (!is_null($page->first()->category_id)) echo '<a rel="nofollow" href="'.$this->Url->build('/', true).$parent->url.'">'.$parent->name.'</a>&nbsp;/&nbsp;';?>
            
            <?= $page->first()->name;?>
    </div>

    <div class="content">
            <?= $this->Flash->render() ?>

        <h1 data-animated="fadeInUp"><?= $page->first()->name ?></h1>

        <div class="row pb-5" data-animated="fadeInUp" itemscope itemtype="http://schema.org/Product">
            <div class="col-md-8 col-12">
                <p  itemprop="description">Автосервис "Ремонт рулевых реек" качественно и максимально быстро выполнит ремонт рулевой рейки <?= $page->first()->menu?> по приемлемой цене.</p>
                <h2 class="pt-3 pb-3">Стоимость ремонта рулевой рейки <?= $page->first()->menu?></h2>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <table class="t-cena">
                        <tr>
                            <td class="t-r" itemprop="name">Ремонт: </td>
                            <td>от <strong itemprop="price" content="<?= (($parent->cena_remont) ? $parent->cena_remont : $page->first()->cena_remont); ?>"><?= (($parent->cena_remont) ? $parent->cena_remont : $page->first()->cena_remont); ?></strong> <meta itemprop="priceCurrency" content="RUB">р.</td>
                        </tr>
                        <tr>
                            <td class="t-r-r" itemprop="name">Снятие / Установка: </td>
                            <td>от <strong  itemprop="price" content="<?= (($parent->cena_ustanovka) ? $parent->cena_ustanovka : $page->first()->cena_ustanovka); ?>"><?= (($parent->cena_ustanovka) ? $parent->cena_ustanovka : $page->first()->cena_ustanovka); ?></strong> <meta itemprop="priceCurrency" content="RUB">р.</td>
                        </tr>
                        <tr>
                            <td>Итого:</td>
                            <td class="t-r">от <b style="font-size: 22px;"><?= (($parent->cena_remont) ? $parent->cena_remont+$parent->cena_ustanovka : $page->first()->cena_remont+$page->first()->cena_ustanovka);?></b> р.</td>
                        </tr>
                    </table>
                </div>
            
            </div>
            <div class="col-md-4 col-12" data-animated="fadeInRight">
            <p><?= (($parent->img) ? $this->Html->image("/img/logo_model/".$parent->img.".png",['alt'=>$parent->menu]) : $this->Html->image("/img/logo_model/".$page->first()->img.".png",['alt'=>$page->first()->menu])); ?></p>    
    
            </div>

        </div>
        <? if (!is_null($children)){ ?>
            <div class="row pt-5" data-animated="fadeInUp">
                <div class="h1">Выполняем ремонт следующих моделей <?= $page->first()->menu?></div>
            </div>
            <div class="row model pb-5" data-animated="fadeInUp">           
                    <? foreach ($children as $child) : ?>                    
                        <a href="<?= $child->url ?>" alt="<?= $child->menu ?>" title="<?= $child->menu ?>">
                            <div class="children">
                                <div class="ch"><?= $this->Html->image("/img/logo_model/".$page->first()->img.".png",['alt'=>$page->first()->menu]); ?></div>
                                <div class="tx"><?= $child->menu ?></div>                            
                            </div>
                        </a>
                    <? endforeach ?>
            
            </div>
            
        <?}?>

        <div class="pt-5 h1" data-animated="fadeInUp">Ремонт рулевой рейки <?= $page->first()->menu?> включает в себя следующее:</div>
        <div class="row pt-3 pb-4 dop-text">
                <div class="col-md-6 text-left">
                        <div class="row row-center pb-3" data-animated="fadeInLeft">
                            <div class="col-md-2 col-3"><img src="/img/1.png" alt="Во-первых"></div>
                            <div class="col-md-10 col-9">Специалисты нашего центра проведут полную диагностику вашей рулевой рейки. </div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInLeft">
                            <div class="col-md-2 col-3"><img src="/img/2.png" alt="Во-вторых"></div>
                            <div class="col-md-10 col-9">Снятие рулевой рейки и проверка ее на стенде на предмет герметичности</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInLeft">
                            <div class="col-md-2 col-3"><img src="/img/3.png" alt="В-третьих"></div>
                            <div class="col-md-10 col-9">Ремонт либо замена изношенных деталей. Шлифовка вала и деталей при необходимости</div>
                        </div> 
                        <div class="row row-center pb-3" data-animated="fadeInLeft">
                            <div class="col-md-2 col-3"><img src="/img/4.png" alt="В-четвертых"></div>
                            <div class="col-md-10 col-9">Сборка рулевой рейки</div>
                        </div>  
                        <div class="row row-center pb-3" data-animated="fadeInLeft">
                            <div class="col-md-2 col-3"><img src="/img/5.png" alt="В-пятых"></div>
                            <div class="col-md-10 col-9">Тестирование рулевой рейки</div>
                        </div>                                   
                </div>
                <div class="col-md-6" data-animated="fadeInRight">
                    <div class="row text-center pt-4 h">
                        <div class="col-md-4 col-12 pb-3"><img src="/img/ico3.png" alt="Диагностика"><br>Диагностика <b>всего за 1 час</b></div>
                        <div class="col-md-4 col-12 pb-3"><img src="/img/ico4.png" alt="Ремонт"><br>Ремонт <b>в день обращения</b></div>
                        <div class="col-md-4 col-12 pb-3"><img src="/img/ico6.png" alt="Гарантия"><br>Гарантия на работу <b>до 1 года</b></div>
                    </div>     
                    <div class="text-center pt-3 w">Записаться на ремонт можно по телефону  <br /><b>+7 (495) 222-87-82</b></div>
                    <div class="text-center pt-4 pb-4"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br>
                </div>         
                </div>            
    </div>  

    </div>

</div>  



<?= $this->element('block-vibormodel'); ?>  
    
<?= $this->element('block-gallery'); ?>

<?= $this->element('block-voprosotvet'); ?>  

<?= $this->element('block-plus'); ?>  

<?= $this->element('map'); ?> 

    






    