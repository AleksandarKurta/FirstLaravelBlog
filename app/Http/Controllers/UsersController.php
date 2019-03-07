<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $attributes['password'] = bcrypt('password');

        $userId = $user->create($attributes);

        Profile::create([
            'user_id' => $userId->id,
            'avatar' => 'uploads/avatars/avatar.png'
        ]);

        Session::flash('success', 'User created successfully.');

        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin($id){
        $user = User::find($id);

        $user->admin = 1;

        $user->save();

        Session::flash('success', 'User permission changed to admin.');

        return back();
    }

    public function notadmin($id){
        $user = User::find($id);

        $user->admin = 0;

        $user->save();

        Session::flash('success', 'User permission removed.');

        return back();
    }
}
