<?php

namespace App\Http\Livewire;

use App\Models\District;
use Livewire\Component;

class Region extends Component
{
    public $region_id = '';
    public $districts;
    public function render()
    {
        try {
            dd('asd');
            $this->districts = District::where('region_id', $this->region_id)->get();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return view('livewire.region', [
            'districts' => $this->districts,
        ]);
    }
}
