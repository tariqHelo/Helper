<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('affected');
            $table->string('affectedProperty');
            $table->string('likelihood');
            $table->string('impact');
            $table->string('inherentRiskScore');
            $table->string('control');
            $table->string('treatmentDescription');
            $table->string('riskCustodian');
            $table->string('riskOwner');
            $table->string('treatmentDueDate');
            $table->string('status');
            $table->string('residualRiskScore');
            $table->string('riskValue');



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
        Schema::dropIfExists('risk');
    }
}
