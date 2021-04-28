<?php

/*
Template Name: Profile
*/

get_header();
?>

<div class="page-wrapper">

  
  <section class="user-wrapp padding-normal ">
    <div class="container-wrapper">
      <div class="user-body d-flex justify-content-between">
        <div class="user-info__wrapp">
          <div class="user-photo">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-logo.jpg" alt=""> -->
          </div>
          <div class="user-text">
            <div class="user-name">Алексей</div>
            <a href="#" class="user-link text-link_red">Изменить фотографию</a>
          </div>
        </div>
        <a href="#" class="user-btn btn btn_light_border">Выйти</a>
      </div>
    </div>
  </section>

  <section class="profile padding-normal ">
    <div class="container-wrapper">
      <div class="profile-body tab-wrapper-js">
          <div class="profile-tabs">
            <div id="profile-tab" class="profile-tab tab-js active" data-tab="1">Профиль</div>
            <div id="transactions-tab" class="profile-tab tab-js" data-tab="2">Сделки</div>
            <div id="analitics-tab" class="profile-tab tab-js" data-tab="3">Аналитика</div>
          </div>
          <div class="profile-tabs__content">
            <!-- TAB PROFILE -->
            <div id="profile-tab-content" class="profile-tab__content tab-content-js" data-tab="1">
              <div class="profile-info__block-wrapper profile-blocks-js">
                <div class="profile-info__block completed-form-js active">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">ПЕРСОНАЛЬНЫЕ <br>
                      ДАНнЫЕ</h3>
                    <div class="profile-info__block-link text-link_red run-edit-js">Редактировать</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Ваш номер</div>
                    <div class="profile-info__block-col-2">+ 7 999 999-22-11</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Тип профиля</div>
                    <div class="profile-info__block-col-2">Физ. лицо</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">ФИО</div>
                    <div class="profile-info__block-col-2">Алексеев Алексей Алексеевич</div>
                  </div>
                </div>
                <form class="profile-info__block-form profile-form edit-form-js">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">ПЕРСОНАЛЬНЫЕ <br>
                      ДАНнЫЕ</h3>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-form__row">
                      <span class="main-form__label">Ваш номер</span>
                      <div class="main-form__input-wrapp _phone error">
                        <input value="" class="main-form__input main-form__phone mask-phone" type="tel" name="phone" id="client-phone" placeholder="+7 (___) ___-__-__" maxlength="16">
                        <span class="main-form__label-error">Ошибка в номере</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Тип профиля</span>
                      <div class="main-form__radio-group d-flex">
                        <input class="main-form__radio-input" type="radio" id="form-phys-face" name="type-employment" checked />
                        <label class="main-form__radio-label" for="form-phys-face">Физ. лицо</label>
                        <input class="main-form__radio-input" type="radio" id="forms-your-face" name="type-employment" />
                        <label class="main-form__radio-label" for="forms-your-face">Юр. лицо</label>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">ФИО</span>
                      <div class="main-form__input-wrapp done">
                        <input class="main-form__input" type="text" name="client-name" id="client-name" placeholder="Алексеев Алексей Алексеевич" maxlength="50">
                        <span class="main-form__label-error">Ошибка в имени</span>
                      </div>
                    </div>
                  </div>
                  <div class="profile-form__btns d-flex align-items-center mt-30">
                    <button type="button" class="btn btn_dark mr-30 save-edit-js">Сохранить</button>
                    <div class="text-link_red save-edit-js">Отменить</div>
                  </div>
                </form>
              </div>
              <div class="profile-info__block-wrapper profile-blocks-js">
                <div class="profile-info__block completed-form-js active">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">ПЕРСОНАЛЬНЫЕ <br>
                      ДАНнЫЕ</h3>
                    <div class="profile-info__block-link text-link_red run-edit-js">Редактировать</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Ваш номер</div>
                    <div class="profile-info__block-col-2">+ 7 999 999-22-11</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Тип профиля</div>
                    <div class="profile-info__block-col-2">Физ. лицо</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">ФИО</div>
                    <div class="profile-info__block-col-2">Алексеев Алексей Алексеевич</div>
                  </div>
                </div>
                <form class="profile-info__block-form profile-form edit-form-js">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">ПЕРСОНАЛЬНЫЕ <br>
                      ДАНнЫЕ</h3>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-form__row">
                      <span class="main-form__label">Ваш номер</span>
                      <div class="main-form__input-wrapp _phone error">
                        <input value="" class="main-form__input main-form__phone mask-phone" type="tel" name="phone" id="client-phone" placeholder="+7 (___) ___-__-__" maxlength="16">
                        <span class="main-form__label-error">Ошибка в номере</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Тип профиля</span>
                      <div class="main-form__radio-group d-flex">
                        <input class="main-form__radio-input" type="radio" id="form-phys-face" name="type-employment" checked />
                        <label class="main-form__radio-label" for="form-phys-face">Физ. лицо</label>
                        <input class="main-form__radio-input" type="radio" id="forms-your-face" name="type-employment" />
                        <label class="main-form__radio-label" for="forms-your-face">Юр. лицо</label>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">ФИО</span>
                      <div class="main-form__input-wrapp done">
                        <input class="main-form__input" type="text" name="client-name" id="client-name" placeholder="Алексеев Алексей Алексеевич" maxlength="50">
                        <span class="main-form__label-error">Ошибка в имени</span>
                      </div>
                    </div>
                  </div>
                  <div class="profile-form__btns d-flex align-items-center mt-30">
                    <button type="button" class="btn btn_dark mr-30 save-edit-js">Сохранить</button>
                    <div class="text-link_red save-edit-js">Отменить</div>
                  </div>
                </form>
              </div>
            </div>
            <!-- TAB PROFILE END-->
            <!-- TAB transactions-->
            <div id="transactions-tab-content" class="transactions profile-tab__content tab-content-js" data-tab="2" style="display: none">
              asfasf222
            </div>
            <!-- TAB transactions END-->
            <!-- TAB ANALITICS-->
            <div id="analitics-tab-content" class="analitics profile-tab__content tab-content-js" data-tab="3" style="display: none">
              afasf333
            </div>
            <!-- TAB ANALITICS END-->
          </div>
      </div>
    </div>
  </section>
</div>


<?php get_footer();