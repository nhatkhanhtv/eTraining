<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthenticatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('role_name');
            $table->string('label');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->timestamps();
            $table->foreign('user_id')
                ->references(('id'))
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references(('id'))
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('permission_name');
            $table->string('label');
            $table->timestamps();
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');
            $table->timestamps();
            $table->foreign('permission_id')
                ->references(('id'))
                ->on('permissions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references(('id'))
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
