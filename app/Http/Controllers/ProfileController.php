<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'token','name','Instagram','Phone','Snapchat','Whatsapp','facebook','linkedin','twitter','github','web1','web2','web3','web4','web5','web6'

        $input=$request->all();
        $validator=Validator::make($input,[
            'name'=>'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error',$validator->errors()->all());
        }

        profile::create([
            'name' => $request->input('name'),
            'user_id' => auth()->user()->id,
            'Instagram' => $request->input('Instagram'),
            'Phone' => $request->input('Phone'),
            'Snapchat' => $request->input('Snapchat'),
            'Whatsapp' => $request->input('Whatsapp'),
            'facebook' => $request->input('facebook'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'github' => $request->input('github'),
            'web1' => $request->input('web1'),
            'web2' => $request->input('web2'),
            'web3' => $request->input('web3'),
            'web4' => $request->input('web4'),
            'web5' => $request->input('web5'),
            'web6' => $request->input('web6'),
        ]);
        return redirect()->back()->with('success','Profile Created Successfully');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        $user=Auth::user()->email;
        $profile = profile::where('id',auth()->user()->id)->first();
        return view("profile.show",compact('profile','user'));
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
