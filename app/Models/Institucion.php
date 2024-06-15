<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    public function estudiantes(){
    	// Una institucion tiene muchos estudiantes
    	return $this->hasMany(Estudiantes::class);
	}
}
