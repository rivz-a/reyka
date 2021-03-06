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

        <h1 data-animated="fadeInUp">?????????????????????????? ?????????????? ?????????? ?????????? 6 ?? ???????????? GH: ???????????? ?????????????????? ?? ??????????????.</h1>
        <div data-animated="fadeInUp" style="margin: 0 auto;"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">???????????????????? ???? ????????????</button><br></div>
    </div>
        </div>

        <div class="container div1">
        <div class="row pad">
        <div class="col-xs-12 col-md-7" data-animated="fadeInLeft"><img alt="" src="/img/mazda1.jpg" /></div>

        <div class="col-xs-12 col-md-5 text" data-animated="fadeInRight">
        <p>?????? ???????????????????? ???????????????? ???????????????????????? ?????????? ?????????? 6 GH, ???? ?????????????? ?????????? ???????????????? ?????????? ???????????????????? ???????????????????? ?????????????????????????? ??????????????????, ???????????????? ???????????????????? ?????????????????????????? ???????????????????? ??????????????????????. ?????????? ???? ?????????? ?????????????? ???????????????????? ???????????????????? ??? ?????????????????? ?????????????????? ?????? ?????????????????????????? ???????????????????????????????? ??????????????????????????. 
        <br /><br />?????????????????????????????? ????????????, ?????????????? ?????????? ?? ?????????????????? ??????????????????, ?????????????????? ?? ?????????????????? ???? ???????????????? ???????? ?????????? ?????????????????????????? ??????????. ?????????? ?????????????????? ?? ??????, ?????? ????????????, ?????? ?????????? ????????????????????, ?? ?????? ???????????????????? ??????????????, ?????????? ???????????????? ???? ?? ??????????????.</p>
        </div>
        </div>
    </div>



    <div class="container-fluid" style="background: antiquewhite;">
    <div class="container div4">
    <h2 data-animated="fadeInUp">???????????????? ???????????????? ?????????????? ?? ????????????</h2>
    <div class="row">    

    <p style="font-size:18px;text-align: center;    padding-bottom: 25px;    padding-top: 25px;"  data-animated="fadeInUp">?????????????????????????????? ???????? ?????????????? ?? ???????????????????????? ???????????? 6??, ???? ???????????????? ?????????????????? ???????????????? ???????????????????????????????? ??????????????????????, ?????????????? ?????????? ?????? ?????? ?????? ???????? ???????????????????????????? ??????????????????.
    </p>

    <div class="col-xs-12 col-md-4" data-animated="rollIn"><img alt="" src="/img/mazda2.jpg" />
    <p class="text_fon">???????? ?? ????????</p>
    <p dir="ltr" style="    padding-bottom: 20px;">???????????????????????? ?????? ???????????????? ???????????????????? ?? ?????????????????????????? ??????????</p>
    </div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda3.jpg" />
    <p class="text_fon">???????? ?????? ????????????????</p>
    <p dir="ltr">???????? ???????? ???????????? ?????? ?????????????? ?????????????????????????????? ????????????????????</p>
    </div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda4.jpg" />
    <p class="text_fon">?????????????????????????? ???????????????? ????????????</p>
    <p dir="ltr">???????? ???????????????????? ???????????????????????????? ?????? ????????????????????????????</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-2">&nbsp;</div>

    <div class="col-xs-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda5.jpg" />
    <p class="text_fon">?????????????????????????????? ?????????????????????????? ????????????</p>
    <p dir="ltr">?????? ???????????????? ???????????????? ???????????? ?? ?????? ?????????????? ???????????? ???????????????????????????? ????????????????????????</p>
    </div>

    <div class="col-xd-12 col-md-4"  data-animated="rollIn"><img alt="" src="/img/mazda6.jpg" />
    <p class="text_fon">???????????? ???????? ?????? ?????????????????????? ??????????????????</p>
    <p dir="ltr">?????????? ???????????? ???? ????????????????, ???????? ???????????????????????????? ?????????? ???????????? ???????? ???? ???????????????????????????? ??????????</p>
    </div>

    <div class="col-md-2">&nbsp;</div>
    </div>

    <div class="row pad">
    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">?????????????????????????????????????? ?????????????????? &mdash; ???????????????????? ?????????????? ????????????????, ?? ?????????????? ???????????????????? ?????????????????? ?? ???????????????????? ????????????????. ???? ???????? ?????????????? ?????????????????? ???????????? ???????????? ???????????????????????????? ???? ?????????? ?????? ??????????????????, ???? ?????????????????? ???????????? ?????? ???????? ???????? ???? ???????????????????????????? ??????????????????.</p>
    </div>
    </div>
    </div>




    <div class="container div1">
        <h2 data-animated="fadeInUp">?????????????? ?????????????? ?? ???????? ???????????? ???? Mazda 6 GH</h2>
    <div class="row pad">
    

    <div class="col-xs-12 col-md-7 "  data-animated="fadeInLeft"><img alt="" src="/img/mazda7.jpg" /></div>

    <div class="col-xs-12 col-md-5 text" data-animated="fadeInRight">
    <p>?????????????? ?????????? ?? ?????????????????????? ?????????????? 6 GH ?????????????? ???? ?????????? ???????????? ???? ?? ???????????????????? ???????????????????????????? ??????????????????, ???????????????????? ???????????????????? ????????????-??????????????????????????. ???? ?????????????????????? ?????????????? ?? ???????????????????? ?????????????????? ????????????????, ?????????????????? ????????, ?????????????????????????? ????????????????, ?????????????? ?????????????????? ?? ???????????????????? ?????????????????????? ???????????????? ?? ???????????????????????? ????????????????????????????????. 
    <br /><br />???????????????? ?????????? ???? ????????????????, ?????? ?????????? ???? ???????????? ?? ???????????????? ?????????????????? ?????????????????????? ?????????????????????? ???? ?????? ???????? ?? ???????????????? ????????????, ?? ?????? ?????????? ?? ???? ???????????????? ?????????????? ????????????????????.</p>
    </div>
    </div>

    <div class="row">
    <p style="font-size:18px;text-align: center;padding-bottom: 30px;    padding-top: 30px;" data-animated="fadeInUp">???? ?????????? ???????? ???????????? ?????????????????????????? ?????????????? ??????????. ???????? ???????????????? ?? ?????? ???? ??????, ?????????????? ?????????????????????? ?? ?????????????????????? ?????????? ?????? ????????????????, ???? ?????????? ??????????????????:
    </p>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda8.jpg" />
    <p dir="ltr"  class="text_fon1">???????????????????? ??????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda9.jpg" />
    <p dir="ltr" class="text_fon1">?????????? ?????????????????? ?????????????? ??????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda10.jpg" />
    <p dir="ltr" class="text_fon1">???????????????????? ???????????????? ???????????????? ?????????? ?? ??????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda11.jpg" />
    <p dir="ltr" class="text_fon1">?????????? ???? ?????????? ???????????????????? ????????;</p>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda12.jpg" />
    <p dir="ltr" class="text_fon1">???????????????? ?? ????????????????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda13.jpg" />
    <p dir="ltr" class="text_fon1">?????????? ?????????????? ???????????????????? ???????????? ??????????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda14.jpg" />
    <p dir="ltr" class="text_fon1">?????????? ???????????? ????????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda15.jpg" />
    <p dir="ltr" class="text_fon1">?????????????????????? ???????????????? ????????????????;</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-1">&nbsp;</div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda16.jpg" />
    <p dir="ltr" class="text_fon1">???????????? ?????????? ?? ?????????????????? ??????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda17.jpg" />
    <p dir="ltr" class="text_fon1">?????????????????? ????????????????????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" style="    padding-bottom: 50px;" data-animated="rollIn"><img alt="" src="/img/mazda18.jpg" />
    <p dir="ltr" class="text_fon1">?????????????? ??????????????.</p>
    </div>

    <div class="col-md-1">&nbsp;</div>
    </div>
    </div>


    <div class="container-fluid" style="background: antiquewhite;">
    <div class="container div2"><h2 data-animated="fadeInUp">?????? ???????????????? ?????????????????????? ???????????????? ???? ?????????? 6 GH</h2>
    <div class="row">
    

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">???????? ???? ?????????????????????? ?? ?????????????????????? ?????????????????????????????????? ????????????????, ???? ?????????????????? ?????????? ???????????? ???????????????? ???????????????????? ???????????????????? Mazda ?????????? ?????????????????????? ?????????????????? ??????????????:</p>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda19.jpg" style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">01</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>???????????? ?????????????? ?????????????????? ???????????????????? ?????????????????? ???????????????? ????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda20.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">02</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>?????????????? ???? ???????????????????? ???????????????????? ???? ?????????????????????? ?????????????????????? ????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda21.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">03</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>
    <p>???????????? ?????????????????? ???? ?????????????????????? ????????????????????, c ?????????????? ???????????????? ?????????????? ???????? ???????????????????????? ?? ?????????????????????? ??????????????????????;</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="fadeInUp"><img alt="" src="/img/mazda22.jpg"  style="box-shadow: 0px 0px;"/>
    <p class="text_fon2">04</p>
    <p>???????????? ?????????????????? ?????????????????????? ????????????.</p>
    </div>

    </div>
    </div>
    </div>



    <div class="container-fluid" style="">
    <div class="container div2"> <h2 data-animated="fadeInUp">?????????????????????? ???????????????????????????? ?????????? Mazda 6 GH</h2>
    <div class="row">
   

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">?? ???????????? ???????????????????????????? ?????????????????? ???????????? ???????????????????????? ?????????????????? ???????????????????? ?????? ???????????????????????? ?????????? ?????????????????????????? ???????????????? ??????????, ?????? ?????????????????????????? ?????????? ???????????????? ???? ???????????? ???????????????????? ?????? ????????????????.</p>

    <div class="col-xs-12 col-md-1"></div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>???????????????? ???????????????? ????????????????????, ???????????????? ?????????????????? ?? ????????????????????. </p>
    </div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>???????????? ?????????????? ???????? ?????? ????????????.</p>
    </div>

    <div class="col-xs-12 col-md-3 text_radius" data-animated="fadeInUp">
    <p>?????????????????????????????? ?????????????? ??????????.</p>
    </div>

    <div class="col-xs-12 col-md-1"></div>
    </div>

    <div class="row">

    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">?????????? ??????????????, ?????????????? ?????????????????? ???????????????????? ?? ?????????????????????? ?? ???????????????????????????????????? ?????????????????????? ???? ???????????? ??????????. ?????????? ???? ?????????????? ?????????????????? ?????????????????? ?????????????? ???????????????? ?? ???????????? ???????????????????? ????????, ?????????????????????? ???????????????????? ?? ?????????????????????????? ?????????????? ?????????????? ??????????. ?????????????????????????? ???? ?????????????????? ?????????? ???????????????? ???????????????? ?????????????????????????? ?????????????? ??????????????????????.</p>

    </div>


    <div class="row pad">
    <div class="col-xs-12 col-md-7 revealator-slideright" data-animated="fadeInLeft"><img alt="" src="/img/mazda23.jpg" /></div>
    <div class="col-xs-12 col-md-5 " style="    padding-top: 40px;" data-animated="fadeInRight">
    <h3>???????????????? ???????????????????????? ???????????? ?????????????? ??????????????. </h3>
    <p dir="ltr" style="text-align: justify;">?????????? ?????????????????? ????????????, ???????????????????? ?????????? ???????????????? ???????????????????? ??????????. ?????? ?????????????????????? ?? ???????????????????????????? ????????????????????, ?????????????????????? ?????????????????????? ?????????????????????? ????????????????????????. ?? ???????????????? ???????????????????????? ?????????????????????? ???????????????????????? ?????????????????????? ??????????????. ???????? ???? ???????????????? ?? ????????????, ?????????? ???????????????????????? ???????????????? ?????????????????????? ????????????????????.</p>
    </div>
    </div>

    <div class="row pad">
    <div class="col-xs-12 col-md-5 " data-animated="fadeInLeft">
    <h3>?????????????????? ???????????? ?????????????????? ????????????????.</h3>
    <p dir="ltr" style="text-align: justify;">?????????????????? ?????????????????????? ???????????????????? ????????????, ?????????? ?????????????? ?? ??????????????????, ???? ???? ???????????? ???? ?????????????????????? ?? ???????????????? ?????????? ?????????????????????? ???? ????????????????????-?????????????? ???? ?????????????????? ??????????????????????. ?? ???????????? ?????????????? ?????????? ?????????????? ????????: ?????????? ?????????????? ?????????????? ??????????????????????, ?? ?????? ?????????????????? ???????????????????????? ?? ?????????????? ?????????????????? ??????????????????, ???????????????????? ?????????????????????????? ?? ??. ??. 
    <br />
    <br />
    ?? ?????????????????????? ???? ???????????? ?????????????? ?? ?????????????????????????? ?????????????? ?????????????????????? ?????????????????????????? ?????????? ???? ?????????????????? ?????????? ??????????????????, ???? ?????????????????????????? ?????????????? ???????????????? ?????????????????? ???????????????? ???????????????? ???? ??????????????????.</p>
    </div>
    <div class="col-xs-12 col-md-7" style="text-align: right;" data-animated="fadeInRight"><img alt="" src="/img/mazda24.jpg" /></div>
    </div>

    <div class="row pad">
    <div class="col-xs-12 col-md-7 revealator-slideright" data-animated="fadeInLeft"><img alt="" src="/img/mazda25.jpg" /></div>
    <div class="col-xs-12 col-md-5" style="text-align: justify;" data-animated="fadeInRight">
    <h3>???????????? ??????????????/???????????????????????? ???????????? ??????????????.</h3>
    <p dir="ltr">?? ???????????????? ???????????????????????? ???????? ?????????? 6 GH ????????????, ?? ?????????? ?? ?????? ???????????????????????? ???????????? ??????????????????????????. ???? ???? ?????????????????????? ???????????????????? ??????????????, ?? ?? ?????????????????? ?????????????? ?? ?????????? ?????????????????? ??????????????????????. ?? ???????? ???????????? ???????????????????? ?????????????????????????? ??????????????????????.
    <br />
    <br />
    ?????????? ?????????? ?????????? ???????????????? ???????????????? ???? ????, ?????? ???????????? ?????????????? ?????????????????????????? ????????????????. ???????????????? ?????????????? ???????????? ?????????????? ?? ???????????????? ??????????????. ???????? ???????? ???? ????????????????????, ?? ?????????????? ?????????????????????????? ???????????????????? ?????????????????????????????? ?? ??????????????????????????. ?????????? ??????????, ?????????????? ??????????, ?????? ?? ???????????? ???????????? ???????????????????? ???????????????? ????????????????????, ???????????????? ?????????????????????? ?????????????????????? ?????????????????????? ???????????? (??????).</p>
    </div>
    </div>

    <div class="row pad">
    <p style="font-size:18px;text-align: center;" data-animated="fadeInUp">?????????????? ?????????????? ???????????????????? ?? ???????????????? ?????????????????????????? ?? ???????????????????? ????????????????.</p>
    </div>


    <div class="row">
    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda26.jpg" />
    <p class="text_fon2">01</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">???????????? ???????????????? ???? ??????????????????</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda27.jpg" />
    <p class="text_fon2">02</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">???????????????????? ??????????????????</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda28.jpg" />
    <p class="text_fon2">03</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">?????????????????????? ???????????????????????????? ??????????????, ?????????????????????????? ???????????????? ????????????????</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda29.jpg" />
    <p class="text_fon2">04</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">?????????????? ?????????? ?????????????????????????? ?? ??????????????????????, ???????????????????? ???????????????? ????????????????????</p>
    </div>
    </div>

    <div class="row">
    <div class="col-md-1">&nbsp;</div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda30.jpg" />
    <p class="text_fon2">05</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">?????????????????????? ???????????????????? ?? ???????????????? ??????????????????</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda31.jpg" />
    <p class="text_fon2">06</p>
    <span class="glyphicon glyphicon-arrow-right" style="    position: absolute;    top: 33%;    color: white;    font-size: 36px;    font-weight: 900;    background: #eb5825;    margin-left: 0px;    opacity: 0.8;    text-align: center;    height: 38px;    width: 42px;"></span>

    <p dir="ltr">???????????????????? ????????????????????</p>
    </div>

    <div class="col-xs-12 col-md-3" data-animated="rollIn"><img alt="" src="/img/mazda32.jpg" />
    <p class="text_fon2">07</p>

    <p dir="ltr">???????????????????????? ????????????-??????????????????</p>
    </div>

    <div class="col-md-1">&nbsp;</div>
    </div>


    </div>
    </div>



    <div class="container-fluid bottom">
    <div class="container div5">
    <div class="row">
    <h2 data-animated="fadeInUp">???????????? ?????????? ??? ?????????????? ?? ??????</h2>

    <p style="font-size:16px;" data-animated="fadeInUp">?????????? ???????????????? ???????????????????? ???? ???????????? ??? ???????????? ?????????????? ?????? ?? ???????????????? ??????????????????????????. ?????????????????????????? ?????????????? ?????????????????????? ?????????????? ??? ?????????? ?????????????????????? ????????????????. ?????????? ???? ?????????????????????????? ?? ???????? ?????????????????? ?? ???????????????????????? ?????????????????????? ?? ???????? ??????????????????????, ???????????????? ???????????? ???????????????????????????? ???????????? ?????????????????????????????????????? ??????????????????????. ??????????????????????, ???? ??????????????!</p>
    <div data-animated="fadeInUp" style="margin: 0 auto;"><button type="button" data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">???????????????????? ???? ????????????</button><br></div>
        
    </div>
    </div>
    </div>





    <?= $this->element('footer'); ?>

    <?= $this->fetch('scriptBottom');?>
    
    <!--???????????? ?????? ???????????? ??????????-->
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
