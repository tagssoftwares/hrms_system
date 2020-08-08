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
                ->references('id')->on('goals_type')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('subject');
            $table->string('target_achievement');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('discription');
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
