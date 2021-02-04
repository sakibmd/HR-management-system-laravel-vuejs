<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('user.userhome');
    }

    public function userDetails(){
        $userdetails = User::find(Auth::id());
        return response()->json([
            'userdetails' => $userdetails,
        ], 200);
    }

    public function editProfileInfo($id){
        $profileInfo = User::find($id);
        return response()->json([
            'profileInfo' => $profileInfo,
        ], 200);
    }

    public function updateProfile(Request $request, $id){
        $user = User::find($id);
        
    }

    
}
