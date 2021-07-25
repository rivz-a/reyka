<? 
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $mobil = false;

    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value)) {
            $mobil = true;
        }
    }


    if ($mobil) {?>

        <div class="container d-md-none pt-3 pb-3" data-animated="fadeInRight">
                <div class="h1">Ждем вас в автотехцентре</div>  
                    <p>График работы с 9:00 до 18:00</p>
                    <!-- <p ><i class="fa fa-phone" aria-hidden="true"></i>+7 (495) 364 - 08 - 43</p> -->
                    <p ><i class="fa fa-phone" aria-hidden="true"></i>+7 (985) 222 - 83 - 48</p>  
                    <p>Москва, ул. Адмирала Корнилова вл.1, (ТК Автомастер, сервис Е20)</p>
                        
                <div class="text-center">
                    <a class="btn btn-primary" href="/kontakty">Построить маршрут до нас</a>           
                </div>                    
        </div>       

    <?}
    else {?>
                <!--Начали Карту-->

                <!--Отображаем на больших экранах-->
                
                <script src="/js/map.js"></script>
                
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
                
                <script async src="/js/ya-maps.plugin.js"></script>
                 
                <div class="map_block">
                    <div class="map map_size" id="route-map" data-animated="fadeInRight">
                        <div class="kontbl d-none d-md-block" style="text-align:left; padding-left:19px; padding-top:25px;">
                            <div> 
                                <h3>Ждем вас в автотехцентре</h3>  
                                    <p>График работы с 9:00 до 18:00</p>
                                    <!-- <p><i class="fa fa-phone" aria-hidden="true"></i>+7 (495) 364 - 08 - 43</p> -->
                                    <p><i class="fa fa-phone" aria-hidden="true"></i>+7 (985) 222 - 87 - 82</p>  
                                    <p>Москва, ул. Адмирала Корнилова вл.1, (ТК Автомастер, сервис Е20)</p>
                                         
                                <h3>Как добраться?</h3>
                                <ul class="route_list" style="list-style-image: url(/img/li.png);margin-top:1.5em; margin-bottom:2.5em; font-size:16px; line-height:28px;">   
                                <li><span class="route_link" data-route="map_a">15 мин пешком от метро &laquo;Румянцево (Бизнес-парк)&raquo;</span></li>            
                                <li><span class="route_link" data-route="map_c">С улицы Адмирала Корнилова</span></li>
                                <li><span class="route_link" data-route="map_d">Из центра Москвы</span></li>
                                <li><span class="route_link" data-route="map_e">Из области</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <!--Закончили с картой-->

    <?}        
?>

 
  












