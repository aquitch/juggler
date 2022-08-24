<div class="d-flex justify-content-center">
    <div class="col-12">
        @foreach ($inputs as $key => $value)
            <input class="mt-3 col-10" type="text" name="{{ $name . '[' . $key . ']' }}"/>
            <div class="btn-group">
                <button wire:click="deleteInput" class="btn btn-danger" type="button" {{ (count($inputs) == 1) ? 'disabled' : '' }}><i class="bi bi-dash-square"></i></button>
                <button wire:click="addInput" class="btn btn-success" type="button" {{ (count($inputs) - $key != 1) ? 'disabled' : '' }}><i class="bi bi-plus-square"></i></button>
            </div>
        @endforeach
    </div>
</div>