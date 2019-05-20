@extends('layouts.admin')

@section('content')
    <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Hover</h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Создано</th>
                        <th><span style="width:150px;">Статус</span></th>
                        <th>Просмотров</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($result))
                        @foreach($result as $obj)
                            <tr>
                                <td><span class="text-secondary">{{ $obj->id }}</span></td>
                                <td>{{ $obj->name }}</td>
                                <td>{{ date('F j, Y, g:i a', strtotime($obj->created_at)) }}</td>
                                <td><span style="width:150px;"><span
                                            class="badge-text badge-text-small {{ $obj->status == 0 ? 'danger' : 'success'}}">{{ $obj->status == 0 ? 'Не опубликовано' : 'Опубликовано'}}</span></span></td>
                                <td>{{ $obj->views }}</td>
                                <td class="td-actions">
                                    <a href="{{ route('blog.edit', ['id' => $obj->id]) }}"><i class="la la-edit edit"></i></a>
                                    <a href="{{ route('blog.delete', ['id' => $obj->id]) }}"><i class="la la-close delete"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
