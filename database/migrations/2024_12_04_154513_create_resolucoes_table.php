<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolucoes', function (Blueprint $table) {
            $table->id();
            $table->integer('acertou');
            $table->integer('errou');
            //$table->enum('tipo', ['adicao', 'multiplicacao', 'divisao', 'subtracao']);
            $table->integer('pontuacao');
            $table->string('tipo');

            //$table->unsignedBigInteger('usuario_id');
            //$table->unsignedBigInteger('operacoes_id'); 

            /* relacionamentos */
            //$table->foreign('usuario_id')->references('id')->on('users')->cascadeOnDelete();
            //$table->foreign('operacoes_id')->references('id')->on('operacoes')->cascadeOnDelete();






            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
           // $table->foreignId('operacoes_id')->constrained('operacoes')->onDelete('cascade');
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
        Schema::dropIfExists('resolucaos');
    }
};
