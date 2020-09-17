<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('user_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('birthday', 20)->nullable();
            $table->unsignedTinyInteger('gender');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->string('workplace')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
