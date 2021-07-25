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
        <h2 class="pt-3 pb-3" data-animated="fadeInUp">Признаки неисправности электрорейки:</h2>
        <div class="row pb-5 row-center" data-animated="fadeInUp">            
            <div class="col-md-8 col-12 lh pb-3">
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-2 col-3 text-right"><img src="/img/1.png" alt="Во-первых"></div>
                            <div class="col-md-10 col-9">Тугое вращение руля в двух направлениях, либо полностью отказ вращения руля</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-2 col-3 text-right"><img src="/img/2.png" alt="Во-вторых"></div>
                            <div class="col-md-10 col-9">Стук из под передней оси</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInUp">
                            <div class="col-md-2 col-3 text-right"><img src="/img/3.png" alt="В-третьих"></div>
                            <div class="col-md-10 col-9">При повороте руля раздается скрежет, хруст, либо другие нехарактерные звуки</div>
                        </div>   
                        <div class="text-center" data-animated="fadeInUp"><b>Диагностика электрорейки всего за 1 час!</b><br><br>
                             <button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на диагностику</button><br>
                        </div>
            </div>

            <div class="col-md-4 col-12 fn" data-animated="fadeInRight">
                <p><?= (!is_null($parent) ? $this->Html->image("/img/logo_model/".$parent->img.".png", ['alt'=>$parent->menu]) : $this->Html->image("/img/logo_model/".$page->first()->img.".png",['alt'=>$page->first()->menu])); ?></p>                    </div>

        </div>
        <hr>

        <div class="row pt-3">
            <div class="col-md-6 col-12" data-animated="fadeInUp"  itemscope itemtype="http://schema.org/Product">
                <div class="h1 pb-1" style="width: 100%" data-animated="fadeInUp"><?= $page->first()->name ?> стоимость</div>
                <div class="table container" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <div class="row row-center  th">
                        <div class="col-md-8 col-7">Вид ремонта электроейки</div>
                        <div class="col-md-4 col-5">цена</div>
                    </div>
                    <div class="row row-center  t">
                        <div class="col-md-8 col-7" itemprop="name">Ремонт люфта</div>
                        <div class="col-md-4 col-5 q">от <strong itemprop="price" content="8000">8000</strong> <meta itemprop="priceCurrency" content="RUB">р.</div>
                        </div>
                    <div class="row row-center  or t">
                        <div class="col-md-8 col-7">Ремонт неисправности эл.части</div>
                        <div class="col-md-4 col-5 q">от <strong itemprop="price" content="10000">10000</strong> <meta itemprop="priceCurrency" content="RUB">р.</div>
                        </div>
                    <div class="row row-center  t">
                        <div class="col-md-8 col-7">Адаптация эл.реек</div>
                        <div class="col-md-4 col-5 q">от <strong itemprop="price" content="1200">1200</strong> <meta itemprop="priceCurrency" content="RUB">р.</div>
                        </div>
                    <div class="row row-center  or t">
                        <div class="col-md-8 col-7">Привязка б.у. реек</div>
                        <div class="col-md-4 col-5 q">от <strong itemprop="price" content="3000">3000</strong> <meta itemprop="priceCurrency" content="RUB">р.</div>
                        </div>
                </div>
                <div class="pt-4 lh pb-3" data-animated="fadeInUp">
                    <p itemprop="description">Автосервис "Ремонт рулевых реек" качественно и максимально быстро выполнит <b>ремонт электрореек</b> вашего автомобиля по приемлемой цене.</p>
                </div>
            </div>
            <div class="col-md-5 col-12 lh pl" data-animated="fadeInRight">
                    <h2><?= $page->first()->name ?> включает в себя следующее:</h2>
                        <div class="row row-center pb-3" data-animated="fadeInRight">
                            <div class="col-md-2 col-3"><img src="/img/1.png" alt="Во-первых"></div>
                            <div class="col-md-10 col-9">Специалисты нашего центра проведут полную диагностику электрорейки. </div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInRight">
                            <div class="col-md-2 col-3"><img src="/img/2.png" alt="Во-вторых"></div>
                            <div class="col-md-10 col-9">Снятие электрорейки и проверка ее на стенде на предмет герметичности</div>
                        </div>
                        <div class="row row-center pb-3" data-animated="fadeInRight">
                            <div class="col-md-2 col-3"><img src="/img/3.png" alt="В-третьих"></div>
                            <div class="col-md-10 col-9">Ремонт либо замена изношенных деталей, устранение люфта при необходимости</div>
                        </div> 
                        <div class="row row-center pb-3" data-animated="fadeInRight">
                            <div class="col-md-2 col-3"><img src="/img/4.png" alt="В-четвертых"></div>
                            <div class="col-md-10 col-9">Сборка электрорейки</div>
                        </div>  
                        <div class="row row-center pb-3" data-animated="fadeInRight">
                            <div class="col-md-2 col-3"><img src="/img/5.png" alt="В-пятых"></div>
                            <div class="col-md-10 col-9">Тестирование электрорейки</div>
                        </div>      
            </div>
        </div>


        <div class="col-12 pt-5">
        <div class="h1" data-animated="fadeInUp">Наши преимущества</div>
            <div class="row text-center pt-4 h lh">
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico3.png" alt="Диагностика"><br>Диагностика <b>всего за 1 час</b></div>
                <div class="col-md-3 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico4.png" alt="Ремонт "><br>Ремонт <b>в день обращения</b></div>
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico6.png" alt="Гарантия на работу"><br>Гарантия на работу <b>до 1 года</b></div>
                <div class="col-md-3 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico2.png" alt="Мастера с опытом работы"><br>Мастера с опытом работы</div>
                <div class="col-md-2 col-12 pb-3" data-animated="fadeInUp"><img src="/img/ico7.png" alt="Собственный токарный парк"><br>Собственный токарный парк</div>
            </div>     
            <div class="text-center pt-3 w" data-animated="fadeInUp">Записаться на ремонт можно по телефону <b>+7 (495) 222-87-82</b></div>
                 <div class="text-center pt-4 pb-4" data-animated="fadeInUp"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br>                     
            </div>            
        
            

        <? if (!is_null($children)){ ?>
            <div class="row pt-5" data-animated="fadeInUp">
                <div class="h1">Выполняем ремонт электрореек следующих моделей авто</div>
            </div>
            <div class="row model pb-5 pt-3 electro" data-animated="fadeInUp">           
                    <? foreach ($children as $child) : ?>                    
                        <a href="/remont-elektroreek/<?= $child->url ?>" alt="<?= $child->menu ?>" title="<?= $child->menu ?>">
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

    






    