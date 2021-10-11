<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('position');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::create('section_item', function (Blueprint $table) {
            $table->increments('item_id');
            $table->unsignedInteger('section_id');
            $table->string('name');
            $table->mediumText('description');
            $table->double('price');
            $table->integer('position');
            $table->boolean('active');
            $table->foreign('section_id')
                ->references('id')
                ->on('section')
                ->onDelete('cascade');
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
        Schema::dropIfExists('section_item');
        Schema::dropIfExists('section');
    }
}
