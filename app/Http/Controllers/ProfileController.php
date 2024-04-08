<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\User;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\CountryRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $UserRepository;
    protected $CountryRepository;
    protected $CityRepository;

    public function __construct(UserRepositoryInterface $UserRepository , CountryRepositoryInterface $CountryRepository , CityRepositoryInterface $CityRepository)
    {
        $this->UserRepository = $UserRepository;
        $this->CityRepository = $CityRepository;
        $this->CountryRepository = $CountryRepository;
    }

    public function index()
    {

        $user = Auth::user();
        $cities = $this->CityRepository->get();
        $countries = $this->CountryRepository->get();
        
        return  view('profile.index', compact('user', 'cities', 'countries'));
    }

    public function update(UpdateUserRequest $request, User $profile)
    {


        $this->UserRepository->update($profile, 'name', $request->name);
        $this->UserRepository->update($profile, 'city_id', $request->city_id);
        $this->UserRepository->update($profile, 'adress', $request->adress);
        $this->UserRepository->update($profile, 'about', $request->about);
        $this->UserRepository->update($profile, 'postal_code', $request->postal_code);
        if ($request->password) {
            $this->UserRepository->update($profile, 'password', $request->password);
        }

        if ($request->image) {

            $file = $request->file('image');
            $fileName = 'images/users/' .  time() . '.' . $request->image->extension();
            $file->move(public_path('storage/images/users'), $fileName);

            $this->UserRepository->update($profile, 'image', $fileName);
        }

        if ($request->bg_image) {

            $file = $request->file('bg_image');
            $fileName = 'images/users/' .  time() . '.' . $request->bg_image->extension();
            $file->move(public_path('storage/images/users'), $fileName);

            $this->UserRepository->update($profile, 'bg_image', $fileName);
        }

        return redirect()->route('profile.index');
    }

    public function getCities($country)
    {
        
        $cities = $this->CityRepository->cities($country);
        return response()->json($cities);
    }

    public function submit(Post $post){
        $user = Auth::user();
        if($post->user->id === $user->id && $post->access ==='unauthorized'){
            return view('profile.post.submit',compact('post'));
        }else{
            return view('errors.404');
        }
        
    }
}
