@extends('layouts.layout')

@section('title', 'Orders :: Create')

@section('content')
@include('orders.form', ['name' => 'orders', 'method' => 'POST', 'action' => route('orders.store')])
@endsection