<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use App\Models\SubCategory;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\CountryRepositoryInterface;
use App\Repositories\ImageRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\SubCategoryRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilterController extends Controller
{
    protected $SubCategoryRepository;
    protected $CategoryRepository;
    protected $PostRepository;
    protected $CountryRepository;
    protected $CityRepository;
    protected $ImageRepository;
    protected $UserRepository;

    public function __construct(SubCategoryRepositoryInterface $SubCategoryRepository, CategoryRepositoryInterface $CategoryRepository, PostRepositoryInterface $PostRepository, CountryRepositoryInterface $CountryRepository, CityRepositoryInterface $CityRepository, ImageRepositoryInterface $ImageRepository, UserRepositoryInterface $UserRepository)
    {
        $this->SubCategoryRepository = $SubCategoryRepository;
        $this->CategoryRepository = $CategoryRepository;
        $this->PostRepository = $PostRepository;
        $this->CountryRepository = $CountryRepository;
        $this->CityRepository = $CityRepository;
        $this->ImageRepository = $ImageRepository;
        $this->UserRepository = $UserRepository;
    }

    public function index()
    {

        $user = Auth::user();
        $posts = $this->PostRepository->get();
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


        return view('discover', compact('user', 'posts', 'images', 'countries', 'cities', 'categories', 'subcategories'));
    }

    public function search(Request $request)
    {
        $value = $request->title;
        $posts = $this->PostRepository->filterLike('title', $value);
        $user = Auth::user();
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


        return view('discover', compact('user', 'posts', 'images', 'countries', 'cities', 'categories', 'subcategories'));
    }

    public function filter(Request $request)
    {
        $country = $request->country_id;
        $city = $request->city_id;
        $category = $request->category_id;
        $subcategory = $request->subcategory_id;
        $condition = $request->condition;

        if (isset($country) && isset($category) && isset($condition)) {

            $posts =   $this->PostRepository->filterAll($city, $subcategory, $condition);

        } else if (!isset($country) && isset($category) && isset($condition)) {

            $posts = $this->PostRepository->filterDuo('subcategory_id', $subcategory, 'condition', $condition);
      
        } else if (isset($country) && isset($category) && !isset($condition)) {
          
            $posts = $this->PostRepository->filterDuo('subcategory_id', $subcategory, 'city_id', $city);
       
        } else if (isset($country) && !isset($category) && isset($condition)) {
        
            $posts = $this->PostRepository->filterDuo('city_id', $city, 'condition', $condition);
      
        } else if (isset($country) && !isset($category) && !isset($condition)) {
        
            $posts = $this->PostRepository->filterSolo('city_id', $city);
     
        } else if (!isset($country) && isset($category) && !isset($condition)) {
          
           $posts = $this->PostRepository->filterSolo('subcategory_id', $subcategory);
       
        } else if (!isset($country) && !isset($category) && isset($condition)) {
       
            $posts = $this->PostRepository->filterSolo('condition', $condition);
       
        } else {
       
            $posts = $this->PostRepository->get();
       
        }

        $user = Auth::user();
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

        return view('discover', compact('user', 'images', 'countries', 'cities', 'categories', 'subcategories', 'posts'));
    }
}
