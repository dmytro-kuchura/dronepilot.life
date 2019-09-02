@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Обратная связь / Подписчики</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Список подписчиов</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Подписался</th>
                            <th>Статус</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Подписался</th>
                            <th>Статус</th>
                            <th>Действия</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @if(count($result))
                            @foreach($result as $obj)
                                <tr>
                                    <td><span class="text-secondary">{{ $obj->id }}</span></td>
                                    <td>{{ $obj->email }}</td>
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
                                        <a href="{{ route('subscribers.change-status', ['id' => $obj->id]) }}"
                                           class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('subscribers.delete', ['id' => $obj->id]) }}"
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
@endsection
