<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_tds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('quarter');
            $table->string('entries');
            $table->string('filing_type');
            $table->string('mobile_number');
            $table->string('file_name');
            $table->string('comments');
            $table->enum('status',['File submited', 'Under Process', 'Filed'])->default('File submited');
            $table->string('form27A')->nullable();
            $table->string('form16/6A')->nullable();
            
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
        Schema::dropIfExists('submit_tds');
    }
}
