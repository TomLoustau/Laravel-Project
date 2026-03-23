<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estpassager', function (Blueprint $table) {
            $table->foreignId('idEmp')->constrained('employes');
            $table->foreignId('idTrajet')->constrained('trajet');
            $table->primary(['idEmp', 'idTrajet']);
            $table->dateTime('dateInscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
//    public function down(): void
//    {
//        Schema::dropIfExists('estpassager');
//    }
};
