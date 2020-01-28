<?php

namespace App\Http\Controllers;

use App\shout;
use Illuminate\Http\Request;

class ShoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shouts = shout::all();
        return view('welcome', compact('shouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shouts = new shout;
        $this->validate($request,[
            'user'=>'required',
            'msg'=>'required'
        ]);
        $shouts->user = $request->user;
        $shouts->msg = $request->msg;
        $shouts->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shout  $shout
     * @return \Illuminate\Http\Response
     */
    public function show(shout $shout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shout  $shout
     * @return \Illuminate\Http\Response
     */
    public function edit(shout $shout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shout  $shout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shout $shout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shout  $shout
     * @return \Illuminate\Http\Response
     */
    public function destroy(shout $shout)
    {
        //
    }
}
