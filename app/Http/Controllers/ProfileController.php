<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $UserRepository;
    
    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index(){

        $user = Auth::user();
        $cities = City::get();
        $countries = Country::get();
       return  view('profile.index',compact('user','cities','countries'));
    }

    public function update(UpdateUserRequest $request,User $profile){

      
        $this->UserRepository->update($profile,'name',$request->name);
        $this->UserRepository->update($profile,'city_id',$request->city_id);
        $this->UserRepository->update($profile,'adress',$request->adress);
        $this->UserRepository->update($profile,'about',$request->about);
        $this->UserRepository->update($profile,'postal_code',$request->postal_code);
        if($request->password){
            $this->UserRepository->update($profile,'password',$request->password);
        }

        if($request->image){
            $this->UserRepository->update($profile,'image',$request->image);
        }

        if($request->bg_image){
            $this->UserRepository->update($profile,'bg_image',$request->bg_image);
        }

        return redirect()->route('profile.index');
    }

    
}
