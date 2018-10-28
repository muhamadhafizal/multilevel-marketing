<?php

namespace App\Http\Controllers;

use App\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user1/adduser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function show(User1 $user1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function edit(User1 $user1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User1 $user1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User1  $user1
     * @return \Illuminate\Http\Response
     */
    public function destroy(User1 $user1)
    {
        //
    }
}
