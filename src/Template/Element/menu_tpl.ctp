<li class="nav-item<? if ($categories->children) echo ' dropdown';?>" >
   <a class="nav-link<? if ($categories->children) echo ' dropdown-toggle';?>" 
                href="/<?= $admin?><?= $categories->url;?>" 
                <? if ($categories->children) echo 'id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false"';?>>
   
        <?= $categories->menu;?>
    </a>
  
    
    <? //Если есть наследники выводим их
        if($categories->children) : ?>
        <div class="dropdown-menu<?= (count($categories->children)==2) ? ' dropdown-menu-mini' : ''?>">
            <ul>
                <?= $this->_catMenuHtml($categories->children, $admin);?>
            </ul>                        
        </div>
        <? endif; ?>


</li>  





