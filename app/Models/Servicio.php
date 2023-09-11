<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primaryKey = 'idServicio';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idServicio',
        'tipoServicio',
        'cedulaPersonal',
        'numContrato',
    ];

    public function personal() {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function contratos() {
        return $this->belongsToMany(Contrato::class, 'incluye', 'idServicio', 'numContrato');
    }

    public function ofrece() {
        return $this->hasMany(Ofrece::class, 'idServicio', 'idServicio');
    }
}