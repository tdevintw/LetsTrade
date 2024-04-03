<?php
namespace App\Repositories;
use App\Models\Country;

class CountryRepository implements CountryRepositoryInterface {
  
    public function get(){
        return Country::get();
    }


}