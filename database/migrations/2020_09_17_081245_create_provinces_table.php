<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('code')->nullable();
            $table->string('name');
            $table->timestamps();
        });


        Schema::create('districts', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('province_id');
            $table->string('code')->nullable();
            $table->string('name');
            $table->timestamps();

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('profiles', function (Blueprint $table) {
            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
