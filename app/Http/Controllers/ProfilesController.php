<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('admin.profile.edit', compact('user'));
    }

    public function update(User $user){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            'about' => 'required'
        ]);

        if(request()->hasFile('avatar')){
            $avatar = request()->avatar;
            $avatarNewName = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatarNewName);
            $user->profile->avatar = 'uploads/avatars/' . $avatarNewName;
        }

        $user->name = request()->name;
        $user->email = request()->email;
        if(request()->has('password')){
            $user->password = bcrypt(request()->password);
        }
        $user->save();

        $user->profile->facebook = request()->facebook;
        $user->profile->youtube = request()->youtube;
        $user->profile->about = request()->about;
        $user->profile->save();

        Session::flash('success', 'Your profile has updated successfully.');

        return redirect()->route('profile');
    }
}