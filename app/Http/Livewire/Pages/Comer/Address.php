<?php

namespace App\Http\Livewire\Pages\Comer;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class Address extends Component
{
    public $province_id, $city_id, $district_id, $villages_id;

    public $getcity = [];
    public $distric = [];
    public $villages = [];
    public function render()
    {
        $province = Province::all();
        if($this->province_id){
            $this->getcity = Regency::where('province_id', $this->province_id)->get();
        }
        if($this->city_id){
            $this->districts = District::where('regency_id', $this->city_id)->get();
        }
        if($this->district_id){
            $this->villages = Village::where('district_id', $this->district_id)->get();
        }
        return view('livewire.pages.comer.address', ['province' => $province]);
    }
}
