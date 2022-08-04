@extends('layouts.layout')

@section('title', 'Devices :: Edit')

@section('content')
@include('devices.form', ['method' => 'PUT', 'action' => route('devices.update', $device)])
@endsection