$(document).ready(function () {

  $('.menu_item').mouseenter(function () {

    $('.menu_sub_items').hide();
    $(this).find('.menu_sub_items').show();

  })

  $('.menu_item').mouseleave(function () {

    var $subItems = $(this).find('.menu_sub_items');
    var timer = setTimeout(function () {
      $subItems.hide();
    }, 1000);

    $(this).mouseenter(function () {
      clearTimeout(timer);
    });

  })


  $('.login a').on('click', function (e) {
    e.preventDefault();
    $('.mobile_login').show()
    $('.mobile_login :after').css('display', 'blok')
    document.body.style.overflow = 'hidden';
  })
  $('.mobile_close').on('click', function (e) {
    e.preventDefault();
    $('.mobile_login').hide()
    $('.login_user').show();
    $('.login_form').hide();
    $('.confirm_code').hide();
    $('.mobile_login :after').css('display', 'none')
    document.body.style.overflow = 'auto';
  });


  $('#patient').on('click', function (e) {
    e.preventDefault;
    $('.login_user').hide();
    $('.login_form').show();
  })


  var input = document.querySelector('#phone');
  window.intlTelInput(input, {}, {});


  var ddData = [
    {
      text: "Персоны",
      value: 1,
      selected: true,
      // description: "Description",
      imageSrc: "issets/img/man2.svg"
    },
    {
      text: "Организации",
      value: 2,
      selected: false,
      // description: "Description ",
      imageSrc: "issets/img/hospital2.svg"
    },
    {
      text: "Услуги",
      value: 3,
      selected: false,
      // description: "Description",
      imageSrc: "issets/img/service2.svg"
    },
    {
      text: "Диагностика",
      value: 4,
      selected: false,
      // description: "Description",
      imageSrc: "issets/img/micro2.svg"
    },
    {
      text: "Лечение",
      value: 5,
      selected: false,
      // description: "Description",
      imageSrc: "issets/img/patient2.svg"
    },
    {
      text: "Аптеки",
      value: 6,
      selected: false,
      // description: "Description",
      imageSrc: "issets/img/drug2.svg"
    }
  ];

  $('#myDropdown').ddslick({
    data: ddData,
    width: 200,
    selectText: "Select your preferred social network",
    imagePosition: "left",
    onSelected: function (selectedData) {
      var place = selectedData.selectedData.text;
      $('.search input').attr('placeholder', place)
      //callback function: do something with selectedData;
    }

  });

  $('.item_toggle').click(function (e) {
    e.preventDefault;
    $('.add').toggle();

    var currentValue = $('.item_toggle button').text();

    if (currentValue === 'Show more') {

      $('.item_toggle button').html('Show less');
    } else {

      $('.item_toggle button').html('Show more');
    }
  })


  // sidebar

  $('.humburger').click(function (e) {
    $('.sidebar_inner').css('right', '0');
    $('.sidebar').show();
    document.body.style.overflow = 'hidden';
  })

  $('.menu_close').on('click', function () {
    $('.sidebar').hide();

    document.body.style.overflow = 'auto';
  })

  // $('#phone_number').on('click', function () {
  //   $('.login_form').hide();
  //   $('.confirm_code').show();
  // })

  // $('#phone').mask("+99899-376-76-98");  
  $('#phone').blur(function (e) {

    if (validatePhone('phone')) {
      $('.form-control').html('Valid');
      $('.form-control').css('color', 'green');

    }
    else {
      $('.form-control').html('Invalid');
      $('.form-control').css('color', 'red');

    }
  });



  // phone number validation
  function validatePhone(phone) {
    var a = document.getElementById(phone).value;
    var filter = /^\d{9}$/;
    if (filter.test(a)) {
      $('.login_form').hide();
      $('.confirm_code').show();
      return true;
    }
    else {
      return false;
    }
  }

  $('.myTab .nav-item a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')

  })

  $('.main_inner .main_schedule .myTab li:first-child a').tab('show');

  $('.content_btn').click(function (e) {
    e.preventDefault;
    $('.add').toggle();
    // $('.content_btn button').html('Show less');

    var currentValue = $('.content_btn button').text();

    if (currentValue === 'Show more') {

      $('.content_btn button').html('Show less');
    } else {

      $('.content_btn button').html('Show more');
    }

  })

  // favourite
  $('.favourite').click(function (e) {
    e.preventDefault;

    if ($(this).css('background-color') === 'rgb(255, 0, 0)') {
      $(this).css('background-color', 'white');
      $(this).find('i').css('color', 'black');
    } else {
      $(this).css('background-color', 'red');
      $(this).find('i').css('color', 'yellow');
    }

  })






});