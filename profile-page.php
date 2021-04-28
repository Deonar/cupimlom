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
              <div class="profile-info__block">
                <div class="profile-info__block-head">
                  <h3 class="profile-info__block-title h3 primary-title">ПЕРСОНАЛЬНЫЕ <br>
                    ДАНнЫЕ</h3>
                  <a href="#" class="profile-info__block-link text-link_red">Редактировать</a>
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