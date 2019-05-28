<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvenementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evenements', function(Blueprint $table)
		{
			$table->integer('ID_EVENT', true);
			$table->string('NOM_EVENT', 100)->unique('evenements_nom_event_unique');
			$table->date('DATE_EVENT');
			$table->string('slug')->unique('slug');
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
		Schema::drop('evenements');
	}

}
