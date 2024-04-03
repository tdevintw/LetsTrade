<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::paginate(20);
        $images = [];
        if ($posts) {
            foreach ($posts as $post) :
                $images[$post->title] = $post->images->first()->image;
            endforeach;
        }

        return view('home', compact('user', 'posts', 'images'));
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
