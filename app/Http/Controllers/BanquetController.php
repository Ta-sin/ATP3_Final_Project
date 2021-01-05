<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banquet;
use Illuminate\Support\Facades\DB;


class BanquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Hotel.banquet');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->validate([
            'bname'=>'required|min:3',
            'bdescription'=>'required|min:10',
            'bprice'=>'required',
            ]);

        //
        $banquet = new Banquet();
        $banquet->bname = $request->bname;
        $banquet->bdescription = $request->bdescription;
        $banquet->bprice = $request->bprice;
        $banquet->uid = session()->get('id');
        $banquet->bdp = "";

        
        $save = $banquet->save();
        
        if($save)
        {
            $request->session()->flash('success', 'banquet profile created successfully');
            return redirect()->route('hotel.dashboard');
        }else{
            return redirect()->back();
        }
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
        $banquet = DB::table('banquets')
                    ->where('bid',$id)
                    ->first();
        return view('Hotel.EditBanquet')->with('banquet', $banquet);
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
        $save = DB::table('banquets')
                    ->where('bid', $id)
                    ->update(['bname' => $request->bname,
                            'bprice' =>$request->bprice,
                            'bdescription' => $request->bdescription ]);
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
