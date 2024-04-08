<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{

    public function get()
    {
        return Post::get();
    }

    public function create(array $data, $user_id)
    {
        return $post =  Post::create([
            'title' => $data['title'],
            'city_id' => $data['city_id'],
            'description' => $data['description'],
            'note' => $data['note'],
            'user_id' => $user_id,
            'condition' => $data['condition'],
            'subcategory_id' => $data['subcategory_id'],
        ]);
        $post->save();
    }

    public function update(array $data, object $post)
    {
        return $post->update([
            'title' => $data['title'],
            'city_id' => $data['city_id'],
            'description' => $data['description'],
            'note' => $data['note'],
            'condition' => $data['condition'],
            'subcategory_id' => $data['subcategory_id'],
        ]);
        $post->save();
    }

    public function destroy(object $post)
    {
        return $post->delete();
    }

    public function count()
    {
        return Post::count();
    }

    public function calculate($column, $value)
    {
        return Post::where($column, $value)->count();
    }

    public function put(object $object, $column, $value)
    {
        $object->$column = $value;
        $object->save();
    }

    public function find(object $object, $attribute)
    {
        return $object->$attribute;
    }

    public function pagination($number)
    {
        return Post::paginate($number);
    }

    public function firstImage(object $post)
    {
        return  $post->images->first()->image;
    }

    public function findObject($id)
    {
        return Post::find($id);
    }

    public function filterLike($column, $value)
    {
        return Post::where($column, 'Like', '%' . $value . '%')->get();
    }

    public function filterAll($city, $subcategory, $condition)
    {
        return Post::where('city_id', $city)
            ->where('subcategory_id', $subcategory)
            ->where('condition', $condition)
            ->get();
    }
    public function filterDuo($column1, $column2, $value1, $value2)
    {
        return Post::where($column1, $value1)
            ->where($column2, $value2)
            ->get();
    }
    public function filterSolo($column, $value)
    {
        return Post::where($column, $value)
            ->get();
    }
}
