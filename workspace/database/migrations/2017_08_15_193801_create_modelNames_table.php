<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelNamesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelNames', function(Blueprint $table)
		{
			$table->increments('id');
			$table->number('id');
			$table->number('cedula');
			$table->text('nombre');
			$table->text('apellido');
			$table->number('semestre');
			$table->text('tipo_usuario');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modelNames');
	}

}
