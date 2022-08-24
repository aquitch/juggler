<div class="d-flex justify-content-center">
    <div class="card col-4" id="main">
        <div class="card-header grad">
            <div class="d-flex justify-content-between">
                <h3>{{ isset($order) ? $order->name . ' Редактор' : 'Добавить заказ' }}</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-12 row">
                <form method="POST" action={{ $action }} enctype="multipart/form-data">
                    @method($method)
                    @csrf
                    @livewire('add-input-button', ['name' => $name])
                    
                    <button class="mt-2 col-12 btn btn-outline-dark" style="background-color:#feae4e" type="submit">{{ isset($board) ? 'Update' : 'Save' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>