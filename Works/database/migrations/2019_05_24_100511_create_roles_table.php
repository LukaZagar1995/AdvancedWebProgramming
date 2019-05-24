<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('role')->insert(
            array(
                'name' => 'Admin',
            )
        );

        DB::table('role')->insert(
            array(
                'name' => 'Student',
            )
        );

        DB::table('role')->insert(
            array(
                'name' => 'Professor',
            )
        );

        DB::table('role')->insert(
            array(
                'name' => 'Default',
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
        Schema::dropIfExists('role');
    }
}
