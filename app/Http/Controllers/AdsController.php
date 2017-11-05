<?php

namespace App\Http\Controllers;

use App\Ads;
use App\User;
use Illuminate\Http\Request;
use Cloudder;
use App\Http\Resources\Ads as AdsResource;

// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ads::paginate(20);
        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('ads.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $input = $request->all();
        if($file = $request->file('image')) {
            //naziv za folder
            $file_name =  str_random(10);
            //naziv za bazu

            try {
                $image = Cloudder::upload(realpath($file), $file_name);
            }catch (Exception $e) {
                echo $e;
            }

            $input['image'] =  $file_name;

            Ads::create($input);
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        $ads->delete();
        return redirect()->back();
    }

    public function adsFeed(){
        $ads = Ads::all();
        $data = [];
        foreach ($ads as $ad) {
            array_push($data, ['image'=>Cloudder::show($ad->image)]);
        }
        return response()->json($data);
    }
}
