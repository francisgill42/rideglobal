<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->String('email');
            $table->String('request_status')->default("Pending");
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->SoftDeletes();
            $table->boolean('is_deleted')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosts');
    }
}
