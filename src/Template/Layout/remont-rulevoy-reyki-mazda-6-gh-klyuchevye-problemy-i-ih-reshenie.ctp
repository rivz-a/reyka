<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->first()->meta_title; ?></title>

    <link rel="apple-touch-icon" href="/img/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/touch-icon-ipad-retina.png">

    <?= $this->Html->meta('icon','/img/favicon.png') ?>

    <?= $this->Html->meta('description',$page->first()->meta_description);?>

    
   
    <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap') ?>
    <?= $this->Html->css('main.css') ?>   
    
    <?= $this->Html->script('https://yandex.st/jquery/2.2.3/jquery.min.js'); ?> 

    <?= $this->Html->script(array('main.js','my.js','slick.js','lazy.js'), array('block' => 'scriptBottom')); ?> 
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <meta name="yandex-verification" content="e19a92638abda5c9" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="format-detection" content = "telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='yandex-verification' content='7ee7204a3ce3c28f' />
    <meta name="yandex-verification" content="c6f0a32802411078" />



        <!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
        <!------------------- Open Graph --------------------------->
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?= $page->first()->meta_title; ?>" />
        <meta property="og:url" content="<?=$this->Url->build('/', true);?>" />
        <meta property="og:image" content="<?=$this->Url->build('/', true);?>img/logo.png" />
        <?if(!empty($page->first()->meta_title)){?>
        <meta property="og:title" content="<?= $page->first()->meta_title; ?>" />
        <?}?>
        <?if(!empty($page->first()->meta_description)){?>
        <meta property="og:description" content='<?= $page->first()->meta_description ?>' />
        <?}?>
        <!---------------------------------------------------------->
        <?php
        $url = $this->request->scheme().'://'.$this->request->domain().$this->request->getRequestTarget();
       
        if ($this->request->getRequestTarget()=="/categories/index"){
            
            $url='https://rul-reika.ru/'.$page->first()->url;
        }
        ?>
        <link rel="canonical" href="<?= $url; ?>">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    
    
