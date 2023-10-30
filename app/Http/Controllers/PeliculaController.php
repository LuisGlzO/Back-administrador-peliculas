<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        return Pelicula::all();
    }

    public function store(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return response()->json($pelicula, 201);
    }

    public function show(Pelicula $pelicula)
    {
        return $pelicula;
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->update($request->all());
        return response()->json($pelicula, 200);
    }

    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return response()->json(null, 204);
    }
}
