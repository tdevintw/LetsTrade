<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\PostRequest;

class RequestRepository implements RequestRepositoryInterface
{

    public function get()
    {
        return PostRequest::where('status','pending')->get();
    }

    public function create($post_id , $message)
    {
        return $request =  PostRequest::create([
            'post_id' => $post_id,
            'message' => $message,
        ]);
        $request->save();
    }

    public function update(object $request , $column , $value){
        $request->$column = $value;
        $request->save();
    }

    public function delete(object $request){
      return   $request->delete();
    }

}
