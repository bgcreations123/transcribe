<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *`user_id`, `file_name`, `project_id`, `name`, `length`, `accent`, `amount_per_minute`, `total_amount`, `due_in`, `no_of_speakers`, `title`, `instructions`, `job_type`, `project_type`, `subject`,
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('file_name');
            $table->integer('project_id');
            $table->string('name');
            $table->integer('length');
            $table->string('accent');
            $table->string('amount_per_minute');
            $table->string('total_amount');
            $table->date('due_in');
            $table->integer('no_of_speakers');
            $table->string('title');
            $table->text('instructions');
            $table->string('job_type');
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
        Schema::dropIfExists('jobs');
    }
}
