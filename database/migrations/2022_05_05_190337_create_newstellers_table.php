<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewstellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstellers', function (Blueprint $table) {
            $table->id();
            $table->boolean('approval')->nullable();
            $table->string('news_title')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('source')->nullable();
            $table->longtext('news')->nullable();
            $table->longtext('blog')->nullable();
            $table->string('image')->nullable();
            $table->timestamp("published_on")->nullable();
            $table->timestamps()->format('l jS \\of F Y h:i:s A');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newstellers');
    }
}
