jQuery(document).ready(function ($) {

    var swiper = new Swiper('.swiper-container', {
        // slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        // loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.slider-button-next',
            prevEl: '.slider-button-prev',
        },
        pagination: {
            el: '.slider-pagination',
            //Fraction
            type: 'fraction',
            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span><span class="' + totalClass + '"></span>';
            }
        }

    });

    if (document.documentElement.clientWidth > 992) {
        //Yandex map
        ymaps.ready(init);

        function init() {

            hrefIcon = window.templateUrl + '/assets/img/icons/map-point.svg';
            hrefIcon_current = window.templateUrl + '/assets/img/icons/map-point-current.svg';

            var yandexMap = new ymaps.Map("yandex-map", {
                center: [55.191700, 61.430303],
                zoom: 12,
                controls: ['zoomControl']
            })
            var objectManager = new ymaps.ObjectManager({ clusterize: true }),

            // let mapPoints = 
            getPoint = function (id) {
                el = document.querySelectorAll('.map-card__item');
                return [el[id].getAttribute('data-coord-x'), el[id].getAttribute('data-coord-y')]
            }

            var objects = [];
            for (var i = 0; i < $('.map-card__item').length; i++) {
                objects.push({
                    type: 'Feature',
                    id: i,
                    geometry: {
                        type: 'Point',
                        coordinates: getPoint(i)
                    },
                    options: {
                        iconLayout: "default#image",
                        iconImageHref: hrefIcon,
                        iconImageSize: [24, 24],
                        iconImageOffset: [-12, -12],
                        hideIconOnBalloonOpen: false,
                    }
                });
            }
            objectManager.add(objects);
            yandexMap.geoObjects.add(objectManager);

            objectManager.objects.setObjectOptions(0, {
                iconImageHref: hrefIcon_current,
            });

            // Выделение метки
            selectedPoint = function (id) {

                let coordinates = objectManager.objects.getById(id).geometry.coordinates;

                objectManager.objects.each(function (object) {
                    objectManager.objects.setObjectOptions(object.id, {
                        iconImageHref: hrefIcon,
                    });
                });

                objectManager.objects.setObjectOptions(id, {
                    iconImageHref: hrefIcon_current,
                });

                yandexMap.setCenter(coordinates, 14);

            }
            
            // Событие при клике на метку
            objectManager.objects.events.add('click', function (e) {
                var targetPoint = e.get('objectId');

                swiper.slideToLoop(targetPoint);

                selectedPoint(targetPoint);
            });

            // Событие при клике на cлайдере
            swiper.on('slideChange', function () {
                let targetPoint = swiper.realIndex;

                selectedPoint(targetPoint);
            });

        }
    }

});