</head>
<body style="background-position-y: -8%;">

    <?= $this->element('header');?>
  
    <?= $this->element('menu'); ?>

    <div>
    <?= $this->Flash->render() ?>      
    </div>
    
 
    <div class="container-fluid fon_m">
        <div class="top_staty_reyka">
        <div class="staty_reyka">&nbsp;</div>

        <h1 data-animated="fadeInUp">Электрические рулевые рейки Мазда 6 в кузове GH: частые неполадки и причины.</h1>
        <div data-animated="fadeInUp" style="margin: 0 auto;"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br></div>
    </div>
        </div>

        <div class="container div1">
        <div class="row pad">
        <div class="col-xs-12 col-md-7" data-animated="fadeInLeft"><img alt="" src="/img/mazda1.jpg" /></div>

        <div class="col-xs-12 col-md-5 text" data-animated="fadeInRight">
        <p>Как показывает практика эксплуатации машин Мазда 6 GH, их рулевые рейки довольно часто становятся источником возникновения неполадок, делающих дальнейшее использование автомобиля невозможным. Выход из строя системы управления автомобиля — серьезное основание для вмешательства профессиональных автомехаников. 
        <br /><br />Самостоятельный ремонт, попытки снять и разобрать рульрейку, проверить и настроить ее механизм чаще всего заканчиваются ничем. Далее поговорим о том, как понять, что рейка неисправна, и что необходимо сделать, чтобы привести ее в порядок.</p>
        </div>
        </div>
    </div>



    <div class="container-fluid" style="background: antiquewhite;">
    <div class="container div4">
    <h2 data-animated="fadeInUp">Основные симптомы проблем с рейкой</h2>
    <div class="row">    

    <p style="font-size:18px;text-align: center;    padding-bottom: 25px;    padding-top: 25px;"  data-animated="fadeInUp">Проанализировав опыт ремонта и обслуживания «Мазда 6», мы выделили несколько наиболее распространенных последствий, имеющих место при тех или иных неисправностях рульрейки.
    </p>

    <div class="col-xs-12 col-md-4" data-animated="rollIn"><img alt="" src="/img/mazda2.jpg" />
    <p class="text_fon">Стук и шумы</p>
    <p dir="ltr" style="    padding-bottom: 20px;">Постукивание при маневрах автомобиля и нехарактерные звуки</p>
    </div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda3.jpg" />
    <p class="text_fon">Крен при движении</p>
    <p dir="ltr">Уход авто вправо при попытке стабилизировать траекторию</p>
    </div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda4.jpg" />
    <p class="text_fon">Сопротивление рулевого колеса</p>
    <p dir="ltr">Руль непривычно сопротивляется при маневрировании</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-2">&nbsp;</div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda5.jpg" />
    <p class="text_fon">Неравномерность распределения усилий</p>
    <p dir="ltr">При вращении рулевого колеса в обе стороны усилия распределяются неравномерно</p>
    </div>

    <div class="col-xd-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda6.jpg" />
    <p class="text_fon">Стопор руля при непрогретом двигателе</p>
    <p dir="ltr">Когда машина не прогрета, руль поворачивается очень трудно либо не поворачивается вовсе</p>
    </div>

    <div class="col-md-2">&nbsp;</div>
    </div>

    <div class="row pad">
    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Электромеханическая рульрейка &mdash; технически сложный механизм, в котором сочетаются электрика и компоненты механики. По этой причине выявление точных причин неисправностей по звуку или визуально, по поведению машины при езде вряд ли представляется возможным.</p>
    </div>
    </div>
    </div>




    <div class="container div1">
        <h2 data-animated="fadeInUp">Причины проблем с руль рейкой на Mazda 6 GH</h2>
    <div class="row pad">
    

    <div class="col-xs-12 col-md-7 "  data-animated="fadeInLeft"><img alt="" src="/img/mazda7.jpg" /></div>

    <div class="col-xs-12 col-md-5 text" data-animated="fadeInRight">
    <p>Рулевая рейка в автомобилях «Мазда» 6 GH выходит из строя отнюдь не в результате конструктивных недочетов, допущенных инженерами завода-производителя. Ее повреждения связаны с состоянием дорожного покрытия, условиями езды, особенностями вождения, износом механизма в результате воздействия коррозии и нерегулярным техобслуживанием. 
    <br /><br />Водителю стоит не забывать, что удары на кочках и выбоинах оказывают разрушающее воздействие на все узлы и агрегаты машины, в том числе и на элементы системы управления.</p>
    </div>
    </div>

    <div class="row">
    <p style="font-size:18px;text-align: center;padding-bottom: 30px;    padding-top: 30px;" data-animated="fadeInUp">На самом деле причин возникновения проблем много. Если говорить о тех из них, которые проявляются в посторонних шумах при движении, то стоит упомянуть:
    </p>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda8.jpg" />
    <p dir="ltr"  class="text_fon1">ослабление крепежа;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda9.jpg" />
    <p dir="ltr" class="text_fon1">слабо затянутые шаровые опоры;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda10.jpg" />
    <p dir="ltr" class="text_fon1">расширение просвета реечного упора и гайки;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda11.jpg" />
    <p dir="ltr" class="text_fon1">выход из строя крестовины вала;</p>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda12.jpg" />
    <p dir="ltr" class="text_fon1">коррозию в наконечниках;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda13.jpg" />
    <p dir="ltr" class="text_fon1">износ рабочих соединений частей механизма;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda14.jpg" />
    <p dir="ltr" class="text_fon1">облом зубцов шестерни;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda15.jpg" />
    <p dir="ltr" class="text_fon1">повреждение ременной передачи;</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-1">&nbsp;</div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda16.jpg" />
    <p dir="ltr" class="text_fon1">разрыв чехла и попадание грязи;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda17.jpg" />
    <p dir="ltr" class="text_fon1">сгоревшие предохранители;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda18.jpg" />
    <p dir="ltr" class="text_fon1">поломку датчика.</p>
    </div>

    <div class="col-md-1">&nbsp;</div>
    </div>
    </div>


    <div class="container-fluid" style="background: antiquewhite;">
    <div class="container div2"><h2 data-animated="fadeInUp">Как работает управляющий механизм на Мазда 6 GH</h2>
    <div class="row">
    

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Если не углубляться в технические терминологические тонкости, то упрощенно схему работы рулевого управления автомобиля Mazda можно представить следующим образом:</p>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda19.jpg" style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">01</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>датчик момента фиксирует актуальное положение рулевого колеса;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda20.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">02</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>импульс от устройства передается на электронный управляющий блок;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda21.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">03</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>сигнал переходит на усиливающее устройство, c помощью которого реечный шток перемещается в необходимом направлении;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda22.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">04</p>
    <p>машина выполняет необходимый маневр.</p>
    </div>

    </div>
    </div>
    </div>



    <div class="container-fluid" style="">
    <div class="container div2"> <h2 data-animated="fadeInUp">Диагностика неисправностей рейки Mazda 6 GH</h2>
    <div class="row">
   

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">С учетом вышеописанного алгоритма работы управляющего механизма выявляются три подверженных риску возникновения дефектов места, чья неисправность может повлиять на работу автомобиля при движении.</p>

    <div class="col-xs-12 col-md-1"></div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>Механика рулевого управления, напрямую связанная с рульрейкой. </p>
    </div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>Датчик момента либо его втулка.</p>
    </div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>Непосредственно рулевая рейка.</p>
    </div>

    <div class="col-xs-12 col-md-1"></div>
    </div>

    <div class="row">

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Таким образом, причины неполадок выявляются и устраняются в специализированном автосервисе по особой схеме. Чтобы по очереди исключить возможные причины перебоев в работе управления авто, диагностика начинается с классического осмотра ходовой части. Неисправность ее элементов может являться причиной возникновения похожих «симптомов».</p>

    </div>


    <div class="row pad">
    <div class="col-xs-12 col-md-7 revealator-slideright" data-animated="fadeInLeft"><img alt="" src="/img/mazda23.jpg" /></div>
    <div class="col-xs-12 col-md-5 " style="    padding-top: 40px;" data-animated="fadeInRight">
    <h3>Проверка корректности работы датчика момента. </h3>
    <p dir="ltr" style="text-align: justify;">Чтобы проверить датчик, необходимо также провести калибровку рейки. Она выполняется с использованием компьютера, оснащенного специальным программным обеспечением. В процессе компьютерной диагностики определяется исправность датчика. Если он пригоден к работе, рейка выставляется согласно нормативным параметрам.</p>
    </div>
    </div>

    <div class="row pad">
    <div class="col-xs-12 col-md-5 " data-animated="fadeInLeft">
    <h3>Кустарный способ «решения» проблемы.</h3>
    <p dir="ltr" style="text-align: justify;">Некоторые автомастера практикуют другой, более дешевый и доступный, но не отнюдь не эффективный и надежный метод регулировки от «умельцев»-соседей по гаражному кооперативу. В основе способа лежит простая идея: болты корпуса датчика ослабляются, и его положение регулируется с помощью различных прокладок, вставочных «конструкций» и т. п. 
    <br />
    <br />
    В зависимости от уровня мастера и определенного везения последствия неисправности можно на некоторое время устранить, но кардинального решения проблемы кустарным способом добиться не получится.</p>
    </div>
    <div class="col-xs-12 col-md-7" style="text-align: right;" data-animated="fadeInRight"><img alt="" src="/img/mazda24.jpg" /></div>
    </div>

    <div class="row pad">
    <div class="col-xs-12 col-md-7 revealator-slideright" data-animated="fadeInLeft"><img alt="" src="/img/mazda25.jpg" /></div>
    <div class="col-xs-12 col-md-5" style="text-align: justify;" data-animated="fadeInRight">
    <h3>Замена датчика/направляющей втулки датчика.</h3>
    <p dir="ltr">В процессе эксплуатации авто Мазда 6 GH датчик, а часто и его направляющая втулка деформируются. На их поверхности появляются вмятины, а в некоторых случаях и более серьезные повреждения. В этом случае необходимо устанавливать ремкомплект.
    <br />
    <br />
    Также имеет смысл обратить внимание на то, как именно устроен электрический механизм. Основной принцип работы отражен в названии системы. Речь идет об устройстве, в котором электрические компоненты взаимодействуют с механическими. Кроме этого, рулевая рейка, как и многие другие аппаратные элементы автомобиля, оснащена собственным электронным управляющим блоком (ЭБУ).</p>
    </div>
    </div>

    <div class="row pad">
    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Процесс монтажа проводится в условиях автотехцентра и происходит поэтапно.</p>
    </div>


    <div class="row">
    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda26.jpg" />
    <p class="text_fon2">01</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Машину загоняют на подъемник</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda27.jpg" />
    <p class="text_fon2">02</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Опускается подрамник</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda28.jpg" />
    <p class="text_fon2">03</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Отключается аккумуляторная батарея, отсоединяются элементы проводки</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda29.jpg" />
    <p class="text_fon2">04</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Рулевая рейка демонтируется и разбирается, изношенные запчасти заменяются</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-1">&nbsp;</div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda30.jpg" />
    <p class="text_fon2">05</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Конструкция собирается в исходное положение</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda31.jpg" />
    <p class="text_fon2">06</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">Проводится калибровка</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda32.jpg" />
    <p class="text_fon2">07</p>

    <p dir="ltr">Регулируется развал-схождение</p>
    </div>

    <div class="col-md-1">&nbsp;</div>
    </div>


    </div>
    </div>



    <div class="container-fluid bottom">
    <div class="container div5">
    <div class="row">
    <h2 data-animated="fadeInUp">Стучит рейка — стучите к нам</h2>

    <p style="font-size:16px;" data-animated="fadeInUp">Отказ рулевого управления на дороге — частая причина ДТП с тяжелыми последствиями. Своевременное решение возникающих проблем — залог безопасного вождения. Чтобы не переплачивать и быть уверенным в правильности проделанных с авто манипуляций, поручите работу профессионалам нашего специализированного автосервиса. Обращайтесь, мы поможем!</p>
    <div data-animated="fadeInUp" style="margin: 0 auto;"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br></div>
        
    </div>
    </div>
    </div>





    <?= $this->element('footer'); ?>

    <?= $this->fetch('scriptBottom');?>
    
    <!--скрипт для кнопки вверх-->
    <div id="upbutton"></div>
    <script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
        if ($('#upbutton').is(':hidden')) {
        $('#upbutton').css({opacity : 1}).fadeIn('slow');
        }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
    </script>
    <style>#upbutton {background: url("/img/up.png") no-repeat top left;height: 90px;width: 70px;bottom: 30px;right: 35px;cursor: pointer;display: none;position: fixed;z-index: 999;}</style>

    <?= $this->element('metrika'); ?>
    <?= $this->element('zayavka'); ?>
    <?= $this->element('politica'); ?>
</body>
</html>
