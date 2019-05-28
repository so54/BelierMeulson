<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorrespondTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('correspond', function(Blueprint $table)
		{
			$table->integer('ID_QUOTIENT');
			$table->integer('ID_PERIODE')->index('FK_CORRESPOND2');
			$table->integer('ID_CATEGORIE')->index('FK_CORRESPOND3');
			$table->float('TARIF', 10, 0);
			$table->primary(['ID_QUOTIENT','ID_PERIODE','ID_CATEGORIE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('correspond');
	}

}
