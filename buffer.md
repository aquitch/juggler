 @if (isset($board->devices))
                            @foreach ($board->devices as $device)
                                <select class="form-select" style="background:#1a1a1d; color:#feae4e" name="device">
                                    <option disabled {{ isset($board) ? '' : 'selected' }} style="display:none">Make a choice</value>
                                    @foreach ($devices as $option)
                                        <option value="{{ $option->id }}" {{ $option->id == $device->id ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('device')
                                    <div class=form-error>
                                        {{ $message }}
                                    </div>
                            @enderror 
                            @endforeach
                        @else
                            <select class="form-select" style="background:#1a1a1d; color:#feae4e" name="device">
                                <option disabled selected style="display:none">Make a choice</value>
                                @foreach ($devices as $device)
                                    <option value="{{ $device->id }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            @error('device')
                                <div class=form-error>
                                    {{ $message }}
                                </div>
                            @enderror 
                        @endif