$(function(){
    ymaps.ready(initMap);
    
    function initMap(){
        var routemap,
            currentRoute,
            placemark;
        
        routemap = new ymaps.Map("route-map", {
            center: [55.626965, 37.434109],
            zoom: 14
        });
        
        placemark = new ymaps.Placemark([55.626965, 37.434109], {
            balloonContent: 'Москва, ул. Адмирала Корнилова вл.1, (ТК Автомастер, сервис Е20)'
        });
        
        routemap.geoObjects.add(placemark);
         
        function clearRoute() {
            if (currentRoute) {
                routemap.geoObjects.remove(currentRoute);
            }
        };
        
        function showRoute(name) {
            if (!name.length) return;
            
            var url = 'https://avto-diagnostic.ru/assets/'+name+'.gpx';
                
            ymaps.geoXml.load(url).then(function(res) {
                clearRoute();
                currentRoute = res.geoObjects;
                currentRoute.options.set({'preset':'gpx#plain'});
                routemap.geoObjects.add(currentRoute);
                routemap.setBounds(currentRoute.getBounds());
            });
            //jQuery('#route-map ymaps').css({height:'400px'});
        };
        
        $('.route_link').on('click', function() {
            showRoute(this.getAttribute('data-route'));
        });
    };  
    });