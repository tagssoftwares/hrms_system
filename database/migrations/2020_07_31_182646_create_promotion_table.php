<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('promotion_for');

            $table->integer('promotion_from')->unsigned();
            $table->foreign('promotion_from')
                  ->references('id')->on('department')
                  ->unsigned()->index();

            $table->integer('promotion_to')->unsigned();
            $table->foreign('promotion_to')
                  ->references('id')->on('department')
                  ->unsigned()->index();

            $table->string('promotion_date');
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
        Schema::dropIfExists('promotion');
    }
}
