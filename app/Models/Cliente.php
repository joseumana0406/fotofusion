<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primaryKey = 'cedulaCliente';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'cedulaCliente',
        'nombreCliente',
        'apellidoCliente',
        'email',
        'direccion'
    ];

    public function contratos() {
        return $this->hasMany(Contrato::class, 'cedulaCliente', 'cedulaCliente');
    }

    public function pruebas() {
        return $this->hasMany(Prueba::class, 'cedulaCliente', 'cedulaCliente');
    }

    public function contactas() {
        return $this->hasMany(Contacta::class, 'cedulaCliente', 'cedulaCliente');
    }
}