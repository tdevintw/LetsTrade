<?php 
namespace App\Repositories;

interface CityRepositoryInterface{

    public function get();

    public function cities($country);
}
