<?php 
namespace App\Repositories;

interface SubCategoryRepositoryInterface {

    public function get();

    public function destroy(object $subcategory);

    public function create(array $data);

    public function update(object $subcategory,array $data);

    public function getSubcategories($category);

    public function count();

    public function pagination($number);

}
