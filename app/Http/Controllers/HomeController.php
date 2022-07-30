<?php

namespace App\Http\Controllers;

use App\Models\profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user()->token;
        $profile = profile::where("token",$user)->first();
        if($profile==null){
            return view('home',compact('profile'));
        }
        // if have profile then redirect to profile page
        return redirect()->route('profile.show',$profile->token);
    }
}
