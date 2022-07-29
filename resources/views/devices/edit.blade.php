@extends('layouts.layout')

@section('title', 'Devices :: Edit')

@section('content')
@include('devices.form', $device)
@endsection