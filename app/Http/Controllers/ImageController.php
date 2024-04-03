<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(int $postId)
    {
        $post = Post::findOrFail($postId);
        $postImages = Image::where('post_id',$postId)->get();
        return view('post-image.index', compact('post','postImages'));
    }


    public function store(Request $request, int $postId)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        $post = Post::findOrFail($postId);

        $imageData = [];
        if($files = $request->file('images')){

            foreach($files as $key => $file){

                $extension = $file->getClientOriginalExtension();
                $filename = $key.'-'.time(). '.' .$extension;

                $path = "uploads/posts/";

                $file->move($path, $filename);

                $imageData[] = [
                    'post_id' => $post->id,
                    'image' => $path.$filename,
                ];
            }
        }

        Image::insert($imageData);

        return redirect()->back()->with('status', 'Uploaded Successfully');

    }

    public function destroy(int $postImageId)
    {
        $postImage = postImage::findOrFail($postImageId);
        if(File::exists($postImage->image)){
            File::delete($postImage->image);
        }
        $postImage->delete();

        return redirect()->back()->with('status', 'Image Deleted');
    }
}
