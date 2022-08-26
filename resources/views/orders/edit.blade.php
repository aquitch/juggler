@extends('layouts.layout')

@section('title', 'Orders :: Edit')

@section('content')
@include('orders.form', ['method' => 'PUT', 'action' => route('orders.update', $order)])
@endsection