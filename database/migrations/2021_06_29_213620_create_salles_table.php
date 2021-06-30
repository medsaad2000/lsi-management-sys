<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSallesTable extends Migration {

	public function up()
	{
		Schema::create('salles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom_salle', 30);
			$table->date('date_reservation');
			$table->time('heure_debut');
			$table->time('heure_fin');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('salles');
	}
}