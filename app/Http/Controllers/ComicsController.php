<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicsRequest;
use App\Models\Comics;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

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
    public function store(StoreComicsRequest $request)
    {
        $data = $request->validated();
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
    public function edit(Comics $comic)
    {
        return view("comics.edit", [
            "comic" => $comic
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigRequest $request, Comics $comic)
    {
        $data = $request->validated();

        $comic->update($data);

        return redirect()-> route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
