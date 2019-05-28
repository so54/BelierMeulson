<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotientFamilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotient_familial', function(Blueprint $table)
		{
			$table->integer('ID_QUOTIENT')->primary();
			$table->string('INTITULE_QUOTIENT', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quotient_familial');
	}

}
