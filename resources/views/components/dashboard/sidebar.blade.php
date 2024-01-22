<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
        <a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Меню</h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Организация данные</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.organization.index')}}">Организация</a></li>
                            <li><a href="{{route('dashboard.region.index')}}">Регион</a></li>
                            <li><a href="{{route('dashboard.district.index')}}">Округ</a></li>
                            <li><a href="{{route('dashboard.organizationtype.index')}}">Тип организации</a></li>
                            <li><a href="{{route('dashboard.type.index')}}">Тип учреждения</a></li>
                            <li><a href="{{route('dashboard.service.index')}}">Услуга</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Человек данные</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.person.index')}}">Человек</a></li>
                            <li><a href="{{route('dashboard.profession.index')}}">Профессия</a></li>
                            <li><a href="{{route('dashboard.professionlavel.index')}}">Уровень профессии</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Лекарство данные</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.medicine.index')}}">Лекарство</a></li>
                            <li><a href="{{route('dashboard.medicinecategory.index')}}">Категория лекарства</a></li>
                            <li><a href="{{route('dashboard.representative.index')}}">Представитель</a></li>
                            <li><a href="{{route('dashboard.medicinetype.index')}}">Тип лекарства</a></li>
                        </ul>
                    </li>

                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.medicinecategory.index')}}"><i data-feather="file-text"></i>
                            <span>Категория медицины</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.representative.index')}}"><i data-feather="file-text"></i>
                            <span>Представитель</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.medicinetype.index')}}"><i data-feather="file-text"></i>
                            <span>Тип лекарства</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>