<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('tour_type')->nullable();
            $table->string('days_detail')->nullable();
            $table->integer('days');
            $table->string('hotel_category')->nullable();
            $table->string('hotel_fair')->nullable();
            $table->integer('ticket_fair')->nullable();
            $table->longtext('preference')->nullable();
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
        Schema::dropIfExists('builds');
    }
}
