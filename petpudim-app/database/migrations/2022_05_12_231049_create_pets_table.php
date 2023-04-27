
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->string('raca')->nullable();
            $table->integer('idade')->nullable();
            $table->char('sexo');
            $table->boolean('castracao');
            $table->text('bio')->nullable();
            $table->string('especie');
            $table->char('tamanho');
            $table->integer('user_id');
            //$table->integer('user_id');
            $table->timestamps();

            $table->string('image_nome')->nullable();
            $table->string('image_local')->nullable();
            $table->string('pet_file')->nullable();

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
