<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->integer('category')->nullable();
            $table->string('name');
            $table->string('title');
            $table->longtext('description')->nullable();
            $table->string('starts_at')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('span')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('meta_title')->nullable();
            $table->longtext('meta_description')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
