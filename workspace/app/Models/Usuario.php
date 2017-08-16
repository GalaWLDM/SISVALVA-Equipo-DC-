<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Usuario extends Model
{
    
	public $table = "usuarios";
    

	public $fillable = [
	    "id",
		"cod_usuario",
		"cedula",
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
        "id" => "integer",
		"cod_usuario" => "integer",
		"cedula" => "integer",
		"nombre" => "string",
		"apellido" => "string",
		"semestre" => "integer",
		"tipo_usuario" => "string"
    ];

	public static $rules = [
	    "id" => "required",
		"cod_usuario" => "required",
		"cedula" => "required",
		"nombre" => "required",
		"apellido" => "required",
		"semestre" => "required",
		"tipo_usuario" => "required"
	];

}
