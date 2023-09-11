<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incluye extends Model
{
    use HasFactory;

    protected $table = 'incluye';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idServicio',
        'numContrato',
    ];

    public function servicio() {
        return $this->belongsTo(Servicio::class, 'idServicio', 'idServicio');
    }

    public function contrato() {
        return $this->belongsTo(Contrato::class, 'numContrato', 'numContrato');
    }
}