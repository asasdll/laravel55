<?php

namespace App\Http\Controllers;

use App\Leavesup;
use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class LeavesupController extends Controller
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
     * @param  \App\Leavesup  $leavesup
     * @return \Illuminate\Http\Response
     */
    public function show(Leavesup $leavesup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leavesup  $leavesup
     * @return \Illuminate\Http\Response
     */
    public function edit(Leavesup $leavesup)
    {
        dd('fsdf');
        $post = Leavesup::find ($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leavesup  $leavesup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leavesup $leavesup)
    {
        //dd('fsdf');
        $post = Leave::find ($request->id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leavesup  $leavesup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leavesup $leavesup)
    {
        //
    }
}
