<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Specialty;
use Illuminate\Support\Facades\DB;

class SpecialtyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboaard.new-specialty',['users'=>Auth::User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'specialty_name'=>'required',
            'years_of_experience'=>'required|integer',
            'brief_description'=>'required|min:100'
        ]);

        $specialties =  new Specialty();
        $specialties->specialty_name = $request->input('specialty_name');
        $specialties->years_of_experience = $request->input('years_of_experience');
        $specialties->brief_description = $request->input('brief_description');
        $specialties->created_by = Auth::User()->id;

        if ($specialties->save())
        {
            return redirect()->back()->with('alert','Kudos! You have added '.$specialties->specialty_name.' to your specialties');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $specialties = DB::table('specialties')->select('*')->where('created_by','==',Auth::User()->id)->paginate(10);
        return view('dashboard.my-specialties',['users', Auth::User()])->with('specialties',$specialties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialties = Specialty::find($id);
        return view('dashboard.edit-my-specialties',['users', Auth::User()])->with('specialties',$specialties);
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
            'specialty_name'=>'required',
            'years_of_experience'=>'required|integer',
            'brief_description'=>'required|min:100'
        ]);

        $specialties =  Specialty::find($id);
        $specialties->specialty_name = $request->input('specialty_name');
        $specialties->years_of_experience = $request->input('years_of_experience');
        $specialties->brief_description = $request->input('brief_description');

        if ($specialties->save())
        {
            return redirect()->back()->with('alert','Kudos! You have updated '.$specialties->specialty_name.' in your list of specialties');
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
        $specialties = Specialty::find($id);
        if ($specialties->destroy())
        {
            return redirect()->back()->with('alert','Hello! You just deleted '.$specialties->specialty_name.' from your list of specialties');
        }else{
            return redirect()->back()->with('alert','An error occurred due to poor network');
        }

    }
}
