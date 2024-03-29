<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Http\Requests\StorePictureRequest;
use App\Http\Requests\UpdatePictureRequest;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePictureRequest $request)
    {
        if ($request->hasFile('pictures')) {
            $pictures=$request->file('pictures');
            foreach ($pictures as $picture) {
                $name=$picture->getClientOriginalName();
                $picture->move($request->album_name,$name);
                Picture::create([
                    'album_id'=>$request->album_id,
                    'name'=>$name
                ]);
            }
        }
        return redirect()->route('album.index')->with(['success'=>'Pictures Created Successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePictureRequest $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
