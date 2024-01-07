<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id');
            $table->integer('district_id');
            $table->string('address');
            $table->string('long_lat')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->integer('type_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('photo');
            $table->string('gallery')->nullable();
            $table->enum('raiting', ['1','2','3','4']);
            $table->integer('status');
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
        Schema::dropIfExists('organizations');
    }
};
