<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('office_1')->nullable();
            $table->string('office_2')->nullable();
            $table->string('office_3')->nullable();
            $table->string('office_4')->nullable();
            $table->longtext('description')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
