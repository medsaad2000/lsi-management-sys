<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTable extends Migration {

	public function up()
	{
		Schema::create('modules', function(Blueprint $table) {
			
			$table->increments('id');

			$table->unsignedInteger('id_niveau');
			$table->foreign('id_niveau')->references('id')->on('niveaux')->onDelete('cascade');

			$table->unsignedInteger('id_prof');
			$table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');

			$table->string('nom_mod', 60);
			$table->integer('semestre');
			
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('modules');
	}
}