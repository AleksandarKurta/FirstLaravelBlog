<?php

namespace App\Http\Controllers;

use Session;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('admin', ['except' => ['index']]);
    }

    public function index(){
        $setting = Setting::first();
        return view('admin.settings.settings', compact('setting'));
    }

    public function update(Setting $setting){
        $attributes = request()->validate([
            'site_name' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required|email',
            'address' => 'required',
            'footer_information' => 'required'
        ]);

        $setting->update($attributes);

        Session::flash('success', 'Settings information updated successfully.');

        return back();
    }
}
