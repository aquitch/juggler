@extends('layouts.layout')

@section('title', 'Devices :: Index')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>Заказы</h3>
                <a href="{{ route('orders.create') }}" class="btn btn-primary">Добавить</a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>
                                    {{ $order->name }}
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form method="POST" action="{{ route('orders.destroy', $order) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Редактировать</a>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-success">Просмотр</a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection