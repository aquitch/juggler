<div class="d-flex justify-content-center">
    <div class="card col-4" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>{{ isset($order) ? $order->name . ' Редактор' : 'Добавить тестовое решение' }}</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-12 row">
                <form method="POST" action={{ $action }} enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    @if (isset($order))
                        @foreach ($order->devices as $device)
                            <label for="device" class="form-label">Device</label>
                            <select class="gold form-select" name="device[]">
                                @foreach ($devices as $device)
                                    <option value="{{ $device->id }}" {{ $onBoard->id == $device->id ? 'selected' : '' }}>{{ $device->partnumber }}</option>
                                @endforeach
                            </select>
                            @error('device')
                                <div class=form-error>
                                    {{ $message }}
                                </div>
                            @enderror
                        @endforeach
                    @else
                        <label for="device" class="form-label">Device</label>
                        <select class="form-select gold" name="device">
                            <option disabled selected style="display:none">Make a choice</value>
                            @foreach ($devices as $device)
                                <option value="{{ $device->id }}">{{ $device->partnumber }}</option>
                            @endforeach
                        </select>
                        @error('device')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror   
                    @endif       

                    <label for="type" class="form-label">Type</label>
                    <select class="form-select gold" name="board_type_id">
                        @if (! isset($board))
                            <option disabled {{ isset($board) ? '' : 'selected' }} style="display:none">Make a choice</value>
                        @endif
                        @foreach ($boardTypes as $type)
                            <option value="{{ $type->id }}" {{ (isset($board) && $board->type->id == $type->id) ? 'selected' : '' }}>{{ $type->type }}</option>
                        @endforeach
                    </select>
                    @error('device')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="sch_eng" class="form-label">SCH Engineer</label>
                    <select class="form-select gold" name="sch_eng">
                        @if (! isset($board))
                            <option disabled selected style="display:none">Make a choice</value>
                        @endif
                        @foreach ($engineers as $engineer)
                            <option value="{{ $engineer->id }}" {{ (isset($board) && $board->schEng->id == $engineer->id) ? 'selected' : '' }}>{{ $engineer->name }}</option>
                        @endforeach
                    </select>
                    @error('device')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="pcb_eng" class="form-label">PCB Engineer</label>
                    <select class="form-select gold brd" name="pcb_eng">
                        @if (! isset($board))
                            <option disabled selected style="display:none">Make a choice</value>
                        @endif
                        @foreach ($engineers as $engineer)
                            <option value="{{ $engineer->id }}" {{ (isset($board) && $board->pcbEng->id == $engineer->id) ? 'selected' : '' }}>{{ $engineer->name }}</option>
                        @endforeach
                    </select>
                    @error('device')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="hardware" class="form-label">PCB Version</label>
                    <input type="text" class="form-control gold" name="hardware" placeholder="1" value="{{isset($board) ? $board->hardware : ''}}">
                    @error('hardware')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="software" class="form-label">Software Version</label>
                    <input type="text" class="form-control gold" name="software" placeholder="1" value="{{isset($board) ? $board->software : ''}}">
                    @error('sofrtware')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror

                    <button class="mt-2 col-12 btn btn-outline-dark" style="background-color:#feae4e" type="submit">{{ isset($board) ? 'Update' : 'Save' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>