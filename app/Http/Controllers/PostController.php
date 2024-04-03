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
use App\Repositories\SubCategoryRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    protected $SubCategoryRepository;
    protected $CategoryRepository;

    public function __construct(SubCategoryRepositoryInterface $SubCategoryRepository, CategoryRepositoryInterface $CategoryRepository)
    {
        $this->SubCategoryRepository = $SubCategoryRepository;
        $this->CategoryRepository = $CategoryRepository;
    }

    public function index()
    {

        $user = Auth::user();
        $posts = $user->posts;

        $images = [];
        if ($posts) {
            foreach ($posts as $post) :
                $images[$post->title] = $post->images->first()->image;
            endforeach;
        }

        return view('profile.post.index', compact('user', 'posts', 'images'));
    }

    public function create()
    {
        $user = Auth::user();
        $subcategories = $this->SubCategoryRepository->get();
        $categories = $this->CategoryRepository->get();
        $cities = City::get();
        $countries = Country::get();
        return view('profile.post.create', compact('user', 'subcategories', 'categories','countries','cities'));
    }

    public function store(StorePostRequest $request)
    {

        $user = Auth::user();
        $data = $request->validated();

        $post = Post::create([
            'title' => $data['title'],
            'location' => $data['city_id'],
            'description' => $data['description'],
            'note' => $data['note'],
            'user_id' => $user['id'],
            'condition' => $data['condition'],
            'subcategory_id' => $data['subcategory_id'],
        ]);
        $post->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $fileName = 'images/posts/' . $imagefile->getClientOriginalName() . time() . '.' . $imagefile->extension();
                $imagefile->storeAs('public', $fileName);

                Image::create([
                    'post_id' => $post->id,
                    'image' => $fileName
                ]);
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

        $categories = Category::get();
        $subcategories = SubCategory::get();

        return view('profile.post.edit', compact('post', 'categories', 'subcategories','user'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {

        $data = $request->validated();

        $post->update([
            'title' => $data['title'],
            'location' => $data['location'],
            'description' => $data['description'],
            'note' => $data['note'],
            'condition' => $data['condition'],
            'subcategory_id' => $data['subcategory_id'],
        ]);
        $post->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $fileName = 'images/posts/' . $imagefile->getClientOriginalName() . time() . '.' . $imagefile->extension();
                $imagefile->storeAs('public', $fileName);

                Image::create([
                    'post_id' => $post->id,
                    'image' => $fileName
                ]);
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
        $post->delete();
        if ($user->role === 'user') {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('dashboard.posts');
        }
    }


    public function deleteImage(Image $image)
    {
        $id = $image->post_id;
        $post = Post::find($id);
        $image->delete();
        return redirect()->route('posts.edit', $post);
    }


}
