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
        <h2 class="pt-3 pb-3" data-animated="fadeInUp">Причины поломки стартера:</h2>
        <div class="row pb-5 row-center">            
            <div class="col-md-7 col-12 lh pb-3">
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-1 col-3 text-right"><img src="/img/1.png" alt="Во-первых"></div>
                            <div class="col-md-7 col-9">Износ механического якоря вследствие короткого замыкания обмотки.</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-1 col-3 text-right"><img src="/img/2.png" alt="Во-вторых"></div>
                            <div class="col-md-7 col-9">Неисправность бендикса – срыв или пробуксовка</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-1 col-3 text-right"><img src="/img/3.png" alt="В-третьих"></div>
                            <div class="col-md-7 col-9">Межвитковое замыкание или обрыв проводки.</div>
                        </div>   
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-1 col-3 text-right"><img src="/img/4.png" alt="В-четвертых"></div>
                            <div class="col-md-7 col-9">Механический износ щеток вследствие медленного закручивания коленчатого вала.</div>
                        </div> 
                        <div class="text-center" data-animated="fadeInUp"><b>Бесплатная диагностика стартера</b><br><br>
                             <button data-animated="fadeInUp" type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на диагностику</button><br>
                        </div>
            </div>

            <div class="col-md-5 col-12 fn" data-animated="fadeInRight">
                <p><?= $this->Html->image("/img/starter2.jpg"); ?></p>        
            </div>

        </div>
        <hr>

        <div class="row pt-3">
            <div class="col-md-6 col-12"   itemscope itemtype="http://schema.org/Product">
                <div class="h1 pb-1" style="width: 100%" data-animated="fadeInUp"><?= $page->first()->name ?> цена</div>
                <div class="table container" data-animated="fadeInUp" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <div class="row th">
                        <div class="col-md-8 col-7">Вид ремонта</div>
                        <div class="col-md-4 col-5 q">цена</div>
                    </div>
                    <div class="row t">
                        <div class="col-md-8 col-7" itemprop="name">Ремонт стартера</div>
                        <div class="col-md-4 col-5 q">от <strong itemprop="price" content="3000">3000</strong> <meta itemprop="priceCurrency" content="RUB">р.</div>
                        </div>
                    <div class="row or t">
                        <div class="col-md-8 col-7">Стоимость рем.комплекта</div>
                        <div class="col-md-4 col-5 q">рассчитывается по VIN авто</div>
                        </div>                    
                </div>
                <div class="pt-4 lh pb-3" data-animated="fadeInUp">
                    <p  itemprop="description">Автосервис "Ремонт рулевых реек" качественно и максимально быстро выполнит <b>ремонт стартера</b> вашего автомобиля любой сложности.</p>
                </div>
            </div>            
        </div>


        <div class="col-12 pt-5">
        <div class="h1" data-animated="fadeInUp">Наши преимущества</div>
            <div class="row text-center pt-4 h lh">
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico3.png" alt="Диагностика"><br>Диагностика <b>всего за 1 час</b></div>
                <div class="col-md-3 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico4.png" alt="Ремонт"><br>Ремонт <b>в день обращения</b></div>
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico6.png" alt="Гарантия"><br>Гарантия на работу <b>до 1 года</b></div>
                <div class="col-md-3 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico2.png" alt="Мастера"><br>Мастера с опытом работы</div>
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico7.png" alt="Собственный токарный парк"><br>Собственный токарный парк</div>
            </div>     
            <div class="text-center pt-3 w" data-animated="fadeInUp">Записаться на ремонт можно по телефону <b>+7 (985) 222 - 87 - 82</b></div>
                 <div class="text-center pt-4 pb-4" data-animated="fadeInUp"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br>                   
            </div>              
        
            

        <? if (!is_null($children)){ ?>
            <div class="row pt-5" data-animated="fadeInUp">
                <div class="h1">Выполняем ремонт рулевых редукторов следующих моделей авто</div>
            </div>
            <div class="row model pb-5 pt-3 electro" data-animated="fadeInUp">           
                    <? foreach ($children as $child) : ?>                    
                        <a href="/remont-rulevyh-reduktorov/<?= $child->url ?>" title="<?= $child->menu ?>">
                            <div class="children">                                
                                <div class="tx"><?= $child->menu ?></div>                            
                            </div>
                        </a>
                    <? endforeach ?>            
            </div>
            
        <?}?>
        <div class="vopr text-justify" data-animated="fadeInUp">
            <?= $page->first()->body ?>
        </div>
        </div>
        
       
    </div>

</div>  



 <?= $this->element('block-gallery'); ?>

<?= $this->element('block-voprosotvet'); ?>  

<?= $this->element('map'); ?> 

    






    