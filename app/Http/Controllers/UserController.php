<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
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

    public function DashboardIndex()
    {
        if(session()->has('email'))
        {
            $rooms = DB::table('rooms')
                        ->get();
            $banquets = DB::table('banquets')
                        ->get();
            return view('Hotel.dashboard')->with('rooms',$rooms)->with('banquets',$banquets);
        }else{
            return redirect()->route('hotel.login');
        }
        
    }


    public function ProfileIndex()
    {
        $id = session()->get('id');
        $user = DB::table('users')
                    ->where('id', $id)
                    ->first();
        return view('Hotel.dashboardprofile')->with('user',$user);
    }

    public function Registration()
    {
        return view('Hotel.registration');
    }

    public function LoginIndex()
    {
        return view('Hotel.login');
    }

    public function Login(Request $request)
    {
        $user  = User::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();
        
        if($user)
        {
            $request->session()->put('email', $user->email);
            $request->session()->put('type', $user->type);
            $request->session()->put('name', $user->name);
            $request->session()->put('id',$user->id);
            
            //return view('Teacher.teacherDash')->with('user',$user);
            return redirect()->route('hotel.dashboard');
        }else{
            $request->session()->flash('msg', 'Please provide valid Email & Password');
    		return redirect()->route('hotel.login');
        }
    }

    public function Home()
    {
        //
        $rooms = DB::table('rooms')
                    ->get();
        $banquet = DB::table('banquets')
                    ->get();
        return view('Hotel.home')->with('rooms',$rooms)->with('banquets',$banquet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //
        session()->flush();
        return redirect()->route('hotel.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'password'=>'required|min:3',
            'email'=>'required',
            'confirmPassword'=>'required|same:password' ]);

        //
        $user = new User();
        $user->name = $request->name;
        
        $user->password = $request->password;
        $user->email = $request->email;
        $user->dp = '';
        $user->type = 'Admin';
        $user->status = 'Inactive';
        $save = $user->save();
        
        if($save)
        {
            $request->session()->flash('success', 'User profile created successfully');
            return redirect()->route('hotel.login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        
        //return view('Hotel.dashboardprofile')->with('user',$user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name'=>'required|min:3',
            'password'=>'required|min:3',
             ]);

        //
        $id = session()->get('id');
        $save = DB::table('users')
                    ->where('id', $id)
                    ->update(['name' => $request->name,
                                'password' =>$request->password,
                                 'dp' => $request->dp ]);
        
        
        if($save)
        {
            $request->session()->flash('success', 'User profile created successfully');
            return redirect()->route('hotel.profile');
        }else{
            echo "NOOO";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
