<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuOptionMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_option_menu', function (Blueprint $table) {
            $table->increments('id');

            // menus 테이블에 대한 참조키
            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus');

            // option_menus 테이블에 대한 참조키
            $table->integer('option_menu_id')->unsigned();
            $table->foreign('option_menu_id')->references('id')->on('option_menus');

            // menu_id 와 option_menu_id 컬럼은 유일해야 함.
            $table->unique(['menu_id', 'option_menu_id']);

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
        Schema::dropIfExists('menu_option_menu');
    }
}
