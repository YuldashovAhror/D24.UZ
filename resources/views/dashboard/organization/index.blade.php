@extends('layouts.dashboard.main')
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="user">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            Регистрациялар
                        </div>
                        <div class="d-flex">
                            <a href="{{ route('dashboard.organization.create') }}" class="btn btn-primary mr-3"><i
                                    class="fa fa-plus-square"></i>
                                Новая организация
                            </a>
                            @can('organization-delete')
                                <a class="btn btn-danger" onclick="deleteSelected()"><i class="fa fa-trash-alt"></i>Удалить</a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="organizations-table">
                            <thead>
                                <tr>
                                    <th>N :</th>
                                    <th>Тип</th>
                                    <th>Названия</th>
                                    <th>Гос/Част.</th>
                                    <th>Рейтинг</th>
                                    <th>Телефон</th>
                                    <th>Статус</th>
                                    <th class="text-center">Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($k = 1)
                                @foreach ($organizations as $organization)
                                    <tr>
                                        <th scope="row">{{ $k }}</th>
                                        <td>{{ $organization->types->name }}</td>
                                        {{-- <td>{{ $organization->organizationtypes->name }}</td> --}}
                                        <td>{{ $organization->name }}</td>
                                        <td>{{ $organization->long_lat }}</td>
                                        <td>{{ $organization->raiting }}</td>
                                        <td>{{ $organization->phone }}</td>
                                        <td>{{ $organization->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard.organization.edit', $organization) }}">
                                                <button class="btn btn-xs btn-success mb-1">Изменить
                                                    <i class="bx bx-pencil"></i>
                                                </button>
                                            </a>
                                            <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter{{ $organization->id }}"><i
                                                    class="bx bx-trash"></i>Удалить</button>
                                            <div class="modal fade" id="exampleModalCenter{{ $organization->id }}"
                                                tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Удалить?</h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form
                                                                action="{{ route('dashboard.organization.destroy', $organization) }}"
                                                                method="post">
                                                                @csrf
                                                                {{ method_field('delete') }}
                                                                <button class="btn btn-primary" type="submit"
                                                                    data-bs-original-title="" title="">Да</button>
                                                            </form>
                                                            <button class="btn btn-secondary" type="button"
                                                                data-bs-dismiss="modal" data-bs-original-title=""
                                                                title="">Нет</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @php($k++)
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
