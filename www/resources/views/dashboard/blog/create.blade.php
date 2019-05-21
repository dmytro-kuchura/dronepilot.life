@extends('layouts.admin')

@section('content')
    <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Создание записи записи</h4>
        </div>
        <div class="widget-body">
            @include('dashboard.blog._form', ['action' => route('blog.store')])
        </div>
    </div>
@endsection
