<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    protected $guarded = ['id'];

    public function cadastrar($attributes)
    {
      $horario = new \Carbon\Carbon($attributes['dia'].' '. $attributes['horario']);

      return $this->create([
        'horario' => $horario,
        'tipo' => $attributes['tipo']
      ]);

    }
}
