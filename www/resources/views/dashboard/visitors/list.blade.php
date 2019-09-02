@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Статистика / Посетители</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Список посетителей</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Местоположение</th>
                            <th>IP</th>
                            <th>URL</th>
                            <th>Переход</th>
                            <th>USER AGENT</th>
                            <th>Дата посещения</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Местоположение</th>
                            <th>IP</th>
                            <th>URL</th>
                            <th>Переход</th>
                            <th>USER AGENT</th>
                            <th>Дата посещения</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @if(count($result))
                            @foreach($result as $obj)
                                <tr>
                                    <td><span class="text-secondary">{{ $obj->id }}</span></td>
                                    <td>{{ $obj->city . ', ' . $obj->country }}</td>
                                    <td>{{ $obj->ip }}</td>
                                    <td>{{ $obj->url }}</td>
                                    <td>{{ $obj->referer }}</td>
                                    <td>{{ $obj->user_agent }}</td>
                                    <td>{{ date('F j, Y, g:i a', strtotime($obj->created_at)) }}</td>
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
