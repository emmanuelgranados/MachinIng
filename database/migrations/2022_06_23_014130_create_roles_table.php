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
    public function up() {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->boolean('activo')->default(1);
            $table->boolean('eliminado')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('roles');
    }
};
