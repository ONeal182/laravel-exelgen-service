<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOjrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ojrs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('id_user');
            $table->text('id_aosr')->nullable();
            $table->text('date_start');
            $table->text('date_end');
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
        Schema::dropIfExists('ojrs');
    }
}
