<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacta extends Model
{
    use HasFactory;

    protected $table = 'contacta';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'cedulaCliente',
        'cedulaPersonal',
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cedulaCliente', 'cedulaCliente');
    }

    public function personal() {
        return $this->belongsTo(Personal::class, 'cedulaPersonal', 'cedulaPersonal');
    }
}