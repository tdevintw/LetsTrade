<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

  public function create(array $data)
  {
    return  User::create($data);
  }
  public function get()
  {
    return User::get();
  }

  public function destory(object $user)
  {
    return $user->delete();
  }

  public function update(object $user, $column, $value)
  {
    $user->$column = $value;
    $user->save();
  }

  public function count()
  {
    return User::count();
  }

  public function calculate($column, $value)
  {
    return User::where($column, $value)->count();
  }

  public function createObject($id)
  {
    return User::find($id);
  }

  public function find(object $object, $attribute)
  {
    return $object->$attribute;
  }

  public function put(object $object, $column, $value)
  {
    $object->$column = $value;
    $object->save();
  }

  public function pagination($number)
  {
    return User::paginate($number);
  }

  public function findUser($column,$value){
    return User::where($column,$value)->first();
  }
}
