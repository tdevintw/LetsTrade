<?php 

namespace App\Repositories;

interface PostRepositoryInterface{

    public function get();
    public function create(array $data,$user_id);
    public function update(array $data,object $post);
    public function destroy(object $post);
    public function count();
    public function calculate($column,$value);
    public function put(object $post , $column , $value);
    public function find(object $object , $attribute);
    public function pagination($number);
    public function firstImage(object $post);
    public function findObject($id);
    public function filterLike($column,$value);
    public function filterAll($city , $subcategory , $condition);
    public function filterDuo($column1 , $column2 , $value1 , $value2);
    public function filterSolo($column , $value);

}