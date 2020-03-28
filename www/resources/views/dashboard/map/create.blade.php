@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Карты полетов / Создание страны</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Создание страны</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('dashboard.map._form', ['action' => route('map.__store')])
                </div>
            </div>
        </div>
    </div>
@endsection
