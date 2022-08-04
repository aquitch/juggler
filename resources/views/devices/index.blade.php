@extends('layouts.layout')

@section('title', 'Devices :: Index')

@section('content')
<div class="container-sm" style="background-color:#1a1a1d">
    <div class="card" style="background-color:#32323b;color:white">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Part Number</th>
                            <th scope="col">Manufacturer</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($devices as $device)
                            <tr>
                                <th scope="row">{{ $device->id }}</th>
                                <td>
                                    {{ $device->partnumber }}
                                </td>
                                <td>
                                    {{ $device->manufacturer }}
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form method="POST" action="{{ route('devices.destroy', $device) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                            <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-warning">Редактировать</a>
                                            <a href="{{ route('devices.show', $device->id) }}" class="btn btn-success">Просмотр</a>
                                            <a href="{{ $device->datasheet }}" class="btn btn-primary">Datasheet</a>
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