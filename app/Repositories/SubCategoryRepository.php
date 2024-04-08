<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryRepository implements SubCategoryRepositoryInterface
{

  public function get()
  {
    return  SubCategory::get();
  }

  public function destroy(object $subcategory)
  {
    return $subcategory->delete();
  }

  public function create(array $data)
  {
    return SubCategory::create($data);
  }

  public function update(object $subcategory, array $data)
  {
    return $subcategory->update($data);
  }

  public function getSubcategories($category)
  {
    return SubCategory::where('category_id', $category)->pluck('name', 'id');
  }

  public function count(){
    return SubCategory::count();
  }

  public function pagination($number){
    return SubCategory::paginate($number);
}


}
