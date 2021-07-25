

<?php //Меню для десктопного экрана ?>
<div class="menu d-none d-lg-block">       
    
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark justify-center" style="background: linear-gradient(180deg, #485359 46.35%, #3B464C 54.17%);">
    <div class="container">
      <a class="navbar-brand" href="<?=$this->Url->build('/', true);?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <? foreach ($cat_menu_tree as $item) : ?>

              <? if($item->name=="Ремонт рулевых реек") :?>
                <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                <div class="dropdown-menu">
                      <ul>
                          <?= $pod_menu_reyka ?>
                      </ul>                        
                  </div>              
                </li>
              <? elseif($item->name=="Ремонт электрореек") : ?>
                <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown1" role="button"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                <div class="dropdown-menu electro">
                      <ul>
                          <?= $pod_menu_electro ?>
                      </ul>                        
                  </div>              
                </li>
              <? elseif($item->name=="Ремонт насосов") : ?>
                <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown2" role="button"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                <div class="dropdown-menu dropdown-menu-mini">
                      <ul>
                          <?= $pod_menu_nasos ?>
                      </ul>                        
                  </div>              
                </li>
                <? elseif($item->name=="Статьи") : ?>
                <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown3" role="button"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                <div class="dropdown-menu dropdown-menu-mini">
                      <ul>
                          <?= $pod_menu_stati ?>
                      </ul>                        
                  </div>              
                </li> 
              <? else : ?>
                <li class="nav-item">              
                  <a class="nav-link" href="/<?= $item->url ?>" ><?= $item->name ?></a>
                </li>
              <? endif ?>    

            <? endforeach ?> 

        </ul>   
      </div>

      
    </div>
  </nav>

</div>    



<?php //Меню для мобильного экрана ?>
<div class="menu d-lg-none mt-2">       
    
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark justify-center" style="background: linear-gradient(180deg, #485359 46.35%, #3B464C 54.17%);">
    <div class="container">
      <a class="navbar-brand" href="/kontakty ">Маршрут до нас</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarNavDropdown1">
        <ul class="navbar-nav mr-auto">

            <? foreach ($cat_menu_tree as $item) : ?>

              <? if($item->name=="Ремонт рулевых реек") :?>
                <li class="nav-item dropdown">              
                  <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown4" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                  <div class="dropdown-menu">
                        <ul>
                            <?= $pod_menu_reyka ?>
                        </ul>                        
                    </div>              
                </li>
              <? elseif($item->name=="Ремонт электрореек") : ?>
                <li class="nav-item dropdown">              
                  <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown5" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                  <div class="dropdown-menu electro">
                        <ul>
                            <?= $pod_menu_electro ?>
                        </ul>                        
                    </div>              
                </li>
              <? elseif($item->name=="Ремонт насосов") : ?>
                <li class="nav-item dropdown">              
                  <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown6" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                  <div class="dropdown-menu dropdown-menu-mini">
                        <ul>
                            <?= $pod_menu_nasos ?>
                        </ul>                        
                    </div>              
                </li>
                <? elseif($item->name=="Статьи") : ?>
                <li class="nav-item dropdown">              
                  <a class="nav-link dropdown-toggle" href="/<?= $item->url ?>" id="navbarDropdown7" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><?= $item->name ?></a>
                  <div class="dropdown-menu dropdown-menu-mini">
                        <ul>
                            <?= $pod_menu_stati ?>
                        </ul>                        
                    </div>              
                </li>
              <? else : ?>
                <li class="nav-item">              
                  <a class="nav-link" href="/<?= $item->url ?>" ><?= $item->name ?></a>
                </li>
              <? endif ?>    

            <? endforeach ?>

        </ul>   
      </div>

      
    </div>
  </nav>

</div>    


