<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseurTable extends Migration {

	public function up()
	{
		Schema::create('professeurs', function(Blueprint $table) {
			$table->increments('id', true);
			$table->string('nom_prof', 50);
			$table->string('prenom_prof', 50);
			$table->string('email_prof', 60);
			$table->string('cin', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('professeurs');
	}
}