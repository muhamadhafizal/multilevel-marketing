<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Ak;

use Auth;

class UserController extends Controller
{
    public function index()
    {
    	$user = Auth::user()->id;

    	$user1 = Auth::user()->parentid;

        return view('adduser', compact('user' , 'user1'));
    }

    public function store(request $request)
    {

    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));
    	$user->parentid = $request->input('parentid');
    	$user->headid = $request->input('headid');
    	$user->balance = $request->input('balance');

    	$user->save();

    	$user1 = User::all()->where('id', $user->parentid)->first();
        $user2 = User::all()->where('id', $user->headid)->first();
        
        $ak = Ak::all()->first();
        $ak1 = $ak->balance;
     

        if(count($user1) > 0)
        {

            $profit = $user->balance * 0.4;
            $balance = $user->balance - $profit;

            $user1->profit = $user1->profit + $profit;
            $user1->balance = $user1->balance + $balance;
            $user1->save();
        }

        $netbalance = $balance;
        
       if(count($user2) > 0)
        {

            $profit1 = $netbalance * 0.7;
            $balance1 = $netbalance - $profit1;

            $user2->profit = $user2->profit + $profit1;
            $user2->balance = $user2->balance + $balance1;
            $user2->save();

            $ak1 = $ak1 + $balance1;
            $ak->balance = $ak1;
            $ak->save();

        } 

        $user3 = User::all();

    	return view('/viewcalculation', compact('user3'));
    }
}

