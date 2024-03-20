<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $user =  Auth::user();
        $users = User::count();
        return view('Admin.dashboard',compact('user','users'));
    }
}
 