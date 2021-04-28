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
        <span class="main-form__label mb-10 color-white">Укажите ваш номер</span>
        <div class="main-form__wrapper">
          <label class="main-form__input-wrapp">
            <input value="" class="main-form__input main-form__phone mask-phone" type="tel" name="phone"
              id="client-phone" placeholder="+7 (___) ___-__-__" maxlength="16">
            <span class="main-form__label-error">Ошибка в номере</span>
          </label>
          <div class="main-form__btn">
            <button type="submit" data-target="#popup-thank-specialist" id="action-btn"
              class="main-form__submit btn_hover btn btn_accent">Оставить заявку</button>
          </div>
        </div>
        <label class="main-form__policy">
          <input type="checkbox" checked="" id="check" class="main-form__checkbox">
          <span class="main-form__checkbox-box"></span>
          <span class="main-form__text small-text"> Я ознакомлен c <a class="text-link"
              href="https://sdaykat.ru/confidencial">политикой конфиденциальности</a></span>
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
              <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2"
                stroke-linecap="round" />
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
              <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2"
                stroke-linecap="round" />
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
              <path d="M1 1H22C23.6569 1 25 2.34315 25 4V25M1.5 24.5L23.5 2.5" stroke="white" stroke-width="2"
                stroke-linecap="round" />
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
            <div class="calculator__head mb-50">
                <h2 class="primary-title mb-20">
                    калькулятор
                </h2>
                <p class="color-gray">
                    Узнайте предварительную<br>
                    стоимость сырья
                </p>
            </div>
            <div class="calculator__wrap">

                <div class="select-metal mb-30">
                    <div class="select-metal__img mr-20" style="background-image: url(https://sdaykat.ru/wp-content/uploads/front-page-bg.jpg);">
                    </div>
                    <div class="mt-auto">
                        <p class="color-gray select-metal__text">Выберите тип сырья</p>
                        <select class="custom-select_js">
                            <option value="1">Нержавейка</option>
                            <option value="2">Медь</option>
                            <option value="3">Алюминий</option>
                            <option value="4">Свинец</option>
                            <option value="5">Цинк</option>
                            <option value="6">Латунь</option>
                        </select>
                    </div>
                    <p class="ml-auto select-metal__price color-gray">
                        от 200 руб/кг
                    </p>
                </div>

                <div class="calculator-range mb-50">
                    <div class="calculator-range__item">
                        <p class="color-gray select-metal__text mb-10">Вес сырья</p>
                        <div class="calculator-range__label">35 кг</div>
                        <div id="calculate-range-weight" class="options-item__range custom-range"></div>
                    </div>
                    <div class="calculator-range__item">
                        <p class="color-gray select-metal__text mb-10">% загрязненности</p>
                        <div class="calculator-range__label">10%</div>
                        <div id="calculate-range-pollution" class="options-item__range custom-range"></div>
                    </div>
                </div>

                <div class="calculator__bottom">
                    <div>
                        <div class="calculator__total-price mb-10">
                            от 20 000 руб
                        </div>
                        <p class="color-gray select-metal__text mb-10">от 200 руб/кг</p>
                    </div>
                    <a href="#" class="btn btn_accent calculator__submit">
                        Оставить заявку
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="padding-normal">
    <div class="container-wrapper">
        <div class="row mb-50">
            <div class="col-12 col-md-4">
                <h2 class="primary-title mb-50">
                    компания
                </h2>
            </div>
            <div class="col-12 offset-sm-3 offset-md-0 col-sm-9 col-md-8">
                <div class="content-wrap">
                    <p class="mb-30">
                        Повседневная практика показывает, что дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке дальнейших направлений развития. Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития. Равным образом реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации систем массового участия.
                    </p>
                    <p class="big-text">
                        Присутствуем в 12 регионах страны.<br>
                        Платим честно по Лондонской<br>
                        Бирже Металлов.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-3 col-md-4">
                <h3 class="h3 primary-title mb-30">
                    ключевые<br>факты
                </h3>
            </div>
            <div class="col-12 col-sm-9 col-md-8">
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 mb-40">
                            <div class="hexagon mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-red">
                                    1 000+
                                </div>
                            </div>
                            <p class="mw-110 small-text color-gray">
                                тонн собираем<br>
                                в год
                            </p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-40">
                            <div class="hexagon mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-red">
                                    5
                                </div>
                            </div>
                            <p class="mw-110 small-text color-gray">
                                тонн собираем<br>
                                в год
                            </p>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 mb-40">
                            <div class="hexagon mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-red">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/weight.svg" alt="">
                                </div>
                            </div>
                            <p class="mw-110 small-text color-gray">
                                точный расчет<br>
                                по весу
                            </p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 mb-40">
                            <div class="hexagon mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-red">
                                    1 000+
                                </div>
                            </div>
                            <p class="mw-110 small-text color-gray">
                                оплата на карту
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cabitet-block">
    <div class="container-wrapper">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2 class="primary-title color-white mb-50">
                    кабинет<br> партнера*
                </h2>
            </div>
            <div class="col-12 col-md-8">
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-50">
                            <p class="color-white mb-30">
                                Войдите в кабинет, чтобы получить<br>
                                больше преимуществ от выгодного<br>
                                сотрудничества
                            </p>
                            <a href="#" class="btn btn_dark">Перейти в кабинет</a>
                        </div>
                        <div class="col-6 col-sm-3 mb-50">
                            <div class="hexagon hexagon_white mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-white">
                                    1 000+
                                </div>
                            </div>
                            <p class="mw-110 small-text color-white">
                                точный расчет<br>
                                по весу
                            </p>
                        </div>
                        <div class="col-6 col-sm-3 mb-50">
                            <div class="hexagon hexagon_white mb-15">
                                <div class="hexagon__svg">
                                    <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                                    </svg>
                                </div>
                                <div class="hexagon__content color-white">
                                    1 000+
                                </div>
                            </div>
                            <p class="mw-110 small-text color-white">
                                оплата на карту
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="fz-12 color-white">
            *Кабинет партнера создается<br>
            автоматически после первой сделки
        </p>
    </div>
