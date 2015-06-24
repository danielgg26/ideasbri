<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comidas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('titulo');
			$table->text('resumen');
			$table->text('materiales');
			$table->text('descripcion');
			$table->text('imagenmate');
			$table->text('imagencomp');
			$table->text('imagenfin');
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
		Schema::drop('comidas');
	}

}
