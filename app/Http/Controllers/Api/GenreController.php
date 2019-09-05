<?php

namespace App\Http\Controllers\Api;

use App\Entities\Genre;
use App\Http\Controllers\Api\Traits\ValidateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenreController extends Controller
{   
    protected $rules = [
        'name' => 'required|max:255',
        'is_active' => 'boolean'
    ];

    use ValidateRequest;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Genre::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validateRequest($request);
         $genre = new Genre();
         $genre->fill($request->only(['name','is_active']));
         $genre->save();

         return $genre;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entities\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return $genre;
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entities\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        $this->validateRequest($request);
        $genre->fill($request->only(['name','is_active']));
        $genre->save();
        return $genre;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entities\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
         $genre->delete();
         return response()->noContent();
    }
}
