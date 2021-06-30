<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantTable extends Migration {

	public function up()
	{
		Schema::create('etudiants', function(Blueprint $table) {
			$table->increments('id');

			$table->unsignedInteger('id_niveau');
			$table->foreign('id_niveau')->references('id')->on('niveaux')->onDelete('cascade');

			$table->unsignedInteger('id_pfe')->nullable();
			$table->foreign('id_pfe')->references('id')->on('pfe')->onDelete('cascade');

			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('cin', 20);
			$table->string('cne', 30);
			$table->string('apogee', 30);
			
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('etudiants');
	}
}