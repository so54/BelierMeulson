<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdentificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identification', function(Blueprint $table)
		{
			$table->integer('ID_IDENTIFICATION')->primary();
			$table->integer('ID_PERSONNE')->index('FK_EST_ATTRIBUE');
			$table->string('IDENTIFIANT', 50);
			$table->string('MDP', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('identification');
	}

}
