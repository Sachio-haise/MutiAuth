<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_t_s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('model');
            $table->text('brand');
            $table->text('screensize');
            $table->text('operationsystem');
            $table->text('storage');
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
        Schema::dropIfExists('p_t_s');
    }
}
