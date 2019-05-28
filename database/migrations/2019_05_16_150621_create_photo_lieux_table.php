<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoLieuxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo_lieux', function(Blueprint $table)
		{
			$table->integer('id_photo_lieux')->primary();
			$table->string('nom_photo_lieux', 50)->nullable();
			$table->string('fichier_photo_lieux', 50)->nullable();
			$table->integer('id_emplacement_photo')->index('FK_id_emplacement_photo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photo_lieux');
	}

}
