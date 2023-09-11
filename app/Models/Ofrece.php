<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofrece extends Model
{
    use HasFactory;

    protected $table = 'ofrece';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'cedulaPersonal',
        'idServicio',
    ];

    public function personal() {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }

    public function servicio() {
        return $this->belongsTo(Servicio::class, 'idServicio', 'idServicio');
    }
}