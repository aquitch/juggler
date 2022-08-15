@extends('layouts.layout')

@section('title', 'Devices :: Show')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>Просмотр заказа</h3>
            </div>
        </div>
        <div class="card-body">
            <input type="text" class="form-control gold" name="software" placeholder="1">
            <button onclick="append()">Append</button>
            {{ $order->name }}
        </div>
    </div>
</div>
@endsection