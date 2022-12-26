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
        // Criação da tabela filiais
        Schema::create('filiais',function(Blueprint $table){
            $table->id() ;
            $table->string('filial',50) ;
            $table->timestamps();
        });
    
        // Criação da tabela produto_filiais
        Schema::create('produto_filiais',function(Blueprint $table){
            $table->id() ;
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_máximo');
            $table->timestamps();

            // Relacionamento muitos pra muitos necessita de uma tabela intermediária
            // contendo as chaves primárias das tabelas do relacionamento
            
            // Chaves estrangeiras (Foreign Keys) Constraints 
            $table->foreign('filial_id')->references('id')->on('filiais') ;
            $table->foreign('produto_id')->references('id')->on('produtos') ;
        });

        // Refactory: Removendo colunas em produtos (preco_venda/estoque_minimo/estoque_maximo)
        Schema::table('produtos', function(Blueprint $table){
            // $table->dropColumn('preco_venda');
            // $table->dropColumn('estoque_minimo');
            // $table->dropColumn('estoque_maximo');
            $table->dropColumn(['preco_venda','estoque_minimo','estoque_maximo']) ;
        });

    }    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos',function(Blueprint $table){
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
        });

        Schema::dropIfExists('produto_filiais') ;

        Schema::dropIfExists('filiais') ;

    }
};
