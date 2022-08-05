<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_author')->references('id')->on('users');
            $table->foreignId('id_sector')->references('id')->on('sectors');
            $table->foreignId('id_employees')->references('id')->on('employees');
            $table->boolean('show');
            $table->boolean('save');
            $table->boolean('update');
            $table->boolean('destroy');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions_profiles');
    }
}
