<div class="d-flex justify-content-center" style="background-color:#1a1a1d">
    <div class="card col-4" style="background-color:#32323b;color:white">
        <div class="card-body">
            <div class="self-center">
                <input type="email" id="floatingInputInvalid" placeholder="name@example.com">   
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-12 row">
                    <form method="POST" action={{ $action }} enctype="multipart/form-data">
                        @method($method)
                        @csrf       
                        <label for="partnumber" class="form-label">Part Number</label>
                        <input type="text" class="form-control gold" name="partnumber" placeholder="AD9424" value="{{isset($device) ? $device->partnumber : ''}}">
                        @error('partnumber')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control gold" name="manufacturer" placeholder="Analog Devices" value="{{isset($device) ? $device->manufacturer : ''}}">
                        @error('manufacturer')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="sch_lib" class="form-label">SCH Library</label>
                        <select class="form-select gold" name="sch_lib">
                            <option disabled {{ isset($device) ? '' : 'selected' }} style="display:none">Make a choice</value>
                            @foreach ($libraries['sch'] as $key => $value)
                                <option value="{{ $value }}" {{ (isset($device) && $device->sch_lib == $value) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        @error('sch_lib')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="sch_ref" class="form-label">Symbol Name</label>
                        <input type="text" class="form-control gold" name="sch_ref" placeholder="MyLib.schlib" value="{{isset($device) ? $device->sch_ref : ''}}">
                        @error('sch_ref')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="pcb_lib" class="form-label">PCB Library</label>
                        <select class="form-select gold" name="pcb_lib">
                            <option disabled {{ isset($device) ? '' : 'selected' }} style="display:none">Make a choice</value>
                            @foreach ($libraries['pcb'] as $key => $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        @error('pcb_lib')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="pcb_ref" class="form-label">Footprint Name</label>
                        <input type="text" class="form-control gold" name="pcb_ref" placeholder="SOIC-8N" value="{{isset($device) ? $device->pcb_ref : ''}}">
                        @error('pcb_ref')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="datasheet" class="form-label">Datasheet</label>
                        <input type="file" class="form-control gold" name="datasheet" placeholder="path to datasheet">
                        @error('datasheet')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <button class="mt-2 col-12 btn btn-outline-dark" style="background-color:#feae4e" type="submit">{{ isset($device) ? 'Update' : 'Save' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>