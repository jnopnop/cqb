(function($) {
    
}(jQuery));

var myMap;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [44.933212, 34.043436], // Москва
        zoom: 17,
        type: 'yandex#satellite'
    });

    myMap.geoObjects
        .add(new ymaps.Placemark([44.933333, 34.043918], {
            balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
        }, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }));
}