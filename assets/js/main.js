jQuery(document).ready(function ($) {
  //Mob-menu
  $('#header-burger').on('click', function (e) {
    $(this).toggleClass('active');
    $('#menu-wrapper').toggleClass('active');
    $('body').toggleClass('overflow-h');
  });

  //Height is equal to width
  function equalHeight(elem) {
    var widthElement = $(elem).width();
    $(elem).css({
      height: widthElement + 'px',
    });
  }

  equalHeight('.grid-square__item');
  $(window).resize(function () {
    equalHeight('.grid-square__item');
  });

  //======================== Custom select
  $('.custom-select_js').selectize({
    readOnly: true,
    onDelete: function () {
      return false;
    },
  });
  $('.custom-select_js input').prop('disabled', true);

  $('.selectize-dropdown-content').scrollbar();

  //Culculator
  $('#calculate-range-weight').slider({
    range: 'min',
    value: 0,
    min: 0,
    max: 100,
    step: 0.1,
  });

  $('#calculate-range-pollution').slider({
    range: 'min',
    value: 0,
    min: 0,
    max: 100,
    step: 0.1,
  });

  //======================== tabs
  $('.tab-wrapper-js').on('click', '.tab-js', function (event) {
    var tab = $(this).attr('data-tab');
    $(this).closest('.tab-wrapper-js').find('.tab-js').removeClass('active');
    $(this).addClass('active');

    $(this).closest('.tab-wrapper-js').find('.tab-content-js').hide();
    $(this)
      .closest('.tab-wrapper-js')
      .find('.tab-content-js[data-tab = ' + tab + ']')
      .show();
  });
  //======================== tabs  end
});
