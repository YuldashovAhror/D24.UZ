<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="issets/libs/bootstrap.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="issets/css/demo.css">
    <link rel="stylesheet" href="issets/css/intlTelInput.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="issets/css/main.css?v=3">
    <title>D-24</title>
</head>

<body>

    <div class="wrapper">

        <!-- mobile menu -->

        <div class="sidebar">
            <div class="sidebar_inner">

                <div class="menu_header">
                    <div class="login">
                        <a href="#" class="admin">
                            <!-- <img src="issets/img/logo-d24.png" alt="logo"> -->
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
                            <img src="issets/img/logo-d24.png" alt="logo">
                        </a>
                    </div>

                    <div class="menu">

                        <!-- menu item -->
                        <div class="menu_item">
                            <a href="#">
                                <span>Врачи</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12"
                                    height="16" aria-hidden="true"
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12"
                                    height="16" aria-hidden="true"
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12"
                                    height="16" aria-hidden="true"
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12"
                                    height="16" aria-hidden="true"
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
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero_inner">

                    <div class="hero_left">
                        <div class="hero_content">

                            <div class="hero_title">
                                Ваш Путеводитель в <br> Мире Заботы о <span> Здоровье</span>
                            </div>

                            <div class="hero_subtitle">
                                Откройте доступ к широкому выбору врачей. Записывайтесь онлайн, читайте <br> отзывы
                                пациентов и
                                делайте
                                правильный выбор для
                                своего здоровья.
                            </div>
                        </div>
                        <div class="search">
                            <div id="myDropdown"></div>

                            <input type="text" placeholder="Персоны, Клиники, Услуги, Диагностика">
                            <a href="#" class="btn btn-primary search_btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <!-- <span>Поиск</span> -->
                            </a>
                        </div>

                    </div>

                    <div class="hero_right">
                        <img src="issets/img/bg.png" alt="bg">
                    </div>
                </div>
            </div>
        </section>

        <!-- category -->
        <section class="category">
            <div class="container">

                <div class="category_changer">
                    <div class="section_title">
                        Категории
                    </div>
                    <div class="category_changer_inner">
                        <div class="swiper-prev swiper_btn">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="swiper-next swiper_btn">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="category_inner">

                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/man.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="doctors.html" class="item_buttom">Персоны</a>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/hospital.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="clinic.html" class="item_buttom">Организации</a>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/service.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="service.html" class="item_buttom">Услуги</a>
                                </div>

                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/micro.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="diagnostic.html" class="item_buttom">Диагностика</a>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/patient.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="treatment.html" class="item_buttom">Лечение</a>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/drug.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="#" class="item_buttom">Аптеки</a>
                                </div>
                            </div>

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="category_item">
                                    <div class="item">
                                        <div>
                                            <img src="issets/img/micro.svg" alt="man">
                                        </div>
                                    </div>
                                    <a href="#" class="item_buttom">Диагностика</a>
                                </div>
                            </div>

                        </div>
                        <!-- If we need pagination -->
                        <!-- <div class="swiper-pagination"></div> -->

                        <!-- If we need navigation buttons -->
                        <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>

                </div>
            </div>
        </section>

        <!-- category mobile -->
        <section class="category_mobile">
            <div class="container">
                <div class="category_inner">

                    <!-- item -->
                    <div class="category_item">
                        <a href="doctors.html" class="item_buttom">Персоны</a>
                    </div>

                    <!-- item -->
                    <div class="category_item">
                        <a href="clinic.html" class="item_buttom">Организации</a>
                    </div>

                    <!-- item -->
                    <div class="category_item">
                        <a href="service.html" class="item_buttom">Услуги</a>
                    </div>

                    <!-- item -->
                    <div class="category_item">
                        <a href="diagnostic.html" class="item_buttom">Диагностика</a>
                    </div>

                    <!-- item -->
                    <div class="category_item">
                        <a href="#" class="item_buttom">Аптеки</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- guide -->
        <section class="guide">
            <div class="container">
                <div class="guide_inner">

                    <div class="left_item">
                        <img src="issets/img/work-img.png" alt="">
                    </div>

                    <div class="right_item">
                        <div class="guide_title">
                            4 easy steps to get your solution
                        </div>
                        <div class="guide_content">

                            <!-- item -->
                            <div class="content_item">

                                <div class="content_img">
                                    <img src="issets/img/work-01.svg" alt="">
                                </div>

                                <div class="content_text">
                                    <p>Search Doctor</p>
                                    <span>
                                        Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore
                                        magna aliqua.
                                    </span>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="content_item">

                                <div class="content_img">
                                    <img src="issets/img/work-02.svg" alt="">
                                </div>

                                <div class="content_text">
                                    <p>Schedule Appointment</p>
                                    <span>
                                        Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore
                                        magna aliqua.
                                    </span>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="content_item">

                                <div class="content_img">
                                    <img src="issets/img/work-03.svg" alt="">
                                </div>

                                <div class="content_text">
                                    <p>Check Doctor Profile</p>
                                    <span>
                                        Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore
                                        magna aliqua.
                                    </span>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="content_item">

                                <div class="content_img">
                                    <img src="issets/img/work-04.svg" alt="">
                                </div>

                                <div class="content_text">
                                    <p>Get Your Solution</p>
                                    <span>
                                        Lorem ipsum dolor consectetur adipiscing elit, tempor incididunt labore dolore
                                        magna aliqua.
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- advantage -->
        <section class="advantage">
            <div class="container">

                <div class="advantage_top">
                    <div class="advantage_title">
                        Наши услуги
                    </div>
                </div>
                <div class="advantage_inner">

                    <!-- item -->
                    <div class="advantage_item">
                        <div class="advantage_name">
                            <a href="doctors.html">
                                <span>Врачи</span>
                                <span>104 498</span>
                            </a>
                        </div>
                        <ul class="advantage_content">
                            <li>
                                <a href="#">
                                    <span>Гинеколог</span>
                                    <span>6035</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Дерматолог</span>
                                    <span>3319</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Невролог</span>
                                    <span>3848</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Педиатр</span>
                                    <span>6138</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Стоматолог</span>
                                    <span>6989</span>
                                </a>
                            </li>

                        </ul>

                        <a href="doctors.html" class="button btn">
                            Все врачи
                        </a>
                    </div>

                    <!-- item -->
                    <div class="advantage_item add">
                        <div class="advantage_name">
                            <a href="clinic.html">
                                <span>Клиники</span>
                                <span>104 498</span>
                            </a>
                        </div>
                        <ul class="advantage_content">
                            <li>
                                <a href="#">
                                    <span>Клиника </span>
                                    <span>6035</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Стоматология</span>
                                    <span>3319</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Больница</span>
                                    <span>3848</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Поликлиника</span>
                                    <span>6138</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Роддом</span>
                                    <span>6989</span>
                                </a>
                            </li>

                        </ul>

                        <a href="clinic.html" class="button btn">
                            Все клиники
                        </a>
                    </div>

                    <!-- item -->
                    <div class="advantage_item add">
                        <div class="advantage_name">
                            <a href="service.html">
                                <span>Услуги</span>
                                <span>104 498</span>
                            </a>
                        </div>
                        <ul class="advantage_content">
                            <li>
                                <a href="#">
                                    <span>ЭКО</span>
                                    <span>6035</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Ринопластика</span>
                                    <span>3319</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Прививки</span>
                                    <span>3848</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Имплантация зубов</span>
                                    <span>6138</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Брекеты</span>
                                    <span>6989</span>
                                </a>
                            </li>

                        </ul>

                        <a href="service.html" class="button btn">
                            Все услуги
                        </a>
                    </div>

                    <!-- item -->
                    <div class="advantage_item add">
                        <div class="advantage_name">
                            <a href="diagnostic.html">
                                <span>Диагностика</span>
                                <span>104 498</span>
                            </a>
                        </div>
                        <ul class="advantage_content">
                            <li>
                                <a href="#">
                                    <span>МРТ</span>
                                    <span>6035</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>КТ</span>
                                    <span>3319</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>УЗИ</span>
                                    <span>3848</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Рентген</span>
                                    <span>6138</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Гастроскопия</span>
                                    <span>6989</span>
                                </a>
                            </li>

                        </ul>

                        <a href="#" class="button btn">
                            Все диагностика
                        </a>
                    </div>

                </div>

                <div class="item_toggle">
                    <button class="btn btn-primary">Show more</button>
                </div>
            </div>
        </section>

        <!-- advantages mobile -->
        <section class="adv_mobile">
            <div class="container">
                <div class="adv_mobile__inner">

                    <div class="mobile_items_list">
                        <p>Врачи</p>
                        <div class="mobile_items">
                            <a href="#" class="mobile_item">Гинеколог</a>
                            <a href="#" class="mobile_item">Дерматолог</a>
                            <a href="#" class="mobile_item">Невролог</a>
                            <a href="#" class="mobile_item">Педиатр</a>
                            <a href="#" class="mobile_item">Стоматолог</a>
                            <a href="#" class="mobile_item">Все Врачи</a>
                        </div>
                    </div>

                    <div class="mobile_items_list">
                        <p>Клиники</p>
                        <div class="mobile_items">
                            <a href="#" class="mobile_item">Клиника</a>
                            <a href="#" class="mobile_item">Стоматология</a>
                            <a href="#" class="mobile_item">Больница</a>
                            <a href="#" class="mobile_item">Поликлиника</a>
                            <a href="#" class="mobile_item">Роддом</a>
                            <a href="#" class="mobile_item">Все Клиники</a>
                        </div>
                    </div>

                    <div class="mobile_items_list">
                        <p>Услуги</p>
                        <div class="mobile_items">
                            <a href="#" class="mobile_item">ЭКО</a>
                            <a href="#" class="mobile_item">Ринопластика</a>
                            <a href="#" class="mobile_item">Прививки</a>
                            <a href="#" class="mobile_item">Имплантация зубов</a>
                            <a href="#" class="mobile_item">Брекеты</a>
                            <a href="#" class="mobile_item">Все Услуги</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- leaders -->
        <section class="leaders">
            <div class="container">

                <div class="leaders_top">
                    <div class="leaders_title">
                        Лучшие врачи
                    </div>
                    <div class="leaders_changer">
                        <div class="leader-prev swiper_btn">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="leader-next swiper_btn">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper leaders">
                    <div class="swiper-wrapper">

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-01.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. John Doe</a>
                                        <div class="card_star">
                                            (100)
                                            <span>
                                                4.4
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Dentist
                                    </div>
                                    <div class="location">
                                        <span>Tashkent</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-02.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. A. Aliyev</a>
                                        <div class="card_star">
                                            (185)
                                            <span>
                                                4.8
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Dentist
                                    </div>
                                    <div class="location">
                                        <span>Tashkent</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-03.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. Kamolova</a>
                                        <div class="card_star">
                                            (76)
                                            <span>
                                                4.1
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Cardiolog
                                    </div>
                                    <div class="location">
                                        <span>Samarqand</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-04.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. Aliyeva</a>
                                        <div class="card_star">
                                            (100)
                                            <span>
                                                5
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Dentist
                                    </div>
                                    <div class="location">
                                        <span>Termiz</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-05.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. Azamat Aliyev</a>
                                        <div class="card_star">
                                            (100)
                                            <span>
                                                4.4
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Dentist
                                    </div>
                                    <div class="location">
                                        <span>Tashkent</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="swiper-slide">
                            <div class="leader_card">
                                <div class="card_img">
                                    <img src="issets/img/doctor-03.jpg" alt="doctor">
                                </div>
                                <div class="card_content">
                                    <div class="card_title">
                                        <a href="#">Dr. Azamat Aliyev</a>
                                        <div class="card_star">
                                            (100)
                                            <span>
                                                4.4
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="professions">
                                        Dentist
                                    </div>
                                    <div class="location">
                                        <span>Tashkent</span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                </div>
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
                                <a href="/"><img src="issets/img/logo-d24.png" alt=""></a>
                                <div class="footer_logo_desc">
                                    Lorem ipsum, dolor sit amet <br>consectetur adipisicing elit alert. <br> Doloribus
                                    eaque dicta,
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
                    <form id="phone_form" method="POST">
                        @csrf
                        <input type="tel" class="form-control intl-tel-input" id="phone" name="phone"
                            placeholder="901234567" required>
                        <button type="submit" id="phone_number">Submit</button>
                    </form>
                </div>
                <div class="confirm_code">
                    <p>Please enter confirm code</p>
                    <form action="/">
                        <input type="number" class="form-control" name="phone_sms" placeholder="12345">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function() {
            jQuery(".phone_form").submit(function(event) {
                event.preventDefault();
                var form_data = $('input[name="_token"]').val();
                var form_phone = $('input[name="phone"]').val();
                jQuery.ajax({
                    type: "POST",
                    url: "/login",
                    data: {
                        '_token': form_data,
                        'phone': form_phone
                    }, // Buni o'zgartiring
                    headers: {
                        "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $("input[name='phone']").val('');
                        // Qolgan kodni qo'shing, agar kerak bo'lsa
                        jQuery('#second_form').show();
                        // Birinchi formani yashirish
                        jQuery('.phone_form').hide();
                        // Ikkinchi formaga fokuslanish
                        jQuery('#phone_sms').focus();
                    },
                    error: function(xhr, status, error) {
                        // Qolgan kodni qo'shing, agar kerak bo'lsa
                    }
                });
            });
        });
    </script>
    <script src="issets/libs/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
    </script>
    <script src="issets/js/intlTelInput.js"></script>
    <script src="issets/js/swipper.js"></script>
    <script src="issets/js/main.js"></script>
</body>
</html>
