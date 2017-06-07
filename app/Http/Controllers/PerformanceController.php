<?php

namespace App\Http\Controllers;

use App\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerformanceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboaard.new-performance',['users'=>Auth::User()]);
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
            'performance_title'=>'required',
            'performance_description'=>'required|min:100',
            'images'=>'',
            'videos'=>''
        ]);

        $performances =  new Performance();
        $performances->performance_title = $request->input('performance_title');
        $performances->performance_description = $request->input('performance_description');
        $performances->created_by = Auth::User()->id;

        if ($performances->save())
        {
            return redirect()->back()->with('alert','Kudos! You have added '.$performances->performance_title.' to your performances');
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
        $performances = Specialty::find($id);
        if ($performances->destroy())
        {
            return redirect()->back()->with('alert','Hello! You just deleted '.$performances->specialty_name.' from your list of specialties');
        }else{
            return redirect()->back()->with('alert','An error occurred due to poor network');
        }
    }
}
