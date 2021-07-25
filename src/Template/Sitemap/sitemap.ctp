<h2>Карта сайта</h2>

<ul class="smap">

<?foreach($data as $item){?>
<li><a href="/<?=$item['Page']['url']?>/"><?=$item['Page']['title']?></a>
<?if(!empty($item['Page']['children'])){?>
    <ul>
    <?foreach($item['Page']['children'] as $item2){?>
        <li><a href="/<?=$item2['Page']['url']?>/"><?=$item2['Page']['title']?></a></li>  
    <?}?>
    </ul>
<?}?>
</li>  
<?}?>
</ul>