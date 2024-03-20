<?php 
namespace App\Repositories;

interface CategoryRepositoryInterface{

    public function get();

    public function create(array $data);
    public function update(array $data,object $category);
    public function destroy(object $category);
    
}
