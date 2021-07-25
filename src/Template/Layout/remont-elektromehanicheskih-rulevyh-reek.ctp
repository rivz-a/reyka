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

    <?= $this->element('header'); ?>
  
    <?= $this->element('menu'); ?>
    

<div class="container-fluid fon-reyka" data-animated="fadeInLeft">
    <div class="top_staty_reyka" wfd-id="47">
        <div class="staty_reyka" wfd-id="48">&nbsp;</div>
        <h1 data-animated="fadeInUp">Ремонт электромеханических рулевых реек (ЭУР): ключевые проблемы и их решение</h1> 
        
    </div>
</div>

<div class="content">
<?= $this->Flash->render() ?>      
</div>

<div class="container div1" wfd-id="42">    
    <div class="row pad" wfd-id="43">
        <div class="col-xs-12 col-md-7  revealator-slideright"  data-animated="fadeInLeft"wfd-id="45"><img alt="" src="/img/11.jpg" /></div>
        <div class="col-xs-12 col-md-5 text" wfd-id="44" data-animated="fadeInRight">
            <p>Четко и безотказно функционирующая система рулевого управления &mdash; один из ключевых атрибутов современного автомобиля. Отлаженные управляющие механизмы обеспечивают комфортную и безопасную езду.<br />
            <br />
            Особое внимание автовладельцам следует уделять важному элементу системы управления &mdash; электрическому усилителю рулевого колеса. Это устройство отвечает за точность реакции системы на усилия, прикладываемые водителем для выполнения поворота.<br />
            <br />
            Идеально исправный рулевой электромеханический усилитель &mdash; надежный помощник водителя в сложных дорожных ситуациях. Оснащенные им машины экономят мощность силового агрегата, а их топливный расход стремится к минимальному. Последнее важно не только в финансовом плане, но и в отношении экологии.</p>
        </div>
    </div>
</div> 

<div class="container-fluid" style="background: antiquewhite;" wfd-id="37">
    <div class="container div2 text-center" wfd-id="38">
        <h2 data-animated="fadeInUp">Диагностика, замена и ремонт электрореек всех видов</h2>
        <p style="font-size:18px;" data-animated="fadeInUp">С функциональной и технологической точек зрения, усилители руля бывают двух видов.</p>
           
        <div class="row text-center" wfd-id="39">
             <div class="col-xs-12 col-md-6" data-animated="fadeInLeft" wfd-id="41">
                <img alt="" src="/img/gid_us.jpg" />
                <p>В настоящее время устройства этого типа утрачивают популярность. Значительно чаще современные автопроизводители отдают предпочтение второму виду.</p>
            </div>
            <div class="col-xs-12 col-md-6 revealator-zoomin" data-animated="fadeInRight" wfd-id="40">
                <img alt="" src="/img/el_us.jpg" />
                <p>В свою очередь подразделяется на электромеханические колонки и электромеханические рейки, о специфике работы, достоинствах, диагностике и ремонте которых пойдет речь дальше.</p>
            </div>
        </div>
    </div>
</div>

<div class="container div3" wfd-id="29">
    <h2 data-animated="fadeInUp">Особенности и преимущества электромеханических реек</h2>
    <div class="row pad" wfd-id="34">        
        <div class="col-xs-12 col-md-7"  data-animated="fadeInLeft" wfd-id="36"><img alt="" src="/img/3reyka.jpg" /></div>
        <div class="col-xs-12 col-md-5 text" wfd-id="35" data-animated="fadeInRight">
            <p dir="ltr">Устройства электромеханического типа имеют массу технологических преимуществ по сравнению со своими гидравлическими аналогами. Они не перекачивают какую-либо жидкость, что полностью снимает необходимость в магистральных трубках &mdash; их в конструкции просто нет. Следовательно, такая частая проблема насосов, как протечки масла, в данной системе не может возникнуть по определению.<br />
            <br />
            Также имеет смысл обратить внимание на то, как именно устроен электрический механизм. Основной принцип работы отражен в названии системы. Речь идет об устройстве, в котором электрические компоненты взаимодействуют с механическими. Кроме этого, рулевая рейка, как и многие другие аппаратные элементы автомобиля, оснащена собственным электронным управляющим блоком (ЭБУ).</p>
        </div>
    </div>

    <div class="row pad" wfd-id="31">
        <div class="col-xs-12 col-md-5 text" wfd-id="33" data-animated="fadeInLeft">
            <p dir="ltr">Функциональные &laquo;обязанности&raquo; ЭБУ &mdash; контроль слаженности работы компонентов системы рулевого управления при взаимодействии с другими узлами машины. Поэтому неполадки в ЭБУ влекут за собой срывы в работе многих механизмов автомобиля, оказывают негативное влияние на безопасность вождения.<br />
            <br />
            Некоторые владельцы авто, особенно из числа тех, кто имеет определенные навыки и опыт авторемонта, пытаются справиться с проблемами в системе рулевого управления самостоятельно, стремясь сэкономить на обращении в специализированный автосервис. В подавляющем большинстве случаев результаты самостоятельного ремонта оказываются временными, неудовлетворительными и могут привести к печальным последствиям.</p>
        </div>

        <div class="col-xs-12 col-md-7"  data-animated="fadeInRight" style="text-align: right;" wfd-id="32"><img alt="" src="/img/4reyka.jpg" /></div>
    </div>

    <div class="row pad" wfd-id="30">
        <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Разобрать, проверить, установить и настроить что-либо в конструкции современного автомобиля должным образом возможно лишь в условиях профессионального автосервиса.</p>
    </div>
