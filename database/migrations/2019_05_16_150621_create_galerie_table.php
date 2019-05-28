<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalerieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galerie', function(Blueprint $table)
		{
			$table->integer('ID_PHOTO')->primary();
			$table->integer('ID_EVENT')->index('FK_EST_LIE');
			$table->string('NOM_PHOTO', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('galerie');
	}

}
