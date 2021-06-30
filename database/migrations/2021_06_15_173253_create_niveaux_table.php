<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiveauxTable extends Migration {

	public function up()
	{
		Schema::create('niveaux', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('libelle', 30);
		});
	}

	public function down()
	{
		Schema::drop('niveaux');
	}
}