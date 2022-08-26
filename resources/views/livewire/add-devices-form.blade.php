<div class="d-flex justify-content-center">
    <form action="{{ $action }}" method="POST">
        @csrf
        @method($method)
            <div class="card col-11" id="main">
                <div class="card-header grad">
                    <h3>{{ isset($order) ? $order->name . ' Редактор' : 'Добавить заказ' }}</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="col-12 row">     
                            <label for="name" class="form-label">Название заказа</label>
                            <input type="text" class="form-control gold" name="name" placeholder="ДНПП" value="{{isset($order) ? $order->name : ''}}">
                            @error('partnumber')
                                <div class=form-error>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row g-2">
                                <div class="d-flex justify-content-center">
                                    <h5>Все:</h5>
                                </div>
                                <input wire:model="search" type="text" placeholder="Начните вводить название микросхемы...">
                                @foreach ($devices as $device)
                                    <button type="button" class="btn btn-primary" wire:click="addDevice({{ $device }})">{{ $device->partnumber }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <div class="row g-2">
                                <div class="d-flex justify-content-center">
                                    <h5>Выбраны:</h5>
                                </div>
                                @foreach ($selected as $device)
                                    <button type="button" class="btn btn-danger" wire:click="removeDevice({{ $device }})">{{ $device->partnumber }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @foreach ($selected as $device)
                        <input type="hidden" name="device[]" value="{{ $device->id }}">
                    @endforeach
                    <button class="btn btn-primary" type="submit">Записать</button>
                </div>   
            </div>

    </form>
</div>
