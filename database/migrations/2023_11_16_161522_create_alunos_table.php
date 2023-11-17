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
        Schema::create('tb_alunos', function (Blueprint $table) {
            $table->id('cd_aluno')->autoIncrement();
            $table->string('nm_aluno', 255);
            $table->string('nm_curso', 255);
            $table->integer('nu_ano');
            $table->integer('nu_semestre')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_alunos');
    }
};
