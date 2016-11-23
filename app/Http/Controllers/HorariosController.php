<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;

class HorariosController extends Controller
{
    public function index()
    {
        return Horario::all();
    }

    public function store(Request $request)
    {
        return Horario::create($request->all());
    }

    public function show(Horario $horario)
    {
        return $horario;
    }

    public function update(Horario $horario)
    {
        $horario->save();
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
    }
}
