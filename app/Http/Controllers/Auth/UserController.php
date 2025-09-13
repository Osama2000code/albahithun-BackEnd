<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
class UserController extends Controller
{
    public function index(){
        return "index- Auth User ";
    }
    public function register(Request $request){
        $validate= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::creeat([
            
        ]);
    }
}
