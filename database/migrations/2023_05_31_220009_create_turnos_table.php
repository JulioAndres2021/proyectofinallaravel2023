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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medico_id');
            $table->date('fecha');
            $table->string('t800')->nullable();
            $table->string('t815')->nullable();
            $table->string('t830')->nullable();
            $table->string('t845')->nullable();
            $table->string('t900')->nullable();
            $table->string('t915')->nullable();
            $table->string('t930')->nullable();
            $table->string('t945')->nullable();
            $table->string('t1000')->nullable();
            $table->string('t1015')->nullable();
            $table->string('t1030')->nullable();
            $table->string('t1045')->nullable();
            $table->string('t1100')->nullable();
            $table->string('t1115')->nullable();
            $table->string('t1130')->nullable();
            $table->string('t1145')->nullable();
            $table->string('t1200')->nullable();
            $table->string('t1215')->nullable();
            $table->string('t1230')->nullable();
            $table->string('t1245')->nullable();
            $table->string('t1600')->nullable();
            $table->string('t1615')->nullable();
            $table->string('t1630')->nullable();
            $table->string('t1645')->nullable();
            $table->string('t1700')->nullable();
            $table->string('t1715')->nullable();
            $table->string('t1730')->nullable();
            $table->string('t1745')->nullable();
            $table->string('t1800')->nullable();
            $table->string('t1815')->nullable();
            $table->string('t1830')->nullable();
            $table->string('t1845')->nullable();
            $table->string('t1900')->nullable();
            $table->string('t1915')->nullable();
            $table->string('t1930')->nullable();
            $table->string('t1945')->nullable();
            $table->string('t2000')->nullable();
            $table->string('t2015')->nullable();
            $table->string('t2030')->nullable();
            $table->string('t2045')->nullable();
            $table->string('adicional1')->nullable();
            $table->string('adicional2')->nullable();
            $table->string('adicional3')->nullable();
            $table->string('adicional4')->nullable();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
