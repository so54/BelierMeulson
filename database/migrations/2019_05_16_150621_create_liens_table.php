<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLiensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('liens', function(Blueprint $table)
		{
			$table->integer('ID_LIEN')->primary();
			$table->string('NOM_LIEN', 100);
			$table->text('DESCRIPTION_LIEN', 65535)->nullable();
			$table->string('FICHIER_LIEN', 100);
			$table->integer('id_emplacement')->nullable()->index('fk_id_emplacement');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('liens');
	}

}
