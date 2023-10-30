<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index()
    {
        return Turno::all();
    }

    public function store(Request $request)
    {
        $turno = Turno::create($request->all());
        return response()->json($turno, 201);
    }

    public function show(Turno $turno)
    {
        return $turno;
    }

    public function update(Request $request, Turno $turno)
    {
        $turno->update($request->all());
        return response()->json($turno, 200);
    }

    public function destroy(Turno $turno)
    {
        $turno->delete();
        return response()->json(null, 204);
    }
}
