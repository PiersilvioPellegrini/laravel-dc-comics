<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::orderBy("title")->get();

        return view("comics.index", [
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
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
        $singleComics = Comics::create($data);

        return redirect()->route("comics.show", $singleComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleComics = Comics::findOrFail($id);

        return view("comics.show", [

            "comics" => $singleComics
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
        return view("comics.edit", [
            "comics" => $comics
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
        $data = $request->all();

        $comics->update($data);

        return redirect()-> route("comics.show", $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
