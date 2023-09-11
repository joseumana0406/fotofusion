<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contrato';
    protected $primaryKey = 'numContrato';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'numContrato',
        'cedulaCliente',
        'cedulaPersonal',
        'costo',
        'fechaEvento',
        'lugarEvento'
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cedulaCliente', 'cedulaCliente');
    }

    public function personal() {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function servicios() {
        return $this->belongsToMany(Servicio::class, 'incluye', 'numContrato', 'idServicio');
    }
}