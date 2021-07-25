<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="ru">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $settings->meta_title; ?>        
    </title>
    <link rel="apple-touch-icon" href="/img/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/touch-icon-ipad-retina.png">
    <?= $this->Html->meta('icon','/img/favicon.png') ?>

    <?= $this->Html->meta('keywords',$settings->meta_keywords);?>

    <?= $this->Html->meta('description',$settings->meta_description);?>
    
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
        <!-- Open Graph -->
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?= $settings->meta_title; ?>" />
        <meta property="og:url" content="<?=$this->Url->build('/', true);?>" />
        <meta property="og:image" content="<?=$this->Url->build('/', true);?>img/logo.png" />
        <?if(!empty($settings->meta_title)){?>
        <meta property="og:title" content="<?= $settings->meta_title; ?>" />
        <?}?>
        <?if(!empty($settings->meta_description)){?>
        <meta property="og:description" content='<?= $settings->meta_description ?>' />
        <?}?>
        <!---->
        <?php
        $url = $this->request->scheme().'://'.$this->request->domain().$this->request->getRequestTarget();
              
        ?>
        <link rel="canonical" href="<?= $url; ?>">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->    
</head>
<body>

    <?= $this->element('header'); ?>

    <div class="menu">
        <?= $this->element('menu'); ?>
    </div>

    <div class="container-fluid block-zayavka">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="row row-center pb-3" data-animated="fadeInLeft">
                        <div class="col-2">
                            <picture>
                                <source srcset="/img/1.webp" type="image/webp">
                                <img class=" lazy-loaded" src="/img/1.png" alt="Во-первых" />
                            </picture>    
                        </div>                     
                        <div class="col-10">Появился стук в руле?</div>
                    </div>
                    <div class="row row-center pb-3" data-animated="fadeInLeft">
                        <div class="col-2">
                            <picture>
                                <source srcset="/img/2.webp" type="image/webp">
                                <img  class=" lazy-loaded" src="/img/2.png" alt="Во-вторых" />
                            </picture>  
                        </div>
                        <div class="col-10">Повороты руля значительно усложнились?</div>
                    </div>
                    <div class="row row-center pb-3" data-animated="fadeInLeft">
                        <div class="col-2">
                            <picture>
                                <source srcset="/img/3.webp" type="image/webp">
                                <img class=" lazy-loaded" src="/img/3.png" alt="В третьих" />
                            </picture>  
                        </div>
                        <div class="col-10">В свободном положении руля появилась отдача?</div>
                    </div>                   
                </div>
                <div class="col-md-6 text" data-animated="fadeInRight">
                    <div>Качественный ремонт рулевой <br>
                         рейки <span>от 6000р</span>.<br>
                        регулировка сход-развала на <br><span>стенде HUNTER 3D</span><br>
                        всего  <span>за 1 день</span><br>
                        с <span>гарантией до 1 года</span>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">                   
                   <div class="zayavka" data-animated="fadeInUp">
                        <h2>Запишитесь на ремонт прямо сейчас и получите скидку 5%</h2>                       
                        <?= $this->element('contactmail'); ?>
                        <?= $this->Flash->render() ?>
                   </div>
                </div>                
            </div>
        </div>
    </div>

    <?= $this->element('block-uslugi'); ?>  

    <?= $this->element('block-vibormodel'); ?>    

    <?= $this->element('block-plus'); ?>  

    <?= $this->element('block-voprosotvet'); ?>   

    <?= $this->element('block-gallery'); ?>   

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div> 
    <div class="container-fluid vopr text pt-5">
        <div class="container  text-justify" data-animated="fadeInUp">
            <div class="text-center pb-2" data-animated="fadeInUp">
                <picture>
                    <source srcset="/img/ico8.webp" type="image/webp">
                    <img class=" lazy-loaded" src="/img/ico8.png" alt="К сведению" />
                </picture>
            </div>
            <?= $settings->text_home; ?>
            <hr> 
        </div>        
    </div>
    
    <div class="container finish">
        <p>Теперь вы обладаете необходимой информацией, чтобы заказать ремонт рулевой рейки и не ошибиться.</p>
    </div>

    <?= $this->element('map'); ?>   

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

    <?= $this->element('metrika'); ?>
    <?= $this->element('zayavka'); ?>
    <?= $this->element('politica'); ?>
</body>
</html>
