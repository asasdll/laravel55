<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     //idname', 'companyname','firstname','lastname','tle','tle2','address','city','postalcode','image','hashedRandomPassword
    public function up()
    {
        Schema::create('newcompanies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idname');
            $table->string('companyname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('image')->nullable();
            $table->string('newcode')->nullable()->unique();
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
        Schema::dropIfExists('newcompanies');
    }
}
