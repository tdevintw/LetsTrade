<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginView()
    {
        
        return view('Auth.login');
    }
    public function registerView()
    {
        
        return view('Auth.register');
    }

    public function login(LoginRequest $request){
        $formRequest = $request->validated();
        if(Auth::attempt($formRequest)){
            $request->session()->regenerate();
            return  redirect()->route('home');
        }
        return back()->with('rejected','Email or Password is inccorect');
    }
    public function register(RegisterRequest $request){
        $formRequest = $request->validated();
        $formRequest['password']= Hash::make($formRequest['password']);

        $user = User::create($formRequest);
        auth()->login($user);

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
      auth()->logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
    }

    public function forgetPassword(){
        return view('Auth.forgetPassword');

    }
    
}
