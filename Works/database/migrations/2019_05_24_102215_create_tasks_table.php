<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('professor_id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('name_english');
            $table->mediumText('description');
            $table->string('type');
            $table->timestamps();
        });

        DB::table('task')->insert(
            array(
                'name' => 'Prva tema',
                'name_english' => 'Subject One',
                'description' => 'This is description of subject one.',
                'type' => 'Preddiplomski',
                'professor_id' => 3,
            )
        );

        DB::table('task')->insert(
            array(
                'name' => 'Druga tema',
                'name_english' => 'Subject Two',
                'description' => 'This is description of subject two.',
                'type' => 'Stručni',
                'professor_id' => 3,
            )
        );

        DB::table('task')->insert(
            array(
                'name' => 'Treća tema',
                'name_english' => 'Subject Three',
                'description' => 'This is description of subject three.',
                'type' => 'Diplomski',
                'professor_id' => 3,
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
        Schema::dropIfExists('task');
    }
}
