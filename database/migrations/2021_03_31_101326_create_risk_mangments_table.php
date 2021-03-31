<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskMangmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_mangments', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('subject');
            $table->string('inhernRisk');
            $table->string('submissionDate');
            $table->string('migrationPlanned');
            $table->string('mangmantReview');

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
        Schema::dropIfExists('risk_mangments');
    }
}
