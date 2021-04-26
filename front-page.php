<?php

/**
 * The template for displaying front page
 *
 * @package cupimlom
 */

get_header();
?>

<main class="main main_front-page">
    <div class="container-wrapper main__wrap">

        <div class="main_left">
            <h1 class="main-title mb-30">
                ПОКУПАЕМ<br>
                МЕТАЛЛ ДОРОГО!
            </h1>
            <!-- Phone form  -->
            <form class="main-form" action="#">
                <span class="main-form__label mb-10 color-wthite">Укажите ваш номер</span>
                <div class="main-form__wrapper">
                    <label class="main-form__input">
                        <input value="" class="main-form__phone mask-phone" type="tel" name="phone" id="client-phone" placeholder="+7 (___) ___-__-__" maxlength="16">
                        <span class="main-form__label-error">Ошибка в номере</span>
                    </label>
                    <div class="main-form__btn">
                        <button type="submit" data-target="#popup-thank-specialist" id="action-btn" class="main-form__submit btn_hover btn btn_accent">Оставить заявку</button>
                    </div>
                </div>
                <label class="main-form__policy">
                    <input type="checkbox" checked="" id="check" class="main-form__checkbox">
                    <span class="main-form__checkbox-box"></span>
                    <span class="main-form__text small-text"> Я ознакомлен c <a class="text-link" href="https://sdaykat.ru/confidencial">политикой конфиденциальности</a></span>
                </label>
            </form>
        </div>

        <div class="popular-metal">
            <h4 class="popular-metal__head">
                популярные<br> металлы
            </h4>
            <div class="popular-metal__wrap">
                <a href="#" class="popular-metal__item">
                    <h3 class="popular-metal__title">
                        Медь
                    </h3>
                    <p class="popular-metal__text">
                        от 200 руб/кг
                    </p>
                    <div class="popular-metal__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="popular-metal__item">
                    <h3 class="popular-metal__title">
                        Нержавейка
                    </h3>
                    <p class="popular-metal__text">
                        от 200 руб/кг
                    </p>
                    <div class="popular-metal__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="popular-metal__item">
                    <h3 class="popular-metal__title">
                        Латунь
                    </h3>
                    <p class="popular-metal__text">
                        от 200 руб/кг
                    </p>
                    <div class="popular-metal__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </a>
            </div>
            <a href="#" class="popular-metal__link">
                Все цены
            </a>
        </div>
    </div>
    <div class="main-phone container-wrapper">
        <p class="main-phone__text">
            Звонок бесплатный
        </p>
        <a href="tel:8 800 550 79 18" class="main-phone__number">8 800 550 79 18</a>
    </div>
</main>


<?php get_footer();
