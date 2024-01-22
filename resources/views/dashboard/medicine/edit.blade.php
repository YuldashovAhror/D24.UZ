@extends('layouts.dashboard.main')
@section('styles')
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="user">
                    <div class="card-header d-flex justify-content-between">
                        <p>Организация</p>
                        {{-- @if ($data->id)
                            <h5>{{ $data->number . '-' . $data->name }}</h5>
                        @endif --}}
                        <a href="/dashboard/medicine" class="btn btn-primary"><i class="uil-left-arrow-from-left"></i>
                            Назад</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.medicine.update', $medicine->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="row">
                                <div class="col-12 mb-2 text-center">
                                    <label class="form-label" for="exampleFormControlInput1">Файл</label>
                                    <div>
                                        <img src="{{ $medicine->photo }}" alt=""
                                            style="width: 150px; height: 150px;">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="medicinecategory_id">Тип лекарства</label>
                                        <select class="form-select" name="medicinecategory_id" id="medicinecategory_id" required>
                                            <option value="">*** Тип лекарства  ***</option>
                                            @foreach ($medicinecategories as $rgn)
                                                <option value="{{ $rgn->id }}">
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="representative_id">Представитель</label>
                                        <select class="form-select" name="representative_id" id="representative_id">
                                            <option value="">*** Представитель ***</option>
                                            @foreach ($representatives as $rgn)
                                                <option value="{{ $rgn->id }}">
                                                    {{ $rgn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="photo">Фото</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                        <img src="" style="width: 2rem;" alt="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="pinfl">Имя</label>
                                        <input type="text" class="form-control" id="name" value=""
                                            name="name" placeholder="name" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="country">Страна</label>
                                        <input type="text" class="form-control" id="country" value=""
                                            name="country" placeholder="cтрана" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="manufacturer">Производитель</label>
                                        <input type="text" class="form-control" id="manufacturer" value=""
                                            name="manufacturer" placeholder="производитель" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="code">Код</label>
                                        <input type="text" class="form-control" id="code" value=""
                                            name="code" placeholder="kод">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="number">Ценить</label>
                                        <input type="text" class="form-control" id="number" value=""
                                            name="number" placeholder="номер">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Описание</label>
                                        <textarea class="ckeditor" name="description" id="exampleFormControlTextarea4" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Положение дел</label>
                                        <select class="form-select" name="status" id="status" required>
                                            <option value="active" @if ($medicine->status == 'active') selected @endif>
                                                Aктивный</option>
                                            <option value="deactive" @if ($medicine->status == 'deactive') selected @endif>
                                                Деактивирован</option>
                                            <option value="blocked" @if ($medicine->status == 'blocked') selected @endif>
                                                Заблокировано</option>
                                            <option value="deleted" @if ($medicine->status == 'deleted') selected @endif>
                                                Удалено</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="medicinetypes" class="col-form-label">Тип лекарства</label>
                                        <select id="mySelect" name="medicinetypes[]" class="form-control" multiple
                                            data-placeholder="*** Выбрать ***">
                                            @foreach ($medicinetypes as $pt)
                                                <option value="{{ $pt->id }}"@if ($medicine->id) @selected(in_array($pt->id, $medicinetype)) @endif>{{ $pt->name }}</option>
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
@endsection
