<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePFETable extends Migration {

	public function up()
	{
		Schema::create('pfe', function(Blueprint $table) {
			$table->increments('id', true);
			$table->unsignedInteger('id_prof');
			$table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
			$table->timestamps();
			$table->string('sujet', 50);
			$table->datetime('date_pfe');
		});
	}

	public function down()
	{
		Schema::drop('pfe');
	}
}