<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('designation');
            $table->mediumText('description')->nullable();
            $table->string('phone');
            $table->dateTime('dob', $precision = 0);
            $table->string('email');
            $table->string('address');
            $table->integer('salary_id');
            $table->string('nationality');
            $table->string('religion');
            $table->string('merital_status');
            $table->string('passport_no')->nullable();
            $table->string('nid_no')->nullable();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->string('bank_name')->nullable();
            $table->string('bank_ac_name')->nullable();
            $table->string('bank_ac_no')->nullable();
            $table->string('bank_ac_routing')->nullable();
            $table->mediumText('mfs_details')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('members');
    }
}
