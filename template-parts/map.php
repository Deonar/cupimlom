<?
// $cur_region = $GLOBALS['cur_region'];
// $offices = $cur_region['offices'];
// $partners = $cur_region['partners'];

?>
<section class="map__wrapper">
    <div id="yandex-map" class="yandex-map"></div>
    <div class="map-card">
        <div class="map-card__wrapper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="map-card__item swiper-slide" data-coord-x="55.17811556954169" data-coord-y="61.344208">
                        <div class="map-card__top mb-50">
                            <div>
                                <h2 class="primary-title color-red map-card__city mb-10">
                                    подольск1
                                </h2>
                                <p class="map-card__street">
                                    ул. Механическая, 100/1
                                </p>
                            </div>
                            <a href="https://yandex.ru/maps/?text=г. Челябинск, ул. Механическая 101/2&amp;roistat_visit=138386" target="_blank" class="map-card__addres-link text-link_red">Показать на карте</a>
                        </div>

                        <h3 class="h3 primary-title mb-30">
                            время работы
                        </h3>

                        <div class="map-card__bottom">
                            <div class="map-card__time">
                                <span class="mr-10">пн-пт</span><strong> 10:00 - 19:00</strong><br>
                                <span class="mr-10">cб-вс</span><strong> по предварительной записи</strong>
                            </div>

                            <div class="mb-40">
                                <p class="text-small color-gray">
                                    Региональный менеджер
                                </p>
                                <a href="tel:8 800 550 79 18" class="map-card__phone">8 800 550 79 18</a>
                            </div>
                        </div>

                    </div>
                    <div class="map-card__item swiper-slide" data-coord-x="55.191700569517366" data-coord-y="61.430302499999904">
                        <div class="map-card__top mb-50">
                            <div>
                                <h2 class="primary-title color-red map-card__city mb-10">
                                    подольск1
                                </h2>
                                <p class="map-card__street">
                                    ул. Механическая, 100/1
                                </p>
                            </div>
                            <a href="https://yandex.ru/maps/?text=г. Челябинск, ул. Механическая 101/2&amp;roistat_visit=138386" target="_blank" class="map-card__addres-link text-link_red">Показать на карте</a>
                        </div>

                        <h3 class="h3 primary-title mb-30">
                            время работы
                        </h3>

                        <div class="map-card__bottom">
                            <div class="map-card__time mb-40">
                                <span class="mr-10">пн-пт</span><strong> 10:00 - 19:00</strong><br>
                                <span class="mr-10">cб-вс</span><strong> по предварительной записи</strong>
                            </div>

                            <div class="mb-40">
                                <p class="text-small color-gray">
                                    Региональный менеджер
                                </p>
                                <a href="tel:8 800 550 79 18" class="map-card__phone">8 800 550 79 18</a>
                            </div>
                        </div>

                    </div>
                    <div class="map-card__item swiper-slide" data-coord-x="55.19179877448198" data-coord-y="61.43897139953601">
                        <div class="map-card__top mb-50">
                            <div>
                                <h2 class="primary-title color-red map-card__city mb-10">
                                    подольск1
                                </h2>
                                <p class="map-card__street">
                                    ул. Механическая, 100/1
                                </p>
                            </div>
                            <a href="https://yandex.ru/maps/?text=г. Челябинск, ул. Механическая 101/2&amp;roistat_visit=138386" target="_blank" class="map-card__addres-link text-link_red">Показать на карте</a>
                        </div>

                        <h3 class="h3 primary-title mb-30">
                            время работы
                        </h3>

                        <div class="map-card__bottom">
                            <div class="map-card__time">
                                <span class="mr-10">пн-пт</span><strong> 10:00 - 19:00</strong><br>
                                <span class="mr-10">cб-вс</span><strong> по предварительной записи</strong>
                            </div>

                            <div class="mb-40">
                                <p class="text-small color-gray">
                                    Региональный менеджер
                                </p>
                                <a href="tel:8 800 550 79 18" class="map-card__phone">8 800 550 79 18</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="map-card__control">
                <div class="map-card__arrow">
                    <button class="slider-button-item slider-button-prev mr-10"></button>
                    <button class="slider-button-item slider-button-next"></button>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</section>


<style>
    [class*="ymaps-2"][class*="-ground-pane"] {
        filter: grayscale(90%) invert(85%);
        -webkit-filter: grayscale(90%) invert(85%);
        -moz-filter: grayscale(90%) invert(85%);
        -ms-filter: grayscale(90%) invert(85%);
        -o-filter: grayscale(90%) invert(85%);
    }
</style>

<!-- 
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/map.js?v<? echo time(); ?>"></script>