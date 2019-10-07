@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Настройки сайта</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <a href="#" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Добавить</span>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"aria-controls="dataTable"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info"
                                       style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Параметр</th>
                                        <th>Ключ</th>
                                        <th>Значение</th>
                                        <th>Дата создания</th>
                                        <th>Статус</th>
                                        <th>Дествия</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Параметр</th>
                                        <th>Ключ</th>
                                        <th>Значение</th>
                                        <th>Дата создания</th>
                                        <th>Статус</th>
                                        <th>Дествия</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @if(count($result))
                                        @foreach($result as $obj)
                                            <tr>
                                                <td><span class="text-secondary">{{ $obj->id }}</span></td>
                                                <td>{{ $obj->name }}</td>
                                                <td>{{ $obj->key }}</td>
                                                <td>{{ $obj->value }}</td>
                                                <td>{{ date('F j, Y, g:i a', strtotime($obj->created_at)) }}</td>
                                                <td>
                                                    <a href="#"
                                                       class="btn {{ $obj->status == 0 ? 'btn-warning' : 'btn-success'}} btn-icon-split">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                                        <span
                                                            class="text">{{ $obj->status == 0 ? 'Не опубликовано' : 'Опубликовано'}}</span>
                                                    </a>
                                                </td>
                                                <td class="td-actions">
                                                    <a href="{{ route('blog.delete', ['id' => $obj->id]) }}"
                                                       class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
