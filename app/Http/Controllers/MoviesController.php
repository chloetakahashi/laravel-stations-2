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

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
        // compact('movie') => ['movie' => $movie]
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        request()->validate([
            'title' => 'required|unique:movies,title',
            'image_url' => 'url',
            'published_year' => 'integer',
            'is_showing' => 'required',
            'description' => 'required',
        ]);
        $movie->title = $request->input('title');
        $movie->image_url = $request->input('image_url');
        $movie->published_year = $request->input('published_year');
        $movie->is_showing = $request->input('is_showing');
        $movie->description = $request->input('description');
        $movie->save();

        return redirect('/admin/movies')->with('success', '映画の編集に成功しました。');
    }

    public function destroy($id)
    {
        // Movie::where('id', $id)->first();
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect('/admin/movies')->with('success', '映画の削除に成功しました。');
    }
}
