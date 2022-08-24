<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('link');
            $table->string('background',30)->default('transparent')->nullable();
            $table->string('speed',2)->nullable()->nullable();
            $table->integer('loop')->default(1)->nullable();
            $table->integer('autoplay')->default(1)->nullable();
            $table->integer('controls')->default(0)->nullable();
            $table->integer('hover')->default(0)->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->integer('activeStatus')->default(1)->nullable();
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
        Schema::dropIfExists('users');
    }
}
