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
            <div id="profile-tab-content" class="profile-tab-content tab-content-js" data-tab="1">
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
                    <h3 class="profile-info__block-title h3 primary-title">ПАСПОРТНЫЕ <br>
                      ДАНнЫЕ</h3>
                    <div class="profile-info__block-link text-link_red run-edit-js">Редактировать</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Фото паспорта</div>
                    <div class="profile-info__block-col-2 run-edit-js"> <span class="text-link_red">3 фото</span> </div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Серия и номер паспорта</div>
                    <div class="profile-info__block-col-2">44 22 331 234</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Дата рождения</div>
                    <div class="profile-info__block-col-2">10.08.1985</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Место рождения</div>
                    <div class="profile-info__block-col-2">РФ, г. Челябинск</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Дата выдачи</div>
                    <div class="profile-info__block-col-2">11.02.2020</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Место выдачи</div>
                    <div class="profile-info__block-col-2">УФМС России по Челябинской области</div>
                  </div>
                </div>
                <form class="profile-info__block-form profile-form edit-form-js">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">ПАСПОРТНЫЕ  <br>
                      ДАНнЫЕ</h3>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-form__row justify-content-between">
                      <span class="main-form__label">Фото паспорта <span class="main-form__label-desc">Загрузите фото лицевой
                        и оборотной стороны</span></span>
                      
                      <div class="profile-passport__wrapp">
                        <div class="profile-passport__img-wrapp">
                          <div class="profile-passport__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-logo.jpg" alt="" />
                          </div>
                          <button class="profile-passport__img-delete text-link_red mt-10"> Удалить</button>
                        </div>
                        
                        <button class="profile-passport__edit-button"> <span>+</span></button>
                        
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Серия <br>
                        и номер паспорта</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-nr-passport" id="client-nr-passport" placeholder="44 22 331 234" maxlength="15">
                        <span class="main-form__label-error">Ошибка в номере</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Дата рождения</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-birthday" id="client-birthday" placeholder="10.08.1985" maxlength="10">
                        <span class="main-form__label-error">Ошибка в дате</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Место рождения</span>
                      <div class="main-form__input-wrapp">
                        <input class="main-form__input" type="text" name="client-place-birthday" id="client-place-birthday" placeholder="РФ, г. Челябинск" maxlength="50">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Дата выдачи</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-date-issue" id="client-date-issue" placeholder="10.08.1985" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Место выдачи</span>
                      <div class="main-form__input-wrapp" >
                        <input class="main-form__input" type="text" name="client-place-issue" id="client-place-issue" placeholder="УФМС России по Челябинской области" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
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
                    <h3 class="profile-info__block-title h3 primary-title">адрес постоянной <br>
                      регистрации</h3>
                    <div class="profile-info__block-link text-link_red run-edit-js">Редактировать</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Индекс</div>
                    <div class="profile-info__block-col-2">454 078</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Регион</div>
                    <div class="profile-info__block-col-2">Уральский</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Город</div>
                    <div class="profile-info__block-col-2">Челябинск</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Улица</div>
                    <div class="profile-info__block-col-2">пр-т. Ленина</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Дом</div>
                    <div class="profile-info__block-col-2">53</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Корпус</div>
                    <div class="profile-info__block-col-2">-</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Строение</div>
                    <div class="profile-info__block-col-2">-</div>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-info__block-col-1">Квартира</div>
                    <div class="profile-info__block-col-2">22</div>
                  </div>
                </div>
                <form class="profile-info__block-form profile-form edit-form-js">
                  <div class="profile-info__block-head">
                    <h3 class="profile-info__block-title h3 primary-title">адрес постоянной <br>
                      регистрации</h3>
                  </div>
                  <div class="profile-info__block-row">
                    <div class="profile-form__row">
                      <span class="main-form__label">Индекс</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-index-passport" id="client-index-passport" placeholder="454 078" maxlength="20">
                        <span class="main-form__label-error">Ошибка в номере</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Регион</span>
                      <div class="main-form__input-wrapp">
                        <input class="main-form__input" type="text" name="client-region" id="client-region" placeholder="Уральский" maxlength="50">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Город</span>
                      <div class="main-form__input-wrapp">
                        <input class="main-form__input" type="text" name="client-city" id="client-city" placeholder="Челябинск" maxlength="50">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Улица</span>
                      <div class="main-form__input-wrapp" >
                        <input class="main-form__input" type="text" name="client-street" id="client-street" placeholder="пр-т. Ленина" maxlength="50">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Дом</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-house" id="client-house" placeholder="53" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Корпус</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-place-issue" id="client-place-issue" placeholder="1" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Строение</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-place-issue" id="client-place-issue" placeholder="1" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
                      </div>
                    </div>
                    <div class="profile-form__row">
                      <span class="main-form__label">Квартира</span>
                      <div class="main-form__input-wrapp" style="max-width: 155px;">
                        <input class="main-form__input" type="text" name="client-" id="client-place-issue" placeholder="7" maxlength="10">
                        <span class="main-form__label-error">Ошибка</span>
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
            <!-- TAB dealings-->
            <div id="dealings-tab-content" class="dealings-tab-content dealings tab-content-js" data-tab="2" style="display: none">
              <div class="transactions-head">
                <div class="transactions-sort__daterange">
                  <label class="daterange-input__label" for="daterange-input">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon-daterange-input.svg" alt="" />
                  </label>
                  <input id="daterange-input" class="daterange-input" type="text" name="daterange" value="01/01/2018 - 01/15/2021" />
                </div>
                <div class="transactions-sort__ofselect"> 
                  <div class="select select-custom-js">
                    <div class="select__header">
                      <label class="select__label">Сортировать:</label>
                      <span class="select__current"></span>
                      <input type="hidden" name="search" value="1" />
                    </div>
                    <div class="select__body">
                      <div class="select__item" data-select-value="1">по объему сырья</div>
                      <div class="select__item" data-select-value="2">по сумме</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dealings-card">
                <div class="dealings-card__head">
                  <div class="dealings-card__head-item">
                    <span class="dealings-card__head-label"> Вес сырья</span>
                    <b class="dealings-card__head-title">40 кг</b>
                  </div>
                  <div class="dealings-card__head-item">
                    <span class="dealings-card__head-label">Сумма сделки</span>
                    <b class="dealings-card__head-title">15 000 руб</b>
                  </div>
                  <div class="dealings-card__head-item">
                    <span class="dealings-card__head-label">22.03.2020</span>
                    <div>
                      <div class="select select-custom-js">
                        <div class="select__header">
                          <label class="select__label">Действия:</label>
                          <span class="select__current"></span>
                          <input type="hidden" name="search" value="1" />
                        </div>
                        <div class="select__body">
                          <div class="select__item" data-select-value="1">Действия 1</div>
                          <div class="select__item" data-select-value="2">Действия 2</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="dealings-accordeon">
                  <li class="accordeon-wrapper accordeon-wrapper-js active  ">
                    <div class="dealings-accordeon__head accordeon-tab accordeon-tab-js ">
                      <div class="dealings-material dealings-material-col-1">
                        <div class="dealings-material__icon" style="background: #EA9B79;"></div>
                        <div class="dealings-material__text">Медь</div>
                        <div class="dealings-material__sub-text">Кабель</div>
                      </div>
                      <div class="dealings-material__text dealings-material-col-2">Кабель</div>
                      <div class="dealings-material__price dealings-material-col-3">12 000 руб</div>
                    </div>
                    <div class="dealings-accordeon__content accordeon-content accordeon-content-js" style="display: block;">
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Магнитность</div>
                        <div class="profile-info__block-col-2">нет</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Химпроверка</div>
                        <div class="profile-info__block-col-2">ГОСТ 20495-75</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">% засора</div>
                        <div class="profile-info__block-col-2">10-15%</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Вес брутто</div>
                        <div class="profile-info__block-col-2">22 кг</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Вес нетто</div>
                        <div class="profile-info__block-col-2">Физ</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Цена за кг</div>
                        <div class="profile-info__block-col-2">240 руб</div>
                      </div>
                    </div>
                  </li>
                  <li class="accordeon-wrapper accordeon-wrapper-js  ">
                    <div class="dealings-accordeon__head accordeon-tab accordeon-tab-js ">
                      <div class="dealings-material dealings-material-col-1">
                        <div class="dealings-material__icon" style="background: #DDDEE1;"></div>
                        <div class="dealings-material__text">Алюминий</div>
                        <div class="dealings-material__sub-text">Кабель</div>
                      </div>
                      <div class="dealings-material__text dealings-material-col-2">Кабель</div>
                      <div class="dealings-material__price dealings-material-col-3">15 000 руб</div>
                    </div>
                    <div class="dealings-accordeon__content accordeon-content accordeon-content-js">
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Магнитность</div>
                        <div class="profile-info__block-col-2">нет</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Химпроверка</div>
                        <div class="profile-info__block-col-2">ГОСТ 20495-75</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">% засора</div>
                        <div class="profile-info__block-col-2">10-15%</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Вес брутто</div>
                        <div class="profile-info__block-col-2">22 кг</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Вес нетто</div>
                        <div class="profile-info__block-col-2">Физ</div>
                      </div>
                      <div class="profile-info__block-row">
                        <div class="profile-info__block-col-1">Цена за кг</div>
                        <div class="profile-info__block-col-2">240 руб</div>
                      </div>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- TAB dealings END-->
            <!-- TAB ANALITICS-->
            <div id="analitics-tab-content" class="analitics profile-tab__content tab-content-js" data-tab="3" style="display: none">
              Аналитика
            </div>
            <!-- TAB ANALITICS END-->
          </div>
      </div>
    </div>
  </section>
</div>


<?php get_footer();