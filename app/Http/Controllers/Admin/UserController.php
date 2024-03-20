<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $UserRepository;
    
    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function index()
    {
        $users = $this->UserRepository->get();
        $user = Auth::user();
        return view('Admin.users.index',compact('users','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('Admin.users.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        $this->UserRepository->create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('Admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {

        $this->UserRepository->update($user,'name',$request->name);
        $this->UserRepository->update($user,'email',$request->email);
        if($request->password){
            $this->UserRepository->update($user,'password',$request->password);
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->UserRepository->destory($user);
        return redirect()->route('users.index');
    }

    public function access(Request $request){
        $user =  User::find($request->id);
        if($user->access == 'authorized'){
            $user->access = 'banned';
            $user->save();
        }else{
            $user->access = 'authorized';
            $user->save();
        }
        
        return redirect()->route('users.index');
    }

    public function role(Request $request){
        $user =  User::find($request->id);
        if($user->role == 'user'){
            $user->role = 'admin';
            $user->save();
        }else{
            $user->role = 'user';
            $user->save();
        }
        
        return redirect()->route('users.index');
    }
}

