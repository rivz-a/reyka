<? echo $this->Form->create('', [          
          'url' => [
            'controller' => 'Pages',
            'action' => 'sendmail'
    ]]); 
?>

<div class="row">
    <div class="col">
      <?       
        echo $this->Form->control('name',array(
            'label'=>false,
            'class' => 'datepicker',
            "placeholder"=>"Ваше имя"       
        ));
      ?>
    </div>
    <div class="col">
      <?
        echo $this->Form->control('tel',array(
            'label'=>false,
            "placeholder"=>"Ваш телефон"
        ));
      ?>
    </div>
    <div class="col">
      <?
        echo $this->Form->control('send',array(
            'label'=>false,
            "placeholder"=>"Причина обращения"
        ));
      ?>
    </div> 

</div>
<div class="row row-center">
     <div class="col"><p class='text-min'>Режим работы: с 09:00 до 19:00</p></div>   
     <div class="col">
        <div class="form-check">
            <p class='text-min'><input class="form-check-input position-static" type="checkbox" value="option1">  <a href="" data-toggle="modal" data-target="#exampleModalCenterPolit">Я согласен с политикой конфидициальности</a></p>
        </div>
    </div>   
     <div class="col"><p class=''><? echo $this->Form->button('Стоимость ремонта'); ?></p></div> 
</div>


<? echo $this->Form->end(); ?>


