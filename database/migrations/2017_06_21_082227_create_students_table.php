<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode', 5);
            $table->string('phone', 20);
            $table->date('birthdate');
            $table->enum('Sex', ['Male', 'Female']);
            $table->float('lunch_cost');
            $table->timestamp('created_at')->nullable();
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
