<?php
namespace App\Repositories;
use App\Models\Image;

class ImageRepository implements ImageRepositoryInterface {
  
    public function get(){
        return Image::get();
    }

    public function create($post_id , $fileName)
    {
        return  Image::create([
            'post_id' => $post_id,
            'image' => $fileName
        ]);

    }

    public function update(array $data,object $image){
        return $image->update($data);
    }

    public function destroy(object $image)
    {
        return $image->delete();
    }

    public function count(){
        return Image::count();
    }

    
}