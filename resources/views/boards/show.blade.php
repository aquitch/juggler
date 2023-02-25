@extends('layouts.layout')

@section('title', 'Devices :: Show')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>Просмотр тестового решения</h3>
            </div>
        </div>
        <div class="card-body">
            {{ $board->name }}
            {{ $board->schEng->name }}
            {{ $board->pcbEng->name}}
            {{ $board->type->name }}
            @foreach ($board->devices as $device)
                {{ $device->partnumber }}
            @endforeach
        </div>
    </div>
</div>
@endsection