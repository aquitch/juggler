@extends('layouts.app')

@section('title', 'Devices :: Index')

@section('content')
<div class="container-sm" style="background-color:#32323b;color:white">
    <div class="d-flex justify-content-center">
        <div class="mb-3 row">
            <label for="partnumber" class="form-label">Part Number</label>
            <input type="text" class="form-control" id="partnumber" placeholder="AD9424">
        </div>
    </div>
</div>
@endsection