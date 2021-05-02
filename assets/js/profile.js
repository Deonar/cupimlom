jQuery(document).ready(function ($) {
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

  // TAIMER
  function startTimer() {
    var _Seconds = $('.seconds').text(),
      int;
    int = setInterval(function () {
      // запускаем интервал
      if (_Seconds > 0) {
        _Seconds--; // вычитаем 1
        $('.seconds').text(_Seconds); // выводим получившееся значение в блок
      } else {
        clearInterval(int); // очищаем интервал, чтобы он не продолжал работу при _Seconds = 0
        $('#send-sms').show(300);
        $('#authorization-confirm__sms').hide(300);
        $('#authorization-confirm__sms-timer').hide(300);
        $('.seconds').text('15');
      }
    }, 1000);
  }
  $('#entry-account').on('click', function (e) {
    startTimer();
  });
  $('#send-sms').on('click', function (e) {
    $(this).hide();
    $('#authorization-confirm__sms').show(300);
    $('#authorization-confirm__sms-timer').show(300);
    startTimer();
  });
});
