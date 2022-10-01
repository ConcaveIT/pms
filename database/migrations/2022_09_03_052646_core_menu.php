<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoreMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_menu', function (Blueprint $table) {
            $table->id('menu_id');
            $table->integer('parent_id')->default(0);
            $table->string('module')->nullable();
            $table->string('url')->nullable();
            $table->string('menu_name')->nullable();
            $table->string('menu_type')->nullable();
            $table->string('role_id')->nullable();
            $table->string('deep')->nullable();
            $table->integer('ordering')->nullable();
            $table->string('position')->nullable();
            $table->string('menu_icons')->nullable();
            $table->integer('active')->default(1);
            $table->text('access_data')->nullable();
            $table->integer('allow_guest')->nullable()->default(0);
            $table->text('menu_lang')->nullable();
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
        Schema::dropIfExists('core_menu');
    }
}
