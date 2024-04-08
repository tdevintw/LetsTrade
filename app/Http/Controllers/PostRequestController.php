<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use App\Repositories\RequestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRequestController extends Controller
{
    protected $RequestRepository;


    public function __construct(RequestRepositoryInterface $RequestRepository)
    {
        $this->RequestRepository = $RequestRepository;

    }

    public function index()
    {


    }

    public function create(Request $request){

        $post_id = $request->post_id;
        $message = $request->message;
        $post = Post::find($post_id);
        $this->RequestRepository->create($post_id , $message);

        return redirect()->route('posts.edit', $post);

    }

 
}
