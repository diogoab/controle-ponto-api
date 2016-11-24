<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;

class HorariosController extends Controller
{
    protected $horarios;

    protected $guarded = ['id'];

    public function __construct (Horario $horarios) {
      $this->horarios = $horarios;
    }
    public function index()
    {
        return $this->horarios->all();
    }

    public function store(Request $request)
    {
        return $this->horarios->cadastrar($request->all());
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
