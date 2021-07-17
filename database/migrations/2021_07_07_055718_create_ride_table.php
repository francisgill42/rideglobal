<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride', function (Blueprint $table) {
            $table->id();
            $table->string('cause');
            $table->date('starting_date');
            $table->string('description');
            $table->string('location');
            $table->unsignedBigInteger('host_id')->default(1);
            $table->unsignedBigInteger('city_id')->default(1);
//            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade');
//            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ride');
    }
}
