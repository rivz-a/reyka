<div class="container-fluid cena" data-animated="fadeInLeft">
    <div class="fon pt-5 pb-5">
        <div class="container">
            <div class="model-form pb-5">
                <h2 data-animated="fadeInUp">Уточните стоимость ремонта</h2>
                            
                  <div class="form-group" data-animated="fadeInUp">
                      <select name="Model" class="Model text-field form-control validate-field required" required="">
                        <option value="" selected="selected">--- Выберите марку ---</option>        
                          <?php
                            foreach ($marka as $mark) {?>
                                <option value="<?php echo $mark['id']; ?>"><?php echo $mark['name']; ?></option>    
                            <? }                            
                          ?>
                        </select>
                  </div>

                  <?
                  echo $this->Form->create('', [
                        'type' => 'post',
                        'url' => [                            
                            'controller' => 'Categories',
                            'action' => 'index'
                      ]]); 
                ?> 
                  <div class="form-group" data-animated="fadeInUp">
                      <select name="Engine" class="Engine text-field form-control validate-field required" required="">
                        <option value="" selected="" disabled="">--- Выберите модель ---</option>
                      </select>
                  </div>
                
                <div class="form-group" data-animated="fadeInUp">
                      <button style="float:right;" type="submit" class="btn btn-danger white submit">Стоимость ремонта</button>
                </div>
                            
              </form>                
              
            </div>        
        </div>
    </div>
</div>

<script>
        jQuery(document).ready(function()
        {                
            jQuery(".Model").change(function()
            {
                var id=jQuery(this).val();
                var dataString = 'id='+ id;
            
                jQuery.ajax
                    ({
                    type: "POST",
                    url: "/get_state.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        jQuery(".Engine").html(html);
                    } 
                    });
            });
            
        });
    </script>