<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.userhome');
    }

    public function userDetails()
    {
        $userdetails = User::find(Auth::id());
        return response()->json([
            'userdetails' => $userdetails,
        ], 200);
    }

    public function editProfileInfo($id)
    {
        $profileInfo = User::find($id);
        return response()->json([
            'profileInfo' => $profileInfo,
        ], 200);
    }

    public function updateProfile(Request $request, $id)
    {

        $user = User::find($id);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|required|email|unique:users,email,' . $user->id,
            'contact' => 'required|numeric|unique:users,contact,' . $user->id,
            'dob' => 'required',
            'about' => 'required',
        ]);

        


        if ($request->image != $user->image) {
            $strpos = strpos($request->image, ';');
            $sub = substr($request->image, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $img = Image::make($request->image)->resize(300, 400);
            $upload_path = public_path() . "/uploadimage/";
            $img->save($upload_path . $name);
           
            // $image = $upload_path . $post->photo;
            // if (file_exists($image)) {
            //     @unlink($image);
            // }

            $user->image = $name;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->dob = $request->dob;
        $user->contact = $request->contact;
        $user->save();

    }

}
