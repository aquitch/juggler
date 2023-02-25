@extends('layouts.layout')

@section('title', 'Devices :: Index')

@section('content')
<div class="container-fluid justify-content-center">
    <div class="card" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>Тестовые решения</h3>
                <a href="{{ route('boards.create') }}" class="btn btn-primary">Добавить</a>
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
                            <th scope="col">SCH Engineer</th>
                            <th scope="col">PCB Engineer</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($boards as $board)
                            <tr>
                                <th scope="row">{{ $board->id }}</th>
                                <td>
                                    {{ $board->code }}
                                </td>
                                <td>
                                    {{ $board->schEng->name }}
                                </td>
                                <td>
                                    {{ $board->pcbEng->name }}
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form method="POST" action="{{ route('boards.destroy', $board) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                            <a href="{{ route('boards.edit', $board->id) }}" class="btn btn-warning">Редактировать</a>
                                            <a href="{{ route('boards.show', $board->id) }}" class="btn btn-success">Просмотр</a>
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