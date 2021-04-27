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

<section class="padding-normal padding-double-top">
    <div class="container-wrapper">
        <div class="metal-grid__title mb-50">
            <h2 class="primary-title">
                принимаемое<br> сырьё
            </h2>
        </div>
        <div class="grid-square">
            <div class="grid-square__col">
                <a href="#" class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </a>
            </div>
            <div class="grid-square__col">
                <a href="#" class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </a>
            </div>
            <div class="grid-square__col">
                <a href="#" class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </a>
            </div>
            <div class="grid-square__col">
                <a href="#" class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </a>
            </div>
            <div class="grid-square__col">
                <div class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-square__col">
                <a href="#" class="grid-square__item">
                    <div class="grid-square__number">
                        29
                    </div>
                    <div class="grid-square__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                    <div class="grid-square__description">
                        <h4 class="grid-square__title">
                            Медь
                        </h4>
                        <p class="grid-square__text">
                            от 200 руб/кг
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="grid-rectangle">
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="grid-rectangle__col">
                <a href="#" class="grid-rectangle__item">
                    <div class="grid-rectangle__description">
                        <h4 class="grid-rectangle__title">
                            Медь
                        </h4>
                        <p class="grid-rectangle__text">
                            от 200 руб/кг
                        </p>
                    </div>
                    <div class="grid-rectangle__icon">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="padding-normal">
    <div class="container-wrapper">
        <div class="calculator">
            <div class="calculator__head">
                <h2 class="primary-title mb-20">
                    калькулятор
                </h2>
                <p class="color-gray">
                    Узнайте предварительную<br>
                    стоимость сырья
                </p>
            </div>
            <div class="calculator__body">
                <div class="select-metal">

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
