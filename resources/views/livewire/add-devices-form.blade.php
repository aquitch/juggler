<div class="d-flex justify-content-center">
    <div class="card col-11" id="main">
        <div class="card-header grad">
            Some text...
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row g-2">
                        <input wire:model="search" type="text" placeholder="Начните вводить название микросхемы...">
                        @foreach ($devices as $device)
                            <button class="btn btn-primary" wire:click="addDevice({{ $device }})">{{ $device->partnumber }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="row g-2">
                        @foreach ($selected as $device)
                            <button class="btn btn-danger" wire:click="removeDevice({{ $device }})">{{ $device->partnumber }}</button>
                        @endforeach
                    </div>
                </div>
              </div>
        </div>
        <div class="card-footer">
            @dump($selected)
        </div>
    </div>
</div>
