@extends('layouts.admin')

@section('content')
    <div class="widget has-shadow">
        <div class="widget-header bordered no-actions d-flex align-items-center">
            <h4>Редактирование записи</h4>
        </div>
        <div class="widget-body">
            @include('dashboard.works._form', ['result' => $result, 'action' => route('works.update', ['id' => $result->id])])
        </div>
    </div>
@endsection
