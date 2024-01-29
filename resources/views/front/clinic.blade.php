<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/libs/bootstrap.css">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- swipper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/intlTelInput.css">

  <!-- Custom css -->
  <link rel="stylesheet" href="assets/css/main.css?v=3">
  <title>Doctors</title>
</head>

<body>

  <div class="wrapper">

    <!-- mobile menu -->

    <div class="sidebar">
      <div class="sidebar_inner">

        <div class="menu_header">
          <div class="login">
            <a href="#" class="admin">
              <!-- <img src="assets/img/logo-d24.png" alt="logo"> -->
              <span>Login</span>
              <i class="fa-solid fa-user-tie"></i>
            </a>
          </div>

          <a href="#" class="menu_close">
            <i class="fas fa-times"></i>
          </a>
        </div>



        <div class="accordion" id="accordionExample">

          <!-- item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                Врачи
                <!-- <i class="fa-solid fa-chevron-down"></i> -->
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Гинеколог
              </div>
              <div class="accordion-body">
                Дерматолог
              </div>
              <div class="accordion-body">
                Невролог
              </div>
              <div class="accordion-body">
                Педиатр
              </div>
              <div class="accordion-body">
                Стоматолог
              </div>

            </div>
          </div>


          <!-- item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Клиники
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Клиника
              </div>
              <div class="accordion-body">
                Стоматология
              </div>
              <div class="accordion-body">
                Больница
              </div>
              <div class="accordion-body">
                Поликлиника
              </div>
              <div class="accordion-body">
                Роддом
              </div>
            </div>
          </div>

          <!-- item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Услуги
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                ЭКО
              </div>
              <div class="accordion-body">
                Ринопластика
              </div>
              <div class="accordion-body">
                Прививки
              </div>
              <div class="accordion-body">
                Имплантация зубов
              </div>
              <div class="accordion-body">
                Брекеты
              </div>

            </div>
          </div>


          <!-- item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                Диагностика
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                МРТ
              </div>
              <div class="accordion-body">
                КТ
              </div>
              <div class="accordion-body">
                УЗИ
              </div>
              <div class="accordion-body">
                Рентген
              </div>
              <div class="accordion-body">
                Гастроскопия
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- header -->
    <section class="header" id="head">
      <div class="container">
        <div class="header_inner">

          <div class="logo">
            <a href="index.html">
              <img src="assets/img/logo-d24.png" alt="logo">
            </a>
          </div>

          <div class="menu">


            <!-- menu item -->
            <div class="menu_item">
              <a href="#">
                <span>Врачи</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12" height="16" aria-hidden="true"
                  class="_8pb48z0 _1n5grcp84 _1n5grcp1sa _1n5grcp1vg _1n5grcp1m _1n5grcp2py">
                  <path
                    d="m256 275.6-92.3-92.3c-9.8-9.8-25.6-9.8-35.4 0-9.8 9.8-9.8 25.6 0 35.4l110 110c4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3l110-110c9.8-9.8 9.8-25.6 0-35.4s-25.6-9.8-35.4 0z">
                  </path>
                </svg>
              </a>

              <ul class="menu_sub_items">

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Гинеколог</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Дерматолог</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Невролог</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Педиатр</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Стоматолог</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Все врачи</a>
                </li>


              </ul>
            </div>

            <!-- menu item -->
            <div class="menu_item">
              <a href="#">
                <span>Клиники</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12" height="16" aria-hidden="true"
                  class="_8pb48z0 _1n5grcp84 _1n5grcp1sa _1n5grcp1vg _1n5grcp1m _1n5grcp2py">
                  <path
                    d="m256 275.6-92.3-92.3c-9.8-9.8-25.6-9.8-35.4 0-9.8 9.8-9.8 25.6 0 35.4l110 110c4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3l110-110c9.8-9.8 9.8-25.6 0-35.4s-25.6-9.8-35.4 0z">
                  </path>
                </svg>
              </a>

              <ul class="menu_sub_items">

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Клиника</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Стоматология</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Больница</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Поликлиника</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Роддом</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Все клиники</a>
                </li>


              </ul>
            </div>

            <!-- menu item -->
            <div class="menu_item">
              <a href="#">
                <span>Услуги</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12" height="16" aria-hidden="true"
                  class="_8pb48z0 _1n5grcp84 _1n5grcp1sa _1n5grcp1vg _1n5grcp1m _1n5grcp2py">
                  <path
                    d="m256 275.6-92.3-92.3c-9.8-9.8-25.6-9.8-35.4 0-9.8 9.8-9.8 25.6 0 35.4l110 110c4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3l110-110c9.8-9.8 9.8-25.6 0-35.4s-25.6-9.8-35.4 0z">
                  </path>
                </svg>
              </a>

              <ul class="menu_sub_items">

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">ЭКО</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Ринопластика</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Прививки</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Имплантация зубов</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Брекеты</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Все услуги</a>
                </li>


              </ul>
            </div>

            <!-- menu item -->
            <div class="menu_item">
              <a href="#">
                <span>Диагностика</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12" height="16" aria-hidden="true"
                  class="_8pb48z0 _1n5grcp84 _1n5grcp1sa _1n5grcp1vg _1n5grcp1m _1n5grcp2py">
                  <path
                    d="m256 275.6-92.3-92.3c-9.8-9.8-25.6-9.8-35.4 0-9.8 9.8-9.8 25.6 0 35.4l110 110c4.9 4.9 11.3 7.3 17.7 7.3s12.8-2.4 17.7-7.3l110-110c9.8-9.8 9.8-25.6 0-35.4s-25.6-9.8-35.4 0z">
                  </path>
                </svg>
              </a>

              <ul class="menu_sub_items">

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">МРТ</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">КТ</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">УЗИ</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Рентген</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Гастроскопия</a>
                </li>

                <!-- sub_item -->
                <li class="menu_sub_item">
                  <a href="#">Все диагностика</a>
                </li>


              </ul>
            </div>
          </div>

          <div class="login">
            <a href="#" class="btn btn-primary">
              <!-- <i class="fa-solid fa-lock"></i> -->
              <i class="fa-solid fa-right-to-bracket"></i>
              <span>Войти</span>
            </a>

            <div class="humburger">
              <i class="fa-solid fa-bars"></i>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- hero -->
    <section class="doctors_hero" id="hero">
      <div class="container">
        <div class="hero_inner">

          <div class="hero_left">
            <div class="hero_content">

              <div class="hero_title">
                Ваш Путеводитель в <br> Мире Заботы о <span> Здоровье</span>
              </div>

              <div class="hero_subtitle">
                Откройте доступ к широкому выбору врачей. Записывайтесь онлайн, читайте <br> отзывы пациентов и
                делайте
                правильный выбор для
                своего здоровья.
              </div>
            </div>
            <div class="search">
              <div id="myDropdown"></div>


              <input type="text" placeholder="Персоны, Клиники, Услуги, Диагностика ..">
              <a href="#" class="btn btn-primary search_btn">
                <i class="fa-solid fa-magnifying-glass"></i>
                <!-- <span>Поиск</span> -->
              </a>
            </div>

            <div class="categories">

              <!-- item -->
              <a href="doctors.html">
                <p>Врачи</p>
                <span>5550</span>
              </a>

              <!-- item -->
              <a href="#">
                <p>Клиники</p>
                <span>5550</span>
              </a>

              <!-- item -->
              <a href="service.html">
                <p>Услуги</p>
                <span>5550</span>
              </a>

              <!-- item -->
              <a href="diagnostic.html">
                <p>Диагностика</p>
                <span>5550</span>
              </a>

              <!-- item -->
              <a href="treatment.html">
                <p>Лечение</p>
                <span>5550</span>
              </a>

            </div>

          </div>

        </div>
      </div>
    </section>

    <div class="content">
      <div class="container">
        <div class="content_title">
          Kлиники
        </div>
        <div class="content_inner">

          <div class="content_items">

            <div class="content_item">
              <span>45</span>
              <a href="#">Аллергологические услуги</a>
            </div>
            <div class="content_item">
              <span>48</span>
              <a href="#">Андрологические услуги</a>
            </div>
            <div class="content_item">
              <span>24</span>
              <a href="#">Анестезия</a>
            </div>
            <div class="content_item">
              <span>35</span>
              <a href="#">Блокада</a>
            </div>
            <div class="content_item">
              <span>14</span>
              <a href="#">Гинекологические услуги</a>
            </div>
            <div class="content_item">
              <span>45</span>
              <a href="#">Дерматологические услуги</a>
            </div>
            <div class="content_item">
              <span>49</span>
              <a href="#">Косметологические услуги</a>
            </div>

          </div>

          <div class="content_items add">

            <div class="content_item">
              <span>45</span>
              <a href="#">Аллергологические услуги</a>
            </div>
            <div class="content_item">
              <span>48</span>
              <a href="#">Андрологические услуги</a>
            </div>
            <div class="content_item">
              <span>24</span>
              <a href="#">Анестезия</a>
            </div>
            <div class="content_item">
              <span>35</span>
              <a href="#">Блокада</a>
            </div>
            <div class="content_item">
              <span>14</span>
              <a href="#">Гинекологические услуги</a>
            </div>
            <div class="content_item">
              <span>45</span>
              <a href="#">Дерматологические услуги</a>
            </div>
            <div class="content_item">
              <span>49</span>
              <a href="#">Косметологические услуги</a>
            </div>

          </div>

          <div class="content_items add">

            <div class="content_item">
              <span>45</span>
              <a href="#">Аллергологические услуги</a>
            </div>
            <div class="content_item">
              <span>48</span>
              <a href="#">Андрологические услуги</a>
            </div>
            <div class="content_item">
              <span>24</span>
              <a href="#">Анестезия</a>
            </div>
            <div class="content_item">
              <span>35</span>
              <a href="#">Блокада</a>
            </div>
            <div class="content_item">
              <span>14</span>
              <a href="#">Гинекологические услуги</a>
            </div>
            <div class="content_item">
              <span>45</span>
              <a href="#">Дерматологические услуги</a>
            </div>
            <div class="content_item">
              <span>49</span>
              <a href="#">Косметологические услуги</a>
            </div>

          </div>

          <div class="content_items add">

            <div class="content_item">
              <span>45</span>
              <a href="#">Аллергологические услуги</a>
            </div>
            <div class="content_item">
              <span>48</span>
              <a href="#">Андрологические услуги</a>
            </div>
            <div class="content_item">
              <span>24</span>
              <a href="#">Анестезия</a>
            </div>
            <div class="content_item">
              <span>35</span>
              <a href="#">Блокада</a>
            </div>
            <div class="content_item">
              <span>14</span>
              <a href="#">Гинекологические услуги</a>
            </div>
            <div class="content_item">
              <span>45</span>
              <a href="#">Дерматологические услуги</a>
            </div>
            <div class="content_item">
              <span>49</span>
              <a href="#">Косметологические услуги</a>
            </div>

          </div>

        </div>

        <div class="content_btn">
          <button class="btn btn-primary">Show more</button>
        </div>
      </div>
    </div>

    <div class="container">
      <hr class="mb-5">
    </div>

    <!-- main section -->
    <section class="main">
      <div class="container">



        <div class="main_inner">

          <div class="main_content">
            <div class="content_left">
              <div class="favourite">
                <i class="fa-regular fa-heart"></i>
              </div>
              <div class="image">
                <img src="https://img5.lalafo.com/i/business-profile/78/38/93/09beb2223485b18f22c6bab400.jpg"
                  alt="doctor">
              </div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="reviews">
                <a href="#">74 отзыва
                </a>
              </div>
            </div>

            <div class="content_right">
              <div class="doctors_name">
                Медицинский центр «AkfaMED»
              </div>
              <div class="profession">
                Клиника
              </div>
              <div class="experience">
                58 врачей
              </div>
              <div class="level">
                Высшая категория
              </div>
              <div class="number">
                <p>Запись на приём:</p>
                <a href="tel">
                  <i class="fa-solid fa-phone-volume"></i>
                  +998 76 207-02-38
                </a>
              </div>
              <div class="number">
                <a href="tel">
                  <i class="fa-solid fa-location-dot"></i>
                  ул. Фархад, д. 5
                </a>
              </div>
            </div>
          </div>
          <div class="main_schedule">

            <!-- buttons   li-> href add $key. it should be uniqual -->
            <ul class="myTab buttons nav nav-tabs" role="tablist">

              <li class="nav-item">
                <a class="button form_btn nav-link" id="monday-tab" data-toggle="tab" href="#monday" role="tab"
                  aria-controls="monday" aria-selected="true">
                  Пн <br> 11
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link active" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab"
                  aria-controls="tuesday" aria-selected="true">
                  Вт <br> 12
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab"
                  aria-controls="thursday" aria-selected="true">
                  Ср <br> 13
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                  aria-controls="wednesday" aria-selected="true">
                  Чт <br> 14
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="friday-tab" data-toggle="tab" href="#friday" role="tab"
                  aria-controls="friday" aria-selected="true">
                  Пт <br> 15
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab"
                  aria-controls="saturday" aria-selected="true">
                  Сб <br> 16
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab"
                  aria-controls="sunday" aria-selected="true">
                  Вс <br> 17
                </a>
              </li>

            </ul>

            <div class="myTabContent tab-content">

              <!-- item -->
              <div class="weekday tab-pane fade show" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>

                <a href="#">
                  16:45
                </a>
              </div>
              <!-- item -->
              <div class="weekday tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>
              <!-- item -->
              <div class="weekday tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

            </div>



          </div>
        </div>

        <div class="main_inner">


          <div class="main_content">
            <div class="content_left">
              <div class="favourite">
                <i class="fa-regular fa-heart"></i>
              </div>
              <div class="image">
                <img src="https://med24.uz/upload/iblock/22e/22e4da8a89ebd4e8791560b4b0c4079c.jpg" alt="doctor">
              </div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="reviews">
                <a href="#">74 отзыва
                </a>
              </div>
            </div>

            <div class="content_right">
              <div class="doctors_name">
                Медицинский центр «AsiaMedCenter»
              </div>
              <div class="profession">
                Клиника
              </div>
              <div class="experience">
                32 врачей
              </div>
              <div class="level">
                Высшая категория
              </div>
              <div class="number">
                <p>Запись на приём:</p>
                <a href="tel">
                  <i class="fa-solid fa-phone-volume"></i>
                  +998 76 207-02-38
                </a>
              </div>
              <div class="number">
                <a href="tel">
                  <i class="fa-solid fa-location-dot"></i>
                  ул. Фархад, д. 5
                </a>
              </div>
            </div>
          </div>


          <div class="main_schedule">

            <!-- buttons -->
            <ul class="myTab buttons nav nav-tabs" id="myTab" role="tablist">

              <li class="nav-item">
                <a class="button form_btn nav-link" id="monday-tab" data-toggle="tab" href="#monday1" role="tab"
                  aria-controls="monday" aria-selected="true">
                  Пн <br> 11
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday1" role="tab"
                  aria-controls="tuesday" aria-selected="true">
                  Вт <br> 12
                </a>
              </li>

              <li class="nav-item">
                <a class="button form_btn nav-link" id="thursday-tab" data-toggle="tab" href="#thursday1" role="tab"
                  aria-controls="thursday" aria-selected="true">
                  Ср <br> 13
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday1" role="tab"
                  aria-controls="wednesday" aria-selected="true">
                  Чт <br> 14
                </a>
              </li>

              <li class="nav-item">
                <a class="button form_btn nav-link" id="friday-tab" data-toggle="tab" href="#friday1" role="tab"
                  aria-controls="friday" aria-selected="true">
                  Пт <br> 15
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="saturday-tab" data-toggle="tab" href="#saturday1" role="tab"
                  aria-controls="saturday" aria-selected="true">
                  Сб <br> 16
                </a>
              </li>
              <li class="nav-item">
                <a class="button form_btn nav-link" id="sunday-tab" data-toggle="tab" href="#sunday1" role="tab"
                  aria-controls="sunday" aria-selected="true">
                  Вс <br> 17
                </a>
              </li>
            </ul>

            <div class="myTabContent tab-content" id="myTabContent">

              <!-- item -->
              <div class="weekday tab-pane fade show" id="monday1" role="tabpanel" aria-labelledby="monday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="tuesday1" role="tabpanel" aria-labelledby="tuesday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="thursday1" role="tabpanel" aria-labelledby="thursday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="wednesday1" role="tabpanel" aria-labelledby="wednesday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

              <!-- item -->
              <div class="weekday tab-pane fade" id="friday1" role="tabpanel" aria-labelledby="friday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>

                <a href="#">
                  16:45
                </a>
              </div>
              <!-- item -->
              <div class="weekday tab-pane fade" id="saturday1" role="tabpanel" aria-labelledby="saturday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:20
                </a>
                <a href="#">
                  16:30
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:35
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>
              <!-- item -->
              <div class="weekday tab-pane fade" id="sunday1" role="tabpanel" aria-labelledby="sunday-tab">
                <a href="#">
                  16:00
                </a>
                <a href="#">
                  16:45
                </a>
                <a href="#">
                  16:45
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- footer -->
    <div class="footer">
      <div class="container">
        <div class="footer_inner">
          <div class="footer_items">

            <!-- item -->
            <div class="footer_item">
              <div class="footer_logo">
                <a href="/"><img src="assets/img/logo-d24.png" alt=""></a>
                <div class="footer_logo_desc">
                  Lorem ipsum, dolor sit amet <br>consectetur adipisicing elit alert. <br> Doloribus eaque dicta,
                  iste quisquam
                </div>
              </div>
              <ul>
                <li class="item_name">For Patients</li>
                <li><a href="#">Search for Doctor</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
              </ul>
              <ul>
                <li class="item_name">For Doctors</li>
                <li><a href="#">Appointment</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="#">Login</a></li>
              </ul>
              <ul>
                <li class="item_name">Contact Us</li>
                <li><a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    Uzbekistan, Tashkent
                  </a></li>
                <li><a href="tel:+998993332211">
                    <i class="fa-solid fa-phone-volume"></i>
                    +99876 001 76 15
                  </a></li>
                <li><a href="mailto: example@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                    Example@gmail.com
                  </a></li>
              </ul>

            </div>
          </div>

          <div class="footer_bottom">
            <p>Copyright © 2024</p>

            <div class="footer_term">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms and Conditions</a>
            </div>

            <div class="upper">
              <a href="#head">
                <i class="fa-regular fa-circle-up"></i>
              </a>
            </div>
          </div>



        </div>
      </div>
    </div>


    <!-- popup mobile login  -->
    <div class="mobile_login">

      <div class="mobile_login_inner">
        <div class="mobile_close">
          <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="login_user">
          <div class="login_title">
            Пациент
          </div>
          <div class="login_text">
            Делитесь отзывами о врачах, записывайтесь на приём онлайн, ведите электронную медкарту
          </div>
          <div class="login_btn btn btn-primary" id="patient">
            <a href="#">Войти</a>
          </div>
        </div>

        <div class="login_user">
          <div class="login_title">
            Врач или клиника
          </div>
          <div class="login_text">
            Отвечайте на отзывы пациентов, включайте запись на приём, рассказывайте о ваших услугах
          </div>
          <div class="login_btn btn btn-primary">
            <a href="#">Войти</a>
          </div>
        </div>

        <div class="login_form">
          <p>Please enter your phone number</p>
          <form action="#" id="phone_form">
            <input type="tel" class="form-control intl-tel-input" id="phone" placeholder="+998901234567" required>
            <button type="submit" id="phone_number">Submit</button>
          </form>

        </div>

        <div class="confirm_code">
          <p>Please enter confirm code</p>
          <form action="/">
            <input type="number" class="form-control" placeholder="12345">
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>


  </div>


  <script src="assets/libs/bootstrap.bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script type="text/javascript"
    src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>

  <script src="assets/js/intlTelInput.js"></script>

  <script src="assets/js/swipper.js"></script>

  <script src="assets/js/main.js"></script>


</body>

</html>