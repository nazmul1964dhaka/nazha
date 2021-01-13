<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
	{
	   Schema::create('students',function(Blueprint $table){
		   $table->id();
		   $table->string('name',100) -> nullable();
		   $table->string('age',12)-> nullable();
		   $table->string('cell',15)->default('01818618123');
		   $table->integer('amount');
		   $table->string('email',100)->unique();
		   $table->timestamps();
	   });
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
