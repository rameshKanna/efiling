<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('deductor_name');
            $table->string('institute_name');
            $table->string('tan');
            $table->string('mobile_number');
            $table->string('alternate_mobile_number');
            $table->string('email')->unique();
            $table->string('flat');
            $table->string('building');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            
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
        Schema::dropIfExists('agent');
    }
}
