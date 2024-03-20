<?php
namespace App\Repositories;
use App\Models\User;

class UserRepository implements UserRepositoryInterface {

    public function create(array $data)
    {
      return  User::create($data);
    }
    public function get(){
      return User::get();
    }

    public function destory(object $user){
      return $user->delete();
    }

    public function update(object $user ,$column, $value){
       $user->$column = $value;
       $user->save();
    }
}