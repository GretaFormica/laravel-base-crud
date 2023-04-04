<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $music = Music::all();
        return view('music.index', compact('music'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $music = new Music;

        $music->title = $data['title'];
        $music->album = $data['album'];
        $music->author = $data['author'];
        $music->editor = $data['editor'];
        $music->length = $data['length'];
        $music->poster = 'https://picsum.photos/200/300';
    
        $music->save();

        return redirect()->route('music.show', ['music' => $music->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        var_dump($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Music $music)
    {
        return view('music.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Music $music)
    {
        $data = $request->all();

        $music->update($data);

        return redirect()->route('music.show', ['music' => $music->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
