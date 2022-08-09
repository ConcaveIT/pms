<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
           $table->id();$table->integer("parent_id")->nullable();$table->string("module")->nullable();$table->text("title")->nullable();$table->string("menu_type")->nullable();$table->integer("sort_order")->default("0")->nullable();$table->string("menu_icon")->nullable();$table->string("permission_title")->nullable();$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
