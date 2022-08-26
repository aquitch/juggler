<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Device;

class AddDevicesForm extends Component
{
    use WithPagination;

    public $search;
    public $devices;
    public $selected;
    public $order;
    public $method;
    public $action;

    public function mount()
    {
        if (isset($this->order)) {
            $this->selected = $this->order->devices;
        } else {
            $this->selected = new Collection();
        }
    }
    
    public function addDevice(Device $device)
    {        
        $this->selected->push($device);
        $this->dispatchBrowserEvent('contentChanged');
    }

    public function removeDevice(Device $device)
    {
        $this->selected = $this->selected->reject(function ($value, $key) use ($device) {
            return $value == $device;
        });
        
        $this->dispatchBrowserEvent('contentChanged');
    }
    
    public function render()
    {
        $this->devices = Device::where('partnumber', 'like', '%'.$this->search.'%')->whereNotIn('partnumber', $this->selected->pluck('partnumber'))->get();

        $this->dispatchBrowserEvent('contentChanged');

        return view('livewire.add-devices-form');
    }
}
