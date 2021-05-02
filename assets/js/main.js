jQuery(document).ready(function ($) {
  //Mob-menu
  $('#header-burger').on('click', function (e) {
    $(this).toggleClass('active');
    $('#menu-wrapper').toggleClass('active');
    $('body').toggleClass('overflow-h');
  });

  // ======================== MASK
  $('.mask-phone').mask('+7 999 999-99-99');

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

  //accordeon
  $('.accordeon-tab-js').click(function (event) {
    event.stopPropagation();
    if ($(this).closest('.accordeon-wrapper-js').hasClass('active')) {
      $(this).closest('.accordeon-wrapper-js').removeClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideUp(300);
    } else {
      // $('.accordeon-wrapper-js').removeClass('active');
      // $('.accordeon-content-js').slideUp(300);
      $(this).closest('.accordeon-wrapper-js').toggleClass('active');
      $(this).closest('.accordeon-wrapper-js').find('.accordeon-content-js').slideDown(300);
    }
  });
  //accordeon end

  //======================== ALL SELECT
  let select = function () {
    let selectHeader = document.querySelectorAll('.select__header');
    let selectItem = document.querySelectorAll('.select__item');

    selectHeader.forEach((item) => {
      item.addEventListener('click', selectToggle);
    });

    selectItem.forEach((item) => {
      item.addEventListener('click', selectChoose);
    });

    function selectToggle() {
      this.parentElement.classList.toggle('is-active');
    }

    function selectChoose() {
      let text = this.innerHTML,
        select = this.closest('.select-custom-js'),
        selectDataValue = this.dataset.selectValue;
      if (select) {
        currentText = select.querySelector('.select__current');
        currentInput = select.querySelector('input');

        currentText.innerHTML = text;
        currentInput.value = selectDataValue;
      }
      select.classList.remove('is-active');
    }
  };
  $(document).mouseup(function (e) {
    var select = $('.select');
    var actions = $('.actions-content-show-js, .header-top__location');
    if (e.target != select[0] && select.has(e.target).length === 0) {
      $('.select').removeClass('is-active');
    }
    if (e.target != actions[0] && actions.has(e.target).length === 0) {
      actions.removeClass('active');
    }
  });
  select();
  //======================== ALL SELECT END
});
