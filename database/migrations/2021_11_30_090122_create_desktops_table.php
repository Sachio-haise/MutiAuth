<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesktopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desktops', function (Blueprint $table) {
            $table->increments('id');
            $table->text('brand');
            $table->integer('ram');
            $table->integer('ssd');
            $table->text('graphic');
            $table->text('generation');
            $table->integer('price');
            $table->string('file');
            $table->text('modaltitle');
            $table->text('modalbrand');
            $table->text('modaldescription');
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
        Schema::dropIfExists('desktops');
    }
}
