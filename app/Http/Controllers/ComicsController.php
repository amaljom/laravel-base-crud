<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Comics=Comic::all();
        return view('main.Comics', compact('Comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create');
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
        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price= $data['price'];
        $newComic->series= $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type =$data['type'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $Comic)
    {
        return view('main.show', compact('Comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $Comic)
    {

        return view('main.Edit', compact('Comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->all();

        $comic=Comic::findOrFail($id);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price= $data['price'];
        $comic->series= $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type =$data['type'];

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy($id)
    {
        $comic=Comic::findOrFail($id);
        Comic::destroy($id);
        return redirect()->route(comics);
    }
}
