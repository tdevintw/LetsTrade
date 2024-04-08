<?php

namespace App\Repositories;

use App\Models\Post;
use App\Models\PostRequest;

class RequestRepository implements RequestRepositoryInterface
{

    public function get()
    {
        return PostRequest::get();
    }

    public function create($post_id , $message)
    {
        return $request =  PostRequest::create([
            'post_id' => $post_id,
            'message' => $message,
        ]);
        $request->save();
    }



}
