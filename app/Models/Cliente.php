<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use HasFactory;
protected $table='cliente';
protected$primaryKey='idclientes';
public $timestamps=false;

public function prestamos()
{
    return$this->hasMany('App\Models\Prestamo','idclientes','idclientes');
}
}
