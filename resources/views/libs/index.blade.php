@extends('layouts.layout')

@section('title', 'Devices :: Index')

@section('content')
<div class="container-sm" style="background-color:#1a1a1d">
    <div class="card" style="background-color:#32323b;color:white">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div class="col-6 row">
                    <form method="POST" action="{{route('libs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="library">Choose library</label>
                        <input class="mt-2 form-control" type="file" name="library">
                        <button class="mt-2 btn btn-primary" type="submit">Load</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection