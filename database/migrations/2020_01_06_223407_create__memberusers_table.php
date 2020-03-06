<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('iduser');
            $table->string('code')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname')->nullable();
            $table->string('age')->nullable();
            $table->string('date')->nullable();
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('telname2')->nullable();
            $table->string('tel3');
            $table->string('telname3')->nullable()
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('status2')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('_memberuser');
    }
}
