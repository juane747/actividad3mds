<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
protected $table='prestamo';
protected $primaryKey='idprestamos';
public $timestamps=false;

public function cliente()
{
    return $this->belongsTo('App\Models\Cliente','idclientes','idclientes');
}
}
