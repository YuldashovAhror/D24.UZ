@extends('layouts.dashboard.main')
@section('styles')
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success') != null)
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error') != null)
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="user">
                    <div class="card-header d-flex justify-content-between">
                        <p>Организация</p>
                        {{-- @if ($data->id)
                            <h5>{{ $data->number . '-' . $data->name }}</h5>
                        @endif --}}
                        <a href="/dashboard/organization" class="btn btn-primary"><i class="uil-left-arrow-from-left"></i>
                            Назад</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.organization.update', $organization->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            {{-- @dd($districts); --}}
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Файл</label>
                                    <div>
                                        <img src="{{ $organization->photo }}" alt=""
                                            style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Галерея</label>
                                    <div>
                                        <img src="{{ $organization->gallery }}" alt=""
                                            style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="regionSelect">Область</label>
                                        <select class="form-select" name="region_id" id="regionSelect" required>
                                            <option value="">*** Вилоят танланг ***</option>
                                            @foreach (\DB::table('regions')->get() as $rgn)
                                                <option value="{{ $rgn->id }}"
                                                    @if ($organization->region_id == $rgn->id) selected @endif>
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="districtSelect">Округ</label>
                                        <select class="form-select" name="district_id" id="districtSelect">
                                            <option value="">*** Туман танланг ***</option>
                                            @foreach (\DB::table('districts')->get() as $rgn)
                                                <option value="{{ $rgn->id }}"
                                                    @if ($organization->district_id == $rgn->id) selected @endif>
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="address">Адрес</label>
                                        <input type="text" class="form-control" id="address"
                                            value="{{ $organization->address }}" name="address" placeholder="Манзили">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="long_lat">Длинный/широтный</label>
                                        <input type="text" class="form-control" id="long_lat"
                                            value="{{ $organization->long_lat }}" name="long_lat"
                                            placeholder="41.000,69.000">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="photo">Фото</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                        <img src="" style="width: 2rem;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="gallery">Галерея</label>
                                        <input type="file" class="form-control" id="gallery" name="gallery">
                                        <img src="" style="width: 2rem;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="pinfl">Имя</label>
                                        <input type="text" class="form-control" id="name"
                                            value="{{ $organization->name }}" name="name" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="organizationtypes" class="col-form-label">Тип организации</label>
                                        <select id="myorganization" name="organizationtypes[]" class="form-control"
                                            multiple data-placeholder="*** Выбрать ***">
                                            <option value="">*** Выберите тип ***</option>
                                            @foreach ($organizationtypes as $org)
                                                <option value="{{ $org->id }}"
                                                    @if ($organization->id) @selected(in_array($org->id, $organizationtype)) @endif>
                                                    {{ $org->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="type">Тип учреждения</label>
                                        <select class="form-select" name="type_id" id="type_id" required>
                                            <option value="">*** Выберите тип ***</option>
                                            @foreach ($types as $org)
                                                <option value="{{ $org->id }}"
                                                    @if ($organization->type_id == $org->id) selected @endif>{{ $org->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Название Сео</label>
                                        <input type="text" class="form-control" id="title"
                                            value="{{ $organization->title }}" name="title" placeholder="title">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="raiting">Рейтинг</label> &nbsp;
                                        <select class="form-select" name="raiting" id="raiting" required>
                                            <option value="">*** Рейтинг тип ***</option>
                                            <option value="1" @if ($organization->raiting == 1) selected @endif>1
                                            </option>
                                            <option value="2" @if ($organization->raiting == 2) selected @endif>2
                                            </option>
                                            <option value="3" @if ($organization->raiting == 3) selected @endif>3
                                            </option>
                                            <option value="4" @if ($organization->raiting == 4) selected @endif>4
                                            </option>
                                            <option value="5" @if ($organization->raiting == 5) selected @endif>5
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Положение дел</label>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="active" @if ($organization->status == 'active') selected @endif>
                                                Aктивный</option>
                                            <option value="deactive" @if ($organization->status == 'deactive') selected @endif>
                                                Деактивирован</option>
                                            <option value="blocked" @if ($organization->status == 'blocked') selected @endif>
                                                Заблокировано</option>
                                            <option value="deleted" @if ($organization->status == 'deleted') selected @endif>
                                                Удалено</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Описание</label>
                                        <textarea class="ckeditor" name="description" id="exampleFormControlTextarea4" rows="3">{{ $organization->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Телефон</label>
                                        <input type="text" class="form-control" id="phone"
                                            value="{{ $organization->phone }}" name="phone" placeholder="phone">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="services" class="col-form-label">Услуга</label>
                                        <select id="mySelect" name="services[]" class="form-control" multiple
                                            data-placeholder="*** Выбрать ***">
                                            @foreach ($services as $key => $pt)
                                                <option value="{{ $pt->id }}"
                                                    @if ($organization->id) @selected(in_array($pt->id, $servicetype)) @endif>
                                                    {{ $pt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        jQuery(document).ready(function() {
            // Telefon raqamini olib tashlash va kerakli region va districtlarni olish
            jQuery("#getDistricts").click(function() {
                var region = jQuery("#regionSelect").val();

                // AJAX so'rovni yuborish
                jQuery.ajax({
                    type: "GET",
                    url: "/dashboard/getdistrict",
                    data: {
                        'region_id': region
                    },
                    success: function(response) {
                        // Qaytgan ma'lumotlarni districtSelect ga joylash
                        jQuery("#districtSelect").html(response);

                        // Qolgan kodni qo'shing, agar kerak bo'lsa
                        jQuery('#second_form').show();

                        // Birinchi formani yashirish
                        // jQuery('#loginForm').hide();

                        // Ikkinchi formaga fokuslanish
                        // jQuery('#phone_sms').focus();
                    },
                    error: function(xhr, status, error) {
                        // Qolgan kodni qo'shing, agar kerak bo'lsa
                        console.error("Server bilan muloqotda xatolik yuz berdi:", error);
                    }
                });
            });
        });
    </script> --}}
    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#mySelect').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myorganization').select2();
        });
    </script>
@endsection
