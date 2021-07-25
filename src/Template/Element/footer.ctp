    <footer>
        <div class="container pt-4 pb-3">
            <div class="row row-center">
                <div class="col-md-4 minitext text-right  pb-3"><img src="/img/logo.png" alt="Логотип компании"><br>
                    <?= $settings->footer_line1." 2010-".date ( 'Y' ); ?><br>
                    <?= $settings->footer_line2; ?>
                    <?= $this->Html->link('Карта сайта', '/sitemap'); ?>
                    
                   
                </div>
                <div class="col-md-4 text-center pb-3 ln">                   
                    <a href="<?= $settings->insta_lnk; ?>" target="_blank" rel="nofollow"><img src="/img/insta-icn.png"  alt="Аккаунт в инстаграме">  Смотрите примеры работ в Instagram</a>
                    
                </div>
                <div class="col-md-4 text-center pb-3">
                    <button type="button"  data-toggle="modal" data-target="#exampleModalCenterZayavka" class="btn btn-primary">Записаться на ремонт</button><br>
                    <!-- <p class="tel"><a rel="nofollow" href="tel:<?= $settings->phone1; ?>"><?= $settings->phone1; ?></a></p><br> -->
                    <p class="tel"><a rel="nofollow" href="tel:84952228782">+7 (495) 222-87-82</a></p>
                    
                </div> 
            </div>
        </div>
    </footer>