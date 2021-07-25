

<div class="container clearfix">

    <div class="breadcrumb">
        <a rel="nofollow" href="<?=$this->Url->build('/', true);?>">Главная</a>&nbsp;/&nbsp;<?= $page->first()->name;?>
    </div>

    <div class="content">
        <div class="container">
            <?= $this->Flash->render() ?>

            <h1><?= $page->first()->name ?></h1>

            <div class="about text-justify">
                <?= $page->first()->body ?>
            </div>
        </div>
        

    </div>

</div>

<?= $this->element('block-gallery'); ?>

<?= $this->element('block-voprosotvet'); ?>  

<?= $this->element('map'); ?>   
 