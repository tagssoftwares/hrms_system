<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('employeeID', 20);
            $table->string('first_name', 100);
            $table->string('middel_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 150)->unique();
            $table->string('mobile_number', 20);
            $table->enum('gender',['male','female']);
            $table->date('date_of_birth')->nullable();
            $table->date('joining_date')->nullable();
             $table->text('local_address');
            $table->text('permanent_address');
            $table->string('profile_image')->default('default.jpg')->nullable();
            $table->enum('status',['active','inactive']);  
            $table->integer('designation')->unsigned()->nullable();
            $table->integer('department')->unsigned()->nullable();        
            $table->foreign('designation')
                  ->references('id')->on('designation')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('department')
                  ->references('id')->on('department')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');            
            $table->timestamps();
        });

        Schema::table('employees', function($table) {
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
