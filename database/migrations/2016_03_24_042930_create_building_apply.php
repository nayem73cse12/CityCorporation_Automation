<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildingApply', function (Blueprint $table) {
            $table->increments('apply_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->string('nationalId');
            $table->string('phoneNo');
            $table->string('email');
            $table->string('location');
            $table->string('area');
            $table->string('floorAmount');
            $table->string('status');
            
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
        //
    }
}
