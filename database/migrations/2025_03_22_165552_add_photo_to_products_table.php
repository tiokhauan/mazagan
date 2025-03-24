<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('photo')->nullable();  // Adiciona o campo para armazenar o caminho da imagem
        });
    }
    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('photo');  // Remove o campo se necessário
        });
    }
};
