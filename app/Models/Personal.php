<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $primaryKey = 'cedulaPersonal';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nombrePersonal',
        'apellidoPersonal',
        'cedulaPersonal'
    ];

    public function contratos() {
        return $this->hasMany(Contrato::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function pruebas() {
        return $this->hasMany(Prueba::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function servicios() {
        return $this->hasMany(Servicio::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function contactas() {
        return $this->hasMany(Contacta::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function ofrece() {
        return $this->hasMany(Ofrece::class, 'cedulaPersonal', 'cedulaPersonal');
    }
}