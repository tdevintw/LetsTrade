<?php 
namespace App\Repositories;

interface UserRepositoryInterface{

    public function create(array $data);

    public function get();

    public function destory(object $user);
}
