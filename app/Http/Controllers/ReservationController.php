<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id',Auth::id())->get();
        return view('home',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$hotel_id)
    {
        $data = Room::find($hotel_id);
        $days = $request->input('days');
        $checkin = $request->input('checkin');
        return view('home.user_reservation_add',['data' => $data,'days'=>$days,'checkin'=>$checkin]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$hotel_id)
    {
        $data = new Room;
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->price = $request->input('price');
        $data->adet = $request->input('adet');
        $data->status = $request->input('status');
        $data->image = Storage::putFile('rooms',$request->file('image'));
        $data->save();

        $datalist = Reservation::where('user_id',Auth::id())->get();
        foreach($datalist as $rs)
        {
            $data2 = new Reservation;
            $data2->user_id=Auth::id();
            $data2->hotel_id= $rs->hotel_id;
            $data2->checkin = $rs->input('checkin');
            $data2->days = $rs->input('days');
            $data2->save();
        }

        return redirect()->route('user_hotels');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
