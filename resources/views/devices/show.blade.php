@extends('layouts.layout')

@section('title', 'Devices :: Show')

@section('content')
<div class="container-sm" style="background-color:#1a1a1d">
    <div class="card" style="background-color:#32323b;color:white">
        <div class="card-body">
            {{ $device->partnumber }}
            {{ $device->manufacturer }}
            {{ $device->sch_lib }}
            {{ $device->sch_ref }}
            {{ $device->pcb_lib }}
            {{ $device->pcb_ref }}
            {{ $device->datasheet }}
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="{{ $device->datasheet }}" type="application/pdf" width="100%" height="1200px">
            </div>
        </div>
    </div>
</div>
@endsection