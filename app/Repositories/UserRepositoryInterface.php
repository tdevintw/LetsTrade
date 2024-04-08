<?php 
namespace App\Repositories;

interface UserRepositoryInterface{

    public function create(array $data);

    public function get();

    public function destory(object $user);

    public function count();

    public function calculate($column,$value);

    public function createObject($id);

    public function find(object $object , $attribute);

    public function put(object $object , $column , $value);

    public function pagination($number);

    public function findUser($column , $value);

}
