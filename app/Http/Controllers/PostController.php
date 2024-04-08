<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use App\Models\PostRequest;
use App\Models\Request as ModelsRequest;
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

class PostController extends Controller
{
    protected $SubCategoryRepository;
    protected $CategoryRepository;
    protected $PostRepository;
    protected $CountryRepository;
    protected $CityRepository;
    protected $ImageRepository;
    protected $UserRepository;

    public function __construct(SubCategoryRepositoryInterface $SubCategoryRepository, CategoryRepositoryInterface $CategoryRepository,PostRepositoryInterface $PostRepository, CountryRepositoryInterface $CountryRepository, CityRepositoryInterface $CityRepository,ImageRepositoryInterface $ImageRepository, UserRepositoryInterface $UserRepository)
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
        $posts = $user->posts;

        $images = [];
        if ($posts) {
            foreach ($posts as $post) :
                $images[$post->title] = $this->PostRepository->firstImage($post);
            endforeach;
        }

        return view('profile.post.index', compact('user', 'posts', 'images'));
    }

    public function create()
    {
        $user = Auth::user();
        $subcategories = $this->SubCategoryRepository->get();
        $categories = $this->CategoryRepository->get();
        $cities = $this->CityRepository->get();
        $countries = $this->CountryRepository->get();
        return view('profile.post.create', compact('user', 'subcategories', 'categories','countries','cities'));
    }

    public function store(StorePostRequest $request)
    {

        $user = Auth::user();
        $data = $request->validated();

       $post =  $this->PostRepository->create($data , $user->id);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $fileName = 'images/posts/' . $imagefile->getClientOriginalName() . time() . '.' . $imagefile->extension();
                $imagefile->storeAs('public', $fileName);

                $this->ImageRepository->create($post->id,$fileName);
            }
        }

        return redirect()->route('posts.index');
    }

    public function show()
    {
    }
    public function edit(Post $post)
    {

        $user = Auth::user();

        if ($post->user->id != $user->id) {
            return  view('errors.404');
        }

        $categories = $this->CategoryRepository->get();
        $subcategories = $this->SubCategoryRepository->get();
        $countries = $this->CountryRepository->get();
        $cities = $this->CityRepository->get();

        $requests = PostRequest::where('post_id',$post->id)->get();
        $sent = isset($requests[0]);
        return view('profile.post.edit', compact('post', 'categories', 'subcategories','user','countries','cities','sent'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {

        $data = $request->validated();
        $this->PostRepository->update($data,$post);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $fileName = 'images/posts/' . $imagefile->getClientOriginalName() . time() . '.' . $imagefile->extension();
                $imagefile->storeAs('public', $fileName);

                $this->ImageRepository->create($post->id,$fileName);
            }
        }

        return redirect()->route('post.show', $post->id);
    }

    public function getSubcategories($category)
    {

        $subcategories = $this->SubCategoryRepository->getSubcategories($category);
        return response()->json($subcategories);
    }

    public function destroy(Post $post)
    {
        $user = Auth::user();
        $this->PostRepository->destroy($post);
        if($this->UserRepository->find($user , 'role') === 'user') {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('dashboard.posts');
        }
    }


    public function deleteImage(Image $image)
    {
        $id = $image->post_id;
        $post = $this->PostRepository->findObject($id);
        $this->ImageRepository->destroy($image);
        return redirect()->route('posts.edit', $post);
    }

    public function status(Post $post){
        if ($post->status ==='published') {
            $this->PostRepository->put($post , 'status', 'hidden');
        } else {
            $this->PostRepository->put($post , 'status', 'published');
        }

        return redirect()->route('posts.edit', $post);
        
    }


}
