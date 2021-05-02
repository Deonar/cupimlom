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

  //======================== profile edit form
  //show edit block form
  $('.profile-blocks-js').on('click', '.run-edit-js', function (event) {
    $(this).closest('.profile-blocks-js').find('.completed-form-js').removeClass('active');
    $(this).closest('.profile-blocks-js').find('.edit-form-js').addClass('active');
  });
  //hide edit block form
  $('.profile-blocks-js').on('click', '.save-edit-js', function (event) {
    $(this).closest('.profile-blocks-js').find('.completed-form-js').addClass('active');
    $(this).closest('.profile-blocks-js').find('.edit-form-js').removeClass('active');
  });
  //========================  profile edit form end

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

  //======================== daterangepicker profile
  // predefined ranges
  var start = moment().subtract(29, 'days');
  var end = moment();

  $('.daterange-input').daterangepicker(
    {
      locale: {
        format: 'MM/DD/YYYY',
        separator: ' - ',
        applyLabel: 'Выбрать',
        cancelLabel: 'Отмена',
        fromLabel: 'От',
        toLabel: 'До',
        customRangeLabel: 'Своя дата',
        daysOfWeek: ['Вс', 'Пт', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        firstDay: 1,
      },
      startDate: start,
      endDate: end,
      ranges: {
        Cегодня: [moment(), moment()],
        Вчера: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'За 7 дней': [moment().subtract(6, 'days'), moment()],
        'За 30 дней': [moment().subtract(29, 'days'), moment()],
        'За месяц': [moment().startOf('month'), moment().endOf('month')],
        'За прошлый месяц': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
      },
    },
    function (start, end, label) {
      $('#kt_daterangepicker_6 .form-control').val(start.format('MM/DD/YYYY') + ' / ' + end.format('MM/DD/YYYY'));
    }
  );

  if (document.documentElement.clientWidth < 420) {
    $('.daterange-input').attr('readonly', 'readonly');
  }
  //======================== daterangepicker profile end

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
  select();
  //======================== ALL SELECT END
});
