<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="ru">
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
        <!-- Open Graph -->
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
        <!---->
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
<body>

    <?= $this->element('header');?>
  
    <?= $this->element('menu'); ?>
    
    <?= $this->fetch('content') ?>   

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
