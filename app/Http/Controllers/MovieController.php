<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie_id
     * @return \Illuminate\Http\Response
     */
    public function show($movie_id)
    {
         $movie = Movie::find($movie_id);
        return response()->json($movie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->genre = $request->input('genre');
        $movie->year = $request->input('year');
        $movie->duration = $request->input('duration');
        $movie->save();
        return response()->json($movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movie_id)
    {
       $movie = Movie::find($movie_id);
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->genre = $request->input('genre');
        $movie->year = $request->input('year');
        $movie->duration = $request->input('duration');
        $movie->save();
        return response()->json($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($movie_id)
    {
        $movie = Movie::find($movie_id);
        $movie->delete();

}
}
