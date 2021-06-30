<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration {

	public function up()
	{
		Schema::create('personnes', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->string('Nom', 50);
			$table->string('CIN', 50);
			$table->string('Prenom', 50);
			
			$table->string('Email', 50);
			$table->integer('Tel');
		});
	}

	public function down()
	{
		Schema::drop('personnes');
	}
}