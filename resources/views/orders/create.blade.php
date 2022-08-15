@extends('layouts.layout')

@section('title', 'Boards :: Create')

@section('content')
@include('boards.form', ['method' => 'POST', 'action' => route('boards.store')])
@endsection