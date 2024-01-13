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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('profession_id');
            $table->string('name')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('bio');
            $table->date('birthdate')->nullable();
            $table->string('staff')->nullable();
            $table->string('phone');
            $table->string('photo');
            $table->string('sex')->nullable();
            $table->string('experience');
            $table->enum('status', ['1','2','3','4']);
            $table->integer('raiting');
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
        Schema::dropIfExists('people');
    }
};
