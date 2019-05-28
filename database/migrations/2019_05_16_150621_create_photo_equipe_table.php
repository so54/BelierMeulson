<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo_equipe', function(Blueprint $table)
		{
			$table->integer('ID_EMPLOYE')->primary();
			$table->string('NOM_EMPLOYE', 50);
			$table->string('FONCTION_EMPLOYE', 50);
			$table->string('IMAGE_EMPLOYE', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photo_equipe');
	}

}
