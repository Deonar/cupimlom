<?php

/*
Template Name: authorization
*/

get_header();
?>

<div class="page-wrapper">

<div class="authorization padding-normal">
  <div class="container-wrapper">
    <div class="authorization-body">
      <div class="authorization-left__content">
        <div class="cabitet-block">
          <h2 class="primary-title color-white mb-50">
            кабинет партнера
          </h2>
          <p class="color-white mb-50">
            Получите больше преимуществ <br>
            от выгодного сотрудничества
          </p>
          <div class="content-wrap">
              <div class="row justify-content-end">
                
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                      <div class="hexagon hexagon_white mb-15">
                          <div class="hexagon__svg">
                              <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                              </svg>
                          </div>
                          <div class="hexagon__content color-white"> <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.38395 12.7999H0V15.9999H3.38395V12.7999Z" fill="white"/>
                            <path d="M24.64 12.7999H6.58398V15.9999H24.64V12.7999Z" fill="white"/>
                            <path d="M3.38395 6.40002H0V9.60002H3.38395V6.40002Z" fill="white"/>
                            <path d="M24.64 6.40002H6.58398V9.60002H24.64V6.40002Z" fill="white"/>
                            <path d="M3.38395 0H0V3.2H3.38395V0Z" fill="white"/>
                            <path d="M24.64 0H6.58398V3.2H24.64V0Z" fill="white"/>
                          </svg>
                          </div>
                      </div>
                      <p class="mw-110 small-text color-white">
                        информация<br>
                        по всем сделкам
                      </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                      <div class="hexagon hexagon_white mb-15">
                          <div class="hexagon__svg">
                              <svg width="105" height="114" viewBox="0 0 105 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path opacity="0.3" d="M42.8253 3.10428C48.8202 -0.321398 56.1798 -0.321398 62.1747 3.10428L94.6747 21.6757C100.75 25.1475 104.5 31.6087 104.5 38.6065V75.3935C104.5 82.3913 100.75 88.8525 94.6747 92.3243L62.1747 110.896C56.1798 114.321 48.8202 114.321 42.8253 110.896L10.3253 92.3243C4.24958 88.8525 0.5 82.3913 0.5 75.3935V38.6064C0.5 31.6087 4.24958 25.1475 10.3253 21.6757L42.8253 3.10428Z" />
                              </svg>
                          </div>
                          <div class="hexagon__content color-white">
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18.4615 0V16H21.5385V0H18.4615ZM6.15385 2.46154V16H9.23077V2.46154H6.15385ZM12.3077 4.92308V16H15.3846V4.92308H12.3077ZM0 7.38462V16H3.07692V7.38462H0Z" fill="white"/>
                            </svg>
                          </div>
                      </div>
                      <p class="mw-110 small-text color-white">
                        аналитика <br>
                        и закрывающие <br>
                        документы
                      </p>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="authorization-right__content">
        <h2 class="authorization-title primary-title mb-20">авторизация</h2>
        <div class="profile-blocks-js">
          <div class="authorization-form__wrapp completed-form-js active">
            <div class="authorization-form__text mb-50">
              На ваш номер придет смс с кодом. Введите
              его для входа в личный кабинет.*
            </div>
            <form action="#" class="authorization-form">
              <div class="main-form__label">Укажите ваш номер</div>
              <div class="main-form__input-wrapp  mb-20">
                <input id="client-phone"  class="main-form__input mask-phone"  type="tel" placeholder="+7 999 999-99-99" maxlength="16" name="phone">
                <div class="main-form__input-line"></div>
                <span class="main-form__label-error">Ошибка в имени</span>
              </div>
              <button id="entry-account" type="button" class="authorization-form__btn btn btn_light_border run-edit-js">Получить код</button>
            </form>
          </div>
          <div class="authorization-form__wrapp edit-form-js">
            <div class="authorization-form__arrow save-edit-js text-link_red mb-50 ">
              Назад
            </div>
            <form action="#" class="authorization-form">
              <div class="main-form__label">Введите код из смс</div>
              <div class="main-form__input-wrapp  mb-20">
                <input class="main-form__input"  type="text" placeholder="1234" maxlength="4" name="code">
                <div class="main-form__input-line"></div>
                <span class="main-form__label-error">Ошибка в имени</span>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <a href="" id="authorization-finish" class="authorization-form__btn btn btn_dark">Войти</a>
                <div class="d-flex align-items-center">
                  <span id="authorization-confirm__sms" class="authorization-confirm__sms">
                    Выслать код <br>
                    можно будет <br>
                    через
                  </span>
                  <span id="authorization-confirm__sms-timer" class="authorization-confirm__sms-timer "><span class="authorization-confirm__sms-timer seconds"> 15</span></span>
                  <span id="send-sms" id="authorization-confirm__sms-send" class="text-link_red authorization-confirm__sms-send" style="display: none">Выслать код повторно</span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/profile.js?v<? echo time(); ?>"></script>
<?php get_footer();