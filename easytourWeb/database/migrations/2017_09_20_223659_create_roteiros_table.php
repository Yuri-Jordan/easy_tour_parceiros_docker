<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoteirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteiros', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('categoria_id');
            $table->string('nome', 100);
            $table->text('descricao');
            $table->decimal('media_avaliacao', 5, 4);
            $table->bigInteger('qte_avaliacoes');
            $table->integer('qte_pontos');
            $table->timestamp('criado_em');
            $table->timestamp('atualizado_em');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roteiros');
    }
}
