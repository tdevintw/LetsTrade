<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\PostRequest;
use App\Models\User;
use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\RequestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRequestController extends Controller
{
    protected $RequestRepository;
    protected $PostRepository;

    public function __construct(RequestRepositoryInterface $RequestRepository, PostRepositoryInterface $PostRepository )
    {
        $this->RequestRepository = $RequestRepository;
        $this->PostRepository = $PostRepository;

    }

    public function index()
    {
        $requests = $this->RequestRepository->get();
        $user = Auth::user();
        $createdAt = [];
        foreach($requests as $request):
            $createdAt[$request->id] =  $request->updated_at->diffForHumans();      
        endforeach;

        return view('Admin.posts.requests', compact('requests','user','createdAt'));
    }

    public function create(Request $request)
    {

        $post_id = $request->post_id;
        $message = $request->message;
        $post = Post::find($post_id);
        $this->RequestRepository->create($post_id, $message);

        return redirect()->route('posts.edit', $post);
    }

    public function accept(PostRequest $request){
        $post = Post::find($request->post->id);
        $this->RequestRepository->update($request , 'status' , 'accepted');
        $this->PostRepository->put($post , 'access' , 'authorized');
        return redirect()->route('requests.index');
    }

    public function reject(PostRequest $request){
        $this->RequestRepository->update($request , 'status' , 'rejected');
        return redirect()->route('requests.index');
    }
}
