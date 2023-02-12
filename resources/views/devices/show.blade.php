@extends('layouts.layout')

@section('title', 'Devices :: Show')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" id="main">
        <div class="card-body">
            {{ $device->partnumber }}
            {{ $device->manufacturer }}
            {{ $device->sch_lib }}
            {{ $device->sch_ref }}
            {{ $device->pcb_lib }}
            {{ $device->pcb_ref }}
            {{ $device->datasheet }}
        </div>
    </div>
</div>
@endsection