<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Hotel.room');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function book()
    {
        //
        $book = DB::table('rooms')
                    ->where('rstatus', 'booked')
                    ->get();
        return view('Hotel.booked')->with('books',$book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'rname'=>'required|min:3',
            'rdescription'=>'required|min:10',
            'rprice'=>'required',
            ]);

        //
        $room = new Room();
        $room->rname = $request->rname;
        $room->rdescription = $request->rdescription;
        $room->rprice = $request->rprice;
        $room->uid = session()->get('id');
        $room->rdp = "";

        
        $save = $room->save();
        
        if($save)
        {
            $request->session()->flash('success', 'room profile created successfully');
            return redirect()->route('hotel.dashboard');
        }else{
            return redirect()->back();
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
        $room = DB::table('rooms')
                    ->where('rid',$id)
                    ->first();
        return view('Hotel.EditRoom')->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $save = DB::table('rooms')
                    ->where('rid', $id)
                    ->update(['rname' => $request->rname,
                            'rprice' =>$request->rprice,
                            'rdescription' => $request->rdescription ]);
        if($save){
            return redirect()->route('hotel.dashboard');
        }else{
            return redirect()->back();
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
