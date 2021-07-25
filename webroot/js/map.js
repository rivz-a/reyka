ymaps.ready(function () {
    var geolocation = ymaps.geolocation,
        myMap = new ymaps.Map('YMapsID', {
        center: [55.626824, 37.434195],
        zoom: 16,

        // Добавим кнопку для построения маршрутов на карту.
        controls: ['routeButtonControl']
    });


    var control = myMap.controls.get('routeButtonControl');

    // Зададим координаты пункта отправления с помощью геолокации.
    control.routePanel.geolocate('from');
  
    // Программно установим конечную точку маршрута.
    control.routePanel.state.set('to', 'Москва, ул. Адмирала Корнилова вл.1, (ТК Автомастер, сервис Е20)');


        // Зададим опции панели для построения машрутов.
        control.routePanel.options.set({
            // Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
            allowSwitch: false,
            // Включим определение адреса по координатам клика.
            // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
            reverseGeocoding: true,
            // Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
            types: { auto: true, pedestrian: true, taxi: true }
        });


    // Откроем панель для построения маршрутов.
    control.state.set('expanded', true);

});
