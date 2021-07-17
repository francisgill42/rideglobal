<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->SoftDeletes();
            $table->boolean('is_deleted')->default(0);
            $table->boolean('status')->default(1);
            $table->String('name');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('host_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}