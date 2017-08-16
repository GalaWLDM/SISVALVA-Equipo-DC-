<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ModelName extends Model
{
    
	public $table = "modelNames";
    

	public $fillable = [
	    "id",
		"cedula",
		"nombre",
		"apellido",
		"semestre",
		"tipo_Usuario"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string",
		"apellido" => "string",
		"tipo_Usuario" => "string"
    ];

	public static $rules = [
	    "id" => "required",
		"cedula" => "required",
		"nombre" => "required",
		"apellido" => "required",
		"semestre" => "tipo_Usuario"
	];

}
