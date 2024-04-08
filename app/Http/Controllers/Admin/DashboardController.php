<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\SubCategory;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\SubCategoryRepositoryInterface;
use App\Repositories\ImageRepositoryInterface;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected $PostRepository;
    protected $UserRepository;
    protected $CategoryRepository;
    protected $SubCategoryRepository;
    protected $ImageRepository;


    public function __construct(PostRepositoryInterface $PostRepository,UserRepositoryInterface $UserRepository,CategoryRepositoryInterface $CategoryRepository,SubCategoryRepositoryInterface $SubCategoryRepository,ImageRepositoryInterface $ImageRepository)
    {
        $this->PostRepository = $PostRepository;
        $this->UserRepository = $UserRepository;
        $this->CategoryRepository = $CategoryRepository;
        $this->SubCategoryRepository = $SubCategoryRepository;
        $this->ImageRepository = $ImageRepository;
    }

    public function index()
    {
        $user =  Auth::user();
        $users = $this->UserRepository->count();
        $posts = $this->PostRepository->count();
        $banned_users = $this->UserRepository->calculate('access','banned');
        $categories = $this->CategoryRepository->count();
        $subcategories =  $this->SubCategoryRepository->count();    
        if($posts !=0){
        $rate = $this->ImageRepository->count();
        $rate = $rate/$posts;
        $rate = number_format($rate, 1);
        $published = $this->PostRepository->calculate('access','authorized');
        $published = ($published/$posts)*100 ;    
        $published = number_format($published, 1) ."%";    
        }else{
            $rate = "No Data";
            $published = "No Data";
        }
        if($users != 0){ 
            $postperuser = $posts / $users;
            $postperuser = number_format($postperuser, 1);
        }else{
            $postperuser = "No Data";
        }
        
        return view('Admin.dashboard', compact('user', 'users','categories','subcategories','published','banned_users','posts','rate','postperuser'));
    }

    public function posts()
    {
        $user = Auth::user();
        $posts = $this->PostRepository->paginationDash('10');

        $createdAt = [];
        $updatedAt = [];

        foreach ($posts as $post) :

            $originalDate = Carbon::parse($post->created_at);

            $timeDifference = $originalDate->diffInSeconds();

            $date =  $post->created_at->diffForHumans();          

            $createdAt[$post->id] = $date;


            $originalDate = Carbon::parse($post->updated_at);

            $timeDifference = $originalDate->diffInSeconds();

            $date =  $post->updated_at->diffForHumans();          

            $updatedAt[$post->id] = $date;

        endforeach;

        return view('Admin.posts.index', compact('posts', 'user', 'createdAt', 'updatedAt'));
    }

    public function access(Post $post)
    {
        if ($this->PostRepository->find($post,'access') === 'authorized') {
            $this->PostRepository->put($post,'access','unauthorized');
        } else {
            $this->PostRepository->put($post,'access','authorized');
        }
        return redirect()->route('dashboard.posts');
    }
}