</div>

<div class="container div3" wfd-id="15">
    <h2 data-animated="fadeInUp">Почему электрорейка неисправна</h2>
    <div class="row row-center pad" wfd-id="26">        
        <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Итак, причиной проблем в работе электрической рулевой рейки может являться некорректно функционирующий или полностью вышедший из строя ЭБУ. От неполадок с блоком управления не застрахованы даже самые надежные и дорогостоящие автомобили класса люкс.</p>
    
        <div class="col-xs-12 col-md-7"  data-animated="fadeInLeft" wfd-id="28"><img alt="" src="/img/5reyka.jpg" /></div>
        <div class="col-xs-12 col-md-5 text" wfd-id="27" data-animated="fadeInRight">
               <p dir="ltr">Одна из самых распространенных причин возникновения дефектов &mdash; попадание внутрь блока воды. Намокание ЭБУ изнутри немедленно выводит его из строя. Проникновение влаги часто происходит из-за рваного отверстия в пыльнике, который прилегает к тягам руля.<br />
               <br />
               Поэтому всем автолюбителям настоятельно рекомендуется регулярно проверять его техническое состояние, не допускать полного изнашивания.</p>
        </div>
        </div>

    <div class="row row-center pad" wfd-id="23">
        <div class="col-xs-12 col-md-5 text" wfd-id="25" data-animated="fadeInLeft">
            <p dir="ltr">Разорванный пыльник с нарушенной герметичностью &mdash; причина неизбежного попадания воды внутрь рейки. Результатом &nbsp;становится быстрое механическое повреждение рейки и деградация ее частей: появление ржавчины на вале, подшипниках и, наконец, на самой рульрейке.</p>
        </div>

        <div class="col-xs-12 col-md-7" data-animated="fadeInRight" style="text-align: right;" wfd-id="24"><img alt="" src="/img/6reyka.jpg" /></div>
    </div>

    <div class="row row-center pad" wfd-id="20">
        <div class="col-xs-12 col-md-7"  data-animated="fadeInLeft" wfd-id="22"><img alt="" src="/img/7reyka.jpg" /></div>

        <div class="col-xs-12 col-md-5 text" wfd-id="21" data-animated="fadeInRight">
            <p dir="ltr">Стоит сказать, что многие зарубежные производители автомобилей нашли эффективное решение описанной проблемы. На некоторых современных моделях ЭБУ размещен в подкапотном пространстве. Так он надежно защищен от выхода из строя вследствие попадания внутрь воды.<br />
            <br />
            Хороший пример такой машины &mdash; продукт автопрома Японии Lexus. Тем не менее, такой инженерный подход к размещению ЭБУ не дает стопроцентной гарантии от его повреждения. Нахождение блока под капотом не защищает его от механических воздействий при неправильном вмешательстве в процессе ремонта или при аварии.</p>
        </div>
    </div>

    <div class="row row-center pad" wfd-id="17">
        <div class="col-xs-12 col-md-5 text" wfd-id="19" data-animated="fadeInLeft">
            <p dir="ltr">Гораздо более частой причиной неправильной работы электрорейки становятся дорожные происшествия и далеко не всегда серьезные. Сочетание небрежного стиля вождения и плохого дорожного покрытия значительно сокращает срок эксплуатации всей системы управления в общем и электромеханической рейки в частности.<br />
            <br />
            Необходимость ремонта реек во многих случаях может быть связана и с так называемой &laquo;усталостью металла&raquo;, проще говоря, механическим износом деталей. В таком случае речь, наиболее вероятно, пойдет о том, чтобы снять рульрейку и заменить ее полностью.</p>
        </div>

        <div class="col-xs-12 col-md-7" data-animated="fadeInRight" style="text-align: right;" wfd-id="18"><img alt="" src="/img/8reyka.jpg" /></div>
    </div>

    <div class="row pad" wfd-id="16">
        <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Наконец, механизм может выйти из строя внезапно и без каких-либо очевидных причин. Определить, почему рейка неисправна, с высокой степенью достоверности можно лишь с помощью грамотной компьютерной диагностики. Поэтому обращение в специализированный автосервис &mdash; наиболее разумное решение в любом случае.</p>
    </div>
