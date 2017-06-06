<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\NewsFeed;

class NewsFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('dashboard.news-feed',['users'=>Auth::User()])->with('news',$news);
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
            'status'=>'',
            'video'=>'',
            'audio'=>'',
            'images'=>''
        ]);

        $news = new NewsFeed();
        $news->status = $request->input('status');

        if ($news->save())
        {
            return redirect()->back()->with('alert','Status added successfully');
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
        $news = DB::table('newsfeeds')->select('*')->where('created_by','==',Auth::User()->id)->paginate(10);
        return view('dashboard.my-status',['users', Auth::User()])->with('news',$news);
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
        $news = NewsFeed::find($id);

        if ($news->destroy())
        {
            return redirect()->back()->with('alert','Status deleted successfully');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }
}
