<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    protected $table = 'prueba';
    protected $primaryKey = 'numPrueba';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'numPrueba',
        'cedulaPersonal',
        'cedulaCliente',
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cedulaCliente', 'cedulaCliente');
    }

    public function personal() {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }
}