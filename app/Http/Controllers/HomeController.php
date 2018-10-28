<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user1 = User::all()->where('parentid', $user->id);
        $total = count($user1);
        

        return view('home' , compact('total'));
    }

    public function view()
    {
        $user3 = User::all();

        return view('viewcalculation', compact('user3'));
    }

    public function calculation()
    {
        $user3 = User::all();

        return view('calculation', compact('user3'));
    }

    // public function store(request $request)
    // {

    //     $user = Auth::user(); 

    //     $user->balance = $request->input('fee');
    //     $user->parentid = $request->input('parentid');
    //     $user->headid = $request->input('headid');

    //     $user->save();

    //     $user1 = User::all()->where('userid', $user->parentid)->first();
    //     $user2 = User::all()->where('userid', $user->headid)->first();


    //     if(count($user1) > 0)
    //     {
    //         $profit = 4;
    //         $balance = 6;

    //         $user1->profit = $user1->profit + $profit;
    //         $user1->balance = $user1->balance + $balance;
    //         $user1->save();
    //     }
        
    //    if(count($user2) > 0)
    //     {
    //         $profit1 = 4.2;
    //         $balance1 = 1.8;

    //         $user2->profit = $user2->profit + $profit1;
    //         $user2->balance = $user2->balance + $balance1;
    //         $user2->save();
    //     } 
       
    //     return redirect('/home'); 


    // }


}


