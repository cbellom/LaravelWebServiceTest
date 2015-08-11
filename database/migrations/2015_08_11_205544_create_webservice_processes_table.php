<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebserviceProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('description');
            $table->string('schedule');
            $table->float('cost');
            $table->string('additionalInformation');
            $table->string('requisitesURL');
            $table->string('legislationURL');
            $table->string('entity');
            $table->string('responseTime');
            $table->string('pointsOfService');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('processes');//
    }
}
