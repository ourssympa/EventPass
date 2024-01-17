<?php

use App\Models\Categorie;
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
        Schema::create('categories',function (Blueprint $table){
            $table->id();
            $table->string('libelle')->unique();
            $table->timestamps();

        });

        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description')->nullable();
            $table->string('path')->nullable();
            $table->integer('agelimite')->default(0);
            $table->string('lieu');
            $table->date('date');
            $table->foreignId('categorieid')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
        Schema::dropIfExists('categories');
    }
};
