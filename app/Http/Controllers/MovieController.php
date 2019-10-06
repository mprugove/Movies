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
        $Movies = Movie::get();
         return view('movies', [
            'movies' => $Movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies_create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'year' => 'required|numeric|between:1950,2020',
                'country' => 'required|min:3|alpha_num'
            ],
            [
                'title.required' => 'Polje title je obavezno',
                'year.required' => 'Polje year je obavezno',
                'year.numeric' => 'Polje year sadržava samo brojeve',
                'year.between' => 'Godina mora biti između 1950-2020',
                'country.required' => 'Polje country je obavezno',
            ]
        );

        $movie =new Movie;
        $movie->title = $request->all()['title'];
        $movie->year = $request->all()['year'];
        $movie->rating = $request->all()['rating'];
        $movie->country = $request->all()['country'];

        $movie->save();

        //return redirect()->back()->with('message', 'Movie saved successfully');
        return redirect('movies')->with('message', 'Movie saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}