<div class="container-sm" style="background-color:#1a1a1d">
    <div class="card" style="background-color:#32323b;color:white">
        <div class="card-body">
            <div class="self-center">
                <input type="email" id="floatingInputInvalid" placeholder="name@example.com">   
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-6 row">
                    <form method="POST" action="{{ route('devices.store') }}">
                        @csrf       
                        <label for="partnumber" class="form-label">Part Number</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="partnumber" placeholder="AD9424">
                        @error('partnumber')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="manufacturer" placeholder="Analog Devices">
                        @error('manufacturer')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="sch_lib" class="form-label">SCH Library</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="sch_lib" placeholder="MyLib.schlib">
                        @error('sch_lib')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="sch_ref" class="form-label">Symbol Name</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="sch_ref" placeholder="MyLib.schlib">
                        @error('sch_ref')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="pcb_lib" class="form-label">PCB Library</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="pcb_lib" placeholder="MyLib.pcblib">
                        @error('pcb_lib')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="pcb_ref" class="form-label">Footprint Name</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="pcb_ref" placeholder="MyLib.pcblib">
                        @error('pcb_ref')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="datasheet" class="form-label">Datasheet</label>
                        <input type="text" class="form-control" style="background:#1a1a1d; color:#feae4e" name="datasheet" placeholder="path to datasheet">
                        @error('datasheet')
                            <div class=form-error>
                                {{ $message }}
                            </div>
                        @enderror

                        <button class="mt-2 col-12 btn btn-outline-dark" style="background-color:#feae4e" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>