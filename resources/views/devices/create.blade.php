@extends('layouts.layout')

@section('title', 'Devices :: Create')

@section('content')
@include('devices.form', ['method' => 'POST', 'action' => route('devices.store')])
@endsection