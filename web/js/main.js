(function($) {

}(jQuery));

var myMap;
ymaps.ready(init);
function init () {
    myMap = new ymaps.Map('map', {
        center: [44.933212, 34.043436],
        zoom: 17,
        type: 'yandex#satellite'
    });

    myMap.geoObjects
        .add(new ymaps.Placemark([44.933333, 34.043918], {
            balloonContent: 'Airsoft Арена Крым'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }));
}