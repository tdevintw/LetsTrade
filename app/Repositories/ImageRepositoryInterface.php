<?php 
namespace App\Repositories;

interface ImageRepositoryInterface{

    public function get();

    public function create($post_id , $fileName);
    public function update(array $data,object $image);
    public function destroy(object $image);
    public function count();

    
}
