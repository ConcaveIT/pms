<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('client_ids');
            $table->string('member_ids');
            $table->integer('project_manager_id');
            $table->integer('total_hour');
            $table->dateTime('deadline', $precision = 0);
            $table->integer('total_worth');
            $table->string('srs');
            $table->mediumText('description')->nullable();
            $table->string('related_documents')->nullable();
            $table->integer('department_id');
            $table->integer('is_deleted')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('projects');
    }
}
