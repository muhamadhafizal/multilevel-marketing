<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ak;
use App\User;
use Auth;

class AKController extends Controller
{
    public function view()
    {

    	
    	$ak = Ak::all()->first();
    	$ak1 = $ak->balance;
    	
        return view('balance', compact('ak1'));

    }

    public function relation()
    {
    	$user = Auth::user();

    	$parent = User::all()->where('parentid', $user->id);

        for ($i=1; $i < 4 ; $i++) { 
            $parent1[$i] = User::all()->where('parentid', $parent[$i]->id);
            // dd($user3);
        }
        

        return view('relation', compact('parent','user3','user'));

    	// $head = User::all()->where('headid', $user->id);
   
    	

    	//$user1 = User::all()->where('userid', $user->parentid)->first();
    }

    public function show($id)
    {
        $user = User::whereId($id)->first();
        $parent = User::all()->where('parentid', $user->id);
        $head = User::all()->where('headid', $user->id);
    
        return view('relation', compact('parent', 'head', 'user'));
       
    }
}
