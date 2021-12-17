<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $peliculas = Movie::all();
        return view('catalog.index',
        array('arrayPeliculas' => $peliculas));
    }

    public function getShow($id)
    {
        return view('catalog.show',
        array(
            'pelicula' => Movie::find($id)));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        return view('catalog.edit',
        array(
            'id' => $id,
            'pelicula' => Movie::find($id)));
    }

    public function changeRented($id)
    {
        $pelicula = Movie::findOrFail($id);
        $pelicula->rented = !($pelicula->rented);
        $pelicula->save();

        return redirect('/catalog/show/'.$id);
    }

    public function putEdit(Request $request)
    {
        $id = $request->id;
        $pelicula = Movie::findOrFail($id);

        if($request->exists('poster')) {
            $pelicula->poster = Storage::disk('public')->putFile('posters', $request->file('poster'));
        }
    }

}
