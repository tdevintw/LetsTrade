<?php 
namespace App\Repositories;

interface RequestRepositoryInterface {

    public function get();

    public function create($post_id , $message);

}
