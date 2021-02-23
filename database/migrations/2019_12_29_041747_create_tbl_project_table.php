<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('user_id');
            $table->string('member1_name');
            $table->string('member1_reg');
            $table->string('member2_name');
            $table->string('member2_reg');
            $table->string('session_id');
            $table->string('course_id');
            $table->string('type_id');
            $table->string('teacher_id');
            $table->string('Project_name');
            $table->longText('Project_description');
            $table->string('Project_image');
            $table->string('Github_link');
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
        Schema::dropIfExists('tbl_project');
    }
}
