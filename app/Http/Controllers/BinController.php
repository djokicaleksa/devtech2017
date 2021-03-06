<?php

namespace App\Http\Controllers;

use App\Bin;
use Illuminate\Http\Request;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bins = Bin::paginate(20);
        return view('bins.index', compact('bins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bin = Bin::create($request->all());
        return redirect('/dashboard/bins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function show(Bin $bin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bin $bin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bin $bin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bin $bin)
    {
        $bin->delete();
        return redirect()->back()->withSuccessMessage('Bin successfully deleted!');
    }
}
