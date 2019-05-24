<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'AdminUser',
                'email' => 'admin@admin.com',
                //adminadmin
                'password' => '$2y$12$9m53xFMV8.xIhBRiQmfgV.JCdzt1u6I5CY2uZazzXHF2TN2uTnoVy',
                'role_id' => 1,
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'Luka Zagar',
                'email' => 'lzagar@etfos.hr',
                //studentstudent
                'password' => '$2y$12$x74mSa6iKhAZkZgElwo2weXrrUnhnaeYyO4pagaDfcbtWQyHDEcRq',
                'role_id' => 2,
            )
        );

        DB::table('users')->insert(
            array(
                'name' => 'Ivica Lukic',
                'email' => 'ivica.lukic@ferit.hr',
                //professor
                'password' => '$2y$12$UU4eqfhHt4gXR3W9XhusKuI0ND1VVmU//tJU3H18hstHw8cZgD0Sm',
                'role_id' => 3,
            )
        );
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
