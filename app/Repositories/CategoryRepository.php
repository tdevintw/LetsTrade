<?php
namespace App\Repositories;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface {
  
    public function get(){
        return Category::get();
    }

    public function create(array $data){
        return Category::create($data);
    }
    public function update(array $data,object $category){
        return $category->update($data);
    }

    public function destroy(object $category)
    {
        return $category->delete();
    }

    public function count(){
        return Category::count();
    }

    public function pagination($number){
        return Category::paginate($number);
    }

}