<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Estudiantes extends Model
{
    
	public $table = "estudiantes";
    

	public $fillable = [
	    "Cedula",
		"cod_usuario",
		"nombre",
		"apellido",
		"semestre",
		"tipo_usuario"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "Cedula" => "string"
    ];

	public static $rules = [
	    "Cedula" => "required",
		"cod_usuario" => "required",
		"nombre" => "required",
		"apellido" => "required",
		"semestre" => "required",
		"tipo_usuario" => "required"
	];

}
