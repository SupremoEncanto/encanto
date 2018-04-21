<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coristas', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->date('joined_at');
            $table->date('left_on')->nullable();
            $table->tinyInteger('naipe_id', false, true)->length(2);
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
        Schema::dropIfExists('coristas');
    }
}
