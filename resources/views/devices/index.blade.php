@extends('layouts.app')

@section('title', 'Devices :: Index')

@section('content')
    Welcome to Devices!
    @foreach ($devices as $device)
        {{ $device->datasheet }}
    @endforeach
@endsection