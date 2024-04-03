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
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user =  Auth::user();
        $users = User::count();
        $posts = Post::count();
        $banned_users = User::where('access','banned')->count();
        $categories = Category::count();
        $subcategories = SubCategory::count();    
        if($posts !=0){
        $rate = Image::count();
        $rate = $rate/$posts;
        $published = Post::where('access','authorized')->count();
        $published = ($published/$posts)*100 ."%";
        }else{
            $rate = "No Data";
            $published = "No Data";
        }
        if($users != 0){ 
            $postperuser = $posts / $users;
        }else{
            $postperuser = "No Data";
        }
        
        return view('Admin.dashboard', compact('user', 'users','categories','subcategories','published','banned_users','posts','rate','postperuser'));
    }

    public function posts()
    {
        $user = Auth::user();
        $posts = Post::get();

        $createdAt = [];
        $updatedAt = [];

        foreach ($posts as $post) :

            $originalDate = Carbon::parse($post->created_at);

            $timeDifference = $originalDate->diffInSeconds();

            if ($timeDifference < 86400) {
                $date =  $originalDate->diffForHumans();
            } else {
                $date =  $originalDate;
            }

            $createdAt[$post->id] = $date;


            $originalDate = Carbon::parse($post->updated_at);

            $timeDifference = $originalDate->diffInSeconds();

            if ($timeDifference < 86400) {
                $date =  $originalDate->diffForHumans();
            } else {
                $date =  $originalDate;
            }

            $updatedAt[$post->id] = $date;

        endforeach;

        return view('Admin.posts.index', compact('posts', 'user', 'createdAt', 'updatedAt'));
    }

    public function access(Post $post)
    {
        if ($post->access === 'authorized') {
            $post->access = 'unauthorized';
        } else {
            $post->access = 'authorized';
        }
        $post->save();
        return redirect()->route('dashboard.posts');
    }
}
