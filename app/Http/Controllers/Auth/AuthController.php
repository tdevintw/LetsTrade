<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{
    protected $UserRepository;

    public function __construct(UserRepositoryInterface $UserRepository){
        $this->UserRepository = $UserRepository;
    }


    public function loginView()
    {
        
        return view('auth.login');
    }
    public function registerView()
    {
        
        return view('auth.register');
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

        // $user = User::create($formRequest);
        $user = $this->UserRepository->create($formRequest);
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
        return view('auth.forgetPassword');

    }
    
}
