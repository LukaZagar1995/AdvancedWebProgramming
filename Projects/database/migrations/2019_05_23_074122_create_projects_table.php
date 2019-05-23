<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('description');
            $table->float('price');
            $table->mediumText('done_jobs')->nullable();
            $table->date('start_time');
            $table->date('end_time');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('project_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        DB::table('project')->insert(
            array(
                'name' => 'Project One',
                'description' => 'This is description for project one.',
                'price' => 1200,
                'done_jobs' => 'This list of done jobs for project one.',
                'start_time' => '2019-05-25',
                'end_time' => '2019-05-29',
                'user_id' => 1,
            )
        );

        DB::table('project')->insert(
            array(
                'name' => 'Project Two',
                'description' => 'This is description for project two.',
                'price' => 1500,
                'done_jobs' => 'This list of done jobs for project two.',
                'start_time' => '2019-05-25',
                'end_time' => '2019-10-29',
                'user_id' => 1,
            )
        );

        DB::table('project')->insert(
            array(
                'name' => 'Project Three',
                'description' => 'This is description for project three.',
                'price' => 7000,
                'done_jobs' => 'This list of done jobs for project three.',
                'start_time' => '2019-05-25',
                'end_time' => '2019-08-29',
                'user_id' => 1,
            )
        );

        DB::table('project')->insert(
            array(
                'name' => 'Project Four',
                'description' => 'This is description for project four.',
                'price' => 5000,
                'done_jobs' => 'This list of done jobs for project four.',
                'start_time' => '2019-06-25',
                'end_time' => '2019-06-29',
                'user_id' => 1,
            )
        );

        DB::table('project')->insert(
            array(
                'name' => 'Project Five',
                'description' => 'This is description for project five.',
                'price' => 2000,
                'done_jobs' => 'This list of done jobs for project five.',
                'start_time' => '2019-05-25',
                'end_time' => '2019-05-30',
                'user_id' => 1,
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
        Schema::dropIfExists('project');
    }
}
