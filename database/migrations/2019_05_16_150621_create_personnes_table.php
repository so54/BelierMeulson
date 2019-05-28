<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnes', function(Blueprint $table)
		{
			$table->integer('ID_PERSONNE')->primary();
			$table->integer('ID_IDENTIFICATION')->nullable()->index('FK_EST_ATTRIBUE2');
			$table->string('NOM_PERSONNE', 50);
			$table->string('PRENOM_PERSONNE', 50);
			$table->string('CATEGORIE_PERSONNE', 50);
			$table->string('MAIL_PERSONNE', 100);
			$table->string('ADRESSE_PERSONNE', 200)->nullable();
			$table->integer('CP_PERSONNE')->nullable();
			$table->string('VILLE_PERSONNE', 50)->nullable();
			$table->integer('TEL_PERSONNE')->nullable();
			$table->string('PRENOM_ENFANT', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnes');
	}

}
