<?php
namespace App\Repositories;
use App\Models\City;

class CityRepository implements CityRepositoryInterface {
  
    public function get(){
        return City::get();
    }

    public function cities($country){
        return City::where('country_id', $country)->pluck('name', 'id');
    }
}