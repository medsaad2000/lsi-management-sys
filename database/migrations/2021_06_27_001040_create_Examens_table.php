<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration {

	public function up()
	{
		Schema::create('examens', function(Blueprint $table) {
			
			$table->increments('id', true);
			$table->unsignedInteger('id_etd');
			$table->foreign('id_etd')->references('id')->on('etudiants')->onDelete('cascade');

			$table->unsignedInteger('id_module');
			$table->foreign('id_module')->references('id')->on('modules')->onDelete('cascade');


			$table->timestamps();
			$table->date('Date_Examen');
			$table->float('Note_Examen');
		});
	}

	public function down()
	{
		Schema::drop('examens');
	}
}