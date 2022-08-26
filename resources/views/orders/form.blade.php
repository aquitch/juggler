@if (isset($order))
    @livewire('add-devices-form', ['order' => $order, 'method' => $method, 'action' => $action])  
@else
    @livewire('add-devices-form', ['method' => $method, 'action' => $action])
@endif