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
                        <p>Человек Редактировать</p>
                        <a href="/dashboard/person" class="btn btn-primary"><i class="uil-left-arrow-from-left"></i>
                            Назад</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.person.update', $person->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="row">
                                <div class="col-12 mb-3 text-center">
                                    <label class="form-label" for="exampleFormControlInput1">Файл</label>
                                    <div>
                                        <img src="{{ $person->photo }}" alt=""
                                            style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="user_id">Пользователь</label>
                                        <select class="form-select" name="user_id" id="user_id" required>
                                            <option value="">*** Пользователь ***</option>
                                            @foreach ($users as $rgn)
                                                <option value="{{ $rgn->id }}" @if($person->user_id == $rgn->id) selected @endif>
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="profession_id">Профессия</label>
                                        <select class="form-select" name="profession_id" id="profession_id" required>
                                            <option value="">*** Профессия танланг ***</option>
                                            @foreach ($professions as $rgn)
                                                <option value="{{ $rgn->id }}" @if($person->profession_id == $rgn->id) selected @endif>
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- @dd($person->name) --}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="pinfl">Имя</label>
                                        <input type="text" class="form-control" id="name" value="{{$person->name}}"
                                            name="name" placeholder="name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="first_name ">Оригинальное имя</label>
                                        <input type="text" class="form-control" id="first_name" value="{{$person->first_name}}"
                                            name="first_name" placeholder="Имя" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="last_name ">Фамилия</label>
                                        <input type="text" class="form-control" id="last_name" value="{{$person->last_name}}"
                                            name="last_name" placeholder="фамилия" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="photo">Фото</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                        {{-- <img src="" style="width: 2rem;" alt="" required> --}}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="bio ">Био</label>
                                        <input type="text" class="form-control" id="bio  " value="{{$person->bio}}"
                                            name="bio" placeholder="Био" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="birthdate ">Дата рождения</label>
                                        <input type="date" class="form-control" id="birthdate  " value="{{$person->birthdate}}"
                                            name="birthdate" placeholder="Дата рождения">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="staff ">Персонал</label>
                                        <input type="text" class="form-control" id="staff" value="{{$person->staff}}"
                                            name="staff" placeholder="Персонал">
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Телефон</label>
                                        <input type="text" class="form-control" id="phone" value="{{$person->phone}}"
                                            name="phone" placeholder="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="sex">Пол</label>
                                        <select class="form-select" name="sex" id="sex" required>
                                            <option value="male" @if($person->sex == 'male') selected  @endif>Мужской</option>
                                            <option value="woman" @if($person->sex == 'woman') selected  @endif>Женский</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="raiting">Рейтинг</label> &nbsp;
                                        <select class="form-select" name="raiting" id="raiting" required>
                                            <option value="">*** Рейтинг тип ***</option>
                                            <option value="1" @if ($person->raiting == 1) selected @endif>1
                                            </option>
                                            <option value="2" @if ($person->raiting == 2) selected @endif>2
                                            </option>
                                            <option value="3" @if ($person->raiting == 3) selected @endif>3
                                            </option>
                                            <option value="4" @if ($person->raiting == 4) selected @endif>4
                                            </option>
                                            <option value="5" @if ($person->raiting == 5) selected @endif>5
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Положение дел</label>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="active" @if ($person->status == 'active') selected @endif>
                                                Aктивный</option>
                                            <option value="deactive" @if ($person->status == 'deactive') selected @endif>
                                                Деактивирован</option>
                                            <option value="blocked" @if ($person->status == 'blocked') selected @endif>
                                                Заблокировано</option>
                                            <option value="deleted" @if ($person->status == 'deleted') selected @endif>
                                                Удалено</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="professionlevels" class="col-form-label">Уровни профессии</label>
                                        <select id="mySelect" name="professionlevels[]" class="form-control" multiple
                                            data-placeholder="*** Выбрать ***">
                                            @foreach ($professionlevels as $pt)
                                                <option
                                                    value="{{ $pt->id }}"@if ($professionlevel) @selected(in_array($pt->id, $professionlevel)) @endif>
                                                    {{ $pt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="organizations" class="col-form-label">Уровни профессии</label>
                                        <select id="myorganization" name="organizations[]" class="form-control" multiple
                                            data-placeholder="*** Выбрать ***">
                                            @foreach ($organizations as $pt)
                                                <option
                                                    value="{{ $pt->id }}"@if ($organizationtype) @selected(in_array($pt->id, $organizationtype)) @endif>
                                                    {{ $pt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Опыт</label>
                                        <textarea class="ckeditor" name="experience" id="exampleFormControlTextarea4" rows="3"></textarea>
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
    <script>
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
    </script>
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
