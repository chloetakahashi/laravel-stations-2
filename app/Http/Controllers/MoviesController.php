<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all()->sortByDesc('created_at');
        return view('movies.movies', ['movies' => $movies]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        // dump(request()->get('title', ''));
        request()->validate([
            'title' => 'required|unique:movies,title',
            'image_url' => 'url',
            'published_year' => 'integer',
            'is_showing' => 'required',
            'description' => 'required',
        ]);
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->image_url = $request->input('image_url');
        $movie->published_year = $request->input('published_year');
        $movie->is_showing = $request->input('is_showing');
        $movie->description = $request->input('description');
        $movie->save();

        return redirect('/admin/movies')->with('success', '映画の登録に成功しました。');
    }
}
