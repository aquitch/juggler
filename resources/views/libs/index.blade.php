@extends('layouts.layout')

@section('title', 'Devices :: Index')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card col-6" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>Менеджер библиотек</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <form method="POST" action="{{route('libs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="library">Загрузить библиотеку</label>
                        <input class="mt-2 form-control" type="file" name="library">
                        @error('library')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="mt-2 col-12 btn btn-primary" type="submit">Загрузить</button>
                    </form>
                    <h5>Загруженные библиотеки</h5>
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($libraries as $type => $values)
                                @foreach ($values as $library)
                                    <tr>
                                        <th scope="row">{{ $type }}</th>
                                        <td>
                                            {{ $library }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <form method="POST" action="{{ route('libs.destroy', $library) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="path" value="{{ $type }}">
                                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection