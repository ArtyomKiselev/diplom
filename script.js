
let center = [[56.086911548557275,60.72050714141467],[56.09119427287736,60.735945936504365]];

function init() {
    let map = new ymaps.Map('map-test', {
        center: [56.08905297049121,60.72822653895949],
        zoom: 17
    });
    
    let placemark1 = new ymaps.Placemark([56.08905297049121,60.72822653895949], {
        balloonContent: `
            <div class="balloon">
                <div class="balloon__address"><p><img src="image/geo.png" alt=""><b>Юридический адрес:</b></p>
456770, Челябинская область, г. Снежинск, ул.Васильева, 33</div>
                <div class="balloon__info">
                  <p><img src="image/map.png" alt=""></im><b>Как нас найти:</b></p>
автобусом №01, №1 или маршрутным такси до остановок «ЗАГС» или «Юбилейный».
Расстояние  от остановки транспорта до МАДОУ - 300 м.  
                </div>
            </div>
        `
    }, {

    });
    map.geoObjects.add(placemark1);

    placemark1.balloon.open();
}

ymaps.ready(init);

var swiper = new Swiper(".mySwiper", { 
spaceBetween: 30, 
slidesPerView: 3,
navigation: { 
nextEl: ".swiper-button-next", 
prevEl: ".swiper-button-prev", 
}, 
pagination: { 
el: ".swiper-pagination", 
}, 
mousewheel: true, 
keyboard: true, 
}); 