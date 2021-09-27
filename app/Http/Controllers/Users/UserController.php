<?php

namespace App\Http\Controllers\Users;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function userlist(){
        $user=User::latest()->paginate(20);
        return response()->json(['userlist'=>$user]);
    }
}
