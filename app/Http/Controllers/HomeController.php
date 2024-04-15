<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\CountryRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\SubCategoryRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    protected $PostRepository;
    protected $CountryRepository;
    protected $CityRepository;
    protected $CategoryRepository;
    protected $SubCategoryRepository;

    public function __construct(PostRepositoryInterface $PostRepository, CityRepositoryInterface $CityRepository , CountryRepositoryInterface $CountryRepository , SubCategoryRepositoryInterface $SubCategoryRepository , CategoryRepositoryInterface $CategoryRepository )
    {
        $this->PostRepository = $PostRepository;
        $this->CountryRepository = $CountryRepository;
        $this->CityRepository = $CityRepository;
        $this->CategoryRepository = $CategoryRepository;
        $this->SubCategoryRepository = $SubCategoryRepository;
    }

    public function index()
    {
        

        $user = Auth::user();

        $posts = $this->PostRepository->pagination('20');
        $images = [];
        if ($posts) {
            foreach ($posts as $post) :
                $images[$post->title] = $this->PostRepository->firstImage($post);
            endforeach;
        }
        $countries = $this->CountryRepository->get();
        $cities = $this->CityRepository->get();
        $categories = $this->CategoryRepository->get();
        $subcategories = $this->SubCategoryRepository->get();


        return view('home', compact('user', 'posts', 'images','countries','cities','categories','subcategories'));
    }

    public function show(Post $post)
    {
        
        $user = Auth::user();
        if($user){
            if($user->access ==='unauthorized' && $user->role != 'admin'){
                return view('errors.404');
            }elseif($post->status === 'hidden' && $user->role != 'admin' && $user->id != $post->user->id){
                return view('errors.404');
            }
        }else{
            if($post->access ==='unauthorized' || $post->status ==='hidden'){
                return view('errors.404');
            }
        }
        $images = $post->images;       
        $date =  $post->created_at->diffForHumans();          
        return view('post', compact('post', 'user', 'images', 'date'));
    }


}
