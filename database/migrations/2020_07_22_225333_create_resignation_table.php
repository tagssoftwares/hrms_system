<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResignationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resignation', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('id')->on('employees');
            $table->date('notice_date', 60);
            $table->date('resignation_date', 60);
            $table->string('reasons', 100);
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
        Schema::dropIfExists('resignation');
    }
}
