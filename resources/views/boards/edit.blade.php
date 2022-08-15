@extends('layouts.layout')

@section('title', 'Boards :: Edit')

@section('content')
@include('boards.form', ['method' => 'PUT', 'action' => route('boards.update', $board)])
@endsection