</section>

<section class="padding-normal padding-double-top">
    <div class="container-wrapper">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-20">
                <h2 class="primary-title">
                    популярные<br>статьи
                </h2>
            </div>
            <div class="col-12 col-md-6 col-lg-8 mb-50">
                <a href="#" class="text-link text-link_red">Все статьи</a>
            </div>
        </div>

        <div class="row article">
            <a href="/single-article.php" class="col-12 col-md-6 col-lg-4 article__item">
                <div class="article__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metal/popular.jpg" class="img-responsive" alt="Каталитические системы">
                </div>
                <div class="article__description">
                    <div class="d-flex align-items-center justify-content-between mb-20">
                        <div class="article-tag">
                            <span class="article-tag__item">
                                металлы
                            </span>
                            <span class="article-tag__item">
                                new
                            </span>
                        </div>
                        <div class="article__meta">
                            <span class="article__time"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/time.svg" alt="">2 мин</span>
                            <span class="article__views"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/views.svg" alt="">500</span>
                        </div>
                    </div>
                    <h4 class="article__title">Сколько стоит старый катализатор?</h4>
                    <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
                </div>
            </a>
            <a href="/single-article.php" class="col-12 col-md-6 col-lg-4 article__item">
                <div class="article__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metal/popular.jpg" class="img-responsive" alt="Каталитические системы">
                </div>
                <div class="article__description">
                    <div class="d-flex align-items-center justify-content-between mb-20">
                        <div class="article-tag">
                            <span class="article-tag__item">
                                металлы
                            </span>
                            <span class="article-tag__item">
                                new
                            </span>
                        </div>
                        <div class="article__meta">
                            <span class="article__time"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/time.svg" alt="">2 мин</span>
                            <span class="article__views"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/views.svg" alt="">500</span>
                        </div>
                    </div>
                    <h4 class="article__title">Сколько стоит старый катализатор?</h4>
                    <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
                </div>
            </a>
            <a href="/single-article.php" class="col-12 col-md-6 col-lg-4 article__item d-none d-lg-block">
                <div class="article__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/metal/popular.jpg" class="img-responsive" alt="Каталитические системы">
                </div>
                <div class="article__description">
                    <div class="d-flex align-items-center justify-content-between mb-20">
                        <div class="article-tag">
                            <span class="article-tag__item">
                                металлы
                            </span>
                            <span class="article-tag__item">
                                new
                            </span>
                        </div>
                        <div class="article__meta">
                            <span class="article__time"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/time.svg" alt="">2 мин</span>
                            <span class="article__views"><img class="mr-10" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/views.svg" alt="">500</span>
                        </div>
                    </div>
                    <h4 class="article__title">Сколько стоит старый катализатор?</h4>
                    <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<?php get_footer();
