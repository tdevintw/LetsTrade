<?php 
namespace App\Repositories;

interface RequestRepositoryInterface {

    public function get();

    public function create($post_id , $message);

    public function update(object $request , $column , $value);

    public function delete(object $request);

}
