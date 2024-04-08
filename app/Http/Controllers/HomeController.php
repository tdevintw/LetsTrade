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
        $images = $post->images;
        $originalDate = Carbon::parse($post->created_at);

        $timeDifference = $originalDate->diffInSeconds();

        if ($timeDifference < 86400) {
            $date =  $originalDate->diffForHumans();
        } else {
            $date =  $originalDate;
        }
        return view('post', compact('post', 'user', 'images', 'date'));
    }


}
