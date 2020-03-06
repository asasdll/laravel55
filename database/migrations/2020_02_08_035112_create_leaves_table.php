<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idmember');
            $table->string('affair');
            $table->string('head');
            $table->string('lea_fname');
            $table->string('lea_lname');
            $table->string('lea_niname')->nullable();
            $table->string('position');
            $table->string('leave');
            $table->string('since');
            $table->string('date1');
            $table->string('date2');
            $table->string('da');
            $table->string('address')->nullable();
            $table->string('tel');
            $table->string('image')->nullable();
            $table->string('status_chief')->nullable();
            $table->string('status_text1')->nullable();
            $table->string('status_hr')->nullable();
            $table->string('status_text2')->nullable();
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
        Schema::dropIfExists('leaves');
    }
}
