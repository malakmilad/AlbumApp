<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Models\Picture;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums=Album::all();
        return view('admin.album.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumRequest $request)
    {
        $album = Album::create([
            'name'=>$request->name
        ]);
        if ($request->hasFile('pictures')) {
            $pictures=$request->file('pictures');
            foreach ($pictures as $picture) {
                $name=$picture->getClientOriginalName();
                $picture->move($album->name,$name);
                Picture::create([
                    'album_id'=>$album->id,
                    'name'=>$name
                ]);
            }
        }
        return redirect()->route('album.index')->with(['success'=>'Album Created Successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $pictures=$album->pictures;
        return view('admin.album.show',compact('album','pictures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $pictures=$album->pictures;
        return view('admin.album.edit',compact('album','pictures'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $album->update([
            'name'=>$request->name
        ]);
        return redirect()->route('album.index')->with(['success'=>'Album Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('album.index')->with(['success'=>'Album Deleted Successfully']);
    }
}
