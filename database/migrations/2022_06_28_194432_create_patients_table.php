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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email') -> unique();
            $table->string('mobile') -> unique();
            $table->text('password');
            $table->integer('age') -> nullable();
            $table->string('date_of_birth') -> nullable();
            $table->string('addrass') -> nullable();
            $table->text('photo') -> nullable();
            $table->string('country') -> nullable();
            $table->string('city') -> nullable();
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);
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
        Schema::dropIfExists('patients');
    }
};
