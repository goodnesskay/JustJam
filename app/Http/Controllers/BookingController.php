<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboaard.new-booking', ['users' => Auth::User()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'event_title' => '',
            'booking_description' => '',
            'event_state' => '',
            'event_address' => '',
            'event_date' => '',
        ]);

        $bookings = new Booking();
        $bookings->event_title = $request->input('event_title');
        $bookings->booking_description = $request->input('booking_description');
        $bookings->event_state = $request->input('event_state');
        $bookings->event_address = $request->input('event_address');
        $bookings->event_date = $request->input('event_date');
        $bookings->created_by = Auth::User()->id;
        $bookings->status = 0;

        if ($bookings->save()) {
            return redirect()->back()->with('alert', 'You have booked');
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $bookings = DB::table('bookings')->select('*')->where('created_by','==',Auth::User()->id)->paginate(10);
        return view('dashboard.my-bookings',['users', Auth::User()])->with('bookings',$bookings);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::find($id);
        return view('dashboard.edit-my-bookings',['users', Auth::User()])->with('bookings',$bookings);
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
        $bookings = Booking::find($id);
        if ($bookings->destroy())
        {
            return redirect()->back()->with('alert','Hello! You just deleted '.$bookings->event_title.' from your bookings');
        }else{
            return redirect()->back()->with('alert','An error occurred due to poor network');
        }
    }
}
