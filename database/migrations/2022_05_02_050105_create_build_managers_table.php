<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_managers', function (Blueprint $table) {
            $table->id();
            $table->string('tour_type')->nullable();
            $table->integer('days')->nullable();
            $table->string('days_detail')->nullable();
            $table->integer('days_expenses')->nullable();
            $table->string('hotel')->nullable();
            $table->string('hotel_category')->nullable();
            $table->integer('hotel_fair')->nullable();
            $table->string('ticket_class')->nullable();
            $table->integer('ticket_fair')->nullable();
            $table->integer('others_expenses')->nullable();
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
        Schema::dropIfExists('build_managers');
    }
}
