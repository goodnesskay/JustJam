<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display the profile in an awesome way.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.view-profile',['users',Auth::User()])->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.edit-profile',['users',Auth::User()])->with('user',$user);
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
        $this->validate($request,[
            'full_name'=>'required',
            'username'=>'required|distinct',
            'email'=>'required|unique:users',
            'mobile_number'=>'required|numeral',
            'date_of_birth'=>'required',
            'specialty'=>'required',
            'your_state'=>'required',
            'brief_description'=>'required',
            'long_description'=>'required',
            'your_location'=>'required',
            'facebook_url'=>'required',
            'twitter_url'=>'required',
            'linkedin_url'=>'required',
            'youtube_url'=>'required',
        ]);

        $users = User::find($id);
        $users->full_name =$request->input('full_name');
        $users->username =$request->input('username');
        $users->email =$request->input('email');
        $users->mobile_number =$request->input('mobile_number');
        $users->date_of_birth =$request->input('date_of_birth');
        $users->specialty =$request->input('specialty');
        $users->your_state =$request->input('your_state');
        $users->brief_description =$request->input('brief_description');
        $users->long_description =$request->input('long_description');
        $users->your_location =$request->input('your_location');
        $users->facebook_url =$request->input('facebook_url');
        $users->twitter_url =$request->input('twitter_url');
        $users->linkedin_url =$request->input('linkedin_url');
        $users->youtube_url =$request->input('youtube_url');

        if ($users->save())
        {
            return redirect()->back()->with('alert','Changes have been made to our data');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     *  Password Reset View
     *
    */
    public function passwordView($id)
    {
        $user = User::find($id);
        return view('dashboard.password-reset',['users',Auth::User()])->with('user',$user);

    }

    /**
     *  Password Reset
     *
     */
    public function changePassword(Request $request,$id)
    {
        $this->validate($request,[
            'password'=>'required|confirmed|min:6'
        ]);

        $users = User::find($id);
        $users->password = $request->input('password');
        if ($users->save())
        {
            return redirect()->back()->with('alert','Changes have been made to our data');
        }else{
            return redirect()->back()->withErrors($validator);
        }
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
}
