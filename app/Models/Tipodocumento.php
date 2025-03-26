<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Tipodocumento extends Model
{
    use HasFactory;
    protected  $table = 'tipodocumento';
    public $timestamps = false;
    protected $primaryKey = 'idTipoDocumento';
    protected $fillable = [

        'nombreTipoDocumento',
        'abreviacionTipoDocumento'
    ];
}