</div>

<div class="container-fluid pt-4 pb-4" style="background: antiquewhite;" wfd-id="3">
    <div class="container div4" wfd-id="4">
        <h2 data-animated="fadeInUp">Признаки некорректной работы рулевой рейки</h2>
        <div class="row" wfd-id="11">
            <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">Перечислим серию признаков-&laquo;симптомов&raquo;, которые точно указывают на наличие дефектов в системе рулевого управления автомобилем:</p>
            <div  class="col-xs-12 col-md-4" data-animated="rollIn" wfd-id="14"><img alt="" src="/img/9reyka.jpg" />
                <p dir="ltr">ощущение нехарактерной &laquo;тяжести&raquo; при поворотах руля &mdash; водителю приходится прикладывать существенно больше усилий, чем обычно в той или иной дорожной ситуации, особенно при парковке, медленном маневрировании и т. п.;</p>
            </div>

            <div class="col-xs-12 col-md-4" data-animated="rollIn" wfd-id="13"><img alt="" src="/img/10reyka.jpg" />
                <p dir="ltr">любые необычные посторонние звуки, стук со стороны рулевого колеса;</p>
            </div>

            <div class="col-xs-12 col-md-4" data-animated="rollIn" wfd-id="12"><img alt="" src="/img/11reyka.jpg" />
                <p dir="ltr">разница в глубине поворота руля влево-вправо: в одну сторону руль прокручивается более плавно;</p>
            </div>
        </div>

        <div class="row" wfd-id="6">
            <div class="col-xs-2 col-md-2" wfd-id="10">&nbsp;</div>

            <div class="col-xs-12 col-md-4" data-animated="rollIn" wfd-id="9"><img alt="" src="/img/12reyka.jpg" />
                <p dir="ltr">непривычный люфт со стороны рулевого колеса: система управления не отвечает на усилия водителя адекватно;</p>
            </div>

            <div class="col-xs-12 col-md-4" data-animated="rollIn" wfd-id="8"><img alt="" src="/img/13reyka.jpg" />
                <p dir="ltr">отчетливый стук внутри корпуса рульрейки.</p>
            </div>

            <div class="col-xs-2 col-md-2" wfd-id="7">&nbsp;</div>
        </div>

        <div class="row pb-5" wfd-id="5" data-animated="fadeInUp">
            <p style="font-size:18px;text-align: center;">Электромеханическая рульрейка &mdash; технически сложный механизм, в котором сочетаются электрика и компоненты механики. По этой причине выявление точных причин неисправностей по звуку или визуально, по поведению машины при езде вряд ли представляется возможным.</p>
        </div>
    </div>
</div>

<div class="container-fluid bottom" wfd-id="0">
    <div class="container div5" wfd-id="1">
        <div class="row " wfd-id="2" data-animated="fadeInUp">
            <h2 data-animated="fadeInUp">Диагностика и ремонт в автосервисе &mdash; оптимальный вариант</h2>

            <p style="font-size:16px;" data-animated="fadeInUp">Найти и устранить истинную причину неполадок помогут инженеры специализированного автосервиса, одним из профилей которого является диагностика и ремонт рулевого управления авто. Лишь после тщательной компьютерного исследования, которое будет выполнено с помощью уникального комплекса программного обеспечения, мы приступим к ремонту узла.</p>

            <p style="font-size:16px;" data-animated="fadeInUp">Итак, ремонт рулевой ЭУР &mdash; технологически отлаженный процесс, успешно реализуемый только в условиях современного профильного автосервиса, оборудованного всем необходимым. Мы заинтересованы в том, чтобы за разумные деньги отремонтировать и отрегулировать систему рулевого управления вашего автомобиля с соблюдением оговоренных сроков оказания услуг. Доверьтесь нашему опыту и профессионализму!</p>
            
            <div data-animated="fadeInUp" style="margin: 0 auto;"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br></div>
        </div>
    </div>
</div>
 

<?= $this->element('map'); ?>   

<?= $this->element('footer'); ?>


<?= $this->fetch('scriptBottom');?>
<script>
    jQuery(document).ready(function()
    {                
        jQuery(".Model").change(function()
        {
            var id=jQuery(this).val();
            var dataString = 'id='+ id;
        
            jQuery.ajax
                ({
                type: "POST",
                url: "get_state.php",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    jQuery(".Engine").html(html);
                } 
                });
        });
        
    });
</script>
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
