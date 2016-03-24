<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenderApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenderApply', function (Blueprint $table) {
            $table->increments('apply_id');
            $table->string('tender_id');
            $table->string('company_name');
            $table->string('email');
            $table->integer('contact_no');
            $table->longText('contact_address');
            $table->longText('experience');
            $table->longText('eligibility');
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
