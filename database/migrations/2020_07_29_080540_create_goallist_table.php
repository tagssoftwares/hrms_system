<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoallistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goallist', function (Blueprint $table) {     
                $table->increments('id');
                $table->integer('goals_type_id')->unsigned();
                $table->foreign('goals_type_id')
                        ->references('id')->on('goals_type');
                $table->string('subject',100);
                $table->string('target_acheivement',100);
                $table->string('start_date',100);
                $table->string('end_date',100);
                $table->string('discription',100);
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
        Schema::dropIfExists('goallist');
    }
}
