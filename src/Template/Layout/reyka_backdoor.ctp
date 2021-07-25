<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Админка: 
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
   
    <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap') ?>
    <?= $this->Html->css('main.css') ?>     
    <?= $this->Html->script('ckeditor/ckeditor.js') ?>
    <?= $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js','main.js'), array('block' => 'scriptBottom')); ?> 
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<header>
        <div class="container">
            <div class="row row-center">
                <div class="col-lg-4 col-12 text-center"><a href="<?=$this->Url->build('/', true);?>"><img src="/img/logo.png"></a></div>
                <div class="col-lg-4 col-12 volna text-center"><img src="/img/reika.png"></div>
                
            </div>
        </div>
</header>

    <div class="menu">
        <?= $this->element('menu'); ?>
    </div>  
  
    <div class="container clearfix">
       
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        
    </div> 
  
  

    <footer>
        <div class="container pt-4 pb-3">
            <div class="row row-center">
                <div class="col-md-4 minitext text-right  pb-3"><img src="/img/logo.png"><br>                    
                   
                </div>
                <div class="col-md-4 text-center pb-3 ln">                   
                   
                </div>
                <div class="col-md-4 text-center pb-3">
                    
                </div>
            </div>
        </div>
    </footer>
    
    <?= $this->element('metrika'); ?>
    <?= $this->fetch('scriptBottom');?>  
   
</body>
</html>
