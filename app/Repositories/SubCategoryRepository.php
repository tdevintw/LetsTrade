<?php
namespace App\Repositories;
use App\Models\SubCategory;

class SubCategoryRepository implements SubCategoryRepositoryInterface {

    public function get()
    {
      return  SubCategory::get();
    }

    public function destroy(object $subcategory){
      return $subcategory->delete();
    }

    public function create(array $data){
      return SubCategory::create($data);
    }

    public function update(object $subcategory,array $data){
      return $subcategory->update($data);
    }
}